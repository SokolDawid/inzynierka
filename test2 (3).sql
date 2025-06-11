-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 27, 2025 at 04:27 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `attendance`
--

CREATE TABLE `attendance` (
  `AttendanceID` bigint(20) UNSIGNED NOT NULL,
  `MemberID` bigint(20) UNSIGNED NOT NULL,
  `ScheduleID` bigint(20) UNSIGNED NOT NULL,
  `Attendance` enum('Present','Absent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `ClassID` bigint(20) UNSIGNED NOT NULL,
  `TeacherID` bigint(20) UNSIGNED DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `MainPhoto` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `MaxAttendees` int(11) NOT NULL DEFAULT 0,
  `CurrentAttendees` int(11) NOT NULL DEFAULT 0,
  `TotalRegistered` int(11) NOT NULL DEFAULT 0,
  `RecruitmentStart` datetime DEFAULT NULL,
  `RecruitmentEnd` datetime DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `weekday` enum('Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota','Niedziela') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ClassID`, `TeacherID`, `Title`, `MainPhoto`, `Description`, `MaxAttendees`, `CurrentAttendees`, `TotalRegistered`, `RecruitmentStart`, `RecruitmentEnd`, `start_time`, `end_time`, `weekday`) VALUES
(1, 2, 'Plastyka', 'plastyka.png', '<p>Lubisz rysować, malować, tworzyć? Zapraszamy na zajęcia plastyczne w naszym Młodzieżowym Domu Kultury! To idealna przestrzeń dla dzieci w wieku około 10 lat, które pragną rozwijać swoją kreatywność i odkrywać różne techniki artystyczne. Podczas spotkań uczestnicy będą mieli okazję poznać podstawy rysunku ołówkiem, malowania farbami akrylowymi i wodnymi, pracy pastelami, a także spróbować swoich sił w tworzeniu kolaży, rzeźb z masy solnej oraz ciekawych projektów mieszanych. Dzieci nauczą się również podstaw kompozycji, mieszania kolorów i poznają najważniejsze style w sztuce.</p>\r\n    <p>Zajęcia prowadzone są w przyjaznej, motywującej atmosferze przez doświadczonych instruktorów, którzy indywidualnie podchodzą do każdego młodego artysty. Program warsztatów dostosowany jest do wieku i poziomu zaawansowania uczestników – stawiamy na rozwój twórczego myślenia i indywidualnych talentów. Podczas zajęć uczymy nie tylko technik plastycznych, ale także cierpliwości, koncentracji, rozwijamy wyobraźnię oraz zdolność pracy w grupie. Naszym celem jest, aby każde dziecko czuło się pewnie, dumne ze swoich postępów i miało odwagę eksperymentować.</p>\r\n    <p>Na zajęciach zapewniamy wszystkie profesjonalne materiały plastyczne, a każdy tydzień przynosi nową, ekscytującą tematykę prac. Tworzymy zarówno indywidualne dzieła, jak i większe projekty zespołowe. Organizujemy również wewnętrzne wystawy oraz pokazy, na których dzieci mogą zaprezentować swoje prace rodzinie i znajomym, co dodatkowo wzmacnia ich poczucie własnej wartości. Jeśli Twoje dziecko chce rozwijać pasję do sztuki, tworzyć własne małe arcydzieła i poznawać świat przez kolory i kształty — serdecznie zapraszamy do naszej plastycznej rodziny w MDK!</p>\r\n    <p><strong>Przewidywany termin zajęć:</strong> Wtorki, godz. 15:00 - 16:00</p>', 30, 2, 2, '2025-04-15 00:00:00', '2025-04-16 23:59:00', '00:00:00', '00:00:00', 'Poniedziałek'),
(7, 4, 'Plastyka', 'plastyka.png', '<p>Lubisz rysować, malować, tworzyć? Zapraszamy na zajęcia plastyczne w naszym Młodzieżowym Domu Kultury! To idealna przestrzeń dla dzieci w wieku około 10 lat, które pragną rozwijać swoją kreatywność i odkrywać różne techniki artystyczne. Podczas spotkań uczestnicy będą mieli okazję poznać podstawy rysunku ołówkiem, malowania farbami akrylowymi i wodnymi, pracy pastelami, a także spróbować swoich sił w tworzeniu kolaży, rzeźb z masy solnej oraz ciekawych projektów mieszanych. Dzieci nauczą się również podstaw kompozycji, mieszania kolorów i poznają najważniejsze style w sztuce.</p>\r\n                    <p>Zajęcia prowadzone są w przyjaznej, motywującej atmosferze przez doświadczonych instruktorów, którzy indywidualnie podchodzą do każdego młodego artysty. Program warsztatów dostosowany jest do wieku i poziomu zaawansowania uczestników – stawiamy na rozwój twórczego myślenia i indywidualnych talentów. Podczas zajęć uczymy nie tylko technik plastycznych, ale także cierpliwości, koncentracji, rozwijamy wyobraźnię oraz zdolność pracy w grupie. Naszym celem jest, aby każde dziecko czuło się pewnie, dumne ze swoich postępów i miało odwagę eksperymentować.</p>\r\n                    <p>Na zajęciach zapewniamy wszystkie profesjonalne materiały plastyczne, a każdy tydzień przynosi nową, ekscytującą tematykę prac. Tworzymy zarówno indywidualne dzieła, jak i większe projekty zespołowe. Organizujemy również wewnętrzne wystawy oraz pokazy, na których dzieci mogą zaprezentować swoje prace rodzinie i znajomym, co dodatkowo wzmacnia ich poczucie własnej wartości. Jeśli Twoje dziecko chce rozwijać pasję do sztuki, tworzyć własne małe arcydzieła i poznawać świat przez kolory i kształty — serdecznie zapraszamy do naszej plastycznej rodziny w MDK!</p>\r\n                    <p><strong>Przewidywany termin zajęć:</strong> Wtorki, godz. 15:00 - 16:00</p>', 25, 13, 19, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(8, 4, 'Muzyka', 'muzyka.jpg', '<p>Twoje dziecko kocha śpiewać, grać na instrumentach lub po prostu czuje rytm w sercu? Zapraszamy na zajęcia muzyczne w Młodzieżowym Domu Kultury! Nasze warsztaty to idealna przestrzeń dla młodych melomanów w wieku około 10 lat, którzy pragną rozwijać swoje zdolności muzyczne, poszerzać horyzonty i zdobywać nowe umiejętności. Podczas zajęć dzieci będą miały okazję poznać podstawy teorii muzyki, rytmiki, nauczą się gry na prostych instrumentach oraz pracy z głosem, a także poznają różnorodne gatunki muzyczne z całego świata.</p>\r\n<p>Zajęcia prowadzone są przez doświadczonych muzyków i pedagogów, którzy z pasją dzielą się swoją wiedzą i potrafią dostosować tempo pracy do potrzeb każdego uczestnika. Program warsztatów uwzględnia zarówno indywidualną naukę gry na instrumencie, jak i pracę w grupie – tworzymy wspólnie małe zespoły i uczymy współpracy w zespole muzycznym. Zajęcia rozwijają nie tylko zdolności muzyczne, ale również słuch, pamięć, koncentrację, kreatywność oraz wrażliwość artystyczną. Stawiamy na zabawę poprzez naukę i naukę przez zabawę.</p>\r\n<p>W ramach zajęć uczestnicy mają dostęp do instrumentów (keyboardy, bębny, flety, ukulele) oraz nowoczesnych materiałów dydaktycznych. Każdy tydzień to nowe wyzwania muzyczne – od nauki prostych utworów, przez ćwiczenia słuchowe, aż po komponowanie własnych melodii. Organizujemy również mini-koncerty, podczas których dzieci mogą zaprezentować swoje umiejętności przed rodziną i znajomymi, co wzmacnia ich pewność siebie i daje ogromną satysfakcję z występu. Jeśli Twoje dziecko marzy o muzycznej przygodzie – nasze zajęcia to idealne miejsce, by rozpocząć tę podróż!</p>\r\n<p><strong>Przewidywany termin zajęć:</strong> Czwartki, godz. 17:00 - 18:00</p>\r\n', 20, 15, 20, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(9, 4, 'Aktorstwo', 'aktorstwo.png', '<p>Twoje dziecko uwielbia występować, naśladować postacie i wcielać się w różne role? Zajęcia aktorskie w naszym Młodzieżowym Domu Kultury to doskonała okazja, by rozwijać naturalny talent sceniczny i odkrywać pasję do teatru! Warsztaty są przeznaczone dla dzieci w wieku około 10 lat, które pragną uczyć się autoprezentacji, pracy z ciałem i głosem, a także rozwijać wyobraźnię i umiejętność wyrażania emocji. Podczas zajęć uczestnicy będą poznawać podstawowe techniki aktorskie, pracować nad dykcją, emisją głosu, ruchem scenicznym oraz improwizacją teatralną.</p>\r\n<p>Warsztaty prowadzone są przez doświadczonych instruktorów teatru dziecięcego, którzy potrafią stworzyć bezpieczną i twórczą atmosferę sprzyjającą odkrywaniu własnych możliwości. Program dostosowany jest do poziomu zaawansowania i wieku dzieci – łączymy zabawę z nauką, by zajęcia były ciekawe i angażujące. Stawiamy na budowanie pewności siebie, współpracę w grupie oraz rozwój umiejętności komunikacyjnych. Dzieci uczą się panować nad tremą, występować przed publicznością i słuchać siebie nawzajem – tak, by wspólnie tworzyć prawdziwe małe przedstawienia teatralne.</p>\r\n<p>W trakcie warsztatów dzieci pracują nad etiudami, krótkimi scenkami i spektaklami, które prezentujemy podczas pokazów i wydarzeń organizowanych w MDK. Zajęcia uczą odpowiedzialności, koncentracji oraz dają ogromną frajdę z bycia częścią zespołu teatralnego. Oferujemy również elementy pracy z tekstem, interpretacji literackiej oraz wprowadzamy dzieci w świat klasyki i współczesnej dramaturgii. Jeśli Twoje dziecko marzy o scenie, kocha występy i ma w sobie aktorską iskrę – nasze zajęcia to najlepszy pierwszy krok w stronę prawdziwego teatru!</p>\r\n<p><strong>Przewidywany termin zajęć:</strong> Środy, godz. 16:30 - 17:30</p>\r\n', 30, 10, 14, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(10, 4, 'Język angielski', 'jezyk-angielski.jpg', '<p>Chcesz, aby Twoje dziecko z łatwością porozumiewało się po angielsku, pewnie mówiło i rozumiało innych? Zajęcia z języka angielskiego w Młodzieżowym Domu Kultury to idealna propozycja dla dzieci w wieku około 10 lat, które chcą uczyć się języka w przyjazny i angażujący sposób. Nasze warsztaty to połączenie nauki i zabawy – dzieci uczą się słownictwa, gramatyki i poprawnej wymowy poprzez piosenki, gry językowe, dialogi, scenki oraz interaktywne ćwiczenia, które pobudzają kreatywność i zachęcają do aktywnego uczestnictwa.</p>\r\n<p>Zajęcia prowadzone są przez doświadczonych lektorów i nauczycieli języka angielskiego, którzy potrafią dostosować metody nauczania do poziomu i potrzeb uczestników. Program jest zgodny z nowoczesnymi standardami edukacji językowej, a jednocześnie uwzględnia zainteresowania dzieci, dzięki czemu nauka nie kojarzy się z obowiązkiem, ale z przyjemnością. Podczas zajęć dzieci rozwijają wszystkie kompetencje językowe – mówienie, słuchanie, czytanie i pisanie – z naciskiem na komunikację i praktyczne użycie języka w codziennych sytuacjach.</p>\r\n<p>Stosujemy różnorodne materiały dydaktyczne, korzystamy z multimediów, kart obrazkowych, quizów i materiałów autentycznych. Każde spotkanie ma konkretny temat przewodni, który ułatwia zapamiętywanie nowych słów i struktur językowych. Zajęcia odbywają się w małych grupach, co umożliwia indywidualne podejście do każdego uczestnika i zwiększa efektywność nauki. Organizujemy również gry zespołowe, konkursy językowe oraz prezentacje projektów, które pozwalają dzieciom wykazać się przed grupą i budują pewność siebie. Jeśli chcesz, aby Twoje dziecko mówiło po angielsku swobodnie i z radością – te zajęcia są właśnie dla niego!</p>\r\n<p><strong>Przewidywany termin zajęć:</strong> Poniedziałki, godz. 16:00 - 17:00</p>\r\n', 20, 18, 19, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(11, 4, 'Fotografia', 'fotografia.jpg', '<p>Twoje dziecko interesuje się robieniem zdjęć, lubi obserwować świat przez obiektyw i uchwycać wyjątkowe momenty? Zapraszamy na zajęcia fotograficzne w Młodzieżowym Domu Kultury! Warsztaty są skierowane do dzieci w wieku około 10 lat, które chcą poznać podstawy fotografii oraz rozwijać swoje umiejętności w kreatywny i nowoczesny sposób. Uczestnicy nauczą się obsługi aparatu, zasad kompozycji, pracy ze światłem, kadrowania oraz podstaw edycji zdjęć – zarówno na profesjonalnym sprzęcie, jak i z wykorzystaniem smartfonów.</p>\r\n<p>Zajęcia prowadzone są przez pasjonatów fotografii z doświadczeniem pedagogicznym, którzy potrafią przekazać wiedzę w przystępny sposób, inspirując dzieci do samodzielnych prób i eksperymentów. Każde spotkanie to nowy temat i nowe wyzwanie – od portretów i zdjęć w plenerze, po fotografię martwej natury, architektury i eksperymenty z makrofotografią. Uczymy patrzeć uważnie, dostrzegać piękno w codziennych sytuacjach i świadomie korzystać z technik fotograficznych, by zdjęcia były nie tylko ładne, ale i ciekawe.</p>\r\n<p>W ramach zajęć dzieci będą realizować własne mini-projekty, które zostaną zaprezentowane na wystawach i pokazach organizowanych w MDK. Warsztaty rozwijają wrażliwość artystyczną, cierpliwość, poczucie estetyki i techniczne umiejętności obsługi sprzętu. Dzięki pracy w małych grupach instruktorzy mogą poświęcić czas każdemu uczestnikowi, a wspólna analiza zdjęć i konstruktywna krytyka uczą świadomego tworzenia i prezentowania swoich prac. Jeśli Twoje dziecko kocha robić zdjęcia i chce rozwijać swoją fotograficzną pasję – te zajęcia są dla niego idealne!</p>\r\n<p><strong>Przewidywany termin zajęć:</strong> Piątki, godz. 15:30 - 16:30</p>\r\n', 15, 8, 11, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(12, 4, 'Taniec', 'taniec.png', '<p>Twoje dziecko uwielbia się ruszać, tańczyć przy muzyce i wyrażać emocje ruchem? Zapraszamy na zajęcia taneczne w Młodzieżowym Domu Kultury! To doskonała propozycja dla dzieci w wieku około 10 lat, które chcą rozwijać swoje zdolności ruchowe, poczucie rytmu oraz wyobraźnię sceniczną. Warsztaty łączą w sobie różne style taneczne – od podstaw tańca klasycznego, przez elementy tańca nowoczesnego i jazzowego, aż po choreografie inspirowane popularną muzyką rozrywkową. Dzieci uczą się podstaw techniki tanecznej, rozgrzewek, pracy w rytmie i synchronizacji ruchów z muzyką.</p>\r\n<p>Zajęcia prowadzone są przez energicznych instruktorów z doświadczeniem w pracy z dziećmi, którzy potrafią zmotywować, zainspirować i stworzyć przyjazną atmosferę pełną radości i zabawy. Program warsztatów dostosowany jest do możliwości uczestników – skupiamy się na poprawie koordynacji, elastyczności, świadomości ciała oraz budowaniu pewności siebie. Taniec to nie tylko ruch – to także forma ekspresji i komunikacji, dlatego uczymy dzieci wyrażania emocji poprzez gesty, mimikę i interpretację muzyki.</p>\r\n<p>W trakcie roku uczestnicy przygotowują krótkie choreografie, które prezentowane są podczas pokazów i wydarzeń artystycznych organizowanych w MDK. Praca w grupie uczy współpracy, wzajemnego szacunku i odpowiedzialności za wspólne występy. Każde zajęcia to nowa dawka pozytywnej energii i ruchu, która pozwala dzieciom rozwijać pasję do tańca w zdrowy, kreatywny i radosny sposób. Jeśli Twoje dziecko kocha muzykę, scenę i chce poczuć się jak prawdziwy tancerz – nasze zajęcia taneczne będą dla niego idealnym wyborem!</p>\r\n<p><strong>Przewidywany termin zajęć:</strong> Wtorki, godz. 17:00 - 18:00</p>\r\n', 25, 22, 24, NULL, NULL, '00:00:00', '00:00:00', 'Poniedziałek'),
(13, NULL, 'test nazwa', 'ZMRO8EyGHk8fIpvScDLMVa5xgcVUpEynqD88PdTN.jpg', 'test opis', 15, 0, 0, '2025-05-26 00:00:00', '2025-05-28 23:59:00', '15:02:00', '17:08:00', 'Wtorek'),
(14, 2, 'test', 'classes-1.jpg', 'test', 16, 0, 0, '2025-05-26 00:00:00', '2025-05-28 23:59:00', '12:45:00', '12:49:00', 'Czwartek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes_members`
--

CREATE TABLE `classes_members` (
  `MemberID` bigint(20) UNSIGNED NOT NULL,
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `ClassID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes_members`
--

INSERT INTO `classes_members` (`MemberID`, `UserID`, `ClassID`) VALUES
(4, 5, 1),
(5, 2, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `events_news`
--

CREATE TABLE `events_news` (
  `PostID` bigint(20) UNSIGNED NOT NULL,
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `MainPhoto` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `DateEvent` date DEFAULT NULL,
  `Type` enum('Event','News') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE `gallery` (
  `PhotoID` bigint(20) UNSIGNED NOT NULL,
  `PostID` bigint(20) UNSIGNED NOT NULL,
  `PhotoName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '0001_01_01_000003_create_custom_table', 1),
(5, '2025_05_06_145913_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `RoleID` bigint(20) UNSIGNED NOT NULL,
  `RoleName` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT 1,
  `DateAdd` datetime NOT NULL DEFAULT current_timestamp(),
  `ActiveTo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleName`, `Active`, `DateAdd`, `ActiveTo`) VALUES
(1, 'user', 1, '2025-05-06 17:46:52', NULL),
(2, 'teacher', 1, '2025-05-06 17:46:52', NULL),
(3, 'admin', 1, '2025-05-06 17:46:52', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `schedule`
--

CREATE TABLE `schedule` (
  `ScheduleID` bigint(20) UNSIGNED NOT NULL,
  `ClassID` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XXquybstAbOpIYOk5RmgF55P8okeAM9fv6s1f8dc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHg2dEtUZVVpS3NEYzQzSkdEOGV0OGg3cmgwRVdnZWZOQVU3M2dJRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1748355809);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `WhoAdd` bigint(20) UNSIGNED DEFAULT NULL,
  `WhoModified` bigint(20) UNSIGNED DEFAULT NULL,
  `DateAdd` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateModified` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `PhoneNumberSecondary` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `BirthDate`, `email`, `email_verified_at`, `password`, `PhoneNumber`, `WhoAdd`, `WhoModified`, `DateAdd`, `DateModified`, `remember_token`, `created_at`, `updated_at`, `PhoneNumberSecondary`) VALUES
(2, 'awdawd', 'awda', '2025-04-06', 'mail2@mail.com', NULL, '$2y$12$3p/7YfsAG3RKHCwI1h6j2e6gmmrXqE7AyVt35hIKQh/hFVNT/2K3S', '243223234', NULL, NULL, '2025-05-06 13:54:15', '2025-05-06 13:54:15', NULL, NULL, NULL, NULL),
(4, 'tests', 'etswts', '2025-05-05', 'ste@tas.com', NULL, '$2y$12$YFfTdoWMrCyaYmOWbN0pxOePO0xWg3aHhTULgmBwK0hbnczh/6qjy', '123321123', NULL, NULL, '2025-05-06 14:11:16', '2025-05-06 14:11:16', NULL, NULL, NULL, NULL),
(5, 'michal', 'nowak', '2025-05-08', 'mail10@mail.com', NULL, '$2y$12$lpnQ9Pr7DSgsJmKARTt7PuEopUg1KvlD3ukUqKRGO8scmFjKJzFz.', NULL, NULL, NULL, '2025-05-07 16:05:58', '2025-05-07 16:05:58', NULL, NULL, NULL, NULL),
(6, 'Wiktor', 'Kowalski', '2010-02-22', 'WKowalski@mail.com', NULL, '$2y$12$xuJ0hWLytsuYvbtFfEObt.X/Ipg9gsp1BRYhTD67Vj2K8S0F7hY5O', '123456789', NULL, NULL, '2025-05-08 13:30:15', '2025-05-08 13:30:15', NULL, NULL, NULL, NULL),
(7, 'awfaf', 'awfwaf', '2025-05-06', 'mmail@mail.com', NULL, '$2y$12$qtWWwEmiTJWDG5civ917FeXM.CSv9oZc/wxrTVE9j1jxHv3oQcfLe', '123321321', NULL, NULL, '2025-05-08 13:31:49', '2025-05-08 13:31:49', NULL, NULL, NULL, NULL),
(8, 'awfaaf', 'awfwafwaa', '2025-05-02', 'maail@mail.com', NULL, '$2y$12$7LqCSH8HFbQvDbHRZQ/hYuttdXU7KYhfBHMOQpYPxtD0e8YdQhuGe', '321123321', NULL, NULL, '2025-05-08 15:34:13', '2025-05-08 15:34:13', NULL, NULL, NULL, NULL),
(9, 'agwag256', 'agwag25', '2025-05-01', 'agwa@agaw.waf', NULL, '$2y$12$/75W4pg1ZSs/ljwPrhvvjO47ZrH292EoN/wWcXl1aDnFwrhIdAiZC', '123123123', NULL, NULL, '2025-05-08 15:40:32', '2025-05-27 13:41:41', NULL, NULL, NULL, NULL),
(10, 'awgaga', 'agwagwa', '2025-05-02', 'awg@agw.waf', NULL, '$2y$12$uNiHrSLsXLoEWQeyFCodmO7zwpWzEwkOfpNfAjvNcZK369lUe1.tS', '234123123', NULL, NULL, '2025-05-08 15:41:50', '2025-05-08 15:41:50', NULL, NULL, NULL, NULL),
(11, 'afw', 'awfa', '2025-05-01', 'awf@afa.aw', NULL, '$2y$12$FrDuAENUHvLhu4iQKaTDyOyXNBr.oO3D9Whc8QndCG7VpxNnP8zxu', '123345456', NULL, NULL, '2025-05-08 15:42:47', '2025-05-08 15:42:47', NULL, NULL, NULL, NULL),
(12, 'test1', 'test2', '2025-05-06', 'test@test.com', NULL, '$2y$12$SRDtJ44thVJQjhbqyqnpmulvUVz0kQbiK8GUiU5IubhlcJ696Zuuy', '123123123', NULL, NULL, '2025-05-10 11:51:50', '2025-05-10 11:51:50', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_roles`
--

CREATE TABLE `users_roles` (
  `UserRoleID` bigint(20) UNSIGNED NOT NULL,
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `RoleID` bigint(20) UNSIGNED NOT NULL,
  `DateAssignment` datetime NOT NULL DEFAULT current_timestamp(),
  `DateRevoke` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`UserRoleID`, `UserID`, `RoleID`, `DateAssignment`, `DateRevoke`) VALUES
(3, 5, 1, '2025-05-07 18:05:58', NULL),
(4, 6, 1, '2025-05-08 15:30:15', NULL),
(5, 7, 1, '2025-05-08 15:31:49', NULL),
(6, 8, 1, '2025-05-08 17:34:13', NULL),
(7, 9, 1, '2025-05-08 17:40:32', NULL),
(8, 10, 1, '2025-05-08 17:41:50', NULL),
(9, 11, 1, '2025-05-08 17:42:47', NULL),
(10, 12, 1, '2025-05-10 13:51:50', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttendanceID`),
  ADD KEY `attendance_memberid_foreign` (`MemberID`),
  ADD KEY `attendance_scheduleid_foreign` (`ScheduleID`);

--
-- Indeksy dla tabeli `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ClassID`),
  ADD KEY `fk_teacher` (`TeacherID`);

--
-- Indeksy dla tabeli `classes_members`
--
ALTER TABLE `classes_members`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `classes_members_userid_foreign` (`UserID`),
  ADD KEY `classes_members_classid_foreign` (`ClassID`);

--
-- Indeksy dla tabeli `events_news`
--
ALTER TABLE `events_news`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `events_news_userid_foreign` (`UserID`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`PhotoID`),
  ADD KEY `gallery_postid_foreign` (`PostID`);

--
-- Indeksy dla tabeli `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeksy dla tabeli `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indeksy dla tabeli `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ScheduleID`),
  ADD KEY `schedule_classid_foreign` (`ClassID`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_whoadd_foreign` (`WhoAdd`),
  ADD KEY `users_whomodified_foreign` (`WhoModified`);

--
-- Indeksy dla tabeli `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`UserRoleID`),
  ADD KEY `users_roles_userid_foreign` (`UserID`),
  ADD KEY `users_roles_roleid_foreign` (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `AttendanceID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ClassID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `classes_members`
--
ALTER TABLE `classes_members`
  MODIFY `MemberID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events_news`
--
ALTER TABLE `events_news`
  MODIFY `PostID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `PhotoID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ScheduleID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `UserRoleID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_memberid_foreign` FOREIGN KEY (`MemberID`) REFERENCES `classes_members` (`MemberID`),
  ADD CONSTRAINT `attendance_scheduleid_foreign` FOREIGN KEY (`ScheduleID`) REFERENCES `schedule` (`ScheduleID`);

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `fk_teacher` FOREIGN KEY (`TeacherID`) REFERENCES `users` (`UserID`) ON DELETE SET NULL;

--
-- Constraints for table `classes_members`
--
ALTER TABLE `classes_members`
  ADD CONSTRAINT `classes_members_classid_foreign` FOREIGN KEY (`ClassID`) REFERENCES `classes` (`ClassID`),
  ADD CONSTRAINT `classes_members_userid_foreign` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `events_news`
--
ALTER TABLE `events_news`
  ADD CONSTRAINT `events_news_userid_foreign` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_postid_foreign` FOREIGN KEY (`PostID`) REFERENCES `events_news` (`PostID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_classid_foreign` FOREIGN KEY (`ClassID`) REFERENCES `classes` (`ClassID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_whoadd_foreign` FOREIGN KEY (`WhoAdd`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `users_whomodified_foreign` FOREIGN KEY (`WhoModified`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_roleid_foreign` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`),
  ADD CONSTRAINT `users_roles_userid_foreign` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
