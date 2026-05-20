<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlumneTutorMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'alumno_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'tutor_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey(['alumno_id', 'tutor_id'], true);

        $this->forge->addForeignKey('alumno_id', 'alumne', 'id_alumne');

        $this->forge->addForeignKey('tutor_id', 'tutor_legal', 'id_tutor');
        $this->forge->createTable('alumno_tutor');
       }

    public function down()
    {
        $this->forge->dropTable('alumno_tutor');
    }
}