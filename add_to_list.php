<?php
session_start(); // Start or resume a session

include 'connect.php';

if (isset($_POST['addToList']) && isset($_POST['movie_id'])) {
    $movie_id = intval($_POST['movie_id']);

    // Simulate adding to a list by adding to a session array
    if (!isset($_SESSION['movie_list'])) {
        $_SESSION['movie_list'] = [];
    }

    // Check if the movie is already in the list to avoid duplicates
    if (!in_array($movie_id, $_SESSION['movie_list'])) {
        $_SESSION['movie_list'][] = $movie_id;
        echo "<p>Movie added to your list.</p>";
    } else {
        echo "<p>Movie is already in your list.</p>";
    }

    // Link to view list or return to home
    echo "<a href='index.php'>Return to Home</a> | <a href='view_list.php'>View My List</a>";
} else {
    echo "<p>Invalid request. No movie specified.</p>";
}

$conn->close();
?>
