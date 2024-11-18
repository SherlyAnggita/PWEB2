<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Program Studi</span>
  </div>
</nav>
<br>
<table class="table">
<thead class="table-light">
        <tr>
            <th scope="col">Prodi</th>
            <th scope="col">Fakultas / Jurusan</th>

        </tr>
        
        <?php
            foreach($data as $row){
            ?>
<tbody class="table-group-divider">
        <tr>
            <td><?php echo $row['program studi']?></td>
            <td><?php echo $row['Fakultas / Jurusan']?></td>
            <td><a href=""></a></td>
        </tr>
</tbody>
        <?php
            };
            ?>
    </table>
    <td><a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a></td>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>