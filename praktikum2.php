<?php
class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    // tambahan
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";
if (isset($_POST['hitung'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $sisi = $_POST['sisi'];

    $hasil .= "Tambah: " . Matematika::tambah($a, $b) . "<br>";
    $hasil .= "Kurang: " . Matematika::kurang($a, $b) . "<br>";
    $hasil .= "Kali: " . Matematika::kali($a, $b) . "<br>";
    $hasil .= "Bagi: " . Matematika::bagi($a, $b) . "<br>";
    $hasil .= "Luas Persegi: " . Matematika::luasPersegi($sisi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>After Praktikum 2</title>
</head>
<body>
    <h2>Input Perhitungan</h2>
    <form method="post">
        Nilai A: <input type="number" name="a" required><br><br>
        Nilai B: <input type="number" name="b" required><br><br>
        Sisi: <input type="number" name="sisi" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <h3>Hasil:</h3>
    <?php echo $hasil; ?>
</body>
</html>