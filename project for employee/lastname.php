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

$getlastname=$_GET['LastName'];
echo "You want to get details of:.....".$getlastname."<br>" ;
$sqllastname="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`where `info`.`lastname`='$getlastname';";
//echo $sqlstname;
$resultselectlastname=mysqli_query($con,$sqllastname);// die(mysqli_query_error($con));
//echo $resultselectfirstname;
$resultcheckselectlastname=mysqli_num_rows($resultselectlastname);
//echo"Details of the employee:";
if($resultcheckselectlastname)
{//echo"error" .$resultcheckselectlastname;
    
    while($resultselectlastname1=mysqli_fetch_assoc($resultselectlastname))
    {
      // echo"error" .$resultcheckselectfirstname;
        echo "first name---".$resultselectlastname1 ['first name']."<br>";
      echo"last name---" .$resultselectlastname1 ['lastname']."<br>";
    echo "dessignation---".$resultselectlastname1 ['designation']."<br>";
echo "department---".$resultselectlastname1 ['department']."<br>";
  echo"employee phone number---01944".$resultselectlastname1 ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
   
    }
} 
else{
    ?>
    <tr> <td><h1>
        <?php
    echo "Sorry ".$getlastname." is not our employee";}
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