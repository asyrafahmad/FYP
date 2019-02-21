<?php

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
     



?>

                        

    
         
    
    

    
   <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            Pemilihan Atlet
                        </div>
                        <!-- /.panel-heading -->
       
       
       
       
       
       

                            
                            
                            
                            
<table class="table  table-hover" >
    
        <tr  >
            <td align="center">
                      
            </td>  
        </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      <?php
                
                            $query = "SELECT * FROM training " ;
                            $select_all_trainings_query = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($select_all_trainings_query)){
                                        $training_id = $row['training_id'];
                                        $training_running = $row['training_running'];
                                        $training_kicking = $row['training_kicking'];
                                        $training_condition = $row['training_condition'];
                                        $training_experience = $row['training_experience'];

                                        
                                        if( $training_running  < 11.00 && $training_kicking > 50){
                                    
                    ?>
    
    
                                <tr >
                                    <th>
                                                <div class="alert alert-success" align="center">
                                                    <div>
                                                            <h1>CONGRATULATION ! </h1>
                                                    </div>
                                                    <br>
                                                    <div>
                                                                     <?php
                                                                                     echo "<img  width='350' height='400'  src='../images/$user_image'  alt='image'   style='border-radius: 50%;'";
                                                                    ?>
                                                    </div>
                                                    <br>  <br>
                                                    <br>  
                                                        <div>
                                                                        <label align="center" for="user_fullname" > <?php     echo strtoupper("$user_fullname");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                    <label for="user_fullname" > Matric Number : <?php     echo strtoupper("$user_nomatric");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                    <label for="user_fullname" > IC Number : <?php     echo strtoupper("$user_ic");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                    <label for="user_fullname" > Weight : <?php     echo strtoupper("$user_weight");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                    <label for="user_fullname" > Class Category : <?php     echo strtoupper("$user_class");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                    <label for="user_fullname" > Year : <?php     echo strtoupper("$user_year");  ?>  </label>
                                                        </div>
                                                    <div>
                                                                                                                                  <label for="user_fullname" > Phone Number : <?php     echo strtoupper("$user_phone");  ?>  </label>

                                                    </div>



                                                    </div>
                                    </th>
                                </tr>
    
    
            <!--close loop-->
          <?php   
                                
                                        }                 }
                    
                ?>
                
    
    
    
    
                    
    </table>
                            
                            
                            
                            
                            
                            
                            <div class="alert alert-success">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            <div class="alert alert-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            <div class="alert alert-warning">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            <div class="alert alert-danger">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
   
    
    
    
    


    

                        
                        
