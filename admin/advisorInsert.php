<?php
    include 'config.php';
    // $image = $_FILES['image'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $batch = $_POST['batch'];
    $section = $_POST['section'];



    //  $imageLocation = $_FILES['image']['tmp_name'];
    //  $imageName = $_FILES['image']['name'];
    //  $image_des = "image".$imageName;
    //  move_uploaded_file($imageLocation,$image_des);

     $insertQuery = "INSERT INTO `advisor`(`name`,`designation`,`email`,`phone`,`batch`,`section`) VALUES ('$name','$designation','$email','$phone','$batch','$section')";

     if(mysqli_query($conn,$insertQuery)){
      //   echo "<script>alert('Inserted!!! !!')</script>";
        echo "<script>location.href='advisor_list.php'</script>";
     }