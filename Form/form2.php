<?php
    // REGISTERATION
    $first = filter_input(INPUT_POST, 'first') ;
    $last = filter_input(INPUT_POST, 'last');   
    $gender1 = filter_input(INPUT_POST, 'gender1');
    $email = filter_input(INPUT_POST, 'email');
    $place = filter_input(INPUT_POST, 'place');
    $issue = filter_input(INPUT_POST, 'issue');
    $details = filter_input(INPUT_POST, 'details');
    $others = filter_input(INPUT_POST, 'others');   
    
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
        $sql = "INSERT INTO form ( first , last , gender , email , place , issues , details , others ) values ('$first' , '$last' , '$gender1' , '$email' , '$place' , '$issue' , '$details' , '$others' ) " ;
        $sqll = "select * from user where email = '$email'";
       
        $result = mysqli_query($connection , $sqll); 
        
            if($connection -> query($sql)){                
                // header('location: admission.html');
                 echo $issue;
                 header("Location: service.html");
                // echo "<script>alert('COMPLAIN REGISTERED SUCCESSFULLY, THANK YOU !!')</script>" ;
                
            }
            else{
                echo "Error :". $sql ." " . $connection->error;
            }
            $connection -> close();
        }

?>