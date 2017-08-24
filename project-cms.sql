-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Aug 2017 um 16:44
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `project-cms`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `html` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `special` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `html`, `timestamp`, `user_id`, `page_id`, `name`, `special`) VALUES
(1, '<p>Content</p>', '0000-00-00 00:00:00', 0, 1, '', 0),
(2, '<nav class=\"navbar navbar-inverse\">\r\n    <div class=\"container-fluid\">\r\n      <div class=\"navbar-header\">\r\n        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">\r\n          <span class=\"icon-bar\"></span>\r\n          <span class=\"icon-bar\"></span>\r\n          <span class=\"icon-bar\"></span>\r\n        </button>\r\n        <a class=\"navbar-brand\" href=\"#\">\r\n          WORK BLOG\r\n        </a>\r\n      </div>\r\n      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">\r\n        <ul class=\"nav navbar-nav\">\r\n          <li class=\"active\"><a href=\"#\">Home</a></li>\r\n          <li><a href=\"?page_id=1\">Page 1</a></li>\r\n          <li><a href=\"?page_id=2\">Page 2</a></li>\r\n          <li><a href=\"?page_id=3\">Page 3</a></li>\r\n        </ul>\r\n        <ul class=\"nav navbar-nav navbar-right\">\r\n          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>\r\n          <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n  </nav>\r\n', '2017-08-24 14:38:03', 0, 1, 'header', 1),
(3, '<footer>\r\n  <p>Posted by: Hege Refsnes</p>\r\n  <p>Contact information: <a href=\"mailto:someone@example.com\">\r\n  someone@example.com</a>.</p>\r\n</footer>', '2017-08-24 12:53:43', 0, 1, 'footer', 1),
(4, '<p>C2</p>', '2017-08-24 12:51:21', 0, 2, '', 0),
(5, 'dfs', '0000-00-00 00:00:00', 0, 1, 'test', 0),
(6, 'dfs', '0000-00-00 00:00:00', 0, 1, 'test', 0),
(7, 'dfs', '0000-00-00 00:00:00', 0, 1, 'test', 0),
(8, 'dfs', '0000-00-00 00:00:00', 0, 1, 'test', 0),
(9, 'dfs', '0000-00-00 00:00:00', 0, 1, 'test', 0),
(10, 'Page 2', '0000-00-00 00:00:00', 0, 2, 'dsfs', 0),
(11, '<h1>sadfasdf</h1>', '0000-00-00 00:00:00', 0, 1, 'sd', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'prindom', 'password', 'test@mail.com');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
