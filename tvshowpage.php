<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Show List</title>
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
        <a href="index.php">
    <img src="imdb.png" alt="IMDB Logo">
</a>
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
</head>
</head>
<body>
    <div ng-controller="imdbCtrl">
      
        <nav role="navigation">
        </nav>
    </div>
    <h1>TV Shows</h1>
    <table id="tvShowsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Seasons</th>
                <th>Episodes</th>
                <th>Star Actor</th>
                <th>Year Started</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'tvshowfetch.php'; ?>
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tvShowsTable').DataTable();
        });
    </script>
</body>
</html>
