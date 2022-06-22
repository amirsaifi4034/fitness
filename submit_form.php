
<?php 
include "database.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email= $_POST['email'];
    $phoneno= $_POST['phoneno'];
    $message= $_POST['message'];

    $sql = "INSERT INTO contact_form1 (fname, email, phone, messages )VALUES ('$name', '$email', '$phoneno', '$message')";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: http://localhost/kamil_bro/"); 
    }

    // print_r($result);
    // die();

    $conn->close(); 


}
?>