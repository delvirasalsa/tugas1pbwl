<?php

$photo = new App\Photo();
$rows = $photo->tampil();

?>

<h2>Photo</h2>


<a href="index.php?page=photo_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>DATE</th>
        <th>TITLE</th>
        <th>TEXT</th>
        <th>POST</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['photo_id']; ?></td>
        <td><?php echo $row['photo_date']; ?></td>
        <td><?php echo $row['photo_title']; ?></td>
        <td><?php echo $row['photo_text']; ?></td>
        <td><?php echo $row['post_date']; ?> - <?php echo $row['post_slug']; ?></td>
        <td><a href="index.php?page=edit_photo&id=<?php echo $row['post_id']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table> 