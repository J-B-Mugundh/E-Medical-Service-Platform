<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN & SIGN UP</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/heart-plus-2885301-2410403.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    :root {
        --color-red: #ec1840;
        --color-purple: #7a18ec;
        --color-white: #fff;
        --color-black-1: #111;
        --color-black-2: #222;
        --color-black-3: #444;
        --speed-normal: 0.5s;
        --speed-fast: 0.8s;
    }

    a {
        position: relative;
        padding: 10px;
        border-radius: 49px;
        width: 150px;
        height: 39px;
        margin: 20px;
        line-height: 60px;
        letter-spacing: 2px;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        color: var(--color-white);
        trasnition: var(--speed-normal);
        border: 1px solid var(--color-red);
        background-color: purple;
    }

    a:hover {
        border: 1px solid transparent;
        background: var(--color-red) url(https://i.postimg.cc/wBXGXbWN/pixel.png);
        transition-delay: 0.8s;
        background-size: 180px;
        -webkit-animation: animate var(--speed-fast) steps(8) forwards;
        animation: animate var(--speed-fast) steps(8) forwards;
    }

    a:last-of-type {
        border: 1px solid var(--color-purple);
    }

    a:last-of-type:hover {
        background: var(--color-purple) url(https://i.postimg.cc/FzBWFtKM/pixel2.png);
    }

    @-webkit-keyframes animate {
        0% {
            background-position-y: 0;
        }

        100% {
            background-position-y: -480px;
        }
    }

    @keyframes animate {
        0% {
            background-position-y: 0;
        }

        100% {
            background-position-y: -480px;
        }
    }

    *:focus,
    *:active {
        outline: none !important;
        -webkit-tap-highlight-color: transparent;
    }

    html,
    body {
        display: grid;
        height: 100%;
        width: 100%;
        font-family: "Josefin Sans", sans-serif;
    }

    .wrapper {
        display: inline-flex;
        list-style: none;
    }

    .wrapper .icon {
        position: relative;
        background: #ffffff;
        border-radius: 50%;
        padding: 15px;
        margin: 10px;
        width: 50px;
        height: 50px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip {
        position: absolute;
        top: 0;
        font-size: 14px;
        background: #ffffff;
        color: #ffffff;
        padding: 5px 8px;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip::before {
        position: absolute;
        content: "";
        height: 8px;
        width: 8px;
        background: #ffffff;
        bottom: -3px;
        left: 50%;
        transform: translate(-50%) rotate(45deg);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .icon:hover .tooltip {
        top: -45px;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .wrapper .icon:hover span,
    .wrapper .icon:hover .tooltip {
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
    }

    .wrapper .facebook:hover,
    .wrapper .facebook:hover .tooltip,
    .wrapper .facebook:hover .tooltip::before {
        background: #1877F2;
        color: #ffffff;
    }

    .wrapper .twitter:hover,
    .wrapper .twitter:hover .tooltip,
    .wrapper .twitter:hover .tooltip::before {
        background: #1DA1F2;
        color: #ffffff;
    }

    .wrapper .instagram:hover,
    .wrapper .instagram:hover .tooltip,
    .wrapper .instagram:hover .tooltip::before {
        background: #E4405F;
        color: #ffffff;
    }

    .wrapper .github:hover,
    .wrapper .github:hover .tooltip,
    .wrapper .github:hover .tooltip::before {
        background: #333333;
        color: #ffffff;
    }

    .wrapper .youtube:hover,
    .wrapper .youtube:hover .tooltip,
    .wrapper .youtube:hover .tooltip::before {
        background: #CD201F;
        color: #ffffff;
    }

    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: tomato;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 75%;
        top: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }


    form.sign-up-form span {
        color: red;
    }
    </style>
</head>

<body>
    <?php
        include "account.php";
    ?>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="user.php" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <p style="color:red; font-size: 20px">
                        <?php echo $err?>
                    </p>
                    <div class="input-feild">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username1" placeholder="USERNAME">
                    </div>
                    <div class="input-feild">
                        <i class="fa fa-user"></i>
                        <input type="text" name="userid1" placeholder="USERID">
                    </div>
                    <div class="input-feild">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password1" id="pass" placeholder="PASSWORD">
                    </div>
                    <br>
                    <br>
                    <div class="input-field">
                        <input type="checkbox" onclick="check()">
                        Show Password
                    </div>
                    <br />
                    <div>
                        <input type="submit" name="sub1" value="Login" class="btn solid" style="float: left">
                        <a style="padding: 16px;" href="http://localhost/EPHARMACY/resend.php">Reset
                            Password</a>
                    </div>
                    <br>
                    <p class="social-text"> or Sign in With </p>
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </form>



                <form action="user.php" method="post" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>

                    <span><?php echo $error[0] ?></span>
                    <div class="input-feild">

                        <i class="fa fa-user"></i>

                        <input type="text" name="username2" placeholder="USERNAME">
                    </div>

                    <span><?php echo $error[2] ?></span>
                    <div class="input-feild">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="email" placeholder="EMAIL">
                    </div>

                    <span><?php echo $error[1] ?></span>
                    <div class="input-feild">
                        <i class="fa fa-user"></i>
                        <input type="number" name="mobile" placeholder="MOBILE NUM">
                    </div>

                    <span><?php echo $error[3] ?></span>
                    <div class="input-feild">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password2" placeholder="PASSWORD">
                    </div>


                    <span><?php echo $error[4] ?></span></span>
                    <div class="input-feild">
                        <i class="fa fa-lock"></i>
                        <input type="text" name="repassword" placeholder="RETYPE-PASSWORD">
                    </div>
                    <input type="submit" name="sub2" value="SIGN UP" class="btn solid">



                    <p class="social-text"> or Sign in With </p>
                    <ul class="wrapper" style="color: black">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Welcome to our website</p>
                    <button class="btn transparent" id="sign-up-btn">SIGN UP</button>
                </div>

                <img src="rocket.svg" class="image" alt="rocket">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Thank you for coming again</p>
                    <button class="btn transparent" id="sign-in-btn">SIGN IN</button>
                </div>

                <img src="doctor.svg" class="image" alt="doctor">
            </div>




        </div>

    </div>
    <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener('click', () => {
        container.classList.add("sign-up-mode");
    });
    sign_in_btn.addEventListener('click', () => {
        container.classList.remove("sign-up-mode");
    });

    function check() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        return false;
    }
    </script>

</body>

</html>