-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Oca 2023, 13:17:07
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `telekominukasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_baslik` varchar(250) NOT NULL,
  `ayar_telefon` varchar(50) NOT NULL,
  `ayar_eposta` varchar(50) NOT NULL,
  `ayar_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_telefon`, `ayar_eposta`, `ayar_logo`) VALUES
(1, 'Telekomünikasyon ', '0 212 526 69 68', 'lp@telekomünikasyon.com', '../images/ada.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resim` varchar(200) NOT NULL,
  `galeri_baslik` varchar(200) NOT NULL,
  `galeri_bilgi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resim`, `galeri_baslik`, `galeri_bilgi`) VALUES
(1, '../images/galeri.png', 'galeri 1', 'galeri 1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `haberler_id` int(11) NOT NULL,
  `haberler_baslik` varchar(200) NOT NULL,
  `haberler_resim` varchar(200) NOT NULL,
  `haberler_bilgi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`haberler_id`, `haberler_baslik`, `haberler_resim`, `haberler_bilgi`) VALUES
(2, 'sdzczx', 'zxczxczxczxc', 'zxczxczxz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_resim_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hizmet_baslik` varchar(100) NOT NULL,
  `hizmet_bilgi` longtext NOT NULL,
  `hizmet_olusturma_tarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_resim_url`, `hizmet_baslik`, `hizmet_bilgi`, `hizmet_olusturma_tarihi`) VALUES
(3, '../images/skoda-fabia-2021.jpg', 'Call Center Hizmeti', 'Bizi tercih ederek zamanınızı çöpe atmamış olacaksınız.', '2023-01-18 03:05:21'),
(4, '../images/skoda-fabia-2021.jpg', 'Bilgi talepleriniz emin ellerde.', 'Devasa serverlarımız ve güvenilir personel kadromuzla sonsuz hizmet garantisi.', '2023-01-18 03:08:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsalsayfalar`
--

CREATE TABLE `kurumsalsayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_sira` int(2) NOT NULL,
  `sayfa_baslik` varchar(200) NOT NULL,
  `sayfa_icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `referans_id` int(11) NOT NULL,
  `referans_resim` varchar(200) NOT NULL,
  `referans_baslik` varchar(200) NOT NULL,
  `referans_icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`referans_id`, `referans_resim`, `referans_baslik`, `referans_icerik`) VALUES
(4, '../images/skoda-fabia-2021.jpg', 'Cumali Ali, Callzen hakkında konuştu.', '\"Callzen\'e olan güvenim her geçen gün artıyor. Rakiplerine göre çok ayrı bir noktada.\"'),
(5, '../images/skoda-fabia-2021.jpg', 'Callzen yine manşetlerde.', 'Ünlü iş adamı Ahmet Hamdi, Callzen hakkında iyi yorum yaptı. Ahmet Hamdi, \"Çok kısa sürede çok fazla iş yaptıklarını düşünüyorum.\" dedi.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `talepformlari`
--

CREATE TABLE `talepformlari` (
  `talepform_id` int(11) NOT NULL,
  `talepform_adi` varchar(50) NOT NULL,
  `talepform_soyadi` varchar(50) NOT NULL,
  `talepform_email` varchar(50) NOT NULL,
  `talepform_telefon` varchar(50) NOT NULL,
  `talepform_icerik` text NOT NULL,
  `talepform_tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_kullanici_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `yonetici_sifre` varchar(100) NOT NULL,
  `yonetici_adi` varchar(100) NOT NULL,
  `yonetici_soyadi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`yonetici_id`, `yonetici_kullanici_adi`, `yonetici_sifre`, `yonetici_adi`, `yonetici_soyadi`) VALUES
(1, 'lp', 'e10adc3949ba59abbe56e057f20f883e', 'Furkan', 'Acaroğlu\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`haberler_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Tablo için indeksler `kurumsalsayfalar`
--
ALTER TABLE `kurumsalsayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`referans_id`);

--
-- Tablo için indeksler `talepformlari`
--
ALTER TABLE `talepformlari`
  ADD PRIMARY KEY (`talepform_id`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`yonetici_id`),
  ADD UNIQUE KEY `yonetici_kullanici_adi` (`yonetici_kullanici_adi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `haberler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kurumsalsayfalar`
--
ALTER TABLE `kurumsalsayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `referans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `talepformlari`
--
ALTER TABLE `talepformlari`
  MODIFY `talepform_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
