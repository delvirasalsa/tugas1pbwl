<?php

namespace App;

class Photo extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT  tb_photo.*, tb_post.* FROM tb_photo, tb_post WHERE tb_photo.photo_post_id=tb_post.post_id";
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
       $i_date = $_POST['i_date'];
       $i_title = $_POST['i_title'];
       $i_text = $_POST['i_text'];
       $i_post_id = $_POST['i_post_id'];

       $sql = "INSERT INTO tb_photo VALUES (NULL, :photo_date, :photo_title, :photo_text, :photo_post_id)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindParam(":photo_date", $i_date);
       $stmt->bindParam(":photo_title", $i_title);
       $stmt->bindParam(":photo_text", $i_text);
       $stmt->bindParam(":photo_post_id", $i_post_id);
       $stmt->execute();
   }

}