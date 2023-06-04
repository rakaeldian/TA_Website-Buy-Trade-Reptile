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
                    <li><a href="#pesanan">Pesanan</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <li><a href="Trade.php">Trade</a></li>
                </ul>
    </nav>
    <h1>
    <?php
        class JenisReptil{ //oop (class) Modul 5
            private $reptil;
            private $harga;
            
 
            public function __construct($reptil, $harga){ //method Modul 6
                $this->reptil = $reptil;
                $this->harga = $harga;
            }
    
            public function setreptil($reptil2){
                $this->reptil = $reptil2;
            }
        
            public function setharga($harga2){
                $this->harga = $harga2;
            }
        
            public function getreptil(){
                return $this->reptil;
            }
        
            public function getharga(){
                return $this->harga;
            }
        }
 
    $list = new JenisReptil("Ball Python", "Rp 1.300.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br>';
        
        $list->setreptil("Iguana Columbia");
        $list->setharga("Rp 550.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br>';
        
        $list->setreptil("Leopard Gecko");
        $list->setharga("Rp 160.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br>';
        
        $list->setreptil("Iguana Blue");
        $list->setharga("Rp 2.250.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br>';
        
        $list->setreptil("Chameleon");
        $list->setharga("Rp 2.000.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br>';
        
        $list->setreptil("Baby Croc");
        $list->setharga("Rp 700.000");
        echo '<span style="color: red;">' . $list->getreptil() . '</span> seharga <span style="color: green;">' . $list->getharga() . '</span><br><br>';
        ?>
    </h1>
</body>
</html>