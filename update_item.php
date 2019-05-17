<?php

 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/contact.css">
 </head>
 <body>
     


    <div class="container">
         
         <h1 class="text-center mt-3 text-secondary">UP DATE THIS ITEM</h1>
 
        
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="controle-form" method="post">
        
            <input type="text" name="description" placeholder="Type the description" class="form-control my-4">
            <input type="text" name="prix" placeholder="Type the prix" class="form-control" >
   
            <input type="file" name="photo" class="my-4" >

            <input type="submit"  class="btn btn-primary btn-block" name="submit" value="Valid">
            <i class="fas fa-paper-plane "></i>
        </form>
       
    </div>
    <?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
$_SESSION["id"] =$_GET['id'];
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
$description=$_POST["description"];
$photo=$_POST["photo"];
$prix=$_POST["prix"];

    // if(!empty($description) || !empty($photo)  ){
        
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName="ecom_store";
            $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                
            }else{
                if(!empty($description)){
                   $sql = "UPDATE ecomm SET description='$description' WHERE id='".$_SESSION['id']."'";
                
                    if ($conn->query($sql) === TRUE) {
                         echo "<script> alert(\"New record created successfully\")</script>";
                    }
                } elseif(!empty($photo)){
                    $sql = "UPDATE ecomm SET photo='$photo' WHERE id='".$_SESSION['id']."'";
                 
                     if ($conn->query($sql) === TRUE) {
                          echo "<script> alert(\"New record created successfully\")</script>";
                     }
                 } elseif(!empty($prix)){
                    $sql = "UPDATE ecomm SET prix='$prix' WHERE id='".$_SESSION['id']."'";
                 
                     if ($conn->query($sql) === TRUE) {
                          echo "<script> alert(\"New record created successfully\")</script>";
                     }
                 } else {
                    
                    echo "<script> alert(\"There is some errors\")</script>";
                }
                
                $conn->close();
                session_unset($_SESSION['id']); 
                header('Location: ../dashbord.php');
            }
        }
// }

?>
<!-- bootstrap CDN -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     
   

</body>
</html>