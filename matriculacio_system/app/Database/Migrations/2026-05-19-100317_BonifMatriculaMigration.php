<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BonifMatriculaMigration extends Migration
{
        public function up()
    {
        $this->forge->addField([
            'matricula_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'bonificacion_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey(['matricula_id', 'bonificacion_id'], true);

        $this->forge->addForeignKey('matricula_id', 'matricula', 'id_matricula');
        $this->forge->addForeignKey('bonificacion_id', 'bonificaciones', 'id_bonificacion');

        $this->forge->createTable('matricula_bonificacion');
    }

    public function down()
    {
        $this->forge->dropTable('matricula_bonificacion');
    }
}
