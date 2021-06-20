<?php

require_once "inc/config.php";

$photo = new App\Photo();

if (isset($_POST['b_input'])) {
    $photo->input();
    header("location:index.php?page=photo_tampil");
}

if (isset($_POST['b_edit'])) {
    $photo->update();
    header("location:index.php?page=photo_tampil");
}