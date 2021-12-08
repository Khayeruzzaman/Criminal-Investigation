<?php
$title = 'Search Users';
include('header.php');

?>
<script type="text/javascript" src="search.js"></script>
    
    <div id='mainview'>
                 
                    
        
        <div id ="rmvUsers">
            
            <select id="type" name = "User" onchange= "showResult(this.value)">
                <option selected disabled> Select User</option> 
                <option id="us" value = "1"> Police </option>
                <option id="us" value = "2"> Citizen </option>
                <option id="us" value = "3"> Criminal </option>
            </select>

            <input type="text" id="userName" name="userName" autocomplete="off" placeholder="Search Users Name.." onkeyup="showResult(this.value)" style="width: 400px; height: 30px;">
            
            
            <div id="rmvTable">
                <p style="color:red;" id="result"></p>
            </div>
            
        </div>
                    
    
    </div>
            


       

<?php

include('footer.php');
?>