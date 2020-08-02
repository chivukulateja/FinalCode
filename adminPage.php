<?php
include 'server.php';
// session_start();

?>

<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>stanns</title>
    </head>

    <body>
        <h1>Hi I'm Admin</h1>
        <p style="font-size:30px; color: #000"><?php echo $_SESSION['user'];
?> </p>

        <a href="logout.php"> <input type='button' value='Logout'></a>

        <!-- <a href="studentsData.php"> <input type='button' value='Students'></a> -->
        <button class='sbt_btn' name='studentData'> <a href='studentsData.php'>Students</a> </button>
    </body>

</html>