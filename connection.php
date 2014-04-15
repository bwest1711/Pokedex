<?php
    echo "hello";
    // Create connection
    $con=mysqli_connect("localhost:8889","root","root","pokemon");

    // Check connection
    if (!$con) {
      die( "Failed to connect to MySQL: " . mysqli_connect_error());
    }
    else {
        echo "connected"
    }

    echo $query="SELECT * FROM trainers;";
?> 