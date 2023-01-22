<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nomApe' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ocupacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'asesor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'depart' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ciudad' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'codPos' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'instEst' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'PDFPresentacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'PDFSeguro' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'PDFIdentificacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'FotoInd' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios');
    }
}