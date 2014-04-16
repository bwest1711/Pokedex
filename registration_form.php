<html>
    <head>
        <?php include 'includes/head.php'?>
        <?php session_start(); ?>
    </head>
    <body>
        <div id="container">
            <div id="form_header">
                <h1>Register Here</h1>
            </div>
            <form id="register" action="register.php" method="post">
                Name: <input type="text" name="name" value="<?php echo $_SESSION['name']?>"> <br><br>
                Hometown: <input type="text" name="hometown" value="<?php echo $hometown?>"> <br><br>
                Gender(M/F): <input type="text" name="gender"value="<?php echo $gender?>"> <br><br>
                Phone Number: <input type="text" name="phone_number" value="<?php echo $phone_number?>"> <br><br>
                Mom's Name: <input type="text" name="moms_name" value="<?php echo $moms_name?>"> <br><br>
                <input type="submit" name="submit" value="Submit!">
            </form>
        </div>
    </body>
</html>