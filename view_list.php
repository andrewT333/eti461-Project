<?php
session_start();

echo "<h1>My Movie List</h1>";

if (isset($_SESSION['movie_list']) && count($_SESSION['movie_list']) > 0) {
    echo "<ul>";
    foreach ($_SESSION['movie_list'] as $movie_id) {
        include 'connect.php';
        $sql = "SELECT movie_name FROM movies WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $movie_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['movie_name']) . "</li>";  
            }
        } else {
            echo "<li>Movie ID: " . htmlspecialchars($movie_id) . " - Details not found.</li>";
        }
        $conn->close();
    }
    echo "</ul>";
} else {
    echo "<p>No movies in your list.</p>";
}

echo "<p><a href='index.php' style='display:inline-block; padding:8px 16px; background-color:#007BFF; color:white; text-align:center; text-decoration:none; border-radius:5px;'>Return to Home</a></p>";
?>
