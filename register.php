<?php 
    require 'connection.inc.php';
    session_start();
    if(isset($_POST['name']) && isset($_POST['hometown']) && isset($_POST['gender']) && 
       isset($_POST['phone_number']) && isset($_POST['moms_name'])) { 
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
                    
                    // Set all gathered variables to session variables.
                    $_SESSION['name'] = $name;
                    $_SESSION['hometown'] = $hometown;
                    $_SESSION['gender'] = $gender;
                    $_SESSION['phone_number'] = $phone_number;
                    $_SESSION['moms_name'] = $moms_name;
                    
                    header('Location: trainer.php');
                    die();
                } else {
                    echo "query". mysql_error();
                }

            } else {
                echo 'Name '.$name.' already exists';
            }

        } else {
            echo 'All fields are required.';
        }
    }
?>