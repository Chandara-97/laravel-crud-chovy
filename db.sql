-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 04:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_crud_chorvy`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_12_30_140505_create_products_table', 1),
(23, '2020_12_30_142349_add_user_id_to_products_table', 1),
(24, '2020_12_30_143627_add_description_to_products_table', 1),
(29, '2021_01_07_062723_create_scholarship_bachelors_table', 2),
(30, '2021_01_07_091422_add_author_id_to_scholarship_bachelors_table', 2),
(31, '2021_01_07_155628_create_scholarship_masters_table', 3),
(32, '2021_01_07_160051_add_author_id_to_scholarship_masters_table', 3),
(33, '2021_01_07_170759_create_scholarship_phds_table', 4),
(34, '2021_01_07_171214_add_author_id_to_scholarship_phds_table', 4),
(35, '2021_01_07_175702_create_scholarship_phds_table', 5),
(36, '2021_01_07_175909_add_author_id_to_scholarship_phds_table', 5),
(37, '2021_01_09_083205_create_scholarship_highschools_table', 6),
(38, '2021_01_09_083740_add_author_id_to_scholarship_highschools_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img_url`, `created_at`, `updated_at`, `user_id`, `description`) VALUES
(2, 'Leav Chan Dara', '1610037516.png', '2021-01-07 03:11:04', '2021-01-07 09:38:36', 1, '<p>Here is the long awaited IT content. I&#39;m sorry if it is taking a bit long because it was hard for us to find someone to join us on this. Thankfully, I encountered bro Ly Meng who is a CTO in Bloc who was willing to share what he learns regarding this field. <a href=\"https://www.facebook.com/hashtag/youngbruisers?__eep__=6&amp;__cft__[0]=AZWr-E_3h0eRwJCWPyp5w41uSqAs0fZ6HVeDS_pwIjuWV960TzFGZUmLKdM5zPluxdlrmBTE1sG2rgphkC1JKoYhxaRcES_3txG8K-i68k2asoe2w6uumw6Uz_kvlELTlKvVApJzlQ1flGv9YU_XKrjLx-CIsx65_uONLsZYrrv2H8gUy1CwV1eBAJDpl_P53vIPCxuiJhihYI4CrqaGpIRm&amp;__tn__=*NK-y-R\">#YoungBruisers</a></p><p>The rest of us:</p><p><a href=\"https://www.facebook.com/iamchrisdyna/?__cft__[0]=AZWr-E_3h0eRwJCWPyp5w41uSqAs0fZ6HVeDS_pwIjuWV960TzFGZUmLKdM5zPluxdlrmBTE1sG2rgphkC1JKoYhxaRcES_3txG8K-i68k2asoe2w6uumw6Uz_kvlELTlKvVApJzlQ1flGv9YU_XKrjLx-CIsx65_uONLsZYrrv2H8gUy1CwV1eBAJDpl_P53vIPCxuiJhihYI4CrqaGpIRm&amp;__tn__=kK-y-R\">Chris Dyna</a></p><p>and Drew Dii</p>'),
(3, 'Leav Chan Dara', '1610075275.jpg', '2021-01-07 20:07:23', '2021-01-07 20:07:55', 1, '<pre>$allpro = Product::find($id);$allpro-&gt;name = $request-&gt;input(&#39;name&#39;);$allpro-&gt;description = $request-&gt;input(&#39;description&#39;);if($request-&gt;hasfile(&#39;img_url&#39;)) {    $img = $request-&gt;file(&#39;img_url&#39;);    $extension = $img-&gt;getClientOriginalExtension();    $img_name = time().&#39;.&#39;.$img-&gt;extension();    $img-&gt;move(public_path(&#39;images&#39;),$img_name);    $allpro-&gt;img_url = $img;    $allpro_arr = $request-&gt;toArray();    $allpro_arr[&#39;img_url&#39;] = $img_name;    $allpro-&gt;update($allpro_arr);}$allpro-&gt;save()</pre>');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_bachelors`
--

CREATE TABLE `scholarship_bachelors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_bachelors`
--

INSERT INTO `scholarship_bachelors` (`id`, `country_name`, `category`, `image`, `description`, `author`, `created_at`, `updated_at`, `author_id`) VALUES
(5, 'Canada', 'Bachelor', '1610071974.jpg', '<p>លើកទឹកចិត្តបុគ្គលិកដោយការផ្តល់ឱកាសចែករំលែកចំណេះដឹង និងអត្ថប្រយោជន៍ផ្សេងៗ គឺជាវិធីសាស្ត្រមួយក្នុងការលើកទឹកចិត្តបុគ្គលិកឱ្យចូលរួមចំណែកអភិវឌ្ឍក្រុមហ៊ុន។</p><p>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</p><p><a href=\"https://www.mjqquote.com/20210107/197-01/?fbclid=IwAR2sh6jUNk6U7Be52MXbPWD6OUOBzsdNSla42rW-6yOnraNLEUV1WoZyTzo\" target=\"_blank\">https://www.mjqquote.com/20210107/197-01/</a></p><p><a href=\"https://www.facebook.com/hashtag/mjqquote?__eep__=6&amp;__cft__[0]=AZUAH_j9eSVf2ouhOA0DrZ5WTX96_oUoH6KrUdYi6AMGGTzgN4NSTkEhsZxdfvC6SbWjLi9khDjxBY0dEDPAA1AbEcI8-7NGJBz_XC7T1PYc4QJ55VIqYvg9wKFUqrgX4Mt5JUdlaOsVZIAPGfxc4FxZFIjlAUFI2rWcscmdlc4I_u-E8V6pPyC_y4_SAmtL16A&amp;__tn__=*NK-R\">#mjqquote</a></p><p><a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fmjqquote.com%2F%3Ffbclid%3DIwAR0ZLT52LRb8aTxeKM5Niol14gVjPVE34IUL91K5SHhLuhjLjQiREK09Bfs&amp;h=AT1AXhlLJcAr2xp-nq6h3L9qEWN3PIfWsgWGnLoVJ4RCvvbWBHQKtZLVbIMvxhuZQ9qzXfgbpihix8yHBFM0V_so955XP5Vm0ZYEjQTX0h80Tz60_EOvIs-r3JEAAYwyX7OA&amp;__tn__=-UK-R&amp;c[0]=AT1scRtSR1fArrhoaR7efEPiRBJhY8_D14lxgfzYP0yn_5cYN-kc_66fhEaENm8Deg8tqZ0eHiMG_UmsF2fMqdQypaC6BUyOoAnmzocYY-gPNFgGGNzX9Vh8fTc4L_OqY0Sv9PCOZflI01fDTjVOGAmaRzZQOGsPWztdzt4iveySU2Ic3QKCevkLemIQBsWqicAPtqVA9yOefw\" target=\"_blank\">mjqquote.com</a></p>', 'Leav Chan Dara', '2021-01-07 06:39:34', '2021-01-07 19:12:54', 1),
(8, 'cambodia', 'Bachelor', '1610179253.png', '<pre>\r\nvalue=&quot;{{$bachelors-&gt;description}}</pre>', 'Leav Chan Dara', '2021-01-09 01:00:53', '2021-01-09 01:00:53', 1),
(9, 'Thailand', 'Bachelor', '1610180242.jpg', '<h1>​លើកទឹកចិត្ត​បុគ្គលិក​ដោយ​ការ​ផ្តល់​ឱកាស​ចែករំលែក​ចំណេះ​ដឹង​ ​និង​អត្ថប្រយោជន៍​ផ្សេងៗ​ ​គឺជា​វិធីសាស្ត្រ​មួយ​ក្នុង​ការ​លើកទឹកចិត្ត​បុគ្គលិក​ឱ្យ​ចូល​រួមចំណែក​អភិវឌ្ឍ​ក្រុមហ៊ុន​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-09 01:04:49', '2021-01-09 01:17:22', 1),
(10, 'Japan', 'Bachelor', '1610180204.jpg', '<h1>​លើកទឹកចិត្ត​បុគ្គលិក​ដោយ​ការ​ផ្តល់​ឱកាស​ចែករំលែក​ចំណេះ​ដឹង​ ​និង​អត្ថប្រយោជន៍​ផ្សេងៗ​ ​គឺជា​វិធីសាស្ត្រ​មួយ​ក្នុង​ការ​លើកទឹកចិត្ត​បុគ្គលិក​ឱ្យ​ចូល​រួមចំណែក​អភិវឌ្ឍ​ក្រុមហ៊ុន​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-09 01:07:32', '2021-01-09 01:16:44', 1),
(11, 'Thailand', 'Bachelor', '1610183373.png', '<h1>​សូម​ផ្តាំផ្ញើ​ដល់​ប្អូន​ៗ​ទាំងអស់​ថា​ ​បើ​យើង​ក្រ​ ​សូម​ក្រ​ឱ្យ​មាន​ភាព​ថ្លៃថ្នូរ​ ​ហើយ​បើ​ទោះបីជា​យើង​មាន​ ​ក៏​សូម​ចេះ​ដាក់ខ្លួន​ឱ្យ​បាន​សមរម្យ​ផង​ដែរ​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'mony', '2021-01-09 02:09:33', '2021-01-09 02:09:33', 2),
(14, 'Thailand', 'Bachelor', '1610185311.png', '<h1>secondary</h1>\r\n\r\n<h3>secondary</h3>\r\n\r\n<pre>\r\nsecondary</pre>', 'Leav Chan Dara', '2021-01-09 02:41:51', '2021-01-09 02:41:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_highschools`
--

