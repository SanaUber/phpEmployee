<?php
include_once 'index.php';
?>
<!DOCTYPE html>
<html>
 <form >
     <table>
      <body>
           <tr>
    
                  <td>
                      <h3> 
                          <?php
                          $newgetphonenumber=$_GET['changednumber'];
                          echo "You want to get details of:.....". $newgetphonenumber."<br>" ;
                         $a= $_GET['changedfname'];
                         $b=$_GET['changedlname'];
                         $c=$_GET['changeddesi'];
                         $d=$_GET['changeddeptt'];
                         $e=$_GET['changednumber'];
                        if(isset($_GET['changedeupdatetails']))
                         { 
                          $newsqlchangerecord="DELETE  FROM`hr`.`info`
                          WHERE `employee phone number` = '$e';";
                          echo"Record deleted Successfully";
                          
                          
                          
                        if( $newresultselectchange=mysqli_query($con,$newsqlchangerecord))

                          $message = "Record Modified Successfully";
                        else
                        $message = "sorry";}


                        if(isset($_GET['newchangedeupdatetails']))
{
                       $sqlchangerecordnew= "UPDATE `hr`.`info`
                          SET
                          `first name` = '$a',
                          `lastname` = '$b',
                          `designation` = '$c',
                          `department` = '$d',
                          `employee phone number` = '$e'
                          WHERE `employee phone number` = '$e';";
                          echo"Record Modified Successfully";
                          if( $newresultselectchangenew=mysqli_query($con,$sqlchangerecordnew))

                          $message = "Record Modified Successfully";
                        else
                        $message = "sorry";}
                        








                        
                          $newsqlselectwholefile="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info` Where`employee phone number` = '$e';";

$newresultselectwholefile=mysqli_query($con,$newsqlselectwholefile);
$newresultcheckselectwholefile=mysqli_num_rows($newresultselectwholefile);

if($newresultcheckselectwholefile > 0)
{
    while($newrowselectwholefile=mysqli_fetch_assoc($newresultselectwholefile)){
        echo $newrowselectwholefile ['first name']."<br>";
      echo $newrowselectwholefile ['lastname']."<br>";
    echo $newrowselectwholefile ['designation']."<br>";
echo $newrowselectwholefile ['department']."<br>";
  echo  "09144-".$newrowselectwholefile ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
    }
}?><input  type="submit" value="back" name="back"/><?php
if (isset($_GET['back']))
{header('Location: Employeeinformationretrivalmain.php');
  exit;}?>