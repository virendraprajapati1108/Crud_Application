<?php require('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show-Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        table, td, th {
        border: 1px solid black;
        }

        table {
        border-collapse: collapse;
        width: 80%;
        margin-left: 145px;
        }

        th {
        height: 70px;
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn btn-primary" style= "margin: 12px 0px 12px 145px;">Insert New Record</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <tbody>
            <?PHP
                $sql = "SELECT * FROM revision_curd";
                $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $address = $row['address'];
                    
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><a href="edit-record.php?id=<?php echo $id; ?>">Edit</a></td>
                    <td><a href="delete-record.php?id=<?php echo $id; ?>">Delete</a></td>
                </tr>   
            <?php
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>