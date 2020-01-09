<form action="readbook.php">

<?php
$directory = "/var/www/html/Media/Web Programming books/Books for Certs";

// Open a directory, and read its contents
if (is_dir($directory)){
    if ($opendirectory = opendir($directory)){
        while (($file = readdir($opendirectory)) !== false) {
            if (strpos($file, '.') === false) {
                echo '<button type="submit" class="button" value="'.$file.'">';
                echo "filename:" . $file . "<br>";
            }
        }
        closedir($opendirectory);
    }
}
?>
</form>
<a href
