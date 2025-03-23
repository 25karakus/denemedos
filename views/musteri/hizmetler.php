<!DOCTYPE html>
<html>
<head>
    <title>Hizmetler</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Hizmetler</h1>
        <ul class="list-group">
            <?php foreach ($hizmetler as $hizmet): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($hizmet['ad']); ?> - <?php echo htmlspecialchars($hizmet['paket_adi']); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>