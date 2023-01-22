<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = "8024";
        $password = password_hash("2402",PASSWORD_DEFAULT);
        $type = "Prestador";
        $nombre = "Rasec Cortes Alvarado";
        $ocupa = "Estudiante";
        $email = "L17320819@acapulco.tecnm.mx";
        $tele = "7445163179";
        $ase = "Jose Manuel Flores Delgado";
        $depart = "Direccion de sistemas y comunicaciones";
        $ciud = "Acapulco";
        $cp = "39700";
        $insti = "Instituto Tecnologico de Acapulco";
        $PDFPre = "";
        $PDFSeg = "";
        $PDFIden = "";
        $FotoIn = "";

        $data = [
            'usuario' => $usuario,
            'password'    => $password,
            'type' => $type,
            'nomApe' => $nombre,
            'ocupacion'    => $ocupa,
            'email' => $email,
            'tel' => $tele,
            'asesor'    => $ase,
            'depart' => $depart,
            'ciudad' => $ciud,
            'codPos'    => $cp,
            'instEst' => $insti,
            'PDFPresentacion' => $PDFPre,
            'PDFSeguro' => $PDFSeg,
            'PDFIdentificacion' => $PDFIden,
            'FotoInd' => $FotoIn
        ];

        // Using Query Builder
        $this->db->table('t_usuarios')->insert($data);
    }
}