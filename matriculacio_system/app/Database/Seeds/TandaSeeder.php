<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TandaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nom_tandada'  => 'Tanda Enero 2026',
                'fecha_inici'  => '2026-01-01',
                'fecha_fin'    => '2026-01-31',
                'estado'       => 'activa',
                'created_at'   => date('Y-m-d H:i:s'),
                'deleted_at'   => null,
            ],
            [
                'nom_tandada'  => 'Tanda Febrero 2026',
                'fecha_inici'  => '2026-02-01',
                'fecha_fin'    => '2026-02-28',
                'estado'       => 'finalizada',
                'created_at'   => date('Y-m-d H:i:s'),
                'deleted_at'   => null,
            ],
            [
                'nom_tandada'  => 'Tanda Marzo 2026',
                'fecha_inici'  => '2026-03-01',
                'fecha_fin'    => '2026-03-31',
                'estado'       => 'pendiente',
                'created_at'   => date('Y-m-d H:i:s'),
                'deleted_at'   => null,
            ],
        ];

        $this->db->table('tandadas')->insertBatch($data);
    }
}