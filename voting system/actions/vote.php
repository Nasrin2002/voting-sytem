<?php
session_start();

$con=mysqli_connect("localhost:3307","root","","votingsystem");

if($con->connect_error){
    die("connection failed: " . $con->connect_error);
}
$votes=$_POST['gvotes'];
$tvotes=$votes+1;

$gid=$_POST['gid'];
$uid=$_SESSION['id'];


$uvotes=mysqli_query($con,"update userdata set voters='$tvotes' where id='$gid'");

$ustatus=mysqli_query($con,"update userdata set status=1 where id='$uid'");

if($uvotes and $ustatus)
{
    $getg=mysqli_query($con,"select username,photo,voters,id from userdata where standard='group'");
    $groups=mysqli_fetch_all($getg,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo'
    <script>
    alert("Voting successfull");
    window.location="../partial/dashboard.php";
    </script>';
    
}else{
    echo'
    <script>
    alert("Technical error.........< ._. >!! refresh and try again");
    window.location="../partial/dashboard.php";
    </script>';
}


?>