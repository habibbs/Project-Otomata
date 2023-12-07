<?php

    if (isset($_POST['bayar'])) {
        $selectedMie = isset($_POST['mie']) ? $_POST['mie'] : '';
        $jumlahUang = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;

        switch ($selectedMie) {
            case 'aceh':
                $hargaMie = 15000;
                break;
            case 'geprek':
                $hargaMie = 10000;
                break;
            case 'rendang':
                $hargaMie = 12000;
                break;
            default:
                $hargaMie = 0;
        }

        if ($hargaMie > 0 && $jumlahUang >= $hargaMie) {
            $kembalian = $jumlahUang - $hargaMie;

            echo "<br>Indomie Rasa $selectedMie : Rp. $hargaMie <br>";
            echo "<br>";
            echo "Total Harga : Rp. $hargaMie";
            echo "<br>";
            echo "Jumlah uang anda : $jumlahUang";
            echo "<br>";
            echo "Kembalian : $kembalian";
        } else {
            echo "Maaf, ada kesalahan dalam pembayaran.";
        }
    }

?>
