<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <main>
    <?php

    $name = $_POST['name'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $timeframe = $_POST['timeframe'];

    $query = "INSERT INTO leftovers(restaurant_name,address,description,price,latest_collection) VALUES (" . "'" . $name . "'" . "," . "'" . $address . "'" . "," . "'" . $description . "'" . "," . "'" . $price . "'" . "," . "'" . $timeframe . "'" . ");";
    $db_host   = 'wasteless-db-2.cqfifwed6h5w.us-east-1.rds.amazonaws.com';
    $db_name   = 'wasteless-schema';
    $db_user   = 'admin';
    $db_passwd = 'password1#';

    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

    $conn = new PDO($pdo_dsn, $db_user, $db_passwd);
    if (isset($_POST['Submit'])){
      $result = $conn->query($query);
    }

    ?> 


    <h1>Food Donation Form</h1>
    <form action="" method="POST">
      <table>
        <tr>
          <td>Restaurant Name:</td>
          <td>
            <input type="text" name="name" id="name" />
          </td>
        </tr>
        <tr>
          <td>Address:</td>
          <td>
            <input type="text" name="address" id="address"/>
          </td>
        </tr>
        <tr>
          <td>Food description:</td>
          <td>
            <input type="text" name="description" id="description"/>
          </td>
        </tr>
        <tr>
          <td>Price:</td>
          <td>
            <input type="text" name="price" id="price" />
          </td>
        </tr>
        <tr>
          <td>Latest time to pick up:</td>
          <td>
            <input type="date" name="timeframe" id="timeframe"/>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="Submit" value="Submit" onclick="return confirm('Are you sure you want to submit?');"/>
          </td>
        </tr>
      </table>
    </form>
    <a href="/index.php">Home</a>

  </main>
</body>

</html>
