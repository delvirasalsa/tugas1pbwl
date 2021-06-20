<?php

namespace App;
use PDO;

class Koneksi{

    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbweb","root","");
        } catch (\Exception $e) {
            die ("Error : " . $e->getMessage());
        }
    }
}