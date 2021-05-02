
<?php
// $email= $_POST['email'];
// $password=$_POST['password'];

$email1 = filter_input(INPUT_POST, 'email1');   
$password1 = filter_input(INPUT_POST, 'password1');

// $email=stripcslashes($email);
// $password=stripcslashes($password);

// $email=mysql_real_string($email);
// $password=mysql_real_string($password);
    
// mysql_connect("localhost","root","");
// mysql_select_db("login");

// $result1=mysql_query(" select * from user where email='$email' and password='$password' ")
//  or die("Failed to query database".mysql_error());

$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "login" ;

$connection = new mysqli ($servername , $username , $password , $dbname) ;          
if(mysqli_connect_error()){        
    die('Connect Error ( '. mysqli_connect_errno() . ')' . mysqli_connect_error() ) ; 
}
else{   
    $sqll = "select * from user where email = '$email1' and password='$password1' ";
    $result = mysqli_query($connection , $sqll); 
    if(mysqli_num_rows($result) == 1){
        echo "Login Success!! Welcome " ;
        header("Location: service.html");
    }
    else{
        echo "Login fails" ;
    }
    // echo $sqll , $email1 , $password1 ;
    // // console.log($email) ;
    // // console.log($password) ;
    
}
// $row=mysql_fetch_array($result);
//  if($row['email']==$email && $row['password']==$password){
//      echo "Login Success!! Welcome ".$row['email'];
//  }else{
//       echo "failed to login";
//     }
?>
