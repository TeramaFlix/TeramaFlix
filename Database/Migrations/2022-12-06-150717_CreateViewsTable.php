<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateViewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post'=>[
                'type'=>'INT'
            ],
            'user'=>[
                'type'=>'INT'
            ],
            'Date_vue'=>[
                'type'=>'DATETIME',
                'null'=>false,
            ]
        ]);
        $this->forge->addKey(['post','user'],true);
        $this->forge->createTable('ViewsTable');
        $this->forge->addForeignKey('user','users','ID');
    }

    public function down()
    {
            $this->forge->dropTable("ViewsTable");
    }
}
