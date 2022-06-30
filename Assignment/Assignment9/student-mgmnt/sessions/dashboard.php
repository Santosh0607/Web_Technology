<?php
session_start();
if(isset($_SESSION["username"])){
    
    echo 'Hi,' .$_SESSION["name"].''.$_SESSION["username"];

}
else{
    echo"Login From here <a href ='./login.php'>Login now</a>";
}
?>