<?php

    if (isset($_POST['mie'])) {
        $mie = $_POST['mie'];
        $x = $_POST['jumlah'];

        // harga sesuai dengan pilihan mie
        switch ($mie) {
            case 'aceh':
                $harga_mie = 15000;
                break;
            case 'geprek':
                $harga_mie = 10000;
                break;
            case 'rendang':
                $harga_mie = 12000;
                break;
            default:
                $harga_mie = 0;
                break;
        }

        // topping yang dipilih
        $harga_topping = 0;
        if (isset($_POST['topping'])) {
            $topping = $_POST['topping'];
            foreach ($topping as $item) {
                switch ($item) {
                    case 'sosis':
                        $harga_topping += 5000;
                        break;
                    case 'telur_dadar':
                        $harga_topping += 3000;
                        break;
                    case 'telur_ceplok':
                        $harga_topping += 4000;
                        break;
                    case 'ayam':
                        $harga_topping += 7000;
                        break;
                }
            }
        }

        // total harga
        $total_harga = $harga_mie + $harga_topping;
        
        // kembalian
        $kembalian = $x - $total_harga;

        // Output
        echo " ===== DETAIL PESANAN =====";
        echo "<br>Indomie Rasa $mie : Rp. $harga_mie <br>";
        echo "Topping : Rp. $harga_topping <br>";
        echo " ========================== ";
        echo "<br>Total Harga : Rp. $total_harga <br>";
        echo "Jumlah uang anda : Rp. $x <br>";
        echo " ========================== <br>";
        echo "Kembalian : Rp. $kembalian";
    }

?>
