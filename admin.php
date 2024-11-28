<?php 

session_start();
if($_SESSION['role'] != 'admin') {
    session_destroy();
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Admin Dashboard</h1>
            </div>
            <div class="card-body">
                <h3 class="text-center">Selamat datang administrator: <span class="text-success"> <?php echo $_SESSION['name'];?> </span></h3>
                <div class="d-flex justify-content-center mt-4">
                    <a href="./backend/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>