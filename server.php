<?php

    $name= $_POST['userName'];
    $password= $_POST['userPassword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>
        Your Name is: <?php echo $name ?> 
    </h1>
    <h1>
        Your Password is: <?php echo $password ?>
    </h1>
</body>
</html>