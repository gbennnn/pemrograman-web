<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $nim = htmlspecialchars($_POST['nim']);
    $prodi = $_POST['prodi'];
    $jkel = $_POST['jkel'];

    // echo "<h1>Data Anda:</h1>";
    // echo "Nama Lengkap: $fname $lname <br>";
    // echo "NIM: $nim <br>";
    // echo "Prodi: $prodi <br>";
    // echo "Jenis Kelamin: $jkel <br>";

} else {
    echo "Data tidak ditemukan";

}

// var_dump($_SERVER);
// var_dump(value: $_POST);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Quiz</title>
</head>

<body>
    <h1>Selamat Datang di Dashboard Quiz</h1>
    <p>Hai <b><?= $_POST['fname'] ?></b>, siap memulai kuis hari ini?</p>
    <button type="submit" onclick="window.location.href='kuis.php'">Mulai kuis</button>
</body>

</html>