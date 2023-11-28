<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");

include('newfunc.php');


if(isset($_POST['docedit'])){
        $username = $_POST['username'];
        $spec = $_POST['spec'];
        $fname = $_POST['fname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $phone = $_POST['phonenumber'];
        $fees = $_POST['fees'];
        $mi = $_POST['mi'];
        $mx = $_POST['mx'];
        $national_id = $_POST['national_id'];
        
        
        $query=mysqli_query($con,"UPDATE doctb
        SET username = '$username', spec = '$spec', fname='$fname', national_id='$national_id', email='$email', phone='$phone',gender='$gender',password='$pass', docFees='$fees', min_time='$mi', max_time='$mx' WHERE national_id = '$national_id';");
          if($query)
          {
            echo "<script>alert('Doctor Updated successfully!');</script>";
            header("Location: admin-panel1.php");
            
      
          }
          else{
            echo "<script>alert('Unable to process your request. Try again!');</script>";
          }
        // else{
        //   echo "<script>alert('GET is not working!');</script>";
        // }initial
        // enga error?
      }
      


// if(isset($_POST['docsub1']))
// {
//   $demail=$_POST['demail'];
//   $query="delete from doctb where email='$demail' or national_id='$demail';";
//   $result=mysqli_query($con,$query);
//   if($result)
//     {
//       echo "<script>alert('Doctor removed successfully!');</script>";
//   }
//   else{
//     echo "<script>alert('Unable to delete!');</script>";
//   }
// }


?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;">ADMIN - Edit doctor </h3>
    <a href="admin-panel1.php"><button class="btn btn-success">Go back</button></a>
    <?php
        
    if(isset($_GET['fname']) && ($_GET['spec']) && isset($_GET['gender']) && isset($_GET['phone']) && isset($_GET['national_id']) && isset($_GET['email']) &&isset($_GET['pass'])
        &&isset($_GET['fees'])&&isset($_GET['mi']) &&isset($_GET['mx'])) {
        $username = $_GET['username'];
        $spec = $_GET['spec'];
        $fname = $_GET['fname'];
        $email = $_GET['email'];
        $gender = $_GET['gender'];
        $national_id = $_GET['national_id'];
        $phone = $_GET['phone'];
        $pass = $_GET['pass'];
        $fees = $_GET['fees'];
        $mi = $_GET['mi'];
        $mx = $_GET['mx'];


    ?>
    <form class="form-group" method="post" action="doctor-edit.php">
          <div class="row">
                  <div class="col-md-4"><label>Doctor Username:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="username" onkeydown="return alphaOnly(event);" value="<?=$username?>" required></div><br><br>
                  
                  <div class="col-md-4"><label>Doctor Full Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname" onkeydown="return alphaOnly(event);" value="<?=$fname?>" required></div><br><br>

                  <div class="col-md-4"><label>Gender:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="gender" onkeydown="return alphaOnly(event);" value="<?=$gender?>" required></div><br><br>

                  <div class="col-md-4"><label>Specialization:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="spec" onkeydown="return alphaOnly(event);" value="<?=$spec?>" required></div><br><br>
                  <!-- <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="General" name="spec">General</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                    </select>
                    </div><br><br> -->
                  <div class="col-md-4"><label>National ID:</label></div>
                  <div class="col-md-8"><input type="text" maxlength="9" minlength="8"  class="form-control" name="national_id" value="<?=$national_id?>" required></div><br><br>

                  <div class="col-md-4"><label>Phone Number:</label></div>
                  <div class="col-md-8"><input type="text" maxlength="11" minlength="10"  class="form-control" name="phonenumber" value="<?=$phone?>" required></div><br><br>

                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="email" value="<?=$email?>" required></div>
                  <br><br>
                  
                  
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="password" id="dpassword" value="<?=$pass?>" required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="fees" value="<?=$fees?>" required></div><br><br>

                  <div class="col-md-4"><label>Available time(in form of H:Min:sec):</label></div><br><br>
                  <label>Start:</label>
                  <div class="col-md-8"><input type="text" class="form-control"  name="mi" value="<?=$mi?>" required></div>
                  <br><br>

                  <div class="col-md-4"><label>Available time(in form of H:Min:sec):</label></div><br><br>
                  <label>End:</label>
                  <div class="col-md-8"><input type="text" class="form-control"  name="mx" value="<?=$mx?>" required></div>
                  <br>
                  
                  
                </div>
          <input type="submit" name="docedit" value="Edit Doctor" class="btn btn-primary" onclick="confirm('Do you wish to proceed?');">
        </form>
      </div>
      <?php }?>

      
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>