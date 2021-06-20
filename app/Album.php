<?php

namespace App;

class Album extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT   tb_album.*, tb_photo.* FROM  tb_album, tb_photo WHERE  tb_album.album_photo_id=tb_photo.photo_id";
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
       $i_photo_id = $_POST['i_photo_id'];

       $sql = "INSERT INTO tb_album VALUES (NULL, :album_name, :album_text, :album_photo_id)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindParam(":album_name", $i_name);
       $stmt->bindParam(":album_text", $i_text);
       $stmt->bindParam(":album_photo_id", $i_photo_id);
       $stmt->execute();
   }

}