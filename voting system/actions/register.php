
<?php

$con=mysqli_connect("localhost:3307","root","","votingsystem");

if($con->connect_error){
    die("connection failed: " . $con->connect_error);
}

$username=$_POST['username'];
$mobileno=$_POST['mobileno'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$standard=$_POST['std'];


if($password != $cpassword){
    echo '
    <script>
    alert("Passwords do not match");
    window.location="../partial/voting-register.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name, "../uploads/$image");

    $sql = "insert into userdata (username,mobilenumber,password,photo,standard,status,voters) 
            values ('$username', $mobileno , '$password','$image','$standard',0,0)";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        echo '
        <script>
        alert("Registration successfully");
        window.location="../voting-login.php";
        </script>';
    } 
    else{
            die('Query failed: ' . mysqli_error($con));
    }   
}
