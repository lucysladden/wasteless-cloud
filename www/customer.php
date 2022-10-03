<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>

  <h2> Customer: </h2>
  <main>
    <h3>Available Food Entrys: </h3>
    <?php

    $db_host   = 'wasteless-db-2.cqfifwed6h5w.us-east-1.rds.amazonaws.com';
    $db_name   = 'wasteless-schema';
    $db_user   = 'admin';
    $db_passwd = 'password1#';

    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

    $conn = new PDO($pdo_dsn, $db_user, $db_passwd);

    $sql = "SELECT * FROM leftovers";


    $result = $conn->query($sql);

    //output data of each row
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
          echo "<tr>";
          echo "<td>" . $row['leftovers_ID'] . "</td>";
          echo "<td>" . $row['restaurant_name'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td>" . $row['price'] . "</td>";
          echo "<td>" . $row['latest_collection'] . "</td>";
          echo "</tr>";
      }


    ?>
    <a href="/index.php">Home</a>
  </main>
</body>

</html>