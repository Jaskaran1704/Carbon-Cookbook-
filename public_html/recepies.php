<?php session_start();
// check whether the session array is empty.
if (empty($_SESSION)) {
    header('Location: login.php?ERROR="loginFirst"');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .myRecepies {
            background-color: #F3F3F3;
            padding: 10px;
            margin: 10px;
        }

        .recepieList {
            display: flex;
            flex-wrap: wrap;
        }

        a:hover a {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php require 'index.php'; ?>
        <hr>
        <?php
        require 'ingridient/getrecepie.php';
        // print_r($fetch);
        ?>
        <section class="recepieList">
            <?php foreach ($fetch as $items) { ?>
                <article class='myRecepies'>
                    <h3>Dish Name : <?php echo $items['rname']; ?></h3>
                    <h6>Ingridients : <?php echo $items['choice']; ?></h6>
                    <p>Instructions : <?php echo $items['des']; ?></p>
                    <span>Posted By :<?php echo $items['user'] ?></span>
                </article>
            <?php } //end of foreach  
            ?>
        </section>
    </div>
</body>

</html>
<?php
require_once('footer.html');
?>