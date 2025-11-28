<?php
session_start();

// Cek login
if (!isset($_SESSION['user_id'])) {
    $status = "belum";
} else {
    $status = "sudah";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <?php if ($status === "sudah"): ?>
        <div class="card shadow">
            <div class="card-body text-center">
                <h3>Selamat datang, <?= $_SESSION['nama'] ?></h3>
                <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            Anda belum login
        </div>
    <?php endif; ?>

</div>

</body>
</html>
