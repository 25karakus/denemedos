<?php
// ... (önceki kodlar)

$musteri_model = new MusteriModel();
$musteri = $musteri_model->musteri_getir($musteri_id);

// Hizmetleri getir
$hizmetler = $musteri_model->hizmetleri_getir($musteri_id);

// Faturaları getir
$faturalar = $musteri_model->faturalari_getir($musteri_id);

// Talepleri getir
$talepler = $musteri_model->talepleri_getir($musteri_id);

// Alan adlarını getir
$alan_adlari = $musteri_model->alan_adlari_getir($musteri_id);

// Görünüm dosyalarını dahil et
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'profil':
            include '../views/musteri/profil.php';
            break;
        case 'sifre':
            include '../views/musteri/sifre-guncelle.php';
            break;
        case 'hizmetler':
            include '../views/musteri/hizmetler.php';
            break;
        case 'faturalar':
            include '../views/musteri/faturalar.php';
            break;
        case 'talepler':
            include '../views/musteri/destek-talepleri.php';
            break;
        case 'alan-adlari':
            include '../views/musteri/alan-adlari.php';
            break;
        default:
            include '../views/musteri/profil.php';
            break;
    }
} else {
    include '../views/musteri/profil.php';
}
?>