<html>
    <head>
        <?php include 'includes/head.php'?>
    </head>
    <body>
        <div id="container">
            <?php 
            require 'connection.inc.php';
            if(isset($_POST['name']) && isset($_POST['hometown']) && isset($_POST['gender']) && isset($_POST['phone_number']) && isset($_POST['moms_name'])) { 
                $name = $_POST['name'];
                $hometown = $_POST['hometown'];
                $gender = $_POST['gender'];
                $phone_number = $_POST['phone_number'];
                $moms_name = $_POST['moms_name'];
    
                if(!empty($name) && !empty($hometown) && !empty($gender) && !empty($phone_number) && !empty($moms_name)) {
                    $query = "SELECT * FROM trainer WHERE name='".mysql_real_escape_string($name)."'";
                    $name_query = mysql_query($query);
                    
                    if(mysql_num_rows($name_query) != 1) {
                        $insert = "INSERT INTO trainer VALUES ('".mysql_real_escape_string($name)."', 
                        '', '".mysql_real_escape_string($gender)."', '".mysql_real_escape_string($hometown)."',
                        '".mysql_real_escape_string($phone_number)."','".mysql_real_escape_string($moms_name)."')";
                        if($run_query = mysql_query($insert)){
                            header('Location: registered.php');
                        } else {
                            echo "query". mysql_error();
                        }
                    } else {
                        echo 'Name already exists';
                    }
                } else {
                    echo 'All fields are required.';
                }
            }
            ?>
            <form action="register.php" method="post">
                Name: <input type="text" name="name" value="<?php echo $name?>"> <br><br>
                Hometown: <input type="text" name="hometown" value="<?php echo $hometown?>"> <br><br>
                Gender(M/F): <input type="text" name="gender"value="<?php echo $gender?>"> <br><br>
                Phone Number: <input type="text" name="phone_number" value="<?php echo $phone_number?>"> <br><br>
                Mom's Name: <input type="text" name="moms_name" value="<?php echo $moms_name?>"> <br><br>
                <input type="submit" name="submit" value="Submit!">
            </form>
        </div>
    </body>
</html>