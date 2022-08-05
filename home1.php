<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weight1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$test=$_POST['test'];
$sql = "SELECT * FROM `weight1`";
$result = $conn->query($sql);
$arr=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> weight ". $row["weights"]. "<br>";
        $arr+=$row["weights"];

    }
    echo $arr;
} else {
    echo "0 results";
}

$conn->close();
?>