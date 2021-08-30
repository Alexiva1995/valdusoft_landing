-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2021 a las 15:30:30
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valdusof_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allies`
--

CREATE TABLE `allies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_circular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `allies`
--

INSERT INTO `allies` (`id`, `name`, `description`, `link`, `logo`, `logo_circular`, `name_image`, `created_at`, `updated_at`) VALUES
(1, 'Smartbunny', 'Creamos ideas originales que tienen sentido para su negocio. ', 'https://www.smartbunny.co', 'smart_bunny.webp', 'smart_bunny.webp', 'smart_bunny.webp', NULL, NULL),
(2, 'Sinergia', 'El Resultado siempre es mayor a la suma de las partes', 'https://sinergiared.com', 'sinergia.webp', 'sinergia.webp', 'sinergia.webp', NULL, NULL),
(3, 'Indigo marketing', 'Agencia de Marketing en Córdoba', 'https://indigomarketing.com.ar', 'indigo.webp', 'indigo.webp', 'indigo.webp', NULL, NULL),
(4, 'Minka brand', 'Estudio de Branding y Comunicación', 'http://minkabrand.co', 'minka.webp', 'minka.webp', 'minka.webp', NULL, NULL),
(5, 'Efranet', 'Web Hosting, VPS, Servidores Dedicados', 'https://www.efranet.net/index.php', 'efranet.webp', 'efranet.webp', 'efranet.webp', NULL, NULL),
(6, 'Bisonte', '', 'https://bisonte.co', 'bisonte.webp', 'bisonte.webp', 'valdusoft.webp', NULL, NULL),
(7, 'Valdusoft', '¡LO QUE IMAGINAS ES POSIBLE!', 'https://valdusoft.com', 'valdusoft.webp', 'valdusoft.webp', 'valdusoft.webp', NULL, NULL),
(9, 'Otros', 'Kipersoft, Universal Profits', 'https://valdusoft.com', 'valdusoft.webp', 'valdusoft.webp', 'valdusoft.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Probando1234', 'crisleivysngil@gmail.com', 'saesrdtfkyulg,fmdrhseawszdxhcfggkuh', '2fghtewraeWRTAYUJYJTHRGAEWERDTYF', 'zdxfhjfykgulh,jhgfgdxhjklk.k.jhgszxdcfgdftyjtrQAWESRDTFYGUGYTRE', '2020-11-09 21:23:01', '2020-11-09 21:23:01'),
(2, 'Prueba de correo', 'crisleivysgil@valdusoft.com', 'Esto es una prueba de envi\'io', '0414-28288278', 'Esto es una prueba de envi\'io de correo', '2021-01-28 02:04:06', '2021-01-28 02:04:06'),
(3, 'Probando envío de correo', 'crisleivysgil@valdusoft.com', 'Esto es una prueba de envió de correo', '0426-55555555', 'Esto es una prueba de envió de correo...', '2021-01-28 02:08:43', '2021-01-28 02:08:43'),
(4, 'Luisanaelena Marín', 'lvmb29@gmail.com', 'Prueba de Confirmación', '04266379981', 'Esto es una prueba de Luisanaelena Marín', '2021-03-10 18:09:08', '2021-03-10 18:09:08'),
(5, 'Luisanaelena Marín', 'lvmb29@gmail.com', 'Prueba de Confirmación', '04266379981', 'esto es una prueba para confirmar la llegada de los correos', '2021-03-10 18:23:49', '2021-03-10 18:23:49'),
(6, 'Luisanaelena Marín', 'lvmb29@gmail.com', 'Prueba de Confirmación', '04266379981', 'sjkhdfjsdfhjds fjsdfhjdshajhjghjdhgjdfhjg dfjgjhdfjkshgjhdfjghjdfhgjdfhjsghdfjhgjfhdg', '2021-03-10 18:31:39', '2021-03-10 18:31:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `name`, `job_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Alexis Valera', NULL, NULL, NULL, NULL),
(2, 'Brayan Arias', NULL, NULL, NULL, NULL),
(3, 'Carlos Gonzalez', NULL, NULL, NULL, NULL),
(4, 'Christopher Chirino', NULL, NULL, NULL, NULL),
(5, 'Crisleivys Gil', NULL, NULL, NULL, NULL),
(6, 'Eduardo Nava', NULL, NULL, NULL, NULL),
(7, 'Freddy Millan', NULL, NULL, NULL, NULL),
(8, 'Joe Rodríguez', NULL, NULL, NULL, NULL),
(9, 'Luisanaelena Marín', NULL, NULL, NULL, NULL),
(10, 'Ramón Figuera', NULL, NULL, NULL, NULL),
(11, 'Pedro Henriquez', NULL, NULL, NULL, NULL),
(12, 'Pietro Pasqualis', NULL, NULL, NULL, NULL),
(13, 'Victor Utrera', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_27_002347_create_allies_table', 1),
(5, '2020_10_27_002922_create_tags_table', 1),
(6, '2020_10_27_003022_create_projects_table', 1),
(7, '2020_10_28_143233_create_contacts_table', 1),
(8, '2021_01_06_164142_update_projects', 2),
(9, '2021_01_12_210619_update_allies', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ally_id` bigint(20) UNSIGNED NOT NULL,
  `ally_imag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porta_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 = Inactivo. 1 = Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `link`, `description`, `ally_id`, `ally_imag`, `porta_image`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Efranet', 'https://www.efranet.net/', 'Desarrollo en Wordpress, Agencia de hosting y Almacenamiento', 1, 'Logo-2.png', 'Logo-1.webp', '', 1, NULL, '2021-03-09 19:53:13'),
(2, 'Ccyt', 'https://www.behance.net/gallery/31621473/Arreglos-a-pagina-web-de-ccyt', 'Web Informativa realizada en Wordpress para centro de educacion', 9, 'ccyt.webp', 'ccyt.webp', '', 1, NULL, NULL),
(3, 'Only kite surf', 'http://www.onlykiteschool.com.ar/', 'Desarrollo Web a medida en HTML5, CSS3, JS, Jquery y bootstrap 3, basada en la tecnica pixel perfect', 4, 'only_kite_surf.webp', 'only_kite_surf.webp', '', 1, NULL, NULL),
(4, 'Profesores extranjeros', 'https://profesoresextranjeros.com/', 'Rediseño de web informativa en Drupal con técnicas UI/UX', 6, 'profesores_extranjeros.webp', 'profesores_extranjeros.webp', '', 1, NULL, NULL),
(5, 'Preansa', 'http://www.preansa.com.co/', 'Web Corporativa realizada en Wordpress', 5, 'preansa.webp', 'preansa.webp', '', 1, NULL, NULL),
(6, 'MBA', 'https://mybusinessacademypro.com/academia', 'Desarrollo web en laravel y VueJs, con sistema de streaming', 2, 'mba.webp', 'mba.webp', '', 1, NULL, '2021-03-09 20:17:52'),
(7, 'Fxecrypto', 'https://www.ecryptosmart.com/', 'Desarrollo con laravel y 3web.js integración a blochain', 7, 'fxecrypto.webp', 'fxecrypto.webp', '', 1, NULL, NULL),
(8, 'Transformate', 'https://transformatepro.com/', 'Plataforma E-Learning con Laravel y Uikit CSS', 7, 'transformate.webp', 'transformate.webp', '', 1, NULL, '2021-03-09 20:23:08'),
(9, 'Levelup', 'https://comunidadlevelup.com/', 'Sotfware Multinivel Con Laravel', 7, 'levelup.webp', 'levelup.webp', '', 1, NULL, '2021-03-09 20:23:35'),
(10, 'Cruzatel', 'https://www.cruzatel.com/', 'Software Multinivel con Laravel e Integración a Coinpayments', 7, 'cruzatel.webp', 'cruzatel.webp', '', 1, NULL, '2021-03-09 20:24:30'),
(11, 'Breve', 'https://breve.com.co/programardomicilio', 'Software para Deliverys, Laravel', 7, 'breve.webp', 'breve.webp', '', 1, NULL, '2021-03-09 20:24:59'),
(12, 'Bananalegal', 'https://legalbananas.com/', 'Software para administración y firma de documentos por medio de blockchain', 7, 'banana_legal.webp', 'banana_legal.webp', '', 1, NULL, '2021-03-09 20:25:27'),
(13, 'Brainbow', 'https://brainbow.capital/', 'Software Multinivel con Laravel e integración a Coinpayments', 7, 'brainbow.webp', 'brainbow.webp', '', 1, NULL, '2021-03-09 20:26:05'),
(14, 'Universal Profits', 'https://universal-profits.com/mioficina/login', 'Software Multinivel con Laravel e integración a Coinpayments, control de inversiones', 9, 'universal_prfits.webp', 'universal_prfits.webp', '', 1, NULL, '2021-03-09 20:27:18'),
(15, 'Unión Capital', 'https://mioficina.unioncapital.eu/', 'Software Multinivel con Laravel e integración a Coinpayments,', 7, 'union_capital.webp', 'union_capital.webp', '', 1, NULL, '2021-03-09 20:27:47'),
(16, 'Royal green', 'https://royalgreen.company/mioficina/login', 'Software Multinivel con Laravel e integración a Coinpayments', 7, 'royal_green.webp', 'royal_green.webp', '', 1, NULL, '2021-03-09 20:28:17'),
(17, 'Viral media', 'https://viralmediapanel.com/', 'Software Multinivel con Laravel e integración a Coinpayments', 7, 'viral-media.webp', 'viral-media.webp', '', 1, NULL, '2021-03-09 20:28:56'),
(18, 'Emedusc', 'https://emeduc.org/sobre-nosotros/', 'LMS en Wordpress y Woocommerce', 7, 'emedusc.webp', 'emedusc.webp', '', 1, NULL, '2021-03-09 20:29:36'),
(19, 'Calzado Garvi', 'https://www.behance.net/gallery/40896299/Garvi', 'Ecommerce de Zapatería realizado en Magento', 7, 'calzado_garvi.webp', 'calzado_garvi.webp', '', 1, NULL, '2021-03-09 20:30:13'),
(20, 'Instituto Especial Colón', 'https://www.behance.net/gallery/31965983/Instituto-Especial-colon', 'Web informativa para instituto Especial', 7, 'instituto_color.webp', 'instituto_color.webp', '', 1, NULL, '2021-03-09 20:30:44'),
(21, 'Enterprise', 'https://www.behance.net/gallery/36368447/Diseno-web-y-Sistema-php-para-Enterprice            Xkd', 'Sistema de Tranking en PHP', 7, 'enterprise.webp', 'enterprise.webp', '', 1, NULL, '2021-03-09 20:31:08'),
(22, 'XKD', 'https://www.behance.net/gallery/37734099/Diseno-web-Xkd', 'Ecommerce con customizador de camisetas Wordpress', 7, 'xkd-enterprise2.webp', 'xkd-enterprise2.webp', '', 1, NULL, '2021-03-09 20:31:42'),
(23, 'Alimac', 'https://www.behance.net/gallery/38189091/Alimac', 'Tienda de videojuegos en Prestashop', 7, 'alimac.webp', 'alimac.webp', '', 1, NULL, '2021-03-09 20:32:06'),
(24, 'Magic travel', 'https://www.behance.net/gallery/109277841/Magic-Travel', 'Web Informativa realizada en Wordpress', 7, 'magic_travel.webp', 'magic_travel.webp', '', 1, NULL, '2021-03-09 20:32:32'),
(25, 'Tinytu', 'https://www.behance.net/gallery/40897253/Tinytu', 'Ecommerce de títeres en Prestashop', 7, 'tinytu.webp', 'tinytu.webp', '', 1, NULL, '2021-03-09 20:32:56'),
(26, 'Fittech', 'https://valdusoft.com/', 'App Móvil de entrenamiento y nutrición', 1, 'fittech.webp', 'fittech.webp', '', 1, NULL, '2021-03-09 20:19:06'),
(27, 'Liso y liso', 'https://lisosylisos.co', 'Web Informativa realizada en Wordpress', 1, 'lisos_lisos.webp', 'lisos_lisos.webp', '', 1, NULL, '2021-03-09 20:19:48'),
(28, 'Hs stone', 'https://www.hsstonegallery.com/', 'Catálogo realizado en Wordpress', 1, 'hs_stone.webp', 'hs_stone.webp', '', 1, NULL, '2021-03-09 20:20:20'),
(31, 'Recomiendo', 'https://valdusoft.com/', 'App Movil de sitios y comidas', 1, 'recomiendo.webp', 'recomiendo.webp', '', 1, NULL, '2021-03-09 20:20:53'),
(32, 'Bastian', 'https://valdusoft.com/', 'App Móvil de Captación', 1, 'bastian.webp', 'bastian.webp', '', 1, NULL, '2021-03-09 20:21:30'),
(33, 'Dore The Golden Cake', 'https://dorethegoldencake.com/', 'Web Informativa realizada en Wordpress', 9, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-03-09 20:16:21'),
(34, 'Lavanderia Universal', 'http://lavanderiauniversal.com/', 'Web Informativa realizada en Wordpress', 9, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:54:15', '2021-03-09 20:16:38'),
(35, 'Sello de confianza', 'https://valdusoft.com/', 'Formulario y backoffice', 7, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-02-18 23:49:00'),
(36, 'Dimelo', 'https://dimelo.vip/', 'Web de captación realizada en React.js', 1, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-02-18 23:49:00'),
(37, 'GoldenBIT', 'http://goldenbit.company/', 'Software Multinivel con Laravel e integración a Coinpayments', 7, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-03-09 20:34:19'),
(38, 'Trasendence', 'https://eventos.universal-profits.com/', 'Landing de captación con embudo de venta', 7, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-03-09 20:34:40'),
(39, 'Wealht ocean', 'https://valdusoft.com/', 'Landing web informativa y backoffice', 7, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(40, 'FTX Live', 'http://ftxlive.com/office', 'Dsearrollo web en laravel y VueJs, con sistema de streaming', 2, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(41, 'Vitawel', 'https://valdusoft.com/', 'Dsearrollo web en laravel y Angular', 7, 'Logo-2.png', 'vitawel.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(42, 'Tienda Impaz', 'https://valdusoft.com', 'Ecommerce con Wordpress', 7, 'Logo-2.png', 'impaz.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(43, 'Merciad', 'https://valdusoft.com/', 'Desarrollo web en laravel', 7, 'Logo-2.png', 'merciad.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(44, 'TecnoBox Store', 'https://valdusoft.com', 'Ecommerce con Wordpress', 7, 'Logo-2.png', 'tecnobox.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(45, 'Tecno Pug', 'https://valdusoft.com', 'Ecommerce con Wordpress', 7, 'Logo-2.png', 'tecnopug.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(47, 'Alma Coach', 'https://amacoach.com/', 'Web de membresías en Wordpress', 3, 'alma_coach.webp', 'alma_coach.webp', '', 1, NULL, '2021-03-09 20:09:45'),
(48, 'America del Sur', 'https://amacoach.com/', 'Ecommerce con Magento de moda', 3, 'america_del_sur.webp', 'america_del_sur.webp', '', 1, NULL, NULL),
(49, 'Chineko', 'https://chineko.com.ar/', 'Ecommerce de cholas con Wordpress', 3, 'chineko.webp', 'chineko.webp', '', 1, NULL, NULL),
(50, 'Dino Butelli', 'https://dinobutelli.com.ar/', 'Ecommerce de calzado con Wordpress', 3, 'dino_butelli.webp', 'dino_butelli.webp', '', 1, NULL, NULL),
(51, 'Zumik', 'https://pintureriaszumik.com.ar/', 'Catalogo realizada en Wordpress', 3, 'szumik.webp', 'szumik.webp', '', 1, NULL, '2021-03-09 20:12:56'),
(52, 'Zetla', 'https://zetla.com.ar/', 'Desarrollo landing pixel perfect', 3, 'zetla.webp', 'zetla.webp', '', 1, NULL, NULL),
(53, 'Fullpowermoto', 'https://fullpowermoto.com/', 'Ecommerce con Wordpress', 7, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:49:00', '2021-02-18 23:49:00'),
(54, 'Zona Inmobiliaria', 'https://valdusoft.com', 'Venta de inmuebles en wordpres', 3, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-02-18 23:54:15', '2021-02-18 23:54:15'),
(55, 'Pawsitivebox', 'http://pawsitivebox.com/', 'Ecommerce con Wordpress', 9, 'Logo-2.png', 'Logo-1.webp', '', 1, '2021-03-09 16:38:02', '2021-03-09 20:32:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects_tags`
--

CREATE TABLE `projects_tags` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `projects_tags`
--

INSERT INTO `projects_tags` (`id`, `project_id`, `tag_id`) VALUES
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(8, 7, 2),
(9, 7, 3),
(90, 1, 2),
(91, 47, 2),
(92, 48, 2),
(93, 49, 2),
(94, 50, 2),
(95, 51, 2),
(96, 52, 2),
(97, 54, 2),
(98, 33, 2),
(99, 34, 2),
(100, 43, 2),
(101, 43, 3),
(102, 6, 2),
(103, 6, 3),
(104, 40, 2),
(105, 40, 3),
(106, 26, 1),
(107, 26, 4),
(108, 27, 2),
(109, 28, 2),
(110, 31, 1),
(111, 31, 4),
(112, 32, 1),
(113, 32, 4),
(114, 36, 2),
(115, 36, 3),
(116, 8, 2),
(117, 8, 3),
(118, 9, 2),
(119, 9, 3),
(120, 9, 4),
(121, 10, 2),
(122, 10, 3),
(123, 10, 4),
(124, 11, 2),
(125, 11, 3),
(126, 11, 4),
(127, 12, 2),
(128, 12, 3),
(129, 13, 2),
(130, 13, 3),
(131, 13, 4),
(134, 14, 2),
(135, 14, 3),
(136, 15, 2),
(137, 15, 3),
(138, 16, 2),
(139, 16, 3),
(140, 17, 2),
(141, 17, 3),
(142, 18, 2),
(143, 18, 3),
(144, 19, 2),
(145, 20, 2),
(146, 21, 2),
(147, 21, 3),
(148, 22, 2),
(149, 22, 3),
(150, 22, 4),
(151, 23, 2),
(152, 23, 3),
(153, 23, 4),
(154, 24, 2),
(155, 25, 2),
(156, 35, 2),
(157, 35, 3),
(158, 37, 2),
(159, 37, 3),
(160, 37, 4),
(161, 38, 2),
(162, 38, 3),
(163, 38, 4),
(164, 39, 2),
(165, 39, 3),
(166, 41, 2),
(167, 41, 3),
(168, 42, 2),
(169, 44, 2),
(170, 45, 2),
(171, 53, 2),
(172, 55, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects_technologies`
--

CREATE TABLE `projects_technologies` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `projects_technologies`
--

INSERT INTO `projects_technologies` (`id`, `project_id`, `technology_id`) VALUES
(5, 4, 2),
(6, 4, 3),
(7, 4, 4),
(8, 4, 7),
(9, 5, 1),
(10, 5, 2),
(11, 5, 3),
(12, 5, 4),
(13, 2, 1),
(14, 2, 2),
(15, 2, 3),
(16, 2, 4),
(17, 3, 2),
(18, 3, 3),
(19, 3, 4),
(20, 3, 5),
(21, 3, 6),
(28, 7, 2),
(29, 7, 3),
(30, 7, 4),
(31, 7, 6),
(32, 7, 9),
(37, 1, 1),
(38, 1, 2),
(39, 1, 3),
(40, 1, 4),
(41, 47, 1),
(42, 47, 2),
(43, 47, 3),
(44, 47, 4),
(45, 48, 1),
(46, 48, 2),
(47, 48, 3),
(48, 48, 4),
(49, 49, 1),
(50, 49, 2),
(51, 49, 3),
(52, 49, 4),
(53, 50, 1),
(54, 50, 2),
(55, 50, 3),
(56, 50, 4),
(57, 51, 1),
(58, 51, 2),
(59, 51, 3),
(60, 51, 4),
(61, 52, 1),
(62, 52, 2),
(63, 52, 3),
(64, 52, 4),
(65, 54, 1),
(66, 54, 2),
(67, 54, 3),
(68, 54, 4),
(69, 33, 1),
(70, 33, 2),
(71, 33, 3),
(72, 33, 4),
(73, 34, 1),
(74, 34, 2),
(75, 34, 3),
(76, 34, 4),
(77, 43, 2),
(78, 43, 3),
(79, 43, 4),
(80, 43, 6),
(81, 43, 9),
(82, 6, 2),
(83, 6, 3),
(84, 6, 4),
(85, 6, 6),
(86, 6, 8),
(87, 6, 9),
(88, 40, 2),
(89, 40, 3),
(90, 40, 4),
(91, 40, 6),
(92, 40, 8),
(93, 40, 9),
(94, 26, 2),
(95, 26, 3),
(96, 26, 4),
(97, 26, 6),
(98, 26, 9),
(99, 26, 13),
(100, 26, 14),
(101, 27, 1),
(102, 27, 2),
(103, 27, 3),
(104, 27, 4),
(105, 28, 1),
(106, 28, 2),
(107, 28, 3),
(108, 28, 4),
(109, 31, 2),
(110, 31, 3),
(111, 31, 4),
(112, 31, 6),
(113, 31, 9),
(114, 31, 13),
(115, 31, 14),
(116, 32, 2),
(117, 32, 3),
(118, 32, 6),
(119, 32, 9),
(120, 32, 13),
(121, 32, 14),
(122, 36, 2),
(123, 36, 3),
(124, 36, 4),
(125, 36, 6),
(126, 36, 8),
(127, 36, 9),
(128, 8, 2),
(129, 8, 3),
(130, 8, 4),
(131, 8, 5),
(132, 8, 9),
(133, 8, 10),
(134, 9, 2),
(135, 9, 3),
(136, 9, 4),
(137, 9, 6),
(138, 9, 9),
(139, 10, 2),
(140, 10, 3),
(141, 10, 4),
(142, 10, 6),
(143, 10, 9),
(144, 11, 2),
(145, 11, 3),
(146, 11, 4),
(147, 11, 5),
(148, 11, 6),
(149, 11, 9),
(150, 12, 2),
(151, 12, 3),
(152, 12, 4),
(153, 12, 6),
(154, 12, 9),
(155, 13, 2),
(156, 13, 3),
(157, 13, 4),
(158, 13, 6),
(159, 13, 9),
(165, 14, 2),
(166, 14, 3),
(167, 14, 4),
(168, 14, 6),
(169, 14, 9),
(170, 15, 2),
(171, 15, 3),
(172, 15, 4),
(173, 15, 6),
(174, 15, 9),
(175, 16, 2),
(176, 16, 3),
(177, 16, 4),
(178, 16, 6),
(179, 16, 9),
(180, 17, 2),
(181, 17, 3),
(182, 17, 4),
(183, 17, 6),
(184, 17, 9),
(185, 18, 1),
(186, 18, 2),
(187, 18, 3),
(188, 18, 4),
(189, 19, 2),
(190, 19, 3),
(191, 19, 4),
(192, 19, 11),
(193, 20, 1),
(194, 20, 2),
(195, 20, 3),
(196, 20, 4),
(197, 21, 2),
(198, 21, 3),
(199, 21, 4),
(200, 21, 6),
(201, 22, 1),
(202, 22, 2),
(203, 22, 3),
(204, 22, 4),
(205, 23, 2),
(206, 23, 3),
(207, 23, 4),
(208, 23, 12),
(209, 24, 1),
(210, 24, 2),
(211, 24, 3),
(212, 24, 4),
(213, 25, 2),
(214, 25, 3),
(215, 25, 4),
(216, 25, 12),
(217, 35, 2),
(218, 35, 3),
(219, 35, 4),
(220, 35, 6),
(221, 35, 8),
(222, 35, 9),
(223, 37, 2),
(224, 37, 3),
(225, 37, 4),
(226, 37, 6),
(227, 37, 9),
(228, 38, 2),
(229, 38, 3),
(230, 38, 4),
(231, 38, 9),
(232, 39, 2),
(233, 39, 3),
(234, 39, 4),
(235, 39, 9),
(236, 39, 15),
(237, 41, 2),
(238, 41, 3),
(239, 41, 4),
(240, 41, 6),
(241, 41, 8),
(242, 41, 9),
(243, 42, 1),
(244, 42, 2),
(245, 42, 3),
(246, 42, 4),
(247, 44, 1),
(248, 44, 2),
(249, 44, 3),
(250, 44, 4),
(251, 45, 1),
(252, 45, 2),
(253, 45, 3),
(254, 45, 4),
(255, 53, 1),
(256, 53, 2),
(257, 53, 3),
(258, 53, 4),
(259, 55, 1),
(260, 55, 2),
(261, 55, 3),
(262, 55, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apps', NULL, NULL),
(2, 'Diseño web', NULL, NULL),
(3, 'Desarrollo web', NULL, NULL),
(4, 'Diseño grafico', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technologies`
--

CREATE TABLE `technologies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wordpress', '2021-03-09 10:30:40', '2021-03-09 10:30:46'),
(2, 'CSS3', '2021-03-09 10:30:49', '2021-03-09 10:30:51'),
(3, 'HTML5', '2021-03-09 10:30:40', '2021-03-09 10:30:46'),
(4, 'Javascript', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(5, 'JQuery', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(6, 'Bootstrap', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(7, 'Drupal', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(8, 'VueJS', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(9, 'Laravel', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(10, 'Uikit', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(11, 'Magento', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(12, 'Prestashop', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(13, 'Ionic', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(14, 'Angular', '2021-03-09 10:31:14', '2021-03-09 10:31:14'),
(15, 'ReactJS', '2021-03-09 10:31:14', '2021-03-09 10:31:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `allies`
--
ALTER TABLE `allies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_ally_id_foreign` (`ally_id`);

--
-- Indices de la tabla `projects_tags`
--
ALTER TABLE `projects_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects_technologies`
--
ALTER TABLE `projects_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indices de la tabla `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `allies`
--
ALTER TABLE `allies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `projects_tags`
--
ALTER TABLE `projects_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `projects_technologies`
--
ALTER TABLE `projects_technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ally_id_foreign` FOREIGN KEY (`ally_id`) REFERENCES `allies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
