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
    <title>Home</title>
</head>
<body>
    <section>
        <div class="circle" id="circle">

        </div>
        <header>

            <a href="#"><img src="Bakery-Logo.png" class="logo" alt=""></a>
            <ul>
                <li><a style="color:white;" href="index.php">Home</a></li>
                <li><a style="color:white;" href="#">Menu</a></li>
                <li><a style="color:white;" href="#">What's New</a></li>
                <li><a style="color:white;" href="contact.php">Contact</a></li>
                <li><a style="color:white;" href="logout.php" role="button">Logout</a></li>
            </ul>
            <label id="dark-change"></label>
        </header>

        <div class="content" id="content">
            <div class="textBox">
            <h2>Belanja Online aman dan nyaman<br>di <span>Golden Cake & Bakery</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, magnam expedita! Excepturi tempore dicta porro dignissimos voluptatem corrupti soluta cupiditate! Quae provident delectus illum ut dolorem deleniti cupiditate perferendis reprehenderit.</p>
                <a href="">More Info</a>
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