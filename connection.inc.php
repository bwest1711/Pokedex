<?php 
    $connect = mysql_connect('localhost', 'root', 'root') or die('unable to connect');
    mysql_select_db('pokedex') or die('db');
?>