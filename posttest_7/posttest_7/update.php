<?php
    session_start();
    if(!isset($_SESSION["username"])){
        // echo "Anda harus login dulu <br><a href='login.php'>Klik Disini</a>";
        header("Location:login.php");
        exit;
    }

    
    
    $id_user=$_SESSION["id_user"];
    $username=$_SESSION["username"];
    $nama=$_SESSION["nama"];
    $email=$_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
    <?php
        include 'config.php';
        $ID = $_GET['ID'];
        $Record = mysqli_query($koneksi, "SELECT * FROM toko_kue WHERE id = $ID");
        $data = mysqli_fetch_array($Record);
    ?>
    <section>
        <div class="circle" id="circle">

        </div>
        <header>

            <a href="#"><img src="Bakery-Logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <label id="dark-change"></label>
        </header>

        <div class="content" id="content">
            <div class="textBox">
                <h2><span>Contact Form</span></h2>
                
                  <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" value="<?php echo $data['firstname'] ?>" id="firstname" name="firstname" placeholder="First Name..."><br>
                        <input type="text" value="<?php echo $data['lastname'] ?>" id="lastname" name="lastname" placeholder="Last Name..."><br>
                        <input type="email" value="<?php echo $data['email'] ?>" id="email" name="email" placeholder="Your Email..."><br>
                        <input type="text" value="<?php echo $data['phone'] ?>" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                        <select id="country" value="<?php echo $data['food'] ?>" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select>
                        <td>

                        </td>
                        <input type="file" value="<?php echo $data['image'] ?>" name="image" id="image"><br>
                        <img src="<?php echo $data['image'] ?>" alt="" width='100px' height='100px'>
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="upload">Update</button>
                  </form>
            </div>
            
            

            <div class="imgBox">
                <img src="img3.png" class="waffle">
            </div>
        </div>
        
        <ul class="sci" >
            <li><a href="#"><img src="facebook.png" onclick="changeBackground('#000000')" alt=""></a></li>
            <li><a href="#"><img src="twitter.png" onclick="changeBackground('#ffffff')" alt=""></a></li>
            <li><a href="#"><img src="instagram.png" alt=""></a></li>
        </ul>
    </section>
    <?php
        include 'config.php';
        if(isset($_POST['upload'])){
            $FNAME = $_POST['firstname'];
            $LNAME = $_POST['lastname'];
            $EMAIL = $_POST['email'];
            $PHONE = $_POST['phone'];
            $FOOD = $_POST['country'];
            $IMAGE = $_FILES['image'];
            print_r($_FILES['image']);
    
            $img_loc = $_FILES['image']['tmp_name'];
            $img_name = $_FILES['image']['name'];
            $img_des = "uploadImage/".$img_name;
            move_uploaded_file($img_loc, 'uploadImage/'.$img_name);

            mysqli_query($koneksi, "UPDATE `toko_kue` SET `firstname`='$FNAME',`lastname`='$LNAME',`email`='$EMAIL',`phone`='$PHONE',`food`='$FOOD',`image`='$img_des' WHERE id = $ID");
            header("location:read.php");
        }
    ?>

    <script>
        // manipulasi DOM 
        document.getElementById("content").style.position = "relative";
        document.getElementById("circle").style.width = "100%";

        //addEventListener on DarkMode
        var content = document.getElementsByTagName('body')[0];
        var darkMode = document.getElementById('dark-change');
        darkMode.addEventListener('click', function(){
            darkMode.classList.toggle('active');
            content.classList.toggle('night');
            
            //Pop Up Box
            alert("Mode Changed");
        });
    </script>
</body>
</html>