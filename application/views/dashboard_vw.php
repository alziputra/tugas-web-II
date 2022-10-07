<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <h1>Dashboard</h1>

    <div class="grid-container">
        <div class="grid-item">Minuman</div>
        <div class="grid-item">Pesanan</div>
        <div class="grid-item">Dibatalkan</div>
    </div>

    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>