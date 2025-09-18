<?php 
    $username = "";
    $password = "";


    if(isset($_REQUEST['username'])){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if(empty($_REQUEST['username'])){
            $error_messages["username"] = "Username is required!";
        }

        if(empty($_REQUEST['password'])){
            $error_messages["password"] = "Password is required!";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data using url -->
    <!-- post - send data using http  -->
    <!-- <?php print_r($error_messages);?> -->
    <form action="receive_page.php" method="get">
        <label for="">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <br>
        <?php echo isset($error_messages['username']) ? $error_messages['username'] : ""; ?>

        <br>
        <label for="">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>">
        <br>
        <?php echo isset($error_messages['password']) ? $error_messages['password'] : ""; ?>
        <br>
        <input type="submit">
    </form>

        <?php

        if(isset($_REQUEST['username'])){
            if(!empty($_REQUEST['username']) and $_REQUEST['password'] != ""){
                echo ($_REQUEST["username"]."<br>");
                echo ($_REQUEST["password"]."<br>");
            }
        }
        
        ?>
</body>
</html>