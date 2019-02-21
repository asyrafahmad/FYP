<?php

        if(isset($_POST['checkBoxArray'])){
            
            foreach($_POST['checkBoxArray'] as $postValueId){
                
                 $bulk_options = $_POST['bulk_options'];
                
                
                
                                switch($bulk_options){

                                            case 'published':

                                                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";

                                                $update_to_published_status = mysqli_query($connection, $query);
                                                confirmQuery($update_to_published_status);
                                                break;

                                            case 'draft':

                                                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";

                                                $update_to_draft_status = mysqli_query($connection, $query);
                                                confirmQuery($update_to_draft_status);
                                                break;


                                            case 'delete':

                                                $query = "DELETE FROM posts WHERE post_id = {$postValueId}";

                                                $update_to_delete_status = mysqli_query($connection, $query);
                                                confirmQuery($update_to_delete_status);
                                                break;
                                }
                
                
            }
            
        }




?>









<form action="" method='post'>

     <table class="table table-bordered table-hover">
    
            <div id="bulkOptionContainer" class="col-xs-4" >

                    <select class="form-control" name="bulk_options" id="">
                                    <option value="">Select Option</option>
                                    <option value="published">Publish</option>
                                    <option value="draft">Draft</option>
                                    <option value="delete">Delete</option>
                    </select>


            </div>
            
            <div class="col-xs-4">
    
                    <input type="submit" name="submit" class="btn btn-success" value="Apply">
                    <a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>
          
            </div>
    

    
                            <thead>
                                
                                <tr>
                                    <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th>Id</th>
                                    <th>Users</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                    <th>View Post</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Views</th>
                                </tr>
                             </thead>
                            <tbody>
                                
                                
                                <!-- Get data in db and display  -->
                                <?php
                                
                                            $query  =  "SELECT * FROM posts ";    
                                            $select_posts = mysqli_query($connection, $query);

                                            while ($row = mysqli_fetch_assoc($select_posts)){

                                                  $post_id = $row['post_id'];
                                                  $post_author = $row['post_author'];
                                                  $post_user = $row['post_user'];
                                                  $post_title = $row['post_title'];
                                                  $post_category_id = $row['post_category_id'];
                                                  $post_status = $row['post_status'];
                                                  $post_image = $row['post_image'];
                                                  $post_tags = $row['post_tags'];
                                                  $post_comment_count = $row['post_comment_count'];
                                                  $post_date = $row['post_date'];
                                                  $post_views_count = $row['post_views_count'];
                                                
                                                
                                                echo "<tr>";
                                                
                                    ?>
                                
                                                <!--IMPORTANT-->
                                                <!-- input from user to checkbox for every row-->
                                               <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'   value='<?php     echo $post_id     ?>'></td>
                                
                                
                                
                                
                                <?php
                                                echo "<td>$post_id  </td>";
                                                
                                                        
                                                        if(!empty ($post_author)){
                                                            
                                                            echo "<td>$post_author</td>";
                                                        }
                                                        elseif(!empty ($post_user)){
                                                            
                                                            echo "<td>$post_user</td>";
                                                        }
                                                    
                                                
                                                
                                             
                                                echo "<td>$post_title  </td>";
                                                
                                                        //change category id to category name (cat_title)
                                                        $query  =  "SELECT * FROM categories WHERE cat_id = {$post_category_id}";    
                                                        $select_categories_id = mysqli_query($connection, $query);

                                                        while ($row = mysqli_fetch_assoc($select_categories_id)){

                                                                $cat_id = $row['cat_id'];
                                                                $cat_title = $row['cat_title'];
                                                                
                                                            echo "<td>{$cat_title}  </td>";
                                                        }
                                                
                                                
                                                
                                                echo "<td>$post_status  </td>";
                                                // to fix the size picture use = class='img-responsive'
                                                echo "<td><img width='100'  src='../images/$post_image'  alt='image' class='rounded-circle' </td>";
                                                echo "<td>$post_tags  </td>";
                                                
                                                        $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                                                        $send_comment_query = mysqli_query($connection, $query);
                                                        $count_comments = mysqli_num_rows($send_comment_query);
                                                
                                                        // 2 variable below are for direct to go to the comment specific post
                                                        $row = mysqli_fetch_array($send_comment_query);
                                                        $comment_id = $row['comment_id'];
                                                
                                                echo "<td><a href='post_comments.php?id=$post_id'>$count_comments  </a></td>";
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                echo "<td>$post_date </td>";
                                                echo "<td><a href='../post.php?p_id={$post_id}'>View Post </a></td>";
                                                //   ?edit AND ?delete are parameter to go to that page
                                                //  ?edit_post is set multiple parameter value
                                                // & is to divide with the id
                                                // p_id is a post_id
                                                echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit </a></td>";
                                                //  onClick is a JQuery ~ javascript
                                                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete? ');  \"      href='posts.php?delete={$post_id}'>Delete </a></td>";
                                                echo "<td><a href='posts.php?reset={$post_id}'>    {$post_views_count}</a></td>";
                                                echo "</tr>";
                                                
                                            }
                                     ?>
                                
                                
                             
                            </tbody>
                        </table>
</form>

<?php

    if(isset($_GET['delete'])){
        
        $the_post_id = $_GET['delete'];
        
        $query = "DELETE FROM posts WHERE post_id = {$the_post_id}  ";
        $delete_query = mysqli_query($connection, $query);
        //header refresh the page so that the page change once after clicked delete button
        header("Location: posts.php");
    }


    //reset post_view_count to 0 ~ query
    if(isset($_GET['reset'])){
        
        $the_post_id = $_GET['reset'];
        $query = "UPDATE  posts SET post_views_count = 0 WHERE post_id ="   .   mysqli_real_escape_string($connection, $_GET['reset'])  .   " ";
        $reset_query = mysqli_query($connection, $query);
        header("Location: posts.php");
    }


?>