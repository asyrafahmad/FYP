<?php
                //ASC AND DESC
                if(isset($_POST['ASC'])){

                    $asc_query  =  "SELECT * FROM users ORDER BY username ASC ";    
                    $result = mysqli_query($connection, $asc_query);
                }
                elseif(isset($_POST['DESC'])){

                    $desc_query  =  "SELECT * FROM users ORDER BY username DESC ";    
                    $result = mysqli_query($connection, $desc_query);
                }
                elseif(isset($_POST['search'])){
                    
                        $search = $_POST['search_athlete'];
                    
                   $search_query  =  " SELECT * FROM users  WHERE user_fullname LIKE '%".$search."%' 
                                                           OR user_class LIKE '%".$search."%'  
                                                           OR user_weight LIKE '%".$search."%'  
                                                           OR user_nomatric LIKE '%".$search."%' 
                                                           OR user_ic LIKE '%".$search."%' 
                                                           OR user_phone LIKE '%".$search."%' 
                                                           OR user_year LIKE '%".$search."%' 
                                                           OR user_faculty LIKE '%".$search."%' 
                                                           OR user_email LIKE '%".$search."%'   ";    

                    $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['fullname'])){
                    
                        $search = $_POST['search_fullname'];
                        $search_query  =  " SELECT * FROM users  WHERE user_fullname LIKE '%".$search."%'   ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['class'])){
                    
                        $search = $_POST['search_class'];
                        $search_query  =  " SELECT * FROM users  WHERE  user_class LIKE '%".$search."%'   ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['weight'])){
                    
                        $search = $_POST['search_weight'];
                        $search_query  =  " SELECT * FROM users  WHERE  user_weight LIKE '%".$search."%'  ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['nomatric'])){
                    
                        $search = $_POST['search_nomatric'];
                        $search_query  =  " SELECT * FROM users  WHERE  user_nomatric LIKE '%".$search."%' ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['ic'])){
                    
                        $search = $_POST['search_ic'];
                        $search_query  =  " SELECT * FROM users  WHERE user_ic LIKE '%".$search."%' ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['phone'])){
                    
                        $search = $_POST['search_phone'];
                        $search_query  =  " SELECT * FROM users  WHERE user_phone LIKE '%".$search."%' ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['year'])){
                    
                        $search = $_POST['search_year'];
                        $search_query  =  " SELECT * FROM users  WHERE user_year LIKE '%".$search."%' ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['faculty'])){
                    
                        $search = $_POST['search_faculty'];
                        $search_query  =  " SELECT * FROM users  WHERE user_faculty LIKE '%".$search."%'  ";    
                        $result = mysqli_query($connection, $search_query);
                }
                elseif(isset($_POST['email'])){
                    
                        $search = $_POST['search_email'];
                        $search_query  =  " SELECT * FROM users  WHERE user_email LIKE '%".$search."%'   ";    
                        $result = mysqli_query($connection, $search_query);
                }
                else{

                    $default_query  =  "SELECT * FROM users ";    
                    $result = mysqli_query($connection, $default_query);
                }













?>












<h2 align="center">Coach</h2>




