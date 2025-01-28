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

$getfirstname=$_GET['FirstName'];
echo "You want to get details of:.....".$getfirstname."<br>" ;
$sqlfirstname="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`where `info`.`first name`='$getfirstname';";
//echo $sqlfirstname;
$resultselectfirstname=mysqli_query($con,$sqlfirstname);// die(mysqli_query_error($con));
//echo $resultselectfirstname;
$resultcheckselectfirstname=mysqli_num_rows($resultselectfirstname);
//echo"Details of the employee:";
if($resultcheckselectfirstname)
{//echo"error" .$resultcheckselectfirstname;
    
    while($resultselectfirstname1=mysqli_fetch_assoc($resultselectfirstname))
    {
      // echo"error" .$resultcheckselectfirstname;
        echo "first name---".$resultselectfirstname1 ['first name']."<br>";
      echo"last name---" .$resultselectfirstname1 ['lastname']."<br>";
    echo "dessignation---".$resultselectfirstname1 ['designation']."<br>";
echo "department---".$resultselectfirstname1 ['department']."<br>";
  echo"employee phone number---01944".$resultselectfirstname1 ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
   
    }
} 
else{
    ?>
    <tr> <td><h1>
        <?php
    echo "Sorry ".$getfirstname." is not our employee";}
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