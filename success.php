<?php
session_start();

if(isset($_GET["name"])){
    $_SESSION["msg"]="you must fill the appointment form to see this page";
    header("location:book.php");
}
if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION["name"]);
    header("location: book.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<style>
@import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Josefin+Sans:wght@300&family=Kdam+Thmor+Pro&display=swap");

* {
    padding: 0;
    margin: 0;
    font-family: "Josefin Sans", sans-serif;
}

.button-1,
.button-2 {
    background-color: #EA4C89;
    border-radius: 8px;
    border-style: none;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    height: 40px;
    line-height: 20px;
    padding: 10px 16px;
    position: relative;
    text-align: center;
    transition: color 100ms;
    vertical-align: baseline;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    position: absolute;
}

.button-1 {
    bottom: 20px;
    left: 20%;
}

.button-2 {
    bottom: 20px;
    left: 40%;
}

.button-1:hover,
.button-1:focus {
    background-color: #F082AC;
}

body {
    background: url('bg.webp') no-repeat center fixed;
    background-size: cover;
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
}

.left {
    border: 2px solid hotpink;
    height: 50vh;
    padding: 30px;
    margin: 30px;
    width: 50%;
    box-shadow: purple 0px 20px 30px -10px;
    position: relative;
}

#info:hover {
    transform: translateY(-10px);
}

.info {
    transition: all 1s;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    padding: 10px;
    border: 2px solid purple;
    text-align: center;
    font-size: 1.5rem;
    color: green;
    max-width: 400px;
    margin: auto;
    position: absolute;
    top: 60%;
    left: 20%;
}

a {
    color: white;
    font-size: 20px;
    text-decoration: none;
}


.logo {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 50px;
    height: 50px;
}

h1 {
    color: red;
    margin: 5px;
    text-transform: uppercase;
}

@media print {
    .left img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .info {
        bottom: 0;
        height: 50px;
    }

    .content {
        z-index: 1;
    }

    button {
        display: none !important;
    }
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
</head>

<body>


    <div class="left">
        <div class="content">
            <?php  if(!(isset($_SESSION["success"]))){
           echo "<h1>you must book an appointment to see this page</h1>";
       } ?>

            <?php 
               if(isset($_SESSION["name"])){
                 echo $_SESSION["success"];
                 unset($_SESSION["success"]);
                 echo "<h1 style='color:green'>You are successfully appointed </h1>
                  <br>
                  <h4>It's in progress don't make further bookings until we make an televerification</h4>";
                 echo "<h3 class='info'>Your Name :". $_SESSION['name']."<br>Appointment ID :". $_SESSION['id']."</h3>";
                 }
             ?>
            <button class="button-1" role="button"> <a href="success.php?logout='1'">Go Back</a></button>
            <button class="button-2" role="button" onclick="print()"> Print the Recipt</button>
        </div>
        <img src="newlogo.png" class="logo">
    </div>


    <script>
    document.addEventListener('keydown', (e) => {
        e = e || window.event;
        if (e.keyCode == 116) {
            console.log("can't refresh the page");
            alert("can't refresh the page note down the application id for future use");
            e.preventDefault();
        }
    });
    </script>
</body>

</html>