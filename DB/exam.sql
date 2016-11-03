-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 nov 2016 om 10:22
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL DEFAULT '0',
  `question_id` int(11) NOT NULL DEFAULT '0',
  `answer` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `answer`
--

TRUNCATE TABLE `answer`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `user_id_1` int(11) DEFAULT NULL,
  `user_id_2` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `calendar`
--

TRUNCATE TABLE `calendar`;
--
-- Gegevens worden geëxporteerd voor tabel `calendar`
--

INSERT INTO `calendar` (`id`, `user_id_1`, `user_id_2`, `date`, `time`, `exam_id`, `student_id`) VALUES
(5, 2, 3, '2016-11-02', '06:28:23', 3, 1),
(4, 1, 2, '2016-11-03', '14:11:39', 3, 1),
(3, 1, 2, '2016-11-02', '06:28:23', 1, 2),
(2, 1, 2, '2016-11-03', '18:17:54', 2, 2),
(1, 1, 2, '2016-11-02', '09:21:53', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabel which connects questions to exam type';

--
-- Tabel leegmaken voor invoegen `exam`
--

TRUNCATE TABLE `exam`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL DEFAULT '0',
  `exam_id` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `questions`
--

TRUNCATE TABLE `questions`;
--
-- Gegevens worden geëxporteerd voor tabel `questions`
--

INSERT INTO `questions` (`id`, `question`, `exam_id`, `score`) VALUES
(1, 'DID IT WORK?', 3, 5),
(17, 'DID IT WORK AGAIN AGAIN AGAIN?', 1, 100),
(18, 'DID IT WORK AGAIN AGAIN AGAIN?', 1, 100),
(15, 'DID IT WORK AGAIN?', 1, 100),
(16, 'DID IT WORK AGAIN AGAIN?', 1, 100);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `calendar_id` int(11) NOT NULL DEFAULT '0',
  `score_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `result`
--

TRUNCATE TABLE `result`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL DEFAULT '0',
  `insufficient` bit(1) NOT NULL DEFAULT b'0',
  `sufficient` bit(1) NOT NULL DEFAULT b'0',
  `good` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `score`
--

TRUNCATE TABLE `score`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `ov_number` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `student`
--

TRUNCATE TABLE `student`;
--
-- Gegevens worden geëxporteerd voor tabel `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `ov_number`) VALUES
(1, 'Simon', 'Besseling', 99029652),
(2, 'Thom', 'Kaptein', 99099099);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `first_name` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `last_name` varchar(100) COLLATE latin1_german1_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Tabel leegmaken voor invoegen `user`
--

TRUNCATE TABLE `user`;
--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`) VALUES
(1, 'Slemmer', 'Jeroen', 'Slemmer'),
(2, 'Scharloo', 'Jan', 'Scharloo'),
(3, 'Feiko', 'Feiko', 'Bronsveld');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabel leegmaken voor invoegen `users`
--

TRUNCATE TABLE `users`;
--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT voor een tabel `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
