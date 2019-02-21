<?php    include "includes/admin_header.php";     ?>








    <div id="wrapper">

        
        
        
        
        <!-- Navigation -->
       <?php    include "includes/admin_navigation.php";     ?>


        
        
        
        
        
        
        
        
        
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                                
                        
                <?php    include "includes/profile_topnav.php";     ?>
                        
                        
                        
                        
                        
                     
                        
                        
                        <?php
                        
                                if(isset($_GET['source'])){

                                    $source = $_GET['source'];
                                }
                                else{

                                    $source = '';
                                }

                                    switch($source) {

                                            case 'profile_activity';
                                            include "includes/profile_activity.php";  
                                            break;

                                            case 'profile_statistic';
                                            include "includes/profile_statistic.php";  
                                            break;

                                            case 'profile_selection';
                                            include "includes/profile_selection.php";
                                            break;

                                            default:
                                            include "includes/profile.php";  
                                            break;
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
