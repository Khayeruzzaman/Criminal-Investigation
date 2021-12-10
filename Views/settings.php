<?php 
    $title = 'Settings';
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
          <form method="post" action="../Controller/settingsCheck.php">
            
         

          <table  style="border-style: none; ">
            <tr>
              <td><h3>Triggers</h3></td>
              <td>
                <input class="button" style="background-color: #4CAF50; " type="submit" name="on" value="ON">
                <input class="button" style="background-color: #f44336; " type="submit" name="off" value="OFF">
                
              </td>
            </tr>
          </table>

           </form>

        </div>    
            

</div>
                
        
    
                    
                        
<?php include('footer.php');?>