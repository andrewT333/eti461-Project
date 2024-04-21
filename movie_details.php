<?php
include 'connect.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "SELECT * FROM movies WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>" . $row["movie_name"] . "</h1>";
        echo "<p><strong>Star Actor:</strong> " . $row["star_actor"] . "</p>";
        echo "<p><strong>Director:</strong> " . $row["director"] . "</p>";
        echo "<p><strong>Runtime:</strong> " . $row["run_time"] . " minutes</p>";
        echo "<form action='add_to_list.php' method='post'>";
        echo "<input type='hidden' name='movie_id' value='" . $row["id"] . "'/>";
        echo "<button type='submit' name='addToList'>Add to List</button>";
        echo "</form>";
        echo "<a href='index.php'><button>Main Page</button></a>";
    } else {
        echo "<p>Movie not found.</p>";
    }
} else {
    echo "<p>Invalid request. Please provide a movie ID.</p>";
}

$conn->close();
?>
