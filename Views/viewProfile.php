<?php 
    $title = 'View Profile';
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
		<br>
		<table id="personalPro">
		<tr>
			<th style="text-align: center; background-color: #373b8b; color: white;" colspan="3"> 
				<?php echo $user['ADMIN_NAME']; ?>'s Infromation </th>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $user['ADMIN_NAME']; ?></td>
			<td rowspan="3" style="text-align: center">
				<img src= "../Pictures/img.jpg" height="150px" width="150px" ></td>
		</tr>

		<tr>
			<th>Mobile Number</th>
			<td><?php echo $user['MOBILENO']; ?></td>
		</tr>

		<tr>
			<th>Password</th>
			<td><?php echo $user['PASSWORD']; ?></td>
		</tr>

		<tr>
			<th>Nid No</th>
			<td colspan="2"><?php echo $user['NIDNO']; ?></td>
		</tr>

		<tr>
			<th> Address </th>
			<td colspan="2"><?php echo $user['ADDRESS']; ?></td>
		</tr>

		</table>


		<a href="editProfile.php" style="text-transform: uppercase; text-align: center; margin-right: 01px; float: right;"> <input class="btn1" type="submit" name="Edit" value="edit"> </a>
		<br>
		<br>
	</div>
</div>


 <?php include('footer.php');?> 