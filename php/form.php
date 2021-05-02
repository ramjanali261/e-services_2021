<?php
    // REGISTERATION
    $first = filter_input(INPUT_POST, 'first') ;
    $last = filter_input(INPUT_POST, 'last');   
    $gender = filter_input(INPUT_POST, 'gender');
    $email = filter_input(INPUT_POST, 'email');
    $place = filter_input(INPUT_POST, 'place');
    $issues = filter_input(INPUT_POST, 'issues');
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
        $sql = "INSERT INTO form (first, last, gender, email , place , issues , details , others) values ('$first' , '$last' , '$gender' ,'$email', '$place', '$issues','$details','$others' ) " ;
        $sqll = "select * from form where email = '$email'";
        
        $result = mysqli_query($connection , $sqll); 
        echo $gender ;
            // if($connection -> query($sql)){                
            //     // header('location: admission.html');
            //     echo "<script>alert('COMPLAIN REGISTERED SUCCESSFULLY, THANK YOU !!')</script>" ;
                
            // }
            // else{
            //     echo "Error :". $sql ." " . $connection->error;
            // }
            // $connection -> close();
    }
?>