<?php
require_once 'koneksi.php';

$koneksi = $conn;

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    // Query untuk mengupdate data
    $query = "SELECT * FROM identitas WHERE nik = '$nik'";
    $result = mysqli_query($koneksi, $query);


    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $nik = $row['nik'];
        $alamat = $row['alamat'];
        $pilihan_motor = $row['pilihan_motor'];
        $nomor_handphone = $row['nomor_handphone'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $pilihan_motor = $_POST['pilihan_motor'];
    $nomor_handphone = $_POST['nomor_handphone'];
    
    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', pilihan_motor='$pilihan_motor', nomor_handphone='$nomor_handphone' WHERE nik='$nik'";

    if (mysqli_query($koneksi, $sql)) {
        
        header("Location: datasewa.php");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

$koneksi->close();
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/attachment_22860590.png" type="image/png">
    <title>Sewa Motor - Edit Data Sewa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(Images/wp.jpg) no-repeat scroll border-box bottom center;
            background-size: 1920px;
            padding: 20px;
        }

        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-sizing: border-box;
            margin-bottom: 20px;
            transition: border-bottom-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-bottom-color: steelblue;
            outline: none;
        }

        button[type="submit"] {
            background-color: steelblue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2d6ca2;
        }
    </style>
</head>

<body>
<form action="" method="POST">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required><br>

        <label for="nik">NIK :</label>
        <input type="text" id="nik" name="nik" value="<?php echo $nik; ?>" required><br>

        <label for="alamat">Alamat :</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required><br>

        <label for="pilihan_motor">Pilihan Motor:</label>
        <select id="pilihan_motor" name="pilihan_motor" required>
            <option value="Scoopy" <?php if ($pilihan_motor == 'Scoopy') echo 'selected'; ?>>Scoopy</option>
            <option value="Beat" <?php if ($pilihan_motor == 'Beat') echo 'selected'; ?>>Beat</option>
            <option value="Vario 125" <?php if ($pilihan_motor == 'Vario 125') echo 'selected'; ?>>Vario 125</option>
            <option value="Vixion" <?php if ($pilihan_motor == 'Vixion') echo 'selected'; ?>>Vixion</option>
            <option value="NMAX" <?php if ($pilihan_motor == 'NMAX') echo 'selected'; ?>>NMAX</option>
            <option value="Aerox" <?php if ($pilihan_motor == 'Aerox') echo 'selected'; ?>>Aerox</option>
        </select><br>

        <label for="nomor_handphone">Nomor Handphone :</label>
        <input type="text" id="nomor_handphone" name="nomor_handphone" value="<?php echo $nomor_handphone; ?>" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
