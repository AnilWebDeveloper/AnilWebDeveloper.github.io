<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>login</title>
</head>

<body>
    <header>
        <nav class="nav-list">
            <div class="navigation">
                <div class="nav-center container d-flex">
                    <img src="anil-low-resolution-logo-black-on-transparent-background.png" alt="logo" height="50px" margin-left="-85px">

                    <ul class="nav-list d-flex">
                        <!-- search bar -->
                        <div class="box">
                            <input type="text" placeholder="Search...">
                            <a href="#">
                                <i class="fas fa-search" href="182-1821523_png-file-zoom-lens-icon-png-transzparent-png.png"></i>
                            </a>
                        </div>

                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="service.html" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="work.html" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#About" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">Login</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icon">
                <img src="img/facebook.png" height="40px" alt="">
                <img src="img/instagram.png" height="40px" alt="">
                <img src="img/twitter.png" height="40px" alt="">
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="user id" required>
                <input type="text" class="input-field" placeholder="Enter paasowrd " required>
                <input type="checkbox" class="check-box">
                <span>remember password</span>
                <button type="submit" class="submit-btn"> logn in</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="user id" required>
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="password" class="input-field" placeholder="Enter paasowrd " required>
                <input type="checkbox" class="check-box">
                <span> I agree to the term & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>

    </div>
    <!-- style -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        
        body {}
        
        .hero {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(ocean-3605547__480.jpg);
            background-position: center;
            background-size: cover;
            position: absolute;
        }
        
        .form-box {
            width: 380px;
            height: 480px;
            position: relative;
            margin: 6% auto;
            background: #fff;
            padding: 5px;
            overflow: hidden;
        }
        
        .button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;
        }
        
        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }
        
        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 30px;
            transition: .5s;
        }
        
        .social-icon {
            margin: 30px auto;
            text-align: center;
        }
        
        .social-icon img {
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }
        
        .input-group {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }
        
        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }
        
        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #ff105f #ffad06);
            border: 0;
            outline: none;
            border-radius: 30px;
        }
        
        .check-box {
            margin: 30px 10px 30px 0;
        }
        
        span {
            color: #777;
            font-size: 12px;
            bottom: 68px;
            position: absolute;
        }
        
        #login {
            color: #777;
            font-size: 12px;
            bottom: 68px;
            position: absolute;
        }
        
        #register {
            left: 450px;
        }
    </style>
    <!-- scrpit -->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>