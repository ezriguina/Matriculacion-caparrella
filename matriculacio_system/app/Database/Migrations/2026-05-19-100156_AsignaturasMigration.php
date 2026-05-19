<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AsignaturasMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_asig' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'codigo' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true,
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'comment'    => 'normal | optativa'
            ],
            'precio' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_asig', true);
        $this->forge->createTable('asignaturas');
    }

    public function down()
    {
        $this->forge->dropTable('asignaturas');
    }
}