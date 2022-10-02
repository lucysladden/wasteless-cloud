<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
<h2> Admin </h2>
<main>
    <h3>Food Entrys: </h3>
    <?php
    $db_host   = '192.168.56.13';
    $db_name   = 'wastelessdb';
    $db_user   = 'webuser';
    $db_passwd = 'wastelessdb_pw';
    
    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
    
    $conn = new PDO($pdo_dsn, $db_user, $db_passwd);

    $sql = "SELECT * FROM leftovers";

    $result = $conn->query($sql);
    

        // output data of each row
        echo "<table>
 
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>address</th>
            <th>Description</th>
            <th>Price</th>
            <th>Time Frame</th>
            </tr>";
        while($row = $result->fetch()) {

            echo "<form action = deleteEntry.php method=post>";
            echo '<input type ="hidden" name="leftovers_ID" value=' . $row['leftovers_ID'] . '>';
            echo "<tr>";
            echo "<td>" . $row['restaurant_name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['latest_collection'] . "</td>";
            echo "<td>" . " <input type = 'submit' id = 'leftovers_ID' name = delete  value = " . 'delete' . " > </td>";
            echo "</form>";
        }

    ?>
</main>
</body>
</html>