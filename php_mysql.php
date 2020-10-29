<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Fortnite";
$result = $conn->query($sql);

echo "<h2>Fortnite Player Statistics</h2><br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo "<br>Gamer_Tag: " . $row["Gamer_Tag"]. "<br>Season Total: " . $row["Season_Total"]. "<br>Season Eliminations: " . $row["Season_Elim"]. "<br>Season Placement:  " . $row["Season_Placement"]. "<br>Season Appearances: " . $row["Season_Appear"]. "<br>Seed Score: " . $row["Seed_Score"]. "<br>Lifetime Earnings: " . $row["Lifetime_Earnings"]. "<br>";
  }
} else {

  echo "0 results";

}

$conn->close();
?>
