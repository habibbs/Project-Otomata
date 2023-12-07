<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bayar.php" method="post">
        <h1>Penerapan FSA Pada Penjualan Mie Instan</h1>
        <table>
            <div class="a">
                <tr>
                    <td><img src="./img/aceh.jpg" alt="" height=250px></td>
                    <td><img src="./img/geprek.jpg" alt=""height=250px></td>
                    <td><img src="./img/rendang.jpg" alt=""height=250px></td>
                </tr>               
                <tr>
                    <td>
                        <h4>Indomie Rasa Aceh</h4>
                        <input type="radio" id="c1" value="aceh" name="mie">
                        <label for="c1">Rp. 15.000</label>
                    </td>
                    <td>
                        <h4>Indomie Rasa Ayam Geprek</h4>
                        <input type="radio" id="c2" value="geprek" name="mie">
                        <label for="c2">Rp. 10.000</label>
                    </td>
                    <td>
                        <h4>Indomie Rasa Rendang</h4>
                        <input type="radio" id="c3" value="rendang" name="mie">
                        <label for="c3">Rp. 12.000</label>
                    </td>
                </tr>
            </div>
        </table>
        <br>
        <h3>Tambahan Topping:</h3>
        <input type="checkbox" id="sosis" name="topping[]" value="sosis">
        <label for="topping_sosis">Sosis ( +Rp. 5.000 )</label><br>

        <input type="checkbox" id="telur_dadar" name="topping[]" value="telur_dadar">
        <label for="telur_dadar">Telur Dadar ( +Rp. 3.000 )</label><br>

        <input type="checkbox" id="telur_ceplok" name="topping[]" value="telur_ceplok">
        <label for="telur_ceplok">Telur Ceplok ( +Rp. 4.000 )</label><br>

        <input type="checkbox" id="ayam" name="topping[]" value="ayam">
        <label for="ayam">Ayam ( +Rp. 7.000 )</label><br>

        <hr>
        <br>
        <div class="bayar">
            <label for="jumlah">Jumlah Uang</label>
            <input type="text" name="jumlah" id="jumlah">
            <button type="submit" name="bayar" value="bayar">Bayar</button>

            <p><i>Kelompok Ngantuk-an</i></p>
        </div>
    </form>
</body>
</html>