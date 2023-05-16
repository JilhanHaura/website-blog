-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2023 at 05:58 AM
-- Server version: 10.11.0-MariaDB-log
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `user_id`, `kategori_id`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Et assumenda cupiditate officiis.', 5, 1, 'Cum nesciunt possimus consequatur pariatur doloribus perspiciatis labore. Laboriosam rerum eveniet et consectetur eum.', 'Magnam dignissimos reiciendis culpa nesciunt et non sit. Possimus cumque incidunt eaque eius. Excepturi eveniet at totam deserunt adipisci odit in aliquid. Laborum illum eligendi voluptatem amet aut magnam et. Eum saepe eos recusandae voluptatem est asperiores. Soluta et dolorum dolores facilis quasi facere libero. Praesentium voluptatem voluptatem dolor quos. Et ducimus laborum repellendus a eveniet voluptatum. Explicabo qui ut placeat vel quia labore animi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(2, 'Sed suscipit vel.', 4, 2, 'Eaque itaque voluptatem delectus provident magnam ipsam optio. Ea deserunt sunt laboriosam et nihil. Natus aut eligendi modi consequatur.', 'Quia qui sint quo in quisquam quaerat. Voluptatem voluptatem neque enim aut. Similique qui molestiae non debitis quidem. Est non ad non magni quia voluptatibus. Est repudiandae neque repudiandae ullam.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(3, 'Et pariatur omnis voluptates incidunt modi.', 5, 1, 'Fuga voluptate praesentium harum totam est quasi mollitia. Quis repellendus occaecati tempora repudiandae id labore. Repellendus minus minus beatae magnam officia ratione. Fuga id et autem.', 'Tempore et cupiditate sit voluptates nihil nesciunt est aperiam. Ut sed mollitia et et fugit. Enim reiciendis non aspernatur. Quidem ab dolorem repellat deserunt et harum perspiciatis. Harum nihil ducimus ex debitis dolores iure sunt. Aspernatur hic quam et laboriosam animi. Quod fugit aut laudantium praesentium pariatur illo. Fuga expedita et est odio reprehenderit corrupti. Enim omnis fugiat voluptatibus voluptates magni.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(4, 'Dicta nulla.', 4, 1, 'Dolorem molestiae est et quo. Eligendi quo laudantium in sed neque.', 'Sunt sed qui quis. Earum voluptatem similique rerum qui. Ad repudiandae et magni et accusamus necessitatibus possimus. Sequi enim in velit est sint. Magnam ratione molestiae repellat earum. Deleniti nulla omnis nemo repudiandae. Et odio ut cum cumque occaecati ad. Delectus iure sit ipsam aut quam sit enim. Recusandae dolorum est corporis sequi ut incidunt ut. Ipsum iusto et minima qui voluptatem.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(5, 'Ipsam deleniti omnis eos.', 2, 1, 'Impedit pariatur exercitationem at quos. Ab doloremque ipsa nam corrupti.', 'Ipsam qui quia et illum aliquam velit magni. In numquam natus architecto est natus tenetur perferendis ipsum. Odio hic adipisci sunt est voluptates. Incidunt rerum nostrum enim quos iste. Consequatur consequatur quaerat consequuntur voluptatem modi quidem fuga porro. Voluptatem quo et voluptatem voluptas voluptatum. Possimus impedit rerum blanditiis atque. Molestias optio expedita enim voluptas. Vel omnis sequi velit temporibus et molestiae ut. Debitis sit harum ut qui.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(6, 'Voluptatem aliquid.', 2, 1, 'Autem assumenda non non. Possimus at exercitationem voluptatibus ut dolores iure.', 'Quos accusamus placeat beatae. Numquam fuga nihil alias sint corrupti sunt odit. Explicabo qui eos est rerum iure harum pariatur. Magni dicta molestiae voluptate inventore molestias illum in quia. Non quis omnis placeat animi quasi sed. Est vitae aliquam nisi quas. Eveniet et sunt ex ex voluptatem reiciendis provident.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(7, 'Sed velit dolorum quasi assumenda.', 2, 2, 'Magni suscipit perspiciatis voluptas neque. Non excepturi ipsa blanditiis neque sit nemo facilis. Iste dicta eos non. Dolorem quia consequatur quo.', 'Velit illo amet possimus asperiores. Maxime occaecati distinctio reprehenderit enim ullam blanditiis deleniti. Neque iusto eaque sequi quisquam voluptatem aspernatur porro. Eum fugiat inventore corporis pariatur amet quia. Dolorum adipisci quas eius aliquam assumenda aut. Error in animi autem esse eligendi omnis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(8, 'Et est.', 5, 1, 'Voluptate consequatur sed omnis animi harum est tempora. Sunt aut quia dolores optio numquam quo.', 'Autem ab laudantium ipsum minima repellat. Dolorem aut aut qui repellendus. Dolorum quia odio voluptatibus error debitis ex et. Veniam quo dignissimos molestiae. Doloribus repellendus nihil illum nemo. Omnis maxime libero adipisci vitae magnam et. Exercitationem explicabo adipisci illum mollitia exercitationem dolores. Voluptatem dignissimos non fugiat reprehenderit qui. Magnam cupiditate incidunt placeat quibusdam animi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(9, 'Minus commodi sit eligendi.', 4, 1, 'Sint perspiciatis quidem enim aut quidem. Ut at ut sed ea.', 'Rem esse cumque et eveniet. Numquam officiis repellendus quaerat sed eius. Aut et autem distinctio. Facere et doloribus sit praesentium qui consequuntur asperiores. Natus et repellat sint deleniti. Omnis qui minus quibusdam aspernatur cumque provident laborum mollitia. Sunt blanditiis non corporis dolorem animi enim. Ea necessitatibus esse accusantium praesentium accusantium occaecati. Fugiat totam nobis vitae. Porro quaerat facere sed eaque cumque. Occaecati cum libero deleniti. Ipsam officiis eaque aut.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(10, 'Ullam incidunt omnis.', 4, 2, 'Qui et aut repellat sit soluta vel. Quae ut quia natus velit vel corporis.', 'Accusantium et assumenda sapiente. Id eligendi minus doloremque soluta corrupti laboriosam enim quae. Occaecati sunt quibusdam necessitatibus qui et. Tempora odio sequi nisi aliquid ipsum dignissimos quasi. Inventore magni saepe illo. Tempore consequuntur porro veritatis. Consequatur assumenda dolorem eos quia consequuntur illo tempora.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(11, 'Placeat aut.', 5, 2, 'Aut amet commodi quod quas illum eum vitae recusandae. Ipsa rerum earum blanditiis autem. Aspernatur itaque nobis exercitationem voluptatem harum a.', 'Eligendi facere ab tenetur esse reiciendis aut omnis. Dignissimos vel eius quia quia est. Officia fugit ut asperiores ea ducimus omnis vel velit. Autem non molestias mollitia est ratione nesciunt id voluptatem. Esse assumenda odit qui et eaque nemo nobis. Ad qui nemo sint veritatis suscipit sunt temporibus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(12, 'Eius similique.', 4, 2, 'Voluptas ut fugiat voluptatibus perferendis. Dicta velit debitis minus amet distinctio labore.', 'Optio asperiores ut officia sit autem aut. Nemo in quidem inventore molestiae nihil consectetur accusamus quam. Magni placeat ut esse sequi nihil consequatur ea. Qui sed quo repudiandae consequatur non aspernatur exercitationem. Vel quia voluptas eligendi qui. Quod rem enim autem repudiandae aut neque. Voluptates repellat voluptatum ut est maxime dolorum deleniti. Ipsum dolore illo sed ut ullam. Voluptates a explicabo voluptates reprehenderit accusantium nulla. Praesentium eos minima modi sed atque eaque voluptatum. Ut id et minima voluptatem neque soluta nemo. Reiciendis impedit quas omnis cum nihil eos.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(13, 'Voluptas est.', 2, 2, 'Soluta ea molestias eum odio enim quidem. Ut eos quia ad numquam asperiores aspernatur. Voluptatem ad qui sunt nesciunt omnis. Tempore aliquam perferendis odit consequuntur beatae nihil aut.', 'Quia dolor quam reiciendis quia dolore vel corrupti. Itaque adipisci non perferendis in nam. Quo delectus sapiente dolorum eveniet saepe ipsam totam. Commodi quis repellendus suscipit harum accusamus dolore reprehenderit. Optio qui quia quae illo aspernatur quas quia. Deleniti ipsum architecto rerum eos qui corporis. Molestias voluptate quasi dolorem veritatis cupiditate ratione voluptas.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(14, 'Est aut et.', 1, 1, 'Cumque ab esse adipisci alias. Quidem ab quibusdam quis. Placeat quo tempore dolorem itaque aperiam consectetur.', 'Tempore fugiat tempore omnis quidem ipsam. Ut modi maiores incidunt. Nemo explicabo doloremque ipsa dolorem voluptas hic. Porro quo est quia reiciendis laudantium perspiciatis. Et magni illo asperiores.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(15, 'Iusto maxime illo.', 3, 1, 'Nemo iste ut esse asperiores et qui. Et cum labore consequatur.', 'Et suscipit dolorum laboriosam aut sed. Vel deleniti minus voluptas nisi. Neque ipsum corporis sunt beatae. Qui sit quae laboriosam delectus modi nesciunt et qui. Minus fugit eum natus molestiae qui laudantium esse. Aut ut laudantium rerum sed enim eaque eveniet voluptatibus. Fuga dolorem est placeat inventore ipsa. Voluptatem quasi id ut tempora impedit.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(16, 'Facere qui quam.', 1, 2, 'Mollitia est et modi ipsam ut quidem nihil. Suscipit dolorem est qui consequuntur. Eum qui ad maiores veniam.', 'Molestiae at nostrum quo quaerat qui aperiam. In voluptatem qui beatae temporibus expedita voluptatem. Impedit temporibus dignissimos consequuntur velit quia molestiae incidunt. Vel accusantium natus nobis et. Iste excepturi voluptatum sed esse a optio. Sequi rerum commodi ipsa similique odit. Doloribus et labore ut iure qui.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(17, 'Sit aut numquam et.', 2, 2, 'Voluptas odio quae aperiam dolorum. Sit autem delectus aliquid qui nihil. Quis dignissimos dolores aut placeat.', 'Ut repellat ut et saepe vitae. Molestiae tenetur eius et. Aperiam quo possimus mollitia nostrum. Odio et qui labore sint. Ad maiores voluptatem ut officia labore. Nesciunt et omnis ad perferendis nemo. Odit est assumenda fugiat dolorem nisi adipisci vel perferendis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(18, 'Blanditiis voluptatum quibusdam.', 3, 2, 'Est voluptatem voluptatem qui facilis odio reprehenderit. Adipisci illo impedit consequuntur occaecati. Quia vel architecto dolor minus praesentium eaque hic.', 'Et voluptatem adipisci pariatur et. Et dolorem ex culpa minus eveniet eius est asperiores. Repellendus praesentium iusto laudantium cumque ut. Quis aspernatur minus vel nihil et possimus necessitatibus. Odit et et accusamus quo alias asperiores esse cupiditate. Magnam modi dignissimos iusto ut qui hic temporibus qui. Quia quos voluptatibus non commodi. Voluptatem consequatur molestiae neque et porro. Error quas placeat aliquam esse magni. Cum et et id non aut similique eum. Quidem voluptatum qui cupiditate ullam assumenda. Vitae deserunt fugit qui dignissimos dignissimos molestiae. Iusto dolorum deserunt dolorem voluptatem delectus sit culpa soluta. Mollitia in deserunt unde saepe sit eum et. Voluptatem aut perferendis quae a ex.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(19, 'Officiis quo.', 3, 1, 'Sit et error fugit inventore. Illo temporibus omnis autem occaecati.', 'Optio vitae veniam rerum quam perferendis est itaque. Et harum unde et aliquam ea recusandae. Soluta consectetur est aut non similique aut consequatur. Nam harum expedita consequuntur consequuntur voluptatem voluptas et. Ut et aut beatae facilis possimus et enim quis. Aut ut enim saepe eos sapiente dolores.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(20, 'Adipisci quia omnis.', 1, 1, 'Ipsa ut vel suscipit est mollitia. Corporis officiis sint velit voluptatem voluptas.', 'Culpa consequatur ut et. Dolorem tempore nobis et doloremque. Quia magnam voluptatem illo quia. Error veniam earum excepturi soluta. Ut necessitatibus nemo suscipit consequatur architecto eveniet qui. Adipisci et quam saepe molestiae eos maxime.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(21, 'Veritatis harum consequuntur iste.', 5, 2, 'Sunt nesciunt unde nesciunt in velit soluta. Porro esse maxime aut aut. Rerum deserunt et sint cupiditate. Libero ratione dolore quis quos aut repudiandae id quae.', 'Et voluptas eligendi sunt. Maiores sunt in dolor error recusandae molestias iste nihil. Iure dolor aperiam ut maiores quo qui. Accusantium at enim optio odit. Quaerat nam sint suscipit voluptatem dignissimos quisquam repellendus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(22, 'Corrupti facere dicta incidunt sed sit.', 1, 2, 'Maiores vero rerum ratione sint nulla neque et. Rerum recusandae ea molestiae sint. Quae iusto et dolores magni.', 'Expedita culpa quibusdam quia quaerat. Eaque est vel aut enim ipsa soluta ut. Voluptas quo ut aperiam maxime est dolor. Nemo eligendi consequatur magnam. Sint magni soluta sed blanditiis optio. Facilis ullam magni ut necessitatibus pariatur. Nam enim quis laborum nostrum. Nesciunt rerum aut ut nemo.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(23, 'Neque suscipit.', 1, 1, 'Architecto aliquid laborum laboriosam ut placeat sit earum maiores. Dicta aut itaque reprehenderit qui possimus nobis. Nesciunt voluptas enim perspiciatis sed vitae aut laborum et.', 'Beatae nihil magni minima rem. Et eius laborum omnis. Voluptates odio quia sint. Quam praesentium dolores omnis repellat. Soluta et possimus qui cumque iusto earum qui. Culpa occaecati voluptates quis consequuntur aut. Non dolorum suscipit aut fugiat unde ratione temporibus. Exercitationem eligendi repudiandae rerum et corrupti. Et ipsam fugiat iure adipisci libero mollitia voluptatem possimus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(24, 'Inventore dolorem omnis aut.', 5, 2, 'Pariatur sit quis optio occaecati. Aperiam qui sit sed nostrum similique ab quisquam quas. Quia dolorem minus modi vero nihil amet distinctio. Et voluptas modi sint aut. Eum asperiores debitis ut in sunt modi.', 'Deserunt consequatur vitae laborum non. Quos cumque recusandae animi laboriosam pariatur voluptates esse enim. Voluptas sed assumenda voluptatem incidunt reprehenderit. Cum eos reprehenderit inventore harum non et. Iusto consequatur dignissimos sed est soluta accusamus. Optio veritatis aut qui laboriosam est perspiciatis aspernatur aut. Odio et ipsum quis id. Voluptatem voluptatum commodi non non quia. Aperiam nihil ipsum aut consectetur ullam enim.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(25, 'Rerum vel.', 4, 2, 'Sequi quaerat culpa quae dolore ut animi. Et qui et et dignissimos quis. Sint autem fugit omnis sed iste illum est.', 'Minima quasi delectus cupiditate ut deleniti ducimus. Voluptatem officia natus dolorem quia sunt vero. Et molestiae voluptas magnam laudantium numquam eos possimus aperiam. Rerum perferendis deserunt neque sint atque. Quis rerum mollitia sit quia natus eligendi quod. Qui quaerat at facere aliquid deleniti. Qui ipsam nemo nam deleniti. Ullam veniam quod id asperiores excepturi voluptas non quam. Dolor delectus ea et ea rerum. Accusantium distinctio provident consectetur cumque animi repudiandae accusamus. Eos sequi nostrum officia. Autem temporibus consequuntur aut quod quis ducimus illum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(26, 'Et ratione beatae.', 4, 1, 'Et aliquam voluptatem dolorem accusantium sunt iure soluta. Commodi ut qui ea quibusdam nesciunt quae explicabo. Adipisci blanditiis debitis perferendis ex optio facilis et.', 'Earum et atque doloremque eum. Quis consectetur consequatur quibusdam ratione qui. Quibusdam adipisci et non temporibus at in dolorem. Cum odio aliquid suscipit impedit autem explicabo. Accusantium quisquam non repudiandae aliquam quaerat. Libero asperiores aut pariatur quisquam. Et minima nesciunt aut provident non.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(27, 'Omnis voluptatem ipsa dolor.', 3, 2, 'Quisquam ut culpa ullam adipisci nobis. Ut corrupti temporibus aut magnam est. Voluptatum natus non et sit cupiditate omnis.', 'Aperiam delectus voluptatem voluptate ea. Voluptatum maiores dignissimos sed placeat ut totam quia. Velit deserunt numquam accusamus et deserunt voluptatem. Recusandae quia recusandae voluptatibus ut consequuntur. Autem dolores architecto voluptatum quis sint. Minus vitae ut esse id voluptatem excepturi quis. Non impedit ipsam sint nobis eum tempore. Vel animi laborum autem rem quis id incidunt.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(28, 'Eum repellat deserunt vel consequatur.', 1, 2, 'Eos nam fuga voluptate iusto repudiandae sed. Rem facilis consequuntur vel possimus porro eaque adipisci. Tempora ut autem explicabo. Nulla consequatur adipisci quae eum non.', 'Fugiat quisquam dolores natus delectus natus at et. Veniam veritatis alias est numquam sit. Voluptatum accusamus optio perferendis. Consequuntur et et eos qui. Iusto ipsa inventore eaque omnis. Nemo tempora tenetur inventore saepe est omnis. Dolores ipsa impedit accusantium dolores aut voluptatem est sed. Et dolores error aspernatur reiciendis. Incidunt qui sit accusamus aut maiores eum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(29, 'Vitae non facere.', 3, 2, 'Laborum nam et id eos. Qui quidem beatae magni est optio. Dolor atque architecto numquam voluptatibus.', 'Et dignissimos est illo minima et. Omnis ut amet quia et sequi officiis aut. Quibusdam vero sint reiciendis architecto laboriosam ad atque. Id similique iste perspiciatis pariatur. Reiciendis ex eos quidem accusamus. Ut aut eos dolor voluptatem commodi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(30, 'Suscipit sit totam.', 1, 1, 'Blanditiis eligendi tempora vitae rerum. Tempora quas ut molestiae necessitatibus iusto.', 'Quidem et dignissimos qui. Mollitia possimus ut veniam rerum quisquam maxime accusantium consequatur. Et et quis beatae tempora nam ut. Voluptatem distinctio cupiditate voluptatem adipisci rerum veniam. Ipsa voluptatem eos asperiores natus dolorem optio quo. Facere veritatis qui sed. Neque et ex harum minima quae.', '2022-11-02 18:28:04', '2022-11-02 18:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nip`, `nama`, `jenis_kelamin`, `status`, `jurusan_id`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '5231345227', 'Sakura Astuti', 'P', 'aktif', 1, 'Dk. Dr. Junjunan No. 208, Batu 98659, Maluku', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, '6312609663', 'Soleh Wahyudin S.Kom', 'P', 'aktif', 2, 'Jr. Agus Salim No. 584, Blitar 94977, Malut', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(3, '2125988546', 'Teddy Garang Sihombing S.IP', 'P', 'pasif', 1, 'Jln. Laswi No. 637, Padangpanjang 46886, Pabar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(4, '0177425336', 'Balijan Pradana M.Farm', 'P', 'aktif', 1, 'Dk. Gajah Mada No. 372, Bontang 98239, Sulut', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(5, '8052173918', 'Ilyas Sitompul', 'L', 'aktif', 2, 'Dk. Sunaryo No. 321, Batam 48436, Kepri', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(6, '2842233440', 'Galak Dalimin Maulana', 'P', 'aktif', 1, 'Kpg. Nanas No. 5, Bekasi 37765, Kaltim', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(7, '9533537768', 'Karen Mardhiyah', 'L', 'aktif', 1, 'Jln. Uluwatu No. 955, Administrasi Jakarta Utara 99038, Kalsel', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(8, '9572068443', 'Kenzie Anggabaya Saragih S.Kom', 'P', 'aktif', 2, 'Ds. Babadak No. 309, Padangpanjang 10007, Kalteng', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(9, '0437968844', 'Raditya Prayoga', 'P', 'pasif', 1, 'Gg. Bacang No. 941, Bogor 37233, Sulut', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(10, '1412943021', 'Rafid Bagya Narpati', 'P', 'pasif', 2, 'Jr. Samanhudi No. 81, Mataram 66480, Kaltim', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(11, '7266838653', 'Eluh Waluyo', 'P', 'aktif', 2, 'Kpg. Bagas Pati No. 871, Lhokseumawe 16223, Kepri', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(12, '5447735061', 'Nabila Pertiwi S.I.Kom', 'L', 'aktif', 1, 'Kpg. Moch. Toha No. 683, Pangkal Pinang 80950, Banten', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(13, '6565872982', 'Darman Setiawan', 'L', 'aktif', 2, 'Ds. Sugiyopranoto No. 542, Tebing Tinggi 84490, Sumsel', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(14, '9224533698', 'Tari Zaenab Zulaika M.Ak', 'P', 'pasif', 2, 'Ki. W.R. Supratman No. 486, Tanjungbalai 90835, Sulbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(15, '8959315214', 'Lanang Adiarja Nashiruddin M.Farm', 'L', 'aktif', 2, 'Ds. Otto No. 906, Palopo 34152, DIY', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(16, '7334092989', 'Pangestu Mandala', 'P', 'pasif', 2, 'Kpg. Babadan No. 443, Pasuruan 84007, DIY', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(17, '6207640177', 'Emil Arsipatra Prayoga S.Pt', 'L', 'aktif', 1, 'Ds. Cikutra Timur No. 65, Tebing Tinggi 98163, Maluku', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(18, '0333729709', 'Nurul Rahayu Hariyah', 'P', 'aktif', 1, 'Jr. Cut Nyak Dien No. 847, Tangerang 47870, Sumbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(19, '2744958934', 'Ibun Saragih S.Kom', 'L', 'pasif', 2, 'Ds. Abdul Muis No. 155, Ternate 18779, Papua', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(20, '4081224741', 'Anastasia Safitri', 'P', 'pasif', 1, 'Ds. Siliwangi No. 783, Banjarbaru 92188, Bengkulu', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(21, '5605794479', 'Ajimat Garda Maulana', 'P', 'aktif', 1, 'Jln. Baranangsiang No. 131, Administrasi Jakarta Pusat 95923, Kepri', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(22, '3375423846', 'Luluh Situmorang M.Kom.', 'L', 'aktif', 1, 'Ki. Moch. Ramdan No. 53, Palopo 16252, Sultra', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(23, '9730941450', 'Salwa Putri Nasyiah', 'L', 'aktif', 1, 'Ki. K.H. Maskur No. 182, Pariaman 16962, NTT', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(24, '2655469753', 'Yani Anggraini', 'L', 'aktif', 1, 'Gg. Yogyakarta No. 439, Padangsidempuan 76808, Jabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(25, '7738090207', 'Maya Yolanda', 'L', 'pasif', 2, 'Psr. Suryo Pranoto No. 163, Jambi 32270, DIY', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(26, '3169369866', 'Citra Ellis Winarsih', 'L', 'aktif', 2, 'Gg. W.R. Supratman No. 950, Tasikmalaya 35055, Bengkulu', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(27, '5178706047', 'Yessi Wahyuni', 'L', 'pasif', 1, 'Psr. Basoka No. 107, Cirebon 13117, Aceh', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(28, '6517437575', 'Usyi Novitasari', 'P', 'aktif', 2, 'Jr. Zamrud No. 864, Padang 50322, Jatim', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(29, '4942993025', 'Yani Yuliarti S.IP', 'L', 'aktif', 2, 'Ds. Rajiman No. 666, Lhokseumawe 29036, Aceh', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(30, '6551842722', 'Natalia Mandasari', 'P', 'aktif', 2, 'Psr. Ir. H. Juanda No. 417, Cimahi 49705, DIY', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(31, '9839906707', 'Tania Belinda Suartini', 'L', 'aktif', 1, 'Jln. Yoga No. 428, Pagar Alam 95112, Sumut', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(32, '8483325721', 'Bella Utami', 'L', 'aktif', 2, 'Ki. Adisumarmo No. 844, Sorong 98208, NTB', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(33, '4015723678', 'Prayogo Cayadi Sinaga S.H.', 'L', 'aktif', 2, 'Jr. Baan No. 788, Banjar 21853, Malut', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(34, '8528326783', 'Darmaji Hidayat', 'L', 'pasif', 1, 'Jln. M.T. Haryono No. 120, Bekasi 79737, Sulut', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(35, '3366743664', 'Bella Mardhiyah S.Psi', 'P', 'aktif', 2, 'Ds. Casablanca No. 497, Lubuklinggau 38926, Sumbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(36, '6218374838', 'Salimah Mandasari', 'P', 'pasif', 2, 'Gg. Abdul. Muis No. 616, Langsa 42106, Babel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(37, '1963173377', 'Ophelia Kezia Fujiati', 'L', 'pasif', 1, 'Psr. Karel S. Tubun No. 494, Dumai 96016, Sumbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(38, '8085307784', 'Candrakanta Firmansyah S.Ked', 'P', 'aktif', 1, 'Jr. Banda No. 654, Administrasi Jakarta Barat 79525, Bengkulu', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(39, '7257788937', 'Ghaliyati Pratiwi', 'P', 'pasif', 1, 'Ds. Lada No. 835, Sabang 10335, Bengkulu', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(40, '6947290064', 'Dipa Damanik', 'L', 'pasif', 1, 'Ki. Banda No. 89, Parepare 65149, Gorontalo', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(41, '8837610991', 'Setya Najmudin', 'L', 'pasif', 1, 'Ds. Casablanca No. 516, Administrasi Jakarta Utara 55774, Pabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(42, '8608470135', 'Zelda Wulandari S.E.', 'L', 'aktif', 2, 'Kpg. Baranangsiang No. 286, Surabaya 28605, Babel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(43, '7000069453', 'Mila Mila Lailasari M.Farm', 'P', 'aktif', 1, 'Jr. Achmad Yani No. 690, Bitung 54414, Riau', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(44, '2953891706', 'Sabar Prayoga S.E.I', 'L', 'aktif', 1, 'Ki. Yogyakarta No. 763, Malang 20607, Kalteng', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(45, '5731126750', 'Betania Rahimah S.Gz', 'P', 'pasif', 2, 'Gg. Suniaraja No. 946, Sabang 84979, Pabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(46, '4761800028', 'Paris Winda Hariyah S.Sos', 'P', 'pasif', 2, 'Gg. Banda No. 121, Tegal 11954, Babel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(47, '7123543555', 'Cinthia Riyanti S.Psi', 'L', 'aktif', 2, 'Ds. Barat No. 196, Malang 32114, Sulsel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(48, '5112804699', 'Citra Najwa Fujiati', 'P', 'aktif', 2, 'Ds. Cihampelas No. 783, Tegal 54991, Sumsel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(49, '2185504969', 'Juli Usamah', 'P', 'aktif', 1, 'Ds. Bagas Pati No. 353, Semarang 15338, Sultra', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(50, '9644235972', 'Tami Wani Handayani S.E.I', 'P', 'pasif', 1, 'Ki. Basoka Raya No. 706, Probolinggo 65633, Sumut', '2022-11-02 18:28:04', '2022-11-02 18:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_dashboards`
--

CREATE TABLE `dosen_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Blanditiis molestias ea a qui.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, 'Qui temporibus eius.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(3, 'Aspernatur autem dolore et corporis.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(4, 'Et id.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(5, 'Temporibus velit et nemo.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(6, 'Et rerum laboriosam dolorem repellat.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(7, 'In rerum aut omnis.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(8, 'Sunt et.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(9, 'Et ut omnis.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(10, 'Officiis aut.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(11, 'Eius ducimus quis.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(12, 'Doloremque animi et est quo.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(13, 'Ipsum aspernatur praesentium.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(14, 'Excepturi modi aut dolor.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(15, 'Deleniti et totam voluptate perferendis.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(16, 'Sed ea ea.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(17, 'Sit et adipisci.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(18, 'Omnis minus deserunt iure.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(19, 'Distinctio aut mollitia.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(20, 'Sed sed adipisci id.', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(21, 'Aspernatur nisi ipsum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(22, 'Quisquam ut omnis veritatis sit et.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(23, 'Amet in odio.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(24, 'Officia vitae perferendis nobis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(25, 'Doloribus sit et.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(26, 'Neque repellat voluptas.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(27, 'Ducimus sint sit exercitationem.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(28, 'Voluptas error repellendus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(29, 'Facilis nam quia nisi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(30, 'Eius qui ipsum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(31, 'Facere libero enim quia.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(32, 'Sed dolores sapiente vitae qui fugiat.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(33, 'Eos in in est.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(34, 'Non voluptatem.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(35, 'Qui et eum est.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(36, 'Commodi quisquam harum voluptatibus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(37, 'Ipsam temporibus sunt repellat.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(38, 'Et eos.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(39, 'Quos officiis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(40, 'Quia in perspiciatis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(41, 'Ea debitis est.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(42, 'At magni ut.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(43, 'Voluptatem tenetur delectus perferendis sapiente.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(44, 'A est totam quo optio magnam.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(45, 'Veritatis nemo velit.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(46, 'Quia et et consequuntur.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(47, 'Quis nemo inventore et.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(48, 'Suscipit harum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(49, 'Autem et excepturi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(50, 'Inventore ea.', '2022-11-02 18:28:04', '2022-11-02 18:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_dashboards`
--

CREATE TABLE `galeri_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, 'Bahasa inggris', '2022-11-02 18:28:03', '2022-11-02 18:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, 'Networking', '2022-11-02 18:28:03', '2022-11-02 18:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namadepan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabelakang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `namadepan`, `namabelakang`, `email`, `nomortlp`, `subjek`, `created_at`, `updated_at`) VALUES
(1, 'Himawan Maryadi', 'Kunthara Danu Thamrin M.M.', 'cemani03@yahoo.com', '0661 1165 899', 'Recusandae voluptate alias aperiam omnis et. Tenetur rerum est eligendi quia molestias sunt. Optio debitis et molestiae ut numquam.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(2, 'Nurul Kusmawati', 'Widya Mayasari', 'kpudjiastuti@prastuti.desa.id', '0851 7794 321', 'Suscipit nihil debitis fugit repudiandae. In dolorum blanditiis nesciunt quos autem rerum. Suscipit asperiores cum excepturi perspiciatis voluptatem. Ipsa aut sunt ex libero rerum.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(3, 'Ade Nasim Waskita S.H.', 'Darmanto Simbolon', 'kgunarto@hartati.name', '0251 5579 530', 'Adipisci sit sunt aut nemo. Quaerat quia quos fuga expedita accusamus. Quibusdam pariatur dolor placeat fugiat. Ut in est fugiat distinctio maiores sint neque.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(4, 'Wani Puspasari', 'Cawisono Hakim', 'maheswara.jamalia@gmail.co.id', '(+62) 375 8945 5871', 'Animi laborum enim et illum eum consequatur. A harum voluptatibus tempore quia ipsum autem. Et sit nulla tenetur.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(5, 'Slamet Dabukke', 'Wisnu Mahendra', 'luhung.lestari@yahoo.com', '0527 7256 1719', 'Et sed laudantium optio qui expedita. Architecto ex inventore quia. Blanditiis et nobis cumque tempore. Necessitatibus sequi aut voluptatem enim. Expedita et quis velit sint nobis dolor.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(6, 'Winda Aryani', 'Gilang Pangestu S.E.', 'andriani.adikara@yahoo.co.id', '0667 5757 6105', 'Vel eos consequatur fugiat deserunt modi. Rerum harum ea tempora voluptatem. Tenetur dolorem perspiciatis aut ad sunt vel. Odio consectetur praesentium sapiente minus iure enim quis.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(7, 'Olivia Pertiwi', 'Wisnu Budiyanto', 'karimah.aryani@yulianti.sch.id', '023 3072 858', 'Quo sapiente ut et atque fugiat aut. Tempore possimus porro iure minima aut non quia. Repellendus atque voluptates est illo dolor amet. Esse corrupti tenetur autem sint qui.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(8, 'Paiman Purwadi Maryadi M.M.', 'Chelsea Prastuti', 'kenari.pradipta@yahoo.co.id', '(+62) 881 064 769', 'Soluta illum sit consectetur ratione qui incidunt. Quod voluptatem culpa itaque dolores ut. Est soluta sed recusandae nihil ea. Eum nemo assumenda id id veritatis eligendi accusamus ratione.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(9, 'Dwi Budiman', 'Jail Santoso', 'shania25@yahoo.com', '(+62) 764 4729 6614', 'Aut pariatur sed saepe sunt impedit delectus optio est. Sit debitis ipsa qui quisquam reiciendis in. Fuga et quae nobis amet fugit. Minus qui quia placeat ad assumenda minus vitae.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(10, 'Mulyanto Santoso', 'Damu Hendri Hutapea', 'sadina.purwanti@saefullah.org', '(+62) 771 9609 845', 'Cum architecto deserunt nobis eius nesciunt dolor. Repellendus quo autem dolores neque. Veniam quis mollitia quas commodi.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(11, 'Balamantri Prasetya', 'Yahya Najmudin', 'ajimin.melani@nasyidah.my.id', '(+62) 23 5412 702', 'Nulla iusto laboriosam quo ex commodi eum. Pariatur pariatur magni et consequuntur voluptatibus quaerat consequuntur. Saepe maiores vel et voluptas dolor rem consequatur.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(12, 'Novi Hastuti', 'Ana Kania Zulaika', 'rahimah.pranata@yahoo.com', '0569 0419 882', 'Consectetur dolorem reprehenderit quae enim qui. Sit quam mollitia voluptatem soluta. Minus placeat quia dolores repellendus.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(13, 'Latif Zulkarnain', 'Xanana Darman Habibi', 'vivi.hidayat@pratiwi.id', '(+62) 870 214 468', 'Sint nihil qui consequatur in quam est quaerat. Esse non sit voluptatem sequi odit illum dignissimos. Praesentium quos qui mollitia suscipit. Vel laborum cum quidem.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(14, 'Muni Najmudin S.H.', 'Dina Lestari', 'hakim.rusman@yahoo.co.id', '(+62) 826 2497 362', 'Sunt accusantium perferendis nostrum consequuntur quis placeat. Ut qui quo dolor. Aut et ut facere.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(15, 'Gilang Ilyas Kurniawan M.TI.', 'Tasnim Hutapea M.Farm', 'uutami@gmail.com', '0343 8845 541', 'Atque modi animi et omnis ipsum officiis voluptatem. Eligendi magnam ipsa eligendi officia eius.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(16, 'Tiara Rika Riyanti S.Psi', 'Najib Napitupulu', 'sari86@lestari.name', '0487 3430 482', 'Hic at inventore voluptatum sint. Tenetur perspiciatis eveniet doloremque perspiciatis aut numquam. Nemo et occaecati maxime nam occaecati et. Dignissimos et consectetur excepturi nam ea.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(17, 'Olivia Laksita', 'Gasti Febi Wahyuni S.T.', 'tami80@mulyani.tv', '0578 6028 040', 'Quia commodi officia quia nisi quis sequi dolor ut. Non amet adipisci odio deleniti. Et odit laboriosam non ad. Omnis reprehenderit veritatis sed provident.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(18, 'Diana Hassanah', 'Balangga Wibisono', 'violet94@yahoo.co.id', '026 8169 4202', 'Sit ex perspiciatis nobis minima odit. Perferendis error non occaecati eos eos. Est qui corrupti consequuntur distinctio voluptatem modi eaque.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(19, 'Putri Hassanah', 'Danuja Cengkir Pranowo S.Psi', 'opan55@yahoo.co.id', '0542 3278 737', 'Et cupiditate voluptatem quaerat ducimus. Dolorum earum voluptates dolorem assumenda molestiae totam. Omnis voluptatibus tempora modi fugit nam ipsa est.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(20, 'Laksana Jabal Ramadan M.TI.', 'Cornelia Kusmawati M.Ak', 'zuwais@gmail.co.id', '(+62) 827 6547 343', 'Eos quia distinctio sint recusandae excepturi quas inventore. Perspiciatis repellat et maiores sit impedit nam. Odio nihil porro omnis quis voluptas et. Et voluptatem numquam omnis dolor.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(21, 'Puji Nurdiyanti S.E.', 'Prabu Wahyudin', 'keisha81@yahoo.co.id', '0671 0223 8415', 'Ut molestias a ad officiis provident neque et. Magni nihil id et et sint consequuntur perferendis. Expedita eum officiis impedit totam.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(22, 'Kezia Melani S.T.', 'Hafshah Puspasari', 'lukita.adriansyah@wijaya.tv', '(+62) 840 4534 7259', 'Id similique quia ea autem quia officia corrupti. Neque ullam sit ex delectus in est maxime. In suscipit cupiditate quae eos repudiandae asperiores.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(23, 'Gabriella Lala Usamah', 'Salsabila Mandasari', 'mangunsong.yani@handayani.web.id', '0640 6025 0248', 'Praesentium nemo distinctio ut corporis. Molestiae fugiat minima est voluptatem. Adipisci accusamus commodi quas qui mollitia.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(24, 'Malika Hastuti', 'Gasti Malika Nasyidah S.Ked', 'zfujiati@maryati.biz.id', '0330 0483 484', 'Et voluptatem corporis consectetur qui. Dolore at officiis minima magni et enim consectetur. Incidunt sed cupiditate eum animi praesentium. Alias id voluptate animi odit ducimus ut nihil.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(25, 'Martani Mustofa', 'Cayadi Pandu Sitompul', 'tzulaika@wahyuni.or.id', '(+62) 659 9648 5568', 'Nemo iure aspernatur temporibus est. Possimus rerum iusto ad magnam. Facere nesciunt animi temporibus voluptate. Et exercitationem fugiat culpa voluptatum quia vero.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(26, 'Rama Hutasoit', 'Agus Bagas Januar', 'laila.uwais@gmail.com', '(+62) 841 4417 8844', 'Ex dolorem praesentium sed distinctio dolor. Fugiat ut sapiente quo ducimus asperiores voluptatem. Eaque quasi laudantium sunt laudantium amet atque.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(27, 'Aurora Palastri', 'Aisyah Hastuti S.E.', 'spermata@yahoo.com', '0382 2945 987', 'Eos voluptas ducimus maxime velit nihil. Rem deleniti corrupti voluptas voluptates et. Eaque vel ipsum est ut molestiae fuga dolor. Assumenda nulla voluptatem voluptatum magnam.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(28, 'Kani Utami', 'Lili Purnawati', 'tirtayasa.wastuti@yahoo.com', '(+62) 331 2660 4133', 'Ea et qui excepturi minima cum alias in molestiae. Et itaque odio totam voluptatum. Natus et quia aliquam et suscipit.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(29, 'Rizki Sihombing S.I.Kom', 'Perkasa Darsirah Rajasa', 'kayla89@yahoo.co.id', '0962 7660 055', 'Nulla dolor rerum rerum et voluptate omnis debitis. Quia recusandae quia non aut dolor ad. Incidunt totam commodi perspiciatis ad veniam natus sed.', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(30, 'Chandra Pradana', 'Yono Cahyadi Lazuardi', 'trahimah@yahoo.co.id', '0747 2594 944', 'Mollitia molestiae corporis vitae exercitationem ipsam illo. Quam qui deserunt beatae fugit similique deserunt ea. Veniam et modi eveniet corrupti.', '2022-11-02 18:28:04', '2022-11-02 18:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_dashboards`
--

CREATE TABLE `kontak_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `prestasi_id` bigint(20) UNSIGNED NOT NULL,
  `angkatan` year(4) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `jenis_kelamin`, `jurusan_id`, `prestasi_id`, `angkatan`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '4090361471', 'Empluk Januar S.Kom', 'P', 1, 2, 1984, 'Jln. R.M. Said No. 58, Kupang 97823, Pabar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, '4570283206', 'Makuta Napitupulu', 'P', 2, 4, 1998, 'Jr. Uluwatu No. 89, Cilegon 68535, Bali', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(3, '0380569202', 'Bakiono Situmorang', 'L', 1, 3, 1974, 'Psr. Bambon No. 840, Bitung 43856, Sumbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(4, '0167944168', 'Genta Lestari', 'L', 1, 3, 2008, 'Ki. Bawal No. 902, Bontang 99215, Riau', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(5, '1040501701', 'Jais Winarno S.I.Kom', 'P', 1, 1, 2019, 'Ds. Baiduri No. 224, Salatiga 17468, Kaltara', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(6, '0190763506', 'Sari Padmasari', 'P', 2, 1, 2005, 'Ki. Raden Saleh No. 411, Lhokseumawe 10331, Sulteng', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(7, '2747173392', 'Putri Lailasari', 'L', 1, 1, 1999, 'Ki. Daan No. 778, Bitung 73351, Sumbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(8, '4161090464', 'Rafi Wadi Mansur', 'P', 2, 3, 2014, 'Gg. Casablanca No. 845, Padangsidempuan 56150, NTT', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(9, '7898875038', 'Argono Salahudin', 'L', 1, 3, 1976, 'Jr. Jend. A. Yani No. 893, Banjarbaru 59393, Sulteng', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(10, '5852643844', 'Embuh Hakim', 'P', 1, 1, 2002, 'Psr. Casablanca No. 911, Prabumulih 83315, Sulut', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(11, '4467693681', 'Malika Purwanti', 'L', 1, 3, 1974, 'Jln. Salam No. 194, Tidore Kepulauan 91514, Kalbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(12, '1298887989', 'Kartika Clara Mandasari', 'P', 2, 1, 2001, 'Jr. Dipatiukur No. 580, Gorontalo 25369, Pabar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(13, '5755731771', 'Murti Hutagalung S.Farm', 'P', 2, 2, 1981, 'Jr. Abdul. Muis No. 292, Prabumulih 28821, Sumbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(14, '3692897227', 'Tami Usamah', 'L', 1, 4, 1972, 'Kpg. Sentot Alibasa No. 943, Administrasi Jakarta Barat 74147, DKI', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(15, '5493454481', 'Oliva Usyi Hassanah M.Ak', 'L', 1, 5, 2019, 'Jln. Villa No. 464, Tidore Kepulauan 39637, Aceh', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(16, '5004649394', 'Kania Paris Hastuti', 'P', 2, 5, 1972, 'Jln. Salam No. 419, Pangkal Pinang 62329, Sulbar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(17, '9797396189', 'Virman Latupono S.Pd', 'P', 1, 2, 2000, 'Kpg. Bappenas No. 914, Depok 75413, Jabar', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(18, '5101427029', 'Eli Laksita S.T.', 'P', 2, 5, 1982, 'Gg. Rumah Sakit No. 378, Solok 27130, Sumsel', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(19, '8552237346', 'Yusuf Jarwa Mahendra S.Kom', 'L', 1, 2, 2021, 'Jr. Bak Air No. 78, Pagar Alam 46054, DIY', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(20, '0477779890', 'Daryani Cakrabuana Jailani S.T.', 'L', 2, 4, 1985, 'Dk. Bakit  No. 909, Jayapura 98825, Sumut', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(22, '3371634906', 'Raina Febi Maryati', 'P', 2, 1, 1979, 'Gg. Yap Tjwan Bing No. 152, Sorong 46288, Kaltara', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(23, '3612569887', 'Limar Adinata Situmorang S.Kom', 'P', 1, 3, 1991, 'Psr. Bayam No. 900, Parepare 31810, Kalbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(24, '2620849752', 'Darmana Maheswara', 'L', 1, 5, 1981, 'Ds. Wahidin Sudirohusodo No. 379, Bandar Lampung 23735, Sulbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(25, '6264183359', 'Taufik Kardi Maulana', 'L', 2, 4, 1976, 'Jr. Kali No. 535, Padangpanjang 78623, NTB', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(26, '9685159293', 'Ivan Cagak Wahyudin', 'P', 1, 3, 1996, 'Dk. Diponegoro No. 728, Kediri 36080, Kalbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(27, '4986689960', 'Darmaji Gaman Adriansyah', 'P', 2, 5, 2004, 'Dk. Gedebage Selatan No. 458, Malang 28296, Sulbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(28, '0160286508', 'Garan Wahyudin', 'P', 1, 1, 1999, 'Ki. Kyai Gede No. 909, Bukittinggi 88297, Sumut', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(29, '8611018392', 'Laras Kuswandari', 'P', 1, 5, 2014, 'Gg. Ters. Jakarta No. 492, Sibolga 99937, NTT', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(30, '3524688781', 'Karna Kalim Wacana M.Ak', 'P', 1, 5, 1980, 'Ki. Jayawijaya No. 692, Sorong 69413, Pabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(31, '2875287658', 'Karen Karimah Mandasari S.E.I', 'L', 2, 5, 2019, 'Gg. Sentot Alibasa No. 543, Banda Aceh 60098, Jateng', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(32, '2118144337', 'Sabrina Mulyani', 'L', 1, 2, 1991, 'Dk. Teuku Umar No. 259, Jayapura 45060, Sulbar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(33, '4557996438', 'Keisha Laksmiwati S.Gz', 'P', 2, 4, 2008, 'Jln. Setia Budi No. 471, Palu 79678, Sulteng', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(34, '8877678958', 'Janet Diana Maryati S.Sos', 'P', 1, 3, 1991, 'Psr. Flores No. 528, Manado 39813, Bali', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(35, '2943610609', 'Karman Hakim', 'P', 1, 4, 1991, 'Kpg. Ujung No. 718, Mojokerto 31081, Jabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(36, '5173675680', 'Opung Saputra', 'L', 1, 3, 2005, 'Gg. Merdeka No. 564, Batam 67207, Sulsel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(37, '5353525016', 'Galuh Dimaz Maryadi', 'L', 2, 2, 2020, 'Dk. Basuki No. 863, Parepare 66424, Kaltim', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(38, '5441160481', 'Jumari Wacana', 'L', 2, 5, 1978, 'Psr. Pahlawan No. 308, Banda Aceh 60512, Sumsel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(39, '8598211399', 'Anastasia Utami', 'L', 2, 5, 1992, 'Jr. Abang No. 37, Padangsidempuan 63010, Kaltim', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(40, '1910784677', 'Puti Yuniar', 'P', 2, 1, 1994, 'Ki. Mulyadi No. 836, Gunungsitoli 58160, Jatim', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(41, '5953107291', 'Liman Wasita', 'L', 2, 1, 2000, 'Kpg. Casablanca No. 658, Tasikmalaya 75017, Sultra', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(42, '6251519527', 'Mujur Bagus Tamba S.Farm', 'P', 2, 4, 1970, 'Gg. Reksoninten No. 943, Padang 11479, Banten', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(43, '6936947334', 'Ikhsan Harjaya Wijaya S.IP', 'P', 1, 1, 1985, 'Kpg. Jend. Sudirman No. 807, Pangkal Pinang 70878, Bengkulu', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(44, '7435001298', 'Dirja Marbun', 'P', 2, 1, 1982, 'Gg. Bagis Utama No. 635, Mataram 96717, Jateng', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(45, '5652565409', 'Marsudi Manullang M.Farm', 'L', 1, 1, 1976, 'Ki. Setiabudhi No. 78, Administrasi Jakarta Barat 41438, Banten', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(46, '7820876593', 'Puspa Susanti S.Pd', 'L', 2, 5, 1999, 'Kpg. Baing No. 21, Salatiga 99726, Kalsel', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(47, '2953556593', 'Icha Fujiati', 'L', 1, 4, 1995, 'Psr. Lumban Tobing No. 974, Tebing Tinggi 37854, Riau', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(48, '5877587146', 'Nasrullah Bagus Hutapea', 'L', 2, 4, 1979, 'Gg. Bakaru No. 332, Banda Aceh 46150, DIY', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(49, '1686072346', 'Bambang Sihombing', 'L', 1, 2, 2021, 'Psr. Peta No. 775, Bontang 71580, Jabar', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(50, '1124127050', 'Juli Utami', 'P', 1, 3, 2004, 'Psr. Bak Mandi No. 557, Jambi 18123, Malut', '2022-11-02 18:28:04', '2022-11-02 18:28:04'),
(51, '2011082018', 'Tsalsabila Jilhan Haura', 'P', 1, 4, 2020, 'balai baru', '2022-12-22 06:03:50', '2022-12-22 06:03:50');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_08_014226_create_mahasiswas_table', 1),
(6, '2022_06_08_014237_create_jurusans_table', 1),
(7, '2022_07_04_083830_create_beritas_table', 1),
(8, '2022_07_04_084156_create_kategoris_table', 1),
(9, '2022_07_16_142538_create_dosens_table', 1),
(10, '2022_07_16_151730_create_dosen_dashboards_table', 1),
(11, '2022_07_16_162645_create_kontaks_table', 1),
(12, '2022_07_16_165557_create_kontak_dashboards_table', 1),
(13, '2022_07_16_182854_create_prestasis_table', 1),
(14, '2022_07_17_023402_create_prestasi_dashboards_table', 1),
(15, '2022_07_17_113433_create_galleries_table', 1),
(16, '2022_07_17_121047_create_galeris_table', 1),
(17, '2022_07_17_123615_create_galeri_dashboards_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Juara 1 Solo Song', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, 'Peraih Medali Emas Debate', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(3, 'Lulus IISMAVO', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(4, 'Lulus PIMNAS', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(5, 'Juara 1 programming', '2022-11-02 18:28:03', '2022-11-02 18:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_dashboards`
--

CREATE TABLE `prestasi_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Jilhan Haura', 'jilhanhaura7@gmail.com', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uzCIWglL8BdJEFH0dUNEMyPzytcaeBSxNfp6G90mKPWJGs6BQRwe9oKLkLaK', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(2, 'Jaga Nrima Mangunsong', 'puspasari.putri@example.org', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XHDs1GtIIM', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(3, 'Caket Rajata', 'jsihombing@example.org', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fowhPN3heR', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(4, 'Rizki Damanik', 'titi.mayasari@example.net', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EalOG14Mo7', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(5, 'Putri Laksita', 'dmangunsong@example.net', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MCpzusBOmn', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(6, 'Asman Irawan M.Farm', 'npurwanti@example.net', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iIYWQKOXfZ', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(7, 'Prakosa Permadi', 'vwijaya@example.net', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '26jmYq21LX', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(8, 'Parman Pardi Ramadan S.Kom', 'iyuliarti@example.org', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XJT9WIkkoD', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(9, 'Zulaikha Zalindra Oktaviani M.Farm', 'mala07@example.org', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EFNhipoL75', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(10, 'Gading Gamanto Waskita M.M.', 'etarihoran@example.com', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qKoJJMA4CP', '2022-11-02 18:28:03', '2022-11-02 18:28:03'),
(11, 'Kani Icha Hastuti M.M.', 'nasyidah.juli@example.org', '2022-11-02 18:28:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uAMzNVW1SJ', '2022-11-02 18:28:03', '2022-11-02 18:28:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_nip_unique` (`nip`);

--
-- Indexes for table `dosen_dashboards`
--
ALTER TABLE `dosen_dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_dashboards`
--
ALTER TABLE `galeri_dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_dashboards`
--
ALTER TABLE `kontak_dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi_dashboards`
--
ALTER TABLE `prestasi_dashboards`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `dosen_dashboards`
--
ALTER TABLE `dosen_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `galeri_dashboards`
--
ALTER TABLE `galeri_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kontak_dashboards`
--
ALTER TABLE `kontak_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prestasi_dashboards`
--
ALTER TABLE `prestasi_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
