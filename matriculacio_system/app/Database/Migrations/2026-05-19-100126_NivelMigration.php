<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NivelMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nivel' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'codigo' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true,
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
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

        $this->forge->addKey('id_nivel', true);
        $this->forge->createTable('niveles');
    }

    public function down()
    {
        $this->forge->dropTable('niveles');
    }
}