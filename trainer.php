<html>
    <head>
        <?php
            session_start();
            include 'includes/head.php'; 
        ?>
    </head>
    <body>
        <div id="container">
            <div id="trainer">
                <h1><?php echo $_SESSION['name']?></h1>
                <ul>
                    <li>Hometown:  <?php echo $_SESSION['hometown']?></li>
                    <li>Gender:  <?php echo $_SESSION['gender'] ?></li>
                    <li>Phone Number: <?php echo $_SESSION['phone_number']?></li>
                    <li>Mom's Name: <?php echo $_SESSION['moms_name']?></li>
                </ul>
            </div>
            <table>
                <tr>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][0]?></h1></td>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][1]?></h1></td>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][2]?></h1></td>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][3]?></h1></td>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][4]?></h1></td>
                    <td><h1 id="poke_name"><?php echo $_SESSION['pokemon'][5]?></h1></td>
                </tr>
                <tr>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                    <td><img src="images/img1.png" height="25%" width="25%"/></td>
                </tr>
                <tr>
                    <td>Attribute 0 </td>
                    <td>Attribute 1 </td>
                    <td>Attribute 2 </td>
                    <td>Attribute 3 </td>
                    <td>Attribute 4 </td>
                    <td>Attribute 5 </td>
                </tr>
                <tr>
                    <td>Attribute 0a </td>
                    <td>Attribute 1a </td>
                    <td>Attribute 2a </td>
                    <td>Attribute 3a </td>
                    <td>Attribute 4a </td>
                    <td>Attribute 5a </td>
                </tr>
                <tr>
                    <td>Attribute 0b </td>
                    <td>Attribute 1b </td>
                    <td>Attribute 2b </td>
                    <td>Attribute 3b </td>
                    <td>Attribute 4b </td>
                    <td>Attribute 5b </td>
                </tr>
                <tr>
                    <td>Attribute 0c </td>
                    <td>Attribute 1c </td>
                    <td>Attribute 2c </td>
                    <td>Attribute 3c </td>
                    <td>Attribute 4c </td>
                    <td>Attribute 5c </td>
                </tr>
            </table>
        </div>
    </body>
</html>