
<!DOCTYPE html>
<html>

<head>
  <title>Data Sewa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h3 {
      text-align: center;
    }

    .container {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background-color: #f2f2f2;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: normal;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      cursor: pointer;
      border: 1px solid transparent;
      border-radius: 4px;
      color: #fff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Data Sewa</h3>

    <?php
    require_once 'koneksi.php';

    $query = "SELECT * FROM identitas";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
    ?>
      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Pilihan Motor</th>
            <th>Nomor Handphone</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['nik']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
              <td><?php echo $row['pilihan_motor']; ?></td>
              <td><?php echo $row['nomor_handphone']; ?></td>
              <td>
                <a href="edit.php?nik=<?php echo $row['nik']; ?>" class="btn btn-primary">Edit</a>
                <a href="hapus.php?nik=<?php echo $row['nik']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    <?php
    } else {
      echo "Tidak ada data yang tersedia.";
    }
    ?>

  </div>
</body>

</html>
