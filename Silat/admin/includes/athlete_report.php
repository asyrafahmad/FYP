<h2 align="center">Athletes</h2>







<table class="table table-bordered table-hover">
                            <thead>
                                  <tr>
                                    <th></th>
                                    <th><input type="text" class="form-control" name="search_user"></th>
                                    <th><input type="text" class="form-control" name="search_athlete"></th>
                                    <th><input type="text" class="form-control" name="search_nomatric"></th>
                                    <th><input type="text" class="form-control" name="search_ic"></th>
                                    <th><input type="text" class="form-control" name="search_class"></th>
                                    <th><input type="text" class="form-control" name="search_weight"></th>
                                    <th><input type="text" class="form-control" name="search_phone"></th>
                                    <th><input type="text" class="form-control" name="search_faculty"></th>
                                    <th><input type="text" class="form-control" name="search_year"></th>
                           
                                </tr>
                                <tr>
                                    <th><a  style="color:black; text-decoration:none" href="" >Id</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >User</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Athlete</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Matrik</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No IC</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Kategori Kelas</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Berat</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Telefon</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Fakulti</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Tahun</a></th>
                                    
                                </tr>  
                              
                             </thead>
                            <tbody>
                                
                                <?php
                                
                                            $query  =  "SELECT * FROM users ";    
                                            $select_athlete = mysqli_query($connection, $query);

                                            while ($row = mysqli_fetch_assoc($select_athlete)){

                                                 $user_id = $row['user_id'];
                                                 $username = $row['username'];
                                                  $user_fullname = $row['user_fullname'];
                                                  $user_nomatric = $row['user_nomatric'];
                                                  $user_ic = $row['user_ic'];
                                                  $user_class = $row['user_class'];
                                                  $user_weight = $row['user_weight'];
                                                  $user_phone = $row['user_phone'];
                                                  $user_faculty = $row['user_faculty'];
                                                  $user_year = $row['user_year'];
                                               
                                        
                                                
                                                
                                                
                                                echo "<tr>";
                                                echo "<td>$user_id  </td>";
                                                echo "<td>$username  </td>";
                                                echo "<td>$user_fullname  </td>";
                                                echo "<td>$user_nomatric  </td>";
                                                echo "<td>$user_ic  </td>";
                                                echo "<td>$user_class  </td>";
                                                echo "<td>$user_weight  </td>";
                                                echo "<td>$user_phone  </td>";
                                                echo "<td>$user_faculty  </td>";
                                                echo "<td>$user_year  </td>";
                                                
                                            }
                                ?>
                                
                                
                              
                            </tbody>
                        </table>

