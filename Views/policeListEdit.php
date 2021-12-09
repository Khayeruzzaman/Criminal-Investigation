<?php
	
	require_once('../Model/usersModel.php');
	$title = "Edit Police";
	include('header.php');

	$id = $_GET['id'];
  $user = getUser('police',$id);
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
            
                <legend><b><center><?php echo $user['POLICE_NAME'];?>'s Infromation</center></b></legend>
                <br>


                <label for="name">Name</label> 
                <input type="text" id="name" name="name" value="<?php echo $user['POLICE_NAME'];?>">
                
               
                <label for="jobpost"><b>Job Post</label>
                
                <input type="text" id="jobpost" name="jobpost" value="<?php echo $user['JOB_POST'];?>">
                
                <br>

                

                <label for="joinDate">Join Date</label>
                <input type="text" id="joinDate" name="joinDate" value="<?php echo $user['JOIN_DATE'];?>">
                
                <br>

                <label for="mobno">Mobile NO</label>
                <input type="text" id="mobno" name="mobno" value="<?php echo $user['POLICE_MOBILENO'];?>">
                
                <br>

                <label> Password</label>
                <input type="text" id="password" name="password" 
                    value="<?php echo $user['PASSWORD'];?>">

                <label> Postal Code</label>
                <input type="text" id="postalCode" name="postalCode" 
                    value="<?php echo $user['POSTAL_CODE'];?>">

               
                <br>
                    
        
                
                <center>
                <input type="submit" id="submit" name="submit" value="Update"  style="width: 260px; display: inline-block; height: 45px">
               
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
          var jobPost = document.getElementById('jobpost').value;
          var joinDate = document.getElementById('joinDate').value;
          var mobno = document.getElementById('mobno').value;
          var password = document.getElementById('password').value;
          
          var postalCode = document.getElementById('postalCode').value;
          

          if(name == "")
          {
           var name = "<?php echo $user['POLICE_NAME']; ?>"; 
          }

          if(jobPost == "")
          {
           var jobPost = "<?php echo $user['JOB_POST']; ?>"; 
          }

          if(jobPost == "")
          {
           var jobDate = "<?php echo $user['JOIN_DATE']; ?>"; 
          }


          if(mobno == "")
          {
           var mobno = "<?php echo $user['POLICE_MOBILENO']; ?>"; 
          }

          if(password == "")
          {
           var password = "<?php echo $user['PASSWORD']; ?>"; 
          }

          

          if(postalCode== "")
          {
           var postalCode = "<?php echo $user['POSTAL_CODE']; ?>"; 
          }

          
          
          const obj = {

          		    'id':<?php echo $user['POLICE_ID']; ?>,
                  'name':name,
                  'jobPost':jobPost,
                  'joinDate':joinDate,
                  'mobno':mobno,
                  'password':password,
                  'postalCode':postalCode,
            
                };

        const data= JSON.stringify(obj);

            console.log(data);

            const http = new XMLHttpRequest();
            http.open("POST", `../Controller/Police_Edit_Check_JS.php`, true);
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