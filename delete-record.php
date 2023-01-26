<?php require('config.php');
$id = $_GET['id'];
// echo $id;
// exit();
$sql = "DELETE FROM revision_curd WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Your data deleted successfully";
    header("Location:show-list.php");
}
?>
