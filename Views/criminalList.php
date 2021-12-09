<?php 
    $title = 'Citizens-List';
    include('header.php');
?>

<style type="text/css">
    #profile{
    
        width:100%;
        padding:50px;
        background: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        margin-bottom: 50px;
        min-height: 60vh;
    
    }

    .button {
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px black;
    }

    .button:hover{
        color: black;
    }

</style>      
    
        <div id="mainview">

                
                <div id="profile">
                <h1 style="text-align:center; text-transform:uppercase; padding:5px;">criminal List</h1>
                <br>
                <table  id="lTable" >  
                    
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Mobile Number</th>
                        <th>Nid No</th>
                        <th>Total Cases</th>
                        
                    </tr>
                          
                    <?php
                       $conn = getConnection();
                        $sql = "SELECT * FROM criminal order by criminal_id asc";
                        $result = oci_parse($conn, $sql);
                        oci_execute($result);
                        
                        while($criminal = oci_fetch_array($result, OCI_ASSOC)) {
                            echo '<tr>
                             <td>' . $criminal['CRIMINAL_NAME'] . '</td>
                             <td>' . $criminal['CRIMINAL_STATUS'] . '</td>
                             <td>' . $criminal['CRIMINAL_ADDRESS'] . '</td>
                             <td>' . $criminal['CRIMINAL_MOBILENO'] . '</td>
                             <td>' . $criminal['CRIMINAL_NIDNO'] . '</td>
                             <td>' . $criminal['PREVIOUSLY_INOLVED'] . '</td>
                             
                           
                           </tr>';  
                          }                                             
                    ?>
                        
                           
                    </table> 
                </div>    
                    

            </div>
                
        
    
                    
                        
<?php include('footer.php');?>