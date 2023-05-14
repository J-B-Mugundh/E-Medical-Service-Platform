<?php
session_start();
require_once("buydbcontrol.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>



<html>

<head>
    <title>Buy now!!</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/heart-plus-2885301-2410403.png">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:wght@300&family=Rubik+Moonrocks&display=swap');



    footer ul {
        list-style-type: none;
    }

    footer {
        width: 100%;
        background-color: #000000;
        min-height: 100px;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        box-sizing: border-box;
    }

    .footer_col {
        flex-basis: 25%;
        padding: 0 1%;
        box-sizing: border-box;
    }

    @media screen and (max-width: 700px) {
        footer {
            flex-flow: column wrap;
        }

        .footer_col {
            flex-basis: 100%;
        }
    }

    .footer_col h4 {
        font-size: 18px;
        color: rgb(255, 255, 255);
        margin-bottom: 30px;
        font-weight: bolder;
        box-sizing: border-box;
        position: relative;
    }

    .footer_col h4::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #ff0000;
        width: 50px;
        height: 2px;
        box-sizing: border-box;
    }

    .footer_col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer_col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #b9b9b9;
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
    }

    .footer_col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer_col img {
        width: 75%;
    }

    body {
        font-family: 'Josefin Sans', sans-serif;
        color: #211a1a;
        font-size: 20px;
        font-weight: 700;
    }

    #shopping-cart {
        margin: 40px;
    }

    #shopping-cart table {
        width: 100%;
        background-color: #f0f0f0;
    }

    #shopping-cart table td {
        background-color: #ffffff;
    }

    .txt-heading {
        color: #211a1a;
        border-bottom: 1px solid #e0e0e0;
        overflow: auto;
    }

    #btnEmpty {
        background-color: #ffffff;
        border: #d00000 1px solid;
        padding: 5px 10px;
        color: #d00000;
        float: right;
        text-decoration: none;
        border-radius: 3px;
        margin: 10px 0px;
    }

    .btnAddAction {
        padding: 5px 10px;
        margin-left: 5px;
        background-color: #efefef;
        border: #e0e0e0 1px solid;
        color: #211a1a;
        float: right;
        text-decoration: none;
        border-radius: 3px;
        cursor: pointer;
    }


    #product-grid {
        padding: 10px;
        width: 100%;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
    }

    .product-item {
        flex-basis: 30%;
        margin-bottom: 35px;
        height: 400px;
        background: #ffffff;
        border: #e0e0e0 1px solid;
        transition: all 1s;
    }

    .product-item:hover {
        transform: translateY(-7px);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .product-image {
        background-color: #fff;
        overflow: hidden;
        width: 100%;
        text-align: center;
    }

    .product-image img {
        width: 90%;
        height: 300px;
        object-fit: contain;
    }

    .clear-float {
        clear: both;
    }

    .demo-input-box {
        border-radius: 2px;
        border: #ccc 1px solid;
        padding: 2px 1px;
    }

    .tbl-cart {
        font-size: 0.9em;
    }

    .tbl-cart th {
        font-weight: normal;
    }

    .product-title {
        margin-bottom: 20px;
    }

    .product-price {
        float: left;
    }

    .cart-action {
        float: right;
    }

    .product-quantity {
        padding: 5px 10px;
        border-radius: 3px;
        border: #e0e0e0 1px solid;
    }

    .product-tile-footer {
        padding: 15px 15px 0px 15px;
        overflow: auto;
    }

    .cart-item-image {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: #e0e0e0 1px solid;
        padding: 5px;
        vertical-align: middle;
        margin-right: 15px;
    }

    .no-records {
        text-align: center;
        clear: both;
        margin: 38px 0px;
    }

    .flexible {
        display: flex;
        flex-direction: column;
    }

    .navbar {
        border: none;
        display: flex;
        flex-flow: row wrap;
        justify-content: flex-end;
        background-image: linear-gradient(to bottom right, #968f8f, #202120);
        font-family: Josefin Sans;
        font-weight: bolder;
        font-size: 18px;
        opacity: 0.8;
        overflow: hidden;
        position: sticky;
        width: 100%;
    }

    .navbar a {
        text-decoration: none;
        color: #f2ff00;
    }

    .menu {
        padding: 20px;
        text-align: center;
    }

    .menu:nth-child(1) {
        flex-grow: 7;
        justify-content: flex-start;
    }

    .menu:not(:first-child):hover {
        background-color: #221d1d;
    }

    #icon {
        width: 50px;
        height: 18px;
    }
    </style>
</head>

<body>
    <div class="user_info">
        <?php
         $servername = "localhost";
         $username = "root";
         $password = "vijai1234@";
         $database = "adp";
         $conn = new mysqli($servername,$username,$password,$database);
         $mail="guest";
      
        if($conn->connect_error){
          die("connection denied!!!!!" . $conn->connect_error);
        }
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
            }
            
             }
             else{
                 echo "Guest user";
             }
            
        
        ?>
    </div>
    <div class="flexible">
        <div class="navbar">
            <div class="menu" style="color: white">
                <?php echo "Welcome back ".$name.", "; ?>
                <span style="margin-left: 20px"><?php echo " Customer ID : ".$user; ?><span>
            </div>
            <div class="menu"><a href="HOME.html">Home</a></div>
            <div class="menu"><a href="#menu1">About Us</a></div>
            <div class="menu">
                <a href="OUR_CENTRES.html" target="_blank">Our Centres </a>
            </div>
            <div class="menu">
                <a href="#Our_Services">Our Services</a>
            </div>
            <div class="menu"><a
                    href="https://www.iciciprulife.com/term-insurance-plans/iprotect-smart-term-insurance-calculator.html?UID=1240cid=Search:Google::Text::RSA::DM:iPS:::IPRU-Search-Competition_LIC-EM-RX-Desktop-1240:::New-RSA-iProtectSmart-LifeCover-PremWaiver-12Dec2021:::1240&&keyword=lic%20life%20insurance&matchtype=e&gclid=CjwKCAjwh-CVBhB8EiwAjFEPGTcu_iNmXXGajuY-uXXTtqPoDFgHut7TtN1XAE-A82ibYciQPOERqRoCXLgQAvD_BwE&gclsrc=aw.ds">Insurance</a>
            </div>
            <div class="menu"><a href="https://mvkhospital.wordpress.com/2022/07/01/hello-world/">Blog</a></div>
            <div class="menu"><a href="http://localhost/EPHARMACY/contactform.php/">Contact Us</a></div>
        </div>
    </div>
    <div id="shopping-cart">
        <div class="txt-heading">Shopping Cart</div>
        <?php
        $urll = "http://localhost/EPHARMACY/buy.php?user=".$user."&action=empty";
         ?>
        <a id="btnEmpty" href="<?php echo $urll ?>">Empty Cart</a>

        <?php
            if(isset($_SESSION["cart_item"])){
                  $total_quantity = 0;
                  $total_price = 0;
        ?>

        <table class="tbl-cart">
            <tbody>
                <tr>
                    <th style="text-align:left;">Name</th>
                    <th style="text-align:left;">Code</th>
                    <th style="text-align:right;" width="5%">Quantity</th>
                    <th style="text-align:right;" width="10%">Unit Price</th>
                    <th style="text-align:right;" width="10%">Price</th>
                    <th style="text-align:center;" width="5%">Remove</th>
                </tr>

                <?php		
                    foreach ($_SESSION["cart_item"] as $item){
                       $item_price = $item["quantity"]*$item["price"];
	        	?>

                <tr>
                    <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?>
                    </td>
                    <td><?php echo $item["code"]; ?></td>
                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                    <td style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                    <td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                    <td style="text-align:center;"><a
                            href="buy.php?user=<?php echo $user ?>&action=remove&code=<?php echo $item["code"]; ?>"
                            class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                </tr>

                <?php
				    $total_quantity += $item["quantity"];
				    $total_price += ($item["price"]*$item["quantity"]);
		        }
		        ?>

                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="http://localhost/EPHARMACY/confirm.php?user=<?php echo $user; ?>"> Buy now </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php
            } else {    
        ?>

        <div class="no-records">Your Cart is Empty</div>
        <?php 
            }
        ?>
    </div>

    <div class="txt-heading">Products</div>
    <div id="product-grid">

        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	        if (!empty($product_array)) { 
	        	foreach($product_array as $key=>$value){
	    ?>

        <div class="product-item">
            <form method="post"
                action="buy.php?user=<?php echo $user ?>&action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                <div class="product-tile-footer">
                    <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1"
                            size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                </div>
            </form>
        </div>
        <?php
		}
	}
	?>
    </div>
    <footer>
        <div class="footer_col">
            <h4>Patient Care</h4>
            <ul>
                <li><a href='http://localhost/EPHARMACY/book.php'>Book Appointment</a></li>
                <li><a href='http://127.0.0.1:5500/oc.html'>Consult Online</a></li>
                <li><a href='http://localhost/EPHARMACY/user.php'>Accounts</a></li>
                <li><a href='http://127.0.0.1:5500/admin.html'>Get Lab Results</a></li>

            </ul>
        </div>
        <div class="footer_col">
            <h4>News and Media</h4>
            <ul>
                <li><a href='https://mvkhospital.wordpress.com/2022/07/01/hello-world/'>Blog</a></li>
                <li><a href='https://www.healthline.com/health-news'>News</a></li>
                <li><a href='#'>Reviews</a></li>
                <li><a href='https://www.who.int/health-topics/coronavirus#tab=tab_1'>Covid 19</a></li>

            </ul>
        </div>
        <div class="footer_col" id="contact">
            <h4>Contact Us</h4>
            <ul>
                <li><a href='#'>
                        <p>
                            <a href="tel:044 6251 6004">Call: 044 6251 6004</a>
                        </p>
                    </a></li>
                <li><a href='#'>
                        <p>
                            <a href="mailto:hospitalsmvk@gmail.com" ">
                                    Mail: <span style=" text-transform:lowercase;">hospitalsmvk@hospital.co.in</span>
                            </a>
                        </p>
                    </a></li>
                <li><a href='http://localhost/EPHARMACY/contactform.php/'>Helpline</a></li>
                <li><a href='http://localhost/EPHARMACY/contactform.php/'>Feedback</a></li>

            </ul>
        </div>
        <div class="footer_col">
            <ul>
                <li><a href='#'><img src="newlogo.gif"></a></li>
            </ul>
        </div>

    </footer>
</body>

</html>