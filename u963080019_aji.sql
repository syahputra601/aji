-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jul 2018 pada 09.47
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u963080019_aji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
`id` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`) VALUES
(1, 'Pembina Utama - IV/e'),
(2, 'Pembina Utama Madya - IV/d'),
(3, 'Pembina Utama Muda - IV/c'),
(4, 'Pembina Tingkat I - IV/b'),
(5, 'Pembina - IV/a'),
(6, 'Penata Tingkat I - III/d'),
(7, 'Penata  - III/c'),
(8, 'Penata Muda Tingkat I - III/b'),
(9, 'Penata Muda - III/a'),
(10, 'Pengatur Tingkat I - II/d'),
(11, 'Pengatur - II/c'),
(12, 'Pengatur Muda Tingkat I - II/b'),
(13, 'Pengatur Muda - II/a'),
(14, 'Juru Tingkat I - I/d'),
(15, 'Juru - I/c'),
(16, 'Juru Muda Tingkat I - I/b'),
(17, 'Juru Muda - I/a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE IF NOT EXISTS `instansi` (
`no` int(11) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=882 ;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`no`, `propinsi`, `instansi`) VALUES
(1, 'Aceh', 'PT Banda Aceh'),
(2, 'Aceh', 'PN Kuala Simpang'),
(3, 'Aceh', 'PN Kutacane'),
(4, 'Aceh', 'PN Langsa'),
(5, 'Aceh', 'PN Lhok Seumawe'),
(6, 'Aceh', 'PN Lhok Sukon'),
(7, 'Aceh', 'PN Meulaboh'),
(8, 'Aceh', 'PN Sabang'),
(9, 'Aceh', 'PN Banda Aceh'),
(10, 'Aceh', 'PN Sigli'),
(11, 'Aceh', 'PN Simpang Tiga Redelong'),
(12, 'Aceh', 'PN Sinabang'),
(13, 'Aceh', 'PN Singkel'),
(14, 'Aceh', 'PN Beureun'),
(15, 'Aceh', 'PN Blangkajeren'),
(16, 'Aceh', 'PN Takengon'),
(17, 'Aceh', 'PN Calang'),
(18, 'Aceh', 'PN Tapak Tuan'),
(19, 'Aceh', 'PN Idi'),
(20, 'Aceh', 'PN Janthoi'),
(21, 'Aceh', 'MS Aceh'),
(22, 'Aceh', 'MS Banda Aceh'),
(23, 'Aceh', 'MS Bireuen'),
(24, 'Aceh', 'MS Blangkajeren'),
(25, 'Aceh', 'MS Calang'),
(26, 'Aceh', 'MS Idi'),
(27, 'Aceh', 'MS Jantho'),
(28, 'Aceh', 'MS Kotacane'),
(29, 'Aceh', 'MS Kuala Simpang'),
(30, 'Aceh', 'MS Langsa'),
(31, 'Aceh', 'MS Lhok Seumawe'),
(32, 'Aceh', 'MS Lhok Sukon'),
(33, 'Aceh', 'MS Meulaboh'),
(34, 'Aceh', 'MS Meureudu'),
(35, 'Aceh', 'MS Sabang'),
(36, 'Aceh', 'MS Sigli'),
(37, 'Aceh', 'MS Sinabang'),
(38, 'Aceh', 'MS Singkil'),
(39, 'Aceh', 'MS Takengon'),
(40, 'Aceh', 'MS Tapak Tuan'),
(41, 'Aceh', 'MS Simpang Tiga Redelong'),
(42, 'Aceh', 'PTUN Banda Aceh'),
(43, 'Aceh', 'DILMIL I - 01 Di Banda Aceh'),
(44, 'Bali', 'PT Denpasar'),
(45, 'Bali', 'PN Negara'),
(46, 'Bali', 'PN Bangli'),
(47, 'Bali', 'PN Singaraja'),
(48, 'Bali', 'PN Tabanan'),
(49, 'Bali', 'PN Denpasar'),
(50, 'Bali', 'PN Gianyar'),
(51, 'Bali', 'PN Amlapura / Karangasem'),
(52, 'Bali', 'PN Semarapura / Klungkung'),
(53, 'Bali', 'PA Bandung'),
(54, 'Bali', 'PA Singaraja'),
(55, 'Bali', 'PA Bangli'),
(56, 'Bali', 'PA Tabanan'),
(57, 'Bali', 'PA Denpasar'),
(58, 'Bali', 'PA Gianyar'),
(59, 'Bali', 'PA Karangasem'),
(60, 'Bali', 'PA Klungkung / Semarapura'),
(61, 'Bali', 'PA Negara - Bali'),
(62, 'Bali', 'PTUN Denpasar'),
(63, 'Bali', 'DILMIL III - 14 Di Denpasar'),
(64, 'Banten', 'PT Banten'),
(65, 'Banten', 'PTA Banden'),
(66, 'Banten', 'PN Pandeglang'),
(67, 'Banten', 'PN Rangkas Bitung'),
(68, 'Banten', 'PN Serang'),
(69, 'Banten', 'PN Tangerang'),
(70, 'Banten', 'PA Rangkas Bitung'),
(71, 'Banten', 'PA Serang'),
(72, 'Banten', 'PA Tangerang'),
(73, 'Banten', 'PA Tigaraksa'),
(74, 'Banten', 'PA Cilegon'),
(75, 'Banten', 'PA Pandeglang'),
(76, 'Banten', 'PTUN Serang'),
(77, 'Bengkulu', 'PT Bengkulu'),
(78, 'Bengkulu', 'PTA Bengkulu'),
(79, 'Bengkulu', 'PN Manna'),
(80, 'Bengkulu', 'PN Arga Makmur'),
(81, 'Bengkulu', 'PN Bengkulu'),
(82, 'Bengkulu', 'PN Bintuhan'),
(83, 'Bengkulu', 'PN Tais'),
(84, 'Bengkulu', 'PN Curup'),
(85, 'Bengkulu', 'PN Tubei'),
(86, 'Bengkulu', 'PN Kapahiang'),
(87, 'Bengkulu', 'PA Argamakmur'),
(88, 'Bengkulu', 'PA Bengkulu'),
(89, 'Bengkulu', 'PA Curup'),
(90, 'Bengkulu', 'PA Lebong'),
(91, 'Bengkulu', 'PA Manna'),
(92, 'Bengkulu', 'PTUN Bengkulu'),
(97, 'DI Yogyakarta', 'PT Yogyakarta'),
(98, 'DI Yogyakarta', 'PTA Yogyakarta'),
(99, 'DI Yogyakarta', 'PN Bantul'),
(100, 'DI Yogyakarta', 'PN Sleman'),
(101, 'DI Yogyakarta', 'PN Wates'),
(102, 'DI Yogyakarta', 'PN Wonosari'),
(103, 'DI Yogyakarta', 'PN Yogyakarta'),
(104, 'DI Yogyakarta', 'PA Sleman'),
(105, 'DI Yogyakarta', 'PA Bantul'),
(106, 'DI Yogyakarta', 'PA Wates'),
(107, 'DI Yogyakarta', 'PA Wonosari'),
(108, 'DI Yogyakarta', 'PA Yogyakarta'),
(109, 'DI Yogyakarta', 'DILMIL II - 11 Di Yogyakarta'),
(112, 'DKI Jakarta', 'MA-RI'),
(113, 'DKI Jakarta', 'BADILUM'),
(114, 'DKI Jakarta', 'BADILAG'),
(115, 'DKI Jakarta', 'BADIMILTUN'),
(116, 'DKI Jakarta', 'BAWAS'),
(117, 'DKI Jakarta', 'BUA'),
(118, 'DKI Jakarta', 'PT Jakarta'),
(119, 'DKI Jakarta', 'PTA Jakarta'),
(120, 'DKI Jakarta', 'PTTUN Jakarta'),
(121, 'DKI Jakarta', 'DILMIL TAMA'),
(122, 'DKI Jakarta', 'DILMIL TI II Jakarta'),
(123, 'DKI Jakarta', 'PN Jakarta Barat'),
(124, 'DKI Jakarta', 'PN Jakarta Pusat'),
(125, 'DKI Jakarta', 'PN Jakarta Selatan'),
(126, 'DKI Jakarta', 'PN Jakarta Timur'),
(127, 'DKI Jakarta', 'PN Jakarta Utara'),
(128, 'DKI Jakarta', 'PA Jakarta Barat'),
(129, 'DKI Jakarta', 'PA Jakarta Pusat'),
(130, 'DKI Jakarta', 'PA Jakarta Selatan'),
(131, 'DKI Jakarta', 'PA Jakarta Timur'),
(132, 'DKI Jakarta', 'PA Jakarta Utara'),
(133, 'DKI Jakarta', 'PTUN Jakarta'),
(134, 'DKI Jakarta', 'DILMIL II - 08 Di Jakarta'),
(142, 'Gorontalo', 'PT Gorontalo'),
(143, 'Gorontalo', 'PTA Gorontalo'),
(144, 'Gorontalo', 'PN Limboto'),
(145, 'Gorontalo', 'PN Marisa'),
(146, 'Gorontalo', 'PN Gorontalo'),
(147, 'Gorontalo', 'PN Tilamuta'),
(148, 'Gorontalo', 'PA Tilamuta'),
(149, 'Gorontalo', 'PA Gorontalo'),
(150, 'Gorontalo', 'PA Limboto'),
(151, 'Gorontalo', 'PA Marisa'),
(152, 'Jambi', 'PT Jambi'),
(153, 'Jambi', 'PTA Jambi'),
(154, 'Jambi', 'PN Kuala Tungkal'),
(155, 'Jambi', 'PN Muara Bulian'),
(156, 'Jambi', 'PN Muara Bungo'),
(157, 'Jambi', 'PN Sarolangun'),
(158, 'Jambi', 'PN Sengeti'),
(159, 'Jambi', 'PN Bangko'),
(160, 'Jambi', 'PN Sungai Penuh'),
(161, 'Jambi', 'PN Tanjung Jabung Timur'),
(162, 'Jambi', 'PN Tebo'),
(163, 'Jambi', 'PN Jambi'),
(164, 'Jambi', 'PA Sarolangun'),
(165, 'Jambi', 'PA Sengeti'),
(166, 'Jambi', 'PA Bangko'),
(167, 'Jambi', 'PA Sungai Penuh'),
(168, 'Jambi', 'PA Jambi'),
(169, 'Jambi', 'PA Kuala Tungkal'),
(170, 'Jambi', 'PA Muara Bulian'),
(171, 'Jambi', 'PA Muara Bungo'),
(172, 'Jambi', 'PA Muara Sabak'),
(173, 'Jambi', 'PA Muara Tebo'),
(174, 'Jambi', 'PTUN Jambi'),
(175, 'Jawa Barat', 'BALITBANGDIKLATKUMDIL'),
(176, 'Jawa Barat', 'PT Bandung'),
(177, 'Jawa Barat', 'PTA Bandung'),
(178, 'Jawa Barat', 'PN Kuningan'),
(179, 'Jawa Barat', 'PN Majalengka'),
(180, 'Jawa Barat', 'PN Purwakarta'),
(181, 'Jawa Barat', 'PN Bale Bandung'),
(182, 'Jawa Barat', 'PN Bandung'),
(183, 'Jawa Barat', 'PN Bekasi'),
(184, 'Jawa Barat', 'PN Subang'),
(185, 'Jawa Barat', 'PN Sukabumi'),
(186, 'Jawa Barat', 'PN Sumber'),
(187, 'Jawa Barat', 'PN Sumedang'),
(188, 'Jawa Barat', 'PN Bogor'),
(189, 'Jawa Barat', 'PN Ciamis'),
(190, 'Jawa Barat', 'PN Cianjur'),
(191, 'Jawa Barat', 'PN Cibadak'),
(192, 'Jawa Barat', 'PN Cirebon'),
(193, 'Jawa Barat', 'PN Depok'),
(194, 'Jawa Barat', 'PN Tasikmalaya'),
(195, 'Jawa Barat', 'PN Garut'),
(196, 'Jawa Barat', 'PN Indramayu'),
(197, 'Jawa Barat', 'PN Cibinong'),
(198, 'Jawa Barat', 'PN Karawang'),
(199, 'Jawa Barat', 'PA Purwakarta'),
(200, 'Jawa Barat', 'PA Bandung'),
(201, 'Jawa Barat', 'PA Subang'),
(202, 'Jawa Barat', 'PA Sukabumi'),
(203, 'Jawa Barat', 'PA Sumber'),
(204, 'Jawa Barat', 'PA Sumedang'),
(205, 'Jawa Barat', 'PA Bekasi'),
(206, 'Jawa Barat', 'PA Bogor'),
(207, 'Jawa Barat', 'PA Tasikmalaya'),
(208, 'Jawa Barat', 'PA Ciamis'),
(209, 'Jawa Barat', 'PA Cianjur'),
(210, 'Jawa Barat', 'PA Cibadak'),
(211, 'Jawa Barat', 'PA Cibinong'),
(212, 'Jawa Barat', 'PA Cikarang'),
(213, 'Jawa Barat', 'PA Cimahi'),
(214, 'Jawa Barat', 'PA Cirebon'),
(215, 'Jawa Barat', 'PA Depok'),
(216, 'Jawa Barat', 'PA Garut'),
(217, 'Jawa Barat', 'PA Indramayu'),
(218, 'Jawa Barat', 'PA Karawang'),
(219, 'Jawa Barat', 'PA Kota Banjar'),
(220, 'Jawa Barat', 'PA Kota Tasikmalaya'),
(221, 'Jawa Barat', 'PA Kuningan'),
(222, 'Jawa Barat', 'PA Majalengka'),
(224, 'Jawa Barat', 'PTUN Bandung'),
(225, 'Jawa Barat', 'DILMIL II - 09 Di Bandung'),
(226, 'Jawa Tengah', 'PT Semarang'),
(227, 'Jawa Tengah', 'PTA Semarang'),
(228, 'Jawa Tengah', 'PN Kudus'),
(229, 'Jawa Tengah', 'PN Magelang'),
(230, 'Jawa Tengah', 'PN Pati'),
(231, 'Jawa Tengah', 'PN Pekalongan'),
(232, 'Jawa Tengah', 'PN Pemalang'),
(233, 'Jawa Tengah', 'PN Purbalingga'),
(234, 'Jawa Tengah', 'PN Purwodadi'),
(235, 'Jawa Tengah', 'PN Purwokerto'),
(236, 'Jawa Tengah', 'PN Purworejo'),
(237, 'Jawa Tengah', 'PN Rembang'),
(238, 'Jawa Tengah', 'PN Salatiga'),
(239, 'Jawa Tengah', 'PN Semarang'),
(240, 'Jawa Tengah', 'PN Bajarnegara'),
(241, 'Jawa Tengah', 'PN Banyumas'),
(242, 'Jawa Tengah', 'PN Batang'),
(243, 'Jawa Tengah', 'PN Sragen'),
(244, 'Jawa Tengah', 'PN Sukoharjo'),
(245, 'Jawa Tengah', 'PN Blora'),
(246, 'Jawa Tengah', 'PN Surakarta'),
(247, 'Jawa Tengah', 'PN Boyolali'),
(248, 'Jawa Tengah', 'PN Brebes'),
(249, 'Jawa Tengah', 'PN Cilacap'),
(250, 'Jawa Tengah', 'PN Demak'),
(251, 'Jawa Tengah', 'PN Tegal'),
(252, 'Jawa Tengah', 'PN Temanggung'),
(253, 'Jawa Tengah', 'PN Jepara'),
(254, 'Jawa Tengah', 'PN Wonogiri'),
(255, 'Jawa Tengah', 'PN Wonosobo'),
(256, 'Jawa Tengah', 'PN Mungkid'),
(257, 'Jawa Tengah', 'PN Ungaran'),
(258, 'Jawa Tengah', 'PN Slawi'),
(259, 'Jawa Tengah', 'PN Karanganyar'),
(260, 'Jawa Tengah', 'PN Kebumen'),
(261, 'Jawa Tengah', 'PN Kendal'),
(262, 'Jawa Tengah', 'PN Klaten'),
(263, 'Jawa Tengah', 'PA Purbalingga'),
(264, 'Jawa Tengah', 'PA Purwodadi'),
(265, 'Jawa Tengah', 'PA Purwokerto'),
(266, 'Jawa Tengah', 'PA Purworejo'),
(267, 'Jawa Tengah', 'PA Rembang'),
(268, 'Jawa Tengah', 'PA Salatiga'),
(269, 'Jawa Tengah', 'PA Semarang'),
(270, 'Jawa Tengah', 'PA Ambarawa'),
(271, 'Jawa Tengah', 'PA Slawi'),
(272, 'Jawa Tengah', 'PA Sragen'),
(273, 'Jawa Tengah', 'PA Banjarnegara'),
(274, 'Jawa Tengah', 'PA Sukoharjo'),
(275, 'Jawa Tengah', 'PA Banyumas'),
(276, 'Jawa Tengah', 'PA Batang'),
(277, 'Jawa Tengah', 'PA Surakarta'),
(278, 'Jawa Tengah', 'PA Blora'),
(279, 'Jawa Tengah', 'PA Boyolali'),
(280, 'Jawa Tengah', 'PA Brebes'),
(281, 'Jawa Tengah', 'PA Tegal'),
(282, 'Jawa Tengah', 'PA Temanggung'),
(283, 'Jawa Tengah', 'PA Cilacap'),
(284, 'Jawa Tengah', 'PA Demak'),
(285, 'Jawa Tengah', 'PA Wonogiri'),
(286, 'Jawa Tengah', 'PA Wonosobo'),
(287, 'Jawa Tengah', 'PA Jepara'),
(288, 'Jawa Tengah', 'PA Kajen'),
(289, 'Jawa Tengah', 'PA Karanganyar'),
(290, 'Jawa Tengah', 'PA Kebumen'),
(291, 'Jawa Tengah', 'Pa Kendal'),
(292, 'Jawa Tengah', 'PA Klaten'),
(293, 'Jawa Tengah', 'PA Kudus'),
(294, 'Jawa Tengah', 'PA Magelang'),
(295, 'Jawa Tengah', 'PA Mungkid'),
(296, 'Jawa Tengah', 'PA Pati'),
(297, 'Jawa Tengah', 'PA Pekalongan'),
(298, 'Jawa Tengah', 'PA Pemalang'),
(299, 'Jawa Tengah', 'PTUN Semarang'),
(300, 'Jawa Tengah', 'DILMIL II - 10 Di Semarang'),
(306, 'Jawa Timur', 'PT Surabaya'),
(307, 'Jawa Timur', 'PTA Surabaya'),
(308, 'Jawa Timur', 'PTTUN Surabaya'),
(309, 'Jawa Timur', 'DILMIL TI III Surabaya'),
(310, 'Jawa Timur', 'PN Kraksaan'),
(311, 'Jawa Timur', 'PN Lamongan'),
(312, 'Jawa Timur', 'PN Lumajang'),
(313, 'Jawa Timur', 'PN Madiun'),
(314, 'Jawa Timur', 'PN Magetan'),
(315, 'Jawa Timur', 'PN Malang'),
(316, 'Jawa Timur', 'PN Mojokerto'),
(317, 'Jawa Timur', 'PN Nganjuk'),
(318, 'Jawa Timur', 'PN Ngawi'),
(319, 'Jawa Timur', 'PN Pacitan'),
(320, 'Jawa Timur', 'PN Pamekasan'),
(321, 'Jawa Timur', 'PN Pasuruan'),
(322, 'Jawa Timur', 'PN Ponorogo'),
(323, 'Jawa Timur', 'PN Probolinggo'),
(324, 'Jawa Timur', 'PN Sampang'),
(325, 'Jawa Timur', 'PN Bangil'),
(326, 'Jawa Timur', 'PN Bangkalan'),
(327, 'Jawa Timur', 'PN Sidoarjo'),
(328, 'Jawa Timur', 'PN Bayuwangi'),
(329, 'Jawa Timur', 'PN Situbondo'),
(330, 'Jawa Timur', 'PN Sumenep'),
(331, 'Jawa Timur', 'PN Blitar'),
(332, 'Jawa Timur', 'PN Surabaya'),
(333, 'Jawa Timur', 'PN Bojonegoro'),
(334, 'Jawa Timur', 'PN Bondowoso'),
(335, 'Jawa Timur', 'PN Gresik'),
(336, 'Jawa Timur', 'PN Trenggalek'),
(337, 'Jawa Timur', 'PN Tuban'),
(338, 'Jawa Timur', 'PN Tulungagung'),
(339, 'Jawa Timur', 'PN Jember'),
(340, 'Jawa Timur', 'PN Jombang'),
(341, 'Jawa Timur', 'PN Kab. Kediri'),
(342, 'Jawa Timur', 'PN Kab. Madiun'),
(343, 'Jawa Timur', 'PN Kab. Malang (Kepanjen)'),
(344, 'Jawa Timur', 'PN Kediri'),
(345, 'Jawa Timur', 'PA Probolinggo'),
(346, 'Jawa Timur', 'PA Sampang'),
(347, 'Jawa Timur', 'PA Sidoarjo'),
(348, 'Jawa Timur', 'PA Situbondo'),
(349, 'Jawa Timur', 'PA Bangil'),
(350, 'Jawa Timur', 'PA Bangkalan'),
(351, 'Jawa Timur', 'PA Bayuwangi'),
(352, 'Jawa Timur', 'PA Sumenep'),
(353, 'Jawa Timur', 'PA Surabaya'),
(354, 'Jawa Timur', 'PA Bawean'),
(355, 'Jawa Timur', 'PA Blitar'),
(356, 'Jawa Timur', 'PA Bojonegoro'),
(357, 'Jawa Timur', 'PA Bondowoso'),
(358, 'Jawa Timur', 'PA Trenggalek'),
(359, 'Jawa Timur', 'PA Tuban'),
(360, 'Jawa Timur', 'PA Tulungagung'),
(361, 'Jawa Timur', 'PA Gresik'),
(362, 'Jawa Timur', 'PA Jember'),
(363, 'Jawa Timur', 'PA Jombang'),
(364, 'Jawa Timur', 'PA Kabupaten Kediri'),
(365, 'Jawa Timur', 'PA Kabupaten Madiun'),
(366, 'Jawa Timur', 'PA Kangean'),
(367, 'Jawa Timur', 'PA Kediri'),
(368, 'Jawa Timur', 'PA Kraksaan'),
(369, 'Jawa Timur', 'PA Lamongan'),
(370, 'Jawa Timur', 'PA Lumajang'),
(371, 'Jawa Timur', 'PA Madiun'),
(372, 'Jawa Timur', 'PA Magetan'),
(373, 'Jawa Timur', 'PA Malang'),
(374, 'Jawa Timur', 'PA Kab. Malang'),
(375, 'Jawa Timur', 'PA Mojokerto'),
(376, 'Jawa Timur', 'PA Nganjuk'),
(377, 'Jawa Timur', 'PA Ngawi'),
(378, 'Jawa Timur', 'PA Pacitan'),
(379, 'Jawa Timur', 'PA Pamekasan'),
(380, 'Jawa Timur', 'PA Pasuruan'),
(381, 'Jawa Timur', 'PA Ponorogo'),
(382, 'Jawa Timur', 'PTUN Surabaya'),
(383, 'Jawa Timur', 'DILMIL III - 12 Di Surabaya'),
(384, 'Jawa Timur', 'DILMIL III - 13 Di Madiun'),
(386, 'Kalimantan Barat', 'PT Pontianak'),
(387, 'Kalimantan Barat', 'PTA Pontianak'),
(388, 'Kalimantan Barat', 'PN Mempawah'),
(389, 'Kalimantan Barat', 'PN Ngabang'),
(390, 'Kalimantan Barat', 'PN Pontianak'),
(391, 'Kalimantan Barat', 'PN Putussibau'),
(392, 'Kalimantan Barat', 'PN Sambas'),
(393, 'Kalimantan Barat', 'PN Sanggau'),
(394, 'Kalimantan Barat', 'PN Singkawang'),
(395, 'Kalimantan Barat', 'PN Sintang'),
(396, 'Kalimantan Barat', 'PN Benkayang'),
(397, 'Kalimantan Barat', 'PN Ketapang'),
(398, 'Kalimantan Barat', 'PA Putussibau'),
(399, 'Kalimantan Barat', 'PA Sambas'),
(400, 'Kalimantan Barat', 'PA Sanggau'),
(401, 'Kalimantan Barat', 'PA Sintang'),
(402, 'Kalimantan Barat', 'PA Bengkayang'),
(403, 'Kalimantan Barat', 'PA Ketapang'),
(404, 'Kalimantan Barat', 'PA Mempawah'),
(405, 'Kalimantan Barat', 'PA Pontianak'),
(406, 'Kalimantan Barat', 'PTUN Pontianak'),
(407, 'Kalimantan Barat', 'DILMIL I - 05 Di Pontianak'),
(408, 'Kalimantan Selatan', 'PT Banjarmasin'),
(409, 'Kalimantan Selatan', 'PTA Banjarmasin'),
(410, 'Kalimantan Selatan', 'PN Kotabaru'),
(411, 'Kalimantan Selatan', 'PN Marabahan'),
(412, 'Kalimantan Selatan', 'PN Martapura'),
(413, 'Kalimantan Selatan', 'PN Pelaihari'),
(414, 'Kalimantan Selatan', 'PN Rantau'),
(415, 'Kalimantan Selatan', 'PN Amuntai'),
(416, 'Kalimantan Selatan', 'PN Banjarbaru'),
(417, 'Kalimantan Selatan', 'PN Banjarmasin'),
(418, 'Kalimantan Selatan', 'PN Barabai'),
(419, 'Kalimantan Selatan', 'PA Batulicin'),
(420, 'Kalimantan Selatan', 'PN Tanjung'),
(421, 'Kalimantan Selatan', 'PN Kandangan'),
(422, 'Kalimantan Selatan', 'PA Rantau'),
(423, 'Kalimantan Selatan', 'PA Amuntai'),
(424, 'Kalimantan Selatan', 'PA Banjarbaru'),
(425, 'Kalimantan Selatan', 'PA Banjarmasin'),
(426, 'Kalimantan Selatan', 'PA Barabai'),
(427, 'Kalimantan Selatan', 'PA Batu Licin'),
(428, 'Kalimantan Selatan', 'PA Tanjung'),
(429, 'Kalimantan Selatan', 'PA Kandangan'),
(430, 'Kalimantan Selatan', 'PA Kotabaru'),
(431, 'Kalimantan Selatan', 'PA Marabahan'),
(432, 'Kalimantan Selatan', 'PA Martapura'),
(433, 'Kalimantan Selatan', 'PA Negara - Hulu Sungai Selatan'),
(434, 'Kalimantan Selatan', 'PA Pelaihari'),
(435, 'Kalimantan Selatan', 'PTUN Banjarmasin'),
(436, 'Kalimantan Selatan', 'DILMIL I - 06 Di Banjarmasin'),
(437, '', ''),
(438, 'Kalimantan Tengah', 'PT Palangkaraya'),
(439, 'Kalimantan Tengah', 'PTA Palangkaraya'),
(440, 'Kalimantan Tengah', 'PN Kuala Kapuas'),
(441, 'Kalimantan Tengah', 'PN Muara Tewe'),
(442, 'Kalimantan Tengah', 'PN Palangkaraya'),
(443, 'Kalimantan Tengah', 'PN Pangkalan Bun'),
(444, 'Kalimantan Tengah', 'PN Sampit'),
(445, 'Kalimantan Tengah', 'PN Tamiang Layang'),
(446, 'Kalimantan Tengah', 'PN Buntok'),
(447, 'Kalimantan Tengah', 'PN Kasongan'),
(448, 'Kalimantan Tengah', 'PA Sampit'),
(449, 'Kalimantan Tengah', 'PA Buntok'),
(450, 'Kalimantan Tengah', 'PA Kuala Kapuas'),
(451, 'Kalimantan Tengah', 'PA Muara Tewe'),
(452, 'Kalimantan Tengah', 'PA Palangkaraya'),
(453, 'Kalimantan Tengah', 'PA Pangkalan Bun'),
(454, 'Kalimantan Tengah', 'PTUN Palangkaraya'),
(458, 'Kalimantan Timur', 'PT Samarinda'),
(459, 'Kalimantan Timur', 'PTA Samarinda'),
(460, 'Kalimantan Timur', 'PN Kutai Barat'),
(461, 'Kalimantan Timur', 'PN Samarinda'),
(462, 'Kalimantan Timur', 'PN Sangatta'),
(463, 'Kalimantan Timur', 'PN Balikpapan'),
(464, 'Kalimantan Timur', 'PN Bontang'),
(465, 'Kalimantan Timur', 'PN Tanah Grogot'),
(466, 'Kalimantan Timur', 'PN Tanjung Redep'),
(467, 'Kalimantan Timur', 'PN Tenggarong'),
(468, 'Kalimantan Timur', 'PA Samarinda'),
(469, 'Kalimantan Timur', 'PA Sangatta'),
(470, 'Kalimantan Timur', 'PA Balikpapan'),
(471, 'Kalimantan Timur', 'PA Tanah Grogot'),
(472, 'Kalimantan Timur', 'PA Tanjung Redep'),
(473, 'Kalimantan Timur', 'PA Bontang'),
(474, 'Kalimantan Timur', 'PA Tenggarong'),
(475, 'Kalimantan Timur', 'PTUN Samarinda'),
(476, 'Kalimantan Timur', 'DILMIL I - 07 Di Balikpapan'),
(478, 'Kalimantan Utara', 'PN Malinau'),
(479, 'Kalimantan Utara', 'PN Nunukan'),
(480, 'Kalimantan Utara', 'PN Tanjung Selor'),
(481, 'Kalimantan Utara', 'PN Tarakan'),
(482, 'Kalimantan Utara', 'PA Tanjung Selor'),
(483, 'Kalimantan Utara', 'PA Tarakan'),
(484, 'Kalimantan Utara', 'PA Nunukan'),
(488, 'Kepulauan Bangka Belitung', 'PT Bangka Belitung'),
(489, 'Kepulauan Bangka Belitung', 'PT Riau Kepulauan'),
(490, 'Kepulauan Bangka Belitung', 'PTA Bangka Belitung'),
(491, 'Kepulauan Bangka Belitung', 'PN Pangkal Pinang'),
(492, 'Kepulauan Bangka Belitung', 'PN Sungai Liat'),
(493, 'Kepulauan Bangka Belitung', 'PA Tanjung Padan'),
(494, 'Kepulauan Bangka Belitung', 'PA Mentok'),
(495, 'Kepulauan Bangka Belitung', 'PA Pangkal Pinang'),
(498, 'Kepulauan Riau', 'PN Ranai'),
(499, 'Kepulauan Riau', 'PN Batam'),
(500, 'Kepulauan Riau', 'PN Tanjung Balai Karimun'),
(501, 'Kepulauan Riau', 'PN Tanjung Pinang'),
(502, 'Kepulauan Riau', 'PA Batam'),
(503, 'Kepulauan Riau', 'PA Tanjung Balai Karimun'),
(504, 'Kepulauan Riau', 'PA Tanjung Pinang'),
(505, 'Kepulauan Riau', 'PA Tarempa'),
(506, 'Kepulauan Riau', 'PA Dabo Singkep'),
(507, 'Kepulauan Riau', 'PA Natuna'),
(508, 'Kepulauan Riau', 'PTUN Tanjung Pinang'),
(509, 'Lampung', 'PT Tanjung Karang (Bandar Lampung)'),
(510, 'Lampung', 'PTA Bandar Lampung'),
(511, 'Lampung', 'PN Kota Bumi'),
(512, 'Lampung', 'PN Liwa'),
(513, 'Lampung', 'PN Menggala/Tulang Bawang'),
(514, 'Lampung', 'PN Metro'),
(515, 'Lampung', 'PN Sukadana'),
(516, 'Lampung', 'PN Blambangan Umpu'),
(517, 'Lampung', 'PN Tanjung Karang (Bandar Lampung)'),
(518, 'Lampung', 'PN Gunung Sugih'),
(519, 'Lampung', 'PN Kalianda'),
(520, 'Lampung', 'PN Kota Agung'),
(521, 'Lampung', 'PA Tanggamus'),
(522, 'Lampung', 'PA Blambangan Umpu'),
(523, 'Lampung', 'PA Tanjung Karang (Bandar Lampung)'),
(524, 'Lampung', 'PA Menggala/Tulang Bawang'),
(525, 'Lampung', 'PA Gunung Sugih'),
(526, 'Lampung', 'PA Kalianda'),
(527, 'Lampung', 'PA Kotabumi'),
(528, 'Lampung', 'PA Krui'),
(529, 'Lampung', 'PA Metro'),
(530, 'Lampung', 'PTUN Tanjung Karang (Bandar Lampung)'),
(531, 'Maluku', 'PT Ambon'),
(532, 'Maluku', 'PTA Ambon'),
(533, 'Maluku', 'PN Masohi'),
(534, 'Maluku', 'PN Ambon'),
(535, 'Maluku', 'PN Saumlaki'),
(536, 'Maluku', 'PN Tual'),
(537, 'Maluku', 'PA Ambon'),
(538, 'Maluku', 'PA Tual'),
(539, 'Maluku', 'PA Masohi'),
(540, 'Maluku', 'PTUN Ambon'),
(541, 'Maluku', 'DILMIL III - 18 Di Ambon'),
(542, 'Maluku Utara', 'PT Maluku Utara'),
(543, 'Maluku Utara', 'PTA Maluku Utara'),
(544, 'Maluku Utara', 'PN Labuha'),
(545, 'Maluku Utara', 'PN Soa Siu'),
(546, 'Maluku Utara', 'PN Ternate'),
(547, 'Maluku Utara', 'PN Tobelo'),
(548, 'Maluku Utara', 'PA Soa Sio'),
(549, 'Maluku Utara', 'PA Ternate'),
(550, 'Maluku Utara', 'PA Labuhan Bacan'),
(551, 'Maluku Utara', 'PA Morotai'),
(552, 'Nusa Tenggara Barat', 'PT Mataram'),
(553, 'Nusa Tenggara Barat', 'PTA Mataram'),
(554, 'Nusa Tenggara Barat', 'PN Mataram'),
(555, 'Nusa Tenggara Barat', 'PN Praya'),
(556, 'Nusa Tenggara Barat', 'PN Raba/Bima'),
(557, 'Nusa Tenggara Barat', 'PN Selong'),
(558, 'Nusa Tenggara Barat', 'PN Sumbawa Besar'),
(559, 'Nusa Tenggara Barat', 'PN Dompu'),
(560, 'Nusa Tenggara Barat', 'PA Selong'),
(561, 'Nusa Tenggara Barat', 'PA Sumbawa'),
(562, 'Nusa Tenggara Barat', 'PA Taliwang'),
(563, 'Nusa Tenggara Barat', 'PA Bima'),
(564, 'Nusa Tenggara Barat', 'PA Dompu'),
(565, 'Nusa Tenggara Barat', 'PA Giri Menang'),
(566, 'Nusa Tenggara Barat', 'PA Mataram'),
(567, 'Nusa Tenggara Barat', 'PA Praya'),
(568, 'Nusa Tenggara Barat', 'PTUN Mataram'),
(572, 'Nusa Tenggara Timur', 'PT Kupang'),
(573, 'Nusa Tenggara Timur', 'PTA Kupang'),
(574, 'Nusa Tenggara Timur', 'PN Kupang'),
(575, 'Nusa Tenggara Timur', 'PN Labuan Bajo'),
(576, 'Nusa Tenggara Timur', 'PN Larantuka'),
(577, 'Nusa Tenggara Timur', 'PN Lembata'),
(578, 'Nusa Tenggara Timur', 'PN Maumere'),
(579, 'Nusa Tenggara Timur', 'PN Oelamasi'),
(580, 'Nusa Tenggara Timur', 'PN Rote Ndao'),
(581, 'Nusa Tenggara Timur', 'PN Ruteng'),
(582, 'Nusa Tenggara Timur', 'PN Atambua'),
(583, 'Nusa Tenggara Timur', 'PN Bajawa'),
(584, 'Nusa Tenggara Timur', 'PN Soe'),
(585, 'Nusa Tenggara Timur', 'PN Ende'),
(586, 'Nusa Tenggara Timur', 'PN Waikabubak'),
(587, 'Nusa Tenggara Timur', 'PN Waingapu'),
(588, 'Nusa Tenggara Timur', 'PN Kalabahi'),
(589, 'Nusa Tenggara Timur', 'PN Kefamenanu'),
(590, 'Nusa Tenggara Timur', 'PA Ruteng'),
(591, 'Nusa Tenggara Timur', 'PA Atambua'),
(592, 'Nusa Tenggara Timur', 'PA Bajawa'),
(593, 'Nusa Tenggara Timur', 'PA Soe'),
(594, 'Nusa Tenggara Timur', 'PA Waikabubak'),
(595, 'Nusa Tenggara Timur', 'PA Ende'),
(596, 'Nusa Tenggara Timur', 'PA Waingapu'),
(597, 'Nusa Tenggara Timur', 'PA Kalabahi'),
(598, 'Nusa Tenggara Timur', 'PA Kefamenanu'),
(599, 'Nusa Tenggara Timur', 'Pa Kupang'),
(600, 'Nusa Tenggara Timur', 'PA Labuan Bajo'),
(601, 'Nusa Tenggara Timur', 'PA Larantuka'),
(602, 'Nusa Tenggara Timur', 'PA Lewoleba'),
(603, 'Nusa Tenggara Timur', 'PA Meumere'),
(604, 'Nusa Tenggara Timur', 'PTUN Kupang'),
(605, 'Nusa Tenggara Timur', 'DILMIL III - 15 Di Kupang'),
(607, 'Papua', 'PT Jayapura'),
(608, 'Papua', 'PTA Jayapura'),
(609, 'Papua', 'PN Merauke'),
(610, 'Papua', 'PN Nabire'),
(611, 'Papua', 'PN Serui'),
(612, 'Papua', 'PN Biak'),
(613, 'Papua', 'PN Jayapura'),
(614, 'Papua', 'PN Wamena'),
(615, 'Papua', 'PN Kota Timika Kabupaten Mimika'),
(616, 'Papua', 'PA Sentani'),
(617, 'Papua', 'PA Serui'),
(618, 'Papua', 'PA Arso'),
(619, 'Papua', 'PA Biak'),
(620, 'Papua', 'PA Wamena'),
(621, 'Papua', 'PA Jayapura'),
(622, 'Papua', 'PA Merauke'),
(623, 'Papua', 'PA Mimika'),
(624, 'Papua', 'PA Nabire'),
(625, 'Papua', 'PA Paniai'),
(626, 'Papua', 'PTUN Jayapura'),
(627, 'Papua', 'DILMIL III - 19 Di Jayapura'),
(628, 'Papua Barat', 'PN Manokwari'),
(629, 'Papua Barat', 'PN Sorong'),
(630, 'Papua Barat', 'PN Fak Fak'),
(631, 'Papua Barat', 'PA Sorong'),
(632, 'Papua Barat', 'PA Fak Fak'),
(633, 'Papua Barat', 'PA Manokwari'),
(638, 'Riau', 'PT Pekanbaru'),
(639, 'Riau', 'PTA Pekanbaru'),
(640, 'Riau', 'PN Pasir Pagaraian'),
(641, 'Riau', 'PN Pekanbaru'),
(642, 'Riau', 'PN Pelalawan'),
(643, 'Riau', 'PN Rengat/Indragiri'),
(644, 'Riau', 'PN Rokan Hilir'),
(645, 'Riau', 'PN Siak Sri Indrapura'),
(646, 'Riau', 'PN Bangkinang'),
(647, 'Riau', 'PN Bengkalis'),
(648, 'Riau', 'PN Dumai'),
(649, 'Riau', 'PN Tembilahan'),
(650, 'Riau', 'PA Rengat'),
(651, 'Riau', 'PA Selat Panjang'),
(652, 'Riau', 'PA Bangkinang'),
(653, 'Riau', 'PA Bengkalis'),
(654, 'Riau', 'PA Tembilahan'),
(655, 'Riau', 'PA Ujung Tanjung'),
(656, 'Riau', 'PA Dumai'),
(657, 'Riau', 'PA Pangkalan Kerinci'),
(658, 'Riau', 'PA Pasir Pangarayan'),
(659, 'Riau', 'PA Pekanbaru'),
(660, 'Riau', 'PTUN Pekan Baru'),
(661, 'Sulawesi Barat', 'PN Majene'),
(662, 'Sulawesi Barat', 'PN Mamuju'),
(663, 'Sulawesi Barat', 'PN Pasangkayu'),
(664, 'Sulawesi Barat', 'PN Polewali'),
(665, 'Sulawesi Barat', 'PA Majene'),
(666, 'Sulawesi Barat', 'PA Mamuju'),
(667, 'Sulawesi Barat', 'PA Polewali'),
(668, 'Sulawesi Selatan', 'PT Makassar (Ujung Padang)'),
(669, 'Sulawesi Selatan', 'PTA Makassar'),
(670, 'Sulawesi Selatan', 'PTTUN Makassar (Ujung Padang)'),
(671, 'Sulawesi Selatan', 'PN Makale'),
(672, 'Sulawesi Selatan', 'PN Malili'),
(673, 'Sulawesi Selatan', 'PN Maros'),
(674, 'Sulawesi Selatan', 'PN Masamba'),
(675, 'Sulawesi Selatan', 'PN Palopo'),
(676, 'Sulawesi Selatan', 'PN Pangkajene'),
(677, 'Sulawesi Selatan', 'PN Pare-Pare'),
(678, 'Sulawesi Selatan', 'PN Pinrang'),
(679, 'Sulawesi Selatan', 'PN Selayar'),
(680, 'Sulawesi Selatan', 'PN Sengkang'),
(681, 'Sulawesi Selatan', 'PN Sindereng Rappang (Sidrap)'),
(682, 'Sulawesi Selatan', 'PN Bantaeng'),
(683, 'Sulawesi Selatan', 'PN Sinjai'),
(684, 'Sulawesi Selatan', 'PN Barru'),
(685, 'Sulawesi Selatan', 'PN Sungguminasa'),
(686, 'Sulawesi Selatan', 'PN Takalar'),
(687, 'Sulawesi Selatan', 'PN Bulukumba'),
(688, 'Sulawesi Selatan', 'PN Bulukumba'),
(689, 'Sulawesi Selatan', 'PN Enrekang'),
(690, 'Sulawesi Selatan', 'PN Makassar (Ujung Padang)'),
(691, 'Sulawesi Selatan', 'PN Jeneponto'),
(692, 'Sulawesi Selatan', 'PN Watampone'),
(693, 'Sulawesi Selatan', 'PN Watansoppeng'),
(694, 'Sulawesi Selatan', 'PA Selayar'),
(695, 'Sulawesi Selatan', 'PA Sengkang'),
(696, 'Sulawesi Selatan', 'PA Sindereng Rappang (Sidrap)'),
(697, 'Sulawesi Selatan', 'PA Sinjai'),
(698, 'Sulawesi Selatan', 'PA Bantaeng'),
(699, 'Sulawesi Selatan', 'PA Barru'),
(700, 'Sulawesi Selatan', 'PA Sungguminasa'),
(701, 'Sulawesi Selatan', 'PA Takalar'),
(702, 'Sulawesi Selatan', 'PA Bulukumba'),
(703, 'Sulawesi Selatan', 'PA Makassar (Ujung Padang)'),
(704, 'Sulawesi Selatan', 'PA Enrekang'),
(705, 'Sulawesi Selatan', 'PA Watampone'),
(706, 'Sulawesi Selatan', 'PA Watansoppeng'),
(707, 'Sulawesi Selatan', 'PA Jenneponto'),
(708, 'Sulawesi Selatan', 'PA Makale'),
(709, 'Sulawesi Selatan', 'PA Maros'),
(710, 'Sulawesi Selatan', 'PA Masamba'),
(711, 'Sulawesi Selatan', 'PA Palopo'),
(712, 'Sulawesi Selatan', 'PA Pangkajene'),
(713, 'Sulawesi Selatan', 'PA Pare Pare'),
(714, 'Sulawesi Selatan', 'PA Pinrang'),
(715, 'Sulawesi Selatan', 'PTUN Makassar (Ujung Padang)'),
(716, 'Sulawesi Selatan', 'DILMIL III - 16 Di Makassar'),
(718, 'Sulawesi Tengah', 'PT Palu'),
(719, 'Sulawesi Tengah', 'PTA Palu'),
(720, 'Sulawesi Tengah', 'PN Luwuk'),
(721, 'Sulawesi Tengah', 'PN Palu'),
(722, 'Sulawesi Tengah', 'PN Parigi'),
(723, 'Sulawesi Tengah', 'PN Poso'),
(724, 'Sulawesi Tengah', 'PN Buol'),
(725, 'Sulawesi Tengah', 'PN Donggala'),
(726, 'Sulawesi Tengah', 'PN Toli-Toli'),
(727, 'Sulawesi Tengah', 'PA Banggai'),
(728, 'Sulawesi Tengah', 'PA Bungku'),
(729, 'Sulawesi Tengah', 'PA Buol'),
(730, 'Sulawesi Tengah', 'PA Toli Toli'),
(731, 'Sulawesi Tengah', 'PA Kodya Palu'),
(732, 'Sulawesi Tengah', 'PA Luwuk'),
(733, 'Sulawesi Tengah', 'PA Palu Donggala'),
(734, 'Sulawesi Tengah', 'PA Parigi'),
(735, 'Sulawesi Tengah', 'PA Poso'),
(736, 'Sulawesi Tengah', 'PTUN Palu'),
(738, 'Sulawesi Tenggara', 'PT Kendari'),
(739, 'Sulawesi Tenggara', 'PTA Kendari'),
(740, 'Sulawesi Tenggara', 'PN Pasarwajo'),
(741, 'Sulawesi Tenggara', 'PN Raha'),
(742, 'Sulawesi Tenggara', 'PN Andoolo'),
(743, 'Sulawesi Tenggara', 'PN Bau-Bau'),
(744, 'Sulawesi Tenggara', 'PN Una Aha'),
(745, 'Sulawesi Tenggara', 'PN Kendari'),
(746, 'Sulawesi Tenggara', 'PN Kolaka'),
(747, 'Sulawesi Tenggara', 'PA Raha'),
(748, 'Sulawesi Tenggara', 'PA Andoolo'),
(749, 'Sulawesi Tenggara', 'PA Bau-Bau'),
(750, 'Sulawesi Tenggara', 'PA Unaaha'),
(751, 'Sulawesi Tenggara', 'PA Kendari'),
(752, 'Sulawesi Tenggara', 'PA Kolaka'),
(753, 'Sulawesi Tenggara', 'PA Pasarwajo'),
(754, 'Sulawesi Tenggara', 'PTUN Kendari'),
(758, 'Sulawesi Utara', 'PT Manado'),
(759, 'Sulawesi Utara', 'PTA Manado'),
(760, 'Sulawesi Utara', 'PN Kotamubago'),
(761, 'Sulawesi Utara', 'PN Manado'),
(762, 'Sulawesi Utara', 'PN Airmadidi'),
(763, 'Sulawesi Utara', 'PN Amurang'),
(764, 'Sulawesi Utara', 'PN Bitung'),
(765, 'Sulawesi Utara', 'PN Tahuna'),
(766, 'Sulawesi Utara', 'PN Tondano'),
(767, 'Sulawesi Utara', 'PA Amurang'),
(768, 'Sulawesi Utara', 'PA Tahuna'),
(769, 'Sulawesi Utara', 'PA Bitung'),
(770, 'Sulawesi Utara', 'PA Tondano'),
(771, 'Sulawesi Utara', 'PA Kotamubagu'),
(772, 'Sulawesi Utara', 'PA Manado'),
(773, 'Sulawesi Utara', 'PTUN Manado'),
(774, 'Sulawesi Utara', 'DILMIL III - 17 Di Manado'),
(778, 'Sumatera Barat', 'PT Padang'),
(779, 'Sumatera Barat', 'PTA Padang'),
(780, 'Sumatera Barat', 'PN Kotobaru'),
(781, 'Sumatera Barat', 'PN Lubuk Basung'),
(782, 'Sumatera Barat', 'PN Lubuk Sikaping'),
(783, 'Sumatera Barat', 'PN Muaro'),
(784, 'Sumatera Barat', 'PN Padang'),
(785, 'Sumatera Barat', 'PN Padang Panjang'),
(786, 'Sumatera Barat', 'PN Painan'),
(787, 'Sumatera Barat', 'PN Pariaman'),
(788, 'Sumatera Barat', 'PN Pasaman Barat'),
(789, 'Sumatera Barat', 'PN Payakumbuh'),
(790, 'Sumatera Barat', 'PN Sawahlunto'),
(791, 'Sumatera Barat', 'PN Solok'),
(792, 'Sumatera Barat', 'PN Batusangkar'),
(793, 'Sumatera Barat', 'PN Bukittinggi'),
(794, 'Sumatera Barat', 'PN Tanjung Pati'),
(795, 'Sumatera Barat', 'PA Sawahlunto'),
(796, 'Sumatera Barat', 'PA Lubuk Basung'),
(797, 'Sumatera Barat', 'PA Sijunjung'),
(798, 'Sumatera Barat', 'PA Solok'),
(799, 'Sumatera Barat', 'PA Batusangkar'),
(800, 'Sumatera Barat', 'PA Talu'),
(801, 'Sumatera Barat', 'PA Tanjung Pati'),
(802, 'Sumatera Barat', 'PA Bukittinggi'),
(803, 'Sumatera Barat', 'PA Koto Baru'),
(804, 'Sumatera Barat', 'PA Lubuk Sikaping'),
(805, 'Sumatera Barat', 'PA Maninjau'),
(806, 'Sumatera Barat', 'PA Muara Labuh'),
(807, 'Sumatera Barat', 'PA Padang'),
(808, 'Sumatera Barat', 'PA Padang Panjang'),
(809, 'Sumatera Barat', 'PA Painan'),
(810, 'Sumatera Barat', 'PA Pariaman'),
(811, 'Sumatera Barat', 'PA Payakumbuh'),
(812, 'Sumatera Barat', 'PTUN Padang'),
(813, 'Sumatera Barat', 'DILMIL I - 03 Di Padang'),
(818, 'Sumatera Selatan', 'PT Palembang'),
(819, 'Sumatera Selatan', 'PTA Palembang'),
(820, 'Sumatera Selatan', 'PN Lahat'),
(821, 'Sumatera Selatan', 'PN Lubuk Lingau'),
(822, 'Sumatera Selatan', 'PN Muara Enim'),
(823, 'Sumatera Selatan', 'PN Pagar Alam'),
(824, 'Sumatera Selatan', 'PN Palembang'),
(825, 'Sumatera Selatan', 'PN Prabumulih'),
(826, 'Sumatera Selatan', 'PN Sekayu'),
(827, 'Sumatera Selatan', 'PN Baturaja'),
(828, 'Sumatera Selatan', 'PN Kayuagung'),
(829, 'Sumatera Selatan', 'PA Sekayu'),
(830, 'Sumatera Selatan', 'PA Baturaja'),
(831, 'Sumatera Selatan', 'PA Kayu Agung'),
(832, 'Sumatera Selatan', 'PA Lahat'),
(833, 'Sumatera Selatan', 'PA Lubuk Linggau'),
(834, 'Sumatera Selatan', 'PA Muara Enim'),
(835, 'Sumatera Selatan', 'PA Palembang'),
(836, 'Sumatera Selatan', 'PTUN Palembang'),
(837, 'Sumatera Selatan', 'DILMIL I - 04 Di Palembang'),
(838, 'Sumatera Utara', 'PT Medan'),
(839, 'Sumatera Utara', 'PTA Medan'),
(840, 'Sumatera Utara', 'PTTUN Medan'),
(841, 'Sumatera Utara', 'DILMIL TI I Medan'),
(842, 'Sumatera Utara', 'PN Lubuk Pakam'),
(843, 'Sumatera Utara', 'PN Mandailing Natal'),
(844, 'Sumatera Utara', 'PN Medan'),
(845, 'Sumatera Utara', 'PN Padang Sidempuan'),
(846, 'Sumatera Utara', 'PN Pematang Siantar'),
(847, 'Sumatera Utara', 'PN Rantau Prapat'),
(848, 'Sumatera Utara', 'PN Balige'),
(849, 'Sumatera Utara', 'PN Sibolga'),
(850, 'Sumatera Utara', 'PN Sidikalang'),
(851, 'Sumatera Utara', 'PN Simalungun'),
(852, 'Sumatera Utara', 'PN Stabat'),
(853, 'Sumatera Utara', 'PN Binjai'),
(854, 'Sumatera Utara', 'PN Tanjung Balai Asahan'),
(855, 'Sumatera Utara', 'PN Tarutung'),
(856, 'Sumatera Utara', 'PN Tebing Tinggi'),
(857, 'Sumatera Utara', 'PN Gunung Sitoli'),
(858, 'Sumatera Utara', 'PN Kabanjahe'),
(859, 'Sumatera Utara', 'PN Kisaran'),
(860, 'Sumatera Utara', 'PA Rantau Prapat'),
(861, 'Sumatera Utara', 'PA Sibolga'),
(862, 'Sumatera Utara', 'PA Sidikalang'),
(863, 'Sumatera Utara', 'PA Simalungun'),
(864, 'Sumatera Utara', 'PA Balige'),
(865, 'Sumatera Utara', 'PA Stabat'),
(866, 'Sumatera Utara', 'PA Binjai'),
(867, 'Sumatera Utara', 'PA Tanjung Balai'),
(868, 'Sumatera Utara', 'PA Turutung'),
(869, 'Sumatera Utara', 'PA Tebing Tinggi'),
(870, 'Sumatera Utara', 'PA Gunung Sitoli'),
(871, 'Sumatera Utara', 'PA Kabanjahe'),
(872, 'Sumatera Utara', 'PA Kisaran'),
(873, 'Sumatera Utara', 'PA Kota Padang Sidempuan'),
(874, 'Sumatera Utara', 'PA Lubuk Pakam'),
(875, 'Sumatera Utara', 'PA Medan'),
(876, 'Sumatera Utara', 'PA Padang Sidempuan'),
(877, 'Sumatera Utara', 'PA Pandan'),
(878, 'Sumatera Utara', 'PA Panyabungan'),
(879, 'Sumatera Utara', 'PA Pematang Siantar'),
(880, 'Sumatera Utara', 'PTUN Medan'),
(881, 'Sumatera Utara', 'DILMIL I - 02 Di Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Ketua'),
(2, 'Kepala'),
(3, 'Wakil Ketua'),
(4, 'Hakim'),
(5, 'Wakil Kepala'),
(6, 'Calon Hakim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE IF NOT EXISTS `jenjang` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`id`, `jenjang`) VALUES
(1, 'Diploma III'),
(2, 'Diploma IV'),
(3, 'Sarjana I/Sarjana'),
(4, 'Sarjana II/Magister'),
(5, 'Sarjana III/Doktor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
`no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `propinsi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kabupaten` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=511 ;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`no`, `id`, `propinsi`, `kabupaten`) VALUES
(1, 1, 'Aceh', 'Kabupaten Aceh Barat'),
(2, 1, 'Aceh', 'Kabupaten Aceh Barat Daya'),
(3, 1, 'Aceh', 'Kabupaten Aceh Besar'),
(4, 1, 'Aceh', 'Kabupaten Aceh Jaya'),
(5, 1, 'Aceh', 'Kabupaten Aceh Selatan'),
(6, 1, 'Aceh', 'Kabupaten Aceh Singkil'),
(7, 1, 'Aceh', 'Kabupaten Aceh Tamiang'),
(8, 1, 'Aceh', 'Kabupaten Aceh Tengah'),
(9, 1, 'Aceh', 'Kabupaten Aceh Tenggara'),
(10, 1, 'Aceh', 'Kabupaten Aceh Timur'),
(11, 1, 'Aceh', 'Kabupaten Aceh Utara'),
(12, 1, 'Aceh', 'Kabupaten Bener Meriah'),
(13, 1, 'Aceh', 'Kabupaten Bireuen'),
(14, 1, 'Aceh', 'Kabupaten Gaya Lues'),
(15, 1, 'Aceh', 'Kabupaten Nagan Raya'),
(16, 1, 'Aceh', 'Kabupaten Pidie'),
(17, 1, 'Aceh', 'Kabupaten Pidie Jaya'),
(18, 1, 'Aceh', 'Kabupaten Simeulue'),
(19, 1, 'Aceh', 'Kota Banda Aceh'),
(20, 1, 'Aceh', 'Kota Langsa'),
(21, 1, 'Aceh', 'Kota Lhokseumawe'),
(22, 1, 'Aceh', 'Kota Sabang'),
(23, 1, 'Aceh', 'Kota Subulussalam'),
(24, 2, 'Bali', 'Kabupaten Bandung'),
(25, 2, 'Bali', 'Kabupaten Bangli'),
(26, 2, 'Bali', 'Kabupaten Buleleng'),
(27, 2, 'Bali', 'Kabupaten Gianyar'),
(28, 2, 'Bali', 'Kabupaten Jembrana'),
(29, 2, 'Bali', 'Kabupaten Karang Asem'),
(30, 2, 'Bali', 'Kabupaten Klungkung'),
(31, 2, 'Bali', 'Kabupaten Tabanan'),
(32, 2, 'Bali', 'Kota Denpasar'),
(33, 3, 'Banten', 'Kabupaten Lebak'),
(34, 3, 'Banten', 'Kabupaten Pandeglang'),
(35, 3, 'Banten', 'Kabupaten Serang'),
(36, 3, 'Banten', 'Kabupaten Tangerang'),
(37, 3, 'Banten', 'Kota Cilegon'),
(38, 3, 'Banten', 'Kota Serang'),
(39, 3, 'Banten', 'Kota Tangerang'),
(40, 3, 'Banten', 'Kota Tangerang Selatan'),
(41, 4, 'Bengkulu', 'Kabupaten Bengkulu Selatan'),
(42, 4, 'Bengkulu', 'Kabupaten Bengkulu Tengah'),
(43, 4, 'Bengkulu', 'Kabupaten Bengkulu Utara'),
(44, 4, 'Bengkulu', 'Kabupaten Kaur'),
(45, 4, 'Bengkulu', 'Kabupaten Kepahiang'),
(46, 4, 'Bengkulu', 'Kabupaten Lebong'),
(47, 4, 'Bengkulu', 'Kabupaten Mukomuko'),
(48, 4, 'Bengkulu', 'Kabupaten Rejang Lebong'),
(49, 4, 'Bengkulu', 'Kabupaten Seluma'),
(50, 4, 'Bengkulu', 'Kota Bengkulu'),
(51, 5, 'DI Yogyakarta', 'Kabupaten Bantul'),
(52, 5, 'DI Yogyakarta', 'Kabupaten Gunung Kidul'),
(53, 5, 'DI Yogyakarta', 'Kabupaten Kulon Progo'),
(54, 5, 'DI Yogyakarta', 'Kabupaten Sleman'),
(55, 5, 'DI Yogyakarta', 'Kota Yogyakarta'),
(56, 6, 'DKI Jakarta', 'Kabupaten Kepulauan Seribu'),
(57, 6, 'DKI Jakarta', 'Kota Jakarta Barat'),
(58, 6, 'DKI Jakarta', 'Kota Jakarta Pusat'),
(59, 6, 'DKI Jakarta', 'Kota Jakarta Selatan'),
(60, 6, 'DKI Jakarta', 'Kota Jakarta Timur'),
(61, 6, 'DKI Jakarta', 'Kota Jakarta Utara'),
(62, 7, 'Gorontalo', 'Kabupaten Boalemo'),
(63, 7, 'Gorontalo', 'Kabupaten Bone Bolango'),
(64, 7, 'Gorontalo', 'Kabupaten Gorontalo'),
(65, 7, 'Gorontalo', 'Kota Gorontalo Utara'),
(66, 7, 'Gorontalo', 'Kabupaten Pohuwato'),
(67, 7, 'Gorontalo', 'Kota Gorontalo'),
(68, 8, 'Jambi', 'Kabupaten Batang Hari'),
(69, 8, 'Jambi', 'Kabupaten Bungo'),
(70, 8, 'Jambi', 'Kabupaten Kerinci'),
(71, 8, 'Jambi', 'Kabupaten Merangin'),
(72, 8, 'Jambi', 'Kabupaten Muaro Jambi'),
(73, 8, 'Jambi', 'Kabupaten Sarolangun'),
(74, 8, 'Jambi', 'Kabupaten Tanjung Jabung Barat'),
(75, 8, 'Jambi', 'Kabupaten Tanjung Jabung Timur'),
(76, 8, 'Jambi', 'Kabupaten Tebo'),
(77, 8, 'Jambi', 'Kota Jambi'),
(78, 8, 'Jambi', 'Kota Sungai Penuh'),
(79, 9, 'Jawa Barat', 'Kabupaten Bandung'),
(80, 9, 'Jawa Barat', 'Kabupaten Bandung Barat'),
(81, 9, 'Jawa Barat', 'Kabupaten Bekasi'),
(82, 9, 'Jawa Barat', 'Kabupaten Bogor'),
(83, 9, 'Jawa Barat', 'Kabupaten Ciamis'),
(84, 9, 'Jawa Barat', 'Kabupaten Cianjur'),
(85, 9, 'Jawa Barat', 'Kabupaten Cirebon'),
(86, 9, 'Jawa Barat', 'Kabupaten Garut'),
(87, 9, 'Jawa Barat', 'Kabupaten Indramayu'),
(88, 9, 'Jawa Barat', 'Kabupaten Kerawang'),
(89, 9, 'Jawa Barat', 'Kabupaten Kuningan'),
(90, 9, 'Jawa Barat', 'Kabupaten Majalengka'),
(91, 9, 'Jawa Barat', 'Kabupaten Pangandaran'),
(92, 9, 'Jawa Barat', 'Kabupaten Purwakarta'),
(93, 9, 'Jawa Barat', 'Kabupaten Subang'),
(94, 9, 'Jawa Barat', 'Kabupaten Sukabumi'),
(95, 9, 'Jawa Barat', 'Kabupaten Sumedang'),
(96, 9, 'Jawa Barat', 'Kabupaten Tasikmalaya'),
(97, 9, 'Jawa Barat', 'Kota Bandung'),
(98, 9, 'Jawa Barat', 'Kota Banjar'),
(99, 9, 'Jawa Barat', 'Kota Bekasi'),
(100, 9, 'Jawa Barat', 'Kota Bogor'),
(101, 9, 'Jawa Barat', 'Kota Cimahi'),
(102, 9, 'Jawa Barat', 'Kota Cirebon'),
(103, 9, 'Jawa Barat', 'Kota Depok'),
(104, 9, 'Jawa Barat', 'Kota Sukabumi'),
(105, 9, 'Jawa Barat', 'Kota Tasikmalaya'),
(106, 10, 'Jawa Tengah', 'Kabupaten Banjarnegara'),
(107, 10, 'Jawa Tengah', 'Kabupaten Banyumas/Purwokerto'),
(108, 10, 'Jawa Tengah', 'Kabupaten Batang'),
(109, 10, 'Jawa Tengah', 'Kabupaten Blora'),
(110, 10, 'Jawa Tengah', 'Kabupaten Boyolali'),
(111, 10, 'Jawa Tengah', 'Kabupaten Brebes'),
(112, 10, 'Jawa Tengah', 'Kabupaten Cilacap'),
(113, 10, 'Jawa Tengah', 'Kabupaten Demak'),
(114, 10, 'Jawa Tengah', 'Kabupaten Grobongan'),
(115, 10, 'Jawa Tengah', 'Kabupaten Jepara'),
(116, 10, 'Jawa Tengah', 'Kabupaten Karanganyar'),
(117, 10, 'Jawa Tengah', 'Kabupaten Kebumen'),
(118, 10, 'Jawa Tengah', 'Kabupaten Kendal'),
(119, 10, 'Jawa Tengah', 'Kabupaten Klaten'),
(120, 10, 'Jawa Tengah', 'Kabupaten Kudus'),
(121, 10, 'Jawa Tengah', 'Kabupaten Magelang'),
(122, 10, 'Jawa Tengah', 'Kabupaten Pati'),
(123, 10, 'Jawa Tengah', 'Kabupaten Pekalongan'),
(124, 10, 'Jawa Tengah', 'Kabupaten Pemalang'),
(125, 10, 'Jawa Tengah', 'Kabupaten Purbalingga'),
(126, 10, 'Jawa Tengah', 'Kabupaten Purworejo'),
(127, 10, 'Jawa Tengah', 'Kabupaten Rembang'),
(128, 10, 'Jawa Tengah', 'Kabupaten Semarang'),
(129, 10, 'Jawa Tengah', 'Kabupaten Sragen'),
(130, 10, 'Jawa Tengah', 'Kabupaten Sukoharjo'),
(131, 10, 'Jawa Tengah', 'Kabupaten Tegal'),
(132, 10, 'Jawa Tengah', 'Kabupaten Temanggung'),
(133, 10, 'Jawa Tengah', 'Kabupaten Wonogiri'),
(134, 10, 'Jawa Tengah', 'Kabupaten Wonosobo'),
(135, 10, 'Jawa Tengah', 'Kota Magelang'),
(136, 10, 'Jawa Tengah', 'Kota Pekalongan'),
(137, 11, 'Jawa Timur', 'Kabupaten Bangkalan'),
(138, 11, 'Jawa Timur', 'Kabupaten Bayuwangi'),
(139, 11, 'Jawa Timur', 'Kabupaten Blitar'),
(140, 11, 'Jawa Timur', 'Kabupaten Bojonegoro'),
(141, 11, 'Jawa Timur', 'Kabupaten Bondowoso'),
(142, 11, 'Jawa Timur', 'Kabupaten Gresik'),
(143, 11, 'Jawa Timur', 'Kabupaten Jember'),
(144, 11, 'Jawa Timur', 'Kabupaten Jombang'),
(145, 11, 'Jawa Timur', 'Kabupaten Kediri'),
(146, 11, 'Jawa Timur', 'Kabupaten Lamongan'),
(147, 11, 'Jawa Timur', 'Kabupaten Lumajang'),
(148, 11, 'Jawa Timur', 'Kabupaten Madiun'),
(149, 11, 'Jawa Timur', 'Kabupaten Magetan'),
(150, 11, 'Jawa Timur', 'Kabupaten Malang'),
(151, 11, 'Jawa Timur', 'Kabupaten Mojokerto'),
(152, 11, 'Jawa Timur', 'Kabupaten Nganjuk'),
(153, 11, 'Jawa Timur', 'Kabupaten Ngawi'),
(154, 11, 'Jawa Timur', 'Kabupaten Pacitan'),
(155, 11, 'Jawa Timur', 'Kabupaten Pamekasan'),
(156, 11, 'Jawa Timur', 'Kabupaten Pasuruan'),
(157, 11, 'Jawa Timur', 'Kabupaten Ponorogo'),
(158, 11, 'Jawa Timur', 'Kabupaten Probolinggo'),
(159, 11, 'Jawa Timur', 'Kabupaten Sampang'),
(160, 11, 'Jawa Timur', 'Kabupaten Sidoarjo'),
(161, 11, 'Jawa Timur', 'Kabupaten Situbondo'),
(162, 11, 'Jawa Timur', 'Kabupaten Sumenep'),
(163, 11, 'Jawa Timur', 'Kabupaten Trenggalek'),
(164, 11, 'Jawa Timur', 'Kabupaten Tuban'),
(165, 11, 'Jawa Timur', 'Kabupaten Tulungagung'),
(166, 11, 'Jawa Timur', 'Kota Batu'),
(167, 11, 'Jawa Timur', 'Kota Blitar'),
(168, 11, 'Jawa Timur', 'Kota Kediri'),
(169, 11, 'Jawa Timur', 'Kota Madiun'),
(170, 11, 'Jawa Timur', 'Kota Malang'),
(171, 11, 'Jawa Timur', 'Kota Mojokerto'),
(172, 11, 'Jawa Timur', 'Kota Pasuruan'),
(173, 11, 'Jawa Timur', 'Kota Probolinggo'),
(174, 11, 'Jawa Timur', 'Kota Surabaya'),
(175, 12, 'Kalimantan Barat', 'Kabupaten Bengkayang'),
(176, 12, 'Kalimantan Barat', 'Kabupaten Kapuas Hulu'),
(177, 12, 'Kalimantan Barat', 'Kabupaten Kayong Utara'),
(178, 12, 'Kalimantan Barat', 'Kabupaten Ketapang'),
(179, 12, 'Kalimantan Barat', 'Kabupaten Kubu Raya'),
(180, 12, 'Kalimantan Barat', 'Kabupaten Landak'),
(181, 12, 'Kalimantan Barat', 'Kabupaten Melawi'),
(182, 12, 'Kalimantan Barat', 'Kabupaten Mempawah'),
(183, 12, 'Kalimantan Barat', 'Kabupaten Sambas'),
(184, 12, 'Kalimantan Barat', 'Kabupaten Sanggau'),
(185, 12, 'Kalimantan Barat', 'Kabupaten Sekadau'),
(186, 12, 'Kalimantan Barat', 'Kabupaten Sintang'),
(187, 12, 'Kalimantan Barat', 'Kota Pontianak'),
(188, 12, 'Kalimantan Barat', 'Kota Singkawang'),
(189, 13, 'Kalimantan Selatan', 'Kabupaten Balangan'),
(190, 13, 'Kalimantan Selatan', 'Kabupaten Banjar'),
(191, 13, 'Kalimantan Selatan', 'Kabupaten Barito Kuala'),
(192, 13, 'Kalimantan Selatan', 'Kabupaten Hulu Sungai Selatan'),
(193, 13, 'Kalimantan Selatan', 'Kabupaten Hulu Sungai Tengah'),
(194, 13, 'Kalimantan Selatan', 'Kabupaten Hulu Sungai Utara'),
(195, 13, 'Kalimantan Selatan', 'Kabupaten Kota Baru'),
(196, 13, 'Kalimantan Selatan', 'Kabupaten Tabalong'),
(197, 13, 'Kalimantan Selatan', 'Kabupaten Tanah Bumbu'),
(198, 13, 'Kalimantan Selatan', 'Kabupaten Tanah Laut'),
(199, 13, 'Kalimantan Selatan', 'Kabupaten Tapin'),
(200, 13, 'Kalimantan Selatan', 'Kota Banjar Baru'),
(201, 13, 'Kalimantan Selatan', 'Kota Banjarmasin'),
(202, 14, 'Kalimantan Tengah', 'Kabupaten Barito Selatan'),
(203, 14, 'Kalimantan Tengah', 'Kabupaten Barito Timur'),
(204, 14, 'Kalimantan Tengah', 'Kabupaten Barito Utara'),
(205, 14, 'Kalimantan Tengah', 'Kabupaten Gunung Mas'),
(206, 14, 'Kalimantan Tengah', 'Kabupaten Kapuas'),
(207, 14, 'Kalimantan Tengah', 'Kabupaten Katingan'),
(208, 14, 'Kalimantan Tengah', 'Kabupaten Kotawaringin Barat'),
(209, 14, 'Kalimantan Tengah', 'Kabupaten Kotawaringin Timur'),
(210, 14, 'Kalimantan Tengah', 'Kabupaten Lamandau'),
(211, 14, 'Kalimantan Tengah', 'Kabupaten Murung Raya'),
(212, 14, 'Kalimantan Tengah', 'Kabupaten Pulang Pisau'),
(213, 14, 'Kalimantan Tengah', 'Kabupaten Seruyan'),
(214, 14, 'Kalimantan Tengah', 'Kabupaten Sukamara'),
(215, 14, 'Kalimantan Tengah', 'Kota Palangka Raya'),
(216, 15, 'Kalimantan Timur', 'Kabupaten Berau'),
(217, 15, 'Kalimantan Timur', 'Kabupaten Kutai Barat'),
(218, 15, 'Kalimantan Timur', 'Kabupaten Kutai Kartanegara'),
(219, 15, 'Kalimantan Timur', 'Kabupaten Kutai Timur'),
(220, 15, 'Kalimantan Timur', 'Kabupaten Mahakam Hulu'),
(221, 15, 'Kalimantan Timur', 'Kabupaten Paser'),
(222, 15, 'Kalimantan Timur', 'Kabupaten Penajam Paser Utara'),
(223, 15, 'Kalimantan Timur', 'Kota Balikpapan'),
(224, 15, 'Kalimantan Timur', 'Kota Bontang'),
(225, 15, 'Kalimantan Timur', 'Kota Samarinda'),
(226, 16, 'Kalimantan Utara', 'Kabupaten Bulungan'),
(227, 16, 'Kalimantan Utara', 'Kabupaten Malinau'),
(228, 16, 'Kalimantan Utara', 'Kabupaten Nunukan'),
(229, 16, 'Kalimantan Utara', 'Kabupaten Tana Tidung'),
(230, 16, 'Kalimantan Utara', 'Kota Tarakan'),
(231, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Bangka'),
(232, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Bangka Barat'),
(233, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Bangka Selatan'),
(234, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Bangka Tengah'),
(235, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Belitung'),
(236, 17, 'Kepulauan Bangka Belitung', 'Kabupaten Belitung Timur'),
(237, 17, 'Kepulauan Bangka Belitung', 'Kota Pangkal Pinang'),
(238, 18, 'Kepulauan Riau', 'Kabupaten Bintan'),
(239, 18, 'Kepulauan Riau', 'Kabupaten Karimun'),
(240, 18, 'Kepulauan Riau', 'Kabupaten Kepulauan Anambas'),
(241, 18, 'Kepulauan Riau', 'Kabupaten Lingga'),
(242, 18, 'Kepulauan Riau', 'Kabupaten Natuna'),
(243, 18, 'Kepulauan Riau', 'Kota Batam'),
(244, 18, 'Kepulauan Riau', 'Kota Tanjung Pinang'),
(245, 19, 'Lampung', 'Kabupaten Lampung Barat'),
(246, 19, 'Lampung', 'Kabupaten Lampung Selatan'),
(247, 19, 'Lampung', 'Kabupaten Lampung Tengah'),
(248, 19, 'Lampung', 'Kabupaten Lampung Timur'),
(249, 19, 'Lampung', 'Kabupaten Lampung Utara'),
(250, 19, 'Lampung', 'Kabupaten Mesuji'),
(251, 19, 'Lampung', 'Kabupaten Pasawaran'),
(252, 19, 'Lampung', 'Kabupaten Pesisir Barat'),
(253, 19, 'Lampung', 'Kabupaten Pringsewu'),
(254, 19, 'Lampung', 'Kabupaten Tanggamus'),
(255, 19, 'Lampung', 'Kabupaten Tulang Bawang Barat'),
(256, 19, 'Lampung', 'Kabupaten Tulangbawang'),
(257, 19, 'Lampung', 'Kabupaten Way Kanan'),
(258, 19, 'Lampung', 'Kota Bandar Lampung'),
(259, 19, 'Lampung', 'Kota Metro'),
(260, 20, 'Maluku', 'Kabupaten Buru'),
(261, 20, 'Maluku', 'Kabupaten Buru Selatan'),
(262, 20, 'Maluku', 'Kabupaten Kepulauan Aru'),
(263, 20, 'Maluku', 'Kabupaten Maluku Barat Daya'),
(264, 20, 'Maluku', 'Kabupaten Maluku Tengah'),
(265, 20, 'Maluku', 'Kabupaten Maluku Tenggara'),
(266, 20, 'Maluku', 'Kabupaten Maluku Tenggara Barat'),
(267, 20, 'Maluku', 'Kabupaten Seram Bagian Barat'),
(268, 20, 'Maluku', 'Kabupaten Seram Bagian Timur'),
(269, 20, 'Maluku', 'Kota Ambon'),
(270, 20, 'Maluku', 'Kota Tual'),
(271, 21, 'Maluku Utara', 'Kabupaten Halmahera Barat'),
(272, 21, 'Maluku Utara', 'Kabupaten Halmahera Selatan'),
(273, 21, 'Maluku Utara', 'Kabupaten Halmahera Tengah'),
(274, 21, 'Maluku Utara', 'Kabupaten Halmahera Timur'),
(275, 21, 'Maluku Utara', 'Kabupaten Halmahera Utara'),
(276, 21, 'Maluku Utara', 'Kabupaten Kepulauan Sula'),
(277, 21, 'Maluku Utara', 'Kabupaten Pulau Morotai'),
(278, 21, 'Maluku Utara', 'Kabupaten Pulau Taliabu'),
(279, 21, 'Maluku Utara', 'Kota Ternate'),
(280, 21, 'Maluku Utara', 'Kota Tidore Kepulauan'),
(281, 22, 'Nusa Tenggara Barat', 'Kabupaten Bima'),
(282, 22, 'Nusa Tenggara Barat', 'Kabupaten Dompu'),
(283, 22, 'Nusa Tenggara Barat', 'Kabupaten Lombok Barat'),
(284, 22, 'Nusa Tenggara Barat', 'Kabupaten Lombok Tengah'),
(285, 22, 'Nusa Tenggara Barat', 'Kabupaten Lombok Timur'),
(286, 22, 'Nusa Tenggara Barat', 'Kabupaten Lombok Utara'),
(287, 22, 'Nusa Tenggara Barat', 'Kabupaten Sumbawa'),
(288, 22, 'Nusa Tenggara Barat', 'Kabupaten Sumbawa Barat'),
(289, 22, 'Nusa Tenggara Barat', 'Kota Bima'),
(290, 22, 'Nusa Tenggara Barat', 'Kota Mataram'),
(291, 23, 'Nusa Tenggara Timur', 'Kabupaten Alor'),
(292, 23, 'Nusa Tenggara Timur', 'Kabupaten Belu'),
(293, 23, 'Nusa Tenggara Timur', 'Kabupaten Ende'),
(294, 23, 'Nusa Tenggara Timur', 'Kabupaten Flores Timur'),
(295, 23, 'Nusa Tenggara Timur', 'Kabupaten Kupang'),
(296, 23, 'Nusa Tenggara Timur', 'Kabupaten Lembata'),
(297, 23, 'Nusa Tenggara Timur', 'Kabupaten Malaka'),
(298, 23, 'Nusa Tenggara Timur', 'Kabupaten Manggarai'),
(299, 23, 'Nusa Tenggara Timur', 'Kabupaten Manggarai Barat'),
(300, 23, 'Nusa Tenggara Timur', 'Kabupaten Manggarai Timur'),
(301, 23, 'Nusa Tenggara Timur', 'Kabupaten Nagekeo'),
(302, 23, 'Nusa Tenggara Timur', 'Kabupaten Ngada'),
(303, 23, 'Nusa Tenggara Timur', 'Kabupaten Rote Ndao'),
(304, 23, 'Nusa Tenggara Timur', 'Kabupaten Sabu Raijua'),
(305, 23, 'Nusa Tenggara Timur', 'Kabupaten Sikka'),
(306, 23, 'Nusa Tenggara Timur', 'Kabupaten Sumba Barat'),
(307, 23, 'Nusa Tenggara Timur', 'Kabupaten Sumba Barat Daya'),
(308, 23, 'Nusa Tenggara Timur', 'Kabupaten Sumba Tengah'),
(309, 23, 'Nusa Tenggara Timur', 'Kabupaten Sumba Timur'),
(310, 23, 'Nusa Tenggara Timur', 'Kabupaten Timor Tengah Selatan'),
(311, 23, 'Nusa Tenggara Timur', 'Kabupaten Timor Tengah Utara'),
(312, 23, 'Nusa Tenggara Timur', 'Kota Kupang'),
(313, 24, 'Papua', 'Kabupaten Asmat'),
(314, 24, 'Papua', 'Kabupaten Biak Numfor'),
(315, 24, 'Papua', 'Kabupaten Boven Digoel'),
(316, 24, 'Papua', 'Kabupaten Deiyai'),
(317, 24, 'Papua', 'Kabupaten Dogiyai'),
(318, 24, 'Papua', 'Kabupaten Intan Jaya'),
(319, 24, 'Papua', 'Kabupaten Jayapura'),
(320, 24, 'Papua', 'Kabupaten Jayawijaya'),
(321, 24, 'Papua', 'Kabupaten Keerom'),
(322, 24, 'Papua', 'Kabupaten Kepulauan Yapen'),
(323, 24, 'Papua', 'Kabupaten Lanny Jaya'),
(324, 24, 'Papua', 'Kabupaten Mamberamo Raya'),
(325, 24, 'Papua', 'Kabupaten Mamberamo Tengah'),
(326, 24, 'Papua', 'Kabupaten Mappi'),
(327, 24, 'Papua', 'Kabupaten Merauke'),
(328, 24, 'Papua', 'Kabupaten Mimika'),
(329, 24, 'Papua', 'Kabupaten Nabire'),
(330, 24, 'Papua', 'Kabupaten Nduga'),
(331, 24, 'Papua', 'Kabupaten Paniai'),
(332, 24, 'Papua', 'Kabupaten Pegunungan Bintang'),
(333, 24, 'Papua', 'Kabupaten Puncak'),
(334, 24, 'Papua', 'Kabupaten Puncak Jaya'),
(335, 24, 'Papua', 'Kabupaten Sarmi'),
(336, 24, 'Papua', 'Kabupaten Supiori'),
(337, 24, 'Papua', 'Kabupaten Tolikara'),
(338, 24, 'Papua', 'Kabupaten Waropen'),
(339, 24, 'Papua', 'Kabupaten Yahukimo'),
(340, 24, 'Papua', 'Kabupaten Yalimo'),
(341, 24, 'Papua', 'Kota Jayapura'),
(342, 25, 'Papua Barat', 'Kabupaten Fakfak'),
(343, 25, 'Papua Barat', 'Kabupaten Kaimana'),
(344, 25, 'Papua Barat', 'Kabupaten Monokwari'),
(345, 25, 'Papua Barat', 'Kabupaten Monokwari Selatan'),
(346, 25, 'Papua Barat', 'Kabupaten Maybrat'),
(347, 25, 'Papua Barat', 'Kabupaten Pegunungan Arfak'),
(348, 25, 'Papua Barat', 'Kabupaten Raja Ampat'),
(349, 25, 'Papua Barat', 'Kabupaten Sorong'),
(350, 25, 'Papua Barat', 'Kabupaten Sorong Selatan'),
(351, 25, 'Papua Barat', 'Kabupaten Tambrauw'),
(352, 25, 'Papua Barat', 'Kabupaten Teluk Bintuni'),
(353, 25, 'Papua Barat', 'Kabupaten Teluk Wondama'),
(354, 25, 'Papua Barat', 'Kota Sorong'),
(355, 26, 'Riau', 'Kabupaten Bengkalis'),
(356, 26, 'Riau', 'Kabupaten Indragiri Hilir'),
(357, 26, 'Riau', 'Kabupaten Indragiri Hulu'),
(358, 26, 'Riau', 'Kabupaten Kampar'),
(359, 26, 'Riau', 'Kabupaten Kepulauan Meranti'),
(360, 26, 'Riau', 'Kabupaten Kuantan Singingi'),
(361, 26, 'Riau', 'Kabupaten Pelalawan'),
(362, 26, 'Riau', 'Kabupaten Rokan Hilir'),
(363, 26, 'Riau', 'Kabupaten Rokan Hulu'),
(364, 26, 'Riau', 'Kabupaten S I A K'),
(365, 26, 'Riau', 'Kota  D U M A I'),
(366, 26, 'Riau', 'Kota Pekanbaru'),
(367, 27, 'Sulawesi Barat', 'Kabupaten Majene'),
(368, 27, 'Sulawesi Barat', 'Kabupaten Mamasa'),
(369, 27, 'Sulawesi Barat', 'Kabupaten Mamuju'),
(370, 27, 'Sulawesi Barat', 'Kabupaten Mamuju Tengah'),
(371, 27, 'Sulawesi Barat', 'Kabupaten Mamuju Utara'),
(372, 27, 'Sulawesi Barat', 'Kabupaten Polewali Mandar'),
(373, 28, 'Sulawesi Selatan', 'Kabupaten Bantaeng'),
(374, 28, 'Sulawesi Selatan', 'Kabupaten Barru'),
(375, 28, 'Sulawesi Selatan', 'Kabupaten Bone'),
(376, 28, 'Sulawesi Selatan', 'Kabupaten Bulukumba'),
(377, 28, 'Sulawesi Selatan', 'Kabupaten Enrekang'),
(378, 28, 'Sulawesi Selatan', 'Kabupaten Gowa'),
(379, 28, 'Sulawesi Selatan', 'Kabupaten Jeneponto'),
(380, 28, 'Sulawesi Selatan', 'Kabupaten Kepulauan Selayar'),
(381, 28, 'Sulawesi Selatan', 'Kabupaten Luwu'),
(382, 28, 'Sulawesi Selatan', 'Kabupaten Luwu Timur'),
(383, 28, 'Sulawesi Selatan', 'Kabupaten Luwu Utara'),
(384, 28, 'Sulawesi Selatan', 'Kabupaten Maros'),
(385, 28, 'Sulawesi Selatan', 'Kabupaten Pangkajene Dan Kepulauan'),
(386, 28, 'Sulawesi Selatan', 'Kabupaten Pinrang'),
(387, 28, 'Sulawesi Selatan', 'Kabupaten Sidenreng Rappang'),
(388, 28, 'Sulawesi Selatan', 'Kabupaten Sinjai'),
(389, 28, 'Sulawesi Selatan', 'Kabupaten Soppeng'),
(390, 28, 'Sulawesi Selatan', 'Kabupaten Takalar'),
(391, 28, 'Sulawesi Selatan', 'Kabupaten Tana Toraja'),
(392, 28, 'Sulawesi Selatan', 'Kabupaten Toraja Utara'),
(393, 28, 'Sulawesi Selatan', 'Kabupaten Wajo'),
(394, 28, 'Sulawesi Selatan', 'Kota Makassar'),
(395, 28, 'Sulawesi Selatan', 'Kota Palopo'),
(396, 28, 'Sulawesi Selatan', 'Kota Parepare'),
(397, 29, 'Sulawesi Tengah', 'Kabupaten Banggai'),
(398, 29, 'Sulawesi Tengah', 'Kabupaten Banggai Kepulauan'),
(399, 29, 'Sulawesi Tengah', 'Kabupaten Banggai Laut'),
(400, 29, 'Sulawesi Tengah', 'Kabupaten Buol'),
(401, 29, 'Sulawesi Tengah', 'Kabupaten Donggala'),
(402, 29, 'Sulawesi Tengah', 'Kabupaten Morowali'),
(403, 29, 'Sulawesi Tengah', 'Kabupaten Morowali Utara'),
(404, 29, 'Sulawesi Tengah', 'Kabupaten Parigi Moutong'),
(405, 29, 'Sulawesi Tengah', 'Kabupaten Poso'),
(406, 29, 'Sulawesi Tengah', 'Kabupaten Sigi'),
(407, 29, 'Sulawesi Tengah', 'Kabupaten Tojo Una-Una'),
(408, 29, 'Sulawesi Tengah', 'Kabupaten Toli-Toli'),
(409, 29, 'Sulawesi Tengah', 'Kota Palu'),
(410, 30, 'Sulawesi Tenggara', 'Kabupaten Bombana'),
(411, 30, 'Sulawesi Tenggara', 'Kabupaten Buton'),
(412, 30, 'Sulawesi Tenggara', 'Kabupaten Buton Selatan'),
(413, 30, 'Sulawesi Tenggara', 'Kabupaten Buton Tengah'),
(414, 30, 'Sulawesi Tenggara', 'Kabupaten Buton Utara'),
(415, 30, 'Sulawesi Tenggara', 'Kabupaten Kolaka'),
(416, 30, 'Sulawesi Tenggara', 'Kabupaten Kolaka Timur'),
(417, 30, 'Sulawesi Tenggara', 'Kabupaten Kolaka Utara'),
(418, 30, 'Sulawesi Tenggara', 'Kabupaten Konawe'),
(419, 30, 'Sulawesi Tenggara', 'Kabupaten Konawe Kepulauan'),
(420, 30, 'Sulawesi Tenggara', 'Kabupaten Konawe Selatan'),
(421, 30, 'Sulawesi Tenggara', 'Kabupaten Konawe Utara'),
(422, 30, 'Sulawesi Tenggara', 'Kabupaten Muna'),
(423, 30, 'Sulawesi Tenggara', 'Kabupaten Muna Barat'),
(424, 30, 'Sulawesi Tenggara', 'Kabupaten Wakatobi'),
(425, 30, 'Sulawesi Tenggara', 'Kota Baubau'),
(426, 30, 'Sulawesi Tenggara', 'Kota Kendari'),
(427, 31, 'Sulawesi Utara', 'Kabupaten Bolaang Mongondow'),
(428, 31, 'Sulawesi Utara', 'Kabupaten Bolaang Mongondow Selatan'),
(429, 31, 'Sulawesi Utara', 'Kabupaten Bolaang Mongondow Timur'),
(430, 31, 'Sulawesi Utara', 'Kabupaten Bolaang Mongondow Utara'),
(431, 31, 'Sulawesi Utara', 'Kabupaten Kepulauan Sangihe'),
(432, 31, 'Sulawesi Utara', 'Kabupaten Kepulauan Talaud'),
(433, 31, 'Sulawesi Utara', 'Kabupaten Minahasa'),
(434, 31, 'Sulawesi Utara', 'Kabupaten Minahasa Selatan'),
(435, 31, 'Sulawesi Utara', 'Kabupaten Minahasa Tenggara'),
(436, 31, 'Sulawesi Utara', 'Kabupaten Minahasa Utara'),
(437, 31, 'Sulawesi Utara', 'Kabupaten Siau Tagulandang Biaro'),
(438, 31, 'Sulawesi Utara', 'Kota Bitung'),
(439, 31, 'Sulawesi Utara', 'Kota Kotamobagu'),
(440, 31, 'Sulawesi Utara', 'Kota Manado'),
(441, 31, 'Sulawesi Utara', 'Kota Tomohon'),
(442, 32, 'Sumatera Barat', 'Kabupaten Agam'),
(443, 32, 'Sumatera Barat', 'Kabupaten Dharmasraya'),
(444, 32, 'Sumatera Barat', 'Kabupaten Kepulauan Mentawai'),
(445, 32, 'Sumatera Barat', 'Kabupaten Lima Puluh Kota'),
(446, 32, 'Sumatera Barat', 'Kabupaten Padang Pariaman'),
(447, 32, 'Sumatera Barat', 'Kabupaten Pasaman'),
(448, 32, 'Sumatera Barat', 'Kabupaten Pasaman Barat'),
(449, 32, 'Sumatera Barat', 'Kabupaten Pesisir Selatan'),
(450, 32, 'Sumatera Barat', 'Kabupaten Sijunjung'),
(451, 32, 'Sumatera Barat', 'Kabupaten Solok'),
(452, 32, 'Sumatera Barat', 'Kabupaten Solok Selatan'),
(453, 32, 'Sumatera Barat', 'Kabupaten Tanah Datar'),
(454, 32, 'Sumatera Barat', 'Kota Bukittinggi'),
(455, 32, 'Sumatera Barat', 'Kota Padang'),
(456, 32, 'Sumatera Barat', 'Kota Padang Panjang'),
(457, 32, 'Sumatera Barat', 'Kota Pariaman'),
(458, 32, 'Sumatera Barat', 'Kota Payakumbuh'),
(459, 32, 'Sumatera Barat', 'Kota Sawah Lunto'),
(460, 32, 'Sumatera Barat', 'Kota Solok'),
(461, 33, 'Sumatera Selatan', 'Kabupaten Banyu Asin'),
(462, 33, 'Sumatera Selatan', 'Kabupaten Empat Lawang'),
(463, 33, 'Sumatera Selatan', 'Kabupaten Lahat'),
(464, 33, 'Sumatera Selatan', 'Kabupaten Muara Enim'),
(465, 33, 'Sumatera Selatan', 'Kabupaten Musi Banyuasin'),
(466, 33, 'Sumatera Selatan', 'Kabupaten Musi Rawas'),
(467, 33, 'Sumatera Selatan', 'Kabupaten Musi Rawas Utara'),
(468, 33, 'Sumatera Selatan', 'Kabupaten Ogan Ilir'),
(469, 33, 'Sumatera Selatan', 'Kabupaten Ogan Komering Ilir'),
(470, 33, 'Sumatera Selatan', 'Kabupaten Ogan Komering Ulu'),
(471, 33, 'Sumatera Selatan', 'Kabupaten Ogan Komering Ulu Selatan'),
(472, 33, 'Sumatera Selatan', 'Kabupaten Ogan Komering Ulu Timur'),
(473, 33, 'Sumatera Selatan', 'Kabupaten Penukal Abab Lematang Ilir'),
(474, 33, 'Sumatera Selatan', 'Kota Lubuklinggau'),
(475, 33, 'Sumatera Selatan', 'Kota Pagar Alam'),
(476, 33, 'Sumatera Selatan', 'Kota Palembang'),
(477, 33, 'Sumatera Selatan', 'Kota Prabumulih'),
(478, 34, 'Sumatera Utara', 'Kabupaten Asahan'),
(479, 34, 'Sumatera Utara', 'Kabupaten Batu Bara'),
(480, 34, 'Sumatera Utara', 'Kabupaten Dairi'),
(481, 34, 'Sumatera Utara', 'Kabupaten Deli Serdang'),
(482, 34, 'Sumatera Utara', 'Kabupaten Humbang Hasundutan'),
(483, 34, 'Sumatera Utara', 'Kabupaten Karo'),
(484, 34, 'Sumatera Utara', 'Kabupaten Labuhan Batu'),
(485, 34, 'Sumatera Utara', 'Kabupaten Labuhan Batu Selatan'),
(486, 34, 'Sumatera Utara', 'Kabupaten Labuhan Batu Utara'),
(487, 34, 'Sumatera Utara', 'Kabupaten Langkat'),
(488, 34, 'Sumatera Utara', 'Kabupaten Mandailing Natal'),
(489, 34, 'Sumatera Utara', 'Kabupaten Nias'),
(490, 34, 'Sumatera Utara', 'Kabupaten Nias Barat'),
(491, 34, 'Sumatera Utara', 'Kabupaten Nias Selatan'),
(492, 34, 'Sumatera Utara', 'Kabupaten Nias Utara'),
(493, 34, 'Sumatera Utara', 'Kabupaten Padang Lawas'),
(494, 34, 'Sumatera Utara', 'Kabupaten Padang Lawas Utara'),
(495, 34, 'Sumatera Utara', 'Kabupaten Pakpak Bharat'),
(496, 34, 'Sumatera Utara', 'Kabupaten Samosir'),
(497, 34, 'Sumatera Utara', 'Kabupaten Serdang Bedagai'),
(498, 34, 'Sumatera Utara', 'Kabupaten Simalungun'),
(499, 34, 'Sumatera Utara', 'Kabupaten Tapanuli Selatan'),
(500, 34, 'Sumatera Utara', 'Kabupaten Tapanuli Tengah'),
(501, 34, 'Sumatera Utara', 'Kabupaten Tapanuli Utara'),
(502, 34, 'Sumatera Utara', 'Kabupaten Toba Samosir'),
(503, 34, 'Sumatera Utara', 'Kota Binjai'),
(504, 34, 'Sumatera Utara', 'Kota Gunungsitoli'),
(505, 34, 'Sumatera Utara', 'Kota Medan'),
(506, 34, 'Sumatera Utara', 'Kota Padangsidimpuan'),
(507, 34, 'Sumatera Utara', 'Kota Pematang Siantar'),
(508, 34, 'Sumatera Utara', 'Kota Sibolga'),
(509, 34, 'Sumatera Utara', 'Kota Tanjung Balai'),
(510, 34, 'Sumatera Utara', 'Kota Tebing Tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterpelatihan`
--

CREATE TABLE IF NOT EXISTS `masterpelatihan` (
`no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `masterpelatihan`
--

INSERT INTO `masterpelatihan` (`no`, `nama`, `deskripsi`) VALUES
(1, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun'),
(8, 'Elearnig', 'gg'),
(10, 'Khusus', 'firman'),
(11, 'Elearning', 'gan'),
(12, 'Tematik', 'Tematik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pesertapelatihan`
--

CREATE TABLE IF NOT EXISTS `nilai_pesertapelatihan` (
`Id_nilai` int(11) NOT NULL,
  `Nip` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Kode_etik` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `UUD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Nilai_akhir` int(11) NOT NULL,
  `Id_pelatihan` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `nilai_pesertapelatihan`
--

INSERT INTO `nilai_pesertapelatihan` (`Id_nilai`, `Nip`, `Kode_etik`, `UUD`, `Nilai_akhir`, `Id_pelatihan`) VALUES
(7, '150442020004', '90', '70', 80, 1),
(8, '150442020044', '65', '70', 68, 1),
(9, '150442020020', '90', '90', 90, 2),
(10, '150442020020', '87', '86', 87, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
`Id_pelatihan` int(11) NOT NULL,
  `Jenis` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Nama` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Lokasi` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `Tanggal_mulai` varchar(50) NOT NULL,
  `Tanggal_selesai` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`Id_pelatihan`, `Jenis`, `Nama`, `Lokasi`, `propinsi`, `kabupaten`, `tahun`, `Tanggal_mulai`, `Tanggal_selesai`) VALUES
(1, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'The Pade Hotel', 'Aceh', 'Kabupaten Aceh Besar', '2018', '2018-02-25', '2018-03-02'),
(2, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'BALITBANGDIKLATKUMDIL MA-RI', 'Jawa Barat', 'Kabupaten Bogor', '2017', '2017-11-13', '2017-11-17'),
(3, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'Hotel Permata Garden', 'Jawa Barat', 'Kota Bandung', '2017', '2017-10-30', '2017-11-17'),
(4, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Hotel Grand Darmo Suite', 'Jawa Timur', 'Kota Surabaya', '2017', '2017-09-25', '2017-09-29'),
(5, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'BALITBANGDIKLATKUMDIL MA-RI, Kabupaten Bogor- Jawa Barat ', 'Jawa Barat', 'Kabupaten Bogor', '2017', '2017-09-11', '2017-09-16'),
(6, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Hotel Mercure', 'Kalimantan Barat', 'Kota Pontianak', '2017', '2017-08-21', '2017-08-25'),
(7, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Hotel Grand Zuri, Kota Palembang- Sumatera Selatan ', 'Sumatera Selatan', 'Kota Palembang', '2017', '2017-08-07', '2017-08-11'),
(8, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'Braja Mustika Hotel Convention Centre, Kota Bogor- Jawa Barat ', 'Jawa Barat', 'Kota Bogor', '2017', '2017-05-15', '2017-05-20'),
(9, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Hotel Santika, Kota Makassar- Sulawesi Selatan', 'Sulawesi Selatan', 'Kota Makassar', '2017', '2017-05-02', '2017-05-06'),
(10, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Puri Avia - Athalia Hotel Conference Resort', 'Jawa Barat', 'Kabupaten Bogor', '2017', '2017-04-18', '2017-04-22'),
(11, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'Puri Avia - Athalia Hotel Conference Resort', 'Jawa Barat', 'Kabupaten Bogor', '2017', '2017-04-16', '2017-04-21'),
(12, 'KEPPH', 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', 'Braja Mustika Hotel Convention Centre', 'Jawa Barat', 'Kota Bogor', '2017', '2017-04-03', '2017-04-08'),
(13, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Hotel Santika Premiere Yogyakarta', 'DI Yogyakarta', 'Kota Yogyakarta', '2017', '2017-03-06', '2017-03-10'),
(14, 'KEPPH', 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', 'Novotel Manado Golf Resort Convention Center ', 'Sulawesi Utara', 'Kota Manado', '2017', '2017-02-06', '2017-02-10'),
(15, 'Tematik', 'Tematik Khusus', 'jakarta', 'Jawa Tengah', 'Kabupaten Karanganyar', '2016', '2018-03-21', '2018-03-28'),
(16, 'Elearnig', 'eee', 'eee', 'Kalimantan Timur', 'Kabupaten Berau', '1997', '2018-03-20', '2018-03-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_formal`
--

CREATE TABLE IF NOT EXISTS `pendidikan_formal` (
`Id_penformal` int(11) NOT NULL,
  `Nip` varchar(25) NOT NULL,
  `Jenjang` varchar(20) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `Nama_sekolah` varchar(50) NOT NULL,
  `Lokasi` varchar(200) NOT NULL,
  `Tahun_lulus` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `pendidikan_formal`
--

INSERT INTO `pendidikan_formal` (`Id_penformal`, `Nip`, `Jenjang`, `Jurusan`, `Nama_sekolah`, `Lokasi`, `Tahun_lulus`) VALUES
(11, '150442020004', 'S1', 'Hukum aja', 'KY', 'Tambora', '2018-02-21'),
(12, '150442020003', 'D3', 'g', 'f', 'f', '2018-02-22'),
(13, '150442020019', 'S1', 'Hukum aja', 'LP3I', 'jakarta', '2018-02-20'),
(15, '150442020020', 'D3', 'Hukum', 'LP3I', 'Jakarta Pusat', '2018-03-27'),
(16, '150442020020', 'D3', 'Hukum', 'LP3I', 'jakarta', '2018-03-20'),
(17, '0305046703', 'S2', 'Teknik Informatika', 'STMIK Eresha', 'Jakarta', '2018-03-06'),
(18, '22222', 'S1', 'asdf', 'asdf', 'fasd', '2012'),
(19, '1504420200099', 'D3', 'hukum', 'KY', 'aaa', '2015-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_informal`
--

CREATE TABLE IF NOT EXISTS `pendidikan_informal` (
`Id_peninformal` int(11) NOT NULL,
  `Nip` varchar(50) NOT NULL,
  `Nama_pendidikan` varchar(50) NOT NULL,
  `Tempat` varchar(500) NOT NULL,
  `Tahun` varchar(25) NOT NULL,
  `Penyelenggara` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `pendidikan_informal`
--

INSERT INTO `pendidikan_informal` (`Id_peninformal`, `Nip`, `Nama_pendidikan`, `Tempat`, `Tahun`, `Penyelenggara`) VALUES
(6, '150442020004', 'ky', 'Jakarta Pusat', '2018-02-01', 'Komisi Yudisial'),
(7, '150442020020', 'Pelatihan KPPH', 'Jambi', '2018-03-07', 'Komisi Yudisial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`Id_peserta` int(11) NOT NULL,
  `Nip` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Gelar_depan` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Nama_lengkap` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Gelar_belakang` varchar(25) CHARACTER SET latin1 NOT NULL,
  `No_ktp` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Tempat_lahir` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Tanggal_lahir` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Jenis_kelamin` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Golongan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Jabatan` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Instansi` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Alamat` text CHARACTER SET latin1 NOT NULL,
  `Propinsi` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Kota` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Kode_pos` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Telepon` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Foto` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`Id_peserta`, `Nip`, `Gelar_depan`, `Nama_lengkap`, `Gelar_belakang`, `No_ktp`, `Tempat_lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Golongan`, `Jabatan`, `Instansi`, `Alamat`, `Propinsi`, `Kota`, `Kode_pos`, `Telepon`, `Email`, `Foto`) VALUES
(9, '150442020020', 'Hj', 'Syahputra', 'S. Kom', '150442020020', 'Jakarta', '2018-03-19', 'Laki-Laki', 'Pembina Utama Madya - IV/d', 'Kepala', 'PT Denpasar', 'asdfas', 'Bali', 'Kabupaten Bandung', '11210', '0131231231231', 'ajisyahputra601@gmail.com', '97Foto 3x4_merah.jpg'),
(10, '150442020022', '', 'Firman Aji', '', '150442020022', 'Jakarta', '2018-03-26', 'Laki-Laki', 'Juru Muda - I/a', 'Kepala', 'PT Denpasar', 'asdfasd', '', '', '11210', '0131231231231', 'ajisyahputra601@gmail.com', '56Foto cv hasil.jpg'),
(3, '150442020003', 'Hj', 'Aji Firman Syahputra', 'S. Kom', '150442020003', 'Jakarta', '2018-01-29', 'Laki-Laki', 'Juru Tingkat I - I/d', 'Wakil Ketua', 'PT Banten', 'tambora', '', '', '11210', '0131231231231', 'ajisyahputra601@gmail.com', '62Foto Asli.jpg'),
(5, '150442020004', 'Hj', 'Aji Fanny Aja', 'S. Kom', '150442020004', 'Jakarta', '2018-02-12', 'Laki-Laki', 'Pembina Utama - IV/e', 'Ketua', 'PT Surabaya', 'tambora', '', '', '11210', '081316948795', 'ajisyahputra601@gmail.com', '11Foto 3x4.jpg'),
(11, '150442020002', 'Hj', 'hany', 'S. Kom', '150442020002', 'Jakarta', '2018-03-19', 'Perempuan', 'Juru Tingkat I - I/d', 'Kepala', 'PT Banda Aceh', 'asdf', '', '', '12312', '081316948795', 'ajisyahputra601@gmail.com', '96Foto Asli.jpg'),
(12, '0305046703', 'Syaikh', 'Teddy Setiady', 'M.Kom.', '3201020504670004', 'Bandung', '1967-04-05', 'Laki-Laki', '[Pilih Pangkat/Golongan]', '[Pilih Jabatan]', '[Pilih Instansi]', 'Bogor', '[Pilih Propinsi]', '[Pilih Kota/Kabupaten]', '16969', '08129208461', 'teddy@plj.ac.id', '65Teddy.png'),
(13, '150442020023', 'Hj', 'Putra', 'S. Kom', '150442020023', 'Jakarta', '2018-03-20', '', '[Pilih Pangkat/Golongan]', '[Pilih Jabatan]', '[Pilih Instansi]', 'Jl Tanah Sereal GG Pucuk 1 No 1, Rt 007/008', '[Pilih Propinsi]', '[Pilih Kota/Kabupaten]', '11211', '081316948795', 'ajisyahputra601@gmail.com', '69KHS-Semester1.jpg'),
(14, '150442020000', '', 'Deni', '', '150442020000', 'Jakarta', '2018-03-13', '', 'Pengatur Tingkat I - II/d', 'Wakil Ketua', 'PT Denpasar', 'asdfasdf', 'Kalimantan Selatan', 'Kabupaten Balangan', '11210', '081316948795', 'ajisyahputra601@gmail.com', '78Foto 4x6.jpg'),
(15, '150442020044', '', 'Daniol', '', '150442020044', 'Jakarta', '2018-03-27', 'Laki-Laki', 'Pengatur Muda - II/a', 'Kepala', 'PT Surabaya', 'asdfas', 'Kalimantan Timur', 'Kabupaten Berau', '11211', '0131231231231', 'ajisyahputra601@gmail.com', '95Foto 4x6.jpg'),
(16, '150442020111', '', 'genji', '', '150442020111', 'Jakarta', '2018-03-26', 'Laki-Laki', 'Pengatur Muda Tingkat I - II/b', 'Kepala', 'PT Banten', 'asdfasd', 'Kalimantan Barat', 'Kabupaten Bengkayang', '11210', '081316948795', 'ajisyahputra601@gmail.com', '58Foto 4x6.jpg'),
(17, '123', '', 'feri', '', '123', 'Jakarta', '2018-03-20', 'Laki-Laki', 'Pengatur Muda Tingkat I - II/b', 'Kepala', 'PT Denpasar', 'asdfas', 'Kalimantan Selatan', 'Kabupaten Balangan', '11210', '0131231231231', 'ajisyahputra601@gmail.com', '63Foto 4x6.jpg'),
(18, '11234', '', 'wendy', '', '11234', 'Jakarta', '2018-03-19', '', '[Pilih Pangkat/Golongan]', '[Pilih Jabatan]', '[Pilih Instansi]', 'asdsad', '[Pilih Propinsi]', '[Pilih Kota/Kabupaten]', '11211', '081316948795', 'ajisyahputra601@gmail.com', '31Foto 4x6.jpg'),
(19, '11111', '', 'reni', '', '11111', 'Jakarta', '2018-03-26', 'Laki-Laki', 'Pengatur Muda Tingkat I - II/b', 'Kepala', 'PT Bengkulu', 'aaaa', 'Kalimantan Barat', 'Kabupaten Bengkayang', '11210', '081316948795', 'ajisyahputra601@gmail.com', '75Foto 4x6.jpg'),
(20, '22222', '', 'wer', '', '22222', 'Jakarta', '2018-03-21', 'Perempuan', 'Juru Tingkat I - I/d', 'Wakil Ketua', 'PT Denpasar', 'adfsad', 'Kalimantan Tengah', 'Kabupaten Barito Selatan', '11210', '081316948795', 'ajisyahputra601@gmail.com', '63Foto 4x6.jpg'),
(21, '5555', '', 'Tini', '', '5555', 'Jakarta', '2018-03-28', 'Perempuan', 'Juru - I/c', 'Kepala', 'PT Pontianak', 'asdfasd', 'Banten', 'Kabupaten Lebak', '11210', '081316948795', 'ajisyahputra601@gmail.com', '12Foto 3x4_merah.jpg'),
(22, '6666', '', 'Pina', '', '6666', 'Jakarta', '2018-03-13', 'Perempuan', 'Juru Tingkat I - I/d', 'Wakil Ketua', 'PT Denpasar', 'adfasd', 'Kalimantan Selatan', 'Kabupaten Balangan', '11210', '081316948795', 'ajisyahputra601@gmail.com', '76Foto 3x4_merah.jpg'),
(23, '1504420200099', 'Hj', 'Putra Aji', 'S.Kom', '1504420200099', 'Jakarta', '2018-04-10', 'Laki-Laki', 'Pembina - IV/a', 'Wakil Ketua', 'PT Yogyakarta', 'asdfas', 'DKI Jakarta', 'Kabupaten Kepulauan Seribu', '1231', '0453121', 'ajisyahputra601@gmail.com', '25LOGO LP3I_1.GIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pelatihan`
--

CREATE TABLE IF NOT EXISTS `peserta_pelatihan` (
`Id_pespel` int(11) NOT NULL,
  `Nip` varchar(25) NOT NULL,
  `Nama_lengkap` varchar(50) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Id_pelatihan` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data untuk tabel `peserta_pelatihan`
--

INSERT INTO `peserta_pelatihan` (`Id_pespel`, `Nip`, `Nama_lengkap`, `Instansi`, `Jabatan`, `Id_pelatihan`) VALUES
(4, '150442020003', 'Aji Firman Syahputra', 'BALITBANGDIKLATKUMDIL', 'Ketua', 2),
(14, '150442020003', 'Aji Firman Syahputra', '[Pilih Instansi]', '[Pilih Jabatan]', 13),
(16, '150442020022', 'Firman Aji', 'PT Denpasar', 'Kepala', 13),
(17, '150442020020', 'Syahputra', 'PT Bengkulu', 'Hakim', 13),
(21, '150442020020', 'Syahputra', 'PT Bengkulu', 'Hakim', 5),
(22, '150442020003', 'Aji Firman Syahputra', 'PT Banten', 'Wakil Ketua', 5),
(24, '150442020002', 'hany', 'PT Banda Aceh', 'Kepala', 14),
(25, '150442020003', 'Aji Firman Syahputra', 'PT Banten', 'Wakil Ketua', 14),
(28, '150442020004', 'Aji Fanny Aja', 'PT Surabaya', 'Ketua', 2),
(33, '150442020004', 'Aji Fanny Aja', 'PT Surabaya', 'Ketua', 1),
(136, '150442020022', 'Firman Aji', 'PT Denpasar', 'Kepala', 1),
(137, '0305046703', 'Teddy Setiady', 'PA Menggala/Tulang Bawang', 'Ketua', 2),
(138, '150442020022', 'Firman Aji', 'PT Denpasar', 'Kepala', 2),
(139, '150442020020', 'Syahputra', 'PT Bengkulu', 'Hakim', 2),
(141, '150442020023', 'Putra', 'PN Ngawi', 'Kepala', 2),
(146, '150442020044', 'Daniol', 'PT Surabaya', 'Kepala', 1),
(147, '150442020002', 'hany', 'PT Banda Aceh', 'Kepala', 1),
(148, '150442020020', 'Syahputra', 'PT Denpasar', 'Kepala', 1),
(149, '150442020004', 'Aji Fanny Aja', 'PT Surabaya', 'Ketua', 3),
(151, '150442020023', 'Putra', '[Pilih Instansi]', '[Pilih Jabatan]', 1),
(152, '6666', 'Pina', 'PT Denpasar', 'Wakil Ketua', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Aceh'),
(2, 'Bali'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'DI Yogyakarta'),
(6, 'DKI Jakarta'),
(7, 'Gorontalo'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Bangka Belitung'),
(18, 'Kepulauan Riau'),
(19, 'Lampung'),
(20, 'Maluku'),
(21, 'Maluku Utara'),
(22, 'Nusa Tenggara Barat'),
(23, 'Nusa Tenggara Timur'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `riwayat_pekerjaan` (
`Id_riwayat` int(11) NOT NULL,
  `Nip` varchar(25) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Tahun_mulai` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`Id_riwayat`, `Nip`, `Instansi`, `Jabatan`, `Tahun_mulai`) VALUES
(3, '150442020001', 'PT Jakarta', 'Kepala', '2018-02-09'),
(4, '150442020004', 'PT Denpasar', 'Ketua', '2018-02-06'),
(5, '150442020020', 'BADILAG', 'Ketua', '2018-03-06'),
(6, '0305046703', 'PT Banda Aceh', 'Ketua', '2018-03-06'),
(7, '11111', 'PN Kuala Simpang', 'Ketua', '2018-04-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE IF NOT EXISTS `sertifikat` (
`Id_sertifikat` int(11) NOT NULL,
  `Nama_pelatihan` text NOT NULL,
  `Nip` varchar(50) NOT NULL,
  `Nama_lengkap` varchar(50) NOT NULL,
  `Unit_kompetensi` text NOT NULL,
  `Penyelenggara` varchar(200) NOT NULL,
  `Tanggal_mulai` varchar(25) NOT NULL,
  `Tanggal_selesai` varchar(25) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`Id_sertifikat`, `Nama_pelatihan`, `Nip`, `Nama_lengkap`, `Unit_kompetensi`, `Penyelenggara`, `Tanggal_mulai`, `Tanggal_selesai`, `File`) VALUES
(15, 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', '150442020002', 'AJI FIRMAN', 'OPERATOR KOMPUTER', 'Komisi Yudisial', '2018-02-25', '2018-03-02', 'CV - Aji Firman Syahputra.pdf'),
(21, 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', '0305046703', 'Teddy Setiady', 'aaaa', 'Komisi Yudisial aja', '2017-11-13', '2017-11-17', 'Akta-Aji Firman Syahputra.compressed.pdf'),
(23, 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', '0305046703', 'Teddy Setiady', 'sdfa', 'fasd', '2018-02-25', '2018-03-02', 'KTM-Aji Firman Syahputra.pdf'),
(27, 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', '0305046703', 'Teddy Setiady', 'dfasd', 'fasd', '2018-03-13', '2018-03-28', ''),
(31, 'Pemantapan KEPPH Bagi Hakim Dengan Masa Kerja 0-8 Tahun', '1504420200099', 'Putra Aji', 'gg', 'KY', '2018-02-25', '2018-03-02', 'My Project.pdf'),
(32, 'Pemaknaan KEPPH Bagi Hakim Dengan Masa Kerja 8-15 Tahun', '150442020020', 'Syahputra', 'fasd', 'asdfasd', '2017-11-13', '2017-11-17', 'CV[English]-Aji Firman Syahputra.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `kode` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `bergabung` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nip`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `aktif`, `kode`, `bergabung`, `id_session`) VALUES
('admin', '32e886b479d9479b08f52e766e1697b2d43bcb297b97a9ebf07aae0d54a0aaef7ee41dbb568e8b2c884272e81337cfbd063acd153a4f737883518a7703292193', '150442020027', 'Aji Firman Syahputra', 'syahputraaji11@rocketmail.com', '0813169487952', '94Foto 4x6.jpg', 'admin', 'Y', '', '', 'q173s8hs1jl04st35169ccl8o7'),
('robby', '882c306525a9f885466520ba2aa6b10377b029cb569311fc17161d40df6e1bab7eb6103fcf567ce3a1375e77cc7db1928efec90cd0a379303fc2adb159bb1d14', '', 'Robby Sugara', 'robby.sugara@gmail.com', '081267771333', '', 'user', 'Y', '', '', '882c306525a9f885466520ba2aa6b10377b029cb569311fc17161d40df6e1bab7eb6103fcf567ce3a1375e77cc7db1928efec90cd0a379303fc2adb159bb1d14'),
('honi', '8f8a223b6407235edf87811d820ffbb198737dc7e0ae1e1879d1e6800425f4d86b9240ccbc5803325cdba683030ae635701e4c855210b1650d736ab20c233af5', '', 'Honi', 'honi@gmail.com', '081231231231', '46Foto Asli.jpg', 'user', 'N', '', '', '8f8a223b6407235edf87811d820ffbb198737dc7e0ae1e1879d1e6800425f4d86b9240ccbc5803325cdba683030ae635701e4c855210b1650d736ab20c233af5'),
('kina', '54c46b378ada3b7f72b6daa226598dfd6a08b85c326fdf8d48cb06cc9b746ae2c56dd8a1716681e348afc397201cb7098e38b5db77c5ea6b9ce0ebdbf04f4a2b', '', 'kina', 'kina@gmail.com', '08123123121', '44isengaja.png', 'user', 'Y', '', '', '54c46b378ada3b7f72b6daa226598dfd6a08b85c326fdf8d48cb06cc9b746ae2c56dd8a1716681e348afc397201cb7098e38b5db77c5ea6b9ce0ebdbf04f4a2b'),
('gila', '05fd60e86ad13e60eb1d60454ee157dae5e1246e1ad8e53fee8f98096261d0beffa1b682c6b5a4c4b98e7ea6e3604fe95570b2e7fc97f55980cfc03925fe4043', '', 'gila', 'gila@gmail.com', '', '', 'user', 'N', '', '', '05fd60e86ad13e60eb1d60454ee157dae5e1246e1ad8e53fee8f98096261d0beffa1b682c6b5a4c4b98e7ea6e3604fe95570b2e7fc97f55980cfc03925fe4043'),
('tan', '8c175b80ca81b1a07dcc2078cf149b2263c3e57be655c7da6894800f0c4ba9cc23a9bcd58c20744df5b285b6c3b0203e0f3f355e4d3df55cbd68ff31c6d122e2', '', 'tan', 'tan@gmail.com', '', '', 'user', 'N', '', '', '8c175b80ca81b1a07dcc2078cf149b2263c3e57be655c7da6894800f0c4ba9cc23a9bcd58c20744df5b285b6c3b0203e0f3f355e4d3df55cbd68ff31c6d122e2'),
('lan', 'df8959bbb0692191ae0f288757a3c37f9d411451c6f8c1ea349ae343a8bc69d3be646a72275ad980d0ecdfa2253fa89b7ac3b2b7c55f35fb80836d11cceec98a', '', 'lan', 'lan@gmail.com', '', '', 'user', 'N', '', '', 'df8959bbb0692191ae0f288757a3c37f9d411451c6f8c1ea349ae343a8bc69d3be646a72275ad980d0ecdfa2253fa89b7ac3b2b7c55f35fb80836d11cceec98a'),
('fan', '440ef8da1d49d42faf31b25be90542fae80f24d9876f61ee490f778577949a48c00554f442680379807cd5cafc0c80b1abb9e694385f274835fba19b5444481e', '', 'fan', 'fan@gmail.com', '', '', 'user', 'Y', '', '', '440ef8da1d49d42faf31b25be90542fae80f24d9876f61ee490f778577949a48c00554f442680379807cd5cafc0c80b1abb9e694385f274835fba19b5444481e'),
('ruly', 'f244c84a027640afc410f8de5993b45b6b35ba41898c6a187aa6e58d1f77bc760d76720eb853d4b0f07745221d0f5f8d6780d03e6c8ccebbe3c7eca4125fa425', '', 'Ruly', 'ruly@gmail.com', '081316948795', '77scan_3.jpg', 'user', 'Y', '', '', 'f244c84a027640afc410f8de5993b45b6b35ba41898c6a187aa6e58d1f77bc760d76720eb853d4b0f07745221d0f5f8d6780d03e6c8ccebbe3c7eca4125fa425'),
('teddy', '1ac86a23770881d693f9f911a0ce160489c6f84f5013bbc99eeec0e5f42ed7476b2929586928c39badc19d421d9c4b192a7e19ef4eea6f491a712079c042f4da', '', 'Teddy', 'teddysetiady007@gmail.com', '08129208461', '', 'user', 'Y', '2db349aa2d67f3760905ddd81ee3dc2b', '', '1ac86a23770881d693f9f911a0ce160489c6f84f5013bbc99eeec0e5f42ed7476b2929586928c39badc19d421d9c4b192a7e19ef4eea6f491a712079c042f4da'),
('bal', '62267af997916f6efd1057653ccaf83894c242ada705830bf0952c98396615a4fd5f5b937240c562b1f4eff82dac3eab6f4273bd3a88a7cb96cd994709a0212b', '', 'bal', 'bal@gmail.com', '', '', 'user', 'N', '', '', '62267af997916f6efd1057653ccaf83894c242ada705830bf0952c98396615a4fd5f5b937240c562b1f4eff82dac3eab6f4273bd3a88a7cb96cd994709a0212b'),
('pina', '7e2d06de39d8f594904d1d98e52c81a93a3f39d65fcf6c66671e29e775aba8f3356f573a04e697bb4094ff3044ed5464c3bb5cbc3e31b79e8ee9bd4dfab8ea10', '', 'pina', 'pina@gmail.com', '', '', 'user', 'N', '', '', '7e2d06de39d8f594904d1d98e52c81a93a3f39d65fcf6c66671e29e775aba8f3356f573a04e697bb4094ff3044ed5464c3bb5cbc3e31b79e8ee9bd4dfab8ea10'),
('Feri', '5b097bcad460b5ca61b0574b3413f8d63041a659ea774a9f3bf40c96e012248a4aa1c85a8460283dd5c22dccc4f8478ee657df4d7bac914851cdbf5fc2c01d23', '123', 'Feri', 'ajisyahputra601@gmail.com', '', '', 'user', 'Y', '6d23b875ec43d679f01d51dd8e47b609', '2018-03-25 20:52:17', '5b097bcad460b5ca61b0574b3413f8d63041a659ea774a9f3bf40c96e012248a4aa1c85a8460283dd5c22dccc4f8478ee657df4d7bac914851cdbf5fc2c01d23'),
('putra', 'da3a840ed6f3d72ed1d9d5b664310848a35305281850e8228c9b38f3f10e7e7b6f84bcbdc3ec1de69c90b777cac0448535068506c2954cd0791fa6e640a8156d', '150442020023', 'Putra', 'syahputraaji11@rocketmail.com', '', '', 'user', 'Y', '8a1e36bec18553b5ae56804e8409d4e1', '2018-03-11 21:25:36', 'da3a840ed6f3d72ed1d9d5b664310848a35305281850e8228c9b38f3f10e7e7b6f84bcbdc3ec1de69c90b777cac0448535068506c2954cd0791fa6e640a8156d'),
('rani2', 'd2a9593b6e1ce03155349d3259b04e6e2bc351135c1e42514eab4d838cba11379b00233063c213127244f8690e0d173e12d784c2d9498ed8568398ad2cba3105', '', 'Syahputra', 'ajisyahputra601@gmail.com', '081316948795', '82Foto 4x6.jpg', 'user', 'Y', 'd60f5af43795417ddb4f199431813bb9', '', 'd2a9593b6e1ce03155349d3259b04e6e2bc351135c1e42514eab4d838cba11379b00233063c213127244f8690e0d173e12d784c2d9498ed8568398ad2cba3105'),
('Farhan280696', '27fe4393957184f0738518d070911260508579d2cabc9bf8de4c9cac35fd5866a8d472487cd6be67c89ded6f5fd4b334860b8a768890d521126d96271203313d', '', 'Ahmad Farhan', 'Ahmadfarhan280696@gmail.com', '', '', 'user', 'Y', 'f50db8880b4adcaae28da4bfc482f009', '', '27fe4393957184f0738518d070911260508579d2cabc9bf8de4c9cac35fd5866a8d472487cd6be67c89ded6f5fd4b334860b8a768890d521126d96271203313d'),
('firmanputra', 'da3a840ed6f3d72ed1d9d5b664310848a35305281850e8228c9b38f3f10e7e7b6f84bcbdc3ec1de69c90b777cac0448535068506c2954cd0791fa6e640a8156d', '', 'Fiput', 'ajisyahputra601@gmail.com', '', '', 'user', 'Y', 'eec824adf77a9de6432143780657c530', '', 'da3a840ed6f3d72ed1d9d5b664310848a35305281850e8228c9b38f3f10e7e7b6f84bcbdc3ec1de69c90b777cac0448535068506c2954cd0791fa6e640a8156d'),
('syahputra', '7d63364b3223926cea1aa4182c8a9ea90e56f9e99fc168d73697fe683b73d6f71ece1695dce59c52de73c073552c8fd669052d8dfb82ab58da64f6f3445c981d', '150442020020', 'Syahputra', 'ajisyahputra601@gmail.com', '08314341312', '94Foto 4x6.jpg', 'user', 'Y', 'b8f2df79f528f695c5bbb1ed817a0253', '2018-03-09 00:10:53', '7d63364b3223926cea1aa4182c8a9ea90e56f9e99fc168d73697fe683b73d6f71ece1695dce59c52de73c073552c8fd669052d8dfb82ab58da64f6f3445c981d'),
('hany', 'b167b20ebb0248fa88aa1754bc4faae8de726d5109a51d9ae262bfd236cdabc399ef97f49634f0521a77f5c2efc35ee16e16b046f1e42f4c9710c98ea917a24e', '150442020002', 'Hany', 'ajisyahputra601@gmail.com', '', '', 'user', 'Y', '50089542b6e83b20b8127db8a40e044d', '2018-04-01 02:07:14', 'b167b20ebb0248fa88aa1754bc4faae8de726d5109a51d9ae262bfd236cdabc399ef97f49634f0521a77f5c2efc35ee16e16b046f1e42f4c9710c98ea917a24e'),
('jin3', 'f418d76d99b87c35dfe56f457deb9a93d7d14a8c0a87495e3fc14a9e7e0d06228a8926c7775d7dadaa7a9ac602ba1a830991b28148cd8ec2cc3aae15223fb706', '1234', 'Jin', 'jin3@gmail.com', '', '', 'user', 'N', '', '2018-04-17 10:31:00', 'f418d76d99b87c35dfe56f457deb9a93d7d14a8c0a87495e3fc14a9e7e0d06228a8926c7775d7dadaa7a9ac602ba1a830991b28148cd8ec2cc3aae15223fb706'),
('ji', 'e683fb24ecab5492872fa991bff98f5c01a7734e4b7ec5d3341cab18a802251a25e661053d1654ff8d7332683224bbf800671abeeb1105a12cc76ef77f87749a', '1122', 'Ji', 'ji@gmail.com', '', '', 'user', 'N', '', '2018-04-21 14:14:26', 'e683fb24ecab5492872fa991bff98f5c01a7734e4b7ec5d3341cab18a802251a25e661053d1654ff8d7332683224bbf800671abeeb1105a12cc76ef77f87749a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_log`
--

CREATE TABLE IF NOT EXISTS `users_log` (
`Id_userlog` int(11) NOT NULL,
  `Username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Tanggal` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Jamin` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Jamout` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=140 ;

--
-- Dumping data untuk tabel `users_log`
--

INSERT INTO `users_log` (`Id_userlog`, `Username`, `Tanggal`, `Jamin`, `Jamout`, `Status`) VALUES
(1, 'admin', '2018-03-10', '00:46:46', '18:02:59', 'offline'),
(2, 'admin', '2018-03-10', '01:03:05', '18:33:53', 'offline'),
(3, 'admin', '2018-03-10', '01:34:00', '18:37:08', 'offline'),
(4, 'admin', '2018-03-10', '01:37:14', '19:03:26', 'offline'),
(5, 'admin', '2018-03-10', '02:03:32', '19:13:00', 'offline'),
(6, 'syahputra', '2018-03-10', '02:13:31', '19:14:05', 'offline'),
(7, 'syahputra', '2018-03-10', '02:14:14', '19:14:21', 'offline'),
(8, 'admin', '2018-03-10', '02:14:29', '02:54:18', 'offline'),
(9, 'syahputra', '2018-03-10', '02:16:01', '19:23:37', 'offline'),
(10, 'syahputra', '2018-03-10', '02:26:20', '19:29:01', 'offline'),
(11, 'syahputra', '2018-03-10', '02:30:15', '19:31:06', 'offline'),
(12, 'syahputra', '2018-03-10', '02:33:17', '19:33:53', 'offline'),
(13, 'syahputra', '2018-03-10', '02:35:14', '19:35:31', 'offline'),
(14, 'syahputra', '2018-03-10', '02:36:55', '19:37:04', 'offline'),
(15, 'syahputra', '2018-03-10', '02:38:46', '19:38:49', 'offline'),
(16, 'syahputra', '2018-03-10', '02:42:01', '02:42:07', 'offline'),
(17, 'admin', '2018-03-10', '02:49:46', '02:54:18', 'offline'),
(18, 'admin', '2018-03-10', '02:54:54', '02:58:45', 'offline'),
(19, 'admin', '2018-03-10', '12:29:59', '18:44:18', 'offline'),
(20, 'admin', '2018-03-10', '18:45:08', '19:06:00', 'offline'),
(21, 'admin', '2018-03-10', '19:06:06', '19:08:14', 'offline'),
(22, 'admin', '2018-03-10', '19:08:24', '23:22:47', 'offline'),
(23, 'admin', '2018-03-10', '22:38:28', '23:22:47', 'offline'),
(24, 'syahputra', '2018-03-10', '23:27:22', '23:29:36', 'offline'),
(25, 'admin', '2018-03-10', '23:29:50', '23:30:59', 'offline'),
(26, 'admin', '2018-03-11', '17:42:42', '19:47:53', 'offline'),
(27, 'admin', '2018-03-11', '18:07:32', '19:47:53', 'offline'),
(28, 'admin', '2018-03-11', '20:03:48', '21:15:11', 'offline'),
(29, 'admin', '2018-03-11', '21:13:50', '21:15:11', 'offline'),
(30, 'admin', '2018-03-11', '21:15:44', '21:16:44', 'offline'),
(31, 'putra', '2018-03-11', '21:33:19', '21:37:03', 'offline'),
(32, 'admin', '2018-03-11', '21:37:07', '22:02:44', 'offline'),
(33, 'admin', '2018-03-11', '22:03:08', '00:06:18', 'offline'),
(34, 'admin', '2018-03-12', '00:03:00', '00:06:18', 'offline'),
(35, 'admin', '2018-03-12', '00:06:33', '16:21:19', 'offline'),
(36, 'admin', '2018-03-12', '16:21:36', '16:24:50', 'offline'),
(37, 'admin', '2018-03-12', '16:42:50', '16:59:19', 'offline'),
(38, 'syahputra', '2018-03-12', '16:56:57', '16:59:04', 'offline'),
(39, 'admin', '2018-03-12', '17:32:50', '12:11:12', 'offline'),
(40, 'admin', '2018-03-13', '12:13:19', '12:13:47', 'offline'),
(41, 'admin', '2018-03-13', '20:59:32', '01:02:39', 'offline'),
(42, 'admin', '2018-03-14', '00:43:34', '01:02:39', 'offline'),
(43, 'admin', '2018-03-14', '01:02:44', '01:06:04', 'offline'),
(44, 'admin', '2018-03-14', '01:06:09', '01:09:27', 'offline'),
(45, 'admin', '2018-03-14', '01:09:32', '01:09:57', 'offline'),
(46, 'admin', '2018-03-14', '01:10:01', '00:38:23', 'offline'),
(47, 'admin', '2018-03-14', '14:45:31', '00:38:23', 'offline'),
(48, 'admin', '2018-03-15', '20:18:17', '00:38:23', 'offline'),
(49, 'admin', '2018-03-18', '00:34:27', '00:38:23', 'offline'),
(50, 'admin', '2018-03-18', '11:44:56', '00:38:23', 'offline'),
(51, 'admin', '2018-03-21', '00:17:49', '00:38:23', 'offline'),
(52, 'admin', '2018-03-24', '02:27:41', '05:14:30', 'offline'),
(53, 'admin', '2018-03-24', '04:38:59', '05:14:30', 'offline'),
(54, 'admin', '2018-03-24', '05:14:54', '05:16:04', 'offline'),
(55, 'admin', '2018-03-24', '05:16:35', '05:16:48', 'offline'),
(56, 'admin', '2018-03-24', '05:16:54', '05:17:27', 'offline'),
(57, 'admin', '2018-03-24', '05:17:44', '06:34:59', 'offline'),
(58, 'admin', '2018-03-24', '17:42:56', '22:19:58', 'offline'),
(59, 'syahputra', '2018-03-24', '22:20:08', '22:33:19', 'offline'),
(60, 'admin', '2018-03-24', '22:33:27', '22:35:57', 'offline'),
(61, 'syahputra', '2018-03-24', '22:36:05', '23:59:41', 'offline'),
(62, 'admin', '2018-03-24', '23:59:49', '00:48:37', 'offline'),
(63, 'admin', '2018-03-25', '14:42:28', '14:49:14', 'offline'),
(64, 'syahputra', '2018-03-25', '14:49:29', '16:18:20', 'offline'),
(65, 'admin', '2018-03-25', '15:12:47', '16:11:23', 'offline'),
(66, 'syahputra', '2018-03-25', '15:33:17', '16:18:20', 'offline'),
(67, 'syahputra', '2018-03-25', '16:11:29', '16:18:20', 'offline'),
(68, 'syahputra', '2018-03-25', '16:18:04', '16:18:20', 'offline'),
(69, 'admin', '2018-03-25', '16:18:24', '16:25:58', 'offline'),
(70, 'syahputra', '2018-03-25', '16:26:03', '17:42:06', 'offline'),
(71, 'admin', '2018-03-25', '16:26:22', '20:51:29', 'offline'),
(72, 'syahputra', '2018-03-25', '17:42:11', '19:31:19', 'offline'),
(73, 'admin', '2018-03-25', '19:31:36', '20:51:29', 'offline'),
(74, 'feri', '2018-03-25', '20:53:37', '21:13:39', 'offline'),
(75, 'admin', '2018-03-25', '21:13:55', '21:17:53', 'offline'),
(76, 'admin', '2018-03-26', '06:06:58', '06:09:08', 'offline'),
(77, 'syahputra', '2018-03-26', '06:14:53', '07:53:12', 'offline'),
(78, 'admin', '2018-03-26', '08:07:58', '08:17:27', 'offline'),
(79, 'admin', '2018-03-26', '08:17:45', '20:33:07', 'offline'),
(80, 'admin', '2018-03-27', '20:11:55', '20:33:07', 'offline'),
(81, 'teddy', '2018-03-27', '20:34:32', '20:35:18', 'offline'),
(82, 'teddy', '2018-03-27', '20:35:24', '20:47:38', 'offline'),
(83, 'admin', '2018-03-27', '20:47:46', '22:14:17', 'offline'),
(84, 'syahputra', '2018-03-27', '22:14:55', '22:25:32', 'offline'),
(85, 'admin', '2018-03-27', '22:26:12', '18:58:44', 'offline'),
(86, 'admin', '2018-03-30', '16:54:40', '18:58:44', 'offline'),
(87, 'admin', '2018-03-30', '20:16:31', '01:56:36', 'offline'),
(88, 'admin', '2018-04-01', '01:59:05', '02:01:31', 'offline'),
(89, 'admin', '2018-04-01', '02:04:42', '02:06:46', 'offline'),
(90, 'hany', '2018-04-01', '02:09:52', '02:19:45', 'offline'),
(91, 'teddy', '2018-04-02', '21:33:58', '21:34:25', 'offline'),
(92, 'admin', '2018-04-11', '13:53:10', '23:32:36', 'offline'),
(93, 'admin', '2018-04-11', '20:44:25', '23:32:36', 'offline'),
(94, 'admin', '2018-04-12', '13:59:32', '01:46:32', 'offline'),
(95, 'admin', '2018-04-12', '22:12:53', '01:46:32', 'offline'),
(96, 'admin', '2018-04-13', '01:46:48', '01:48:00', 'offline'),
(97, 'admin', '2018-04-13', '01:48:18', '21:11:04', 'offline'),
(98, 'admin', '2018-04-13', '16:20:53', '21:11:04', 'offline'),
(99, 'admin', '2018-04-13', '21:25:34', '02:57:32', 'offline'),
(100, 'admin', '2018-04-13', '22:36:17', '02:57:32', 'offline'),
(101, 'admin', '2018-04-14', '02:59:33', '03:00:27', 'offline'),
(102, 'admin', '2018-04-14', '17:01:17', '17:02:13', 'offline'),
(103, 'admin', '2018-04-15', '12:37:19', '12:38:38', 'offline'),
(104, 'admin', '2018-04-15', '12:39:21', '15:19:52', 'offline'),
(105, 'admin', '2018-04-17', '14:39:46', '15:19:52', 'offline'),
(106, 'admin', '2018-04-17', '15:20:40', '15:21:52', 'offline'),
(107, 'admin', '2018-04-17', '15:21:56', '15:39:10', 'offline'),
(108, 'admin', '2018-04-17', '15:40:37', '15:41:07', 'offline'),
(109, 'admin', '2018-04-17', '15:41:43', '15:41:49', 'offline'),
(110, 'admin', '2018-04-17', '15:45:57', '15:46:29', 'offline'),
(111, 'admin', '2018-04-17', '15:55:12', '22:22:57', 'offline'),
(112, 'admin', '2018-04-17', '23:09:10', '02:12:04', 'offline'),
(113, 'hany', '2018-04-18', '02:12:17', '18:12:16', 'offline'),
(114, 'admin', '2018-04-18', '02:14:26', '22:53:03', 'offline'),
(115, 'admin', '2018-04-18', '18:26:48', '22:53:03', 'offline'),
(116, 'admin', '2018-04-20', '22:53:17', '21:35:50', 'offline'),
(117, 'admin', '2018-04-21', '20:39:48', '21:35:50', 'offline'),
(118, 'admin', '2018-04-21', '21:36:32', '22:29:12', 'offline'),
(119, 'admin', '2018-04-24', '19:01:16', '00:38:43', 'offline'),
(120, 'admin', '2018-04-25', '00:14:43', '00:38:43', 'offline'),
(121, 'syahputra', '2018-04-25', '00:38:53', '00:39:39', 'offline'),
(122, 'syahputra', '2018-04-25', '00:39:44', '00:40:41', 'offline'),
(123, 'admin', '2018-04-25', '00:41:08', '01:21:02', 'offline'),
(124, 'admin', '2018-04-25', '00:41:09', '01:21:02', 'offline'),
(125, 'admin', '2018-04-27', '01:34:19', '21:50:36', 'offline'),
(126, 'admin', '2018-04-27', '21:49:54', '21:50:36', 'offline'),
(127, 'admin', '2018-04-27', '21:50:40', '19:16:52', 'offline'),
(128, 'admin', '2018-05-27', '01:08:58', '19:16:52', 'offline'),
(129, 'admin', '2018-05-27', '01:14:16', '19:16:52', 'offline'),
(130, 'admin', '2018-05-31', '00:44:15', '19:16:52', 'offline'),
(131, 'admin', '2018-06-01', '19:16:18', '19:16:52', 'offline'),
(132, 'admin', '2018-06-01', '19:17:03', '20:07:53', 'offline'),
(133, 'admin', '2018-07-03', '00:01:26', '20:07:53', 'offline'),
(134, 'admin', '2018-07-03', '00:17:25', '20:07:53', 'offline'),
(135, 'admin', '2018-07-04', '20:06:35', '20:07:53', 'offline'),
(136, 'admin', '2018-07-04', '21:04:32', '21:05:46', 'offline'),
(137, 'admin', '2018-07-07', '03:20:03', 'logged', 'online'),
(138, 'admin', '2018-07-07', '03:21:36', 'logged', 'online'),
(139, 'admin', '2018-07-08', '21:44:12', 'logged', 'online');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_online`
--

CREATE TABLE IF NOT EXISTS `users_online` (
`Id_online` int(11) NOT NULL,
  `Id_session` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=91 ;

--
-- Dumping data untuk tabel `users_online`
--

INSERT INTO `users_online` (`Id_online`, `Id_session`) VALUES
(79, '75aa7f6fc188fe6fe6421d97a8168126'),
(80, 'vpqckfsflcq5ea8aj6hmbb2go7'),
(81, 'ul4k8lfejrh8k688oo7q7hnpg6'),
(82, 'kdllitpt8kls4lc01thd0e9hu3'),
(84, 'br663fk9vhtpqb6aofsi3u57m1'),
(85, '8fv0rpl3rml0qk91si997k5cv5'),
(86, '6iej2dapr4f3shkkjc10go7ml2'),
(88, 'v95sbsou9risdt6ormmu64nl34'),
(89, '7tfgptksode9ae0rv38fi0ct56'),
(90, 'fi3vacdrccav4ers1l2q90n586');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `masterpelatihan`
--
ALTER TABLE `masterpelatihan`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `nilai_pesertapelatihan`
--
ALTER TABLE `nilai_pesertapelatihan`
 ADD PRIMARY KEY (`Id_nilai`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
 ADD PRIMARY KEY (`Id_pelatihan`);

--
-- Indexes for table `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
 ADD PRIMARY KEY (`Id_penformal`);

--
-- Indexes for table `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
 ADD PRIMARY KEY (`Id_peninformal`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`Id_peserta`), ADD UNIQUE KEY `Nip` (`Nip`);

--
-- Indexes for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
 ADD PRIMARY KEY (`Id_pespel`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`id_provinsi`), ADD UNIQUE KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
 ADD PRIMARY KEY (`Id_riwayat`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
 ADD PRIMARY KEY (`Id_sertifikat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
 ADD PRIMARY KEY (`Id_userlog`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
 ADD PRIMARY KEY (`Id_online`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=882;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=511;
--
-- AUTO_INCREMENT for table `masterpelatihan`
--
ALTER TABLE `masterpelatihan`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nilai_pesertapelatihan`
--
ALTER TABLE `nilai_pesertapelatihan`
MODIFY `Id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
MODIFY `Id_pelatihan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
MODIFY `Id_penformal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
MODIFY `Id_peninformal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `Id_peserta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
MODIFY `Id_pespel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
MODIFY `Id_riwayat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
MODIFY `Id_sertifikat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
MODIFY `Id_userlog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
MODIFY `Id_online` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
