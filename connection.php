<?php 

$con = mysqli_connect("localhost", "root", "", "author");
if (!$con) {
    echo '<script>alert("not connect");</script>';
}

?>