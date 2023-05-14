<?php
    $user=$_GET["user"];
    $tot=$_GET["tot"];
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/heart-plus-2885301-2410403.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet" />
    <title>PAYMENT</title>
    <style>
    body {
        font-family: Josefin Sans;
    }

    tr {
        text-align: center;
        margin: 5px auto;
    }

    td {
        width: 100%;
    }

    .button {
        background-color: hotpink;
        border-radius: 100px;
        box-shadow: rgba(109, 109, 221, 0.2) 0 -25px 18px -14px inset,
            rgba(109, 109, 221, 0.15) 0 1px 2px,
            rgba(109, 109, 221, 0.15) 0 2px 4px,
            rgba(109, 109, 221, 0.15) 0 4px 8px,
            rgba(109, 109, 221, 0.15) 0 8px 16px,
            rgba(109, 109, 221, 0.15) 0 16px 32px;
        color: white;
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 22px;
        width: auto;
        width: 250px;
    }

    .button:hover {
        background-color: rgb(72, 190, 72);

        box-shadow: rgba(44, 187, 99, 0.35) 0 -25px 18px -14px inset,
            rgba(44, 187, 99, 0.25) 0 1px 2px, rgba(44, 187, 99, 0.25) 0 2px 4px,
            rgba(44, 187, 99, 0.25) 0 4px 8px, rgba(44, 187, 99, 0.25) 0 8px 16px,
            rgba(44, 187, 99, 0.25) 0 16px 32px;
        animation: animate 2s ease-in-out infinite;
    }

    @keyframes animate {

        0%,
        100% {
            transform: scale(1.05) rotate(-5deg);
        }

        25% {
            transform: scale(1.05) rotate(5deg);
        }

        50% {
            transform: scale(1.05) rotate(-5deg);
        }

        75% {
            transform: scale(1.05) rotate(5deg);
        }
    }

    .button1 {
        background-color: hotpink;
        border-radius: 100px;
        box-shadow: rgba(109, 109, 221, 0.2) 0 -25px 18px -14px inset,
            rgba(109, 109, 221, 0.15) 0 1px 2px,
            rgba(109, 109, 221, 0.15) 0 2px 4px,
            rgba(109, 109, 221, 0.15) 0 4px 8px,
            rgba(109, 109, 221, 0.15) 0 8px 16px,
            rgba(109, 109, 221, 0.15) 0 16px 32px;
        color: white;
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 22px;
        width: auto;
        width: 250px;
    }

    .button1:hover {
        background-color: rgb(223, 28, 28);
        box-shadow: rgba(223, 28, 28, 0.35) 0 -25px 18px -14px inset,
            rgba(223, 28, 28, 0.25) 0 1px 2px, rgba(223, 28, 28, 0.25) 0 2px 4px,
            rgba(223, 28, 28, 0.25) 0 4px 8px, rgba(223, 28, 28, 0.25) 0 8px 16px,
            rgba(223, 28, 28, 0.25) 0 16px 32px;

        animation: animate1 2s ease-in-out infinite;
    }

    @keyframes animate1 {

        0%,
        100% {
            transform: scale(1.05) rotate(-5deg);
        }

        25% {
            transform: scale(1.05) rotate(5deg);
        }

        50% {
            transform: scale(1.05) rotate(-5deg);
        }

        75% {
            transform: scale(1.05) rotate(5deg);
        }
    }

    #span1,
    #span2,
    #span3,
    #span4,
    #span5 {
        transition: all 2s;
        display: none;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: "Josefin Sans", sans-serif;
    }

    .ki {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #3586ff;
        overflow: hidden;
    }

    .ki .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(wave.png);
        background-size: 1000px 100px;
    }

    .ki .wave.wave1 {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    .ki .wave.wave2 {
        animation: animate2 15s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
    }

    .ki .wave.wave3 {
        animation: animate3 30s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }

    .ki .wave.wave4 {
        animation: animate4 20s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20px;
    }

    @keyframes animate {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1000px;
        }
    }

    @keyframes animate2 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1000px;
        }
    }
    </style>
</head>

<body>
    <section class="ki">
        <div>
            <table>
                <tr>
                    <th>
                        <h1>PAYMENT METHODs:</h1>
                    </th>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input id="id1" type="submit" onmouseover="check1()" onmouseout="check11()"
                            onclick="window.location.href='http://localhost/EPHARMACY/cardpay.php?user=<?php echo $user ?>&tot=<?php echo $tot ?>' "
                            class="button" value="USING UPI" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span id="span1">
                            <i class="fa-sharp fa-solid fa-bolt"></i> 10,000 people bought
                            medicines using UPI in last one hour</span>
                    </td>
                </tr>

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input id="id2" type="submit"
                            onclick="window.location.href='http://localhost/EPHARMACY/cardpay.php?user=<?php echo $user ?>&tot=<?php echo $tot ?>' "
                            onmouseover="check2()" onmouseout="check22()" class="button" value="CREDIT CARD" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span id="span2"><i class="fa-sharp fa-solid fa-bolt"></i> 5,000 people bought
                            medicines using CREDIT CARD in last one hour</span>
                    </td>
                </tr>

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input id="id3" type="submit" onmouseover="check3()" onmouseout="check33()"
                            onclick="window.location.href='http://localhost/EPHARMACY/cardpay.php?user=<?php echo $user ?>&tot=<?php echo $tot ?>' "
                            class="button" value="DEBIT CARD" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span id="span3"><i class="fa-sharp fa-solid fa-bolt"></i> 9876 people bought
                            medicines using DEBIT CARD in last one hour</span>
                    </td>
                </tr>

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="button" onmouseover="check4()"
                            onclick="window.location.href='http://localhost/EPHARMACY/codpay.php?user=<?php echo $user ?>&tot=<?php echo $tot ?>' "
                            onmouseout="check44()" value="COD" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span id="span4"><i class="fa-sharp fa-solid fa-bolt"></i> Many people prefer
                            Online mode, make payments simpler & secure</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input id="id5" type="submit" onmouseover="check5()" onmouseout="check55()" class="button1"
                            value="IB" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span id="span5">
                            <i class="fa-sharp fa-solid fa-bolt"></i> Coming soon.....</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
</body>
<script>
function check1() {
    var x = document.getElementById("span1");
    x.style.display = "block";
    x.style.color = "white";
}

function check11() {
    var x = document.getElementById("span1");
    x.style.display = "none";
}

function check2() {
    var x = document.getElementById("span2");
    x.style.display = "block";
    x.style.color = "white";
}

function check22() {
    var x = document.getElementById("span2");
    x.style.display = "none";
}

function check3() {
    var x = document.getElementById("span3");
    x.style.display = "block";
    x.style.color = "white";
}

function check33() {
    var x = document.getElementById("span3");
    x.style.display = "none";
}

function check4() {
    var x = document.getElementById("span4");
    x.style.display = "block";
    x.style.color = "white";
}

function check44() {
    var x = document.getElementById("span4");
    x.style.display = "none";
}

function check5() {
    var x = document.getElementById("span5");
    x.style.display = "block";
    x.style.color = "red";
}

function check55() {
    var x = document.getElementById("span5");
    x.style.display = "none";
}
</script>

</html>