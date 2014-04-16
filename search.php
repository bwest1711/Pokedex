<?php
    // Allows us to use $_SESSION[] variable
    session_start();
    
    // Connect to the database.
    require 'connection.inc.php';

    // The name comes from the search box.
    $name = $_POST['name'];

    // Session variables accessible across all web pages
    $_SESSION['name'] = $name;

    // These are temporary
    $_SESSION['pokemon'] = array('Name','Name', 'Name', 'Name', 'Name', 'Name');
    $_SESSION['abilities'] = array('0','1','2','3','4','5','6','7');
    
    
    // Build the query as a string using the name
    $query = sprintf("SELECT hometown, gender, phone_number, momsname FROM trainer WHERE name ='%s'", 
                     mysql_real_escape_string($name)) or die('search query');

    // Query using that string 
    $result = mysql_query($query) or die('query');

    // Check to make sure that the user exists. If they don't, transfer them to the registration page.
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

    // Transfer the user to their profile page.
    header('Location: trainer.php');
?>