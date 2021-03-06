<?php
	
	require_once('../Model/usersModel.php');
	$title = "Edit Citizen";
	include('header.php');

	$id = $_GET['id'];
    $user = getCitizen('citizens',$id);
?>

<style type="text/css">
	.form legend{
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    

}

.form {
        width:360px;
        margin: 30px 380px;
        padding:50px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px black;
        background: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%); 
        color: #34495e;

      }
.form  label {
        display:block;
        font-weight: bold;
        text-transform: uppercase;

      }
.form legend{
        display:block;
        font-weight: bold;
        box-sizing: border-box;
}

.form label a{
    text-decoration: none;
}

.form label a:hover{
    cursor: pointer;
    color: black;
}


.form  input {
        display:block;
        width: 100%;
        border: 1px solid #000;
        padding:5px;
        box-sizing: border-box;
      }

#submit{
         
        text-align: center;
        background-color: #063146;
        color: white;
        text-transform: uppercase; 
        font-weight: 900;
        border-bottom: 5px solid black;
        border-radius: 5px;
        cursor: pointer;
      }

      #submit:hover {
        
        color: black;
      }
</style>

<div id="mainview">
	

	<div class="form">

        <form method="POST" name="jsForm" onSubmit="submitForm(event)">
            
                <legend><b><center><?php echo $user['CITIZEN_NAME'];?>'s Infromation</center></b></legend>
                <br>


                <label for="name"><b>Name</label> 
                <input type="text" id="name" name="name" value="<?php echo $user['CITIZEN_NAME'];?>">
                
               
                <label for="mob"><b>Mobile No</label>
                
                <input type="test" id="mobno" name="mob" value="<?php echo $user['MOBILENO'];?>">
                
                <br>

                

                <label for="password"><b>Password</label>
                <input type="password" id="password" name="password" value="<?php echo $user['PASSWORD'];?>">
                
                <br>

                <label for="nid"><b>Nid NO</label>
                <input type="text" id="nidno" name="nid" value="<?php echo $user['NIDNO'];?>">
                
                <br>

                <label> <b>Address</label>
                <input type="text" id="address" name="address" 
                    value="<?php echo $user['ADDRESS'];?>">

               
                <br>
                    
        
                
                <center>
                <input type="submit" id="submit" name="submit" value="Edit"  style="width: 260px; display: inline-block; height: 45px">
               
                </center> 

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
           var name = "<?php echo $user['CITIZEN_NAME']; ?>"; 
          }

          if(mobno == "")
          {
           var mobno = "<?php echo $user['MOBILENO']; ?>"; 
          }

          if(password == "")
          {
           var password = "<?php echo $user['PASSWORD']; ?>"; 
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
          		  'id':<?php echo $user['CITIZEN_ID']; ?>,
                  'name':name,
                  'mobno':mobno,
                  'nidno':nidno,
                  'password':password,
                  'address':address,
            
                };

        const data= JSON.stringify(obj);

            console.log(data);

            const http = new XMLHttpRequest();
            http.open("POST", `../Controller/Citizen_Edit_Check_JS.php`, true);
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