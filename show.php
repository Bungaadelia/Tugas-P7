<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        table {
            margin: 0 auto;
            width: 80%;
        }
        th, td {
            text-align: center;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Produk</h1>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect,"SELECT * FROM products");
                    $no = 1;

                    while($row = mysqli_fetch_assoc($products)) {
                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td><?=$row['price'];?></td>
                        <!-- Menampilkan gambar produk -->
                        <td><a href="<?=$row['image'];?>" target="_blank">Unduh</a></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Link ke Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>