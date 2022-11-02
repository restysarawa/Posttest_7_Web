<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                <table border=1>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>FOOD</th>
                            <th>IMAGE</th>
                            <th>DELETE</th>
                            <th>UPDATE</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'config.php';
                            $pic = mysqli_query($koneksi, "SELECT * FROM `toko_kue`");
                            while($row = mysqli_fetch_array($pic)){
                            echo "    
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[firstname]</td>
                                    <td>$row[lastname]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[food]</td>
                                    <td><img src='$row[image]' width='100px' height='100px'></td>
                                    <td><a href='delete.php?ID=$row[id] ' class='delete'>Delete</a></td>
                                    <td><a href='update.php?ID=$row[id] ' class='update'>Update</a></td>
                                </tr>
                                ";    
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

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