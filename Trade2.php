<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP  2023</title>
    <link rel="stylesheet" href="styleweb.css">
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
<head>
<body>
<nav class="wrapper">
        <div class="logo">
            <img class="DArah"src="DArah.jpeg" height="100px" id=logo style="padding-top:10px;" />
            <a href="http://localhost/TA/menu.php">Darah.Dingin</a>
        </div>

                <ul class="menu">
                    <li><a href="menu.php">Home</a></li>
                    <li><a href="#pesanan">Order</a></li>
                    <li><a href="#kontak">Contact</a></li>
                    <li><a href="Trade.php">Trade</a></li>
                </ul>
    </nav>
    <div class="container1">
          <div class="row">
            <br>
            <a style="color: white; font-family: vogue;">Input Gambar lah bro:</a>
            <br>
            <form action="Trade3.php" method="POST">
                <div class="row">
                    <div class="col-75">
                        <input type="file" name="file">
                    </div>
                </div>
                <br>
                <br>
                <br> 
            <a style="color: white; font-family: vogue;">Input Detail:</a>
            <div class="row">
                <br>
                <input type="text" name="text" placeholder="Detail yang jelas ya bro..">
              <br>
              <br>
              <a style="color: white; font-family: vogue;">Mau tuker sama apa?:</a>
            <div class="row">
                <br>
                <input type="text" name="text" placeholder="Kalo nawar ngotak ya bro..">
              <br>
              <br>
              <button type="submit">Submit</button>
              <button type="reset">Reset</button>
              <div class="row">
            </form>
          </div>
</body>
</html>