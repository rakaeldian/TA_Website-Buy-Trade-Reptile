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
                    <li><a href="#pesanan">Order</a></li>
                    <li><a href="#kontak">Contact</a></li>
                    <li><a href="Trade.php">Trade</a></li>
                </ul>
    </nav>
        <?php 
            session_start(); //variabel modul 1
            $nama=$_POST['nama']; 
            $alamat=$_POST['alamat']; 
            $saldo=$_POST['saldo'];
            $pesanan=$_POST['pesanan']; 
            $jumlah=$_POST['jumlah'];

            if (empty($nama)) {
                header("location:order.php?errnama=<span style='color:yellow'>* Nama belum di isi"); //pengkondisian Modul 2
            }
            elseif (empty($alamat)) {
                header("location:order.php?erralamat= * Alamat belum di isi");
            }
            elseif (empty($saldo)) {
                header("location:order.php?errsaldo= * Saldo belum di isi");
            }
            elseif (empty($jumlah)) {
                header("location:order.php?errjumlah= * Jumlah belum di isi");
            }
            else {

            }
        ?>

        <table border="1">
            <tr>
                <th colspan="2">Bukti pembelian</th>
            </tr>
            <tr>
                <td>Saldo Awal</td>
                <td><?php echo $saldo; ?></td>
            </tr>
            <tr>
                <td>Pesanan</td>
                <td><?php echo $pesanan; ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Sisa Saldo</td>
                <td><?php
        
            //function mehod 4
            function hasil($saldo, $harga, $jumlah){
                return $saldo - $harga * $jumlah;
            }

            if($pesanan == 'Ball Python'){
                $harga = 1300000;
            }
            elseif($pesanan == 'Iguana Columbia'){
                $harga = 550000;
            }
            elseif($pesanan == 'Leopard Gecko'){
                $harga = 160000;
            }
            elseif($pesanan == 'Iguana Blue'){
                $harga = 2250000;
            }
            elseif($pesanan == 'Chameleon'){
                $harga = 2000000;
            }
            elseif($pesanan == 'Baby Croc'){
                $harga = 700000;
            }
            $hasil = hasil($saldo, $harga, $jumlah);
            echo $hasil;
        
        ?></td>
        </table> <br>
        <?php
            if($saldo<=0){
                echo '<span style="color: red;">Saldo kurang, pemesanan gagal.</span>';
                }
                elseif($jumlah<=0){
                    echo '<span style="color: red;">Maaf, Anda memasukkan jumlah yang salah.</span>';
                }
                elseif($hasil<0){
                    echo '<span style="color: red;">Maaf, uang Anda kurang, pemesanan gagal.</span>';
                }
                else{
                    $welcome = '<span style="color: green;">Terima kasih telah melakukan pemesanan, </span>';
                    echo '<span style="color: green;">' . $welcome . $nama . '.</span> ';
                    echo '<span style="color: yellow">Pesanan akan dikirim ke ' . $alamat . '.</span>';
                }
                ?></td>
        </tr>
    </table>
    <br><br>    

<form action="order.php">
    <input type="submit" name="Pesan" value="Pesan lagi">
</form>
</body>
</html>