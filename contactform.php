<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT FORM</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Josefin+Sans:wght@300&family=Kdam+Thmor+Pro&display=swap");

    * {
        padding: 0px;
        margin: 0px;
        font-family: "Josefin Sans", Verdana, san-serif;
    }

    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: green;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 8px;
        position: fixed;
        max-height: 40px;
        z-index: 1;
        left: 50%;
        top: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 4.5s;
        animation: fadein 0.5s, fadeout 0.5s 4.5s;
    }

    body {
        background-image: url("https://img.freepik.com/free-photo/frame-medical-equipment-desk_23-2148519742.jpg");
        background-size: cover;
        text-align: center;
        color: black;
    }

    .contact-form {
        margin-top: 100px;
        color: #ff5722;
        text-transform: uppercase;
        transition: all 4s ease-in-out;
    }

    .contact-form h1 {
        font-size: 32px;
        color: #ff0000;
    }


    form {
        margin-top: 50px;
        transition: all 4s ease-in-out;
    }

    .form-control {
        width: 400px;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid gray;
        color: black;
        font-size: 18px;
        margin-bottom: 18px;
    }


    input {
        height: 45px;
    }

    form .submit {
        background: #ff5722;
        border: transparent;
        color: white;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        height: 50px;
        margin-top: 20px;
    }

    form .submit:hover {
        background: #ff0000;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div id="snackbar">Your response has been collected......</div>
    <div class="contact-form">
        <h1>CONTACT FORM</h1>
    </div>
    <div class="contact-us">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="fname" class="form-control" required placeholder="Enter Your Name"> <br>
            <input type="email" name="email" class="form-control" required placeholder="Enter Email"> <br>
            <input type="text" name="mobile" class="form-control" required placeholder="Enter Mobile Number"> <br>
            <input type="text" name="query" id="query" class="form-control" required placeholder="Enter Your Query">
            <br>
            <input type="submit" name="submit" class="form-control submit" value="Submit">
        </form>

    </div>

    <?php
     

      $servername = "localhost";
      $username = "root";
      $password = "vijai1234@";
      $database = "adp";
      $conn = new mysqli($servername,$username,$password,$database);

      if($conn->connect_error){
        die("Connection Failed!" . $conn->connect_error);
      }
      $firstname = $email =$mobile = $query="";
      if(isset($_POST["submit"])){
          $firstname = $_POST["fname"];
          $email = $_POST["email"];
          $mobile = $_POST["mobile"];
          $query =$_POST["query"];
      $sql= "Insert into contact_form(name,email,mobile,query) values ('{$firstname}','{$email}','{$mobile}','{$query}' );";
      
      if($conn->query($sql) === TRUE){
          echo '<script>
         var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
          x.className = x.className.replace("show", "");
          return false;
        }, 5000); </script>';

        $to_email = $email;
          $subject = 'Query Form';
          $htmlContent =' 
         <html>
  <head>
    <title>Welcome to E Medical service</title>
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
    <h1>E Medical service </h1>
    <h2>Your query form response......</h2>
    Greetings of the Day
    <br />
    <p>
      Mr./Ms. <span>'.$firstname.'</span>. You made an query/feedback/request in our portal.
    </p>
    <p>We will validate your response and reach you back sooner</p>
    <p>
      Thanks for making this action
    </p>
    <br />
    <img style="width: 250px" src="https://drive.google.com/uc?export=view&id=1MoIUhEEgFUb5W5rN0qvh7JfFwwNZLdTW" />
    
    <p>
      Live your life healthier. E-Medical Service anytime anywhere 24X7 only @<a href="localhost/EPHARMACY/user.php"
        >E Medical service HOSPITALS</a
      >
    </p>
  </body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: '.'E Medical service HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 

 

          
                if(mail($to_email, $subject, $htmlContent, $headers)){
                  echo "<div id='snackbar' style='background-color: green'>Response Mail is sent...<br/> Thank you!!!..</div>";
        echo '<script>var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';
                }
                else{
                  echo "<div id='snackbar' style='background-color: dodgerblue'>We regert to inform that Due to heavy traffic, There is a delay in confirmation mail <br> Check your progress in staus page Thank you!!!</div>";
        echo '<script>var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';
                }
          
      }
      else 
          echo "\n Error in query".$conn->error;
      }
      
      $conn->close();
    ?>
</body>

</html>