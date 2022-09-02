<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/datatable.min.css"/>
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
<link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
<link rel="stylesheet" href="assets/css/main.css">

<script src="assets/js/datatable.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/data-table.css"> -->
        <!-- bootsrap -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/datatable.min.css">
    <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" /> -->
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
a{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
table {
    caption-side: bottom;
    border-collapse: collapse;
    /* max-width: 95%; */
    margin: 0 auto;
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
    white-space: normal;
}
table.dataTable thead>tr>th.sorting:before, table.dataTable thead>tr>th.sorting_asc:before, table.dataTable thead>tr>th.sorting_desc:before, table.dataTable thead>tr>th.sorting_asc_disabled:before, table.dataTable thead>tr>th.sorting_desc_disabled:before, table.dataTable thead>tr>td.sorting:before, table.dataTable thead>tr>td.sorting_asc:before, table.dataTable thead>tr>td.sorting_desc:before, table.dataTable thead>tr>td.sorting_asc_disabled:before, table.dataTable thead>tr>td.sorting_desc_disabled:before {
    bottom: 50%;
    content: "";
}
table.dataTable thead>tr>th.sorting:after, table.dataTable thead>tr>th.sorting_asc:after, table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>th.sorting_asc_disabled:after, table.dataTable thead>tr>th.sorting_desc_disabled:after, table.dataTable thead>tr>td.sorting:after, table.dataTable thead>tr>td.sorting_asc:after, table.dataTable thead>tr>td.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc_disabled:after, table.dataTable thead>tr>td.sorting_desc_disabled:after {
    top: 50%;
    content: "";
}
body h2{
    display: flex;
    justify-content: space-between !important;
}
label {
	display: inline-block;
	margin-left: 10px;
	margin-bottom: 10px;
}
.dataTables_wrapper .dataTables_paginate {
	margin-bottom: 21px;
}
.btn-primary{
    background-color: #C3D136 !important;
    color: #fff !important;
    border: none;
}
.dataTables_wrapper .dataTables_filter {
	float: right;
	text-align: left;
	padding-right: 20px;
	margin-bottom: 10px;
}
    </style>
</head>
<body>

<section class="header-area">
        <div class="container">
            <div class="header d-flex justify-content-between">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="index.php"></a> 
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
                <!-- <div class="side-bar col-xl-3">
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
                </div> -->
                <div class="body col-xl-10 p0">
                    <h2>Advisor List <a href="index.php"><i class="fa-solid fa-angles-left"></i></a></h2>   
                    <table id="example" class="display nowrap order-column">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Batch</th>
                    <th>Section</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
            <?php
                           include 'config.php';
                           $allData = mysqli_query($conn,"SELECT * FROM `advisor`");
                           while($row=mysqli_fetch_array($allData)){
                               echo "<tr>    
                                   <td>$row[name]</td>
                                   <td>$row[designation]</td>
                                   <td>$row[email]</td>
                                   <td>$row[phone]</td>
                                   <td>$row[batch]</td>
                                   <td>$row[section]</td>
                                   <td><a class='btn btn-primary' href='advisorEdit.php?id=$row[id]'>Update</a></td>
                                   <td><a class='btn btn-primary' href='advisorDelete.php?id=$row[id]'>Delete</a></td>
                               </tr>";     
                           }
                           ?>
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
    <script src="assets/js/script.js"></script>
</body>
</html>