<?php
    session_start();
    
    // Connect to the database.
    // Not sure if this works with a different db
    require 'connection.inc.php';

    // There has to be a better way to do the variables.
    $name = $_POST['name'];

    // Session variables accessible across all web pages
    $_SESSION['name'] = $name;
    $_SESSION['pokemon'] = array('poke0','poke1', 'poke2', 'poke3', 'poke4', 'poke5');
    $_SESSION['abilities'] = array('0','1','2','3','4','5','6','7');
    
    
    // Build the query as a string using the variables above
    $query = sprintf("SELECT hometown, gender, phone_number, momsname FROM trainer WHERE name ='%s'", 
                     mysql_real_escape_string($name)) or die('text');

    // Query using that string 
    $result = mysql_query($query) or die('query');

    if(mysql_num_rows($result) == 0){
        header('Location: registration_form.php');
        die();
    }

    // Select the first element from the returned query
    while($row = mysql_fetch_assoc($result)) {
        $hometown = $row['hometown'] or die('hometown');
        $gender = $row['gender'] or die('gender');
        $phone_number = $row['phone_number'] or die('phone number');
        $moms_name = $row['momsname'] or die('moms name');
    }

    // Add it to our session variables
    $_SESSION['hometown'] = $hometown;
    $_SESSION['gender'] =$gender;
    $_SESSION['phone_number'] =$phone_number;
    $_SESSION['moms_name'] =$moms_name;

    header('Location: trainer.php');
?> 
Hello