<?php

$category = new App\Category();
$rows = $category->tampil();

?> 

<h2>Tambah Data Post</h2>
<form action="post_proses.php" method="POST">
    <table>
        <tr>
            <td>DATE</td>
            <td><input type="text" name="i_date"></td>
        </tr>
        <tr>
            <td>SLUG</td>
            <td><input type="text" name="i_slug"></td>
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
            <td>CATEGORY</td>
            <td>
                <select name="i_cat_id">
                <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?><option>
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