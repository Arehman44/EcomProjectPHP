<?php
$con = mysqli_connect("localhost","root","","ecommerce");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    mysqli_query($con,"insert into tbluser (UserName,Email,Number,Password) 
    values('$name','$email','$number','$password')");    

    $Dup_Email = mysqli_query($con,"SELECT * FROM `tbluser` WHERE Email = '$email'");
    $Dup_username = mysqli_query($con,"SELECT * FROM `tbluser` WHERE UserName = '$name'");
    
    if(mysqli_num_rows($Dup_Email)){
        echo "
        <script>
            alert('This email is already taken');
            window.location.href = 'register.php';
        </script>
        ";
    }
    if(mysqli_num_rows($Dup_username)){
        echo "
        <script>
            alert('This  is already taken');
            window.location.href = 'register.php';
        </script>
        ";
    }else{
        mysqli_query($con,"insert into tbluser (UserName,Email,Number,Password) 
        values('$name','$email','$number','$password')"); 
        echo "
        <script>
            alert('Register Successfully!');
            window.location.href = 'login.php';
        </script>
        ";
    }
}
?>