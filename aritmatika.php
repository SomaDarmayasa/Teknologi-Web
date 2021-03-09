<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>
    <h1>Deret Aritmatika</h1>
    </tittle>
    <link rel="stylesheet" href="./PHP/stylephp.css"> 
</head>
<body>
    <form action=" " method="POST"><br>
        <table style="width :35%"> 
            <tr>
                <td>Suku Pertama </td>
                <td>=</td>
                <td><input type="text" name="a1" placeholder="Masukkan Suku Pertama" > </td>
            </tr>
            <tr>
                <td>Suku Kedua </td>
                <td>=</td>
                <td><input type="text" name="a2" placeholder="Masukkan Suku Kedua"> </td>
            </tr>
            <tr>
                <td>Suku Ke-N</td>
                <td>=</td>
                <td><input type="text" name="a3" placeholder="Masukkan Suku Ke-N"> </td>
            </tr>
        </table><br>
        <input type="submit" name="Hitung" value="Hasil">
    </form>
    <?php

    if(isset($_POST['Hitung'])){
        $y1 = $_POST['a1'];
        $y2 = $_POST['a2'];
        $jumlah = $_POST['a3'];

        for($i=1; $i<=$jumlah; $i++){
                $hasil =  $y1 +(($i-1)*$y2);
                echo " ".$hasil;

        }

    }

    ?>
</body>
</html>