
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch 50 course List</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/data-table.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
p#val {
    color: #1B548D;
    padding: 15px;
    display: flex;
    justify-content: flex-end;
    font-weight: bold;
    max-width: 218px;
    border: 1px solid;
    margin: 10px 20px 20px auto;
}
table {
    caption-side: bottom;
    border-collapse: collapse;
    max-width: 95%;
    margin: 0 auto;
}
    </style>
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
                    <h2>Batch 50 course List</h2>
                    
                    <table class="data display datatable nowrap order-column" id="example " style="width: 100%;">
                    <p id="val"></p>
                    <thead>
                    <tr>
							<th>Serial</th>
							<th>Course Code</th>
							<th>Course Title</th>
							<th>Credit</th>
							<th>Offered</th>	
                            <th>Semester</th>					
							<th>Action</th>			
						</tr>
</thead>    			 				 
                            <tbody>
                            <?php
                           include 'config.php';
                           $allData = mysqli_query($conn,"SELECT * FROM `syllabus`");
                           while($row=mysqli_fetch_array($allData)){
                            
                            

				          ?> 
                            <tr class="odd gradeX" >
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['course_code'] ;?></td>
							<td><?php echo $row['course_title'];?></td>
							<td><?php echo $row['credit'];?></td>
							<td><?php  echo $row['offer'];?></td>
                            <td><?php echo $row['semester'];?></td>					
							<td><a href="edit50course.php?id=<?php echo $row['id'] ;?>">Edit</a></td>
						</tr>
                        <?php }?>
                            </tbody>
							    
				
					</table>
               </div>


            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <p>&copy;Copyright <span>TFT.</span>All Rights Reserved</p>
        </div>
    </footer>
	<script type="text/javascript">
var noOfrow = document.querySelector('table').rows.length;

var sumVal=0;
	sumVal =parseInt(sumVal); 

	for(var i = 1; i <noOfrow; i++)
	{
		if(document.querySelector('table').rows[i].cells[4].innerHTML == ""){
			continue;
		}
		else if(document.querySelector('table').rows[i].cells[4].innerHTML == "1" )
        {
			sumVal = sumVal + parseInt(document.querySelector('table').rows[i].cells[3].innerHTML);
		} 
        
       
	}
	
	document.getElementById("val").innerHTML = "Total Credits Offered = " + sumVal;
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>









