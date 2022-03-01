<?php 
    
    $title = 'Edit Profile';
    include('header.php');

    $mobnoErr = $nidnoErr = $passwordErr = $addErr = $nameErr = "";
    
?>

<style type="text/css">
  #profile{
  
      width:100%;
        padding:50px;
        background: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        margin-bottom: 50px;
    
  }
  .btn1 {
  font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    background-color: #373b8b;
    color: white;
    border-radius: 5px;
    width: 100px;
    height: 40px;
  }
  .btn1:hover{
    background-color: white;
    color: black;
  }
  
</style>
 <div id="mainview">
    <div id="profile">   
    <form method = "post" name= "jsFrom" onSubmit="submitForm(event)">
   
      <table id="personalPro" >
            <tr>
                <th style="text-align: center; background-color: #373b8b; color: white;" colspan="3"> 
                    <?php echo $user['ADMIN_NAME']; ?>'s Infromation </th>
            </tr>
          <tr>
              <td> 
                  <b> Name : </b> 
                  
              </td>

              <td> <input id= "name" type= "text" name= "name" value="<?php echo $user["ADMIN_NAME"]; ?>"> </td>
          </tr>
          
        
          
          <tr>
              <td> 
                  <b>Mobile Number : </b>
                  
              </td>
              <td> <input id= "mobno" type="text" name= "mobno" value="<?php echo $user['MOBILENO'];?>"> </td>
          </tr>
          
          
          
          
          </tr>
          
          <tr>
              <td>
                  <b>Password :</b>
                   
              </td>
              <td><input  id="password" type="text" name= "password" value="<?php echo $user["PASSWORD"]; ?>"> </td>
          </tr>

          
          
          
          <tr>
              <td>
                  <b>Nid No : </b>
          
              </td>
              <td> <input  id="nidno" type="text" name= "nidno" value="<?php echo $user["NIDNO"]; ?>">
              </td>
          
          
          </tr>

          <tr>
              <td>
                  <b>Address : </b>
                  
              </td>
              <td> <input  id="address" type="text" name= "address" value="<?php echo $user["ADDRESS"]; ?>">
              </td>
        
          
          
      </table>
      <br>

                <input class="btn1" type="submit" name="Update" value="update" style="text-transform: uppercase; text-align: center; margin-right: 01px; float: right;">
            
       
    </form>
            </div>
     </div>

     <script type="text/javascript">

         function submitForm(e)
        {
          console.log(e);
          e.preventDefault();
          console.log("form submitted");

          var name = document.getElementById('name').value;
          var mobno = document.getElementById('mobno').value;
          var password = document.getElementById('password').value;
          var nidno = document.getElementById('nidno').value;
          var address = document.getElementById('address').value;
          

          if(name == "")
          {
           var name = "<?php echo $user['ADMIN_NAME']; ?>"; 
          }

          if(mobno == "")
          {
           var mobno = "<?php echo $user['MOBILENO']; ?>"; 
          }

          if(mobno == "")
          {
           var mobno = "<?php echo $user['MOBILENO']; ?>"; 
          }

          if(nidno == "")
          {
           var nidno =  "<?php echo $user['NIDNO']; ?>"; 
          }

          if(address== "")
          {
           var password = "<?php echo $user['ADDRESS']; ?>"; 
          }

          
          
          const obj = {
                  'name':name,
                  'mobno':mobno,
                  'nidno':nidno,
                  'password':password,
                  'address':address,
            
                };

        const data= JSON.stringify(obj);

            console.log(data);

            const http = new XMLHttpRequest();
            http.open("POST", `../Controller/EditProCheck_JS.php`, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(`data=${data}`);
            
            http.onreadystatechange = function() {
              
              if(this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        }
    }
         
        
    </script>

            
<?php include('footer.php');?> 