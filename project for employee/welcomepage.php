<!DOCTYPE HTML>
<html>
    <title>WELCOME TO THE PROJECT</title>
    <style>
        </style>
        <FORM ACTION="Employeeinformationretrivalmain.php" METHOD="GET">
            <body style ="background: brown">
            
            
            <input type="image" src="welcome.jpg" alt="Submit" width="1348" height="648">
            <input type="text" value="By SANA SIDDIQUI" NAME="text" disabled>

                <INPUT TYPE="SUBMIT" NAME ="PRESS TO START" value="Start"/>
                <?php
                if (isset($_GET['Start']))
                {header('Location: Employeeinformationretrivalmain.php');
                  exit;}?>
</body>


        </FORM>




    
</html>