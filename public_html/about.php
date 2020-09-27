<?php session_start();
// print_r($_SESSION)?>
<?php  require 'ingridient/adddata.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
    <title>About</title>
</head>
<style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        label{
            text-align: center;
        }
        main{
            display: grid;
            grid-template-columns: 1fr 3fr;
        }
        .leftaside{
            padding: 10px;
            
            background: #F3f3f3;
        }
        .rightaside{
            margin-left: 10px;
            padding: 10px;
            background: #F3f3f3;
        }
        ul{
            list-style: none;
            margin: 10px ;
            
        }
        i{
            color: green;
            padding: 0px 5px;
            cursor: pointer;
        }
        .btn, input{
            display: block;
            width: 100%;
            padding: 5px;
        }
        .error{
            color: red;
        }
        /* body
        {
            background-image: url('image/bc.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        } */
    </style>
<body style="background-image: url('image/bc.jpeg'); background-size: cover;">
<div class="container">
<?php require 'index.php';?>
<hr>
        <h3 id="header">This Web app is a recipe manager!!!</h3>
    </div>
    
</body>
</html>    
<?php
        require_once('footer.html');
        ?>