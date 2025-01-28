<!DOCTYPE html>
<html>
    <head>
        <title>
            working on:
        </title>
    <form>
<body>
    <h2>You want to work with this:</h2>
   <h1> <?php 

      $getwish=$_POST['Yourwish'];
      echo"You want to work on.....".$getwish;
      if($getwish==="First Name")
      {
        //  echo "f";
          header('Location: gettingdetailsfirstname.php');
          exit;
      }
          if($getwish==="Last Name")
      {
        //  echo "l";
          header('Location: gettingdetailslastname.php');
          exit;
      }
          if($getwish==="PhoneNumber")
      
         // echo "p";
          {header('Location: gettingdetailsphonenumber.php');
            exit;}
          if($getwish==="Designation")
      
          //echo "d";
          {header('Location: gettingdetailsdesignation.php');
            exit;}
          if($getwish==="Department")
      
          //echo "j";
         { header('Location: gettingdetailsdepartment.php');
          exit;}
          if($getwish==="update")
      {header('Location: gettingdetailsupdate.php');
        exit;}
        if($getwish==="wholefile")
      {header('Location: wholefile.php');
        exit;}
          //echo "u";
          
    ?>
    </h1>
    </form>
</body>
        </html>
