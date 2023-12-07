<?php
    if (isset($_POST['c1'])) {
        $aceh = $_POST['c1'];
        $aceh = 15000;
        $x = $_POST['jumlah']; // Ganti dari $_GET menjadi $_POST
        $harga1 = $x - 15000;
        echo "<br>Indomie Rasa Aceh : Rp. 15.000 <br>";
        echo "<br>";
        echo "Total Harga : Rp. 15.000";
        echo "<br>";
        echo "Jumlah uang anda : " . $x;
        echo "<br>";
        echo "Kembalian : " . $harga1;
    }
    if (isset($_POST['c2'])) {
        $geprek = $_POST['c2'];
        $geprek = 10000;
        $x = $_POST['jumlah'];
        $harga2 = $x - 10000;
        echo "<br>Indomie Rasa Ayam Geprek : Rp. 10.000 <br>";
        echo "<br>";
        echo "Total Harga : Rp. 10.000";
        echo "<br>";
        echo "Jumlah uang anda : " . $x;
        echo "<br>";
        echo "Kembalian : " . $harga2;
    }
    if (isset($_POST['c3'])) {
        $rendang = $_POST['c3'];
        $rendang = 8000;
        $x = $_POST['jumlah'];
        $harga3 = $x - 8000;
        echo "<br>Indomie Rasa Rendang : Rp. 8.000 <br>";
        echo "<br>";
        echo "Total Harga : Rp. 8.000";
        echo "<br>";
        echo "Jumlah uang anda : " . $x;
        echo "<br>";
        echo "Kembalian : " . $harga3;
    }
?>
