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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="navigation.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ingredients</title>
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
    </style>
    <body>
    <div class="container">
    <?php require 'index.php';?>
    <hr>
    <main>


      <h1>Created By</h1>
      <section style="width: 100%; margin: auto;">
          <!--First Row---------      -->
          <div class="row">
              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/pic1%20(7).jpeg"  max-width="300px" height="250px"> 
                          <h4 id="name">Pankaj</h4>
                      </div>
                  </div>
              </div>


              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/rajji.jpeg" width="200px" height="150px">
                          <h4>Rajveer</h4>

                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/pic1%20(4).jpeg" width="200px" height="150px">
                          <h4>Karanveer</h4>
                      </div>
                  </div>
              </div>
          </div>

              <!--      Second Row------     -->
              <div class="row">
                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="image/pic1%20(5).jpeg" width="200px" height="150px">
                              <h4>Parandeep</h4>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">

                              <img class="img-responsive" alt="user" src="image/pic1%20(6).jpeg" width="200px" height="150px">
                              <h4>Kiran</h4>
                          </div>
                      </div>
                  </div>


                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="image/pic1%20(1).jpeg" width="200px" height="150px">
                              <h4>Rajwinder</h4>
                          </div>
                      </div>
                  </div>
              </div>

              <!--      Third Row----------  -->
              <div class="row">
                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="image/pic1%20(3).jpeg" width="200px" height="150px">
                              <h4>Rajdeep</h4>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">

                              <img class="img-responsive" alt="user" src="image/pic1%20(2).jpeg" width="200px" height="150px">
                              <h4>Bunny</h4>
                          </div>
                      </div>
                  </div>


                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="user1.png" width="200px" height="150px">
                              <h4>Snehpal</h4>
                          </div>
                      </div>
                  </div>
              </div>
          
      </section>
    </main>
    </div>
    </body>

      <?php
        require_once('footer.html');
        ?>