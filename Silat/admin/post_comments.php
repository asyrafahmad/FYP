   <?php    include "includes/admin_header.php";     ?>


    <div id="wrapper">

        
        
        
        
        <!-- Navigation -->
       <?php    include "includes/admin_navigation.php";     ?>


        
        
        
        
        
        
        
        
        
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                         <h1 class="page-header">
                            Welcome to Comments
                            <small>Author</small>
                        </h1>
                        
                        
                        
                        
                        
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Comment </th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>In Response to</th>
                                     <th>Date</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>Delete</th>
                                </tr>
                             </thead>
                            <tbody>
                                
                                
                                <!-- Get data in db and display  -->
                                <?php
                                            // query to go to the specific comment post!!!!!!!!!!!!!!!! tak paham S27~231
                                            $query  =  "SELECT * FROM comments WHERE comment_post_id = " . mysqli_real_escape_string($connection, $_GET['id'])   . "   ";    
                                            $select_comments = mysqli_query($connection, $query);

                                            while ($row = mysqli_fetch_assoc($select_comments)){

                                                  $comment_id = $row['comment_id'];
                                                  $comment_post_id = $row['comment_post_id'];
                                                  $comment_author = $row['comment_author'];
                                                  $comment_content = $row['comment_content'];
                                                  $comment_email = $row['comment_email'];
                                                  $comment_status = $row['comment_status'];
                                                  $comment_date = $row['comment_date'];
                                                
                                                
                                                
                                                echo "<tr>";
                                                echo "<td>$comment_id  </td>";
                                                echo "<td>$comment_author  </td>";
                                                echo "<td>$comment_content  </td>";
                                                
/*                                                        //change category id to category name (cat_title)
                                                        $query  =  "SELECT * FROM categories WHERE cat_id = {$post_category_id}";    
                                                        $select_categories_id = mysqli_query($connection, $query);

                                                        while ($row = mysqli_fetch_assoc($select_categories_id)){

                                                                $cat_id = $row['cat_id'];
                                                                $cat_title = $row['cat_title'];

                                                        }
*/
                                                
                                                echo "<td>$comment_email  </td>";
                                                echo "<td>$comment_status  </td>";
                                                
                                                //column in response to
                                                //display comment post title into comment table..
                                                $query = "SELECT * FROM posts WHERE post_id = $comment_post_id" ;
                                                $select_post_id_query = mysqli_query ($connection,$query);

                                                while($row = mysqli_fetch_assoc($select_post_id_query)){

                                                    $post_id = $row['post_id'];
                                                    $post_title = $row['post_title'];

                                                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title </a> </td>";
                                                }
                                                
                                                
                                                
                                                echo "<td>$comment_date  </td>";
                                                
                                                
                                                echo "<td><a href='comments.php?approve=$comment_id '>Approve </a></td>";
                                                echo "<td><a href='comments.php?unapprove=$comment_id '>Unapprove </a></td>";
                                              // !!!!!!!!!!!!!!TAK PAHAM S27~232
                                                echo "<td><a href='post_comments.php?delete=$comment_id&id="    .   $_GET['id'] .   " '>Delete </a></td>";
                                                echo "</tr>";
                                                
                                            }
                                     ?>
                                
                                
                                
                                
                              
                            </tbody>
                        </table>


<?php
            
            // approve query
            if(isset($_GET['approve'])){

                $the_comment_id = $_GET['approve'];

                $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id  ";
                $approve_comment_query = mysqli_query($connection, $query);
                 //header refresh the page so that the page change once after clicked delete button
                header("Location: comments.php");
            }



            // unapprove query
            if(isset($_GET['unapprove'])){

                $the_comment_id = $_GET['unapprove'];

                $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id ";
                $unapprove_comment_query = mysqli_query($connection, $query);
                 //header refresh the page so that the page change once after clicked delete button
                header("Location: comments.php");
            }




            // delete query
            if(isset($_GET['delete'])){

                $the_comment_id = $_GET['delete'];

                $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}  ";
                $delete_query = mysqli_query($connection, $query);
                 //header refresh the page so that the page change once after clicked delete button
                header("Location: post_comments.php?id="    .   $_GET['id'] .   " ");
            }
?>





                
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php      include "includes/admin_footer.php";     ?>
