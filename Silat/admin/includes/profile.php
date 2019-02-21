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

?>
                        
                  
                  

                        
                        
                        
                        
<div class="jumbotron"  >
                        <h1 align="center"  >
                           <strong>Biodata</strong>
                        </h1>
    <table class="table  table-hover" >
        <tr >
            <td style="align: left">
                           <?php
                                                echo "<td><img  width='400' height='500'  src='../images/$user_image'  alt='image'  style='border-radius: 50%;'</td>";
                            ?>
                              <hr class="my-4">
             

            </td>
        </tr>
        <tr align="center">
                <td colspan="2">
                                    <label align="center" for="user_fullname" > <?php     echo strtoupper("$user_fullname");  ?>  </label>
            </td>
        </tr>
        <tr align="center">
            <td>
                <label for="user_fullname" > Matric Number : <?php     echo strtoupper("$user_nomatric");  ?>  </label>
            </td>
              <td>
                <label for="user_fullname" > IC Number : <?php     echo strtoupper("$user_ic");  ?>  </label>
            </td>
        </tr>
        <tr align="center">
            <td>
                <label for="user_fullname" > Weight : <?php     echo strtoupper("$user_weight");  ?>  </label>
            </td>
              <td>
                <label for="user_fullname" > Class Category : <?php     echo strtoupper("$user_class");  ?>  </label>
            </td>
        </tr >
        <tr align="center">
            <td>
                                <label for="user_fullname" > Year : <?php     echo strtoupper("$user_year");  ?>  </label>
            </td>
              <td>
                                  <label for="user_fullname" > Phone Number : <?php     echo strtoupper("$user_phone");  ?>  </label>
            </td>
        </tr>
   

    </table>
       
    
       
</div>
                        
                        
            