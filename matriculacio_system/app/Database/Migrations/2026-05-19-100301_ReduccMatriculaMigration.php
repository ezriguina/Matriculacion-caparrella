<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReduccMatriculaMigration extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'matricula_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'reduccion_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey(['matricula_id', 'reduccion_id'], true);

        $this->forge->addForeignKey('matricula_id', 'matricula', 'id_matricula');
        $this->forge->addForeignKey('reduccion_id', 'reducciones', 'id_reduccion');
        
        $this->forge->createTable('matricula_reduccion');
    }
     
    public function down()
    {
        $this->forge->dropTable('matricula_reduccion');
    }
}
