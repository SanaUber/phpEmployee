<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Information retrival</title>
  </head>
  <body>
    <h1>ASK HERE:</h1>
    <h2>Please Click one</h2>
    
    <form action="handlingyourwish.php" method="POST">
        
      <table>
        <tr>
          <td>
            <h3>
              <p><input type="radio"  name="Yourwish" Value="First Name"/>
              To get employee information with respect to their First Name:   </p>
            </h3>
          </td>
         
    
        <tr>
          <td>
            <h3>
                <p><input type="radio"  name="Yourwish" Value="Last Name"/>
              To get employee information with respect to their Last Name:</p>
            </h3>
          </td>
         
        </tr>
        <tr>
          <td>
            <h3>
                <p><input type="radio"  name="Yourwish" Value="PhoneNumber"/>
              To get employee information with respect to their Phone Numbers:
              01944-</p>
            </h3>
          </td>
          
        </tr>
       
        <tr>
            <td>
              <h3>
                  <p><input type="radio"  name="Yourwish" Value="Designation"/>
                To get employee information with respect  to their Designation</p>
              </h3>
            </td>
            
            
          </tr>
          <tr>
            <td>
              <h3>
                  <p><input type="radio"  name="Yourwish" Value="Department"/>
                To get employee information with respect  to their Department</p>
              </h3>
            </td>
            
          </tr>

          
        <tr>
            <td>
              <h3>
                <p><input type="radio"  name="Yourwish" Value="update"/>
                To update any employee information :</p>
              </h3></br>
         
            </td>
           
          </tr>
          <tr>
            <td>
              <h3>
                <p><input type="radio"  name="Yourwish" Value="wholefile"/>
                To view all employees data :</p>
              </h3></br>
         
            </td>
           
          </tr>
          
        </table>
          </table>
      </table>
      <input type="submit" value ="submit">
    </form>
    
  </body>
</html>
