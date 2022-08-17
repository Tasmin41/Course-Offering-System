
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syllabus One</title>
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
    <section class="header-area">
        <div class="container">
            <div class="header d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img src="assets/img/logo.png" alt=""></a> 
                    <span><h2>Admin Panel</h2><a href="#">www.lus.ac.bd</a></span>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                        <li><a href="#">Hello Admin | </a></li>
                        <li><a href="#" style="color: #C3D136;;">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="body-area">
        <div class="container">
            <div class="body-wrapper row">
                <div class="side-bar col-xl-3">
                    <ul class="section menu">
                        <li><a class="menuitem">Courses</a>
                             <ul class="submenu"> 
                                <li><a class="submenuitem">First Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="firstSemester_add.php">Add Course</a> </li>
                                        <li><a href="firstSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Second Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="secondSemester_add.php">Add Course</a> </li>
                                        <li><a href="secondSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Third Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="thirdSemester_add.php">Add Course</a> </li>
                                        <li><a href="thirdSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Fourth Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="fourthSemester_add.php">Add Course</a> </li>
                                        <li><a href="fourthSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Five Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="fifthSemester_add.php">Add Course</a> </li>
                                        <li><a href="fifthSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Six Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="sixSemester_add.php">Add Course</a> </li>
                                        <li><a href="sixSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Seven Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="sevenSemester_add.php">Add Course</a> </li>
                                        <li><a href="sevenSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Eight Semester</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="eightSemester_add.php">Add Course</a> </li>
                                        <li><a href="eightSemester_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                             </ul>
                         </li> 
                        <li><a class="menuitem">Assign Course Teacher</a></li> 
                        <li><a class="menuitem">Previous Question</a></li> 
                        <li><a class="menuitem">Notes</a></li>
                        <li><a class="menuitem">Advisor</a></li>
                     </ul>
                </div>
                <div class="body col-xl-9 p0">
                    <h2>Add New Courses</h2>
                    <?php include 'assets/class/courseDatabase.php';?>
                    <?php
			        //  insert product
                    $db=new courseDatabase();
			        if(isset($_POST['submit'])){
					$courseCode=$_POST['course_code'];
					$courseTitle=$_POST['course_title'];
					$credit=$_POST['credit'];
					$offered=$_POST['offer']; 
                    $semester=$_POST['semester']; 

                    $query="INSERT INTO syllabus(course_code,course_title,credit,offer,semester) 
                    VALUES('$courseCode','$courseTitle','$credit','$offered','$semester')";
                    $inserted_course=$db->courseInsert($query);
                    if($inserted_course){
                    echo "course insert success!";
                    }else{
                    echo "course not inserted!";
                }
					  
				  }
			?>	
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 input">
                    <label>course Code:</label><input type="text" name="course_code" />
                </div>
                <div class="mb-3 input">
                <label>course Title:</label><input type="text" name="course_title" />
                </div>
                <div class="mb-3 input">
                <label>Credit:</label><input type="text" name="credit" /><br>
                </div>
                <div class="mb-3 input">
                <label>Offered</label><input type="text" name="offer"/>
                </div>
                <div class="mb-3 input">
                <label>Semester</label><input type="text" name="semester" />
                </div>
                <div class="mb-3 submit-btn">
                <input type="submit" name="submit" Value="Save" />
                </div>
        
            </form>
               </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <p>&copy;Copyright <span>TFT.</span>All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>