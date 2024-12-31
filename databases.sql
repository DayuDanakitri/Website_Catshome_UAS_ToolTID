-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2024 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcatshomeprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cats`
--

INSERT INTO `cats` (`id`, `nama`, `foto`, `isi`, `tanggal_isi`) VALUES
(2, 'Sunny', 'cats_1735578825_sunny.jpg', '<p>Sunny is a little ball of sunshine wrapped in fur!&nbsp;<span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">And she can bring warmth and happiness. </span></p><p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">With a playful twinkle in her eyes and boundless energy, she turns ordinary moments into fun adventures. Whether she is chasing a string like it is treasure, basking in the sun, or greeting you with sweet purrs, Sunny makes every day brighter. She is not just a pet; she is a burst of happiness!</span></p><p><strong>Favorite Foods:</strong> Sunny loves delicious treats, especially tuna and chicken. Wet food with gravy is her favorite, and she enjoys crunchy kibble throughout the day. She loves a little extra pampering when mealtime comes around!</p><p><strong>Hobbies:</strong> Sunny enjoys playing with feather toys and chasing laser pointers. She is also a fan of puzzle feeders that reward her with tasty treats. Always up for an adventure or a cuddle session, Sunny’s energy knows no bounds!</p><p><strong>Care Tips:</strong> Sunny needs space to play and climb, so a scratching post or cat tree is a must. Regular playtime keeps her energized, and brushing her coat regularly keeps her looking great. Ensure she has a nutritious diet and fresh water to keep her healthy and happy.</p><p>Sunny is ready to bring joy into your life. Are you ready to welcome her home?</p>', '2024-12-31 09:07:08'),
(3, 'Tabby', 'cats_1735578975_tabby.jpg', '<p>A true homebody at heart, Tabby feels happiest and safest indoors. With her calm and gentle demeanor, she enjoys quiet moments spent lounging in cozy spots and observing the world from the comfort of her favorite perch. Whether she is softly purring in your lap or curling up next to you for a nap, Tabby knows how to make you feel at ease.</p><p><strong>Favorite Foods:</strong> Tabby has a taste for the finer things in life, especially rich, savory dishes like chicken and salmon. She enjoys a balanced diet of wet and dry food, and a special treat now and then always makes her day. Her gentle appetite is perfect for those who want to spoil her without overfeeding!</p><p><strong>Hobbies:</strong> Tabby loves to spend her time lounging in sunny spots, watching the world go by with curiosity. While she is not the most energetic, she enjoys short play sessions with soft toys or simple games of hide and seek. Most of all, she cherishes time spent relaxing in quiet corners or by your side during peaceful moments.</p><p><strong>Care Tips:</strong> As a home loving cat, Tabby thrives in a calm and comfortable environment. Provide her with cozy resting spots, and she will be content. While she enjoys gentle play, she does not need too much activity. Regular grooming will help keep her coat soft and shiny, and make sure she has access to fresh water and a healthy diet.</p><p>Tabby may be the perfect cat for someone looking for a serene and loving companion. Could she be your new best friend?</p>', '2024-12-31 09:21:26'),
(4, 'Midnight', 'cats_1735579006_midnight.jpg', '<p>This little ball of energy loves to play, run, pounce, and zoom around like a ninja on a big mission! </p><p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">Midnight playful nature and quick reflexes make every day an adventure. Whether darting after toys or sneaking into cozy spots, she is always ready for action. Her energy is contagious, and her sweet purrs will melt your heart when the fun winds down.</span></p><p><strong>Favorite Foods:</strong> Midnight has a taste for tuna and chicken, always ready to devour her meals with excitement. She also loves crunchy kibble as a snack to keep her energized for her next adventure!</p><p><strong>Hobbies:</strong> Midnight enjoys high-speed chases, pouncing, and exploring every nook and cranny of the house. She is a true adventurer at heart!</p><p><strong>Care Tips:</strong> Midnight thrives with plenty of playtime and space to burn off her energy. Be sure to provide interactive toys, fresh water, and a nutritious diet to keep her happy and healthy.</p>', '2024-12-31 09:34:53'),
(5, 'Snow', 'cats_1735580484_photo_2024-12-17_23-50-58.jpg', '<p>Meet the serene snowball: quietly regal, purring in peace, and expert in the art of napping! Snow loves calm and cozy.</p><p>With a gentle demeanor and soothing presence, she brings tranquility to any room. Her purring is a soft melody, the perfect soundtrack for relaxation.</p><p><strong>Favorite Foods:</strong> Snow enjoys a simple yet tasty diet, with chicken and fish flavors being her top picks. She also loves a good serving of wet food, keeping her happy and content throughout the day.</p><p><strong>Hobbies:</strong> Her hobbies mainly include napping, stretching, and observing the world from her favorite windowsill. She enjoys quiet moments, perfect for bonding.</p><p><strong>Care Tips:</strong> Snow appreciates a calm, peaceful environment. A comfy bed, regular brushing, and a balanced diet will keep her content. Be sure to offer plenty of fresh water and lots of love.</p>', '2024-12-31 09:37:48'),
(8, 'Betrand', 'cats_1735633516_photo_2024-12-17_23-49-49.jpg', '<p>Meet Betrand, a little ball of fur with a big personality! With his playful and fun spirit and curious nature.</p><p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">He is always ready to dive into the next adventure. Whether he is exploring every nook and cranny of the house or playfully batting at a toy, His energy and enthusiasm are contagious. His mischievous antics are guaranteed to bring a smile to your face, and his loving purrs will melt your heart. Betrand is more than just a pet; he is a fun-loving companion who knows how to keep things exciting!</span></p><p><strong>Favorite Foods:</strong> Betrand loves a variety of tasty treats, especially fish-flavored dishes like tuna and salmon. He also enjoys a mix of wet and dry food, and he is always up for a special snack when it’s time to spoil him. His appetite is as big as his personality, so make sure to keep his meals fresh and delicious!</p><p><strong>Hobbies:</strong> Betrand is all about exploring and discovering new things. He loves to chase after toys, especially if they move quickly or make noise! His curiosity knows no bounds, and he will happily inspect every corner of your home. But when it is time to relax, he is just as happy to curl up in your lap for some quality cuddle time.</p><p><strong>Care Tips:</strong> Betrand thrives on playtime and stimulation, so make sure to provide him with lots of interactive toys and opportunities for exploration. Regular grooming will help keep his coat in top shape, and he will appreciate a comfy bed to rest in after all his adventures. A balanced diet and plenty of fresh water are essential to keep his energy levels high.</p><p>Ready to invite this little bundle of joy into your home? Betrand is eager to fill your life with fun and love!</p>', '2024-12-31 09:30:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
