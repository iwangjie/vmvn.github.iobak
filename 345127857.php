<?php 
$url = $_REQUEST["n"];
echo 'datac('.file_get_contents('http://aikan-tv.com/api1.php?url='.$url.'&key=2fcbc661b95755e2cbc6d6c0198f23f6&time=1494209330&1494222278000').')';
?>