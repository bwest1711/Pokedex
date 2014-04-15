<?php
    session_start();
    
    // Connection to our database.
    $connect = mysql_connect('localhost', 'root', 'root') or die('Failed to connect');
    mysql_select_db('pokedex') or die('Failed to select db');

    // Session variables accessible across all web pages
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pokemon'] = array('poke0','poke1', 'poke2', 'poke3', 'poke4', 'poke5');
    $_SESSION['abilities'] = array('0','1','2','3','4','5','6','7');
    
    
    // Build the query as a string using the variables above
    $query = sprintf("SELECT hometown, gender, phone_number, momsname FROM trainer WHERE name ='%s'", 
                     mysql_real_escape_string($_SESSION['name'])) or die('text');

    // Query using that string 
    $result = mysql_query($query) or die('query');

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
?> 
<!-- Transfer pages when the php finishes. -->
<meta http-equiv="refresh" content="1,url=trainer.php">
<p style="text-align:center;">Searching...</p>