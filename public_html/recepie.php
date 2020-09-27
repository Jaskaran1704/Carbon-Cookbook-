<?php session_start();
if (empty($_SESSION)) {
    header('Location: login.php?ERROR="loginFirst"');
} ?>
<?php require 'ingridient/adddata.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
    <title>Recepie</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        label {
            text-align: center;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 3fr;
        }

        .leftaside {
            padding: 10px;

            background: #F3f3f3;
        }

        .rightaside {
            margin-left: 10px;
            padding: 10px;
            background: #F3f3f3;
        }

        ul {
            list-style: none;
            margin: 10px;
        }

        i {
            color: green;
            padding: 0px 5px;
            cursor: pointer;
        }

        .btn,
        input {
            display: block;
            width: 100%;
            padding: 5px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php require 'index.php'; ?>
        <hr>
        <main>
            <aside class="leftaside">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="">write ingrident name and press ADD button</label>
                    <input class="form-control" type="text" name="item" placeholder="Name" value="<?php echo $ingridient; ?>">
                    <span class="error"><?php echo $ERROR['ingr']; ?></span>
                    <input class="form-control mt-2" type="text" name="des" placeholder="Description" value="<?php echo $description; ?>">
                    <span class="error"><?php echo $ERROR['des']; ?></span>
                    <input class="btn btn-info mt-2" type="submit" name="add" value="Add">
                </form>

                <!-- injecting php code here -->
                
            </aside>

            <aside class="rightaside">
            <?php

                require 'ingridient/showdata.php';
                ?>

<!--
                <?php require 'ingridient/createrecepie.php' ?>
                <h4>create your custom recepie</h4>

                <form action="recepie.php" method="POST">

                    <input type="text" class="form-control" name="recepieName" placeholder="Recepie Name" value="<?php echo $recepie; ?>">
                    <span class="error"><?php echo $ERROR['recepie']; ?></span>

                    <select class="form-control my-3" name="multiple[]" multiple value="<?php echo $choice; ?>">
                        <?php require 'ingridient/select.php';
                        foreach ($fetch as $element) { ?>
                            <option value="<?php echo $element['name'] ?>"><?php echo $element['name'] ?></option>
                        <?php } ?>
                    </select>

                    <span class="error"><?php echo $ERROR['choice']; ?></span>
                    <textarea class="form-control my-3" name="instructions" cols="30" rows="5" placeholder="write the description here" value="<?php echo $instructions; ?>"></textarea>
                    <span class="error"><?php echo $ERROR['instructions']; ?></span>

                    <input class="btn btn-success" type="submit" name="create" value="SUCCESS">

                </form>
-->

            </aside>



        </main>
    </div>
</body>

</html>
<?php
require_once('footer.html');
?>