-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 08:53 AM
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
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `sdg`
--

CREATE TABLE `sdg` (
  `id` int(11) NOT NULL,
  `sdg_name` varchar(255) NOT NULL,
  `sdg_desc` text NOT NULL,
  `sdg_color` varchar(6) NOT NULL,
  `website_1` varchar(255) NOT NULL,
  `website_1_url` varchar(255) NOT NULL,
  `website_1_desc` text NOT NULL,
  `website_2` varchar(255) NOT NULL,
  `website_2_url` varchar(255) NOT NULL,
  `website_2_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdg`
--

INSERT INTO `sdg` (`id`, `sdg_name`, `sdg_desc`, `sdg_color`, `website_1`, `website_1_url`, `website_1_desc`, `website_2`, `website_2_url`, `website_2_desc`) VALUES
(1, 'ZERO POVERTY', 'End poverty in all its forms everywhere, by ensuring social protection systems and promoting equal access to resources and services for all individuals.', 'e5233d', 'PATH Foundation PH', 'https://pfpi.org', 'PATH Foundation strives to alleviate poverty, improve health, and promote sustainable development, primarily focusing on underserved regions in the Philippines.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(2, 'HUNGER RELIEF', 'End hunger, achieve food security and improved nutrition, and promote sustainable agriculture, ensuring everyone has access to nutritious food.', 'dda73a', 'Reach Out Feed PH', 'https://www.feedphilippines.org', 'Reach Out and Feed Philippines Inc. aims to provide meals to malnourished children and raise awareness about nutrition in developing communities across the country.', 'Rise Against Hunger PH', 'https://philippines.riseagainsthunger.org/', 'We target remote, hard-to-reach communities with high hunger levels, providing meals through local schools to support education initiatives.'),
(3, 'HEALTH ACCESS', 'Ensure healthy lives and promote well-being for all ages, including access to healthcare services and essential medicines.', '4ca146', 'Health Futures Foundation', 'https://www.healthfuturesfoundation.com', 'Health Futures Foundation, Inc. (HFI) manages health and social development programs in marginalized Philippine communities as a non-profit NGO.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(4, 'EDUCATION EQUITY', 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all, aiming to provide education that empowers individuals and promotes sustainable development.', 'c7212f', 'Bukas Palad Foundation', 'https://bukaspaladfoundation.org', 'Bukas Palad Foundation of the Philippines, Inc. (BP) is a non-profit NGO offering sustainable development, education, livelihood, and support to various vulnerable groups.', 'Child Hope PH', 'https://childhope.org.ph', 'Childhope PH, an NGO/NPO in Manila, uplifts urban poor children by providing education, healthcare, and improved living conditions for a better future.'),
(5, 'GENDER EMPOWERMENT', 'Achieve gender equality and empower all women and girls, ensuring equal rights, opportunities, and representation in decision-making processes.', 'ef402d', 'Gender Equality Resource Center', 'https://www.gerc.ph', 'The GERC Inc. website, launched in March 2017, educates co-ops on gender mainstreaming for achieving gender equality and empowerment.', 'OXFAM PH', 'https://oxfam.org.ph', 'Oxfam Pilipinas stresses collaborative efforts for gender equality, inclusivity, focusing on diverse gender identities, especially for women.'),
(6, 'WATER SECURITY', 'Ensure availability and sustainable management of water and sanitation for all, aiming to achieve universal access to safe and affordable drinking water and adequate sanitation.', '27bfe6', 'Planet Water Foundation', 'https://planet-water.org', 'Planet Water Foundation\'s goal is to provide access to clean, safe water to communities in need, enhancing health and well-being.', 'Manila Water Foundation', 'https://manilawaterfoundation.org', 'We aspire for universal access to clean and safe water through our WASH programs, striving for an inclusive Philippines where no one is left behind.'),
(7, 'ENERGY ACCESSIBILITY', 'Ensure access to affordable, reliable, sustainable, and modern energy for all, promoting renewable energy sources and energy efficiency.', 'fbc412', 'Philippine Energy Efficiency Alliance', 'https://www.pe2.org/about', 'The goal is to facilitate energy efficiency, conservation, and renewable energy initiatives to help the Philippines achieve long-term energy targets.', 'Institute for Climate and Sustainable Cities', 'https://icsc.ngo', 'The Institute for Climate and Sustainable Cities (ICSC) advocates fair climate policy and low-carbon development, pivotal in global climate action.'),
(8, 'JOB OPPORTUNITIES', 'Promote sustained, inclusive, and sustainable economic growth, full and productive employment, and decent work for all, aiming to eradicate forced labor and modern slavery.', 'a31c44', 'Philippine Economic Society', 'https://economicsph.org', 'The Philippine Economic Society, established in August 1962, fosters professional relations among economists and enhances economic research and instruction standards.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(9, 'INNOVATION SUPPORT', 'Build resilient infrastructure, promote inclusive and sustainable industrialization, and foster innovation, aiming to enhance economic development and human well-being.', 'f26a2e', 'Philippine Development Foundation', 'https://www.phildev.org', 'PhilDev is a non-profit innovation organization that fast-tracks science and technology for national development through initiatives and partnerships.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(10, 'SOCIAL INCLUSION', 'Reduce inequality within and among countries, by empowering and promoting the social, economic, and political inclusion of all, regardless of age, sex, disability, race, ethnicity, origin, religion, economic, or other status.', 'e01483', 'Gender Equality Resource Center', 'https://www.gerc.ph', 'Established in 2013 and registered in 2014, the Gender Equality Resource Center (GERC) Inc. promotes gender equality within cooperatives for development.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(11, 'URBAN SUSTAINABILITY', 'Make cities and human settlements inclusive, safe, resilient, and sustainable, ensuring access for all to basic services and adequate housing, and promoting sustainable urbanization.', 'f89d2a', 'Institute for Climate and Sustainable Cities', 'https://icsc.ngo', 'ICSC is an international NGO advocating fair climate policy and sustainable development, recognized for its role in global climate action.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(12, 'ETHICAL CONSUMPTION', 'Ensure sustainable consumption and production patterns, promoting resource and energy efficiency, sustainable infrastructure, and reducing waste generation.', 'bf8d2c', 'Philippine Center For Environmental Protection and Sustainable Development', 'https://pcepsdi.org.ph', 'Our aim is to foster a greener society through eco-conscious practices, notably via the National Eco Labelling Programme in the Philippines.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(13, 'CLIMATE ACTION', 'Take urgent action to combat climate change and its impacts, by strengthening resilience and adaptive capacity to climate-related disasters.', '407f46', 'Youth Advocates for Climate Action PH', 'https://yacap.org', 'Youth Advocates for Climate Action Philippines (YACAP) unites Filipino youth in battling climate change and advocating for climate justice.', 'Institute for Climate and Sustainable Cities', 'https://icsc.ngo', 'ICSC, an international NGO based in the Philippines, promotes fair climate policy and low-carbon, resilient development, notably advancing global climate action.'),
(14, 'MARINE CONSERVATION', 'Conserve and sustainably use the oceans, seas, and marine resources for sustainable development, aiming to prevent and significantly reduce marine pollution.', '1f97d4', 'Marine Conservation PH', 'https://www.marineconservationphilippines.org', 'We employ science to comprehend the impacts of local and global pressures on marine ecosystems, empowering communities to foster sustainability.', 'Save Philippine Seas', 'https://www.savephilippineseas.org', 'Save Philippine Seas (SPS) is a non-profit organization dedicated to conserving coastal and marine resources by empowering \"seatizens\" for collective action and behavior change.'),
(15, 'LAND PRESERVATION', 'Protect, restore, and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, halt and reverse land degradation, and halt biodiversity loss.', '59ba47', 'World Wide Fund For Nature PH', 'https://www.wwf.org.ph', 'WWF-Philippines works at the forefront of conservation, engaging people to halt and reverse the degradation of the Philippine environment, fostering harmony with nature.', 'PhilBio', 'https://www.philbio.org.ph', 'PLACEHOLDER'),
(16, 'SOCIAL EQUITY', 'Promote peaceful and inclusive societies for sustainable development, provide access to justice for all, and build effective, accountable, and inclusive institutions at all levels.', '136a9f', 'Human Rights Watch', 'https://www.hrw.org', 'To address human rights violations, ensuring protection for activists and journalists while fostering a democratic space for all voices in the Philippines.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER'),
(17, 'COLLABORATIVE IMPACT', 'Strengthen the means of implementation and revitalize the global partnership for sustainable development, by mobilizing resources, enhancing capacity-building, and fostering cooperation among governments, businesses, and civil society.', '14496b', 'UST Simbahayan Community Development', 'https://www.facebook.com/USTSIMBAHAYAN', 'SIMBAHAYAN mobilizes university resources for community development and advocates for Sustainable Development Goals attainment.', 'PLACEHOLDER', 'https://www.google.com', 'PLACEHOLDER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sdg`
--
ALTER TABLE `sdg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sdg`
--
ALTER TABLE `sdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
