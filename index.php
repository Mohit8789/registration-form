<?php  
    include('connection.php');
    if (!empty($_POST["name"])) {
       
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $sql =   "INSERT INTO `register_form` (`name`, `email`, `gender`, `phone`, `password`) VALUES ('$name', '$email', '$gender', '$phone','$password');";
    
        if ($conn->query($sql) === TRUE) { 
            echo '<div class="alert alert-success" role="alert">
            Data inserted successfully!.
          </div>'; 
        } else { 
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
    }
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
        <h1> Welcome to registration form</h1>
        <p>Enter Your Details </p>
        <p>Thanku For Submitting Form</p>
        <form method="post">
         <input type="text" name = "name" id = "name" placeholder="Enter Your Name"> 
         <input type="text" name = "email" id = "email" placeholder="Enter Your email">
         <input type="text" name = "gender" id = "gender" placeholder="Enter Your gender">
         <input type="text" name = "phone" id = "phone" placeholder="Enter Your phone">
         <input type="text" name = "password" id = "password" placeholder="Enter Your password">
         <br>
         <button class = "button">Submit</button>
         <a href="user-list.php" style="color:red;" >Show User</a>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
\