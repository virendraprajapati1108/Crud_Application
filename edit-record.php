<?php 
require 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `revision_curd` WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = $result->fetch_assoc();
$name = $row['name'];
$address = $row['address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .container{
            text-align: center;
            margin-top: 10px;
        }
        .form {
            padding: 0px 50px 0px 50px;
        }
        .form-control{
            margin-top: 5px;
        }
        .alert-success{
            /* padding: 0px 50px 0px 50px; */
            text-align: center;
            background-color: white;
            border: white;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <p>Insert Your Details</p>
    </div>
    <div class="form">
        <form method='post'>
            <div class="form-group">
              <label for="exampleInputEmail1">First Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" aria-describedby="emailHelp" placeholder="Enter your first name" required>
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Address:</label>
              <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="Enter your address" required> 
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
          </form><br>
          <a href="show-list.php" class="btn btn-primary">Show List</a><br><br><br><br>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];

        $sql = "UPDATE `revision_curd` SET `name` = '$name', `address` = '$address' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        header("Location:show-list.php");
    }
    ?>