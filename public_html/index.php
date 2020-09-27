<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <title>Document</title> -->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        img {
            width: 35px;
            margin: 20px 5px 0px 5px;
        }

        nav {

            display: grid;
            height: 8vh;
            grid-template-columns: 1fr 6fr;
        }

        ul {
            height: 8vh;
            display: grid;
            list-style: none;
            grid-template-columns: repeat(6, 1fr);
            justify-items: center;
            align-items: center;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .btn:hover {
            background-color: white;
            color: black;
            transition: .7s ease;
        }

        .btn {
            font-size: 0.8rem;
        }

        .user:hover {
            background-color: #F3F3F3;
            padding: 5px 20px;
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="about.php"><img src="image/favicon.png" alt="logo"></a>
        <ul>

            <li><a href="recepie.php" class="btn btn-success">CREATE RECEPIE</a></li>
            <li><a href="ingredientss.php" class="btn btn-success">INGREDIENT</a></li>
            <li><a href="recepies.php" class="btn btn-success">ALL RECPIES</a></li>
            <li><a href="aboutTeam.php" class="btn btn-success">ABOUT TEAM</a></li>
            <li><a href="logout.php" class="btn btn-success">LOGOUT</a></li>
            <span class="user">
<?php
ob_start();
if (!empty($_SESSION['email'])) {
    echo $_SESSION['email'];
}
?></span>
        </ul>
    </nav>
</body>

</html>