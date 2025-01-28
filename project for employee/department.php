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

$getdepartment=$_GET['department'];
echo "You want to get details of:.....".$getdepartment."<br>" ;
$sqldepartment="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`where `info`.`department`='$getdepartment';";
//echo $sqlstname;
$resultselectdepartment=mysqli_query($con,$sqldepartment);// die(mysqli_query_error($con));
//echo $resultselectfirstname;
$resultcheckselectdepartment=mysqli_num_rows($resultselectdepartment);
//echo"Details of the employee:";
if($resultcheckselectdepartment)
{//echo"error" .$resultcheckselectdepartment;
    
    while($resultselectdepartment1=mysqli_fetch_assoc($resultselectdepartment))
    {
      // echo"error" .$resultcheckselectfirstname;
        echo "first name---".$resultselectdepartment1 ['first name']."<br>";
      echo"last name---" .$resultselectdepartment1 ['lastname']."<br>";
    echo "dessignation---".$resultselectdepartment1 ['designation']."<br>";
echo "department---".$resultselectdepartment1 ['department']."<br>";
  echo"employee phone number---01944".$resultselectdepartment1 ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
   
    }
} 
else{
    ?>
    <tr> <td><h1>
        <?php
    echo "Sorry ".$getdepartment." is not our employee";}
?>
<input  type="submit" value="back" name="back"/><?php
if (isset($_GET['back']))
{header('Location: Employeeinformationretrivalmain.php');
  exit;}?>
</tr> </td></h1>
                     </h3>
                  </td>
         </tr>
        
           
        
      </body>
     </table>
 </form>
</html>