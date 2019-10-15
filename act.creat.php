<?php

    session_start();
    $_SESSION["user"]=1;
    if(isset($_post["submit"]))
    {
        $name=$_post["name"] ;
        $age=$_post["age"] ;
        $email=$_post["email"] ;
        $password=$_post["password"] ;
        
        $mydbhost = "localhost" ;
        $mydbuser = "root" ;
        $mydppassword ="";
        $dbname = "mydb";

        $conn = mysqli_connect ( $name,$email,$age,$password ) ;

      if (!$mydb) {
        die("error connecting to database");
      }

        echo "connected" ; 


       $sql="INSERT INTO users (name,age,password,emaill) VALUES ('name','age','paswword','email')";

        
        if (mysqli_query($conn, $sql)) 

             {
                echo "created successfully" ; 
                header("location:mysession.php");

             }
            
        else
            {
                    echo "Error creating database";
            }   
                mysqli_close($conn);

    }
?>