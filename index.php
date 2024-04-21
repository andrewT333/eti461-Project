<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }
        header img {
            width: 300px;
            height: auto;
        }
        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #ffd700;
        }
        form input[type="text"] {
            padding: 12px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin: 20px 10px;
            display: inline-block;
        }
        .content {
            padding: 20px;
        }
        .movie {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            height: 225px;
        }
        .movie img {
            width: 150px;
            height: auto;
            float: left;
            margin-right: 10px
        }
        .movie h2 {
            margin-top: 0;
        }
    </style>
</head>
<body ng-app="Imdb">
    <div ng-controller="imdbCtrl">
        <header>
            <img src="imdb.png" alt="IMDB Logo">
        </header>
        <nav>
            <ul>
                <li><a href="moviespage.php">Movies</a></li>
                <li><a href="tvshowpage.php">TV Shows</a></li>
                <li><a href="view_list.php">View My List</a></li>
            </ul>
            <form role="search">
                <input type="text" placeholder="Find Movies, TV Shows, Celebrities and more...">
            </form>
            <ul>
                <li><a href="register.html">Sign Up For Email Updates</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="movie">
                <img src="movie1.jpg" alt="Movie 1">
                <h2>Inception</h2>
                <p>Your mind is the scene of the crime. Box-office superstar Leonardo DiCaprio stars in this contemporary science fiction action film set "within the architecture of the mind." Written, directed and produced by Oscar® and Golden Globe nominee Christopher Nolan (The Dark Knight, Batman Begins, The Prestige), this eagerly awaited follow-up to 2008's billion-dollar blockbuster is yet another visionary tale from a startingly original filmmaker who continually raises the bar with every film he makes. Shooting in London, Paris, Tangiers, Calgary and Los Angeles, Nolan's mind-bending film also stars Academy Award® winners Michael Caine and Marion Cotillard, in addition to Juno's Ellen Page, Batman Begins' Cillian Murphy and Oscar® nominees Ken Watanabe (The Last Samurai) and Tom Berenger (Platoon).</p>
            </div>
            <div class="movie">
                <img src="movie2.jpg" alt="Movie 2">
                <h2>The Matrix</h2>
                <p>Have you ever had a dream that you were so sure was real? What if you couldn't awaken? How would you know the difference between dream and reality? When a beautiful stranger (Carrie Ann Moss) leads computer hacker Neo (Keanu Reeves) to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence. Neo joins legendary and dangerous rebel warrior Morpheus (Lawrence Fishburne) in the battle to destroy the illusion enslaving humanity.</p>
            </div>
            <div class="movie">
                <img src="movie3.jpg" alt="Movie 3">
                <h2>The Dark Knight</h2>
                <p>Christian Bale and director Christopher Nolan reunite following their blockbuster success with Batman Begins! This time, Heath Ledger joins the cast as The Joker, and Aaron Eckhart stars as Harvey Dent in an all-new adventure of The Dark Knight. With the help of Lieutenant Jim Gordon (Gary Oldman) and new district attorney Harvey Dent (Eckhart--Thank You for Smoking), Batman sets out to destroy organized crime in Gotham City forever. The three enjoy early success, but they soon find themselves prey to a rising criminal mastermind known as The Joker (Ledger--Brokeback Mountain), who throws Gotham into anarchy and forces Batman ever closer to crossing the line between hero and vigilante.​</p>
            </div>
            <div class="movie">
                <img src="movie4.jpg" alt="Movie 4">
                <h2>Mad Max Fury Road</h2>
                <p>From filmmaker George Miller, originator of the post-apocalyptic genre and mastermind behind the legendary Mad Max trilogy, comes this return to the world of the Road Warrior, Max Rockatansky. Haunted by his turbulent past, Mad Max (Tom Hardy -- The Dark Knight Rises) believes the best way to survive is to wander alone. Nevertheless, he becomes swept up with a band of survivors fleeing across the Wasteland in a war rig driven by an elite Imperator, Furiosa (Oscar ® winner Charlize Theron-- Prometheus). They are escaping a Citadel tyrannized by the Immortan Joe (Hugh Keays-Byrne), from whom something irreplaceable has been taken. Enraged, the Warlord marshals all his gangs and ruthlessly pursues the rebels in the high-octane Road War that follows.</p>
            </div>
        </div>
    </div>
</body>
</html>




<body> 
    <h1>Today's Recommendations</h1>
    <ul>
        <?php
        include 'connect.php'; 

        $sql = "SELECT id, movie_name FROM movies LIMIT 12"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='movie_details.php?id=" . $row["id"] . "'>" . $row["movie_name"] . "</a></li>";
            }
        } else {
            echo "<li>No movies found</li>";
        }
        $conn->close();
        ?>
    </ul>
</body>
 
</html> 
