<?php
include 'connect.php'; 
$sql = "SELECT id, movie_name, star_actor, director, run_time FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["movie_name"] . "</td>";
        echo "<td>" . $row["star_actor"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["run_time"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}
$conn->close();
?>
