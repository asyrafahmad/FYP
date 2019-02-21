<?php
        

        if(isset($_POST['create_user'])){
            
                $username = $_POST['username'];
                $user_firstname = $_POST['user_firstname'];
                $user_lastname = $_POST['user_lastname'];
                $user_role = $_POST['user_role'];
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

            
            
            
                $training_experience = $_POST['experience'];
            
            //query for insert running and kicking
                            $query_insert = "INSERT INTO training(training_experience) VALUES('{$training_experience}'  )   ";
                            $update_training_query_insert =   mysqli_query($connection, $query_insert);
                            confirmQuery($update_training_query_insert);
            
            
            
            
            
                    $query = "INSERT INTO users( username, user_firstname, user_lastname, user_role, user_fullname, user_nomatric, user_ic, user_class, user_weight, user_phone, user_faculty, user_year, user_email, user_password)  ";
                    $query .= "VALUES('{$username}', '{$user_firstname}' , '{$user_lastname}', '{$user_role}', '{$user_fullname}', '{$user_nomatric}', '{$user_ic}', '{$user_class}', '{$user_weight}', '{$user_phone}', '{$user_faculty}', '{$user_year}', '{$user_email}', '{$user_password}'   )  ";
                    $create_user_query  =   mysqli_query($connection, $query);

                    // function
                    confirmQuery($create_user_query);

            
                    // notification for after add new user 
                    echo "User Created : " . " "    .   "<a href='users.php'>View Users</a>  ";
        }


?>





<!-- enctype is   -->
<form action="" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">
                <label for="post_tags">Username</label>
                    <input type="text" class="form-control" name="username">
            </div>
        <div class="form-group">
            <label for="post_author">Firstname</label>
                <input type="text" class="form-control" name="user_firstname">
        </div>
          <div class="form-group">
                <label for="post_status">Lastname</label>
                    <input type="text" class="form-control" name="user_lastname">
            </div>
    
    
    
         <div class="form-group">

                  <select name="user_role"  id="">

                        <option value="subscriber">Select Option</option>
                        <option value="admin">Admin</option>
                        <option value="subscriber">Subscriber</option> 

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
                       <input type="text"   class="form-control" name="user_fullname">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Matric Number</label>
                       <input type="text"   class="form-control" name="user_nomatric">
            </div> 
    
    <div class="form-group">
                <label for="post_content">IC Number</label>
                       <input type="text"   class="form-control" name="user_ic">
            </div>
    
    <div class="form-group">
                <label for="post_content">Class</label>
                       <input type="text"   class="form-control" name="user_class">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Weight</label>
                       <input type="text"   class="form-control" name="user_weight">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Phone Number</label>
                       <input type="text"   class="form-control" name="user_phone">
            </div> 
    
    <div class="form-group">
                <label for="post_content">Faculty</label>
                       <input type="text"   class="form-control" name="user_faculty">
            </div>
    
    <div class="form-group">
                <label for="post_content">Year</label>
                       <input type="text"   class="form-control" name="user_year">
            </div>
    
          
          <div class="form-group">
                <label for="post_content">Email</label>
                       <input type="email" class="form-control" name="user_email">
            </div>
    
        <div class="form-group">
                <label for="post_content">Password</label>
                       <input type="password" class="form-control" name="user_password">
            </div>
    
    
    

    <label>Pengalaman :</label>
    <div class="form-group" >
            <label class="radio-inline">
                <input type="radio" name="experience" id="RadiosInline1" value="Berpengalaman">Ada
            </label>
            <label class="radio-inline">
                <input type="radio" name="experince" id="RadiosInline2" value="Tiada pengalaman" >Tiada
           
        </div>
    
    
    
    
    
    
            <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
            </div>
</form> 