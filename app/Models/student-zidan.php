<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students = [
        [
            "id" => 1,
            "nis" => "12312332",
            "nama" => "Haji",
            "kelas" => "XIPPLG2",
            "alamat" => "Jln. Ambatukam 12 Jambi",
        ],[
            "id"=> 2,
            "nis"=> "56456754",
            "nama"=> "Bambang",
            "kelas"=> "XPPLG2",
            "alamat"=> "Jln. Bakmi Gosong 24 Surabaya",
        ],[
            "id"=> 3,
            "nis"=> "54768798",
            "nama"=> "Sugeng",
            "kelas"=> "XIIDKV1",
            "alamat"=> "Jln. Bakar Hutan 15 Tangerang",
        ],[
            "id"=> 4,
            "nis"=> "897654567",
            "nama"=> "Haram",
            "kelas"=> "XANIMASI5",
            "alamat"=> "Jln. Dua Dimensi 2 Jakarta",
        ],[
            "id"=> 5,
            "nis"=> "324569874",
            "nama"=> "Jagung",
            "kelas"=> "XIDKV2",
            "alamat"=> "Jln. Daun 32 Semarang",
        ],
    ];

    public static function all(){
        return self::$students;
    }
}
