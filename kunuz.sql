-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2024 at 07:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `foydalanuvchilar`
--

CREATE TABLE `foydalanuvchilar` (
  `id` int NOT NULL,
  `ism` varchar(100) DEFAULT NULL,
  `familiya` varchar(100) DEFAULT NULL,
  `yosh` int DEFAULT NULL,
  `rasm` varchar(200) DEFAULT NULL,
  `holati` int DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `parol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foydalanuvchilar`
--

INSERT INTO `foydalanuvchilar` (`id`, `ism`, `familiya`, `yosh`, `rasm`, `holati`, `login`, `parol`) VALUES
(1, 'Aziz', 'Karimov', 23, 'dddd.jpg', 0, 'aziz', '123'),
(2, 'Jamshid', 'Alimov', 24, 'testtet.jpg', 1, 'jamshid', '555');

-- --------------------------------------------------------

--
-- Table structure for table `izohlar`
--

CREATE TABLE `izohlar` (
  `id` int NOT NULL,
  `ism` varchar(100) DEFAULT NULL,
  `yangilik_id` int DEFAULT NULL,
  `vaqt` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoriyalar`
--

CREATE TABLE `kategoriyalar` (
  `id` int NOT NULL,
  `foydalanuvchi_id` int DEFAULT NULL,
  `nomi` varchar(100) DEFAULT NULL,
  `holati` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategoriyalar`
--

INSERT INTO `kategoriyalar` (`id`, `foydalanuvchi_id`, `nomi`, `holati`) VALUES
(1, 1, 'Dunyo yangiliklari', 1),
(2, 1, 'Sport yangiliklari', 1),
(3, 1, 'Siyosiy yangiliklar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xabarlar`
--

CREATE TABLE `xabarlar` (
  `id` int NOT NULL,
  `ism` varchar(100) DEFAULT NULL,
  `mavzu` varchar(100) DEFAULT NULL,
  `x_matni` text,
  `vaqt` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yangiliklar`
--

CREATE TABLE `yangiliklar` (
  `id` int NOT NULL,
  `kategoriya_id` int DEFAULT NULL,
  `foydalanuvchi_id` int DEFAULT NULL,
  `sarlavxa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `qisqacha_s` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `y_bayoni` text,
  `rasm` varchar(200) DEFAULT NULL,
  `k_soni` int DEFAULT NULL,
  `vaqt` int DEFAULT NULL,
  `holati` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `yangiliklar`
--

INSERT INTO `yangiliklar` (`id`, `kategoriya_id`, `foydalanuvchi_id`, `sarlavxa`, `qisqacha_s`, `y_bayoni`, `rasm`, `k_soni`, `vaqt`, `holati`) VALUES
(88, 1, 1, 'Uzbekistan aims for $700M in auto exports and increased localization in 2025', 'On December 5, President Shavkat Mirziyoyev reviewed a presentation outlining key priorities for the automotive industry ahead of 2025. The discussion, which built on instructions given last month, emphasized enhancing production capacity and improving vehicle quality.', 'With over 400,000 vehicles sold annually, the automotive sector is poised for continued growth, driven by increasing consumer incomes. This presents an opportunity to ramp up production of vehicles that meet the rising demand.\r\n\r\nA key initiative is the localization of 60 parts for “BYD” electric vehicles, which is set to reduce production costs in 2025. The leadership of the company has expressed high regard for the potential of Uzbekistan’s domestic enterprises. In this regard, efforts to double production volumes, with support from the Localization Promotion Center, will focus on regional collaboration.\r\n\r\nExport expansion was also a major topic of discussion. Over the past few years, Uzbekistan has exported more than 40,000 auto kits to neighboring countries, and plans for next year include increasing exports to exceed $700 million. Additionally, President Mirziyoyev emphasized the need to promote the country\'s bus and truck manufacturing capabilities in international markets, especially for products made in Samarkand.\r\n\r\nThe president underlined the economic and social significance of the automotive industry, stressing the importance of adapting to modern trends, ensuring stable production, and constantly improving marketing strategies and product quality.', 'yangilik_1733762557.jpg', 15, 1733762557, 1),
(89, 1, 1, 'Uzbekistan secures $210M deal to supply construction materials to the U.S.', 'Uzbekistan has marked a significant milestone in its trade relations with the United States by participating in the first-ever U.S.-Uzbekistan Business Forum focused on construction materials. The event showcased over 50 high-value-added products from leading Uzbek companies and resulted in export agreements worth $210 million, the Dunyo IA reported.', 'The forum, organized in collaboration with Uzsanoatqurilishbank, the Chamber of Commerce and Industry of Uzbekistan, the Uzsanoatqurilishmateriallari Association, and the Uzbek Embassy in the United States, attracted key stakeholders from both nations. Major Uzbek manufacturers such as Basalt Uzbekistan, Alcopon Standart Trade, Sanfa Engineering, Benkam, Akfa Extrusions, and First Global Stone joined U.S.-based construction firms, developers, distributors, and retailers to explore mutual opportunities.\r\n\r\nUzbekistan’s ambassador to the United States, Furkat Sidikov, emphasized the construction sector as a promising area for deepening bilateral cooperation. He noted that Uzbekistan’s exports to the U.S. have surged by 170%, surpassing $260 million.\r\n\r\nAttendees were introduced to an array of construction materials, including aluminum profiles, basalt-based products, sanitary ware, thermal insulation materials, and ceramic tiles. The products garnered significant interest from American companies, sparking discussions on further collaborations.\r\n\r\nThe event also featured B2B meetings where entrepreneurs from both countries engaged in direct negotiations. Discussions centered on joint ventures and investment opportunities, particularly within Uzbekistan.\r\n\r\nThe forum concluded with the signing of export contracts worth $210 million. Additionally, agreements were reached to jointly develop kaolin extraction and manufacture kaolin-based products, signaling a robust expansion in bilateral trade and industrial collaboration.', 'yangilik_1733762610.jpg', 3, 1733762610, 1),
(90, 1, 1, 'Construction companies to face penalties for air pollution violations', 'A draft law aimed at improving environmental conditions, preventing air pollution, and increasing the accountability of construction organizations was reviewed by the Committee on Ecology and Environmental Protection of the Legislative Chamber of Oliy Majlis.', 'According to the draft, it is proposed to hold officials of construction organizations accountable for violating the requirements for protecting the atmospheric air at construction sites.\r\n\r\nIn particular, the proposal suggests imposing a fine equal to 10 times the base calculation amount (currently 3.75 million UZS) for committing such an offense. If the violation is repeated within one year of the penalty being imposed, a fine of 50 times the base calculation amount (18.75 million UZS) will be applied.\r\n\r\nThe report did not specify when the draft law would be reviewed by the Legislative Chamber.', 'yangilik_1733762681.jpg', 0, 1733762681, 1),
(91, 1, 1, 'Uzbekistan aims to restore 2 million hectares of degraded land by 2030', 'Uzbekistan plans to restore more than 2 million hectares of degraded land by 2030, according to the Minister of Ecology, Aziz Abdukhakimov. Speaking at the COP16 conference in Riyadh, Abdukhakimov emphasized that such large-scale restoration projects require substantial financial resources.', 'Abdukhakimov explained that the country’s strategy aims to align with the United Nations Convention to Combat Desertification (UNCCD) and its goal of achieving land degradation neutrality. He noted that these efforts also aim to ensure sustainable living conditions for vulnerable populations.\r\n\r\nIn the last five years, Uzbekistan has allocated over $1 billion for initiatives in sustainable land management and reforestation. Despite these efforts, global financing gaps remain a challenge. Abdukhakimov stressed the need for stronger financial mechanisms and innovative partnerships to expand the scope of these initiatives.\r\n\r\nTo achieve these ambitious goals, Uzbekistan seeks to increase global financial flows and direct them towards land restoration projects. He further highlighted the importance of innovative financing mechanisms, such as green bonds, to mobilize additional resources.\r\n\r\nIn his remarks, Abdukhakimov also outlined several key proposals to streamline access to international funding:\r\n\r\n•  Simplifying the processes for accessing, applying for, and approving funds.\r\n•  Increasing grant-based funding, especially for projects with long-term ecological benefits but limited financial returns.\r\n•  Providing technical assistance to develop bankable projects that meet donor requirements.\r\n•  Expanding the use of green bonds to mobilize additional resources for sustainable land restoration.\r\n\r\nAbdukhakimov pointed to successful projects, including the restoration of forests in the Aral Sea region, as proof of Uzbekistan\'s potential in managing international funding effectively. These efforts, made in partnership with international financial institutions, have turned degraded lands into ecosystems that benefit both people and nature.\r\n\r\nThe Minister also referenced previous investments in advanced irrigation systems, which have reduced water usage in agriculture and increased the country’s resilience to droughts. He emphasized that more opportunities could be unlocked by streamlining access to international funding, allowing Uzbekistan to transform degraded lands into flourishing ecosystems and sustainable regions.\r\n\r\nEarlier, President Shavkat Mirziyoyev had highlighted the growing frequency of dust storms in the country, which are exacerbated by illegal deforestation, water shortages, and unregulated livestock grazing. These factors contribute to the degradation of pasturelands and desertification, which is further accelerated by global climate change.', 'yangilik_1733762733.jpg', 0, 1733762733, 1),
(92, 1, 1, 'Germany grants Uzbekistan €9M for sustainable urban development', 'Uzbekistan has secured a €9 million grant from Germany to support the development and implementation of \"green\" master plans for its cities. The agreement was formalized on December 3 during the Territorial Development Forum in Tashkent.', 'The funding, provided by the German Agency for International Cooperation (GIZ), aims to assist Uzbekistan in integrating sustainable and climate-resilient practices into urban planning. These green master plans will focus on adapting to climate change and promoting sustainable growth in urban areas.\r\n\r\nGIZ representative also participated in a panel session at the forum, discussing the incorporation of green economy objectives into urban planning and master plans. Key topics included climate adaptation strategies and fostering sustainable urban development.\r\n\r\nThis new grant builds on earlier cooperation between Uzbekistan and Germany. In 2023, GIZ provided €9 million to support private businesses in adopting green economic solutions and industrial technologies. In November, at the UN Climate Change Conference (COP29) in Baku, an additional €3 million grant agreement was signed to aid the creation of green industrial parks and environmentally friendly technologies.\r\n\r\nUzbekistan’s Ministry of Economy and Finance noted that Germany has already provided €12 million in grants this year to support the country’s transition to a green economy.', 'yangilik_1733762777.jpg', 0, 1733762777, 1),
(93, 1, 1, 'Violence against women is preventable: it shouldn’t be the norm – UNDP Uzbekistan', 'The United Nations Development Programme (UNDP) is the UN’s global development network, operating in 170 countries to support nations in building sustainable and resilient societies.', 'The United Nations Development Programme (UNDP) is the UN’s global development network, operating in 170 countries to support nations in building sustainable and resilient societies. UNDP focuses on key development areas such as poverty alleviation, environmental protection, and governance. In Uzbekistan, the organization has been active since 1993, implementing programs to address development challenges, such as climate adaptation, effective governance, gender equality, access to justice, inclusive growth and support of economic diversification. With offices in Tashkent, Nukus and Namangan as well as project offices in other regions, UNDP Uzbekistan works with local and central government institutions as well as civil societies and local communities to support the country’s reform agenda by providing insights with global expertise.\r\nUzbekistan’s opportunities and challenges\r\n\r\nWith over 60% of its population under 30, Uzbekistan boasts a demographic advantage that positions it as a hub for innovation and economic growth. This youthful population, according to the UNDP Resident Representative, is a vital resource in addressing the country’s development challenges. However, rapid growth has also revealed areas requiring improvement, including inequalities in education, employment, and resource access.\r\n\r\nClimate change further compounds these issues. Unlike small island nations where rising sea levels dominate concerns, Uzbekistan faces challenges such as water scarcity, land degradation, and the increasing frequency of sandstorms. The melting glaciers of the Hindu Kush exacerbate water shortages, making resource management a critical focus for development efforts.\r\n\r\nUNDP’s approach in Uzbekistan\r\n\r\nThe UNDP in Uzbekistan follows a structured approach, combining policy advocacy with on-the-ground implementation. Its five-year development plans align with government priorities while integrating feedback from civil society, international partners, and local communities. The current development program, active until 2025, emphasizes sustainability, equality, and climate resilience.\r\n\r\nUNDP operates at both national and regional levels. With projects spanning all regions of Uzbekistan, the organization ensures its strategies address local needs while contributing to overarching policy goals.\r\nClimate change and water resource management\r\n\r\nWater scarcity stands out as one of Uzbekistan’s most pressing concerns. Frequent droughts and the retreat of glaciers have heightened the need for sustainable water management. UNDP’s initiatives focus on policy reforms to ensure equitable water distribution and support for agricultural systems vulnerable to climate change.\r\n\r\nIn addition, the organization works with local communities to implement practices that mitigate land degradation and combat desertification.\r\n\r\nGender equality in Uzbekistan\r\n\r\nGender equality is a significant area of focus for UNDP in Uzbekistan. While progress has been made, such as an increase in women’s representation in political offices, persistent challenges remain. Gender-based violence continues to affect women across the country. According to Ms. Fujii, gender-based violence is often compounded by societal norms and limited access to resources, especially in rural areas.\r\n\r\nThe UNDP has supported the adoption of laws criminalizing gender-based violence in Uzbekistan, aligning them with international standards. However, ensuring the effective implementation of these laws requires capacity building and community engagement, says Ms. Akiko Fujii. Awareness campaigns, such as the annual 16 Days of Activism Against Gender-Based Violence, aim to educate the public on the importance of gender equality and the need to prevent violence.\r\n\r\nIn partnership with the Ministry of Justice, UNDP also facilitates access to free legal aid for women in rural areas, addressing gaps in support systems and empowering women to seek justice.\r\n\r\nEngaging Uzbekistan’s youth\r\n\r\nUNDP sees Uzbekistan’s youth as key drivers of change. Through initiatives such as summer internship programs, entrepreneurship training, and digital economy workshops, the organization equips young people with the skills needed to thrive in a competitive global landscape.\r\n\r\nSpecial attention is given to rural youth, ensuring equitable access to education, technology, and market opportunities. Recent programs have focused on fostering startups and connecting young entrepreneurs with global networks, particularly in the FinTech and digital economy sectors.', 'yangilik_1733762844.jpg', 0, 1733762844, 1),
(94, 1, 1, 'Uzbekistan secures top spot in Asian Boxing Championship', 'Uzbekistan dominates the Asian boxing championship', 'On December 11, the finals of the men’s bouts at the Asian Boxing Championship were held, and the tournament in Thailand concluded with Uzbekistan’s triumphant performance.\r\n\r\nThroughout the day, 10 male boxers from Uzbekistan’s national team stepped into the ring in the finals. Among them, Shahzod Muzaffarov and Jasurbek Yuldoshev narrowly lost to Kazakh boxers in closely contested matches, earning silver medals. The remaining eight boxers proved their superiority over their opponents.\r\n\r\nAt the end of the championship, Uzbekistan’s men’s national team secured the top spot in the overall standings with 8 gold, 2 silver, and 1 bronze medal, reaffirming their dominance in the continent.\r\n\r\nNotably, the Uzbek boxers, fielding a renewed and younger lineup, managed to outshine Kazakhstan’s main team, which had competed in Paris, as well as Ukraine’s strong squad.\r\n\r\n\r\n\r\nHere is the list of medalists from Uzbekistan’s men’s team at the Asian Championship:\r\n\r\nGold Medals:\r\n\r\n•  48 kg: Shodiyorjon Melikuziev\r\n•  51 kg: Asilbek Jalilov\r\n•  57 kg: Mirazizbek Mirzakhalilov\r\n•  63.5 kg: Adhamjon Muhiddinov\r\n•  67 kg: Mujibillo Tursunov\r\n•  71 kg: Havasbek Asadullayev\r\n•  75 kg: Javohir Ummataliyev\r\n•  80 kg: Turabek Habibullayev\r\n\r\nSilver Medals:\r\n\r\n•  54 kg: Shahzod Muzaffarov\r\n•  86 kg: Jasurbek Yuldoshev\r\n\r\nBronze Medal:\r\n\r\n•  +92 kg: Jahongir Zokirov\r\n\r\nUzbekistan’s women’s team also secured the second overall position in the women’s competition at the Asian Championship, finishing behind Kazakhstan. The women’s team won 3 gold, 4 silver, and 2 bronze medals.\r\n\r\nHere is the list of medalists from Uzbekistan’s women’s team:\r\n\r\nGold Medals:\r\n\r\n•  48 kg: Farzona Fazilova\r\n•  52 kg: Feruza Kazakova\r\n•  66 kg: Navbahor Hamidova\r\n\r\nSilver Medals:\r\n\r\n•  54 kg: Aziza Yakubova\r\n•  57 kg: Nigina Uktamova\r\n•  75 kg: Aziza Zokirova\r\n•  +81 kg: Oltinoy Sotimboyeva\r\n\r\nBronze Medals:\r\n\r\n•  50 kg: Sabina Bobokulova\r\n•  81 kg: Sohiba Ruzmetova\r\n\r\n\r\n\r\nIn total, Uzbekistan’s boxing teams claimed 20 medals at the tournament—11 gold, 6 silver, and 3 bronze—securing first place in the overall standings. Kazakhstan followed in second place with 20 medals (9 gold, 5 silver, and 6 bronze). Thailand took third with 3 golds (9 medals in total), while China (7 medals) and Tajikistan (5 medals) each claimed one gold medal, rounding out the top five.', 'yangilik_1734156410.jpg', 0, 1734156410, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foydalanuvchilar`
--
ALTER TABLE `foydalanuvchilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `izohlar`
--
ALTER TABLE `izohlar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yangilik_id` (`yangilik_id`);

--
-- Indexes for table `kategoriyalar`
--
ALTER TABLE `kategoriyalar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foydalanuvchi_id` (`foydalanuvchi_id`);

--
-- Indexes for table `xabarlar`
--
ALTER TABLE `xabarlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yangiliklar`
--
ALTER TABLE `yangiliklar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoriya_id` (`kategoriya_id`),
  ADD KEY `foydalanuvchi_id` (`foydalanuvchi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foydalanuvchilar`
--
ALTER TABLE `foydalanuvchilar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `izohlar`
--
ALTER TABLE `izohlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoriyalar`
--
ALTER TABLE `kategoriyalar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xabarlar`
--
ALTER TABLE `xabarlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yangiliklar`
--
ALTER TABLE `yangiliklar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izohlar`
--
ALTER TABLE `izohlar`
  ADD CONSTRAINT `izohlar_ibfk_1` FOREIGN KEY (`yangilik_id`) REFERENCES `yangiliklar` (`id`);

--
-- Constraints for table `kategoriyalar`
--
ALTER TABLE `kategoriyalar`
  ADD CONSTRAINT `kategoriyalar_ibfk_1` FOREIGN KEY (`foydalanuvchi_id`) REFERENCES `foydalanuvchilar` (`id`);

--
-- Constraints for table `yangiliklar`
--
ALTER TABLE `yangiliklar`
  ADD CONSTRAINT `yangiliklar_ibfk_1` FOREIGN KEY (`kategoriya_id`) REFERENCES `kategoriyalar` (`id`),
  ADD CONSTRAINT `yangiliklar_ibfk_2` FOREIGN KEY (`foydalanuvchi_id`) REFERENCES `foydalanuvchilar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
