<form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="Upload">
</form>
<?php
$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {
?>
<p>
    <?php echo $files[$a]; ?>
    <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        Download
    </a>
    <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color:red;">
        Delete
    </a>
</p>
<?php
}
    ?>