<?php   include "db.php";           ?>
<!-- turn on th SESSION -->
<?php   session_start();           ?>


<?php
        
        if(isset($_POST['login'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // to avoid harm from hacker to get into database
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            
            $query = "SELECT * FROM users WHERE username = '{$username}'    ";
            $select_user_query = mysqli_query($connection, $query);
            
            
                        // if query is fail
                        if(!$select_user_query){

                            die("QUERY FAILED". mysqli_error($connection));
                        }
            
            
            
                        // select row in the db if query is correct
                        while($row = mysqli_fetch_array($select_user_query)){

                            $db_user_id = $row['user_id'];
                            $db_username = $row['username'];
                            $db_user_password = $row['user_password'];
                            $db_user_firstname = $row['user_firstname'];
                            $db_user_lastname = $row['user_lastname'];
                            $db_user_role = $row['user_role'];
                        }
   
            
            
            
            
            
            
 /*            
            //  LATEST VERIFY ENCRYPTION PASSWORD
             if(password_verify($password, $db_user_password)){

                            $_SESSION['username'] = $db_username;
                            $_SESSION['firstname'] = $db_user_firstname;
                            $_SESSION['lastname'] = $db_user_lastname;
                            $_SESSION['user_role'] = $db_user_role;
            
                 echo 'password is valid';
                //header("Location: ../admin/index.php");
                 
              }
              else{
                    echo 'password is invalid';
                       //header("Location: ../index.php");
                }
            
            */
            
            
            
            
            
            
            
            
            
            
            
            
                     
                        /*change encrypt password to the user password back*/
                       //$password =  crypt($password, $db_user_password);
            
            
            
/*                       !== (is not equal) and ===(identical) both ar same function                                */
            
            //NEW VERSION**
                         if($username  === $db_username && $password ===  $db_user_password){

                            $_SESSION['username'] = $db_username;
                            $_SESSION['firstname'] = $db_user_firstname;
                            $_SESSION['lastname'] = $db_user_lastname;
                            $_SESSION['user_role'] = $db_user_role;
                         
                             header("Location: ../admin/index.php");
                        }
                        else{

                            header("Location: ../index.php");
                        }
            
            
                            /*    --------------------------   OR ----------------------------*/
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
         /*   
         
                    //OLD VERSION**
         
         
                        // account validation
                        if($username  !== $db_username && $password !==  $db_user_password){

                            header("Location:  ../index.php");
                        }
                        else if($username  == $db_username && $password ==  $db_user_password){

                            $_SESSION['username'] = $db_username;
                            $_SESSION['firstname'] = $db_user_firstname;
                            $_SESSION['lastname'] = $db_user_lastname;
                            $_SESSION['user_role'] = $db_user_role;
                            
                            
                            header("Location: ../admin/index.php");
                        }
                        else{

                            header("Location: ../index.php");
                        }
                        
                        
            */
            
            
        }
?>