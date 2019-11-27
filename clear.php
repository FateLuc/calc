
<?php

$f = @fopen("numbers.txt", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);
}
header('Location: index.php');