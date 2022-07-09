<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourth Semester</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--data table css-->
    <link rel="stylesheet" href="assets/css/data-table.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
            session_start();

            if(isset($_SESSION['email'])){
                // echo "<script>location.href='first_semester.php'</script>";
                // echo "hello";
        
            }
            else{
                echo "<script>alert('Invalid user')</script>";
                echo "<script>location.href='index.php'</script>";
            }
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
                            <li><a href="home.php">Home</a></li>
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
                                        <li><a href="fourth_semester.php">Fourth Semester</a></li>
                                        <li><a href="fifth_semester.php">Fifth Semester</a></li>
                                        <li><a href="six_semester.php">Six Semester</a></li>
                                        <li><a href="seven_semester.php">Seven Semester</a></li>
                                        <li><a href="eight_semester.php">Eight Semester</a></li>
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
    <section class="fsingle-banner col-xl-12" style="background-image: url('./assets/img/first_semester/first_banner.jpg');">
        <div class="container">
            <div class="banner-content contnt2">
                <h3 style="color: #C3D136;">welcome to our amazing University and the beautiful class!!</h3>
                <h2>Fourth Semester</h2>
            </div>
        </div>
    </section>
    <!--banner area ends-->
    <!--courses offer starts-->
    <section class="table">
        <div class="container">
            <h3 class="table-title">REQUIRED COURSES</h3>
            <div class="cart-table">
                <table id="example" class="display nowrap order-column" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit</th>
                            <th>Section</th>
                            <th>Prerequisite</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="c-code">CSE 111</td>
                            <td>Introduction to Computing</td>
                            <td>2</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">CSE 112</td>
                            <td>Introduction to Computing Sessional</td>
                            <td>1.5</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">CSE 113</td>
                            <td>Discrete Mathematics</td>
                            <td>3</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">CSE 111</td>
                            <td>Engineering Drawing</td>
                            <td>1.5</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">MAT 111</td>
                            <td>Calculus and Differential
                                Equations</td>
                            <td>3</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">GED 111</td>
                            <td>Basic English</td>
                            <td>3</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="c-code">GED 215</td>
                            <td>Bangladesh Studies: History,

                                Society and Culture</td>
                            <td>3</td>
                            <td>A-D</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Subtotal = 17</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--courses offer ends-->
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
    <!--data table js-->
    <script src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>