<div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai Atlet
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    
                   
   <form action="" method="post" enctype="multipart/form-data">
                                 
        
       
       
       
       <!--Olahraga LELAKI-->     
        <table class="table table-striped table-bordered table-hover dataTable no-footer " id="dataTables-example" aria-describedby="dataTables-example_info">
        <br>
            
            
            <input type="text" class="form-control" name="search_athlete">      <input type="submit" name="search" value="Search">
            <br>
            <br>
            
                                    <input type="submit" name="ASC" value="Ascending">
                                    <input type="submit" name="DESC" value="Descending">
            
             <br>
            <br>
                    

                   <thead>
                       
                                <tr >
                                    <th colspan="10">Kategori Olahraga (Lelaki)</th>
                                 
                                </tr>
                       
                                 <tr>
                                    <th></th>
                                    <th ><input type="text" class="form-control" name="search_fullname"> <input type="submit" name="fullname" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_class"> <input type="submit" name="class" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_weight"><input type="submit" name="weight" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_nomatric"><input type="submit" name="nomatric" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_ic"><input type="submit" name="ic" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_phone"><input type="submit" name="phone" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_year"><input type="submit" name="year" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_faculty"><input type="submit" name="faculty" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_email"><input type="submit" name="email" value="Search"></th>
                           
                                </tr>
                                <tr>
                                   <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Nama penuh</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Kelas</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Berat</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Matrik</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >IC</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Telefon</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Tahun</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Fakulti</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Emel</a></th>

                                </tr>  

             </thead>
            
            
             <tbody >
                                
                                <?php        while ($row = mysqli_fetch_array($result)) :        ?>
                                            <tr>
                                                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'   value='<?php     echo $post_id     ?>'></td>
                                                <td><?php echo $row['user_fullname'];     ?></td>
                                                <td><?php echo $row['user_class'];     ?></td>
                                                <td><?php echo $row['user_weight'];     ?></td>
                                                <td><?php echo $row['user_nomatric'];     ?></td>   
                                                <td><?php echo $row['user_ic'];     ?></td>   
                                                <td><?php echo $row['user_phone'];     ?></td>
                                                <td><?php echo $row['user_year'];     ?></td>
                                                <td><?php echo $row['user_faculty'];     ?></td>
                                                <td><?php echo $row['user_email'];     ?></td>
                                            </tr>
                                                
                                    <?php        endwhile;      ?>  
                 
                  </tbody>
   
    </table>
       
       
            
       <br>
       
       
       
       
       
       
       
       
       
       
       
       
  <!--Olahraga PEREMPUAN-->
       <table class="table table-striped table-bordered table-hover dataTable no-footer " id="dataTables-example" aria-describedby="dataTables-example_info">
        
            <div> 
                   <thead>
                       
                                <tr >
                                    <th colspan="10">Kategori Olahraga (Perempuan)</th>
                                 
                                </tr>
                       
                              <!--   <tr>
                                    <th></th>
                                    <th ><input type="text" class="form-control" name="search_fullname"> <input type="submit" name="fullname" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_class"> <input type="submit" name="class" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_weight"><input type="submit" name="weight" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_nomatric"><input type="submit" name="nomatric" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_ic"><input type="submit" name="ic" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_phone"><input type="submit" name="phone" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_year"><input type="submit" name="year" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_faculty"><input type="submit" name="faculty" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_email"><input type="submit" name="email" value="Search"></th>
                           
                                </tr>-->
                                <tr>
                                   <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Nama penuh</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Kelas</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Berat</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Matrik</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >IC</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Telefon</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Tahun</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Fakulti</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Emel</a></th>

                                </tr>  

             </thead>
            
            
             <tbody>
                                
                                <?php        while ($row = mysqli_fetch_array($result)) :        ?>
                                            <tr>
                                                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'   value='<?php     echo $post_id     ?>'></td>
                                                <td><?php echo $row['user_fullname'];     ?></td>
                                                <td><?php echo $row['user_class'];     ?></td>
                                                <td><?php echo $row['user_weight'];     ?></td>
                                                <td><?php echo $row['user_nomatric'];     ?></td>   
                                                <td><?php echo $row['user_ic'];     ?></td>   
                                                <td><?php echo $row['user_phone'];     ?></td>
                                                <td><?php echo $row['user_year'];     ?></td>
                                                <td><?php echo $row['user_faculty'];     ?></td>
                                                <td><?php echo $row['user_email'];     ?></td>
                                            </tr>
                                                
                                    <?php        endwhile;      ?>  
                 
                  </tbody>
            </div>
                                    
                                    
      </table>       
       
       
       
       
       <br>
       
       
       
       
       
       
       
  <!--Seni  LELAKI-->
       <table class="table table-striped table-bordered table-hover dataTable no-footer " id="dataTables-example" aria-describedby="dataTables-example_info">
        
            <div> 
                   <thead>
                       
                                <tr >
                                    <th colspan="10">Kategori SENI (Lelaki)</th>
                                 
                                </tr>
                       
                        <!--         <tr>
                                    <th></th>
                                    <th ><input type="text" class="form-control" name="search_fullname"> <input type="submit" name="fullname" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_class"> <input type="submit" name="class" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_weight"><input type="submit" name="weight" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_nomatric"><input type="submit" name="nomatric" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_ic"><input type="submit" name="ic" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_phone"><input type="submit" name="phone" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_year"><input type="submit" name="year" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_faculty"><input type="submit" name="faculty" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_email"><input type="submit" name="email" value="Search"></th>
                           
                                </tr>-->
                                <tr>
                                   <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Nama penuh</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Kelas</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Berat</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Matrik</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >IC</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Telefon</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Tahun</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Fakulti</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Emel</a></th>

                                </tr>  

             </thead>
            
            
             <tbody>
                                
                                <?php        while ($row = mysqli_fetch_array($result)) :        ?>
                                            <tr>
                                                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'   value='<?php     echo $post_id     ?>'></td>
                                                <td><?php echo $row['user_fullname'];     ?></td>
                                                <td><?php echo $row['user_class'];     ?></td>
                                                <td><?php echo $row['user_weight'];     ?></td>
                                                <td><?php echo $row['user_nomatric'];     ?></td>   
                                                <td><?php echo $row['user_ic'];     ?></td>   
                                                <td><?php echo $row['user_phone'];     ?></td>
                                                <td><?php echo $row['user_year'];     ?></td>
                                                <td><?php echo $row['user_faculty'];     ?></td>
                                                <td><?php echo $row['user_email'];     ?></td>
                                            </tr>
                                                
                                    <?php        endwhile;      ?>  
                 
                  </tbody>
            </div>
                                    
                                    
      </table>
       
       <br>
       
       
       
                                          
  <!--Seni  PEREMPUAN-->
       <table class="table table-striped table-bordered table-hover dataTable no-footer " id="dataTables-example" aria-describedby="dataTables-example_info">
        
            <div> 
                   <thead>
                       
                                <tr >
                                    <th colspan="10">Kategori SENI (Perempuan)</th>
                                 
                                </tr>
                       
                            <!--     <tr>
                                    <th></th>
                                    <th ><input type="text" class="form-control" name="search_fullname"> <input type="submit" name="fullname" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_class"> <input type="submit" name="class" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_weight"><input type="submit" name="weight" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_nomatric"><input type="submit" name="nomatric" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_ic"><input type="submit" name="ic" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_phone"><input type="submit" name="phone" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_year"><input type="submit" name="year" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_faculty"><input type="submit" name="faculty" value="Search"></th>
                                    <th><input type="text" class="form-control" name="search_email"><input type="submit" name="email" value="Search"></th>
                           
                                </tr>-->
                                <tr>
                                   <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Nama penuh</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Kelas</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Berat</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Matrik</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >IC</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >No Telefon</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Tahun</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Fakulti</a></th>
                                    <th><a  style="color:black; text-decoration:none" href="" >Emel</a></th>

                                </tr>  

             </thead>
            
            
             <tbody>
                                
                                <?php        while ($row = mysqli_fetch_array($result)) :        ?>
                                            <tr>
                                                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'   value='<?php     echo $post_id     ?>'></td>
                                                <td><?php echo $row['user_fullname'];     ?></td>
                                                <td><?php echo $row['user_class'];     ?></td>
                                                <td><?php echo $row['user_weight'];     ?></td>
                                                <td><?php echo $row['user_nomatric'];     ?></td>   
                                                <td><?php echo $row['user_ic'];     ?></td>   
                                                <td><?php echo $row['user_phone'];     ?></td>
                                                <td><?php echo $row['user_year'];     ?></td>
                                                <td><?php echo $row['user_faculty'];     ?></td>
                                                <td><?php echo $row['user_email'];     ?></td>
                                            </tr>
                                                
                                    <?php        endwhile;      ?>  
                 
                  </tbody>
            </div>
                                    
                                    
      </table>
                                    
                                    </form>                                

                                
                                
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
























