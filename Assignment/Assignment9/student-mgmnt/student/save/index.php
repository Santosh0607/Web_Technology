<?php 
require_once "../../include/db.php";
$roll = $arr['roll'] ??'';

$name=$_POST['name'] ??'';
$email=$_POST['email']??'';
$password=password_hash($_POST['password'],PASSWORD_DEFAULT)??'';
$dob=$_POST['dob']??'';
$favourite_color=$_POST['color']??'';
$weight=$_POST['weight']??'';
$gender=$_POST['gender']??'';
$hobbies=implode(',',$_POST['hobbies'])??[];
$nationality=$_POST['nationality']??'';
$sql="INSERT INTO students (name, email,password,dob,favorite_color,weight,gender,hobbies,nationality) 
VALUES('$name','$email','$password','$dob','$favourite_color','$weight','$gender','$hobbies','$nationality')";
 if($conn ->query($sql)== TRUE){
    header('Location:..\create/?sucess=inserted Sucessfully');
    

 }
 else{
    die("error");
 }