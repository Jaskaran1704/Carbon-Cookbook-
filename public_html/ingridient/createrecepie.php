<?php
            $ERROR = array(
                'recepie' => '',
                'choice' => '',
                'instructions' => ''
            );
            $recepie = $choice = $instructions = '';
            if(isset($_POST['create'])){
               
                if(empty($_POST['recepieName'])){
                    $ERROR['recepie'] = "Recepie input feild cannot be empty";
                }else{
                    $recepie = test_input($_POST['recepieName']);
                }
                if(empty($_POST['multiple'])){
                    $ERROR['choice'] = "ingridients options cannot be empty";
                }else{
                    $choice = ($_POST['multiple']);
                }
                if(empty($_POST['instructions'])){
                    $ERROR['instructions'] = "instructions input feild cannot be empty";
                }else{
                    $instructions = test_input($_POST['instructions']);
                }

                // go to next page
                if(array_filter($ERROR)){
                    echo "Please fill the feilds correctly";
                }else{
                    // start storing data to database;
                    require 'connection.php';
                    $recepieName = mysqli_real_escape_string($conn,$recepie);
                    
                    // implode to convert array into string
                    $choice =  implode(",",$choice);
                    $instructions = mysqli_real_escape_string($conn,$instructions);

                    //  user to get the username i.e anything before @sign in email address which is stores in session; 
                    $useremail =  explode("@",$_SESSION['email']); 
                    $username = current($useremail);
                    $query = "INSERT INTO recepie (rname, choice, des, user) VALUES ('$recepieName','$choice','$instructions','$username')";
                    
                    if(mysqli_query($conn,$query)){
                        echo "New Record entered Successfully"; 
                        // header("Location: recepies.php");
                     }else{
                         echo "Query Error : ".mysqli_error($conn);
                     }
                    
                }

            } //end isset if
             
            

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>