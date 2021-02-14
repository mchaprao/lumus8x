-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para lumus8x
DROP DATABASE IF EXISTS `lumus8x`;
CREATE DATABASE IF NOT EXISTS `lumus8x` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `lumus8x`;

-- Copiando estrutura para tabela lumus8x.analyzes
DROP TABLE IF EXISTS `analyzes`;
CREATE TABLE IF NOT EXISTS `analyzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_analyzes` date NOT NULL,
  `laboratory_id` bigint(20) unsigned NOT NULL,
  `status` enum('A','R','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `arquivo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyzes_tenant_id_foreign` (`tenant_id`),
  KEY `analyzes_laboratory_id_foreign` (`laboratory_id`),
  CONSTRAINT `analyzes_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `analyzes_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.analyzes: ~6 rows (aproximadamente)
DELETE FROM `analyzes`;
/*!40000 ALTER TABLE `analyzes` DISABLE KEYS */;
INSERT INTO `analyzes` (`id`, `tenant_id`, `uuid`, `slug`, `date_analyzes`, `laboratory_id`, `status`, `arquivo`, `created_at`, `updated_at`) VALUES
	(2, 2, '0e0647a3-ce80-4ff6-a9d6-da294d11171f', '', '2021-02-09', 1, 'C', NULL, '2020-12-31 21:58:07', '2021-02-09 07:54:02'),
	(3, 2, '2fce151a-13ea-44c5-9b3a-c9f83cb5f341', '', '2021-01-01', 2, 'A', NULL, '2020-12-31 23:32:24', '2020-12-31 23:32:48'),
	(5, 3, '8c7076e1-473a-4829-86d0-ae282dd4ee90', '', '2021-01-01', 1, 'C', 'Relatório de Ensaio  - 3483-1-2020_0 - Edf Maria ninanara.pdf', '2020-12-31 23:44:02', '2021-02-09 07:53:42'),
	(6, 1, '08a2c82e-58ec-4fd6-901b-fbdc332d7603', '', '2021-02-11', 1, 'A', NULL, '2021-02-12 14:58:01', '2021-02-12 14:58:01'),
	(7, 5, 'c3fa541b-42bb-4be8-b636-63515cdea4fa', '', '2021-02-13', 1, 'A', NULL, '2021-02-13 13:41:02', '2021-02-13 13:41:02'),
	(8, 5, '355f63f0-582f-4d83-9f86-502d3fe145a5', '', '2021-02-12', 4, 'A', NULL, '2021-02-13 17:01:12', '2021-02-13 17:01:12');
/*!40000 ALTER TABLE `analyzes` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.analyze_items
DROP TABLE IF EXISTS `analyze_items`;
CREATE TABLE IF NOT EXISTS `analyze_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `analyze_id` bigint(20) unsigned NOT NULL,
  `date_analyze` date NOT NULL,
  `parameter_id` bigint(20) unsigned NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` double(10,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyze_items_tenant_id_foreign` (`tenant_id`),
  KEY `analyze_items_analyze_id_foreign` (`analyze_id`),
  KEY `analyze_items_parameter_id_foreign` (`parameter_id`),
  CONSTRAINT `analyze_items_analyze_id_foreign` FOREIGN KEY (`analyze_id`) REFERENCES `analyzes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `analyze_items_parameter_id_foreign` FOREIGN KEY (`parameter_id`) REFERENCES `parameter_analyzes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `analyze_items_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.analyze_items: ~11 rows (aproximadamente)
DELETE FROM `analyze_items`;
/*!40000 ALTER TABLE `analyze_items` DISABLE KEYS */;
INSERT INTO `analyze_items` (`id`, `tenant_id`, `analyze_id`, `date_analyze`, `parameter_id`, `location`, `result`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, '2021-02-09', 2, 'Entrada', 9.0, '2021-02-11 22:54:39', NULL),
	(2, 1, 2, '2021-02-09', 5, 'Saída', 16.0, '2021-02-11 23:05:17', NULL),
	(3, 1, 3, '2021-02-11', 4, 'Saída', 192.0, '2021-02-11 23:16:26', NULL),
	(4, 2, 5, '2021-02-11', 6, 'Saída', 102.0, '2021-02-11 23:20:30', NULL),
	(5, 2, 2, '2021-02-09', 7, 'Entrada', 25.0, '2021-02-12 14:25:33', '2021-02-12 14:25:33'),
	(6, 1, 6, '2021-02-11', 2, 'Entrada', 9.0, '2021-02-12 14:58:41', '2021-02-12 14:58:41'),
	(7, 1, 6, '2021-02-11', 3, 'Saída', 555.0, '2021-02-13 12:34:55', '2021-02-13 12:34:55'),
	(9, 1, 6, '2021-02-11', 1, 'Entrada', 9.0, '2021-02-13 12:40:43', '2021-02-13 12:40:43'),
	(10, 5, 7, '2021-02-13', 1, 'Entrada', 32.0, '2021-02-13 13:41:56', '2021-02-13 13:41:56'),
	(11, 5, 7, '2021-02-13', 2, 'Entrada', 9.0, '2021-02-13 13:42:08', '2021-02-13 13:42:08'),
	(12, 5, 7, '2021-02-13', 9, 'Saída', 17.0, '2021-02-13 14:25:40', '2021-02-13 14:25:40'),
	(13, 5, 7, '2021-02-13', 3, 'Entrada', 633.0, '2021-02-13 16:45:42', '2021-02-13 16:45:42'),
	(14, 5, 8, '2021-02-12', 1, 'Entrada', 31.0, '2021-02-13 17:01:36', '2021-02-13 17:01:36');
/*!40000 ALTER TABLE `analyze_items` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.carousels
DROP TABLE IF EXISTS `carousels`;
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carousels_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `carousels_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.carousels: ~2 rows (aproximadamente)
DELETE FROM `carousels`;
/*!40000 ALTER TABLE `carousels` DISABLE KEYS */;
INSERT INTO `carousels` (`id`, `tenant_id`, `uuid`, `title`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, '02d48813-39fb-4064-a577-964a1569aa90', 'Efluentes Industrial e Sanitário', 'efluentes-industrial-e-sanitário', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/carousels/mnaS8OErvWLHtgPxufX8ukAH7V136cSvQ71W8PRQ.jpg', 'Tratamento, Projetos e Operação de Estações.', '2020-12-27 14:08:26', '2021-01-03 14:12:14'),
	(2, 1, 'cbf5f135-8479-4bb7-99b2-e395b4c58818', 'Engenharia Ambiental', 'engenharia-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/carousels/cO4JCywDBZqXuTRCe6rlnR9RGOghnQCpAgWG4WER.jpg', 'Buscando soluções inovadoras para os diversos impactos ambientais.', '2020-12-27 20:03:20', '2021-01-01 13:20:19');
/*!40000 ALTER TABLE `carousels` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `categories_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.categories: ~3 rows (aproximadamente)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `tenant_id`, `uuid`, `name`, `url`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, '6eaeb501-16a0-489d-90f3-979b03f6c5c9', 'Meio Ambiente', 'meio-ambiente', 'Meio Ambiente', '2021-01-08 19:58:03', '2021-01-08 19:58:03'),
	(2, 1, 'fba8333d-ee40-4541-bf5c-75990ab772b6', 'Artigos', 'artigos', 'Artigos', '2021-01-08 19:58:26', '2021-01-08 19:58:26'),
	(3, 1, 'f37facfe-97a4-48a8-bba7-10454d80b622', 'Serviços', 'serviços', 'Serviços', '2021-01-08 19:58:43', '2021-01-08 19:58:43');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('O','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'O',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.contacts: ~0 rows (aproximadamente)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `telephone`, `message`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'MARISE MARIA CHAPRAO', 'marise.chaprao@gmail.com', '8133715473', 'Podemos realizar esse serviço', 'O', '2021-02-03 14:55:05', '2021-02-03 14:55:05');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.details_plan
DROP TABLE IF EXISTS `details_plan`;
CREATE TABLE IF NOT EXISTS `details_plan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `details_plan_plan_id_foreign` (`plan_id`),
  CONSTRAINT `details_plan_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.details_plan: ~0 rows (aproximadamente)
DELETE FROM `details_plan`;
/*!40000 ALTER TABLE `details_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `details_plan` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.equipments
DROP TABLE IF EXISTS `equipments`;
CREATE TABLE IF NOT EXISTS `equipments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('F','M','Q') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipments_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `equipments_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.equipments: ~5 rows (aproximadamente)
DELETE FROM `equipments`;
/*!40000 ALTER TABLE `equipments` DISABLE KEYS */;
INSERT INTO `equipments` (`id`, `tenant_id`, `serial`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(2, 2, 'KJNJN9876543', 'Soprador', 'Modelo: XYZ', 'M', '2021-01-29 09:08:03', NULL),
	(4, 5, 'JKU125648577', 'Bomba Dágua', 'Bomba D´Água Marca WEG Modelo: ZYZ745', 'F', '2021-02-13 18:48:45', '2021-02-13 18:48:45'),
	(5, 5, '4552515455', 'Soprador', 'Soprador', 'F', '2021-02-13 18:49:33', '2021-02-13 18:49:33'),
	(6, 5, '78593MJCFD', 'Bomba de Cloro', 'Bomba de Cloro ouro', 'M', '2021-02-13 18:58:46', '2021-02-13 19:23:43');
/*!40000 ALTER TABLE `equipments` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.laboratories
DROP TABLE IF EXISTS `laboratories`;
CREATE TABLE IF NOT EXISTS `laboratories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.laboratories: ~2 rows (aproximadamente)
DELETE FROM `laboratories`;
/*!40000 ALTER TABLE `laboratories` DISABLE KEYS */;
INSERT INTO `laboratories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'MR Ambiental', '2020-12-31 20:17:27', '2020-12-31 20:17:27'),
	(2, 'Promatec Análises Ambientais', '2020-12-31 20:21:37', '2020-12-31 20:21:37'),
	(4, 'Bioagri', '2021-02-13 16:59:31', '2021-02-13 16:59:31');
/*!40000 ALTER TABLE `laboratories` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.local_analyzes
DROP TABLE IF EXISTS `local_analyzes`;
CREATE TABLE IF NOT EXISTS `local_analyzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `local_analyzes_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `local_analyzes_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.local_analyzes: ~0 rows (aproximadamente)
DELETE FROM `local_analyzes`;
/*!40000 ALTER TABLE `local_analyzes` DISABLE KEYS */;
/*!40000 ALTER TABLE `local_analyzes` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.migrations: ~27 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_10_200213_create_plans_table', 1),
	(2, '2014_10_10_201233_create_tenants_table', 1),
	(3, '2014_10_12_000000_create_users_table', 1),
	(4, '2014_10_12_100000_create_password_resets_table', 1),
	(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(6, '2019_08_19_000000_create_failed_jobs_table', 1),
	(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(11, '2020_12_06_130145_create_sessions_table', 1),
	(12, '2020_12_10_205426_create_detail_plans_table', 1),
	(13, '2020_12_10_231810_create_properfis_table', 1),
	(14, '2020_12_11_201642_create_permissions_table', 1),
	(15, '2020_12_11_210812_create_permission_properfil_table', 1),
	(16, '2020_12_12_075355_create_roles_table', 1),
	(17, '2020_12_12_075357_create_role_user_table', 1),
	(18, '2020_12_13_112754_create_plan_properfil_table', 1),
	(19, '2020_12_13_185529_create_products_table', 1),
	(24, '2020_12_26_204114_create_carousels_table', 2),
	(25, '2020_12_27_113732_create_web_empresas_table', 2),
	(32, '2020_12_31_131111_create_local_analyzes_table', 4),
	(33, '2020_12_31_110624_create_parameter_analyzes_table', 5),
	(36, '2020_12_31_103544_create_laboratories_table', 6),
	(37, '2020_12_31_110447_create_analyzes_table', 6),
	(38, '2020_12_20_085016_create_visits_table', 7),
	(39, '2021_01_05_191157_create_report_types_table', 8),
	(40, '2021_01_06_190138_create_report_etes_table', 8),
	(41, '2020_12_06_113513_create_categories_table', 9),
	(42, '2020_12_06_113846_create_posts_table', 9),
	(44, '2021_01_29_083150_create_equipments_table', 10),
	(45, '2021_02_03_093010_create_contacts_table', 11),
	(46, '2021_02_11_175339_create_analyze_items_table', 12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.parameter_analyzes
DROP TABLE IF EXISTS `parameter_analyzes`;
CREATE TABLE IF NOT EXISTS `parameter_analyzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` double(7,3) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.parameter_analyzes: ~7 rows (aproximadamente)
DELETE FROM `parameter_analyzes`;
/*!40000 ALTER TABLE `parameter_analyzes` DISABLE KEYS */;
INSERT INTO `parameter_analyzes` (`id`, `name`, `unit`, `reference_name`, `reference`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Temperatura', '°C', 'Conama 430', 37.000, 'Graus Celsion', '2020-12-31 14:31:51', '2020-12-31 18:26:09'),
	(2, 'pH', '--', 'Conama 430', 9.000, 'Potencial Hidrogeniônico', '2020-12-31 18:00:00', '2020-12-31 18:24:03'),
	(3, 'DBO5', 'mg/L', 'Conama 430', 120.000, NULL, '2020-12-31 18:00:54', '2020-12-31 18:00:54'),
	(4, 'DQO', 'mg/L', 'Conama 430', 0.000, NULL, '2020-12-31 18:01:48', '2020-12-31 18:01:48'),
	(5, 'Óleos e Graxas', 'mg/L', 'Conama 430', 100.000, NULL, '2020-12-31 18:02:44', '2020-12-31 18:02:44'),
	(6, 'Coliformes Totais', '--', 'Conama XXX', 0.000, NULL, '2020-12-31 18:03:50', '2020-12-31 18:03:50'),
	(7, 'Coliformes Termotolerantes', '--', 'Conama XXX', 0.000, NULL, '2020-12-31 18:04:16', '2020-12-31 18:04:16'),
	(9, 'Solidos sedimentáveis', 'mg/L', 'Conama 430', 100.000, 'Sólidos sedimentáveis', '2021-02-12 14:44:14', '2021-02-12 14:44:14');
/*!40000 ALTER TABLE `parameter_analyzes` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.password_resets: ~1 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('mchaprao@gmail.com', '$2y$10$PZQLu69KLHN56ZUOHXOJs.mA0AIMI1M9pRTMMgEC.ZxE0VT3NWrpO', '2021-01-09 11:57:03');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.permissions: ~26 rows (aproximadamente)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Clientes', 'Lista de Clientes', NULL, NULL),
	(2, 'Clientes - Adicionar', 'Adicionar Novo Cliente', NULL, NULL),
	(3, 'Clientes - Editar', 'Editar cliente', NULL, NULL),
	(4, 'Clientes - Detalhes', 'Detalhes do Cliente', NULL, NULL),
	(5, 'Clientes - Excluir', 'Excluir Cliente', NULL, NULL),
	(6, 'Perfil', 'Lista de Perfis', NULL, NULL),
	(7, 'Efluentes', 'Módulo Efluentes', NULL, '2020-12-20 02:05:57'),
	(8, 'Documentos', 'Módulo Documentos e Licenças', NULL, NULL),
	(9, 'Permissão', 'Lista de Permissões', NULL, NULL),
	(10, 'Tecnicos', 'Módulo Técnicos', NULL, NULL),
	(11, 'Planos', 'Lista de Planos', NULL, NULL),
	(12, 'Usuarios', 'Lista de Usuarios', NULL, NULL),
	(13, 'Efluentes - Analises', 'Análises Analíticas', '2020-12-31 19:23:20', '2021-01-01 10:47:15'),
	(14, 'Efluentes - Equipamentos', 'Equipamentos do cliente', '2021-01-01 10:30:15', '2021-01-01 10:47:50'),
	(15, 'Efluentes - Relatorios', 'Relatórios do Efluente do cliente', '2021-01-01 10:31:15', '2021-01-01 10:46:00'),
	(16, 'Visita - Adicionar', 'Adicionar visita técnica', '2021-02-13 14:58:36', '2021-02-13 15:00:04'),
	(17, 'Efluentes - Relatorios - Adicionar', 'Efluentes - Relatorios - Adicionar', '2021-02-13 15:37:28', '2021-02-13 15:37:28'),
	(18, 'Efluentes - Analises - Adicionar', 'Efluentes - Analises - Adicionar', '2021-02-13 15:51:54', '2021-02-13 15:51:54'),
	(19, 'Efluentes - Analises - Parametro', 'Efluentes - Analises - Parametro', '2021-02-13 16:41:48', '2021-02-13 16:41:48'),
	(20, 'Efluentes - Analises - Editar', 'Efluentes - Analises - Editar', '2021-02-13 16:42:26', '2021-02-13 16:42:26'),
	(21, 'Efluentes - Analises - Excluir', 'Efluentes - Analises - Excluir', '2021-02-13 16:42:41', '2021-02-13 16:42:41'),
	(22, 'Visita - Excluir', 'Visita - Excluir', '2021-02-13 17:17:21', '2021-02-13 17:17:21'),
	(23, 'Visita - Editar', 'Visita - Editar', '2021-02-13 17:17:36', '2021-02-13 17:17:36'),
	(24, 'Efluentes - Equipamentos - Adicionar', 'Efluentes - Equipamentos - Adicionar', '2021-02-13 17:25:29', '2021-02-13 17:26:51'),
	(25, 'Efluentes - Equipamentos - Editar', 'Efluentes - Equipamentos - Editar', '2021-02-13 17:27:07', '2021-02-13 17:27:07'),
	(26, 'Efluentes - Equipamentos - Excluir', 'Efluentes - Equipamentos - Excluir', '2021-02-13 17:27:22', '2021-02-13 17:27:22'),
	(28, 'Efluentes - Relatorios - Editar', 'Efluentes - Relatorios - Editar', '2021-02-13 20:05:45', '2021-02-13 20:05:45'),
	(29, 'Efluentes - Relatorios - Excluir', 'Efluentes - Relatorios - Excluir', '2021-02-13 20:06:01', '2021-02-13 20:06:01');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.permission_properfil
DROP TABLE IF EXISTS `permission_properfil`;
CREATE TABLE IF NOT EXISTS `permission_properfil` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `properfil_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_properfil_permission_id_foreign` (`permission_id`),
  KEY `permission_properfil_properfil_id_foreign` (`properfil_id`),
  CONSTRAINT `permission_properfil_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_properfil_properfil_id_foreign` FOREIGN KEY (`properfil_id`) REFERENCES `properfis` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.permission_properfil: ~19 rows (aproximadamente)
DELETE FROM `permission_properfil`;
/*!40000 ALTER TABLE `permission_properfil` DISABLE KEYS */;
INSERT INTO `permission_properfil` (`id`, `permission_id`, `properfil_id`) VALUES
	(4, 8, 1),
	(5, 7, 4),
	(7, 12, 4),
	(8, 12, 6),
	(10, 13, 4),
	(11, 14, 4),
	(12, 15, 4),
	(13, 16, 4),
	(14, 17, 4),
	(15, 18, 4),
	(16, 19, 4),
	(17, 20, 4),
	(18, 21, 4),
	(19, 22, 4),
	(20, 23, 4),
	(21, 24, 4),
	(22, 25, 4),
	(23, 26, 4),
	(25, 28, 4),
	(26, 29, 4);
/*!40000 ALTER TABLE `permission_properfil` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.permission_role
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.permission_role: ~23 rows (aproximadamente)
DELETE FROM `permission_role`;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
	(1, 7, 1),
	(2, 12, 1),
	(4, 13, 1),
	(7, 14, 1),
	(8, 15, 1),
	(9, 7, 5),
	(10, 12, 5),
	(11, 13, 5),
	(12, 14, 5),
	(13, 15, 5),
	(14, 16, 5),
	(15, 17, 5),
	(16, 18, 5),
	(17, 19, 5),
	(18, 20, 5),
	(19, 21, 5),
	(20, 22, 5),
	(21, 23, 5),
	(22, 24, 5),
	(23, 25, 5),
	(24, 26, 5),
	(26, 28, 5),
	(27, 29, 5);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.plans
DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plans_name_unique` (`name`),
  UNIQUE KEY `plans_url_unique` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.plans: ~3 rows (aproximadamente)
DELETE FROM `plans`;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` (`id`, `name`, `url`, `price`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Efluentes Mensal', 'efluentes-mensal', 2800.00, 'Gerenciamento de ETE Mensal', NULL, '2020-12-20 09:25:45'),
	(2, 'Documentos Mensal', 'documentos-mensal', 100.00, 'Gerenciamento de Documentos Mensal', NULL, NULL),
	(3, 'Consultoria', 'consultoria', 500.00, 'Plano de Consultoria', '2020-12-30 11:57:18', '2020-12-30 11:57:18');
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.plan_properfil
DROP TABLE IF EXISTS `plan_properfil`;
CREATE TABLE IF NOT EXISTS `plan_properfil` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` bigint(20) unsigned NOT NULL,
  `properfil_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plan_properfil_plan_id_foreign` (`plan_id`),
  KEY `plan_properfil_properfil_id_foreign` (`properfil_id`),
  CONSTRAINT `plan_properfil_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `plan_properfil_properfil_id_foreign` FOREIGN KEY (`properfil_id`) REFERENCES `properfis` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.plan_properfil: ~2 rows (aproximadamente)
DELETE FROM `plan_properfil`;
/*!40000 ALTER TABLE `plan_properfil` DISABLE KEYS */;
INSERT INTO `plan_properfil` (`id`, `plan_id`, `properfil_id`) VALUES
	(1, 1, 4),
	(4, 3, 6);
/*!40000 ALTER TABLE `plan_properfil` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` date NOT NULL,
  `active` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `author_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_tenant_id_foreign` (`tenant_id`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_author_id_foreign` (`author_id`),
  CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.posts: ~6 rows (aproximadamente)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `tenant_id`, `category_id`, `uuid`, `title`, `content`, `slug`, `image`, `published_at`, `active`, `author_id`, `created_at`, `updated_at`) VALUES
	(2, 1, 3, 'a97f84a0-6c3a-4073-8a53-122e975e92dd', 'Investigação Ambiental', 'O gerenciamento de áreas contaminadas ou passíveis de contaminação é um dos principais procedimentos do estudo geoambiental. Tem como uma de suas etapas a Investigação Ambiental. A Investigação Ambiental é um dos métodos responsáveis por realizar uma análise sobre as áreas contaminadas.', 'investigação-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/5XeW9ebQzy6exDR5uAJxMSzlflEQt3fPLukMUfg3.jpg', '2021-01-09', 'Y', 1, '2021-01-09 12:37:55', '2021-01-09 12:37:55'),
	(3, 1, 3, '8e345b1d-7425-4ab8-9983-689e42d4a123', 'Avaliação de Riscos', 'Identificar as tarefas e os riscos associados no local de trabalho, Avaliar a probabilidade e a severidade do dano, Reduzir o risco de danos através da eliminação do risco ou através do uso de métodos de proteção, e. Documentar o processo e os resultados.', 'avaliação-de-riscos', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/UgZCed4SZr7iO2sn6GWLCYfPrAbOJWLotDpcZguw.jpg', '2021-01-09', 'Y', 1, '2021-01-09 12:39:26', '2021-01-09 12:39:26'),
	(4, 1, 3, '8891be21-e3bd-4287-ad18-0d4ad8d47add', 'Gerenciamento de Resíduos', 'A Gestão Integrada de Resíduos Sólidos é um conjunto de metodologias com vista à redução não só da geração e eliminação de resíduos, como do melhor acompanhamento durante todo o seu ciclo produtivo.', 'gerenciamento-de-resíduos', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/IxRiCSd0m7WbjZGieeOrm8PEuUeX8mWdrFw6o8Ys.jpg', '2021-01-09', 'Y', 1, '2021-01-09 12:40:02', '2021-01-09 12:40:02'),
	(5, 1, 3, '9a549559-038d-4558-b30e-7d7bb820c51d', 'Licenciamento Ambiental', 'O licenciamento ambiental é um instrumento utilizado pelo Brasil com o objetivo de exercer controle prévio e de realizar o acompanhamento de atividades que utilizem recursos naturais, que sejam poluidoras ou que possam causar degradação do meio ambiente.', 'licenciamento-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/8UeP0uDa5LKpWNwUfY7szsIPASDx2JEJT87XDp5N.jpg', '2021-01-09', 'Y', 1, '2021-01-09 12:40:34', '2021-01-09 12:40:34'),
	(6, 1, 3, 'f88ef23d-a87c-4180-87af-c411b709291a', 'Remediação Ambiental', 'A Remediação Ambiental é uma das ações de intervenção para reabilitação de área contaminada, que consiste em aplicação de técnicas visando a remoção, contenção ou redução das concentrações de contaminantes. Em outras palavras, é um termo usado para corrigir problemas em áreas contaminadas (AC).', 'remediação-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/RtESRV9rx4U6iVW04SJZYuuKjaop92Rp3TRqtvul.jpg', '2021-01-09', 'Y', 1, '2021-01-09 12:41:09', '2021-01-09 12:41:09'),
	(8, 1, 3, 'b936fff7-27f7-46e6-8e64-6d5a97211c7f', 'Auditoria Ambiental', '<p style="text-align: justify;"><span style="text-align: justify;">A auditoria ambiental &eacute; um instrumento de gerenciamento, de natureza volunt&aacute;ria ou compuls&oacute;ria. A auditoria ambiental volunt&aacute;ria pode ser interna ou externa como parte dos requisitos para uma empresa se certificar na <strong>ISO&nbsp;</strong></span><strong style="text-align: justify;">14001</strong><span style="text-align: justify;">...</span></p>', 'auditoria-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/w5qyAnp0p3iz8xRmfizZTlZdHDLX5QkpSmtnzXrF.jpg', '2021-01-31', 'Y', 1, '2021-01-31 10:41:47', '2021-02-01 00:03:16');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `products_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.products: ~0 rows (aproximadamente)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.properfis
DROP TABLE IF EXISTS `properfis`;
CREATE TABLE IF NOT EXISTS `properfis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `properfis_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.properfis: ~6 rows (aproximadamente)
DELETE FROM `properfis`;
/*!40000 ALTER TABLE `properfis` DISABLE KEYS */;
INSERT INTO `properfis` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Documentos', 'Documentos', NULL, '2020-12-20 09:36:54'),
	(2, 'Financeiro', 'Setor Financeiro', NULL, NULL),
	(3, 'Vendas', 'Setor de Vendas', NULL, NULL),
	(4, 'Efluentes', 'Módulo Efluentes', '2020-12-20 01:39:17', '2020-12-20 01:39:17'),
	(5, 'Compras', 'Módulo de Compras', '2020-12-27 15:47:02', '2020-12-27 19:06:12'),
	(6, 'Consultoria', 'Consultoria', '2020-12-30 15:58:55', '2020-12-30 15:58:55');
/*!40000 ALTER TABLE `properfis` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.report_etes
DROP TABLE IF EXISTS `report_etes`;
CREATE TABLE IF NOT EXISTS `report_etes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_at` date NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `report_type_id` bigint(20) unsigned NOT NULL,
  `arquivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `report_etes_tenant_id_foreign` (`tenant_id`),
  KEY `report_etes_user_id_foreign` (`user_id`),
  KEY `report_etes_report_type_id_foreign` (`report_type_id`),
  CONSTRAINT `report_etes_report_type_id_foreign` FOREIGN KEY (`report_type_id`) REFERENCES `report_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `report_etes_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE,
  CONSTRAINT `report_etes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.report_etes: ~5 rows (aproximadamente)
DELETE FROM `report_etes`;
/*!40000 ALTER TABLE `report_etes` DISABLE KEYS */;
INSERT INTO `report_etes` (`id`, `tenant_id`, `uuid`, `date_at`, `user_id`, `report_type_id`, `arquivo`, `created_at`, `updated_at`) VALUES
	(1, 1, 'ae4d6dde-b2de-4f3b-a7e9-8f1e6f1f0a95', '2021-01-06', 1, 1, 'TJPE-Certidão-Negativa-GUIA-PAGTO.pdf', '2021-01-06 21:27:25', '2021-01-06 21:27:25'),
	(2, 2, '2c9ff412-7b0e-48ca-8f82-533ab3d2846d', '2021-01-01', 1, 2, 'Antecedentes-Criminais-PJe.pdf', '2021-01-06 21:43:33', '2021-01-06 21:43:33'),
	(3, 2, '615d2990-a346-449e-83a8-36c41b49dd5a', '2021-01-05', 1, 1, 'JUSTIÇA-FEDERAL-DE-PERNAMBUCO-Certidão-Negativa.pdf', '2021-01-06 21:47:55', '2021-01-06 21:47:55'),
	(4, 5, 'e86a302c-5666-44b4-aadf-eb34b6ec9582', '2021-02-13', 10, 1, '', '2021-02-13 16:32:12', '2021-02-13 16:32:12');
/*!40000 ALTER TABLE `report_etes` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.report_types
DROP TABLE IF EXISTS `report_types`;
CREATE TABLE IF NOT EXISTS `report_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.report_types: ~2 rows (aproximadamente)
DELETE FROM `report_types`;
/*!40000 ALTER TABLE `report_types` DISABLE KEYS */;
INSERT INTO `report_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Diagnóstico', '2021-01-06 20:11:08', '2021-01-06 20:11:08'),
	(2, 'Relatório mensal', '2021-01-06 20:11:29', '2021-01-06 20:11:29'),
	(3, 'Outros', '2021-02-13 16:28:08', '2021-02-13 16:28:08');
/*!40000 ALTER TABLE `report_types` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.roles: ~4 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Administrador', NULL, NULL),
	(2, 'Gerente', 'Gerente da Empresa', NULL, NULL),
	(3, 'Técnico', 'Técnico da Empresa', NULL, NULL),
	(4, 'Operador', 'Operador da Empresa', NULL, NULL),
	(5, 'Admin Geral', 'Administrador Geral', '2021-02-13 14:56:17', '2021-02-13 14:56:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.role_user
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.role_user: ~6 rows (aproximadamente)
DELETE FROM `role_user`;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
	(1, 1, 2),
	(2, 1, 9),
	(3, 1, 3),
	(4, 2, 8),
	(6, 1, 11),
	(7, 5, 10);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.sessions: ~2 rows (aproximadamente)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('bE428pNEpOw7nzwUTLARxgZjQy2NFM3pLjvqV5lA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWXRYMFhKR01melpqYkxPbzQ5SzFha2QyeVAyVHdtb2tqUURGV0lwRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoLWV0ZT9pbnRlcnZhbD0zMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRxdFRHV3dpNTBwM0NEREhLMEpwSkN1Lzh0cDJCNVVtTGNoSkxEekVuR1RkcG9Ma2NQVldBYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcXRUR1d3aTUwcDNDRERISzBKcEpDdS84dHAyQjVVbUxjaEpMRHpFbkdUZHBvTGtjUFZXQWEiO30=', 1613267169),
	('tueTxlpK6q1cq8UTE6RoOGfIARRG5j9T87iAaShg', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoialRLME5pSm9NTjFjNzVpSWRraXRudjA1cDhzYmxzakhuVTFDZGhUMSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaC1ldGU/aW50ZXJ2YWw9MjAyMS0wMi0xMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkN0ZET0gvQ3NzTklBdmQudFMzZ0FkLlU4bjdXODZGcDRidUZqNkZ6TFNyYkQxRkZwLlZxNHUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDdGRE9IL0Nzc05JQXZkLnRTM2dBZC5VOG43Vzg2RnA0YnVGajZGekxTcmJEMUZGcC5WcTR1Ijt9', 1613271563),
	('V7GGBSLip5cWu8UAoEjHG8ffXvGNEk7UXR2QzMW5', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMTRIWFNNVUZkWnRmTENjWUtoakpQU3gzckRZZGZlTW02MEtUQnQ1YiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaC1ldGU/aW50ZXJ2YWw9MjAyMS0wMi0xMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkN0ZET0gvQ3NzTklBdmQudFMzZ0FkLlU4bjdXODZGcDRidUZqNkZ6TFNyYkQxRkZwLlZxNHUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDdGRE9IL0Nzc05JQXZkLnRTM2dBZC5VOG43Vzg2RnA0YnVGajZGekxTcmJEMUZGcC5WcTR1Ijt9', 1613308731);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.tenants
DROP TABLE IF EXISTS `tenants`;
CREATE TABLE IF NOT EXISTS `tenants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `subscription` date DEFAULT NULL,
  `expires_at` date DEFAULT NULL,
  `subscription_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_active` tinyint(1) NOT NULL DEFAULT 0,
  `subscription_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenants_cnpj_unique` (`cnpj`),
  UNIQUE KEY `tenants_email_unique` (`email`),
  KEY `tenants_plan_id_foreign` (`plan_id`),
  CONSTRAINT `tenants_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.tenants: ~4 rows (aproximadamente)
DELETE FROM `tenants`;
/*!40000 ALTER TABLE `tenants` DISABLE KEYS */;
INSERT INTO `tenants` (`id`, `plan_id`, `uuid`, `cnpj`, `fantasy`, `name`, `url`, `email`, `logo`, `active`, `subscription`, `expires_at`, `subscription_id`, `subscription_active`, `subscription_suspended`, `created_at`, `updated_at`) VALUES
	(1, 1, '51daaaf7-a37d-4f98-8811-f38297d0b392', '32194832000182', 'Lumus Soluções Ambientais ', 'Lumus Soluções Ambientais ', 'lumus-soluções-ambientais', 'lumus@lumusambiental.com.br', NULL, 'Y', NULL, NULL, NULL, 0, 0, '2020-12-20 01:26:07', '2020-12-20 01:26:07'),
	(2, 1, '5e7eff13-a3ac-45c1-a1bb-8ac4fc8e4794', '34647896000117', 'Cond. Maria Nina e Maria Nara', 'Cond. Maria Nina e Maria Nara', 'cond.-maria-nina-e-maria-nara', 'magdala@email.com', NULL, 'Y', NULL, NULL, NULL, 1, 1, '2020-12-20 02:01:03', '2020-12-20 02:01:03'),
	(3, 1, 'e0acf37e-050d-4013-be61-20ea90a80638', '24052658000105', 'Cemopel Graças', 'Cemopel CM Petróleo Ltda', 'cemopel-c-m-petróleo-ltda', 'cemopel@email.com', NULL, 'N', '2020-12-30', '2021-01-30', NULL, 1, 0, '2020-12-30 09:16:04', '2021-02-09 07:44:41'),
	(5, 1, 'a1020a59-374a-4e81-ab6f-64b496c5e821', '01800067000173', 'Paulistex Industrial', 'Paulistex Industrial Ltda', 'paulistex-industrial-ltda', 'renato@paulistexl.com.br', NULL, 'Y', '2021-02-13', '2022-02-13', 'PAULISTEX21', 1, 0, '2021-02-13 13:32:55', '2021-02-13 13:32:55');
/*!40000 ALTER TABLE `tenants` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `users_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.users: ~7 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `tenant_id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Marcos José Chaprão', 'mchaprao@gmail.com', NULL, '$2y$10$qtTGWwi50p3CDDHK0JpJCu/8tp2B5UmLchJLDzEnGTdpoLkcPVWAa', NULL, NULL, NULL, NULL, NULL, '2020-12-20 01:26:07', '2020-12-20 01:26:07'),
	(2, 2, 'Magdala Barbosa', 'magdala@email.com', NULL, '$2y$10$Y0EA219fncql8bOokqeEvuRPNnKShEqOdMdyx8oFl8gRmJXql2JfS', NULL, NULL, NULL, NULL, NULL, '2020-12-20 02:02:22', '2020-12-29 08:43:29'),
	(3, 2, 'Cristiano Sampaio', 'cristiano@email.com', NULL, '$2y$10$Foub0hQbxR45QP3CFtyJ8u3gTdSWRObvMf8I1ZnGNDkQOjqCuAiYW', NULL, NULL, NULL, NULL, NULL, '2020-12-29 09:48:40', '2020-12-30 14:49:31'),
	(8, 2, 'Norberto da Cunha', 'norberto@email.com', NULL, '$2y$10$lPNTCdbmt86ROpLs0IMam.YBuImVbQKVBKlHefgsQCEUNPdz0FmVi', NULL, NULL, NULL, NULL, NULL, '2020-12-30 14:58:41', '2020-12-30 14:58:41'),
	(9, 3, 'Anna Cemopel', 'cemopel@email.com', NULL, '$2y$10$tyGVDe9JGK5COB8E3TcCf.l8i0KsfA6pJrij27gUrheYnHcjNkmUK', NULL, NULL, NULL, NULL, NULL, '2020-12-30 15:55:32', '2020-12-30 15:55:32'),
	(10, 5, 'Adriano Guedes do Nascimento', 'adriano529@hotmail.com', NULL, '$2y$10$7FDOH/CssNIAvd.tS3gAd.U8n7W86Fp4buFj6FzLSrbD1FFp.Vq4u', NULL, NULL, 'HHaBppQaVrpt2BHnEt1wBqU4CA8cRkwfO44urgVo8DfvJ4C21vqI4S7Cumc0', NULL, NULL, '2021-02-13 13:35:55', '2021-02-13 14:39:31'),
	(11, 5, 'Marcos José Chaprão Júnior', 'marcosjr46@gmail.com', NULL, '$2y$10$LjfG9eqTzzFafR/J1MEQyuuUxV/oCIH5VM/D5HiIhsZqvBsdmQdW.', NULL, NULL, NULL, NULL, NULL, '2021-02-13 14:49:37', '2021-02-13 14:49:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.visits
DROP TABLE IF EXISTS `visits`;
CREATE TABLE IF NOT EXISTS `visits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_at` date NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `status` enum('A','P','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P',
  `arquivo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visits_tenant_id_foreign` (`tenant_id`),
  KEY `visits_user_id_foreign` (`user_id`),
  CONSTRAINT `visits_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE,
  CONSTRAINT `visits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.visits: ~3 rows (aproximadamente)
DELETE FROM `visits`;
/*!40000 ALTER TABLE `visits` DISABLE KEYS */;
INSERT INTO `visits` (`id`, `tenant_id`, `uuid`, `visit_at`, `user_id`, `status`, `arquivo`, `created_at`, `updated_at`) VALUES
	(31, 2, 'e961283c-170f-4526-8a85-b2b0aaedfdfb', '2021-01-08', 1, 'C', 'Contas-Batata-2020.pdf', '2021-01-08 19:12:26', '2021-01-08 19:12:26'),
	(32, 5, '6aa560ee-2b0e-43dd-b01d-10db0bc60d9e', '2021-02-16', 10, 'P', '', '2021-02-13 17:05:41', '2021-02-13 17:05:41'),
	(33, 5, '55bf4e14-d9d7-4ab6-9993-a2139d924919', '2021-02-17', 11, 'C', 'boleto-Net-JAN18.pdf', '2021-02-13 17:20:59', '2021-02-13 17:20:59');
/*!40000 ALTER TABLE `visits` ENABLE KEYS */;

-- Copiando estrutura para tabela lumus8x.web_empresas
DROP TABLE IF EXISTS `web_empresas`;
CREATE TABLE IF NOT EXISTS `web_empresas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) unsigned NOT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `innovation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `web_empresas_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `web_empresas_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumus8x.web_empresas: ~0 rows (aproximadamente)
DELETE FROM `web_empresas`;
/*!40000 ALTER TABLE `web_empresas` DISABLE KEYS */;
INSERT INTO `web_empresas` (`id`, `tenant_id`, `empresa`, `title`, `subtitle`, `innovation`, `experience`, `perfection`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Somos uma consultoria especializada na área de meio ambiente e segurança do trabalho. Buscamos sempre alcançar o desenvolvimento sustentável. ', 'Somos especializados em desenvolver', 'Projetos de Sustentabilidade para grandes empresas', 'simply dummy ', 'industry. Lorem', 'standard dummy', NULL, NULL);
/*!40000 ALTER TABLE `web_empresas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
