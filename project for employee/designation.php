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
                      <h3> <?php

$getdesignation=$_GET['designation'];
echo "You want to get details of:.....".$getdesignation."<br>" ;
$sqldesignation="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`where `info`.`designation`='$getdesignation';";
//echo $sqlstname;
$resultselectdesignation=mysqli_query($con,$sqldesignation);// die(mysqli_query_error($con));
//echo $resultselectfirstname;
$resultcheckselectdesignation=mysqli_num_rows($resultselectdesignation);
//echo"Details of the employee:";
if($resultcheckselectdesignation)
{//echo"error" .$resultcheckselectdesignation;
    
    while($resultselectdesignation1=mysqli_fetch_assoc($resultselectdesignation))
    {
      // echo"error" .$resultcheckselectfirstname;
        echo "first name---".$resultselectdesignation1 ['first name']."<br>";
      echo"last name---" .$resultselectdesignation1 ['lastname']."<br>";
    echo "dessignation---".$resultselectdesignation1 ['designation']."<br>";
echo "department---".$resultselectdesignation1 ['department']."<br>";
  echo"employee phone number---01944".$resultselectdesignation1 ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
   
    }
} 
else{
    ?>
    <tr> <td><h1>
        <?php
    echo "Sorry ".$getdesignation." is not our employee";}
?> <form><input  type="submit" value="back" name="back"/><?php
if (isset($_GET['back']))
{header('Location: Employeeinformationretrivalmain.php');
  exit;}?><form>
</tr> </td></h1>
                     </h3>
                  </td>
         </tr>
      </body>
     </table>
 </form>
 
</html>