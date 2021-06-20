<?php

$post = new App\Post();
$rows = $post->tampil();

?> 

<h2>Tambah Data Photo</h2>
<form action="photo_proses.php" method="POST">
    <table>
        <tr>
            <td>DATE</td>
            <td><input type="text" name="i_date"></td>
        </tr>
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="i_title"></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td><input type="text" name="i_text"></td>
        </tr>
        <tr>
            <td>POST</td>
            <td>
                <select name="i_post_id">
                <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['post_id']; ?>"><?php echo $row['post_date']; ?><option>
                        <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="b_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>