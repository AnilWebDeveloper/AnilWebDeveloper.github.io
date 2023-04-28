<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo"><img src="anil-low-resolution-logo-black-on-transparent-background.png" alt="logo" height="45px">
        </div>
        <div class="box">
            <input type="text" placeholder="Search...">
            <a href="#">
                <i class="fas fa-search" href="182-1821523_png-file-zoom-lens-icon-png-transzparent-png.png"></i>
            </a>
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <!-- search bar -->


            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>

            <span class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
            </span>


        </nav>
        <label for="nav_check" class="hamburger">
                <div></div> 
                <div></div>
                <div></div>
                <div></div>
            </label>
    </header>

    <main>


        <div class="containeres">

            <span class="big-circle"></span>
            <div class="form">
                <!-- contact-info -->
                <div class="contact-info">
                    <h3 class="tittle"> Let's get in touch</h3>
                    <p class="text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro corrupti rerum atque veniam impedit commodi quas quod corporis fugiat, reprehenderit ullam iure sit repellendus in quis null
                    </p>
                    <div class="info">
                        <div class="information">
                            <img src="img/map.png" class="icon" alt="">
                            <p>338 cherrydrive unlossd skfsms </p>
                        </div>
                        <div class="info">
                            <div class="information">
                                <img src="img/mailing.png" class="icon" alt="">
                                <p>lorem@gmail.com</p>
                            </div>
                            <div class="info">
                                <div class="information">
                                    <img src="img/phone.png" class="icon" alt="">
                                    <p>123-456-789</p>
                                </div>
                            </div>
                            <div class="social-media">
                                <p> connect with us</p>
                                <div class="social-icon">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>

                            </div>

                            <!-- contact-form -->
                            <div class="contact-form">
                                <span class="circle one"></span>
                                <span class="circle two"></span>

                                <form onsubmit="sendEmail(); reset(); return(false);">
                                    <h3 class="title">Contact Us</h3>
                                    <div class="input-container ">
                                        <input type="text" name="name" class="input" placeholder="Name">
                                        <!-- <label for="">username</label> -->
                                        <!-- <span>Username</span> -->
                                    </div>
                                    <div class="input-container ">
                                        <input type="email" name="email" class="input" placeholder="Email">
                                        <!-- <label for="">email</label> -->
                                        <!-- <span>email</span> -->
                                    </div>
                                    <div class="input-container">
                                        <input type="tel" name="phone" class="input" placeholder="Phone">
                                        <!-- <label for="">phone</label> -->
                                        <!-- <span>phone</span> -->
                                    </div>
                                    <div class="input-container textarea ">
                                        <textarea name="message" class="input" placeholder="Message"></textarea>
                                        <!-- <label for="">message</label> -->
                                        <!-- <span>message</span> -->
                                    </div>
                                    <button type="submit" class="btn">send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

    <!-- style -->
    <style>
        .containeres {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            background-color: #fafafa;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form {
            width: 100%;
            max-width: 820px;
            height: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        
        .contact-form {
            background-color: #ABA38F;
            position: relative;
            left: 365px;
            height: 5000px;
            width: 435px;
            top: -378px;
        }
        
        .circle {
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20% #149279);
            position: absolute;
            background-color: #149279;
            filter: blur(5px);
        }
        
        .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }
        
        .circle.two {
            width: 80px;
            height: 80px;
            top: 10;
            right: 30px;
        }
        
        .contact-form::before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #ABA38F;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }
        
        form {
            padding: 3.3rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }
        
        .title {
            color: #fff;
            font-weight: 500;
            font-size: 2.4rem;
            line-height: 1;
            margin-bottom: 1.7rem;
        }
        
        .input-container {
            position: relative;
            margin: 1rem 0;
        }
        
        .input {
            width: 95%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 1.50rem;
            letter-spacing: 0.5px;
            border-radius: 25px;
            transition: 0.3s;
            height: 25px;
        }
        
        .input::placeholder {
            color: white;
            padding: 0.8rem 1.2rem;
        }
        
        textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 22px;
            resize: none;
            overflow: auto;
        }
        
        .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 1.4rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }
        
        .input-container.textarea label {
            top: 1rem;
            transform: translateY(0);
        }
        
        .btn {
            padding: 0.6rem 1.3rem;
            background-color: #fff;
            border: 2px solid #fafafa;
            font-size: 1.45rem;
            color: #ABA38F;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
        }
        
        .btn:hover {
            background-color: transparent;
            color: #fff;
        }
        
        .input-container span {
            position: absolute;
            top: 0;
            left: -40px;
            width: 130px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.8rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;
            /* background-color: green; */
        }
        
        .input-container span::before,
        .input-container span::after {
            content: "";
            position: absolute;
            width: 50%;
            height: 5px;
            opacity: 0;
            transition: 0.3s;
            background-color: #ABA38F;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .input-container span:before {
            left: 50%;
        }
        
        .input-container span:after {
            right: 50%;
        }
        
        .input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }
        
        .input-container.focus span::before,
        .input-container.focus span::before {
            width: 50%;
            opacity: 1;
        }
        
        .icon {
            width: 28px;
        }
        
        .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }
        
        .contact-info .tittle {
            color: #ABA38F;
        }
        
        .text {
            color: #333;
            margin: 1.5rem 0 2rem 0;
            width: 355px;
        }
        
        .information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .icon {
            width: 25px;
            margin-right: 0.7rem;
        }
        
        .soical-media {
            padding: 2rem 0 0 0;
        }
        
        .soical-media p {
            color: #333;
        }
        
        .soical-icon {
            display: flex;
            margin: 0.5rem;
        }
        
        .soical-icon a {
            width: 50px;
            height: 505px;
            border-radius: 42px;
            background: linear-gradient(45deg, #bc1a1a, #149279);
            color: #fff;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: .3s;
        }
        
        .soical-icon a:hover {
            transform: scale(1.05);
        }
        
        .contact-info::before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #1abc9c;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3s;
        }
        
        .big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #e6d6ac, #ABA38F);
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%);
        }
        
        .big-circle::after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #fafafa;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px);
        }
        
        @media(max-width: 850px) {
            .form {
                grid-template-columns: 1fr;
                display: grid;
                height: 1000px;
            }
            .contact-form {
                top: 120px;
                width: 800px;
                left: -22px;
            }
            .contact-info {
                width: 920px;
                left: 6px;
            }
            .contact-info::before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95);
            }
            .contact-form::before {
                top: -13px;
                left: initial;
                right: 70px;
            }
            .big-circle {
                bottom: 755;
                transform: scale(0.9) translate(-40%, 30%);
                right: 50%;
            }
            .text {
                margin: 1rem 01.5rem 0;
            }
            .soical-media {
                padding: 1.5rem 0 0 0;
            }
            .input {
                width: 405px;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }
            .contact-info::before {
                display: block grid;
            }
            .big-circle {
                display: none;
            }
            form,
            .contact-info {
                padding: 1.7rem 1.6rem;
            }
            .text,
            .information,
            .soical-media {
                font-size: 0.8rem;
            }
            .input {
                width: 250px;
                font-size: 1rem;
            }
        }
    </style>


    <script>
        const inputs = document.querySelectorAll(".input");

        function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
        }

        function blurfunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }

        }

        inputs.forEach((input) => {
            input.addEventListener("focus", focusfunc);
            input.addEventListener("blur", blurfunc);
        });
    </script>
    <scrpit src="https://smtpjs.com/v3/smtp.js"> </scrpit>
    <script>
        function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "ak1442394@gmail.com",
                Password: "sanilkush21",
                To: 'sanilkush33@gmail.com',
                From: document.getElementsByName("email").value,
                Subject: "New Contact form Enquiry",
                Body: "And this is the body"
            }).then(
                message => alert(message)
            );
        }
    </script>

</body>

</html>