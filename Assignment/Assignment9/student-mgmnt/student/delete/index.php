<?php
include "../../include/db.php";
// $id = $_POST['id'];
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";






$sql = "DELETE FROM `students` WHERE `students`.`id` = $id;";

if ($conn->query($sql) == TRUE) {
    // die("SUCESS");
    header('Location:../../?sucess=sucess');
    // echo "<p>Sucess</p>";
} else {
    header('Location:../../?sucess=error');
}
?>