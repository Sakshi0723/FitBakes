-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2026 at 05:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitbakes_db`
--
CREATE DATABASE IF NOT EXISTS `fitbakes_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fitbakes_db`;

-- --------------------------------------------------------

--
-- Table structure for table `custome_order`
--

CREATE TABLE `custome_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `cake_type` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `weight` double NOT NULL,
  `days` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custome_order`
--

INSERT INTO `custome_order` (`id`, `user_id`, `name`, `phone_no`, `Email_id`, `cake_type`, `occasion`, `weight`, `days`, `image`, `message`, `price`, `quantity`, `total`, `order_date`, `status`) VALUES
(1, 1, 'sakshi santosh gopale', 2147483647, 'sakshigopale23@gmail.com', 'Vanilla', 'Birthday', 1, 0, 'uploads/diabetic.jpg', 'aarya', 500, 1, 500, '2026-03-18 15:49:01', 'Paid'),
(2, 1, 'sakshi santosh gopale', 2147483647, 'sakshigopale23@gmail.com', 'Vanilla', 'Birthday', 1, 1, 'uploads/images1.jpg', 'Aaditya', 500, 1, 500, '2026-03-18 16:02:14', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `message`) VALUES
('sakshi', 'sakshigopale3@gmail.com', 'it is very yasty and very amazing we love it.');

-- --------------------------------------------------------

--
-- Table structure for table `health_cakes`
--

CREATE TABLE `health_cakes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `cake_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `products_id` int(255) DEFAULT NULL,
  `health_tip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_cakes`
--

INSERT INTO `health_cakes` (`id`, `type`, `cake_name`, `description`, `products_id`, `health_tip`) VALUES
(1, 'diabetes', 'Sugar-Free Cheesecake,Keto and low-carb cakes, Carrot Cake', 'Using a sugar free sweetener and an almond flour crust, cheesecake can be a decadent yet diabetic-friendly treat. keto cake for very low carbohydrade count, made with almond and monk fruit sweetness. Carrot cake by wheat flour, natural fruit sweeterness, and dark chocolate.', 3, 'For diabetes, avoid refined sugar and choose low glycemic index foods.Avoid dried fruits, Refined white flour, white carbohydrades, trans fats, Saturated Fats. Always read cake labels,Choose cakes made with high-fiber,almond,whole wheat or coconut flour. Always consult your doctor before consuming sweets.'),
(2, 'gym', 'High-Protein Whey Cake, Oats & Peanut Butter Cake, Protein Brownie', 'Using high-protein ingredients like whey protein, oats flour, peanut butter, and natural sweeteners, these cakes help in muscle recovery and energy boosting. Protein brownies made with dark chocolate and almond flour support muscle growth while keeping sugar low. Oats-based cakes provide complex carbohydrates for sustained workout energy.', 4, 'For gym freak people, focus on high-protein and balanced macronutrient foods. Avoid excessive refined sugar, maida (refined flour), and trans fats. Choose cakes made with whey protein, oats flour, almond flour, peanut butter, seeds, and dark chocolate (70%+ cocoa). Check nutrition labels for protein content and calorie count. Maintain proper hydration and consult a nutritionist for a personalized diet plan.'),
(3, 'kids', 'Whole Wheat Banana Cake, Dry Fruit Cake, Chocolate Oats Muffins', 'Using whole wheat flour, natural sweeteners like honey or mashed banana, and nutrient-rich ingredients like milk, nuts, and seeds, these cakes provide energy and essential nutrients for growing children. Dry fruit cake made with almonds, walnuts, and dates supports brain development. Chocolate oats muffins offer fiber, calcium, and iron while satisfying sweet cravings in a healthier way.', 5, 'For kids, focus on balanced nutrition with protein, calcium, iron, and vitamins. Avoid excessive refined sugar, artificial colors, preservatives, and too much chocolate spread or cream. Choose cakes made with whole wheat flour, ragi, oats, milk, eggs, nuts, and fruits. Limit portion sizes and encourage fruits and home-made snacks. Ensure children stay hydrated and maintain a balanced diet along with physical activity.'),
(4, 'weightloss', 'Oats & Chia Seed Cake, Almond Flour Protein Cake, Sugar-Free Cocoa Muffins', 'Made with fiber-rich oats, chia seeds, almond flour, and natural sugar substitutes, these cakes help promote fullness and reduce calorie intake. Almond flour protein cake supports muscle maintenance during weight loss. Sugar-free cocoa muffins made with dark chocolate (70%+ cocoa) satisfy cravings without excess sugar.', 0, 'For weight loss, focus on low-calorie, high-fiber, and high-protein foods. Avoid refined sugar, maida (white flour), excess butter, cream, and fried ingredients. Choose cakes made with oats, ragi, almond flour, seeds, yogurt, and natural sweeteners like stevia or monk fruit. Practice portion control and check calorie content before consuming. Combine a balanced diet with regular exercise and proper hydration for effective and sustainable weight loss'),
(5, 'weightgain', 'Peanut Butter Banana Cake, Dry Fruit & Dates Cake, Chocolate Walnut Protein Cake', 'Made with calorie-dense and nutrient-rich ingredients like peanut butter, bananas, full-cream milk, dates, almonds, walnuts, and dark chocolate, these cakes help increase healthy calorie intake. Dry fruit & dates cake provides natural sugars and iron for energy. Chocolate walnut protein cake supports muscle gain when combined with strength training.', 0, 'For healthy weight gain, focus on nutrient-dense and high-calorie foods rather than junk food. Avoid excessive refined sugar and processed snacks. Choose cakes made with whole wheat flour, nuts, seeds, peanut butter, ghee (in moderate amounts), milk, and natural sweeteners like dates or honey. Increase portion size gradually and eat small frequent meals. Combine with strength training and adequate protein intake for gaining lean muscle mass.'),
(6, 'heart', 'Oats & Flaxseed Cake, Walnut Multigrain Cake, Sugar-Free Dark Chocolate Muffins', 'Made with heart-friendly ingredients like oats, flaxseeds, walnuts, olive oil, and whole wheat flour, these cakes help support heart health. Oats are rich in soluble fiber that helps reduce bad cholesterol (LDL). Flaxseeds and walnuts provide omega-3 fatty acids, which are beneficial for maintaining healthy blood vessels. Sugar-free dark chocolate muffins (70%+ cocoa) can be enjoyed in moderation as they contain antioxidants.', 0, 'For heart patients, focus on low-sugar, low-salt, and low-saturated fat foods. Avoid refined flour (maida), excess butter, cream, trans fats, and highly processed ingredients. Choose whole grains, nuts, seeds, fruits, and healthy oils like olive oil in moderate amounts. Always check labels for sodium and fat content. Maintain regular physical activity as advised by a doctor and follow a heart-healthy balanced diet plan.');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `my`
--

CREATE TABLE `my` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `weight` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT 'Paid',
  `quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my`
--

INSERT INTO `my` (`id`, `product_id`, `price`, `order_date`, `weight`, `message`, `user_id`, `status`, `quantity`, `total`) VALUES
(12, 1, 799.00, '2026-02-15 11:12:06', '1 Kg', 'sakshi', 1, 'Paid', 2, 1598),
(14, 1, 0.00, '2026-02-15 11:16:57', '0.5 Kg', 'jay', 1, 'Paid', 1, 799),
(25, 2, 399.00, '2026-03-17 15:15:12', '0.5 Kg', 'priyanka', 1, 'Paid', 1, 399),
(26, 1, 799.00, '2026-03-18 07:15:31', '0.5 Kg', 'Pooja', 1, 'Paid', 1, 799),
(28, 1, 799.00, '2026-04-08 04:17:07', '0.5 Kg', 'pooja', 1, 'Paid', 1, 799);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Birthday','Anniversary','Wedding','health') NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `category`, `status`, `created_at`) VALUES
(1, 'Kids Theme Cake', 799, 'images/Birthday/i1.jpg', 'Delicious chocolate cake perfect for birthdays', 'Birthday', 1, '2026-01-17 09:12:05'),
(2, 'Oreo-Chocolate cake', 399, 'images/Birthday/i2.jpg', 'Delicious Oreo-chocolate cake perfect for birthdays', 'Birthday', 1, '2026-01-17 07:37:06'),
(3, 'diabetic-cake', 499, 'images/health/diabetic.jpg', 'Sugar-Free cake For Diabetic People', 'health', 1, '0000-00-00 00:00:00'),
(4, 'Gym_Freak_Cake', 499, 'images/health/gym.png', 'Using high-protein ingredients like whey protein, oats flour, peanut butter, and natural sweeteners, these cakes help in muscle recovery and energy boosting.', 'health', 1, '2026-03-02 18:30:00'),
(5, 'Kids_Cake', 799, 'images/health/kids.png', 'Using whole wheat flour, natural sweeteners like honey or mashed banana, and nutrient-rich ingredients like milk, nuts, and seeds, these cakes provide energy and essential nutrients for growing children.', 'health', 1, '2026-03-02 18:30:00'),
(6, 'Pink Floral Vanilla Cake', 395, 'images/Birthday/i3.jpg', 'Vanilla Cake covered in smooth, patel-Pink buttercream frosting.garden sr=tyle arrangement of fresh flowers, Romantic hearts and delicate piping, making it popular Choice', 'Birthday', 2, '2026-04-04 01:21:34'),
(7, 'FloralDrip Birthday Cake', 800, 'images/Birthday/i4.jpg', 'Frosting & Pattern: The base is covered in smooth buttercream with a horizontal striped pattern in pale blue and off-white/cream tones.Drip Effect: A rich, pink-colored glaze (often ganache) is carefully poured over the top edge to create a drip effect down the sides.Toppings: The top is lavishly decorated with Fresh Flowers Large, soft pink and yellow roses with green foliage.Macarons: At least two deep burgundy-colored French macarons.Edible Accents: Small gold or pearl-colored edible beads dragees scattered among the flowers. Topper A custom wooden or acrylic Happy Birthday script topper serves as the centerpiece.', 'Birthday', 3, '0000-00-00 00:00:00'),
(8, 'Romantic Couple Theme Cake', 990, 'images/Anniversary/A1.jpg', 'A romantic, white-frosted anniversary cake featuring a black silhouette of a proposing couple, accented with red roses, heart toppers, and a gold Happy Anniversary sign.', 'Anniversary', 2, '2026-03-01 14:29:33'),
(9, 'Two-Tier Blue Ombre Drip Cake,', 999, 'images/Anniversary/A2.jpg', 'This is a Two-Tier Blue Ombre Drip Cake, featuring a Product of 1973 Limited Edition topper and decorated with fresh red and pink roses, white babys breath and translucent sugar sails.', 'Anniversary', 2, '2022-02-24 18:30:00'),
(10, ' Floral Buttercream Birthday Cake', 599, 'images/Birthday/i5.jpg', 'An elegant white frosted birthday cake beautifully adorned with delicate pastel floral patterns and topped with three glowing candles', 'Birthday', 2, '0000-00-00 00:00:00'),
(11, 'Luxury Navy Blue and Gold Drip Cake', 900, 'images/Birthday/i6.jpg', 'This elegant dessert features a striking two-tone aesthetic blending deep navy blue at the base with a clean off white or latte colored top', 'Birthday', 2, '0000-00-00 00:00:00'),
(12, 'Purple and Peach Pastel Floral Cake', 999, 'images/Birthday/i7.jpg', 'This elegant single tier dessert features a textured watercolor style buttercream finish in shades of lavender peach and cream topped with intricate purple floral rosettes and delicate white and yellow daisy accents', 'Birthday', 1, '0000-00-00 00:00:00'),
(13, 'Eternal Love Delight Cake', 799, 'images/Anniversary/A3.jpg', 'This elegant two tier white cream cake features a striking vertical cascade of vibrant red fondant hearts and delicate baby breath flowers finished with a romantic silhouette of a wedding couple at the base and a Happy Anniversary gold topper', 'Anniversary', 1, '0000-00-00 00:00:00'),
(14, ' Pomegranate Jewel Anniversary Cake', 999, 'images/Anniversary/A4.jpg', 'This elegant minimalist white frosted cake is decorated with a vibrant border of fresh red pomegranate seeds and topped with two personalized heart-shaped cookies for names creating a sophisticated and romantic aesthetic for celebrations', 'Anniversary', 2, '2026-04-07 15:45:03'),
(15, 'Elegant Two-Tier Floral Wedding Cake', 999, 'images/Wedding/W1.jpg', 'This sophisticated 2-tier white cream cake features a horizontal textured frosting finish, adorned with delicate fresh floral arrangements of white and purple blossoms, and is crowned with a romantic black silhouette topper of a couple in a proposal pose', 'Wedding', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `user_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `Mobile_No` bigint(20) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Birth_Date` date NOT NULL,
  `password` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`user_id`, `profile_pic`, `username`, `Mobile_No`, `Email_id`, `Birth_Date`, `password`, `address`) VALUES
(1, 'uploads/Tanvi.jpg', 'Sakshi', 9987767107, 'sakshigopale23@gmail.com', '2005-12-23', 72329, 'Aambibai Niwas, Juinagar Sec 23, Navi Mumbai, 400705'),
(2, '', 'Tanvi', 7726394752, 'tanvi@1234', '2009-01-23', 12345, '');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `reminder_date` date NOT NULL,
  `reminder_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`reminder_date`, `reminder_text`) VALUES
