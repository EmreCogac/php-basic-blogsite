-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql306.epizy.com
-- Üretim Zamanı: 28 May 2023, 07:03:19
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_33659875_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` smallint(6) NOT NULL,
  `header` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `info1` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `code1` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `info2` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `code2` varchar(1000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `info3` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `header`, `info1`, `code1`, `info2`, `code2`, `info3`) VALUES
(9, 'Making graident colors in xml (android studio)', 'Hello , today im gonna teach you how to make graident colors in xml ;\r\n\r\nFirst right click drawble\r\nand create new drawble resource file\r\n\r\nand paste this code', '<shape xmlns:android=\"http://schemas.android.com/apk/res/android\"\r\n    android:shape=\"rectangle\">\r\n    <gradient\r\n        android:angle=\"315\"\r\n        android:type=\"linear\"\r\n        android:startColor=\"first color\"\r\n        android:centerColor=\"middle color\"\r\n        android:endColor=\"end color\"\r\n        />\r\n</shape>', '', '', ''),
(10, 'deneme', 'dasdsadasd', 'adasdasdasdadasd', 'dasdadadasda', 'dasdasdasdasd', 'adasdasda'),
(11, 'beyza', 'beyza 123', 'print(\'i love you\')', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
