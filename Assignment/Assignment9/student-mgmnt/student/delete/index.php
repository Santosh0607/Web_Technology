<?php
$id = $_POST['id'];



include "../../include/db.php";




$sql = "DELETE FROM `students` WHERE `students`.`id` = $id;";

if ($conn->query($sql) == TRUE) {
    // die("SUCESS");
    header('Location:../../?sucess=sucess');
    // echo "<p>Sucess</p>";
} else {
    header('Location:../../?sucess=error');
}
?>