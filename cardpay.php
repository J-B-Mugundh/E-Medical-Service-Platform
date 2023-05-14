 <?php
         $servername = "localhost";
         $username = "root";
         $password = "vijai1234@";
         $database = "adp";
         $conn = new mysqli($servername,$username,$password,$database);
      
        if($conn->connect_error){
          die("connection denied!!!!!" . $conn->connect_error);
        }
        if($_GET){
            $user=$_GET['user'];
            $tot=$_GET['tot'];
            echo '<script>';
            echo 'var getid = ' . json_encode($user) . ';';
            echo '</script>';

            $sql = "select * from account where id = '$user'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $mail=$row['mail'];
                    $name=$row['name'];
                    $mobile=$row['mobile'];
            }
            
             }
             else{
                 echo "Hacked!!!!!";
                echo "<script>alert('You must login  in order to get in this page'); 
                window.location.replace('http://localhost/EPHARMACY/user.php')
                </script>";
             }
            }
            else{
                echo "Hacked!!!!!";
                echo "<script>alert('You must login  in order to get in this page'); 
                window.location.replace('http://localhost/EPHARMACY/user.php')
                </script>";
            }
?>
 <html>

 <head>
     <link rel="stylesheet" href="cardpay.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="cardpay.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
 </head>

 <body>
     <div class="container d-lg-flex">
         <div class="box-1 bg-dodgerblue user">
             <div class="box-inner-1 pb-3 mb-3">
                 <div class="d-flex justify-content-between  userdetails">
                     <p class="fw-bold">
                         Hello
                         <?php echo $name ?> !!!
                     </p>
                 </div>
                 <div class="d-flex justify-content-between mb-3 userdetails">
                     <p class="fw-bold" style="font-family: 'Dancing Script'; font-size: 30px">
                         E-MEDICAL Service
                     </p>
                 </div>
                 <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                     data-bs-interval="2000">
                     <div class="carousel-indicators">
                         <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active"
                             aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                 class="d-block w-100" />
                         </div>
                         <div class="carousel-item">
                             <img src="https://images.pexels.com/photos/270694/pexels-photo-270694.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                 class="d-block w-100" />
                         </div>
                         <div class="carousel-item">
                             <img src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                 class="d-block w-100" />
                         </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                         <div class="icon"><span class="fas fa-arrow-left"></span></div>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                         <div class="icon"><span class="fas fa-arrow-right"></span></div>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>
                 <p class="dis my-3 info">
                     Our portal creates you simpler, faster and securest way of payment. Digital E-Marthuva Scheme
                     welcomes you. Belive us your 100% safe
                 </p>

                 <h1>SCAN TO PAY....</h1>
                 <img class="qrcode"
                     src="https://chart.apis.google.com/chart?cht=qr&chs=500x500&chl=ethereum%3A0x9ad4c3c61f826bd707f59f2e21df96be3724d9dd&chld=H" />

             </div>
         </div>
         <div class="box-2">
             <div class="box-inner-2">
                 <div>
                     <p class="fw-bold">Payment Details</p>
                     <p class="dis mb-3">
                         Complete your purchase by providing your payment details
                     </p>
                 </div>
                 <form action="">
                     <div class="mb-3">
                         <p class="dis fw-bold mb-2">Email address</p>
                         <div class=inputWithcheck>
                             <input class="form-control" disabled type="email" value="<?php echo $mail?>" /> <span
                                 class='fas fa-check'></span>
                         </div>
                     </div>
                     <div>
                         <p class="dis fw-bold mb-2">Card details</p>
                         <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                             <div class="fab fa-cc-visa ps-3"></div>
                             <input type="text" required class="form-control" placeholder="Card Details" />
                             <div class="d-flex w-50">
                                 <input type="text" required class="form-control px-0" placeholder="MM/YY" />
                                 <input type="password" required maxlength="3" class="form-control px-0"
                                     placeholder="CVV" />
                             </div>
                         </div>
                         <div class="my-3 cardname">
                             <p class="dis fw-bold mb-2">Cardholder name</p>
                             <input class="form-control" type="text" />
                         </div>
                         <div class="address">
                             <p class="dis fw-bold mb-3">Billing address</p>
                             <select style="font-family: Josefin Sans" class="form-select"
                                 aria-label="Default select example">
                                 <option selected hidden>India</option>
                                 <option value="1">USA</option>
                                 <option value="2">Australia</option>
                                 <option value="3">Canada</option>
                                 <option value="3">London</option>
                                 <option value="3">Japan</option>
                             </select>
                             <div class="d-flex">
                                 <input class="form-control zip" required type="text" placeholder="ZIP" />
                                 <input class="form-control state" required type="text" placeholder="State" />
                             </div>
                             <div class="my-3">
                                 <p class="dis fw-bold mb-2">Transaction ID</p>
                                 <div class="inputWithcheck">
                                     <input class="form-control" type="text" id="refid" disabled />
                                     <span class="fas fa-check"></span>
                                 </div>
                             </div>

                             <div class="d-flex flex-column dis">
                                 <div class="d-flex align-items-center justify-content-between mb-2">
                                     <p class="fw-bold">Total</p>
                                     <p class="fw-bold">
                                         <span class="fas fa-dollar-sign"></span><?php echo $tot; ?>
                                     </p>
                                 </div>
                                 <div class="btn btn-primary mt-2"
                                     onclick="window.location.href='http://127.0.0.1:5500/order.html'">
                                     Pay<span class="fas fa-dollar-sign px-1"></span><?php echo $tot ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </body>
 <script>
let id = Math.random().toString(36).slice(2);
document.getElementById("refid").value = id;
 </script>

 </html>