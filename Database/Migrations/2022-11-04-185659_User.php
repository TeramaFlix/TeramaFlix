<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'Nom'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'Prenom'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'Email'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'Phone'=>[
                'type'=>'INT',
            ],
            'Naissance'=>[
                'type'=>'DATETIME',
            ],
            'Sexe'=>[
                'type'=>'CHAR',
                'constraint'=>1,
            ],
            'Created_at'=>[
                'type'=>'DATETIME',
                'null'=>true,
            ],
            'Updated_at'=>[
                'type'=>'DATETIME',
                'null'=>true,
            ],
        ]);
        $this->forge->addKey("ID",true);
        $this->forge->createTable("users");
    }
    
    public function down()
    {
        $this->forge->dropTable("users");
    }
}
