<?php

include "connect2.php";

$id=$_POST['id'];
$sql="DELETE FROM ticket WHERE id={$id}";
if (mysqli_query($connect,$sql)) {

    echo" <p> Deleted. </p>";
    header('location: rapport.php');
}

$connect->close();
?>