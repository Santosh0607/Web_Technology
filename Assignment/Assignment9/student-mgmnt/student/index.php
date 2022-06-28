<?php
require_once "../include/db.php";

$sql="SELECT * FROM students";

$result = $conn->query($sql);

// dd($result);

//fetch associatic array
// if($result = $conn->query($sql))
// {
//     while($row =$result->fetch_assoc())
//     {
//         echo $row['id'].' '.$row['name'];
//         echo"</br>";
//     }
// }


//fetch object
// if($result = $conn->query($sql))
// {
//     while($row =$result->fetch_object())
//     {
//         echo $row->id.' '.$row->name;
//         echo"</br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>

    </style>
</head>
<body>
    <h2>List of students</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Favourite Color</th>
                <th>Weight(kg)</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Nationality</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows > 0){
                while($student = $result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?= $student['id']?></td>
                <td><img src="" alt=""></td>
                <td><?= $student['name']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['dob']?></td>
                <td><?= $student['favorite_color']?></td>
                <td><?= $student['weight']?></td>
                <td><?= $student['gender']?></td>
                <td><?= $student['hobbies']?></td>
                <td><?= $student['nationality']?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            <?php
            } } else {
            ?>
            <tr>
                <td colspan= "11">No records found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>