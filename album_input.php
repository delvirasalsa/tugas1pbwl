<?php

$photo = new App\Photo();
$rows = $photo->tampil();

?> 

<h2>Tambah Data Album</h2>
<form action="album_proses.php" method="POST">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="i_name"></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td><input type="text" name="i_text"></td>
        </tr>
        <tr>
            <td>PHOTO</td>
            <td>
                <select name="i_photo_id">
                <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['photo_id']; ?>"><?php echo $row['photo_date']; ?><option>
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