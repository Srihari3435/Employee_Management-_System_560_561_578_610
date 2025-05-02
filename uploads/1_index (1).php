<?php
$flag = getenv('FLAG');

if (hash("md5", $_GET['passwd']) == "0") {
    echo $flag;
} else {
    echo "No flag for you!";
}
?>
