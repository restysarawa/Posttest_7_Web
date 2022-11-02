<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
  caret-color: red;
}

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  /* background: url("https://img.icons8.com/color/100/000000/twitter--v2.png"); */
  background: url(Bakery-Logo.png);
  background-attachment: fixed;
  background-position: center;
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
    </style>
</head>
<body>
    <div class="container">

        <!-- <form method="post" action="login_action.php">
            <div class="form-group">
                <label for="">username:</label>
                <input type="text" class="form-control" name="username" id="" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
            <label for="">password:</label>
                <input type="text" class="form-control" name="password" id="" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form> -->
        <form action="" method="post">
            <div class="container">
            <div class="brand-logo"></div>
            <!-- <div class="brand-title">TWITTER</div> -->
            <div class="inputs">
            <label>USERNAME</label>
            <input type="username"  name="username" placeholder="Your Username" />
            <label>FULLNAME</label>
            <input type="text"  name="name" placeholder="Your Name" />
            <label>EMAIL</label>
            <input type="email"  name="email" placeholder="Your Email" />
            <label>PASSWORD</label>
            <input type="password"  name="password" placeholder="Min 6 charaters long" />
            <button type="submit" name="register" value="Login">Register</button>
        </form>


        <?php
            include 'config.php';
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $fname = $_POST['name'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                mysqli_query($koneksi, "INSERT INTO `pengguna`(`username`, `nama`, `email`, `password`) VALUES ('$username','$fname','$email','$password')");
                header("location:login.php");

            }
        ?>
  </div>
  <!-- <a>MADE BY RESTY</a> -->
</div>
    </div>
</body>
</html>