<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>
    <h1>Deret Fibonacci</h1>
    </tittle>
    <link rel="stylesheet"href="./PHP/stylephp.css">
</head>
<body>
    <form action=" " method="POST" ><br>   <!-- membuat form -->
        <table style="width :35%">  <!-- membuat tabel -->
            <tr> <!-- membuat tabelbaris -->
                <td>Angka Pertama </td><!-- membuat isi tabelkolom -->
                <td>=</td>
                <td><input type="text" name="angk1" placeholder="Masukkan Angka Pertama"> </td>
            </tr>
            <tr>
                <td>Angka Kedua </td>
                <td>=</td>
                <td><input type="text" name="angk2" placeholder="Masukkan Angka Kedua"> </td>
            </tr>
            <tr>
                <td>Jumlah Deret yang diinginkan</td>
                <td>=</td>
                <td><input type="text" name="deret" placeholder="Masukkan Jumlah Deret"> </td>
            </tr>
        </table><br>
        <input type="submit" name="Hitung" value="Hitung">
    </form>
    <?php
        if(isset($_POST['Hitung'])){
        $x1 = $_POST['angk1'];
        $x2 = $_POST['angk2'];
        $deret = $_POST['deret'];

        echo '<br>';
        echo "Outputnya adalah : $x1 $x2"; // hasil tampilan 2 angka awal

        for($i = 1; $i <= $deret; $i++){
            $hasil = $x2 + $x1;
            echo "$hasil";
            $x1 = $x2;                      //mereset angka awal dan seterusnyaa
            $x2 = $hasil;                   //angka awal menjadi angka

        }

    }

    ?>


</body>
</html>
