<?php
        

if(isset($_GET['edit_user'])){
    
    
    
                $the_user_id = $_GET['edit_user'];
                
    
                $query  =  "SELECT * FROM users WHERE user_id = $the_user_id";    
                $select_users_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_users_query)){

                      $user_id = $row['user_id'];
                      $username = $row['username'];
                      $user_password = $row['user_password'];
                      $user_firstname = $row['user_firstname'];
                      $user_lastname = $row['user_lastname'];
                      $user_fullname = $row['user_fullname'];
                      $user_nomatric = $row['user_nomatric'];
                      $user_ic = $row['user_ic'];
                      $user_class = $row['user_class'];
                      $user_weight = $row['user_weight'];
                      $user_phone = $row['user_phone'];
                      $user_faculty = $row['user_faculty'];
                      $user_year = $row['user_year'];
                      $user_email = $row['user_email'];
                      $user_image = $row['user_image'];
                      $user_role = $row['user_role'];
                }
}








        if(isset($_POST['edit_user'])){
            
                $username = $_POST['username'];
                $user_firstname = $_POST['user_firstname'];
                $user_lastname = $_POST['user_lastname'];
                $user_role = $_POST['user_role'];
            /*
                $post_image = $_FILES['image']['name'];
                $post_image_temp = $_FILES['image']['tmp_name'];
            */
            
                
                $user_fullname= $_POST['user_fullname'];
                $user_nomatric= $_POST['user_nomatric'];
                $user_ic= $_POST['user_ic'];
                $user_class= $_POST['user_class'];
                $user_weight= $_POST['user_weight'];
                $user_phone= $_POST['user_phone'];
                $user_faculty= $_POST['user_faculty'];
                $user_year= $_POST['user_year'];
                $user_email= $_POST['user_email'];
                $user_password= $_POST['user_password'];
                //$post_date = date('d-m-y');
            
//                //move upload image to the server image file
//                move_uploaded_file($post_image_temp,    "../images/$post_image" );
//            
            
            
                //ENCRYPT PASSWORD WHEN CLICK EDIT
                        $query = "SELECT randSalt FROM users";
                        $select_randsalt_query = mysqli_query($connection, $query);

                            if(!$select_randsalt_query){

                                die("Query failed" . mysqli_error($connection));
                            }

                        
                        
                
                        $row  = mysqli_fetch_array($select_randsalt_query);
                        $salt = $row['randSalt'];
                        $hashed_password  = crypt($user_password, $salt);
                //ENCRYPT PASSWORD WHEN CLICK EDIT
            
            
            
            
                      //UPDATE query
                            $query = "UPDATE users SET      " ;
                            $query .= "username               = '{$username}',    ";
                            $query .= "user_firstname                     = '{$user_firstname}',    ";
                            $query .= "user_lastname     = '{$user_lastname}',    ";
                            $query .= "user_fullname                   = '{$user_fullname}',   ";
                            $query .= "user_role                    = '{$user_role}',   ";
                            $query .= "user_nomatric                    = '{$user_nomatric}',   ";
                            $query .= "user_ic                    = '{$user_ic}',   ";
                            $query .= "user_class                    = '{$user_class}',   ";
                            $query .= "user_weight                    = '{$user_weight}',   ";
                            $query .= "user_phone                    = '{$user_phone}',   ";
                            $query .= "user_faculty                    = '{$user_faculty}',   ";
                            $query .= "user_year                    = '{$user_year}',   ";
                            $query .= "user_email                    = '{$user_email}',    ";
                            $query .= "user_password             = '{$hashed_password}'    ";
                            $query .= "WHERE user_id    =   {$the_user_id}  ";
                  

                             $edit_user_query = mysqli_query($connection,$query);
            
                            confirmQuery($edit_user_query);
            
        }


?>





<!-- enctype is   -->
<form action="" method="post" enctype="multipart/form-data">
    
    
        <div class="form-group">
                <label for="post_tags">Username</label>
                    <input type="text"  value="<?php echo $username;    ?>" class="form-control" name="username">
            </div>
    
        <div class="form-group">
            <label for="post_author">Firstname</label>
                <input type="text" value="<?php echo $user_firstname;    ?>" class="form-control"  name="user_firstname">
        </div>
          <div class="form-group">
                <label for="post_status">Lastname</label>
                    <input type="text"  value="<?php echo $user_lastname;    ?>" class="form-control" name="user_lastname">
            </div>
    
    
    
         <div class="form-group">

                  <select name="user_role"  id="">

                        <option value="<?php echo $user_role;    ?>"  ><?php echo $user_role;    ?></option>
                      
                      
                          <?php 

                                if($user_role =='admin'){
                                   echo  "<option value='subscriber'>Subscriber</option>" ;
                                }
                                else
                                {
                                      echo  "<option value='admin''>Admin</option>";
                                }



                          ?>
                       
                        

                    </select>
                </div>

    
<!--
    
          <div class="form-group">
                <label for="post_image">Post Image</label>
                    <input type="file"  name="image">
            </div>
    
-->
    
          
          <div class="form-group">
                <label for="post_content">Fullname</label>
                       <input type="text"  value="<?php echo $user_fullname;    ?>" class="form-control" name="user_fullname">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Matric Number</label>
                       <input type="text"  value="<?php echo $user_nomatric;    ?>" class="form-control" name="user_nomatric">
            </div> 
    
    <div class="form-group">
                <label for="post_content">IC Number</label>
                       <input type="text"  value="<?php echo $user_ic;    ?>" class="form-control" name="user_ic">
            </div>
    
    <div class="form-group">
                <label for="post_content">Class</label>
                       <input type="text"  value="<?php echo $user_class;    ?>" class="form-control" name="user_class">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Weight</label>
                       <input type="text"  value="<?php echo $user_weight;    ?>" class="form-control" name="user_weight">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Phone Number</label>
                       <input type="text"  value="<?php echo $user_phone;    ?>" class="form-control" name="user_phone">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Faculty</label>
                       <input type="text"  value="<?php echo $user_faculty;    ?>" class="form-control" name="user_faculty">
            </div>
    
    <div class="form-group">
                <label for="post_content">Year</label>
                       <input type="text"  value="<?php echo $user_year;    ?>" class="form-control" name="user_year">
            </div>
    
    <div class="form-group">
                <label for="post_content">Email</label>
                       <input type="email"  value="<?php echo $user_email;    ?>" class="form-control" name="user_email">
            </div>
    
        <div class="form-group">
                <label for="post_content">Password</label>
                       <input type="password" value="<?php echo $user_password;    ?>"  class="form-control" name="user_password">
            </div>
    
            <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
            </div>
</form> 