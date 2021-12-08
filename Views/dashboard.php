<?php 
    $title = 'Dashboard';
    
    include('header.php');
?>          
    
        <div id="mainview">

            <div class="dashContent">
                <div class="Users">
                    
                    
                    <div class="police">
                        <div class="box">
                            <h2>POLICE</h2>
                            <h4>
                                <?php 
                                $user = "police";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
                            </h4>    
                        </div>

                        <div class="icon-case">
                            <img src="../Pictures/Dashboard/police.png">
                        </div>
                            
                    </div>

                    <div class="citizen">
                        <div class="box">
                            <h2>CITIZEN</h2>
                            <h4>
                                <?php 
                                $user = "citizens";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
                            </h4>
                        </div>

                        <div class="icon-case">
                            <img src="../Pictures/Dashboard/citizen.png">
                        </div>       
                    </div>

                    <div class="criminal">
                        <div class="box">
                            <h2>CRIMINAL</h2>
                            <h4>
                                <?php 
                                $user = "criminal";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
                            </h4>    
                        </div>

                        <div class="icon-case">
                            <img src="../Pictures/Dashboard/jail.png">
                        </div>
                            
                    </div>

                </div>

                
            </div>
            
        </div>
                         
                
            
    

   <?php include('footer.php');?> 