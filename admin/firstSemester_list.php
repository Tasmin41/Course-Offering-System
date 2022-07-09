
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                    <h2>Add New Course</h2>
                    <?php include 'assets/class/courseDatabase.php';?>
                    <table class="data display datatable nowrap order-column" id="example" style="width: 100%;">
					<thead>
						<tr>
							<th>Serial</th>
							<th>Course Code</th>
							<th>Course Title</th>
							<th>Credit</th>
							<th>Prerequisite</th>						
							<th>Action</th>			
						</tr>
					</thead>
					<!-- delete start-->
					<?php 
					  $db = new courseDatabase();
					   if(isset($_GET['delid'])){
						    $delid = $_GET['delid'];
							$delquery="delete from first_semester where id= $delid";
							$delete= $db->courseDelete($delquery) ;
							if($delete){
								 echo "<span class='success'>Data deleted Successfully.
				               </span>";
							}else{
								echo "not delete";
							}
					   }	
					
					?>
					<!-- Select course start-->
                	  <?php
                        	$db=new courseDatabase(); 
                            $query="SELECT * FROM first_semester ORDER BY ID DESC";
                             $courseread=$db->courseSelect($query);
                             if($courseread){
                                 $i=0;
                                 while($Courseresult=$courseread->fetch_assoc()){
                                 $i++;		
				          ?> 
                   
                   
                        			 				 
						<tr class="odd gradeX" >
							<td><?php echo $i;?></td>
							<td><?php echo $Courseresult['course_code'] ;?></td>
							<td><?php echo $Courseresult['course_title'];?></td>
							<td><?php echo $Courseresult['credit'];?></td>
							<td><?php echo $Courseresult['prerequisite'];?></td>					
							<td><a href="editcourse.php?editCourseid=<?php echo $Courseresult['id'] ;?>">Edit</a> || <a onclick="return confirm('are you sure to delete')" href="?delid=<?php echo $Courseresult['id'] ;?>">Delete</a></td>
						</tr>
							   <?php }}?>
   
	
					 
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
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
	<script src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>









