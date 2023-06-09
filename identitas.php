<?php
include 'koneksi.php';

$koneksi = $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $pilihan_motor = $_POST['pilihan_motor'];
    $nomor_handphone = $_POST['nomor_handphone'];
    
    // Proses penyimpanan data ke dalam basis data
    $sql = "INSERT INTO identitas (nama, nik, alamat, pilihan_motor, nomor_handphone) 
            VALUES ('$nama', '$nik', '$alamat', '$pilihan_motor', '$nomor_handphone')";

    if (mysqli_query($koneksi, $sql)) {
        // Data berhasil disimpan
        header("Location: index.php");
        exit;
    } else {
        // Terjadi kesalahan saat menyimpan data
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
    <!-- Masukkan CSS dan file lainnya yang diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="identitas.php" method="POST">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nik">NIK :</label>
        <input type="text" id="nik" name="nik" required><br>

        <label for="alamat">Alamat :</label>
        <input type="text" id="alamat" name="alamat" required><br>

        <label for="pilihan_motor">Pilihan Motor:</label>
        <select id="pilihan_motor" name="pilihan_motor" required>
            <option value="Scoopy">Scoopy</option>
            <option value="Beat">Beat</option>
            <option value="Vario 125">Vario 125</option>
            <option value="Vixion">Vixion</option>
            <option value="NMAX">NMAX</option>
            <option value="Aerox">Aerox</option>
        </select><br>

        <label for="nomor_handphone">Nomor Handphone :</label>
        <input type="text" id="nomor_handphone" name="nomor_handphone" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
