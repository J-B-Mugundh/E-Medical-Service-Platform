<?php
    function sanitize_my_email($field) {
          $field = filter_var($field, FILTER_SANITIZE_EMAIL);
          if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
          } else {
            return false;
      }
    }
    $server="localhost";
$database="adp";
$username="root";
$password="vijai1234@";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("connetion failed!!!..".$conn->connect_error);
}
  $fullname = $mail = $mobile = $password = $rpassword = $err = "";
  $error=Array();
        $error[0]=$error[1]=$error[2]=$error[4]=$error[3]="";

        if(isset($_POST['sub2'])){

            $fullname = text($_POST["username2"]);
            $mobile = text($_POST["mobile"]);
            $mail = text($_POST["email"]);
            $password = text($_POST["password2"]);
            $rpassword = text($_POST["repassword"]);
            if(empty($fullname)) $error[0] = "Name should not empty" ;
            else {
                if(!preg_match("/^[A-Z-]*$/i",$fullname)) $error[0] = "Invalid name";
            }
            if(!(strlen($mobile)==10)) $error[1] = "Mobile number should contain ten digits";
            else {  
                if(!preg_match("/^[0-9]/",$mobile)) $error[1] = "Invalid mobile number";
            }
            if(empty($mail)) $error[2]="Email is required";
            else{
                if(!filter_var($mail,FILTER_VALIDATE_EMAIL)) $error[2] = "Invalid Email";
            }
            if(empty($password)) $error[3]= "Password is required";
            else{
                if(strlen($password)<8) $error[3] ="Password should be greater than 8";
            }
            if(empty($rpassword))$error[4] ="Please Confirm the Password";
            else{
                if($password != $rpassword) $error[4] = "Password Mismatch!!!!";
            }
            if(empty($error[0]) and empty($error[1]) and empty($error[2]) and empty($error[3]) and empty($error[4])){
              $sql13 = "select * from account where mail = '$mail' ";  
              $result = mysqli_query($conn, $sql13);  
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
              $count1 = mysqli_num_rows($result);  

              $sql14 = "select * from account where mobile = '$mobile' ";  
              $result = mysqli_query($conn, $sql14);  
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
              $count2 = mysqli_num_rows($result);  

              if($count1 == 0 && $count2==0){
              $sql =$conn->prepare("insert into account(name,mobile,mail,password) values(?,?,?,?)");
              $sql->bind_param("ssss",$fullname,$mobile,$mail,$password);
              $sql->execute();
              $last_id = $conn->insert_id;
              $to_email = $mail;
          $subject = 'Signin to MVK';
          $htmlContent =' 
         <html>
  <head>
    <title>Welcome to MVK Hospital</title>
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      span {
        color: red;
        font-size: 20px;
        font-weight: 700;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
    </style>
  </head>
  <body>
    <h1>MVK Hospitals</h1>
    <h2>Welcomes you.....</h2>
    Greetings of the Day
    <br />
    <p>
      Mr./Ms. <span>'.$fullname.'</span> <br>
      Email : '.$mail.'
      Customer Id :'.$last_id.'. <br>
      You are created account in our MVK Hospitals.
      Live long Live Healthy Life
    </p>
    <img style="width: 100%;height: 250px" src="https://drive.google.com/uc?export=view&id=1xu2ikRZr4eWpkavGIzf6FajIZbPXAdCB" />
    <p>
      If this is not you, please inform us at <a href="http://localhost/EPHARMACY/contactform.php">MVK Hospital</a>
    </p>
    <p>Anytime Anywhere At your Coninence
    <br />
   
  </body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: '.'MVK HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
$secure_check = sanitize_my_email($to_email);
          if ($secure_check == true) { 
                if(mail($mail, $subject, $htmlContent, $headers)){
                    echo "<script> window.open('http://127.0.0.1:5500/part.html','_self'); </script>";
                }
            }

        }
        else{
            if($count1 > 0) $error[2]="Already Registered E-Mail ID";
            if($count2 > 0) $error[1]="Already Registered Mobile Number";
            
            echo "<div id='snackbar'>User already exists...</div>";
            echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';

        }
        
      }
      else{
            echo "<div id='snackbar'>Fill all the details correctly</div>";
            echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
      
        }

    }
        function text($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST["sub1"])=="POST")
       {
          $email1=$_POST["username1"];
          $id1 = $_POST["userid1"];
          $pass1=$_POST["password1"];
          echo '<script>';
          echo 'var setid = ' . json_encode($id1) . ';';
          echo '</script>';

          $sql12 = "select * from account where mail = '$email1' and password = '$pass1' and id= '$id1' ";  
          $result = mysqli_query($conn, $sql12);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);  

                        if($count == 1){
                            $to_email = $email1;
          $subject = 'Login Activity';
          $htmlContent =' 
         <html>
  <head>
    <title>Welcome to MVK Hospital</title>
    <style>
      body {
        background: url("MVK.jpg") center fixed;
        background-size: cover;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      span {
        color: red;
        font-size: 20px;
        font-weight: 700;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
    </style>
  </head>
  <body>
    <h1>MVK Hospitals</h1>
    <h2>Login Activity</h2>
    Greetings of the Day
    <br />
    <p>
      Mr./Ms. <span>'.$email1.'</span> having Customer Id :'.$id1.'You are logged in our MVK Hospital web portal 
    </p>
    <p>
      If this is not you, please change your password <a href="http://localhost/EPHARMACY/user.php">@MVK Hospitals</a>
    </p>
    <p>Anytime Anywhere At your Coninence
    <br />
   
  </body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: '.'MVK HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
$secure_check = sanitize_my_email($email1);
          if ($secure_check == true) { 
             /*   if(mail($email1, $subject, $htmlContent, $headers))
                  echo "<div id='conalert'>Confirmation Mail is sent to your registered Email <br> Thank you!!!</div>"; */
                }
                           echo "<div id='snackbar' style='background-color: green'>Logged in successfully!!</div>";
            echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
                    
                           echo '<script type="text/javascript">
                                window.location = ("http://localhost/EPHARMACY/buy.php?user="+setid)
                                </script>';
                          }
else{
$err = "No user found";
echo "<div id='snackbar'>Invalid user details</div>";
echo '<script>
var x = document.getElementById("snackbar");
x.className = "show";
setTimeout(function() {
    x.className = x.className.replace("show", "");
}, 3000)
</script>';
}

}



?>