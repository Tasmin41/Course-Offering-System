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
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

<script src="assets/js/datatable.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/data-table.css"> -->
        <!-- bootsrap -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/datatable.min.css">
    <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">
        <div class="col-xl-9">
        <table id="example" class="display nowrap order-column" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>credit</th>
                    <th>Hour</th>
                    <th>prerequisite</th>
                    <th>checkbox</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "finalyear_project");
                    $query = "SELECT * FROM course";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '
                            <tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["course_code"].'</td>
                                <td>'.$row["course_title"].'</td>
                                <td>'.$row["credit"].'</td>
                                <td>'.$row["hour"].'</td>
                                <td>'.$row["prerequisite"].'</td>
                                <td></td>
                            </tr>';
                        }
                        ?>
            </tbody>
        </table>
        </div>
    </div>



<!-- 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/datatable.min.js"></script> -->
    <!-- <script src="assets/js/dataTables.min.js"></script> -->
    <!-- <script src="assets/js/magnific.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script> -->
    <script src="assets/js/script.js"></script>
</body>
</html>