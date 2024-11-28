<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Tambah Produk</h1>
    <div class="container">
        <a href="show.php" class="btn btn-secondary btn-back">Lihat Data Produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Produk:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
            </div>

            <div class="form-group">
                <label for="price">Harga Produk:</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
            </div>

            <div class="form-group">
                <label for="image">Gambar Produk:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>