<?php
    // include db connection 
    include 'config.php';

    if(isset($_POST['upload'])){
        $FNAME = $_POST['firstname'];
        $LNAME = $_POST['lastname'];
        $EMAIL = $_POST['email'];
        $PHONE = $_POST['phone'];
        $FOOD = $_POST['country'];
        $IMAGE = $_FILES['image'];
        // print_r($_FILES['image']);

        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des = "uploadImage/".$img_name;
        move_uploaded_file($img_loc, 'uploadImage/'.$img_name); 


        // insert_data
        mysqli_query($koneksi, "INSERT INTO `toko_kue`(`firstname`, `lastname`, `email`, `phone`, `food`, `image`) VALUES ('$FNAME','$LNAME','$EMAIL','$PHONE','$FOOD','$img_des')");
        header("location:read.php");
    }
?>