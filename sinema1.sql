-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Haz 2016, 11:02:59
-- Sunucu sürümü: 5.7.11
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinema1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilet`
--

CREATE TABLE `bilet` (
  `bilet_id` int(11) NOT NULL,
  `ad` varchar(45) DEFAULT NULL,
  `soyad` varchar(45) DEFAULT NULL,
  `telefon` varchar(45) DEFAULT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `film_adi` varchar(45) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `seans_saati` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `koltuk` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bilet`
--

INSERT INTO `bilet` (`bilet_id`, `ad`, `soyad`, `telefon`, `film_id`, `film_adi`, `tarih`, `seans_saati`, `mail`, `koltuk`) VALUES
(186, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'C1'),
(187, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'C1'),
(188, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'I10'),
(190, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'A1'),
(192, 'ffdfdfdfdfdfd', 'fdfdfdffdff', '434343434', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', NULL, 'J1'),
(193, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'B10'),
(194, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'A5'),
(195, 'sdadadsad', 'DASDAsda', '31231', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', NULL, 'A7'),
(196, 'bugra', 'ulku', '5065656565', 1, 'HIZLI VE OFKELI', '2016-06-21', '11:00', 'bugra.ulku@hotmail.com', 'C5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film`
--

CREATE TABLE `film` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `film_adi` varchar(150) DEFAULT NULL,
  `tur` varchar(45) DEFAULT NULL,
  `sure` varchar(45) DEFAULT NULL,
  `resim` varchar(45) DEFAULT NULL,
  `ozet` text,
  `vizyon_tarih` date DEFAULT NULL,
  `yapimci` varchar(45) DEFAULT NULL,
  `yonetmen` varchar(45) DEFAULT NULL,
  `oyuncular` text,
  `vizyon_bitis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `film`
--

INSERT INTO `film` (`film_id`, `film_adi`, `tur`, `sure`, `resim`, `ozet`, `vizyon_tarih`, `yapimci`, `yonetmen`, `oyuncular`, `vizyon_bitis`) VALUES
(1, 'HIZLI VE OFKELI', 'AKSIYON', '110', 'dosyalar/as7587.jpg', 'Hızlı ve Öfkeli: 6’nın dünya etrafındaki gişe başarısının üstüne kurulan, aksiyonu, heyecanı ve öyküyü daha da yükselten ‘Hızlı ve Öfkeli 6’ filmiyle yönetmen Justin Lin dördüncü defa filmi çekiyor. Vin Diesel bu defa polise yardım etmek ve öldüğünü zannettiği eski sevgilisini görmek için herşeyi riske atıyor.', '2016-05-11', 'Gary Scott Thompson', 'F. Gary Gray', 'Scott Eastwood - Kristofer Hivju - Vin Diesel - Dwayne Johnson', '2016-07-16'),
(2, 'SALT', 'AKSIYON', '150', 'dosyalar/fg542.jpg', 'Phillip Noyce’ın yönettiği ve Angelina Jolie, Liev Schreiber, Chiwetel Ejiofor ile Andre Braugher’ın oynadığı Ajan Salt (Salt),Warner Bros. tarafından vizyona çıkarılıyor. Evelyn Salt (Jolie), görevi, şerefi ve ülkesi üzerine yemin etmiş bir CIA ajanıdır. Ancak bir itirafçının onu Rus ajanı olmakla suçlamasıyla bağlılığı test edilecektir. Salt sahip olduğu tüm gizli görev tecrübesini kullanarak kendini temize çıkarmak amacıyla kaçar. Salt’ın masum olduğunu kanıtlamak için gösterdiği tüm çaba hakkındaki şüpheleri arttıracak ve geriye yanıtlanması gerekn bir tek soru bırakacaktır; “Salt kimdir?”', '2016-02-15', 'Robert Elswit', 'Phillip Noyce', 'Angelina Jolie - Daniel Olbrychski - Corey Stoll', '2016-05-15'),
(3, 'TARZAN', 'AKSIYON', '150', 'dosyalar/yu5835.jpg', 'The Legend of Tarzan, Edgar Rice Burroughs\'un zamansız masalından uyarlanıyor. Filmin başrollerini Alexander Skarsgård ve Margot Robbie üstleniyor.', '2016-06-20', 'Margot Robbie', 'David Yates', 'lexander Skarsgrd - Margot Robbie', '2016-08-20'),
(4, 'NINJA KAPLUMBAGALAR', 'AKSIYON', '150', 'dosyalar/as4104.jpg', 'Bir deney sonucu mutant olup gelişen kaplumbagaların kötü adamlara karşı verdigi amansız mücadelesi.', '2016-05-18', 'Kevin Eastman', 'Jonathan Liebesman', 'Megan Fox-Will Arnett-Alan Ritchson', '2016-07-18'),
(7, 'PAIN-GAIN', 'AKSIYON', '111', 'dosyalar/as558.jpg', 'İki arkadaş sürekli sporla uğraşıp vücut geliştirme salonlarınında günlerini gün etmektedirler. Nasıl olduysa birgün haraç ağına düşerler ve başlarına hiç olmadık işler gelir.', '2016-05-22', 'Pete Collins', 'Michael Bay', 'Mark Wahlberg-Dwayne Johnson-Anthony Mackie', '2016-08-15'),
(9, 'AVATAR', 'AKSIYON', '200', 'dosyalar/as7258.jpg', 'Bizleri hayal gücümüzün ötesinde muhteşem bir dünyaya taşıyacak olan film Navi adlı yok olmak üzere olan bir halkın yaşadığı Pandora adlı gezegende geçiyor.', '2016-05-15', 'Margery Simkin', 'James Cameron', 'Zoe Saldana-Michelle Rodriguez-Sam Worthington', '2016-09-18'),
(11, 'BLACK SWAN', 'AKSIYON', '123', 'dosyalar/fg1475.jpg', 'Yaptığı işi seven bir balerin ve balerin dünyasındaki rakipler arası olan yarış ve buna bağlı gerilim dolu dakikalara hazır olun.', '2016-05-25', 'Mary Vernieu', 'Darren Aronofsky', 'Natalie Portman-Mila Kunis-Vincent Cassel', '2016-05-31'),
(62, 'SIHIRBAZLAR CETESI', 'GERILIM', '145', 'dosyalar/ut2222.jpg', NULL, '2016-07-01', 'Roberto Orci', 'Louis Leterrier', 'Morgan Freeman-Mark Ruffalo-Jesse Eisenberg ', '2016-09-01'),
(63, 'BUZ DEVRI 5', 'ANIMASYON', '100', 'dosyalar/yy1212.jpg', 'Scrat\'in meşe palamudunun peşindeki bitmeyen takibi, bu kez Dünya\'nın dışına çıkmasına neden olur. Ancak Scrat, birtakım şanssız tesadüfler sonucunda dünyayı yok edebilecek olaylar zincirini başlatır. Dünyaya çarpacağı kaçınılmaz olan göktaşından kaçabilmek için Manny, Sid, Diego ve arkadaşları, daha önce hiç görmedikleri yerler ve yaratıklarla karşılaşacakları bir yolculuğa çıkarlar.', '2016-06-12', 'Michael J. Wilson', 'Mike Thurmeier', 'Jennifer Lopez-Queen Latifah', '2016-07-20'),
(64, 'TRIPLE 9', 'AKSIYON', '135', 'dosyalar/tt3333.jpg', 'Tuhaf olan 3 bilim adamı New York’taki bir üniversitede gizli çalışmalar yaptıkları rahat yerlerinden kovulmuşlardır. Yeni bir işe girişmişlerdir ve artık onlar Hayalet Avcıları’dır. Eski bir itfaiye binasındaki sıkıntı veren hayaletleri, ruhları ve hortlakları kapana kıstırmak için Ghostbusters isminde bir dükkan açmışlardır. Şehirde tanımsız şeytani bir varlık ortaya çıkmıştır ve Hayalet Avcıları Büyük Elma’yı kurtarmakla görevlidirler', '2016-05-04', ' Ivan Reitman', 'Paul Feig', 'Kristen Wiig-Melissa McCarthy', '2016-07-27'),
(65, 'MISIR\'IN TANRILARI', 'BILIM KURGU', '128', 'dosyalar/uu2121.jpg', 'Set karanlıkların imparatorudur. Girdiği savaşta mısır kırallığını ele geçirir ve büyük bir kaos ortamı oluşur. Huzurlu ve güzel bir imparatorluk bir anda paramparça olur. Karanlık tanrı set\'e karşı cesur askerler savaşmak zorunda kalacaktır. Tanrı Horus\'a giderek onlara yardımcı olması istenecektir ', '2016-06-02', 'Basil Iwanyk', 'Alex Proyas', 'John Papsidera-Nikki Barrett', '2016-07-15'),
(67, 'ANGRY BIRD', 'AKSÄ°YON', '150', 'dosyalar/rt6527.jpg', '', '2016-06-15', 'KAMIL AKGUN', 'Darren Aronofsky', 'Charlize Theron-Donnie Yen-Edward Norton-BUGRA-', '2016-07-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelecek`
--

CREATE TABLE `gelecek` (
  `gelecek_id` int(11) NOT NULL,
  `film_adi` varchar(30) DEFAULT NULL,
  `sure` varchar(45) DEFAULT NULL,
  `tur` varchar(30) DEFAULT NULL,
  `resim` varchar(256) DEFAULT NULL,
  `yonetmen` varchar(45) DEFAULT NULL,
  `yapimci` varchar(45) DEFAULT NULL,
  `vizyon_tarih` varchar(45) DEFAULT NULL,
  `oyuncular` text,
  `ozet` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gelecek`
--

INSERT INTO `gelecek` (`gelecek_id`, `film_adi`, `sure`, `tur`, `resim`, `yonetmen`, `yapimci`, `vizyon_tarih`, `oyuncular`, `ozet`) VALUES
(8, 'aaaa', '111', 'aaaa', 'dosyalar/yu9854', 'aaaa', 'aaaaa', '18-05-2016', 'aaaaassss', ''),
(11, 'WHO AM I', '150', 'AKSIYON', 'dosyalar/as158.jpg', 'bugra', 'bugra', '25-06-2016', 'ali-bugra-ali-bugra', ''),
(10, 'FRANKENSTEIN', '1111', 'AKSIYON', 'dosyalar/yu5754.jpg', 'SSSS', 'AAA', '24-05-2016', 'SASA', ''),
(12, 'SKYFALL', '150', 'AKSIYON', 'dosyalar/yu6289.jpg', 'AAAA', 'SSS', '03-05-2016', 'aaaasdasdadsda', 'aaaaaaasdasdadasdadadasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gun`
--

CREATE TABLE `gun` (
  `gun_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gun`
--

INSERT INTO `gun` (`gun_id`, `film_id`, `tarih`) VALUES
(30, 3, '2016-06-10'),
(31, 3, '2016-06-11'),
(32, 3, '2016-06-12'),
(42, 13, '2016-06-10'),
(53, 3, '2016-06-13'),
(54, 3, '2016-06-14'),
(55, 3, '2016-06-15'),
(56, 3, '2016-06-16'),
(57, 3, '2016-06-17'),
(58, 4, '2016-06-22'),
(59, 4, '2016-06-23'),
(60, 4, '2016-06-24'),
(61, 4, '2016-06-25'),
(62, 4, '2016-06-26'),
(63, 4, '2016-06-27'),
(64, 4, '2016-06-23'),
(65, 4, '2016-06-24'),
(68, 1, '2016-06-21'),
(69, 1, '2016-06-22'),
(70, 1, '2016-06-23'),
(71, 1, '2016-06-24'),
(72, 1, '2016-06-25'),
(73, 1, '2016-06-26'),
(74, 1, '2016-06-27'),
(75, 1, '2016-06-28'),
(78, 7, '2016-05-22'),
(79, 7, '2016-05-23'),
(80, 7, '2016-05-24'),
(81, 7, '2016-05-25'),
(82, 7, '2016-05-26'),
(83, 7, '2016-05-27'),
(84, 7, '2016-05-28'),
(85, 9, '2016-05-22'),
(86, 9, '2016-05-23'),
(87, 9, '2016-05-24'),
(88, 9, '2016-05-25'),
(89, 9, '2016-05-26'),
(90, 9, '2016-05-27'),
(92, 64, '2016-05-22'),
(93, 64, '2016-05-23'),
(94, 64, '2016-05-24'),
(95, 64, '2016-05-25'),
(96, 2, '2016-06-10'),
(97, 2, '2016-06-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

CREATE TABLE `musteri` (
  `musteri_id` int(11) NOT NULL,
  `kulladi` varchar(45) NOT NULL,
  `soyad` varchar(45) NOT NULL,
  `telefon` varchar(45) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `kullsifre` int(30) NOT NULL,
  `ad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`musteri_id`, `kulladi`, `soyad`, `telefon`, `mail`, `kullsifre`, `ad`) VALUES
(35, 'bugra', 'ulku', '5065656565', 'bugra.ulku@hotmail.com', 123, 'bugra'),
(36, 'ali', 'aygun', '2121212121', 'aliemre', 123, 'ali');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyuncular`
--

CREATE TABLE `oyuncular` (
  `oyun_id` int(11) NOT NULL,
  `oyun_adi` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `oyuncular`
--

INSERT INTO `oyuncular` (`oyun_id`, `oyun_adi`) VALUES
(1, 'Angelina Jolie'),
(2, 'Brad Pitt'),
(6, ' Leonardo Di Caprio'),
(4, 'Donnie Yen'),
(5, 'Megan Fox'),
(7, 'Robert De Niro'),
(8, 'Johnny Depp'),
(9, 'Jake Gyllenhaal'),
(10, 'Logan Lerman'),
(11, 'Robert Downey Jr'),
(12, 'Edward Norton'),
(13, 'Charlize Theron'),
(14, 'Ryan Reynolds'),
(15, 'Will Smith'),
(17, 'Scarlet Johansson'),
(18, 'Lena Headey'),
(19, 'Jennifer Lawrence'),
(20, 'Jim Carrey'),
(54, 'BUGRA-'),
(52, 'Nikki Barrett'),
(51, 'Queen Latifah'),
(50, 'Jennifer Lopez'),
(49, 'Mark Ruffalo'),
(48, 'Jesse Eisenberg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seans`
--

CREATE TABLE `seans` (
  `seans_id` int(10) UNSIGNED NOT NULL,
  `seans_saati` varchar(5) DEFAULT NULL,
  `gun_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `seans`
--

INSERT INTO `seans` (`seans_id`, `seans_saati`, `gun_id`, `film_id`) VALUES
(6, '11:00', 23, 1),
(9, '18:00', 35, 1),
(10, '21:00', 35, 1),
(14, '15:00', 1, 1),
(18, '22:22', 32, 3),
(22, '11:00', 28, 2),
(23, '11:00', 42, 13),
(24, '15:00', 39, 4),
(26, '13:00', 23, 1),
(29, '15:00', 23, 1),
(30, '09:30', 30, 3),
(31, '12:30', 30, 3),
(32, '11:00', 31, 3),
(33, '21:30', 32, 3),
(34, '24:00', 32, 3),
(35, '09:00', 58, 4),
(36, '22:30', 60, 4),
(37, '11:11', 66, 1),
(38, '10:00', 67, 1),
(39, '10:00', 70, 1),
(40, '12:00', 70, 1),
(41, '09:00', 71, 1),
(42, '11:00', 71, 1),
(43, '10:30', 72, 1),
(44, '12:30', 0, 1),
(45, '14:00', 72, 1),
(46, '20:00', 73, 1),
(47, '22:00', 73, 1),
(49, '10:00', 59, 4),
(50, '12:00', 59, 4),
(51, '15:00', 59, 4),
(52, '18:00', 59, 4),
(53, '20:30', 60, 4),
(54, '17:00', 61, 4),
(55, '19:30', 61, 4),
(56, '11:00', 78, 7),
(57, '15:00', 78, 7),
(58, '18:00', 78, 7),
(59, '11:00', 79, 7),
(61, '15:00', 79, 7),
(62, '18:00', 79, 7),
(63, '10:00', 80, 7),
(64, '12:30', 80, 7),
(65, '14:45', 80, 7),
(66, '20:00', 81, 7),
(67, '22:00', 81, 7),
(68, '18:00', 86, 9),
(69, '21:30', 86, 9),
(70, '15:00', 87, 9),
(71, '17:00', 87, 9),
(72, '10:00', 88, 9),
(73, '12:30', 88, 9),
(74, '10:00', 93, 64),
(78, '12:30', 93, 64),
(79, '15:00', 93, 64),
(80, '18:00', 93, 64),
(81, '20:00', 93, 64),
(82, '11:00', 94, 64),
(83, '12:30', 94, 64),
(84, '14:00', 94, 64),
(85, '24:00', 95, 64),
(86, '11:00', 68, 1),
(87, '10:00', 96, 2),
(88, '12:00', 96, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapimci`
--

CREATE TABLE `yapimci` (
  `yap_id` int(11) NOT NULL,
  `yap_adi` varchar(99) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yapimci`
--

INSERT INTO `yapimci` (`yap_id`, `yap_adi`) VALUES
(5, ''),
(14, 'Roberto Orci'),
(7, 'Robert Elswit'),
(8, 'Margot Robbie'),
(9, 'Kevin Eastman'),
(10, 'Pete Collins'),
(11, 'Margery Simkin'),
(12, 'Mary Vernieu'),
(15, ' Ivan Reitman'),
(16, 'Basil Iwanyk'),
(18, 'KAMIL AKGUN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetmen`
--

CREATE TABLE `yonetmen` (
  `yonetmen_id` int(11) NOT NULL,
  `yon_adi` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetmen`
--

INSERT INTO `yonetmen` (`yonetmen_id`, `yon_adi`) VALUES
(6, 'Phillip Noyce'),
(5, 'Avy Kaufman'),
(4, ''),
(7, 'David Yates'),
(8, 'Jonathan Liebesman'),
(9, 'Michael Bay'),
(10, 'James Cameron'),
(11, 'Darren Aronofsky'),
(16, 'Mike Thurmeier'),
(15, 'Louis Leterrier'),
(17, 'Paul Feig'),
(18, 'Alex Proyas');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`bilet_id`);

--
-- Tablo için indeksler `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Tablo için indeksler `gelecek`
--
ALTER TABLE `gelecek`
  ADD PRIMARY KEY (`gelecek_id`);

--
-- Tablo için indeksler `gun`
--
ALTER TABLE `gun`
  ADD PRIMARY KEY (`gun_id`,`film_id`),
  ADD KEY `fk_gun_film1_idx` (`film_id`);

--
-- Tablo için indeksler `musteri`
--
ALTER TABLE `musteri`
  ADD PRIMARY KEY (`musteri_id`),
  ADD UNIQUE KEY `musteri_id_UNIQUE` (`musteri_id`);

--
-- Tablo için indeksler `oyuncular`
--
ALTER TABLE `oyuncular`
  ADD PRIMARY KEY (`oyun_id`);

--
-- Tablo için indeksler `seans`
--
ALTER TABLE `seans`
  ADD PRIMARY KEY (`seans_id`,`gun_id`,`film_id`),
  ADD KEY `fk_seans_gun1_idx` (`gun_id`,`film_id`);

--
-- Tablo için indeksler `yapimci`
--
ALTER TABLE `yapimci`
  ADD PRIMARY KEY (`yap_id`);

--
-- Tablo için indeksler `yonetmen`
--
ALTER TABLE `yonetmen`
  ADD PRIMARY KEY (`yonetmen_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilet`
--
ALTER TABLE `bilet`
  MODIFY `bilet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- Tablo için AUTO_INCREMENT değeri `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- Tablo için AUTO_INCREMENT değeri `gelecek`
--
ALTER TABLE `gelecek`
  MODIFY `gelecek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `gun`
--
ALTER TABLE `gun`
  MODIFY `gun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- Tablo için AUTO_INCREMENT değeri `musteri`
--
ALTER TABLE `musteri`
  MODIFY `musteri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Tablo için AUTO_INCREMENT değeri `oyuncular`
--
ALTER TABLE `oyuncular`
  MODIFY `oyun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Tablo için AUTO_INCREMENT değeri `seans`
--
ALTER TABLE `seans`
  MODIFY `seans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- Tablo için AUTO_INCREMENT değeri `yapimci`
--
ALTER TABLE `yapimci`
  MODIFY `yap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `yonetmen`
--
ALTER TABLE `yonetmen`
  MODIFY `yonetmen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
