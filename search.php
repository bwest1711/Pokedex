<?php
    session_start();
    
    $connect = mysql_connect('localhost', 'root', 'root') or die('Failed to connect');
    mysql_select_db('pokedex') or die('Failed to select db');
    
    $name = $_POST['name'];
    $_SESSION['name'] = $_POST['name'] . "<br>";
    $_SESSION['pokemon'] = array('poke0','poke1', 'poke2', 'poke3', 'poke4', 'poke5');
    $_SESSION['abilities'] = array('0','1','2','3','4','5','6','7');
    

    $query = sprintf("SELECT hometown FROM trainer WHERE name ='%s'", mysql_real_escape_string($name)) or die('text');
    $result = mysql_query($query) or die('query');
    $hometown = mysql_result($result, 0) or die('hometown');
    $_SESSION['hometown'] = $hometown;
?> 
<meta http-equiv="refresh" content="1,url=trainer.php">
<p style="text-align:center;">Searching...</p>