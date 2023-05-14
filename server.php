    <?php
      $today= "2022-09-05";
      $servername = "localhost";
      $username = "root";
      $password = "vijai1234@";
      $database = "adp";
      $conn = new mysqli($servername,$username,$password,$database);
      $falert=$salert=$err="";
      if($conn->connect_error){
        die("connection denied!!!!!" . $conn->connect_error);
      }
      $name=$mail=$date=$test="";
      
      function sanitize_my_email($field) {
          $field = filter_var($field, FILTER_SANITIZE_EMAIL);
          if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
          } else {
            return false;
      }
}

      if(isset($_GET["submit"])){
          $mail=$_GET["mail"];
          $sql12 = "select * from account where mail = '$mail' ";  
          $result = mysqli_query($conn, $sql12);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);  

        if($count == 1){
          session_start();
          $name=$_GET["name"];
          $date=$_GET["date"];
          $test=$_GET["test"];
           if(strtotime($date)<strtotime($today)){
              $err = "Invalid date";
              echo "<div id='snackbar'>Please, Enter the Vaild date.....</div>";
        echo '<script>var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';
          }
          else{
          $err = "";
          $sql= $conn->prepare("Insert into server(name,email,date,test) VALUES (?,?,?,?)");
          $sql->bind_param("ssss",$name,$mail,$date,$test);
          $sql->execute();
          
           
          $to_email = $mail;
          $subject = 'Appointment Booking';
          $htmlContent =' 
         <html>
  <head>
    <title>Welcome to E Medical service</title>
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: black;
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
    <h2>Appointment Confirmation</h2>
    Greetings of the Day
    <br />
    <p>
      Mr./Ms. <span>'.$name.'</span> You are successfully make a request
      regarding the health checkup <span>'.$test.'</span> in our E-Medical portal.
    </p>
    <p>
      Shortly we reach you back for a short televerification until it\'s in
      <span>under progress</span>
    </p>
    <br />
    <p>
      Check your progress in at anytime anywhere 24X7 only @<a href="localhost/ADPb/book.php"
        >E Medical service </a
      >
    </p>
    <img style="width: 250px;text-align: center" src="https://drive.google.com/uc?export=view&id=1MoIUhEEgFUb5W5rN0qvh7JfFwwNZLdTW" />
    

  </body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: '.'E Medical service HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
          $secure_check = sanitize_my_email($to_email);

          if ($secure_check == true) { 
                if(mail($to_email, $subject, $htmlContent, $headers)){
                  echo "<div id='snackbar' style='background-color: green'>Confirmation Mail is sent to the registered Mail ID...</div>";
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

          $last_id = $conn->insert_id;
          $_SESSION["name"] = $name;
          $_SESSION["success"] = "Under Progress";
          $_SESSION["id"] = $last_id;
          header("location:success.php");
        }
      }
      else{
        echo "<div id='snackbar'>you need to enter the registered mail id</div>";
        echo '<script>var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';
      }
    }
    ?>