<html>
    <head>
        
        <?php
            include 'includes/head.php';
            $name = $_POST['name'] . "<br>";
            $pokemon = array('poke0','poke1', 'poke2', 'poke3', 'poke4', 'poke5');
            $abilities = array('0','1','2','3','4','5','6','7');
        ?> 
    </head>
    <body>
        <h1 id="trainer_name"><?php echo $name ?></h1>
        <table>
            <tr>
                <td><h1 id="poke_name"><?php echo $pokemon[0]?></h1></td>
                <td><h1 id="poke_name"><?php echo $pokemon[1]?></h1></td>
                <td><h1 id="poke_name"><?php echo $pokemon[2]?></h1></td>
                <td><h1 id="poke_name"><?php echo $pokemon[3]?></h1></td>
                <td><h1 id="poke_name"><?php echo $pokemon[4]?></h1></td>
                <td><h1 id="poke_name"><?php echo $pokemon[5]?></h1></td>
            </tr>
            <tr>
                <td>Attribute 1 </td>
                <td>Attribute 2 </td>
                <td>Attribute 3 </td>
            </tr>
            <tr>
                <td>Attribute 1a </td>
                <td>Attribute 2a </td>
                <td>Attribute 3a </td>
            </tr>
            <tr>
                <td>Attribute 1b </td>
                <td>Attribute 2b </td>
                <td>Attribute 3b </td>
            </tr>
            <tr>
                <td>Attribute 1c </td>
                <td>Attribute 2c </td>
                <td>Attribute 3c </td>
            </tr>
        </table>
    </body>
</html>