<?php

$post = new App\Post();
$rows = $post->tampil();

?>

<h2>Post</h2>


<a href="index.php?page=post_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>DATE</th>
        <th>SLUG</th>
        <th>TITLE</th>
        <th>TEXT</th>
        <th>CATEGORY</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <td><?php echo $row['post_slug']; ?></td>
        <td><?php echo $row['post_title']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
        <td><?php echo $row['cat_name']; ?> - <?php echo $row['cat_text']; ?></td>
        <td><a href="index.php?page=edit_post&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>