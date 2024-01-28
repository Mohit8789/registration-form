<?php
include('connection.php');
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE register_form set name='" . $_POST['name'] . "', email ='" . $_POST['email'] . "', gender='" . $_POST['gender'] . "', phone='" . $_POST['phone'] . "' where id='".$_GET['userId']."'");
    $message = "Record Modified Successfully";
}
    $result = mysqli_query($conn,"SELECT * FROM register_form WHERE id='" . $_GET['userId'] . "'");
    $row= mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  
    <img class="bg1" src="bg1.jpg" alt="Integral univeristy">
    <div class ="container">
        <h1>Update Details</h1>
       
        
        <form method="post">
         <input type="text" name = "name" id = "name" placeholder="Enter Your Name" value="<?php echo $row['name']; ?>"> 
         <input type="text" name = "email" id = "email" placeholder="Enter Your email" value="<?php echo $row['email']; ?>"> 
         <input type="text" name = "gender" id = "gender" placeholder="Enter Your gender" value="<?php echo $row['gender']; ?>"> 
         <input type="text" name = "phone" id = "phone" placeholder="Enter Your phone" value="<?php echo $row['phone']; ?>"> 
        
         <br>
         <button class = "button">Update Details</button>
         <a href="user-list.php" style="color:red;" >Show User</a>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>