<?php
require_once 'functions.php';

$funs = new Functions();

$path = 'F:\landtitle.png';
$image = $funs->hashImage($path);
print_r($funs->addAssets('1WeUgwMGQiderGq8DhfD3qbRuzABu2JrFVh9he','kris_land', $path));

print $funs->getErrors();
?>

