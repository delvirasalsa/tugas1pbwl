<?php

namespace App;

class Category extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT * FROM tb_cat";
       $stmt = $this->db->prepare($sql);
       $stmt->execute();

       $data = [];
       while ($rows = $stmt->fetch()) {
           $data[] = $rows;
       }

       return $data;
   }

   public function input()
   {
       $i_name = $_POST['i_name'];
       $i_text = $_POST['i_text'];

       $sql = "INSERT INTO tb_cat VALUES (NULL, : cat_name, :cat_text)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindparam(":cat_name", $i_name);
       $stmt->bindparam(":cat_text", $i_text);
       $stmt->execute();

   }

}