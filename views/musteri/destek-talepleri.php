<!DOCTYPE html>
<html>
<head>
    <title>Destek Talepleri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Destek Talepleri</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Talep No</th>
                    <th>Konu</th>
                    <th>Durum</th>
                    <th>Tarih</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($talepler as $talep): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($talep['talep_no']); ?></td>
                        <td><?php echo htmlspecialchars($talep['konu']); ?></td>
                        <td><?php echo htmlspecialchars($talep['durum']); ?></td>
                        <td><?php echo htmlspecialchars($talep['tarih']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Yeni Talep Oluştur</h2>
        <form class="form-group" action="../controllers/musteri_controller.php?action=talep_olustur" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token_olustur(); ?>">
            <label>Konu:</label>
            <input type="text" class="form-control" name="konu"><br>
            <label>Mesaj:</label>
            <textarea class="form-control" name="mesaj"></textarea><br>
            <input type="submit" class="btn btn-primary" value="Oluştur">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>