<!DOCTYPE html>
<html>
<head>
    <title>Profil Bilgileri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Profil Bilgileri</h1>
        <form class="form-group" action="../controllers/musteri_controller.php?action=profil_guncelle" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token_olustur(); ?>">
            <label>Ad:</label>
            <input type="text" class="form-control" name="ad" value="<?php echo htmlspecialchars($musteri['ad']); ?>"><br>
            <label>Soyad:</label>
            <input type="text" class="form-control" name="soyad" value="<?php echo htmlspecialchars($musteri['soyad']); ?>"><br>
            <label>E-posta:</label>
            <input type="email" class="form-control" name="eposta" value="<?php echo htmlspecialchars($musteri['eposta']); ?>"><br>
            <input type="submit" class="btn btn-primary" value="Güncelle">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>