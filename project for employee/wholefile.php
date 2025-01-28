
<?php
include_once 'index.php';
?><!DOCTYPE html>
<html>
    <table>
        <tr><body>
          
            <td><h1>All employees information <h1>
            <h3>
            <?php
$sqlselectwholefile="SELECT `info`.`first name`,
`info`.`lastname`,
`info`.`designation`,
`info`.`department`,
`info`.`employee phone number`
FROM `hr`.`info`;
";
$resultselectwholefile=mysqli_query($con,$sqlselectwholefile);
$resultcheckselectwholefile=mysqli_num_rows($resultselectwholefile);
//$rowselectwholefile;
if($resultcheckselectwholefile > 0)
{
    while($rowselectwholefile=mysqli_fetch_assoc($resultselectwholefile)){echo"<table border=1>";
        echo$rowselectwholefile ['first name']."<br>";
      echo $rowselectwholefile ['lastname']."<br>";
    echo $rowselectwholefile ['designation']."<br>";
echo $rowselectwholefile ['department']."<br>";
  echo  "09144-".$rowselectwholefile ['employee phone number']."<br>";
  echo" ----------------" ."<br>";
    }
}



?><form><input  type="submit" value="back" name="back"/><?php
if (isset($_GET['back']))
{header('Location: Employeeinformationretrivalmain.php');
  exit;}?><form>
</body>
                </h3>
                </tr>
            </td>
        </tr>
    </table>
</html>