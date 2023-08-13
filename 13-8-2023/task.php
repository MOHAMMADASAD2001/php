<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "crud";

// $conn = mysqli_connect($servername, $username, $password, $dbname );
// if (!$conn) {
//     die("Connection failed" . mysqli_connect_error());
// }

// $sql = "CREATE TABLE IF NOT EXISTS trainees 
// (
// ID INT PRIMARY KEY AUTO_INCREMENT,
// names VARCHAR(255) ,
// AGE INT (10))";

// if (mysqli_query ($conn , $sql)) {
//     echo "table trainees created successfully";
// } 
// else {
//     echo "Error creating table" . mysqli_error($conn);
// }
      ?> -->
<form action="" method="post">
Name: <br> <input type="text" name="name"> <br>
Age: <br> <input type="number" name="age"> <br><br>

<input type="submit" name="save" value="submit"> <br><br>

</form>
<?php

// if (isset($_POST['save'])) {
// $names = $_POST ['name'];
// $age = $_POST ['age'];

// $sql ="INSERT INTO trainees (names, age) VALUES ('$names $age')";

// if (mysqli_query ($conn , $sql)) { 
//     echo "New record inserted successfully"; 
// }
// else {
//     echo "Error:" . $sql . " " . mysqli_error ($conn);
// }
// mysqli_close ($conn);
// }
if (isset($_POST['save'])) {
    $names = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO trainees (names, age) VALUES ('$names', '$age')";

    // if (mysqli_query($conn, $sql)) {
    //     echo "New record inserted successfully";
    // } else {
    //     echo "Error: " . $sql . " " . mysqli_error($conn);
    // }

    
}
?>
<?php
$resulte = mysqli_query($conn, "SELECT * FROM trainees");
if ($resulte && mysqli_num_rows($resulte) > 0) {
    while ($row = mysqli_fetch_assoc($resulte)) {
        // Process or display each row of data
        // print_r($row);
    }
} else {
    echo "No Data";
}
?>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>age</th>
        <th>Delete</th>
        <th>update</th>
    </tr>
</thead>
<tbody>
<tr>
    <td><?php echo $row ["name"] ?></td>
    <td><?php echo $row ["age"] ?></td>
    <!-- <td><button><?php echo $row  ?></button></td>
    <td><button><?php echo $row  ?></button></td> -->
</tr>
</tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>