<?php
session_start();
if( isset( $_SESSION['user'] ) ) 

{}

    echo "signed in"."<br>";    
    echo "to log out use ";
    echo "<a href='to.logout.php'>logout</a>";

}
else
{
    echo "you aren't signed in!";
}
?>