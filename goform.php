<?php
session_start();
?>

<!DOCTYPE html> 
<html>
    <head>
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