('2025-12-13', 'Birthday'),
('2026-01-05', 'Riya_Birthday'),
('2026-03-24', 'YashBirthday'),
('2026-03-24', 'Seema Anniversary'),
('2026-04-07', 'Anniversary'),
('2026-04-08', 'Sujal Birthday'),
('2026-04-08', 'Riya_Birthday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custome_order`
--
ALTER TABLE `custome_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_cakes`
--
ALTER TABLE `health_cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `my`
--
ALTER TABLE `my`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custome_order`
--
ALTER TABLE `custome_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `health_cakes`
--
ALTER TABLE `health_cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my`
--
ALTER TABLE `my`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `my`
--
ALTER TABLE `my`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"fitbakes_db\",\"table\":\"products\"},{\"db\":\"fitbakes_db\",\"table\":\"register_tbl\"},{\"db\":\"fitbakes_db\",\"table\":\"feedback\"},{\"db\":\"fitbakes_db\",\"table\":\"reminders\"},{\"db\":\"fitbakes_db\",\"table\":\"custome_order\"},{\"db\":\"fitbakes_db\",\"table\":\"my\"},{\"db\":\"fitbakes_db\",\"table\":\"login_tbl\"},{\"db\":\"fitbakes_db\",\"table\":\"FeedBack\"},{\"db\":\"fitbakes_db\",\"table\":\"health_cakes\"},{\"db\":\"fitbakes_db\",\"table\":\"health_conditions\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'fitbakes_db', 'my', '{\"sorted_col\":\"`status` ASC\"}', '2026-02-15 11:22:14'),
('root', 'fitbakes_db', 'products', '{\"sorted_col\":\"`category` ASC\"}', '2026-04-07 15:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2026-04-26 15:11:49', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `reminder_app_db`
--
CREATE DATABASE IF NOT EXISTS `reminder_app_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reminder_app_db`;

-- --------------------------------------------------------

--
-- Table structure for table `health_conditions`
--

CREATE TABLE `health_conditions` (
  `id` int(11) NOT NULL,
  `condition_name` varchar(100) DEFAULT NULL,
  `tips` text DEFAULT NULL,
  `cake_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_conditions`
--
ALTER TABLE `health_conditions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health_conditions`
--
ALTER TABLE `health_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `shop-db`
--
CREATE DATABASE IF NOT EXISTS `shop-db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop-db`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
