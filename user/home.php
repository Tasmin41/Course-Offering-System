<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LU Course Offering System</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
    // $email ="admin@gmail.com";
    // $password="123";

    session_start();

    if(isset($_SESSION['email'])){
        echo "<a href='logout.php'></a>";

    }
    else{
        echo "<script>alert('Invalid user')</script>";
        echo "<script>location.href='index.php'</script>";
    }
    // else{
    //     if($_POST['email'] == $email && $_POST['pass'] == $password){
    //         $_SESSION['email'] = $email;
    //         echo "<script>location.href='home.php'</script>";
    
    //     }
       
    // }
    ?> 
    <!--Header area-->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-wrap">
                    <ul class="list-left">
                        <li><a href="#"><i class="fa-solid fa-envelope-open"></i> lus.ac.bd</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i> +1-3435-2356-222</a></li>
                    </ul>
                    <ul class="list-right">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="headBottom-wrap">
                    <div class="logo">
                        <img src="assets/img/logo.png" alt="logo">
                        <a href="#"><span>Leading</span> University</a>
                     </div>
                    <div class="navigation">
                        <ul class="menu-main">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Faculty Member <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="#">Department Of CSE</a></li>
                                        <li><a href="#">Department Of EEE</a></li>
                                        <li><a href="#">Department of English</a></li>
                                        <li><a href="#">Department Of BBA</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Courses <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="first_semester.php">First Semester</a></li>
                                        <li><a href="second_semester.php">Second Semester</a></li>
                                        <li><a href="third_semester.php">Third Semester</a></li>
                                        <li><a href="#">Fourth Semester</a></li>
                                        <li><a href="#">Fifth Semester</a></li>
                                        <li><a href="#">Six Semester</a></li>
                                        <li><a href="#">Seven Semester</a></li>
                                        <li><a href="#">Eight Semester</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Notes</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="logout.php" class="btn logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--banner area starts-->
    <section class="banner-area owl-carousel">
        <div class="single-banner col-xl-12" style="background-image: url('./assets/img/banner1.jpg');">
            <div class="container">
                <div class="banner-content">
                    <h3>The Best University Of the Sylhet</h3>
                    <h2>Leading University</h2>
                    <a href="#">Take Admission</a>
                </div>
            </div>
        </div> 
         <div class="single-banner col-xl-12" style="background-image: url('./assets/img/banner2.jpg');"> 
            <div class="container">
                <div class="banner-content2">
                    <h3>Be Apart Of our History</h3>
                    <h2>Computer Science & Engineering</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ullam cum consequatur qui rem, beatae repellendus repudiandae dolorem ipsa blanditiis vel est placeat velit tempora sit, harum illo itaque facilis.</p>
                    <span></span>
                </div>
            </div>
        </div> 
        <div class="single-banner col-xl-12" style="background-image: url('./assets/img/banner3.jpg');">
            <div class="container">
                <div class="banner-content3">
                    <h3>Get Good at Programming</h3>
                    <h2>Leading University Computer Club(LUCC)</h2>
                   <a href="#">Join The Team</a>
                    
                </div>
            </div>
        </div>
    </section>
    <!--banner area ends-->
    <!--card area start -->
    <section class="card-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 flip-card">
                    <div class="single-card" style="background-color: #619CF5;"">
                        <div class="front">
                            <i class="fa-solid fa-user"></i>
                            <h3>Quality Teachers</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                        </div>
                        <div class="Back">
                            <h3>Quality Teachers</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                            <a href="#">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 flip-card">
                    <div class="single-card" style="background-color: #C3D136">
                        <div class="front">
                            <i class="fa-solid fa-book"></i>
                            <h3>Best Curriculam</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                        </div>
                        <div class="Back">
                            <h3>Best Curriculam</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                            <a href="#">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 flip-card">
                    <div class="single-card"  style="background-color: #24C1B5;"">
                        <div class="front">
                            <i class="fa-solid fa-globe"></i>
                            <h3>Global Recognization</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                        </div>
                        <div class="Back">
                            <h3>Global Recognization</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum repellat quas voluptas consectetur, inventore officia velit, saepe accusamus ut totam, quia hic temporibus neque corporis architecto. Placeat, corrupti obcaecati.</p>
                            <a href="#">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--about area starts-->
        <div class="about-area" style="background-image:url('./assets/img/aboutbg.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-left">
                            <a href="#">  <img src="assets/img/logo.png" alt="logo">Leading University </a>
                            <h3>About Our University</h3>              
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-right">
                            <p>We are one of the largest, most diverse universities in the Sylhet with over 30000 students in Bangladesh, and a further 30,000 studying across 180 countries for Leading University.</p>
                            <p>Leading University was established by John Smith in 2000 for the public benefit and it is recognized globally. Throughout our great history, Leading has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                            <a class="btn" href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card ends-->
    </section>
    <!--video-->
    <section class="magnific-video" style="background-image: url('./assets/img/popup.jpg');">
        <div class="container">
            <div class="video-wrap">
                <div class="video-btn">
                    <a class="popup-video" href="https://www.youtube.com/watch?v=0qHWub21h5c"><img src="assets/img/icon-play.png" alt="playVideo" /></a>
                </div>
                <h2>Video Tour in Leading University</h2>
                <p>Take a tour in Kingster and you will find the best university in the state. The video will take you to every places in this university.</p>
            </div>
        </div>
    </section>
    <!--video area ends-->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="footer-logo">
                            <a href="#">  <img src="assets/img/logo.png" alt="logo"></a>
                            <ul class="top">
                                <li>Box 35300</li>
                                <li>1810 Campus Way NE</li>
                                <li>Bothell, WA 98011-8246</li>
                            </ul>
                            <ul class="bottom">
                                <li><a href="#">+1-2534-4456-345</a></li>
                                <li><a href="#">admin@kingsteruni.edu</a></li>
                            </ul>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Our Campus</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Acedemic</a></li>
                                <li><a href="#">Planning & Administration</a></li>
                                <li><a href="#">Campus Safety</a></li>
                                <li><a href="#">Office of the Chancellor</a></li>
                                <li><a href="#">Facility Services</a></li>
                                <li><a href="#">Human Resources</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Campus Life</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Financial Aid</a></li>
                                <li><a href="#">Food Services</a></li>
                                <li><a href="#">Housing</a></li>
                                <li><a href="#">Information Technologies</a></li>
                                <li><a href="#">Student Life</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Academics</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Canvas</a></li>
                                <li><a href="#">Catalyst</a></li>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Time Schedule</a></li>
                                <li><a href="#">Apply For Admissions</a></li>
                                <li><a href="#">Pay My Tuition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-wrapper">
                    <div class="row">
                        <div class="col-xl-6">
                            <p>Copyright All Right Reserved 2022, Team TFT</p>
                        </div>
                        <div class="col-xl-6">
                            <ul class="footer-icon">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--about area ends-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>