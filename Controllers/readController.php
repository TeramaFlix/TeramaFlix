<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use App\Models\ViewsModel;
use App\Models\LikesModel;
use App\Models\CommentsModel;
use App\Models\UtilisateurModel;

class readController extends BaseController
{
    public $like;
    public function __construct(){
        helper(['url','Form']);
        $this->like=new LikesModel();
    }
    public function index()
    {
        $con = \config\Database::connect();
        $querys = $con->query("select * from video order by rand() limit 5");
        $rs['mVideo'] = $querys->getResult();
        $query = $con->query("select * from video order by rand()");
        $rs['video'] = $query->getResult(); 
        echo view('index',$rs);
    }
    public function play(){
        $user=new UtilisateurModel();
        $con = \config\Database::connect();
        $video = $this->request->getVar('v');
        $query = $con->query("select * from video order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $title = $con->query("select * from video where ID='".$video."'");
        $comments = $con->query("select * from commentaire WHERE Post='".$video."'");
        $rs['comments'] = $comments->getResult();
        $rs['title'] = $title->getResult();
        $rs['myVideo'] = $rs['title'];
        $rs['like'] = $this->like->liked(4,$video);
        $user_id=session()->get('loggedUser');
        $rs['user']=$user->getUserInfo($user_id);
        echo view('Player',$rs); 
    }
    public function verifyliked()
    {
        $user=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user = $user->getUserInfo($user_id)['ID'];
        $video = $this->request->getPost('video');
        $liked = $this->like->liked($user,$video);
        if($liked){
            return $this->response->setJSON([
                'error'=>false,
                'message'=>$liked->Etat,
            ]);
        }else{
            return $this->response->setJSON([
                'error'=>false,
                'message'=>'2',
            ]);
        }
    }
    public function liked()
    {
        $LikesModel = new LikesModel();
        $user=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user = $user->getUserInfo($user_id)['ID'];
        $video = $this->request->getPost('video');
        $stat = $this->request->getPost('status');
        $liked = $this->like->liked($user,$video);
        if (!$liked) {
            if ($stat == 1) {
                $status= true;
            } else if ($stat == 0){
                $status= false;
            }
            $data = [
                'Post'=>$video,
                'User'=>$user,
                'Type'=>'p',
                'Etat'=>$status
            ];
            $LikesModel->insert($data);
        }else if ($stat == 1 && $liked->Etat == 0){
                $status= true;
                $data = [
                    'Post'=>$video,
                    'User'=>$user,
                    'Type'=>'p',
                    'Etat'=>$status
                ];
                $LikesModel->update($liked->ID, $data);
        } else if ($stat == $liked->Etat) {
                $LikesModel->delete($liked->ID);
        } else {
            $status= false;
            $data = [
                'Post'=>$video,
                'User'=>$user,
                'Type'=>'p',
                'Etat'=>$status
            ];
            $LikesModel->update($liked->ID,$data);
        } 
        $liked = $this->like->liked($user,$video);
        if($liked){
            return $this->response->setJSON([
                'error'=>false,
                'message'=>$liked->Etat,
            ]);
        }else{
            return $this->response->setJSON([
                'error'=>false,
                'message'=>'2',
            ]);
        } 

    }
    public function addview()
    {
        $view = new ViewsModel();
        $video = $this->request->getPost('video');
        $user=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user = $user->getUserInfo($user_id)['ID'];
        $data = [
            'Post'=> $video,
            'User'=>$user,
            'type'=>'p'
        ];
        $view->insert($data);
    }
    public function comment()
    {
        $user=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user = $user->getUserInfo($user_id)['ID'];
        $video = $this->request->getPost('video');
        $comment = $this->request->getPost('comment');

        $data = [
            'Post'=>$video,
            'User'=>$user,
            'Body'=>$comment
        ];
        $CommentsModel = new CommentsModel();
        $CommentsModel->insert($data);
        $con = \config\Database::connect();
        $res = $con->query("select * from commentaire where Post='".$video."'");
        $data = $res->getResult();
        $res = '';
        foreach($data as $data){
            $res.='<div class="userComment flex flex-row space-x-1  mb-5">
            <div class="userProfil  cursor-pointer w-[10%] ">';
            if ($data->Photo) {
                $res.='<img src="'.base_url().'/Thumbnails/'.$data->Photo.'" class="w-10 h-9  rounded-full " alt="logo">';
            } else {
                $res.=  '<img src="'.base_url().'/img/logo.png" class="w-10 h-9  rounded-full " alt="logo">';
            }
            $res.='
            </div>
            <div class="userTextComment bg-blue-500 max-w-[90%] rounded-lg px-[20px] py-[6px]">
                <h5 class="userName font-semibold">'.$data->Nom.'</h5>
                <p class="leading-[1rem]">'.$data->Body.'</p>
            </div>
        </div>';
        } 
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$res
        ]);
    }
    
    //handle fetch post's titles searched ajax request
    public function search()
    {
        $value = $this->request->getPost('query');
        $con = \config\Database::connect();
        $post = $con->query("select * from posts where Title LIKE '%".$value."%' limit 10");
        $query = $post->getResult();
        $data = '';
        foreach($query as $query){
            $data.='<a href="'.base_url().'/results?search='.$value.'">
            <div class="cursor-pointer py-2 px-3 hover:bg-slate-100">
            <p id="'.$query->ID.'" class="searched text-sm font-medium text-gray-600">'.substr($query->Title,0,50).'...</p>
          </div>
          </a>';
        }
        return $data;
    }
    //handle fetch post's results searched ajax request
    public function results()
    {
        $user = new UtilisateurModel();
        $con = \config\Database::connect();
        $value = $this->request->getVar('search');
        $post = $con->query("select * from video where Title LIKE '%".$value."%'");
        $rs['video'] = $post->getResult();
        $user_id=session()->get('loggedUser');
        $rs['user']=$user->getUserInfo($user_id);
        $rs['search'] = $value;
        echo view('Results',$rs); 
    }
} 


