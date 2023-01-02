<?php

namespace App\Controllers;
use App\Models\UtilisateurModel;
use App\Libraries\hash;
class Home extends BaseController
{
    public function __construct(){
        helper(['url','Form']);
    }
    public function index()
    {
        return view('index');
    }
    public function Registration()
    {
        return view('register');
    }
    public function log()
    {
      $con = \config\Database::connect();
      $querys = $con->query("select * from video order by rand() limit 5");
      $rs['mVideo'] = $querys->getResult();
      $query = $con->query("select * from video order by rand()");
      $rs['video'] = $query->getResult();
        return view('index',$rs);
    }

    public function Login(){
      // $usermod = new UtilisateurModel();
      $validation=$this->validate([
        'mail'=>[
                'rules'=>'required|valid_email|is_not_unique[users.mail]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid Email address',
                    'is_not_unique'=>'This Email is not registered on our service',
                 ]
                ],
        'password'=>[
                        'rules'=>'required|min_length[4]|max_length[7]',
                        'errors'=>[
                        'required'=>'password is required',
                        'min_length'=>'password at least 5 character in length',
                        'max_length'=>'password must not have more than 7 character in length',
                       ]
                    ],
                ]);
        
                if(!$validation)
                {
                    return view('index',['validation'=>$this->validator]);
                }else{
                  $login=new UtilisateurModel();
                  $mail = $this->request->getPost('mail');
                  $pass = $this->request->getPost('password');
                  $user=$login->verifyEmail($mail);
                  $phone_number=$login->verifyPhone($mail);
                  if ($user) {
                    if(password_verify($pass,$user['Password'])){
                     $id = $login->getIdm($mail);  
                     session()->set('loggedUser',$id);
                     return redirect()->to('/');
                    }
                    else{
                      return redirect()->back()->with('fail','Incorrect password');
                    }
                  } 
                  elseif($phone_number){
                  if(password_verify($pass,$phone_number['Password'])){
                    $id = $login->getIdp($mail); 
                     session()->set('loggedUser',$id);
                     return redirect()->to('/');
                  }
         }
        }
    }
    
    //aja request register new user
    public function Register(){
      $validation= $this->validate([
       
              'nom'=>['rules'=>'required',
              'errors'=>['required'=>'full name please']
           ],
           'prenom'=>['rules'=>'required',
              'errors'=>['required'=>'full name please']
           ],
           'datenaissance'=>['rules'=>'required|valid_date',
              'errors'=>['required'=>'put date please',
              'valid_date'=>'put the correct format of date please']
           ],
           'phone'=>['rules'=>'required|numeric',
              'errors'=>['required'=>'phone required please',
              'numeric'=>'Incorrect Phone']
           ],
           'gender'=>['rules'=>'required|alpha',
              'errors'=>['required'=>'Gender required please',
              'alpha'=>' gender must be alpha']
           ],
                   'mail'=>[
                   'rules'=>'required|valid_email|is_unique[users.mail]',
                    'errors'=>['required'=>'Email is required',
                    'valid_email'=>'you must enter a valid email',
                    'is_unique'=>'Email already taken']
           ],
                      'password'=>['rules'=>'required|min_length[4]|max_length[7]',
                      'errors'=>['required'=>'password is required',
                      'min_length'=>'password at least 5 character in length',
                      'max_length'=>'password must not have more than 7 character in length',
                      'is_unique'=>'Email already taken']
           ],
                      'cpassword'=>['rules'=>'required|min_length[4]|max_length[7]|matches[password]',
                      'errors'=>['required'=>'confirm password is required',
                      'min_length'=>'confirm password at least 4 character in length',
                      'max_length'=>'confirm password must not havemore than 7 character in length',
                      'matches'=>'confirm password not matches to password']
           ],
           ]);
           if(!$validation)
        {
            return view('register',['validation'=>$this->validator]);
        }
        else{
          $user = new UtilisateurModel();
          $sexe=$this->request->getPost('gender');
          if($sexe == "M") $sexe="M";
          else if($sexe == "F") $sexe ="F";
          $values=[
             'ID'=>"us10",
             'Nom'=>$this->request->getPost('nom'),
             'Prenom'=>$this->request->getPost('prenom'),
             'Mail'=>$this->request->getPost('mail'),
             'Password'=>password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
             'Phone'=>$this->request->getPost('phone'),
             'Naissance'=>$this->request->getPost('datenaissance'),
             'Genre'=>$sexe,
          ];
          //$mail = $this->request->getPost('mail');
          $query=$user->insert($values);
          if(!$query)
               {
                return redirect()->back()->with('fail','something went wrong');
               }else{
                  // $id = $this->login->getIdm($mail);
                  $id=$user->insertID();
                  session()->set('loggedUser',$id);
                  return redirect()->to('/');
               }
        }            
      }
      //dashboard function
      public function dashboard(){
         $con = \config\Database::connect();        
         $querys = $con->query("select * from video order by rand() limit 5");
         $rs['mVideo'] = $querys->getResult();
         $query = $con->query("select * from video order by rand()");
         $rs['video'] = $query->getResult(); 
         $user_id=session()->get('loggedUser');
         $user=new UtilisateurModel();
         $rs['user']=$user->getUserInfo($user_id);
         return view("dashboard",$rs);
       }
      public function Logout()
      {
          if(session()->has('loggedUser')){
              session()->remove('loggedUser');
              return redirect()->to('/')->with('fail','you are logged out!!');
          }
      }
}
