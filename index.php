<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Angka Pertama" required>
        <select name="operator">
            <option value="" disabled selected>Pilih Operasi</option>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="number" name="num2" placeholder="Angka Kedua">

        <br>
        <br>
        <button type="submit" name="submit" value="submit" required>Hitung</button>
    </form>
<?php 
    if (isset($_POST['submit'])) {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case 'tambah':
                $result = $num1 + $num2;
                break;
            case 'kurang':
                $result = $num1 - $num2;
                break;
            case 'kali':
                $result = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Tidak bisa membagi dengan 0";
                }
                break;
            default:
                $result = "Error: operator tidak valid";
                break;
        }
        echo "<p>Hasilnya adalah: $result</p>";
    }
?>
</body>
</html>