
<!DOCTYPE html>
<html>
<body>

<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "food" ;

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname) ;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Menu, Cuisine FROM Restaurants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Menu: ". $row["Menu"]. " " . $row["Cuisine"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>