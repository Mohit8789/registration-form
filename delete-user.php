<?php  
include_once('connection.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];
    delete_data($connection, $id);
}
$sql = "DELETE FROM register_form WHERE id='" . $_GET["id"] . "'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn)

?>