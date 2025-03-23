<?php
require_once '../inc/baglanti.php';

class MusteriModel {
    public function musteri_getir($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM musteriler WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function profil_guncelle($id, $ad, $soyad, $eposta) {
        global $db;
        $stmt = $db->prepare("UPDATE musteriler SET ad = ?, soyad = ?, eposta = ? WHERE id = ?");
        $stmt->execute([$ad, $soyad, $eposta, $id]);
    }

    public function sifre_guncelle($id, $eski_sifre, $yeni_sifre) {
        global $db;
        $stmt = $db->prepare("SELECT sifre FROM musteriler WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($eski_sifre, $result['sifre'])) {
            $yeni_sifre_hash = password_hash($yeni_sifre, PASSWORD_DEFAULT);
            $stmt = $db->prepare("UPDATE musteriler SET sifre = ? WHERE id = ?");
            $stmt->execute([$yeni_sifre_hash, $id]);
        } else {
            // Eski şifre hatalı
        }
    }

	public function getMusteriler() {
		$sql = "SELECT * FROM musteriler";
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getMusteri($id) {
		$sql = "SELECT * FROM musteriler WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([$id]);
			
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function guncelleMusteri($id, $ad, $eposta) {
		$sql = "UPDATE musteriler SET ad = ?, eposta = ? WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([$ad, $eposta, $id]);
	}

	public function silMusteri($id) {
		$sql = "DELETE FROM musteriler WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([$id]);
	}

    public function hizmetleri_getir($id) {
        global $db;
        $stmt = $db->prepare("SELECT h.*, p.ad AS paket_adi FROM hizmetler h INNER JOIN paketler p ON h.paket_id = p.id WHERE h.musteri_id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function faturalari_getir($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM faturalar WHERE musteri_id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function talepleri_getir($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM destek_talepleri WHERE musteri_id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function talep_olustur($id, $konu, $mesaj) {
        global $db;
        $stmt = $db->prepare("INSERT INTO destek_talepleri (musteri_id, konu, mesaj, tarih) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$id, $konu, $mesaj]);
    }

    public function alan_adlari_getir($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM alan_adlari WHERE musteri_id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>