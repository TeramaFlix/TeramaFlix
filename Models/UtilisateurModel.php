<?php

namespace App\Models;
use CodeIgniter\CodeIgniter;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nom','Prenom','Photo','Cover','Naissance','Genre','Mail','Phone','Pays','Password'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function verifyPhone($mail){
        $build= $this->db->table('users');
        $build->select('Password');
        $build->where('Phone',$mail);
        $resul= $build->get();
        if(count($resul->getResultArray())==1){
            return $resul->getRowArray();
            

        }
        else{
            return false;
        }
    }

    public function verifyEmail($mail){
        $builder= $this->db->table('users');
        $builder->select('Password');
        $builder->where('Mail',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;
        }
        else{
            
           return false;
        }
    }
    public function getIdm($mail){
        $builder= $this->db->table('users');
        $builder->select('ID');
        $builder->where('Mail',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;

        }
        else{
            
           return false;
        }
    }
    public function getIdp($mail){
        $builder= $this->db->table('users');
        $builder->select('ID');
        $builder->where('Phone',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;

        }
        else{
            
           return false;
        }
    }
    public function getUserInfo($id){
        $builder= $this->db->table('users');
        $builder->select('*');
        $builder->where('ID',$id);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }
        else{
           return false;
        }
    }
}