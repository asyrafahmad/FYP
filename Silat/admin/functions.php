
<?php



//  FOR USERS ONLINE 
function users_online(){
    
    
    if(isset($_GET['onlineusers'])){
        
        global $connection;
        
        
                if(!$connection){

                    session_start();

                    include ("../includes/db.php");

                    
                    
                    // session_id = catch session id where every chrome has different unique id
                    $session = session_id();
                    $time = time();
                    $time_out_in_seconds = 05;
                    $time_out = $time - $time_out_in_seconds;

                    $query = "SELECT * FROM users_online WHERE session = '$session' ";
                    $send_query = mysqli_query($connection, $query);
                    $count = mysqli_num_rows($send_query);

                            if($count == NULL){
                                // 1st user
                                mysqli_query($connection, "INSERT INTO users_online(session, time ) VALUES('$session', '$time')     ");
                            }
                            else{
                                //update the user
                                mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'    ");
                            }

                        //if $time is bigger than $time_out_in_seconds, we know that the user is not active
                    $users_online_query =  mysqli_query($connection, "SELECT * FROM users_online WHERE time > ' $time_out'    ");
                    echo $count_user = mysqli_num_rows($users_online_query);


                } // close if(!$connection){
        
        
    }   // get request isset()
        
} // close function

users_online();     //call function





//add_post.php   confirm
function confirmQuery($result){
    
    global $connection;
    
        if(!$result){

            die("QUERY FAILED   ."  .   mysqli_error($connection));
        }
}



function insert_categories()  {
    
        // use it when everytime we call a function
        global $connection;
    
    
         //validation submit button
                if(isset($_POST['submit'])){

                $cat_title = $_POST['cat_title'];

                        if($cat_title == ""  ||  empty($cat_title)){
                            echo "This field should not be empty";
                        }
                        else{

                            $query      =   "INSERT INTO categories(cat_title) ";
                            $query     .=   "VALUE('{$cat_title}')      ";

                            $create_category_query = mysqli_query($connection, $query);

                                    if(!$create_category_query){

                                        die('QUERY FAILED'  .   mysqli_error($connection));

                                    }
                        }
                }
}
     


function findAllCategories(){
    
                 // use it when everytime we call a function
                    global $connection;

    
                     // FIND ALL CATEGORIES QUERY
                    $query  =  "SELECT * FROM categories ";    
                    $select_categories = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($select_categories)){

                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];

                            echo "<tr>";
                            echo "<td>  {$cat_id}  </td> ";
                            echo "<td>  {$cat_title}  </td> ";
                            // create delete function
                            echo "<td><a href='categories.php?delete={$cat_id} '>  Delete    </a> </td> ";
                            // create update function
                            echo "<td><a href='categories.php?edit={$cat_id} '>  Edit    </a> </td> ";
                            echo "</tr>";
                    }

}


function deleteCategories(){
    
                     // use it when everytime we call a function
                            global $connection;

                                    if(isset($_GET['delete'])){

                                        $the_cat_id =   $_GET['delete'];
                                        $query  =   "DELETE FROM categories WHERE cat_id    =   {$the_cat_id}   ";
                                        $delete_query   =   mysqli_query($connection,$query);
                                        //  header is for send that request back to another request categories page  
                                        //  OR     
                                        //  to refresh the page so that page will appear once when delete button is clicked
                                        // mean it goes back to categories.php instead of go to categories.php?delete={cat_id} on link
                                        header("Location : categories.php");
                                    }
}




?>