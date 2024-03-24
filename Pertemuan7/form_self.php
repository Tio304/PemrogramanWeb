<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input PHp</title>
</head>
<body>
<h2>Form Inpput PHP</h2>
<?php
$namaErr ="";
$nama = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["nama"])){
        $namaErr = "Field Nama Harus Terisi!!";
    } else {
        $nama = $_POST["nama"];
        echo "Data Berhasil Disimpan";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
    <span class="eror"><?php echo $namaErr; ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>