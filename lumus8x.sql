INSERT INTO `analyzes` (`id`, `tenant_id`, `uuid`, `slug`, `date_analyzes`, `laboratory_id`, `status`, `arquivo`, `created_at`, `updated_at`) VALUES
(2, 2, '0e0647a3-ce80-4ff6-a9d6-da294d11171f', '', '2021-01-06', 1, 'A', NULL, '2021-01-01 00:58:07', '2021-01-01 02:18:07'),
(3, 2, '2fce151a-13ea-44c5-9b3a-c9f83cb5f341', '', '2021-01-01', 2, 'A', NULL, '2021-01-01 02:32:24', '2021-01-01 02:32:48'),
(5, 3, '8c7076e1-473a-4829-86d0-ae282dd4ee90', '', '2021-01-01', 1, 'A', 'Relatório de Ensaio  - 3483-1-2020_0 - Edf Maria ninanara.pdf', '2021-01-01 02:44:02', '2021-01-01 02:44:02');

INSERT INTO `carousels` (`id`, `tenant_id`, `uuid`, `title`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '02d48813-39fb-4064-a577-964a1569aa90', 'Efluentes Industrial e Sanitário', 'efluentes-industrial-e-sanitário', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/carousels/mnaS8OErvWLHtgPxufX8ukAH7V136cSvQ71W8PRQ.jpg', 'Tratamento, Projetos e Operação de Estações.', '2020-12-27 17:08:26', '2021-01-03 17:12:14'),
(2, 1, 'cbf5f135-8479-4bb7-99b2-e395b4c58818', 'Engenharia Ambiental', 'engenharia-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/carousels/cO4JCywDBZqXuTRCe6rlnR9RGOghnQCpAgWG4WER.jpg', 'Buscando soluções inovadoras para os diversos impactos ambientais.', '2020-12-27 23:03:20', '2021-01-01 16:20:19');

INSERT INTO `categories` (`id`, `tenant_id`, `uuid`, `name`, `url`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '6eaeb501-16a0-489d-90f3-979b03f6c5c9', 'Meio Ambiente', 'meio-ambiente', 'Meio Ambiente', '2021-01-08 22:58:03', '2021-01-08 22:58:03'),
(2, 1, 'fba8333d-ee40-4541-bf5c-75990ab772b6', 'Artigos', 'artigos', 'Artigos', '2021-01-08 22:58:26', '2021-01-08 22:58:26'),
(3, 1, 'f37facfe-97a4-48a8-bba7-10454d80b622', 'Serviços', 'serviços', 'Serviços', '2021-01-08 22:58:43', '2021-01-08 22:58:43');

INSERT INTO `laboratories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MR Ambiental', '2020-12-31 23:17:27', '2020-12-31 23:17:27'),
(2, 'Promatec Análises Ambientais', '2020-12-31 23:21:37', '2020-12-31 23:21:37');

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
(42, '2020_12_06_113846_create_posts_table', 9);

INSERT INTO `parameter_analyzes` (`id`, `name`, `unit`, `reference_name`, `reference`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Temperatura', '°C', 'Conama 430', 37.000, 'Graus Celsion', '2020-12-31 17:31:51', '2020-12-31 21:26:09'),
(2, 'pH', '--', 'Conama 430', 9.000, 'Potencial Hidrogeniônico', '2020-12-31 21:00:00', '2020-12-31 21:24:03'),
(3, 'DBO5', 'mg/L', 'Conama 430', 120.000, NULL, '2020-12-31 21:00:54', '2020-12-31 21:00:54'),
(4, 'DQO', 'mg/L', 'Conama 430', 0.000, NULL, '2020-12-31 21:01:48', '2020-12-31 21:01:48'),
(5, 'Óleos e Graxas', 'mg/L', 'Conama 430', 100.000, NULL, '2020-12-31 21:02:44', '2020-12-31 21:02:44'),
(6, 'Coliformes Totais', '--', 'Conama XXX', 0.000, NULL, '2020-12-31 21:03:50', '2020-12-31 21:03:50'),
(7, 'Coliformes Termotolerantes', '--', 'Conama XXX', 0.000, NULL, '2020-12-31 21:04:16', '2020-12-31 21:04:16');

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mchaprao@gmail.com', '$2y$10$PZQLu69KLHN56ZUOHXOJs.mA0AIMI1M9pRTMMgEC.ZxE0VT3NWrpO', '2021-01-09 14:57:03');

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Clientes', 'Lista de Clientes', NULL, NULL),
(2, 'Clientes - Adicionar', 'Adicionar Novo Cliente', NULL, NULL),
(3, 'Clientes - Editar', 'Editar cliente', NULL, NULL),
(4, 'Clientes - Detalhes', 'Detalhes do Cliente', NULL, NULL),
(5, 'Clientes - Excluir', 'Excluir Cliente', NULL, NULL),
(6, 'Perfil', 'Lista de Perfis', NULL, NULL),
(7, 'Efluentes', 'Módulo Efluentes', NULL, '2020-12-20 05:05:57'),
(8, 'Documentos', 'Módulo Documentos e Licenças', NULL, NULL),
(9, 'Permissão', 'Lista de Permissões', NULL, NULL),
(10, 'Tecnicos', 'Módulo Técnicos', NULL, NULL),
(11, 'Planos', 'Lista de Planos', NULL, NULL),
(12, 'Usuarios', 'Lista de Usuarios', NULL, NULL),
(13, 'Efluentes - Analises', 'Análises Analíticas', '2020-12-31 22:23:20', '2021-01-01 13:47:15'),
(14, 'Efluentes - Equipamentos', 'Equipamentos do cliente', '2021-01-01 13:30:15', '2021-01-01 13:47:50'),
(15, 'Efluentes - Relatorios', 'Relatórios do Efluente do cliente', '2021-01-01 13:31:15', '2021-01-01 13:46:00');

INSERT INTO `permission_properfil` (`id`, `permission_id`, `properfil_id`) VALUES
(4, 8, 1),
(5, 7, 4),
(7, 12, 4),
(8, 12, 6),
(10, 13, 4),
(11, 14, 4),
(12, 15, 4);

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 7, 1),
(2, 12, 1),
(4, 13, 1),
(7, 14, 1),
(8, 15, 1);

INSERT INTO `plans` (`id`, `name`, `url`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Efluentes Mensal', 'efluentes-mensal', 2800.00, 'Gerenciamento de ETE Mensal', NULL, '2020-12-20 12:25:45'),
(2, 'Documentos Mensal', 'documentos-mensal', 100.00, 'Gerenciamento de Documentos Mensal', NULL, NULL),
(3, 'Consultoria', 'consultoria', 500.00, 'Plano de Consultoria', '2020-12-30 14:57:18', '2020-12-30 14:57:18');

INSERT INTO `plan_properfil` (`id`, `plan_id`, `properfil_id`) VALUES
(1, 1, 4),
(4, 3, 6);

INSERT INTO `posts` (`id`, `tenant_id`, `category_id`, `uuid`, `title`, `content`, `slug`, `image`, `published_at`, `active`, `author_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'a97f84a0-6c3a-4073-8a53-122e975e92dd', 'Investigação Ambiental', 'Investigação Ambiental', 'investigação-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/5XeW9ebQzy6exDR5uAJxMSzlflEQt3fPLukMUfg3.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:37:55', '2021-01-09 15:37:55'),
(3, 1, 3, '8e345b1d-7425-4ab8-9983-689e42d4a123', 'Avaliação de Riscos', 'Avaliação de Riscos', 'avaliação-de-riscos', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/UgZCed4SZr7iO2sn6GWLCYfPrAbOJWLotDpcZguw.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:39:26', '2021-01-09 15:39:26'),
(4, 1, 3, '8891be21-e3bd-4287-ad18-0d4ad8d47add', 'Gerenciamento de Resíduos', 'Gerenciamento de Resíduos', 'gerenciamento-de-resíduos', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/IxRiCSd0m7WbjZGieeOrm8PEuUeX8mWdrFw6o8Ys.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:40:02', '2021-01-09 15:40:02'),
(5, 1, 3, '9a549559-038d-4558-b30e-7d7bb820c51d', 'Licenciamento Ambiental', 'Licenciamento Ambiental', 'licenciamento-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/8UeP0uDa5LKpWNwUfY7szsIPASDx2JEJT87XDp5N.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:40:34', '2021-01-09 15:40:34'),
(6, 1, 3, 'f88ef23d-a87c-4180-87af-c411b709291a', 'Remediação Ambiental', 'Remediação', 'remediação-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/RtESRV9rx4U6iVW04SJZYuuKjaop92Rp3TRqtvul.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:41:09', '2021-01-09 15:41:09'),
(7, 1, 3, '0d1d4c52-6cbf-4f76-98e9-53ddba4d7f74', 'Auditoria Ambiental', 'Auditoria Ambiental', 'auditoria-ambiental', 'tenants/51daaaf7-a37d-4f98-8811-f38297d0b392/posts/E51KASR2gXPY3YkbrlcwQvtCNDSK633lK1JJYY02.jpg', '2021-01-09', 'Y', 1, '2021-01-09 15:41:41', '2021-01-09 15:41:41');

INSERT INTO `properfis` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Documentos', 'Documentos', NULL, '2020-12-20 12:36:54'),
(2, 'Financeiro', 'Setor Financeiro', NULL, NULL),
(3, 'Vendas', 'Setor de Vendas', NULL, NULL),
(4, 'Efluentes', 'Módulo Efluentes', '2020-12-20 04:39:17', '2020-12-20 04:39:17'),
(5, 'Compras', 'Módulo de Compras', '2020-12-27 18:47:02', '2020-12-27 22:06:12'),
(6, 'Consultoria', 'Consultoria', '2020-12-30 18:58:55', '2020-12-30 18:58:55');

INSERT INTO `report_etes` (`id`, `tenant_id`, `uuid`, `date_at`, `user_id`, `report_type_id`, `arquivo`, `created_at`, `updated_at`) VALUES
(1, 1, 'ae4d6dde-b2de-4f3b-a7e9-8f1e6f1f0a95', '2021-01-06', 1, 1, 'TJPE-Certidão-Negativa-GUIA-PAGTO.pdf', '2021-01-07 00:27:25', '2021-01-07 00:27:25'),
(2, 2, '2c9ff412-7b0e-48ca-8f82-533ab3d2846d', '2021-01-01', 1, 2, 'Antecedentes-Criminais-PJe.pdf', '2021-01-07 00:43:33', '2021-01-07 00:43:33'),
(3, 2, '615d2990-a346-449e-83a8-36c41b49dd5a', '2021-01-05', 1, 1, 'JUSTIÇA-FEDERAL-DE-PERNAMBUCO-Certidão-Negativa.pdf', '2021-01-07 00:47:55', '2021-01-07 00:47:55');

INSERT INTO `report_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Diagnóstico', '2021-01-06 23:11:08', '2021-01-06 23:11:08'),
(2, 'Relatório mensal', '2021-01-06 23:11:29', '2021-01-06 23:11:29');

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrador', NULL, NULL),
(2, 'Gerente', 'Gerente da Empresa', NULL, NULL),
(3, 'Técnico', 'Técnico da Empresa', NULL, NULL),
(4, 'Operador', 'Operador da Empresa', NULL, NULL);

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 2),
(2, 1, 9),
(3, 1, 3),
(4, 2, 8);

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GSrAKKHlTDBbirFXsYk5xv7h7PnsLVF0M8GnF3NK', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQTVubm1aZzFnMFIzalgyNFllcDNTTmdnVG5MdlZqaXFHaHdsUVd4SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1611027686),
('IbuWCu2kJqCq3En9Io9ypvAAU8uAtubpxyCEjbRJ', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRWtDZ1BZcVAzMDN0ZTRmcHA3eFd1Z1JIcEd4N0h1YUx4S3Vrek9tWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9wZXJmaXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkcXRUR1d3aTUwcDNDRERISzBKcEpDdS84dHAyQjVVbUxjaEpMRHpFbkdUZHBvTGtjUFZXQWEiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHF0VEdXd2k1MHAzQ0RESEswSnBKQ3UvOHRwMkI1VW1MY2hKTER6RW5HVGRwb0xrY1BWV0FhIjt9', 1610238736),
('l1uc3hVgOto2zlbzACplZy2CtQpAsv7bvFKwdmRt', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWZsTW5RZ1NHdkIyeFJTUDF0UnVZWDJYQ2RvaWs5TDNTcU1mcUExSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1611027687),
('v8jNSzqgvwlQkIEXplYvt1plJN3szBVjjnKYwd9W', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDJOcGt6ZDJEQVpCN1NsbHN0ZVNGTVRINzc1YVlyVTZNb2plaEZiOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1610242332);

INSERT INTO `tenants` (`id`, `plan_id`, `uuid`, `cnpj`, `fantasy`, `name`, `url`, `email`, `logo`, `active`, `subscription`, `expires_at`, `subscription_id`, `subscription_active`, `subscription_suspended`, `created_at`, `updated_at`) VALUES
(1, 1, '51daaaf7-a37d-4f98-8811-f38297d0b392', '32194832000182', 'Lumus Soluções Ambientais ', 'Lumus Soluções Ambientais ', 'lumus-soluções-ambientais', 'lumus@lumusambiental.com.br', NULL, 'Y', NULL, NULL, NULL, 0, 0, '2020-12-20 04:26:07', '2020-12-20 04:26:07'),
(2, 1, '5e7eff13-a3ac-45c1-a1bb-8ac4fc8e4794', '34647896000117', 'Cond. Maria Nina e Maria Nara', 'Cond. Maria Nina e Maria Nara', 'cond.-maria-nina-e-maria-nara', 'magdala@email.com', NULL, 'Y', NULL, NULL, NULL, 1, 1, '2020-12-20 05:01:03', '2020-12-20 05:01:03'),
(3, 3, 'e0acf37e-050d-4013-be61-20ea90a80638', '24052658000105', 'Cemopel Graças', 'Cemopel CM Petróleo Ltda', 'cemopel-c-m-petróleo-ltda', 'cemopel@email.com', NULL, 'Y', '2020-12-30', '2021-01-30', NULL, 1, 0, '2020-12-30 12:16:04', '2020-12-30 14:57:36');

INSERT INTO `users` (`id`, `tenant_id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Marcos José Chaprão', 'mchaprao@gmail.com', NULL, '$2y$10$qtTGWwi50p3CDDHK0JpJCu/8tp2B5UmLchJLDzEnGTdpoLkcPVWAa', NULL, NULL, NULL, NULL, NULL, '2020-12-20 04:26:07', '2020-12-20 04:26:07'),
(2, 2, 'Magdala Barbosa', 'magdala@email.com', NULL, '$2y$10$Y0EA219fncql8bOokqeEvuRPNnKShEqOdMdyx8oFl8gRmJXql2JfS', NULL, NULL, NULL, NULL, NULL, '2020-12-20 05:02:22', '2020-12-29 11:43:29'),
(3, 2, 'Cristiano Sampaio', 'cristiano@email.com', NULL, '$2y$10$Foub0hQbxR45QP3CFtyJ8u3gTdSWRObvMf8I1ZnGNDkQOjqCuAiYW', NULL, NULL, NULL, NULL, NULL, '2020-12-29 12:48:40', '2020-12-30 17:49:31'),
(8, 2, 'Norberto da Cunha', 'norberto@email.com', NULL, '$2y$10$lPNTCdbmt86ROpLs0IMam.YBuImVbQKVBKlHefgsQCEUNPdz0FmVi', NULL, NULL, NULL, NULL, NULL, '2020-12-30 17:58:41', '2020-12-30 17:58:41'),
(9, 3, 'Anna Cemopel', 'cemopel@email.com', NULL, '$2y$10$tyGVDe9JGK5COB8E3TcCf.l8i0KsfA6pJrij27gUrheYnHcjNkmUK', NULL, NULL, NULL, NULL, NULL, '2020-12-30 18:55:32', '2020-12-30 18:55:32');

INSERT INTO `visits` (`id`, `tenant_id`, `uuid`, `visit_at`, `user_id`, `status`, `arquivo`, `created_at`, `updated_at`) VALUES
(31, 1, 'e961283c-170f-4526-8a85-b2b0aaedfdfb', '2021-01-08', 1, 'C', 'Contas-Batata-2020.pdf', '2021-01-08 22:12:26', '2021-01-08 22:12:26');

INSERT INTO `web_empresas` (`id`, `tenant_id`, `empresa`, `title`, `subtitle`, `innovation`, `experience`, `perfection`, `created_at`, `updated_at`) VALUES
(1, 1, 'Somos uma consultoria especializada na área de meio ambiente e segurança do trabalho. Buscamos sempre alcançar o desenvolvimento sustentável. ', 'Somos especializados em desenvolver', 'Projetos de Sustentabilidade para grandes empresas', 'simply dummy ', 'industry. Lorem', 'standard dummy', NULL, NULL);
