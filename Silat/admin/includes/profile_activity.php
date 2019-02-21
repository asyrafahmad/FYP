<?php




        if(isset($_SESSION['username'])){
            
            $username = $_SESSION['username'];
            
            $query = "SELECT * FROM users WHERE username = '{$username}'     ";
            
            $select_user_profile_query = mysqli_query($connection, $query);
            
            while(  $row = mysqli_fetch_array($select_user_profile_query)){
                
                          $user_image = $row['user_image'];
                          $user_fullname = $row['user_fullname'];
                          $user_nomatric = $row['user_nomatric'];
                          $user_ic = $row['user_ic'];
                          $user_class = $row['user_class'];
                          $user_weight = $row['user_weight'];
                          $user_phone = $row['user_phone'];
                          $user_faculty = $row['user_faculty'];
                          $user_year = $row['user_year'];
                          $user_email = $row['user_email'];
                          $user_role = $row['user_role'];
                                        
            }
            
            
        }





        
    // insert running and kicking into db
        if(isset($_POST['send_training'])){
            
               
                $user_class= $_POST['optionsRadiosInline'];
                $user_weight= $_POST['user_weight'];
            

            
               $training_running = $_POST['training_running'];
                $training_kicking = $_POST['training_kicking'];
                $training_condition = $_POST['attendance'];
             
            
                 if(!empty($training_running)  &&  !empty($training_kicking) &&  !empty($user_class)&&  !empty($user_weight)&&  !empty($training_condition)  ){

                            //query for insert running and kicking
                            $query_insert = "UPDATE training SET training_running   = '{$training_running}', training_kicking = '{$training_kicking}', training_condition = '{$training_condition}'
                                                                WHERE training_id    =   {$user_id} ";
                            $update_training_query_insert =   mysqli_query($connection, $query_insert);
                            confirmQuery($update_training_query_insert);
                     
                            //query for update class and weight
                            $query = "UPDATE users SET user_weight   = '{$user_weight}', user_class = '{$user_class}' WHERE user_id    =   {$user_id}         " ;
                            $update_training_query  =   mysqli_query($connection, $query);
                            confirmQuery($update_training_query);
                        
                    echo "<p class='bg-success'>Your training has been updated  </p>";
                 }
                else{
                                                                
                    echo "<script>alert('Fields cannot be empty')</script>";
                }
             
            
        }
    
        







/*
    if(isset($_POST['send_training'])){
            
         $the_user_id =   $_POST['send_training'];
        
        
                //$user_class= $_POST['user_class'];
                $user_weight= $_POST['weight'];
          

                      $query = "UPDATE users SET user_weight = '{$user_weight}'  WHERE user_id    =   {$the_user_id}  " ;
                        
                  
                  

                             $edit_user_query = mysqli_query($connection,$query);
            
                        
            
        }*/









?>

                        

    <div class="panel panel-default" >
        
                        <div class="panel-heading">
                            Kemaskini latihan 
                        </div>
        
        
        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    
                                    <form  action="" method="post" enctype="multipart/form-data">
                                        
                                                        
                                                        <label>Kelas :</label>
                                                        <div class="form-group" >
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="A" >A
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="B" >B
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="C" >C
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="D" >D
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="E" >E
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="F" >F
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="G" >G
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="H" >H
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="I" >I
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="J" >J
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="Bebas" >Bebas
                                                                </label>
                                                        </div>



                                                          <div class="form-group">
                                                            <label for="post_content">Berat :</label>
                                                            <input type="text" class="form-control" name="user_weight" placeholder="Kg" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Larian sejauh 2.4KM :</label>
                                                            <input type="text" class="form-control"name="training_running" placeholder="Minit">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Kelajuan sepakan selama 1 minit :</label>
                                                            <input type="text" class="form-control" name="training_kicking" placeholder="Kali">
                                                        </div>


                                                        <label>Kehadiran :</label>
                                                        <div class="form-group" >
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="attendance" id="RadiosInline1" value="Hadir" >Hadir
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="attendance" id="RadiosInline2" value="Tidak Hadir" >Tidak Hadir
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="attendance" id="RadiosInline3" value="Cedara" >Cedara
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="attendance" id="RadiosInline3" value="Kecemasan" >Kecemasan
                                                                </label>
                                                            </div>

                                                    
                                                                
                                                                <input type="submit" class="btn btn-primary" name="send_training" value="Hantar"></input>
                                                                <input type="reset" class="btn btn-default" name="reset_training" value="Reset"></input>
                                    </form>
                                </div>
                                
                                
                                  <h4 align="center" for="user_fullname" > <?php     echo strtoupper("$user_fullname");  ?>  </h4>
                                    <br>
                                                
                                <!--RIGHT-->
                                <div align="center">
                    
                                         <td >
                                                       <?php
                                                                            echo "<td><img  width='400' height='500'  src='../images/$user_image'  alt='image'  style='border-radius: 50%;'</td>";
                                                        ?>
                                                          
                                        </td>
                                </div>
                             
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

    
    
    
    
       
    
       

                        
                        
                        
