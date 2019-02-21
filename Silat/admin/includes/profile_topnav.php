  <?php
   if(isset($_SESSION['username'])){
            
                    $username = $_SESSION['username'];
       
                    $query  =  "SELECT * FROM users WHERE  username = '{$username}' ";    
                            $select_user_id = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_user_id)){

                                  $user_id = $row['user_id'];

                            }
   }
                            
 ?>                       
                        
                                               
                            <ul class="nav nav-pills nav-justified">
                                      <li class="nav-item">
                                        <a class="nav-link active" <?php echo "href='./profiles.php' "?>>Profil </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" <?php echo "href='profiles.php?source=profile_activity&edit_user={$user_id}''     "?>>Latihan</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" <?php echo "href='profiles.php?source=profile_statistic'        "?>>Statistik</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link disabled"  <?php echo "href='profiles.php?source=profile_selection'        "?>>Pemilihan Atlet</a>
                                      </li>
                            </ul>