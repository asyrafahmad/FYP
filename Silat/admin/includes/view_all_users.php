    <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname </th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Date</th>
<!--
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>Delete</th>
-->
                                </tr>
                             </thead>
                            <tbody>
                                
                                
                                <!-- Get data in db and display  -->
                                <?php
                                
                                            $query  =  "SELECT * FROM users ";    
                                            $select_users = mysqli_query($connection, $query);

                                            while ($row = mysqli_fetch_assoc($select_users)){

                                                  $user_id = $row['user_id'];
                                                  $username = $row['username'];
                                                  $user_password = $row['user_password'];
                                                  $user_firstname = $row['user_firstname'];
                                                  $user_lastname = $row['user_lastname'];
                                                  $user_email = $row['user_email'];
                                                  $user_image = $row['user_image'];
                                                  $user_role = $row['user_role'];
                                        
                                                
                                                
                                                
                                                echo "<tr>";
                                                echo "<td>$user_id  </td>";
                                                echo "<td>$username  </td>";
                                                echo "<td>$user_firstname  </td>";
                                                
/*                                                        //change category id to category name (cat_title)
                                                        $query  =  "SELECT * FROM categories WHERE cat_id = {$post_category_id}";    
                                                        $select_categories_id = mysqli_query($connection, $query);

                                                        while ($row = mysqli_fetch_assoc($select_categories_id)){

                                                                $cat_id = $row['cat_id'];
                                                                $cat_title = $row['cat_title'];

                                                        }
*/
                                                
                                                echo "<td>$user_lastname  </td>";
                                                echo "<td>$user_email  </td>";
                                                echo "<td>$user_role </td>";
                                                
                                          /*      
                                                
                                                //column in response to
                                                //display comment post title into comment table..
                                                $query = "SELECT * FROM posts WHERE post_id = $comment_post_id" ;
                                                $select_post_id_query = mysqli_query ($connection,$query);

                                                while($row = mysqli_fetch_assoc($select_post_id_query)){

                                                    $post_id = $row['post_id'];
                                                    $post_title = $row['post_title'];

                                                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title </a> </td>";
                                                }
                                                
                                                */
                                                
                                               
                                                echo "<td><a href='users.php?change_to_admin={$user_id} '>Admin </a></td>";
                                                echo "<td><a href='users.php?change_to_subscriber={$user_id} '>Subscriber </a></td>";
                                                //   ?delete are parameter to go to that page
                                                //  ?delete_post is set multiple parameter value
                                                // & is to divide with the id
                                                // p_id is a post_id
                                                
                                                echo "<td><a href='users.php?source=edit_user&edit_user={$user_id} '>Edit </a></td>";
                                                echo "<td><a href='users.php?delete={$user_id} '>Delete </a></td>";
                                                echo "</tr>";
                                                
                                            }
                                     ?>
                                
                                
                                
                                
                              
                            </tbody>
                        </table>


<?php
            
            // approve query
            if(isset($_GET['change_to_admin'])){

                $the_user_id = $_GET['change_to_admin'];

                $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id  ";
                $change_to_admin_query = mysqli_query($connection, $query);
                 //header refresh the page so that the page change once after clicked delete button
                header("Location: users.php");
            }



            // unapprove query
            if(isset($_GET['change_to_subscriber'])){

                $the_user_id = $_GET['change_to_subscriber'];

                $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id ";
                $change_to_admin_query = mysqli_query($connection, $query);
                 //header refresh the page so that the page change once after clicked delete button
                header("Location:users.php");
            }




            // delete query
            if(isset($_GET['delete'])){
                
                // FOR MYSQL injection protection               ## BUGS !
                if(isset($_SESSION['user_role'])){
                     // FOR MYSQL injection protection              ## BUGS !
                    if($_SESSION['user_role'] == 'admin'){
                        
                        
                                // FOR MYSQL injection protection (to prevent anybody from coming into our website) 
                                // mysqli_real_escape_string ($connection, $_GET['delete'] is the MYSQL injection protection code
                                $the_user_id = mysqli_real_escape_string ($connection, $_GET['delete']);

                                $query = "DELETE FROM users WHERE user_id = {$the_user_id}  ";
                                $delete_user_query = mysqli_query($connection, $query);
                                 //header refresh the page so that the page change once after clicked delete button
                                header("Location: users.php");
                    }
                }
            }



?>