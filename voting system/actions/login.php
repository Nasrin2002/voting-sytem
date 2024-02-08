
<?php    

        
    $con=mysqli_connect("localhost:3307","root","","votingsystem");

    if($con->connect_error){
        die("connection failed: " . $con->connect_error);
    }


    session_start();
    $username=$_POST['username'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
    $standard=$_POST['std'];

    $sql = "select * from userdata
    where username ='$username' and mobilenumber = $mobileno and password ='$password' and standard ='$standard'";
    
    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result)>0) {
        $sql="select username,photo,voters,id from userdata where standard='group'";
        $resultg=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultg)>0){
            $groups=mysqli_fetch_all($resultg,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;

        }
        $data=mysqli_fetch_array($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['status']=$data['status'];
        $_SESSION['data']=$data;

            echo '<script>
            window.location="../partial/dashboard.php";
            alert ("Login successful. Welcome");
            </script>';
       
    } else {
        echo '<script> alert ("Invalid Username Or Password !!.... Register Now");
        window.location="../voting-login.php"</script>';
    }


?>

