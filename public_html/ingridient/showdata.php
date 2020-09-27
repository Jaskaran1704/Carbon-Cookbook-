<?php
        // showing data on console to user
ob_start();
            require 'select.php';
            
            
            // print_r($fetch);

            

            echo "<table class='table table-bordered'>";
            foreach($fetch as $element){
                echo "<tr><td>".$element["name"]." </td><td>";?>
                
                <form method="POST">
                    <input type="hidden" name="delete" value="<?= $element['id'];?>">
                    <button class="btn btn-danger my-2" type="submit" name="del" value="submit">delete</button>
                <?php echo "</td><td>"; ?>
                    <button class="btn btn-primary my-2" type="button" name="descrip." 
                     data-toggle="modal" data-target="#r<?= $element["id"] ?>" >Description</button>
                <?php echo "</td></tr>"; ?>
                </form>

                <div class="modal" id="r<?= $element["id"] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Custom Recepie</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="rname" value="<?= $element["des"] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <?php 
            }
            echo "</table>";

            // deleting a particular item from ingridient section
            if(isset($_POST['del'])){              
                $deleteid = $_POST['delete'];
                // print_r($_POST);
                // die();
                // echo "ID TO DELETE :".$deleteid;
                $id = mysqli_real_escape_string($conn,$deleteid);
                $sql = "DELETE FROM ingridents WHERE id = $id";
                $query = mysqli_query($conn,$sql);
                if(!$query){
                    echo "ERROR : ".mysqli_error($conn);
                }else{
                    header('Location: recepie.php');
                }
            }

            
            ?>;