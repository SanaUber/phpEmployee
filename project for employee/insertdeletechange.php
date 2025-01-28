<?php
include_once 'index.php';
?>
<!DOCTYPE html>
<html>
 <form  >
     <table>
      <body>
           <tr>
    
                  <td>
                      <h3> 
                          <?php
                          
 $getaddedname=$_GET['addedfname'];
 $getaddedlastname=$_GET['addedlname'];
 $getaddeddepartment=$_GET['addeddepartment'];
 $getaddeddesignation=$_GET['addeddesignation'];
 $getaddedphonenumber=$_GET['addedpnumber'];
 
 if(isset($_GET["submitadded"]))
 {
 $sqladdrecord="INSERT INTO `hr`.`info`
(`first name`,
`lastname`,
`designation`,
`department`,
`employee phone number`)
VALUES('$getaddedname',
'$getaddedlastname',
'$getaddeddesignation','$getaddeddepartment','$getaddedphonenumber');";
//echo$sqladdrecord;
 
 
 $resultselectadded=mysqli_query($con,$sqladdrecord);
echo"Added Successfully------".$getaddedname;}
 /*
 else
 echo "YOUR ENTRY IS WRONG";

 
 /*if(isset($_GET["changednumber"]))
 {echo "AAAAA;}";}
  $sqlchangerecord="UPDATE `hr`.`info`
SET
`first name` = '$getaddedname',
`lastname` = '$getaddedlastname',
`designation` = '$getaddeddesignation',
`department` = '$getaddeddepartment',
`employee phone number` = '$getaddedphonenumber'
WHERE `employee phone number` = '$updatedetailsof';";
$resultselectchange=mysqli_query($con,$sqlchangerecordd);
 }/*

 
 
 
 // die(mysqli_query_error($con));
 //echo $resultselectfirstname;
 /*$resultcheckselectadded=mysqli_num_rows($resultselectadded);
 //echo"Details of the employee:";++-+
 if($resultcheckselectadded)
 {//echo"error" .$resultcheckselectadded;
     
     while($resultselectadded1=mysqli_fetch_assoc($resultselectadded))
     {
       // echo"error" .$resultcheckselectfirstname;
         echo "first name---".$resultselectadded1 ['first name']."<br>";
       echo"last name---" .$resultselectadded1 ['lastname']."<br>";
     echo "dessignation---".$resultselectadded1 ['designation']."<br>";
 echo "department---".$resultselectadded1 ['department']."<br>";
   echo"employee phone number---01944".$resultselectadded1 ['employee phone number']."<br>";
   echo" ----------------" ."<br>";
    
     }
 } */
 else{
     ?>
     <tr> <td><h1>
         <?php
     echo "Sorry "." is not our employee";}
 ?>
 <form><input  type="submit" value="back" name="back"/><?php
if (isset($_GET['back']))
{header('Location: Employeeinformationretrivalmain.php');
  exit;}?><form>

                      </h3>
                   </td>
          </tr>   
         </body>
      </table>
  </form>
 </html>