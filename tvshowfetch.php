<?php
include 'connect.php'; 

$sql = "SELECT id, title, number_of_seasons, total_number_of_episodes, star_actor, year_started FROM tvshow";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["number_of_seasons"] . "</td>";
        echo "<td>" . $row["total_number_of_episodes"] . "</td>";
        echo "<td>" . $row["star_actor"] . "</td>";
        echo "<td>" . $row["year_started"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>0 results</td></tr>"; 
}
$conn->close();
?>
