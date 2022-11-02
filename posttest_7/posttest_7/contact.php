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
                <li><a style="color:white;" href="logout.php" role="button">Logout</a></li>
            </ul>
            <label id="dark-change"></label>
        </header>

        <div class="content" id="content">
            <div class="textBox">
                <h2><span>Contact Form</span></h2>
                
                  <form action="insert.php" method="post" enctype="multipart/form-data">
                        <input type="text" id="firstname" name="firstname" placeholder="First Name..."><br>
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name..."><br>
                        <input type="email" id="email" name="email" placeholder="Your Email..."><br>
                        <input type="text" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                        <select id="country" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select>
                        <input type="file" name="image" id="image"><br><br>
                        <!-- <input type="submit" name="submit"> -->
                        <button name="upload">Upload</button>
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