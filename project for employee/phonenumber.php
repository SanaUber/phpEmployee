<?php
include_once 'index.php';
?>
<!DOCTYPE html>
<html>
 <form action="newupdate.php"  method="GET" >
     <table>
      <body>
           <tr>
    
                  <td>
                      <h3> 
                          <?php
$getphonenumber=$_GET['phonenumber'];
echo "You want to get details of:.....".$getphonenumber."<br>" ;
$sqlphonenumber="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`where `info`.`employee phone number`='$getphonenumber';";

$resultselectphonenumber=mysqli_query($con,$sqlphonenumber);

$resultcheckselectphonenumber=mysqli_num_rows($resultselectphonenumber);
if($resultcheckselectphonenumber)
{while($resultselectphonenumber1=mysqli_fetch_assoc($resultselectphonenumber))
    { echo "first name---".$resultselectphonenumber1 ['first name']."<br>";
        echo"last name---" .$resultselectphonenumber1 ['lastname']."<br>";
      echo "dessignation---".$resultselectphonenumber1 ['designation']."<br>";
  echo "department---".$resultselectphonenumber1 ['department']."<br>";
    echo"employee phone number---01944".$resultselectphonenumber1 ['employee phone number']."<br>";
    echo" ----------------" ."<br>";}
  }
  else
  echo "Sorry".$getphonenumber."is not our employee" ;
  ?><input  type="submit" value="back" name="back"/><?php
  if (isset($_GET['back']))
  {header('Location: Employeeinformationretrivalmain.php');
    exit;}?>
  
  <tr><td>
 <h3>first name:</h3>
<input type="text"  value=" "name="changedfname">
<h3>last name:</h3>
<input type="text"  value=" "name="changedlname">
<h3>designation:</h3>
<select name="changeddesi"> 
<option>First Class</option>
<option>Second Class</option>
<option>Standard Class</option>
</select><h3>employee phone number:</h3>
<input type="text"  value="<?php echo$getphonenumber;?> "name="changednumber" readonly>


<h3>department:</h3><select name="changeddeptt">
                           <option>Consumer</option>
                           <option>Home Office</option>
                           <option>Corporate</option>
                         </select>
<input type= "submit" value="delete <?php echo$getphonenumber;?> record" name="changedeupdatetails"/>
<input type= "submit" value="change <?php echo$getphonenumber;?> record" name="newchangedeupdatetails"/>
</tr></td></form>
<?php
  if(isset($_GET["changedeupdatetails"]))
  {header('Location: newupdate.php');
    exit;}?>