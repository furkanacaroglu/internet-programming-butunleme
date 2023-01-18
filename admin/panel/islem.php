<?php
require_once '../veritabani/baglan.php';

if (isset($_POST['ayarguncelle'])) {
    $baslik = $_POST['baslik'];
    $telefon = $_POST['telefon'];
    $eposta = $_POST['eposta'];

    if ($_FILES['yenilogo']['size'] > 0) {
        $file_name = $_FILES['yenilogo']['name'];
        $file_size = $_FILES['yenilogo']['size'];
        $file_tmp = $_FILES['yenilogo']['tmp_name'];
        $file_type = $_FILES['yenilogo']['type'];

        //uzantısını alıyoruz
        $file_ext = strtolower(end(explode('.', $_FILES['yenilogo']['name'])));

        $extensions = ['jpeg', 'jpg', 'png', 'webp'];

        $yeni_logo_url = '../images/' . $file_name;

        if (in_array($file_ext, $extensions) === false) {
            header('Location:../ayar_guncelle.php?kontrol=uzanti');
            die();
        }

        if ($file_size > 2097152) {
            header('Location:../ayar_guncelle.php?kontrol=boyut');
            die();
        }
        move_uploaded_file($file_tmp, $yeni_logo_url);

        $ayar_guncelle = $database->prepare("UPDATE ayarlar SET 
        ayar_baslik=?,
        ayar_telefon=?,
        ayar_eposta=?,
        ayar_logo=?
        WHERE ayar_id=1 ");

        if (
            $ayar_guncelle->execute([
                $baslik,
                $telefon,
                $eposta,
                $yeni_logo_url,
            ])
        ) {
            //Eski logoyu yer tutmaması için kaldırıyorum.
            unlink($_SESSION['eski_logo_url']);
            header('Location:../ayar_guncelle.php?kontrol=basarili');
            die();
        } else {
            header('Location:../ayar_guncelle.php?kontrol=basarisiz');
            die();
        }
    } else {
        $ayar_guncelle = $database->prepare("UPDATE ayarlar SET 
        ayar_baslik=?,
        ayar_telefon=?,
        ayar_eposta=? 
        WHERE ayar_id=1 ");

        if ($ayar_guncelle->execute([$baslik, $telefon, $eposta])) {
            header('Location:../ayar_guncelle.php?kontrol=basarili');
            die();
        } else {
            header('Location:../ayar_guncelle.php?kontrol=basarisiz');
            die();
        }
    }
}

if (isset($_POST['hizmetekle'])) {

    $baslik = $_POST['baslik'];
    $detay = $_POST['detay'];

    $file_name = $_FILES['yeniresim']['name'];
    $file_size = $_FILES['yeniresim']['size'];
    $file_tmp = $_FILES['yeniresim']['tmp_name'];
    $file_type = $_FILES['yeniresim']['type'];

    //uzantısını alıyoruz
    $file_ext = strtolower(end(explode('.', $_FILES['yeniresim']['name'])));

    $extensions = ['jpeg', 'jpg', 'png', 'webp'];

    $yeni_hizmet_resim_url = '../images/' . $file_name;

    if (in_array($file_ext, $extensions) === false) {
        header('Location:../hizmetler.php?kontrol=uzanti');
        die();
    }

    if ($file_size > 2097152) {
        header('Location:../hizmetler.php?kontrol=boyut');
        die();
    }
    move_uploaded_file($file_tmp, $yeni_hizmet_resim_url);

    $hizmet_ekle = $database->prepare("INSERT INTO hizmetler SET 
        hizmet_resim_url=?,
        hizmet_baslik=?,
        hizmet_bilgi=? ");

    if ($hizmet_ekle->execute([$yeni_hizmet_resim_url, $baslik, $detay])) {
        header('Location:../hizmetler.php?kontrol=basarili');
        die();
    } else {
        header('Location:../hizmetler.php?kontrol=basarisiz');
        die();
    }
}


if (isset($_POST['haberekle'])) {
    
    $baslik = $_POST['baslik'];
    $detay = $_POST['detay'];

    $file_name = $_FILES['haberresim']['name'];
    $file_size = $_FILES['haberresim']['size'];
    $file_tmp = $_FILES['haberresim']['tmp_name'];
    $file_type = $_FILES['haberresim']['type'];

    //uzantısını alıyoruz
    $file_ext = strtolower(end(explode('.', $_FILES['haberler_resim']['name'])));

    $extensions = ['jpeg', 'jpg', 'png', 'webp'];

    $yeni_haber_resim_url = '../images/' . $file_name;

    if (in_array($file_ext, $extensions) === false) {
        header('Location:../haberler.php?kontrol=uzanti');
        die();
    }

    if ($file_size > 2097152) {
        header('Location:../haberler.php?kontrol=boyut');
        die();
    }
    move_uploaded_file($file_tmp, $yeni_haber_resim_url);

    $haber_ekle = $database->prepare("INSERT INTO haberler SET 
        haberler_resim=?,
        haberler_baslik=?,
        haberler_bilgi=? ");

    if ($haber_ekle->execute([$yeni_haber_resim_url, $baslik, $detay])) {
        header('Location:../haberler.php?kontrol=basarili');
        die();
    } else {
        header('Location:../haberler.php?kontrol=basarisiz');
        die();
    }
}

if (isset($_POST['galeriekle'])) {
    
    $baslik = $_POST['baslik'];
    $detay = $_POST['detay'];

    $file_name = $_FILES['galeriresim']['name'];
    $file_size = $_FILES['galeriresim']['size'];
    $file_tmp = $_FILES['galeriresim']['tmp_name'];
    $file_type = $_FILES['galeriresim']['type'];

    //uzantısını alıyoruz
    $file_ext = strtolower(end(explode('.', $_FILES['galeriresim']['name'])));

    $extensions = ['jpeg', 'jpg', 'png', 'webp'];

    $yeni_galeri_resim_url = '../images/' . $file_name;

    if (in_array($file_ext, $extensions) === false) {
        header('Location:../galeriler.php?kontrol=uzanti');
        die();
    }

    if ($file_size > 2097152) {
        header('Location:../galeriler.php?kontrol=boyut');
        die();
    }
    move_uploaded_file($file_tmp, $yeni_galeri_resim_url);

    $galeri_ekle = $database->prepare("INSERT INTO galeri SET 
        galeri_resim=?,
        galeri_baslik=?,
        galeri_bilgi=? ");

    if ($galeri_ekle->execute([$yeni_galeri_resim_url, $baslik, $detay])) {
        header('Location:../galeriler.php?kontrol=basarili');
        die();
    } else {
        header('Location:../galeriler.php?kontrol=basarisiz');
        die();
    }
}

if (isset($_POST['slaytekle'])) {
    
    $baslik = $_POST['baslik'];
    $detay = $_POST['detay'];

    $file_name = $_FILES['slaytvideo']['name'];
    $file_size = $_FILES['slaytvideo']['size'];
    $file_tmp = $_FILES['slaytvideo']['tmp_name'];
    $file_type = $_FILES['slaytvideo']['type'];

    //uzantısını alıyoruz
    $file_ext = strtolower(end(explode('.', $_FILES['slaytvideo']['name'])));

    $extensions = ['mp4', 'gif'];

    $yeni_slayt_video_url = '../images/' . $file_name;

    if (in_array($file_ext, $extensions) === false) {
        header('Location:../slaytlar.php?kontrol=uzanti');
        die();
    }

    if ($file_size > 2097152*100) {
        header('Location:../slaytlar.php?kontrol=boyut');
        die();
    }
    move_uploaded_file($file_tmp, $yeni_slayt_video_url);

    $slayt_ekle = $database->prepare("INSERT INTO slaytlar SET 
        slayt_video_url=?,
        slayt_baslik=?  ");

    if ($slayt_ekle->execute([$yeni_slayt_video_url, $baslik])) {

        header('Location:../slaytlar.php?kontrol=basarili');
        die();
        
    } else {
        header('Location:../slaytlar.php?kontrol=basarisiz');
        die();
    }
}

if (isset($_POST['referansekle'])) {
    
    $baslik = $_POST['baslik'];
    $detay = $_POST['detay'];

    $file_name = $_FILES['referansresim']['name'];
    $file_size = $_FILES['referansresim']['size'];
    $file_tmp = $_FILES['referansresim']['tmp_name'];
    $file_type = $_FILES['referansresim']['type'];

    //uzantısını alıyoruz
    $file_ext = strtolower(end(explode('.', $_FILES['referansresim']['name'])));

    $extensions = ['jpeg', 'jpg', 'png', 'webp'];

    $yeni_referans_resim_url = '../images/' . $file_name;

    if (in_array($file_ext, $extensions) === false) {
        header('Location:../referanslar.php?kontrol=uzanti');
        die();
    }

    if ($file_size > 2097152) {
        header('Location:../referanslar.php?kontrol=boyut');
        die();
    }
    move_uploaded_file($file_tmp, $yeni_referans_resim_url);

    $referans_ekle = $database->prepare("INSERT INTO referanslar SET 
        referans_resim=?,
        referans_baslik=?,
        referans_icerik=? ");

    if ($referans_ekle->execute([$yeni_referans_resim_url, $baslik, $detay])) {
        header('Location:../referanslar.php?kontrol=basarili');
        die();
    } else {
        header('Location:../referanslar.php?kontrol=basarisiz');
        die();
    }
}
?>
