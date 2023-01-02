<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
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
            'Title'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'video'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'Categorie'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'image'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'Body'=>[
                'type'=>'TEXT',
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
        $this->forge->addKey('ID',true);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
