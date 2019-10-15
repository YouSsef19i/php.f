<?php
$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "", "mydb"); 

$query = 'SELECT * FROM users WHERE id  = "'.$id.'" ';
$res=mysqli_query($con, $query);

$name="";
$age=0;
$email="";
$password="";
if($res){

$row=mysqli_fetch_array($res);
$name=$row['name'];
$age=$row['age'];
$email=$row['email']; 
$password=$row['password'];
}

else {
echo "Couldn't issue database query<br />";
}


mysqli_close($con);


?>
        <!DOCTYPE html> 
        <html>
            <head>
                <meta charset="utf-8">

                <title>
                    form.db
                </title>

            </head>

            <body>

                <form  action="act.creat.php" method="post">

                        <label>Name:</label><br>
                        <input type="text" name="name" placeholder="type your name"> <br>
                        <label>age:</label><br>     
                        <input type="text" name="age" placeholder="type your age"> <br>
                        <label>password:</label><br>
                        <input type="number" name="password" placeholder="type your password"> <br>
                        <label>email:</label><br>
                        <input type="email" name="email" placeholder="type your email"> <br>
                        <input type="submit" name="submit">

                </form>

            </body>

        </html>
