<?php

$album = new App\Album();
$rows = $album->tampil();

?>

<h2>Album</h2>


<a href="index.php?page=album_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>TEXT</th>
        <th>PHOTO</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['album_id']; ?></td>
        <td><?php echo $row['album_name']; ?></td>
        <td><?php echo $row['album_text']; ?></td>
        <td><?php echo $row['photo_date']; ?> - <?php echo $row['photo_title']; ?></td>
        <td><a href="index.php?page=edit_album&id=<?php echo $row['photo_id']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table> 