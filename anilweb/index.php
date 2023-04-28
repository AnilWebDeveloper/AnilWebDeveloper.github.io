<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Glidejs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.css">
    <link rel="stylesheet" heref="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- icons -->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />




    <title>Anil WebDelopment</title>

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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="contact.php">Contact</a></li>
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
        <!-- hero -->
        <section class="first" id="text-formate">
            <div class="container-text">
                <span class="text first-text"> Welcome to Anil web developer this  is  a website </span>
                <span class="text sec-text">freelancer</span>
            </div>

            <div class="image-formation" id="image-formate">
                <img src="img/Screenshot_2023-04-13_190810-removebg-preview.png" alt="">
            </div>
            <a href="service.php"><button type="submit" class="btns">service</button></a>
        </section>

        <section class="second">
            <div class="slider">
                <div class="slides">
                    <!-- radio buttons -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!-- slide images -->
                    <div class="slide first">
                        <img src="img/polotno-11.png">
                    </div>
                    <div class="slide">
                        <img src="img/polotno-7.png">
                    </div>
                    <div class="slide">
                        <img src="img/polotno-2.png">
                    </div>
                    <div class="slide">
                        <img src="img/polotno-4.png">
                    </div>
                    <!-- automatic navigation -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>

        </section>

        <!-- <section class="third">
            <div class="helled">
                <h1> business</h1>
            </div>
            <div class="helle">
                <img class="pimg" src="img/40-401570_business-growth-chart-png-transparent-images-growth-chart-png.jpeg" height="45px" alt="">
                <p class="ptext">This website has only one dream to share about small business online so that it can make a big company of its own.</p>
            </div>
            <div class="helle">
                <img class="pimg" src="img/images.jpeg" height="45px" alt="">
                <p class="ptext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, nisi tempora! Debitis iste, obcaecati optio aspernatur eum molestias! Nihil minima doloribus quo suscipit harum accusamus aperiam sint officia consectetur cupiditate!</p>
            </div>
            <div class="helle">
                <img class="pimg" src="img/445-4457967_business-growth-chart-png-transparent-images-business-growth-chart-icon.jpeg" height="45px" alt="">
                <p class="ptext">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo a animi labore, natus eos, laborum quis officiis nesciunt sint tempora ex soluta rerum molestiae est itaque incidunt accusantium corrupti tenetur!</p>
            </div>
        </section> -->
        <!-- service -->

        <!-- contact  -->
        <div class="contacted">
            <i class="bxl-instagram" href=""><bxl-instagram class="svg"></bxl-instagram></i>
        </div>
    </main>
    <!-- footer -->
    <footer class="footer">
        <div class="conainers">
            <div class="row">
                <div class="footer-col">
                    <h4>comany</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our serivces</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affilate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">orderstatus</a> </li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li>
                            <a href="#">watch</a>
                        </li>
                        <li>
                            <a href="#">bag</a>
                        </li>
                        <li>
                            <a href="#">shoes</a>
                        </li>
                        <li>
                            <a href="#">dress</a>
                        </li>
                    </ul>


                </div>
                <div class="footer-col">
                    <h4>follow is</h4>
                    <div class="social-links">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-github"></i></a>

                    </div>

                </div>
            </div>
        </div>
    </footer>


    <!-- Glidejs -->
    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>


</body>

</html>