<?php  
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style> 
table tr, td {
    border: 1px solid red;
}
</style>
</head>
<body>
     <!-- <h1> List of Saved Form</h1>
     <br>
     <table>
        <tr>
                <th> S.no.</th>
                <th> name</th>
                <th> email</th>
                <th> phone</th>
                <th> gender</th>
                <th> action</th>

            </tr>
        </thead> -->

            <?php
            $query = "SELECT * FROM register_form";
             $result_data = $conn->query($query);
            
            // $mysqli->close();
            if ($result_data->num_rows > 0) { 
                echo  
                "<table >
                     <tr>
                        <th> id</th>
                        <th> name</th>
                        <th> email</th>
                        <th> phone</th>
                        <th> gender</th>
                        <th> action</th>
        
                    </tr>";
            }
            
            while($row = $result_data->fetch_assoc()){
               
                 echo
            
                    "<tr >
                    <td>" . $row['id']."</td>
                    <td>" . $row['name']."</td>
                    <td>" . $row['email']."</td>
                    <td>" . $row['phone']."</td>
                    <td>" . $row['gender']."</td>
                    <td>
                    <a class ='btn btn-info  btn-sm ' href ='edit-user.php?userId=".$row['id']."'>Edit</a>
                    <a class ='btn btn-danger  btn-sm ' href ='delete-user.php?id=".$row['id']."'onclick = 'return checkdelete()'>Delete</a>
                    </td>
                    </tr>"; 
                
            }
             "</table>"
             ?>
             <a href="index.php" >Registrasion Form</a>
             <script>
                var deleteData = function(id){
    $.ajax({    
        type: "GET",
        url: "delete-user.php", 
        data:{id:id},            
        dataType: "html",                  
        success: function(data){   
        $('#msg').html(data);
       $('#table-container').load('user-list.php');
           
        }
    });
};
                function checkdelete()
                {
                 return confirm('Are you sure you want to Delete');
                }
             </script>
             </body>
</html>




<!-- if(isset($_GET['id'])){
    $id= $_GET['id'];
    delete_data($connection, $id);
} -->
//header("Location: user-list.php");