CREATE TABLE `scholarship_highschools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_highschools`
--

INSERT INTO `scholarship_highschools` (`id`, `country_name`, `category`, `image`, `description`, `author`, `created_at`, `updated_at`, `author_id`) VALUES
(1, 'Thailand', 'highschool', '1610183238.jpg', '<p>ertyuiophvcbnm,</p>', 'Leav Chan Dara', '2021-01-09 02:07:18', '2021-01-09 02:07:18', 1),
(2, 'cambodia', 'highschool', '1610183421.png', '<h1>បើ​យើង​ក្រ​ ​សូម​ក្រ​ឱ្យ​មាន​ភាព​ថ្លៃថ្នូរ​ ​ហើយ​បើ​ទោះបីជា​យើង​មាន​ ​ក៏​សូម​ចេះ​ដាក់ខ្លួន​ឱ្យ​បាន​សមរម្យ​ផង​ដែរ​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'mony', '2021-01-09 02:10:05', '2021-01-09 02:10:21', 2),
(4, 'Thailand', 'highschool', '1610205461.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:17:41', '2021-01-09 08:17:41', 1),
(5, 'Vietnam', 'highschool', '1610205484.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:18:04', '2021-01-09 08:18:04', 1),
(6, 'Canada', 'highschool', '1610205507.jpg', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:18:27', '2021-01-09 08:18:27', 1),
(7, 'Singarpore', 'highschool', '1610205528.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:18:48', '2021-01-09 08:18:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_masters`
--

CREATE TABLE `scholarship_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_masters`
--

INSERT INTO `scholarship_masters` (`id`, `country_name`, `category`, `image`, `description`, `author`, `created_at`, `updated_at`, `author_id`) VALUES
(2, 'UAS', 'Master', '1610181254.jpg', '<h1>​សូម​ផ្តាំផ្ញើ​ដល់​ប្អូន​ៗ​ទាំងអស់​ថា​ ​បើ​យើង​ក្រ​ ​សូម​ក្រ​ឱ្យ​មាន​ភាព​ថ្លៃថ្នូរ​ ​ហើយ​បើ​ទោះបីជា​យើង​មាន​ ​ក៏​សូម​ចេះ​ដាក់ខ្លួន​ឱ្យ​បាន​សមរម្យ​ផង​ដែរ​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-07 09:31:31', '2021-01-09 01:34:14', 1),
(3, 'Thailand', 'Master', '1610181233.png', '<h1>​លើកទឹកចិត្ត​បុគ្គលិក​ដោយ​ការ​ផ្តល់​ឱកាស​ចែករំលែក​ចំណេះ​ដឹង​ ​និង​អត្ថប្រយោជន៍​ផ្សេងៗ​ ​គឺជា​វិធីសាស្ត្រ​មួយ​ក្នុង​ការ​លើកទឹកចិត្ត​បុគ្គលិក​ឱ្យ​ចូល​រួមចំណែក​អភិវឌ្ឍ​ក្រុមហ៊ុន​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-07 09:34:46', '2021-01-09 01:33:53', 1),
(4, 'Canada', 'Master', '1610071552.jpg', '<p>Begin your Forex journey easily! Just open cent account. It&#39;s great for new traders. You can make $1 deposit to start.</p><p>Enter the real market. Enjoy low spread and 1:1000 leverage. Trade with FBS. Earn and manage your funds easily. Grow on Forex.</p>', 'Leav Chan Dara', '2021-01-07 09:52:23', '2021-01-07 19:05:52', 1),
(5, 'Thailand', 'Master', '1610205394.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:16:34', '2021-01-09 08:16:34', 1),
(6, 'Canada', 'Master', '1610205414.jpg', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:16:54', '2021-01-09 08:16:54', 1),
(7, 'Japan', 'Master', '1610205434.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:17:14', '2021-01-09 08:17:14', 1),
(8, 'Canada', 'Master', '1610205550.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:19:10', '2021-01-09 08:19:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_phds`
--

CREATE TABLE `scholarship_phds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_phds`
--

INSERT INTO `scholarship_phds` (`id`, `country_name`, `category`, `image`, `description`, `author`, `created_at`, `updated_at`, `author_id`) VALUES
(1, 'Thailand', 'phd', '1610181281.png', '<h1>​សូម​ផ្តាំផ្ញើ​ដល់​ប្អូន​ៗ​ទាំងអស់​ថា​ ​បើ​យើង​ក្រ​ ​សូម​ក្រ​ឱ្យ​មាន​ភាព​ថ្លៃថ្នូរ​ ​ហើយ​បើ​ទោះបីជា​យើង​មាន​ ​ក៏​សូម​ចេះ​ដាក់ខ្លួន​ឱ្យ​បាន​សមរម្យ​ផង​ដែរ​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-07 11:00:38', '2021-01-09 01:34:41', 1),
(2, 'Korea', 'phd', '1610181271.jpg', '<h1>​សូម​ផ្តាំផ្ញើ​ដល់​ប្អូន​ៗ​ទាំងអស់​ថា​ ​បើ​យើង​ក្រ​ ​សូម​ក្រ​ឱ្យ​មាន​ភាព​ថ្លៃថ្នូរ​ ​ហើយ​បើ​ទោះបីជា​យើង​មាន​ ​ក៏​សូម​ចេះ​ដាក់ខ្លួន​ឱ្យ​បាន​សមរម្យ​ផង​ដែរ​។</h1>\r\n\r\n<h2>ឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី</h2>', 'Leav Chan Dara', '2021-01-07 11:01:03', '2021-01-09 01:34:31', 1),
(3, 'cambodia', 'phd', '1610205570.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:19:30', '2021-01-09 08:19:30', 1),
(4, 'Japan', 'phd', '1610205588.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:19:48', '2021-01-09 08:19:48', 1),
(5, 'Vietnam', 'phd', '1610205609.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:20:09', '2021-01-09 08:20:09', 1),
(6, 'Vietnam', 'phd', '1610205626.png', '<p>Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.Laravel - Middleware - Middleware is another essential component of Laravel and provides the method to filter HTTP requests that get entered into your project. It can be defined as a middle-man or interface acting in coordination between a request and a response.</p>', 'Leav Chan Dara', '2021-01-09 08:20:26', '2021-01-09 08:20:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leav Chan Dara', 'leavchandara@gmail.com', NULL, '$2y$10$zFjX9t94prUeGHHp3IGav.maoWbrJMIPBFvKLDT9FObq4iFJO.goK', NULL, '2021-01-07 03:10:30', '2021-01-07 03:10:30'),
(2, 'mony', 'mony@gmail.com', NULL, '$2y$10$i.fnmtEGR6Y8Sq1KN.wTEuBBmHNxSaAnCjXWMuQOa1Y/lOc8KLw/6', NULL, '2021-01-09 02:08:53', '2021-01-09 02:08:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `scholarship_bachelors`
--
ALTER TABLE `scholarship_bachelors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarship_bachelors_author_id_foreign` (`author_id`);

--
-- Indexes for table `scholarship_highschools`
--
ALTER TABLE `scholarship_highschools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarship_highschools_author_id_foreign` (`author_id`);

--
-- Indexes for table `scholarship_masters`
--
ALTER TABLE `scholarship_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarship_masters_author_id_foreign` (`author_id`);

--
-- Indexes for table `scholarship_phds`
--
ALTER TABLE `scholarship_phds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarship_phds_author_id_foreign` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarship_bachelors`
--
ALTER TABLE `scholarship_bachelors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `scholarship_highschools`
--
ALTER TABLE `scholarship_highschools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scholarship_masters`
--
ALTER TABLE `scholarship_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `scholarship_phds`
--
ALTER TABLE `scholarship_phds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `scholarship_bachelors`
--
ALTER TABLE `scholarship_bachelors`
  ADD CONSTRAINT `scholarship_bachelors_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `scholarship_highschools`
--
ALTER TABLE `scholarship_highschools`
  ADD CONSTRAINT `scholarship_highschools_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `scholarship_masters`
--
ALTER TABLE `scholarship_masters`
  ADD CONSTRAINT `scholarship_masters_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `scholarship_phds`
--
ALTER TABLE `scholarship_phds`
  ADD CONSTRAINT `scholarship_phds_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
