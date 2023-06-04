<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP 2023</title>
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
                    <li><a href="menu.php#pesanan">Order</a></li>
                    <li><a href="menu.php#kontak">Contact</a></li>
                    <li><a href="Trade.php">Trade</a></li>
                </ul>
    </nav>
    <form action="hasil.php" method="post">  
                <label style="color:yellow;">Nama: </label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
                <?php
                    if(isset($_GET['errnama'])) {
                        $err1 = $_GET['errnama'];
                        echo $err1;
                    }
                ?>
                    <br><br>
                <label style="color:yellow;">Alamat: </label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                <?php
                    if(isset($_GET['erralamat'])) {
                        $err2 = $_GET['erralamat'];
                        echo $err2;
                    }
                ?>
                    <br><br>
                    <label style="color:yellow;">Total Saldo: </label>
                    <input type="number" name="saldo" id="saldo" placeholder="Masukkan Saldo">
                    <?php
                    if(isset($_GET['errsaldo'])) {
                        $err3 = $_GET['errsaldo'];
                        echo $err3;
                    }
                ?>
                    <br><br>
                    <label style="color:yellow;">Orderan: </label>
                        <Select name="pesanan" id="pesanan">
                        <option value='Ball Python'>Ball Python - Rp 1.300.000</option>
                        <option value='Iguana Columbia'>Iguana Columbia - Rp 550.000</option>
                        <option value='Leopard Gecko'>Leopard Gecko - Rp 160.000</option>
                        <option value='Iguana Blue'>Iguana Blue - Rp 2.250.000</option>
                        <option value='Chameleon'>Chameleon - Rp 2.000.000</option>
                        <option value='Baby Croc'>Baby Croc - Rp 700.000</option>
                        </Select><br><br>
                    <label style="color:yellow;">Jumlah: </label>
                    <input type="number" name="jumlah" placeholder="Masukkan Jumlah">
                        <?php 
                            if(isset($_GET["errjumlah"])) {
                                $err4 = $_GET["errjumlah"];
                                echo $err4;
                            }
                        ?>
                        <br><br>          
        <input style="color:white;background-color: Blue;"type="submit" name="Pesan" value="Pesan sekarang">
        <input style="color:white;background-color: Blue;"type="reset" value="Pesan ulang">
    </form>
</body>
</html>