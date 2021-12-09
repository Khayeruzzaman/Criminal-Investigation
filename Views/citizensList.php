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
                <h1 style="text-align:center; text-transform:uppercase; padding:5px;">Citizens List</h1>
                <table  id="lTable" >  
                    
                    <tr>
                       <th>Name</th> 
                       <th>Mobile Number</th>
                       <th>Nid No</th>
                       <th>Address</th> 
                       <th>Action</th>
                    </tr>
                          
                    <?php
                        $conn = getConnection();
                        $sql = "SELECT * FROM citizens order by citizen_id asc";
                        $result = oci_parse($conn, $sql);
                        oci_execute($result);
                        
                        while($citizen = oci_fetch_array($result, OCI_ASSOC)) {
                          echo '<tr>
                           <td>' . $citizen['CITIZEN_NAME'] . '</td>
                           <td>' . $citizen['MOBILENO'] . '</td>
                           <td>' . $citizen['NIDNO'] . '</td>
                           <td>' . $citizen['ADDRESS'] . '</td>
                           <td> 
                               <a href="citizensListEdit.php?id='.$citizen['CITIZEN_ID'].'" style="textdecoration:none; padding:5px;">
                                    <button class="button" style="background-color: #4CAF50;"> Edit</button>
                                </a>
                               <a href="../Controller/citizenListDeleteCheck.php?id='.$citizen['CITIZEN_ID'].'" style="textdecoration:none;">
                                    <button class="button" style="background-color: #f44336;"> Delete </button>
                                </a>
                           </td>
                           
                           </tr>';  
                          }                                             
                    ?>
                        
                           
                    </table> 
                </div>    
                    

            </div>
                
        
    
                    
                        
<?php include('footer.php');?>