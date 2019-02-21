<?php

    if(isset($_SESSION['username'])){
            
            $username = $_SESSION['username'];
            
            $query = "SELECT * FROM users WHERE username = '{$username}'     ";
            
            $select_user_profile_query = mysqli_query($connection, $query);
            
            while(  $row = mysqli_fetch_array($select_user_profile_query)){
                
                          $user_image = $row['user_image'];
                          $user_fullname = $row['user_fullname'];
                          $user_nomatric = $row['user_nomatric'];
                          $user_ic = $row['user_ic'];
                          $user_class = $row['user_class'];
                          $user_weight = $row['user_weight'];
                          $user_phone = $row['user_phone'];
                          $user_faculty = $row['user_faculty'];
                          $user_year = $row['user_year'];
                          $user_email = $row['user_email'];
                          $user_role = $row['user_role'];
                                        
            }
            
            
        }








?>

                        

         
        
            
            
            
            
            
            
            
            
            
            
    
    <!--PIE CHART-->
    <div>
    
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {

                var data = google.visualization.arrayToDataTable([
                  ['Task', 'Hours per Day'],
                  ['Work',     11],
                  ['Eat',      2],
                  ['Commute',  2],
                  ['Watch TV', 2],
                  ['Sleep',    7]
                ]);

                var options = {
                  title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
              }
            </script>
    
        
        <!--    PIE CHART-->
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        
    </div> 
    
   
    
    
    
</div>


    
    

                        
                        
