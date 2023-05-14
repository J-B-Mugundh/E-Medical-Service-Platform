<?php 
session_start();
require_once("buydbcontrol.php"); 

         $servername = "localhost";
         $username = "root";
         $password = "vijai1234@";
         $database = "adp";
         $conn = new mysqli($servername,$username,$password,$database);
         $mail="guest";
      
        if($conn->connect_error){
          die("connection denied!!!!!" . $conn->connect_error);
        }
        if($_GET){
            $user=$_GET['user'];
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
                 echo "Guest user";
             }
            }
            else{
                echo "Hacked!!!!!";
                echo "<script>alert('You must login  in order to get in this page'); 
                window.location.replace('http://localhost/EPHARMACY/user.php')
                </script>";
            }
?>

<head>
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/heart-plus-2885301-2410403.png">
    <link rel="stylesheet" href="buy.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="confirm.css">
    <link rel="stylesheet" href="confirm2.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:wght@400&family=Rubik+Moonrocks&display=swap");
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");


    html {
        margin: 0;
        padding: 0;
        font-family: "Josefin Sans", sans-serif;
        background: #003366;
        overflow: hidden;
    }

    .cart-item-image {
        transition: all 2s;
    }

    .cart-item-image:hover {
        transform: scale(2);
    }

    .card {
        height: 200px;
        width: 500px;
        background-color: #ffffff;
        position: fixed;
        top: 0;
        left: 30%;
        border-radius: 8px;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        padding: 20px 30px;
    }

    .thumbnail {
        position: relative;
        float: left;
        height: 100%;
        width: 36%;
        border-radius: 50%;
    }

    h1 {
        width: 40%;
        height: 30px;
        float: right;
        margin: 5px 65px 0 0;
    }

    p {
        width: 55%;
        height: 95px;
        float: right;
        margin-top: 20px;
    }

    .card div.thumbnail {
        background: linear-gradient(120deg,
                #e5e5e5 30%,
                #f2f2f2 38%,
                #f2f2f2 40%,
                #e5e5e5 48%);
        background-size: 200% 100%;
        background-position: 100% 0;
        animation: load 2s infinite;
    }

    @keyframes load {
        100% {
            background-position: -100% 0;
        }
    }

    div.product {
        position: relative;
        top: 400px;
    }

    table {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        border-spacing: 0;
        width: 80%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: center;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #fff;
    }

    tr:nth-child(odd) {
        background-color: gray;
    }
    </style>
</head>


<body>
    <div class="pyro">
        <div class="before"></div>
        <div class="after"></div>
    </div>
    <div class="card bg-white bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-lg overflow-hidden">
        <div class="thumbnail"></div>
        <h1>Hello <?php echo $name ?>,</h1>
        <h1> <?php echo $mail ?></h1>
        <h1>Mob: <?php echo $mobile ?></h1>
        <h1>Customer ID: <?php echo $user ?></h1>
    </div>
    <div class="product">
        <table>
            <tr>
                <th>Product</th>
                <th>Code</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Total Cost</th>
            </tr>
            <?php		
                    $total_price=$total_quantity=0;
                    foreach ($_SESSION["cart_item"] as $item){
                       $item_price = $item["quantity"]*$item["price"];
	        ?>

            <tr>
                <td>
                    <img style="float: right" src="<?php echo $item["image"]; ?>" class="cart-item-image" />
                    <span><?php echo $item["name"]; ?></span>
                </td>
                <td><?php echo $item["code"]; ?></td>
                <td style="text-align:center;"><?php echo $item["quantity"]; ?></td>
                <td style="text-align:center;"><?php echo "$ ".$item["price"]; ?></td>
                <td style="text-align:center;"><?php echo "$ ". number_format($item_price,2); ?></td>

            </tr>
            <?php
				    $total_quantity += $item["quantity"];
				    $total_price += ($item["price"]*$item["quantity"]);

		        }
		        ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td> $<?php echo $total_quantity ?> </td>
                <td> $<?php echo $total_price ?> </td>
            </tr>
        </table>

    </div>
    <button class="order"
        ondblclick="window.location.href='http://localhost/EPHARMACY/paymentoption.php?user=<?php echo $user;?>&tot=<?php echo $total_price ?>'">
        <span class="default">Proceed</span><span class="success">Click to pay
            <svg viewbox="0 0 12 10">
                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
            </svg></span>
        <div class="box"></div>
        <div class="truck">
            <div class="back"></div>
            <div class="front">
                <div class="window"></div>
            </div>
            <div class="light top"></div>
            <div class="light bottom"></div>
        </div>
        <div class="lines"></div>
    </button>
    </div>

</body>
<script>
$(".order").click(function(e) {
    let button = $(this);

    if (!button.hasClass("animate")) {
        button.addClass("animate");
        setTimeout(() => {
            button.removeClass("animate");
        }, 10000);
    }
});
</script>