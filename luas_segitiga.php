<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
</head>
<body>
    <h1>Hitung Luas Segitiga</h1>
    <form action="luas_segitiga.php" method="POST">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:<input type="number" name="alas"></td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td>:<input type="number" name="tinggi"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
<?php 
if(isset($_POST['alas']) && isset($_POST['tinggi']) ){ //validasi apakah ada input nilai alas dan tinggi dari user
    $alas = (int) $_POST["alas"]; //Ambil input nilai alas dan konversi sebagai integer
    $tinggi = (int) $_POST["tinggi"]; //Ambil input nilai tinggi dan konversi sebagai integer
    $luas = 0.5 * $alas * $tinggi; //Hitung nilai luas segitiga dengan rumus 0.5 * alas * tinggi
    echo "Luas segitiga adalah: ". $luas; //tampilkan hasil perhitungan
}
?>
</body>
</html>