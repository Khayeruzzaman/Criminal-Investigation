<?php
require_once('../Model/usersModel.php');

$user = $_POST['user'];
$search = $_POST['live'];

if ($user == "1")
{

    if ($user == "1" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        $conn = getConnection();
        $sql = "SELECT * FROM police WHERE POLICE_NAME LIKE ('%$search%')";
        $result = oci_parse($conn, $sql);
        oci_execute($result);

        echo '<table id="jTable">
        <tr>
           <th>Name</th> 
           <th>Designation</th>  
           <th>Join Date</th>  
           <th>Mobile No</th>  
           <th>Postal Code</th>   
           
        </tr>';
        while($police = oci_fetch_array($result, OCI_ASSOC)) {
          echo '<tr>
           
           <td>' . $police['POLICE_NAME'] . '</td>
           <td>' . $police['JOB_POST'] . '</td>
           <td>' . $police['JOIN_DATE'] . '</td>
           <td>' . $police['POLICE_MOBILENO'] . '</td>
           <td>' . $police['POSTAL_CODE'] . '</td>
           </tr>';
        }
        echo '</table>';
        
        
        }
        
        

}


if ($user == "2")
{

    if ($user == "2" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        
        $conn = getConnection();
        $sql = "SELECT * FROM citizens WHERE CITIZEN_NAME LIKE ('%$search%')";
        $result = oci_parse($conn, $sql);
        oci_execute($result);
        echo '<table id="jTable">
        <tr>
           <th>Name</th> 
           <th>Mobile Number</th>
           <th>Nid No</th>
           <th>Address</th>  
        </tr>';
        while($citizen = oci_fetch_array($result, OCI_ASSOC)) {
          echo '<tr>
           <td>' . $citizen['CITIZEN_NAME'] . '</td>
           <td>' . $citizen['MOBILENO'] . '</td>
           <td>' . $citizen['NIDNO'] . '</td>
           <td>' . $citizen['ADDRESS'] . '</td>
           
           </tr>';
        }
        echo '</table>';
        
        }
        
        

}

if ($user == "3")
{

    if ($user == "3" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        
        $conn = getConnection();
        $sql = "SELECT * FROM criminal WHERE CRIMINAL_NAME LIKE ('%$search%')";
        $result = oci_parse($conn, $sql);
        oci_execute($result);
        echo '<table id="jTable">
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Nid No</th>
            <th>Total Cases</th>
            
        </tr>';
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
        echo '</table>';
        
        
        }
        
        

}


if ($user == "Patient")
{

    if ($user == "Patient" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        
        $conn = getConnection();
        $sql = "SELECT * FROM patientprofile WHERE Username LIKE ('%$search%')";
        $result = mysqli_query($conn, $sql);
        echo '<table id="jTable">
        <tr>
           <th>User Name</th>
           <th>nid number</th>
           <th>Email</th>  
           <th>Password</th>  
           <th>Gender</th>   
           <th>Date Of Birth</th>
        </tr>';
        while($Patient = mysqli_fetch_array($result)) {
          echo '<tr>
           <td>' . $Patient['Username'] . '</td>
           <td>' . $Patient['Nid'] . '</td>
           <td>' . $Patient['Email'] . '</td>
           <td>' . $Patient['Password'] . '</td>
           <td>' . $Patient['Gender'] . '</td>
           <td>' . $Patient['Dob'] . '</td>
           </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        
        }
        
        

}







?>