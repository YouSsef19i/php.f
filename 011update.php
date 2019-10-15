<?php
        if(isset($_POST["submit"]))
        {
            $id=$_POST["id"];
            $name=$_POST["name"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $pass=$_POST["pass"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
             } 
 
            $sql = "UPDATE users SET name='".$name."', email='".$email."', password='".$pass."' , age ='".$age."' WHERE id='".$id."'";

            if (mysqli_query($conn, $sql)){
            echo "updeted";
            header("Location:get11.php");
            }

            else {
                echo "error"
            }
            $conn->close();
        }
?>

