<?php
    // REGISTERATION
    $name = filter_input(INPUT_POST, 'name') ;
    $email = filter_input(INPUT_POST, 'email');   
    $pass = filter_input(INPUT_POST, 'password');
    $repass = filter_input(INPUT_POST, 'repassword');
    // $repass = filter_input(INPUT_POST, 'RePassword');   
    
// mySql connection
    $servername = "localhost" ;
    $username = "root";
    $password = "";
    $dbname = "login" ;

     
    $connection = new mysqli ($servername , $username , $password , $dbname) ;          
    if(mysqli_connect_error()){        
        die('Connect Error ( '. mysqli_connect_errno() . ')' . mysqli_connect_error() ) ; 
    }
    else{
        $sql = "INSERT INTO user (name , email , password ) values ('$name' , '$email' , '$pass'  ) " ;
        $sqll = "select * from user where email = '$email'";
        
        $result = mysqli_query($connection , $sqll); 
        
        if( $pass != $repass ){
            echo "<script>alert('PASSWORD DOES NOT MATCHED , PLEASE REENTER THE PASSWORD')</script>" ;
            echo "<script>document.location = '$url'</script>" ;
        }
        else{
            if($connection -> query($sql)){                
                // header('location: admission.html');
                echo "<script>alert('SUCCESSFULLY REGISTER , PLEASE LOGIN AND PROCIED TO THE NEXT')</script>" ;
                header("Location: login.html");
                
            }
            else{
                echo "Error :". $sql ." " . $connection->error;
            }
            $connection -> close();
        }
    } 

?>