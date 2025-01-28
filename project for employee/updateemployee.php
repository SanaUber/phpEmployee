
<?php
include_once 'index.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Employee's details</title>
  </head>
  <body>
    <form action="insertdeletechange.php" method="GET">
      <table>
        <tr>
          <td>First Name:
          
            <input type="text" placeholder="First Name" name="addedfname" /></td>
          
        </tr>
        <tr>
          <td>Last Name:
          
            <input type="text" placeholder="Last Name" name="addedlname" /></td>
          
        </tr>
        <tr>
        <td>Designation:
          
            <select name="addeddesignation">
              <option>First Class</option>
              <option>Second Class</option>
              <option>Standard Class</option></td>
            </select>
          </td>
        </tr>
        <tr>
        <td>Department:
          
            <select name="addeddepartment">
              <option>Consumer</option>
              <option>Home office</option>
              <option>Corporate</option></td>
              
            </select>
      </tr>
</td>
<tr>
  <td>
            Phone number 01944-:<input type="text" placeholder="" name="addedpnumber"/>
          </td>
</tr>
<tr>
  <td>
  <input type="submit" name="submitadded" value="add the record"/>
  
  
  
            
          </td>
        </tr>
        
          
      </table>
    </form>
  </body>
</html>
