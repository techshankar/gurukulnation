-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 05:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gurukul`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Gurukul Nation is an ed-tech platform.Since March 24, 2020, we\'ve been assisting learners of all ages in learning the trendiest courses in any field with diversified bundles.\r\n                    Gurukul Nation keeps culture and learning at the root of everything it does. We\'re entrenched in creating a difference. Therefore, we strive to make a distinction in the way people approach entrepreneurship and education. We deliver courses and bundles designed, created, and produced with real-world statistical data input for the folks we highly believe in.', 'http://localhost/gurukulnation/public/mainBannersUploadedFolder/image1701431493.jpg', '2023-11-20 01:38:06', '2023-12-11 00:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `referenced_by` varchar(255) DEFAULT NULL,
  `mobile` varchar(222) DEFAULT NULL,
  `exprience` varchar(255) DEFAULT NULL,
  `current_location` varchar(255) DEFAULT NULL,
  `ready_to_relocate` varchar(255) DEFAULT NULL,
  `job_description` longtext DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `job_title`, `name`, `email`, `referenced_by`, `mobile`, `exprience`, `current_location`, `ready_to_relocate`, `job_description`, `updated_at`, `created_at`, `resume`) VALUES
(1, 'Asp.NET Developer', 'Shankar', 'shankar@gmail.com', '3', '8765434567', '5', 'Noida', 'yes', 'This job for ASP .NET candidate who have 5 years of experience those can be apply for this.', NULL, NULL, 'http://localhost/gurukulnation/public/uploads/resume1702458355.pdf'),
(2, 'Asp.NET Developer', 'dfsgdfag', 'dfssd@gmail.com', '5', '8765432345', '2', 'Noida', 'No', 'sdfhgsdfg', NULL, NULL, 'http://localhost/gurukulnation/public/uploads/resume1702458523.pdf'),
(3, 'Asp.NET Developer', 'sdfsd', NULL, '4', '87654345673', '7', 'Noida', 'yes', 'wqerdfgh', NULL, NULL, NULL),
(4, 'Asp.NET Developer', 'asdfg', 'rrr@gmail.com', '1', '876543456', '1', 'Noida', 'yes', 'ttttttt', NULL, '2023-12-13 03:45:45', 'http://localhost/gurukulnation/public/uploads/resume1702458945.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/m7rock/public/uploads/banner1699434779.jpg', 'be a Kind Heart', 'Professional charity theme based on Bootstrap 5.2.2   Previous', 0, '2023-11-08 03:42:59', '2023-11-23 04:01:22'),
(2, 'http://localhost/gurukulnation/public/uploads/banner1701430666.jpg', 'Venture Redefine', 'We are Here to support and grow', 0, '2023-11-08 03:43:54', '2023-12-01 06:32:50'),
(3, 'http://localhost/gurukulnation/public/uploads/banner1701665060.jpg', 'Gurukul Nation Education', 'We love to help and grow together', 1, '2023-11-08 03:44:33', '2023-12-03 23:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `title`, `content`, `created_at`, `updated_at`, `image`, `slug`) VALUES
(6, 7, 'Volunteering Clean', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2023-11-06 07:18:37', '2023-11-07 23:28:16', 'http://localhost/m7rock/public/blogImages/image1699347454.jpg', 'volunteering-clean'),
(7, 6, 'Food donation area', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2023-11-07 03:07:15', '2023-11-07 23:28:12', 'http://localhost/m7rock/public/blogImages/image1699347521.jpg', 'food-donation-area'),
(8, 6, 'Food donation area', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2023-11-07 03:25:24', '2023-11-07 23:28:08', 'http://localhost/m7rock/public/blogImages/image1699347514.jpg', 'food-donation-area'),
(9, 8, 'Demystifying Non-Fund-Based Products for Importers and Traders: A Guide to LC (MT710) and Pre-Advise Services (MT705)', '<p>In the dynamic world of international trade, Importers and Traders often navigate through a myriad of financial instruments and services to ensure smooth transactions. Among these, Non-Fund-Based Products play a crucial role, offering security and reliability. In this guide, we\'ll delve into two essential components of these products: Letter of Credit (LC - MT710) and Pre-Advise Services (MT705).</p><p>Understanding Non-Fund-Based Products:</p><p>Non-Fund-Based Products are financial tools designed to facilitate trade without the actual transfer of funds between parties. Instead, they provide assurances and guarantees to minimize risks, fostering trust and confidence in cross-border transactions.</p><p><strong>Letter of Credit (LC - MT710):</strong></p><p>A Letter of Credit is a widely used instrument in international trade that acts as a guarantee for payment between a buyer and a seller. Here\'s a simplified breakdown of how it works:</p><p><strong>Initiation by the Buyer:</strong> The buyer (importer) requests their bank to issue an LC in favor of the seller (exporter).</p><p><strong>Issuance by the Bank:</strong> The buyer\'s bank issues the LC, detailing the terms and conditions of the transaction.</p><p><strong>Notification to the Seller:</strong> The seller is informed that an LC has been opened in their favor, providing a commitment from the buyer\'s bank to pay upon fulfillment of the specified conditions.</p><p><strong>Shipment and Documents:</strong> Once the seller fulfills the agreed-upon terms, they present the required documents to the buyer\'s bank to claim payment.</p><p><strong>Pre-Advise Services (MT705):</strong></p><p>Pre-Advise Services are a complementary component that enhances the efficiency of Non-Fund-Based Products. This service involves the transmission of a preliminary advice (MT705) to the beneficiary (seller) before the issuance of the actual LC (MT710). Key points to note:</p><p><strong>Early Notification:</strong> The beneficiary receives early notification about the impending issuance of the LC, allowing them to prepare and take necessary actions promptly.</p><p><strong>Confirmation of Intention:</strong> The MT705 serves as confirmation from the buyer\'s bank regarding their intention to issue an LC, providing an additional layer of assurance to the seller.</p><p><strong>Reducing Risk:</strong> By being aware of the upcoming LC, the seller can mitigate risks and streamline their operations more effectively.</p><p>Conclusion:</p><p>For Importers and Traders engaged in international commerce, understanding Non-Fund-Based Products like LC (MT710) and Pre-Advise Services (MT705) is essential. These tools not only facilitate secure transactions but also foster trust and confidence among trading partners. As businesses continue to navigate the complexities of global trade, leveraging these instruments can contribute to smoother and more reliable transactions.</p>', '2023-11-07 03:26:37', '2023-11-23 00:36:33', 'http://localhost/gurukul/public/blogImages/image1700719593.jpg', 'demystifying-non-fund-based-products-for-importers-and-traders-a-guide-to-lc-mt710-and-pre-advise-services-mt705');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `exprience` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `roles_n_responsibilties` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `designation`, `slug`, `job_location`, `qualification`, `exprience`, `overview`, `roles_n_responsibilties`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Asp.NET Developer', 'aspnet-developer', 'Sector 16, Noida (Work From Office)', 'B.Tech/B.E. in Any Specialization, BCA, B.Sc in Any Specialization', '5 Years', '<p>Writing code, designing solutions for applications, and improving functionality. You need to demonstrate excellent problem-solving skills, high-quality coding skills, and an ability to manage your time efficiently.</p>', '<p><strong>1</strong>. Perform the development of the website as suggested by the company.</p><p><strong>2</strong>. Perform the debugging and removal of errors on the website.</p><p><strong>3</strong>. Maintenance of the website.</p><p><strong>4</strong>. Work as a technical advisor to the company to impart further innovations to the website and its related attributes.</p><p><strong>5</strong>. Should have worked on ASP .NET, APIs in .NET Core, C#, jQuery, SQL Server.</p><p><strong>6</strong>. Additional knowledge of WordPress and MVC is preferred.</p>', 'http://localhost/gurukulnation/public/uploads/image1701841607.png', '2023-12-05 05:29:53', '2023-12-06 00:17:50'),
(3, 'Business Coordinator', 'business-coordinator', 'Sector 16, Noida', '1. Completion of a Bachelor\'s program in any domain. 2. The Role requires a courteous, positive, and high-energy individual with negotiation skills. 3. Should be Excellent with English and Hindi Communication skills.', '5', '<p><strong>The Business Coordinator will play a key role in Supporting the Business Support Head of the company. You will be</strong><br><strong>responsible for Conducting research on vendors and Preparing reports, presentations, and briefings based on</strong><br><strong>research findings.</strong></p>', '<p><strong>1. Meeting with suitable vendors to assess their products, inquire about their services, negotiate pricing, and</strong><br><strong>communicate any product or service-related concerns.</strong><br><strong>2. Conducting research on available vendors to determine which vendors offer the best pricing and product</strong><br><strong>quality.</strong><br><strong>3. Manage calendars, schedules, and appointments for the Business Support head.</strong><br><strong>4. Analyse and synthesize complex data to provide valuable insights and recommendations</strong><br><strong>5. Assist in preparing and organizing meetings, conferences, and events.&nbsp;</strong><br><strong>6. Profecient in written skills and provide promy responses on emails.</strong></p>', NULL, '2023-12-13 05:17:14', '2023-12-13 05:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `address` text DEFAULT NULL,
  `info_email` varchar(200) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `address`, `info_email`, `support_email`, `status`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', 'test', '2023-11-02 07:20:10', '1305, 13th Floor, Pragati Tower Rajendra Place New Delhi 110008', 'inf@email.com', 'support@gurukul.com', '2', '2023-12-11 01:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brands` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `what_you_will_learn` text DEFAULT NULL,
  `home_page_desc` text DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `course_description` text DEFAULT NULL,
  `certificate_img` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `brands`, `title`, `slug`, `sub_title`, `price`, `what_you_will_learn`, `home_page_desc`, `short_desc`, `course_description`, `certificate_img`, `thumbnail`, `video`, `updated_at`, `created_at`) VALUES
(2, 10, 'Best sellers,best sellers 2', 'Digital Marketing', 'digital-marketing', 'A course by Anmol Duggal, Digital Marketing Expert & Trainer', 299, 'Build a Digital Marketing Agency From Scratch,Price Your Services to Make Profit,Build a Strong Website for Your Agency Business using WordPress,Find your niche and create content that resonates with your audience,Learn SEO & SMM', '<p>They say that good marketing makes the company look smart and great marketing makes the customer feel smart.This bundle shall teach you how to master this very important skill. In this age of digital content creation digital marketing is what you need to put yourself or your clients on the map.</p>', '<p>If you are looking to build your career in the Digital marketing industry there is no better time than now. Be it Social media marketing, online marketing, or whatever you call it. It is moving at supersonic speed. Learn from the expert himself.</p>', '<p>With the ever-increasing demand for Digital Marketing for businesses, both large and small, there is a huge skilled-resource gap in the industry waiting to be filled. This is where Gurukul Nation Digital Marketing Course by certified, and seasoned marketer, Anmol Duggal, comes into the picture. The course begins with an introduction to online marketing fundamentals, and the need to learn digital marketing, to practice learning how to set up your own online real estate - website - without coding, building, and designing it for yourself, or for clients, and then integrating it with different channels of digital marketing covered further in the course. The verticals covered include: Content Marketing Search Engine Marketing Social Media Marketing Affiliate Marketing Sales Funnel Email Marketing Marketing Automation Web Analytics With content being at the center of the entire marketing concept after your website is developed, the course starts with explaining its importance, how to create effective content that gets results, and further verticals teach how to get traffic to that content for getting conversions. The course also teaches the concepts of sales funnel and marketing automation which is the need of the hour now. So if you are looking to learn digital marketing to market your own business, or serve clients as a freelancer, start an agency, or get a job, enroll in the course and dive into the magnificent educational journey of Digital Marketing.</p><p>&nbsp;</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1701430796.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1701666506.jpg', NULL, '2023-12-06 06:01:22', '2023-12-06 06:01:22'),
(3, 11, 'Best seller,Best seller1,Best seller2', 'Advance Personality Development', 'advance-personality-development', 'A course by Rohit Sharma, Personality Development Trainer', 599, 'To learn all the aspects of Personality in detail which enables you to fit in/at a workplace,To understand the concepts associated with personality development at the physical, mental, and social levels.,We help you improvise your personality, attitude, mental flexibility & adaptability, motivation, and manners.,To know about powerful tools to analyze the personality of others and self.', '<p>There is an amazing quote that goes, ‘Brands exist because people exist’ and to establish that, there are specific skills we can master. This bundle will help you learn and apply how to project your or your customer’s persona into a brand that shall help scale up your career.</p>', '<p>Learn to develop the communication and interpersonal skills of an individual. Use emotional intelligence and connect with others at a deeper physical and local, social and mental state level and an advanced social Media Marketing level</p>', '<p>This course is designed to push you beyond your comfort zone. Develop your personality on a physical, mental, and social level. This course talks about improving yourself in all areas from physical fitness to communication skills to program your mind for self-belief. At the end of this course, after implementation, you will feel much more confident, charming, and re-programmed. Definition of personality differs from a person to person; there are also lots of people who still think that personality is related to the physical appearance of a person and has got nothing to do with other skills. Everyone has their own viewpoints. If a person is well-built and wearing a good dress it is said that he/she has a good personality. But this is not a rational approach. Personality is not all about looks and beauty. In case the inner personality of a person is weak he/she will lose impact as soon as he/she speaks or acts, such a person fails to create a lasting impression on others, and rising in their career becomes a difficult task for them. Also, a good overall personality is very important in our social life too, it is a fact that everyone likes talking to a person with good communication skills and knowledge. Therefore, both the inner and the outer personality of a person should be strengthened. If you have a low self-image, you hesitate to take any initiative. This course also provides you with the guidance to create a powerful self-image so that you can take action without any reluctance and self-doubt. Rohit Sharma shares proven confidence building-techniques and mindset to maintain it as developing a skill is easy but maintaining with consistent practice is the actual challenge. Additionally, it is a practice course, and you can start experimenting it from day one itself to mount your self-confidence.</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1701078490.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1701430809.jpg', NULL, '2023-12-12 01:40:24', '2023-12-12 01:40:24'),
(6, 12, 'Best Seller,Best Seller2', 'Traffic Mastery', 'traffic-mastery', 'A course by Anmol Duggal, Digital Marketing Expert & Trainer', 699, 'Connect with new audiences and lower your ad costs via Facebook Ads!,MASTER Facebook Ads Manager!,MASTER your sales funnel... awareness, retargeting, and conversion!,Mass post quickly to various social media networks!,Implement the Facebook Pixel and advanced tracking strategies.,Use the advanced features available in Facebook Business Manager.', '<p>Digital content consumption is a constant affair but consumption of your content is what counts. Hence, digital traffic management comes into play. Through a set of techniques, tools and basic routines, this bundle teaches you to manage and divert the traffic towards your brand and help maximum conversions.</p>', '<p>Facebook is one of the most used social platforms for marketers, and 81% of businesses prefer to use Facebook as one major growth tool. If you are yet to jump aboard the FB advertising bandwagon, this all-in-one guide is here to help.</p>', '<p>Course Description In this course, you will learn Facebook Ad Marketing from beginner level to advanced! We delve deep into EVERY aspect of Facebook and the Facebook Ads Manager. Learn how to use and optimize every type of Facebook campaign, Facebook custom audience; what you will learn about Facebook is truly unique and will instantly help advance your presence online! You will be able to optimize your Facebook ads for increased conversions and decreased costs. You will be able to create and make use of EVERY type of Facebook ad. You will be able to grow your Facebook page likes and post engagement. You will find new customers that will drive your brand to new heights via online marketing. Join this course now to learn how to take your brand, product, service, or public figure to the next level with the power of Facebook Marketing!</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1701666780.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1701666780.jpg', NULL, '2023-12-12 01:40:34', '2023-12-12 01:40:34'),
(7, 13, 'Best seller,Best seller2', 'Influence Mastery', 'influence-mastery', 'A course by Anmol Duggal, Digital Marketing Expert & Trainer', 799, 'You will learn how to write the best copy for any part of a business or marketing campaign,Write better headlines that catch more attention,Write better copy for website landing pages,Write better social media posts that get more engagement,Write better promotional emails and product announcements,Write copy for audio visual content such as YouTube videos, commercials, and viral campaigns,Craft a complete campaign roll out strategy,Build a portfolio and get clients as a copywriter', '<p>Influencing traffic to buy your products or services comes with a promise of quality of content. To learn specific skills and master them. This bundle helps you learn specific high paying skills that with practice will ensure more conversions and allow you to start your journey as a professional super fast.</p>', '<p>Great copywriting will also make your brand more recognizable and make you; the customer feel comfortable hearing from you. If you use the fun, engaging content that they will always enjoy hearing from you. Learn how.</p>', '<p>Did you know that copywriting is one of the highest income producing skills in the world? It is the one skill that’s responsible for selling millions, and even billions dollar worth of products and services online. That is why businesses need copywriters who can write copy that converts. If you don’t know what copywriting means, the straightforward definition is: Copywriting is the art of selling through the power of written words. Don’t confuse it with regular content writing that you see on the blog posts, or news articles online. Copywriting and content writing are different from each other, and it’s the difference between the two that makes copywriting one of the highest income producing skills in the world. And this skill isn’t the latest shiny object in the market, but it has been alive and generating tremendous profits for businesses since decades. Earlier copywriting used to happen via magazines, newspaper publishings, pamphlets, etc, and today it happens all across the internet. In fact, if you have clicked an ad on social media, or on google, landed on a sales page, subscribed to something, or have bought something online, you’ve already encountered copy, and the copywriter has done its job successfully for the business. So, if you are ready to learn how to write copy that converts, copy that influences, copy that persuades, copy that sells, this course is the one stop solution for you.</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1701666939.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1701666939.jpg', NULL, '2023-12-12 01:41:04', '2023-12-12 01:41:04'),
(8, 14, 'Best Seller,Best Seller2', 'Finance Mastery', 'finance-mastery', 'A course by Saksham Agarwal,', 899, 'What are the different types of markets, and how do they work?,What is Fundamental and Technical analysis? Why are they useful?,How Stock Market Works, and how can you get started with the market?,Learn important jargon/concepts like circuits, Muhurat Trading, corporate actions, derivatives, price action, etc., to become a challenging investor or trader.,Introduction to Trading & Technical Analysis.,Introductions to charts.,Learn how to read candlesticks.', '<p>What use is money if you have tons of it but lack the skill to manage it? This is a skill that interestingly you can start with a minimum balance and scale up. This detailed course gives you step wise knowledge of not only how to manage your capital but also how to multiply the same. Balance your day today finances and you shall be great!</p>', '<p>Since the beginner has surpassed the former level, it is time to rise to a level that will lead you directly to the path of acing your finance game.</p>', '<p>Are you Interested in Stock market but don\'t know where to start? This course is an ideally designed basics course of the stock market, to create a powerful knowledge bank on various tools and techniques required to understand the functioning of capital markets. It gives a basic insight into financial jargon like Equities, IPOs, Derivatives, Technical Analysis of the stock market, Macroeconomics and Financial Planning. It is a perfect blend of Fundamental Analysis of stocks which shall help the investor to pick the right company and Technical Analysis which will provide the correct entry and exit timing along with the prices through the charts. Financial Planning shall help to park their savings in the right investment vehicle. After completing the course, you will have enough knowledge about equity, debts, and concepts like circuits, muhurat trading, price actions, charts, and candlesticks reading, and know various stuff about Finance and stock market which now seems complex and strange to you. The instructor is going to explain the course in a way that does justice to your beginner-level knowledge of the stock market.</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1701667793.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1701667793.jpg', NULL, '2023-12-12 01:41:28', '2023-12-12 01:41:28'),
(10, 13, 'dasf,fghj', 'sdf', 'sdf', 'A course by Anmol Duggal, Digital Marketing Expert & Trainer', 299, 'dfg sdfg,dfhng,dsfg,dasfg', NULL, NULL, '<p>adsfg dafg dfgn asdfgb</p>', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/certificate_img1702294800.png', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/thumbnail1702294800.png', NULL, '2023-12-11 06:10:00', '2023-12-11 06:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(10, 'Marketing Mastery', 'marketing-mastery', '2023-11-24 04:24:28', '2023-11-24 04:46:17'),
(11, 'Branding Mastery', 'branding-mastery', '2023-11-24 04:46:33', '2023-11-24 04:46:33'),
(12, 'Traffic Mastery', 'traffic-mastery', '2023-11-24 04:46:47', '2023-11-24 04:46:47'),
(13, 'Influence Mastery', 'influence-mastery', '2023-11-24 04:46:56', '2023-11-24 04:46:56'),
(14, 'Finance Mastery', 'finance-mastery', '2023-11-24 04:47:12', '2023-11-24 04:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is Gurukulnation?', 'Gurukulnation is an ed-tech platform where we provide various e-learning courses related to career, soft skills, and business development. What started as an intent to create employment in the middle of the pandemic has become a revolution in the era of the gig economy by bridging the gap between education and entrepreneurship.', '2023-11-30 01:04:57', '2023-12-04 02:10:47'),
(3, 'What opportunity does Gurukulnation provide?', '<p>Gurukulnation offers an endless number of opportunities to its learners, such as upskilling their extent of knowledge, and guiding them in their career aspects. Moreover, it boosts your social media, which helps monetize the respective platforms.</p>', '2023-12-04 02:12:30', '2023-12-04 02:12:30'),
(4, 'What are education bundles?', '<p>Primarily there are three bundles, i.e., Branding Mastery Courses, Traffic Mastery Courses, and Influence Mastery Courses.<br>We have recently added two more bundles to this- Finance Mastery and Marketing Mastery.</p>', '2023-12-04 02:13:22', '2023-12-04 02:13:22'),
(5, 'What kind of skill-based courses do you provide?', '<p>Gurukulnation offers a wide range of skill-based courses: Personality Development, Instagram Mastermind, Digital Marketing, Affiliate Marketing Mastermind, Facebook Ads Mastermind, Stock Market Mastery, and many more others. Gurukulnation also delivers quality bombarded training sessions through the segment “In-demand.”</p>', '2023-12-04 02:14:19', '2023-12-04 02:14:19'),
(6, 'Is Gurukulnation Government verified?', '<p>You can find Gurukulnation on the official website of the Ministry of Corporate Affairs and you can check the registration details on the same.&nbsp;</p>', '2023-12-04 02:15:14', '2023-12-04 02:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `homepagebanner`
--

CREATE TABLE `homepagebanner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepagebanner`
--

INSERT INTO `homepagebanner` (`id`, `section`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
(1, 'Packers & Movers', 'http://localhost/broopi-laravel/public/uploads/11699093295.png', 'http://localhost/broopi-laravel/public/uploads/21699115013.png', 'http://localhost/broopi-laravel/public/uploads/31699115013.png', 'http://localhost/broopi-laravel/public/uploads/41699115013.png', NULL, '2023-11-04 10:53:33'),
(2, 'Interior Designing', 'http://localhost/adminpanel/public/uploads/11697621738.jpg', 'http://localhost/adminpanel/public/uploads/21697621738.jpg', 'http://localhost/adminpanel/public/uploads/31697621738.jpg', 'http://localhost/adminpanel/public/uploads/41697621738.jpg', NULL, NULL),
(3, 'Road Side Assistance', 'http://localhost/adminpanel/public/uploads/11697621760.jpg', 'http://localhost/adminpanel/public/uploads/21697621760.jpg', 'http://localhost/adminpanel/public/uploads/31697621760.jpg', 'http://localhost/adminpanel/public/uploads/41697621760.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `how_gurukul_nation_works`
--

CREATE TABLE `how_gurukul_nation_works` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `sub_title2` varchar(255) DEFAULT NULL,
  `details2` text DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `sub_title3` varchar(255) DEFAULT NULL,
  `details3` text DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `how_gurukul_nation_works`
--

INSERT INTO `how_gurukul_nation_works` (`id`, `title`, `sub_title`, `details`, `title2`, `sub_title2`, `details2`, `title3`, `sub_title3`, `details3`, `created_at`, `updated_at`) VALUES
(1, 'Inspire', 'Different Bundles and Trending Skills', 'Explore the million possibilities of getting in touch with all the trending skills in the market.', 'Learn', 'From the best of the best trainers', 'Learn from trainers who have real-time expertise in their respective fields.', 'Inspire', 'The world around you', 'Inspire people close to you and help make a tangible difference in society', NULL, '2023-12-04 03:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `sub_cat_id` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_disc_price` decimal(10,2) NOT NULL,
  `item_desc` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat_id`, `sub_cat_id`, `item`, `type`, `item_price`, `item_disc_price`, `item_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Center Table', '', 0.00, 0.00, '', 1, '2023-10-19 06:07:45', '2023-10-19 02:06:03'),
(2, '1', '1', 'Folding Table', '', 0.00, 0.00, '', 1, '2023-10-19 01:25:05', '2023-10-19 02:06:23'),
(3, '2', '4', 'Dish Washer', '', 0.00, 0.00, '', 1, '2023-10-19 01:25:27', '2023-10-19 02:06:49'),
(4, '2', '4', 'Mixer/Grinder', '', 0.00, 0.00, '', 1, '2023-10-19 01:55:43', '2023-10-19 02:07:18'),
(5, '2', '5', 'Speaker', '', 0.00, 0.00, '', 1, '2023-10-19 01:56:00', '2023-10-19 02:07:48'),
(6, '2', '4', 'Vacuum Cleaner', '', 0.00, 0.00, '', 1, '2023-10-19 01:56:25', '2023-10-19 02:08:11'),
(7, '2', '5', 'Air Cooler', '', 0.00, 0.00, '', 1, '2023-10-19 02:08:33', '2023-10-19 02:08:33'),
(8, '3', '6', 'Fridge Single Door', '', 0.00, 0.00, '', 1, '2023-10-19 02:09:02', '2023-10-19 02:09:02'),
(9, '3', '6', 'Fridge 300-499lts', '', 0.00, 0.00, '', 1, '2023-10-19 02:09:42', '2023-10-19 02:09:42'),
(10, '3', '6', 'Fridge Above 500 lts', '', 0.00, 0.00, '', 1, '2023-10-19 02:10:00', '2023-10-19 02:10:00'),
(11, '3', '7', 'Window AC', '', 0.00, 0.00, '', 1, '2023-10-19 02:10:32', '2023-10-19 02:10:32'),
(12, '3', '7', 'Split AC', '', 0.00, 0.00, '', 1, '2023-10-19 02:10:43', '2023-10-19 02:10:43'),
(13, '3', '8', 'Washing machine 8kg+', '', 0.00, 0.00, '', 1, '2023-10-19 02:11:06', '2023-10-19 02:11:06'),
(14, '4', '10', 'Carrom Board', '', 0.00, 0.00, '', 1, '2023-10-19 02:11:35', '2023-10-19 02:11:35'),
(15, '9', '15', 'AC Installation', 'home-service', 500.00, 299.00, '<ul><li>&nbsp;Pre-service, Post-service checks &amp; Installation of unit.</li><li>60 days warranty.</li><li>Additional spare part cost, gas charges, mason work not included.</li></ul>', 1, '2023-10-31 03:57:23', '2023-10-31 04:48:28'),
(16, '9', '15', 'AC Uninstallation', 'home-service', 500.00, 399.00, '<ul><li>Pre-service, Post-service checks &amp; Installation of unit.</li><li>60 days warranty.</li><li>Additional spare part cost,gas charges, mason work not included.</li></ul>', 1, '2023-10-31 04:09:02', '2023-10-31 04:48:44'),
(17, '9', '13', 'AC Service', 'home-service', 499.00, 349.00, '<ul><li>Complete servicing of filter, cooling coil and drain tray</li><li>3X Cooling with Jet-Pump Technology</li><li>Reduced power consumption</li></ul>', 1, '2023-10-31 04:49:31', '2023-10-31 04:49:31'),
(18, '9', '16', 'AC Repair/Inspection', 'home-service', 399.00, 259.00, '<ul><li>Accurate diagnosis, inspection and quotation</li><li>60 days warranty on all parts &amp; services</li><li>Additional spare part cost and gas charges not included</li></ul>', 1, '2023-10-31 04:50:03', '2023-10-31 04:51:11'),
(19, '9', '14', 'AC Gas Refill', 'home-service', 3499.00, 2329.00, '<ul><li>Complete inspection via thorough gas leak identification, leak fixing and gas refill</li><li>60 days warranty on gas charging</li><li>Additional spare part cost not included</li></ul>', 1, '2023-10-31 04:50:41', '2023-11-05 23:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `learner_supports`
--

CREATE TABLE `learner_supports` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `days_n_time` varchar(255) DEFAULT NULL,
  `desclaimer` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learner_supports`
--

INSERT INTO `learner_supports` (`id`, `mobile_no`, `days_n_time`, `desclaimer`, `updated_at`, `image`, `created_at`) VALUES
(1, '9876543230', 'We are available on Monday-Sunday from 9:30 AM to 6:00 PM', 'Gurukul nation is not responsible for payment made against our products to anyone other than our website or through affiliate link.', '2023-11-30 05:31:12', 'http://localhost/gurukulnation/public/uploads/image1701340586.png', '2023-11-30 10:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `main_banners`
--

CREATE TABLE `main_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `content1` varchar(255) DEFAULT NULL,
  `content2` varchar(255) DEFAULT NULL,
  `content3` varchar(255) DEFAULT NULL,
  `banner1` varchar(255) DEFAULT NULL,
  `banner2` varchar(255) DEFAULT NULL,
  `banner3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_banners`
--

INSERT INTO `main_banners` (`id`, `title1`, `title2`, `title3`, `content1`, `content2`, `content3`, `banner1`, `banner2`, `banner3`, `created_at`, `updated_at`) VALUES
(1, 'Non-profit', 'Humanity', 'be a Kind Heart', 'You can support us to grow more   Previous', 'Please tell your friends about our website   Previous', 'Professional charity theme based on Bootstrap 5.2.2   Previous', 'http://localhost/broopi-laravel/public/mainBannersUploadedFolder/bannerone1699175676.jpg', 'http://localhost/broopi-laravel/public/mainBannersUploadedFolder/bannertwo1699175676.jpg', 'http://localhost/broopi-laravel/public/mainBannersUploadedFolder/bannerthree1699175676.jpg', NULL, '2023-11-05 03:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2023_10_16_071656_create_packers_movers_table', 2),
(6, '2023_10_16_114033_create_categorise_table', 3),
(7, '2023_10_16_114253_create_sub_categorise_table', 3),
(8, '2023_10_16_114318_create_sub_sub_categorise_table', 3),
(9, '2023_10_18_074539_create_homepagebanner_table', 4),
(10, '2023_10_18_095142_create_banners_table', 5),
(11, '2023_10_19_060301_create_items_table', 6),
(12, '2023_10_19_130403_create_cart_items_table', 7),
(13, '2023_10_25_131037_create_vehicle_table', 8),
(14, '2023_10_25_131340_create_road_side_assistance_table', 9),
(15, '2023_11_05_073551_main_banners', 10),
(16, '2023_11_06_054321_our_story_n_missions', 11);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`) VALUES
(1, 'marioxsoft651@gmail.com', '2023-11-08 00:33:46'),
(2, 'akhimariox@gmail.com', '2023-11-08 00:37:06'),
(3, 'software.mariox202@gmail.com', '2023-11-08 00:45:10'),
(4, 'marioxsoft65111111@gmail.com', '2023-11-08 00:54:54'),
(5, 'mariddd1@gmail.com', '2023-11-08 00:58:30'),
(6, 'marioxsssss@gmail.com', '2023-11-08 01:12:20'),
(7, 'm51@gmail.com', '2023-11-09 03:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `our_story_n_missions`
--

CREATE TABLE `our_story_n_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_our_story` varchar(255) DEFAULT NULL,
  `desc_our_story` varchar(255) DEFAULT NULL,
  `title_our_mission` varchar(255) DEFAULT NULL,
  `disc_our_mission` varchar(255) DEFAULT NULL,
  `bullets1_our_mission` varchar(255) DEFAULT NULL,
  `bullets2_our_mission` varchar(255) DEFAULT NULL,
  `foundend_yrs` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_story_n_missions`
--

INSERT INTO `our_story_n_missions` (`id`, `title_our_story`, `desc_our_story`, `title_our_mission`, `disc_our_mission`, `bullets1_our_mission`, `bullets2_our_mission`, `foundend_yrs`, `image`, `created_at`, `updated_at`) VALUES
(1, 'M7Rock Capital Venture', 'Pioneering global finance, we empower trade with innovative solutions. From non-fund-based products to swift services, our journey epitomizes growth and excellence.', 'Our Mission', 'With a $20 million investment, we catalyze market expansion, fostering economic resilience. Our mission is to empower global commerce, connecting continents through cutting-edge financial tools.', 'Vision to invest $20million', 'Mission to grow together', '2010-01-01', 'http://localhost/gurukul/public/mainBannersUploadedFolder/image1700718336.jpg', NULL, '2023-11-23 00:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `comments` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `designation`, `comments`, `image`, `updated_at`, `created_at`) VALUES
(2, 'Siddharth Thakur', 'B.B.A Student', 'I embarked on my journey a few months ago, and to be honest, words can\'t define how bliss I am. Bizgurukul not only helped me become financially independent but also helped me to improve my overall development in my career. This platform provides high-skill development courses with lots of other perks that are just priceless. I am fortunate to be a part of this proficient and fantastic platform. Moreover, it also improved my leadership skills, which brought me confidence and boosted my personality traits. Thanks a ton!!!! BIZGURUKUL.', 'http://localhost/gurukulnation/public/uploads/image1701337591.png', '2023-11-30 04:16:31', '2023-11-30 03:57:03'),
(3, 'Indu Choudhary', '12th student', 'A platform that changed my life for good. Gave me a lot more clarity and a better perspective about careers in the digital space. Also, providing a top-notch knowledge level and a competitive and healthy environment for growth. As the saying goes, \"Success is where preparation and opportunity meet,\" and that place is Bizgurukul for me.', 'http://localhost/gurukulnation/public/uploads/image1701337674.png', '2023-11-30 04:17:54', '2023-11-30 04:11:28'),
(4, 'Divyansh Sengar', 'Engineering Student', 'The interactive training system and support system by the organization has made my last year more productive than I imagined. I started with zero knowledge or experience in online marketing however, the journey so far was full of learnings and exposure to real-world marketing and business.', 'http://localhost/gurukulnation/public/uploads/image1701337737.png', '2023-11-30 04:18:57', '2023-11-30 04:12:34'),
(5, 'Pragya Dubey', 'B.Tech Student', 'I’ve been a part of this community for three months. I noticed that skills are what will help you out in your entire life. I got a deep understanding and frameworks from BIZGURUKUL courses, making a productive Instagram profile, and optimizing and scaling Facebook ads. And the most beautiful part, in these courses, you will also be getting some life lessons that will enhance your personality overall and will undoubtedly lead to a better life. I am more than happy to be a part of this family.', 'http://localhost/gurukulnation/public/uploads/image1701337466.png', '2023-11-30 04:14:26', '2023-11-30 04:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'For Importers & Traders- Non fund based product- LC(MT710)  Pre Advise services(MT705)', 'for-importers-traders-non-fund-based-product-lcmt710-pre-advise-servicesmt705', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'http://localhost/m7Rock/public/serviceImages/image1700204556.jpg', '2023-11-08 05:16:47', '2023-11-17 01:32:36'),
(3, 'For Contractors- Bank Guarantee(BG)/EMD/SG/PBG/APG/RG', 'for-contractors-bank-guaranteebgemdsgpbgapgrg', '<p>For Contractors-<br>Bank Guarantee(BG)/EMD/SG/PBG/APG/RG</p><p>&nbsp;</p>', 'http://localhost/m7Rock/public/serviceImages/image1700204803.jpg', '2023-11-08 06:14:09', '2023-11-17 01:36:43'),
(4, 'For Exporters- Financial Guarantee(FG), PGB,PB,APG', 'for-exporters-financial-guaranteefg-pgbpbapg', '<p>For Exporters-<br>Financial Guarantee(FG), PGB,PB,APG</p>', 'http://localhost/m7Rock/public/serviceImages/image1700204831.jpg', '2023-11-08 06:14:27', '2023-11-17 01:37:11'),
(5, 'Fund based products- Off shore Banking servises, Escrow servises', 'fund-based-products-off-shore-banking-servises-escrow-servises', '<p>Fund based products-<br>Off shore Banking servises, Escrow servises</p>', 'http://localhost/m7Rock/public/serviceImages/image1700205036.jpg', '2023-11-17 01:40:36', NULL),
(6, 'Swift Services Banks of Africa & Banks of middle East', 'swift-services-banks-of-africa-banks-of-middle-east', '<p>Swift Services<br>Banks of Africa and Banks of middle East</p>', 'http://localhost/m7Rock/public/serviceImages/image1700205076.jpg', '2023-11-17 01:41:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `termsncondtions` text DEFAULT NULL,
  `whatsp` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_title`, `meta_desc`, `privacy_policy`, `termsncondtions`, `whatsp`, `insta`, `twitter`, `fb`, `created_at`, `updated_at`) VALUES
(1, 'M7rock', 'This is test meta description', 'This is test privacy policy', 'This is test terms and conditions', 'https:whatsp.com', 'https:linkedin.com', 'https:twitter.com', 'https:facebook.com', '2023-11-10 01:12:39', '2023-11-23 00:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `termsandprivacies`
--

CREATE TABLE `termsandprivacies` (
  `id` int(11) NOT NULL,
  `title_trms` varchar(255) DEFAULT NULL,
  `title_prvcy` varchar(255) DEFAULT NULL,
  `desc_trms` text DEFAULT NULL,
  `desc_prvcy` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `termsandprivacies`
--

INSERT INTO `termsandprivacies` (`id`, `title_trms`, `title_prvcy`, `desc_trms`, `desc_prvcy`, `updated_at`) VALUES
(1, 'Lorium Terms', 'Lorium Privacy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular', '2023-11-20 04:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Maria, Boss', '<h4>1Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>', 'http://localhost/m7rock/public/testimonialsImages/image1700466279.jpg', 'maria-boss', '2023-11-20 01:56:40', '2023-11-20 02:14:39'),
(5, 'Bob, Entreprenuer', '<h4>11Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>', 'http://localhost/m7rock/public/testimonialsImages/image1700465407.jpg', 'bob-entreprenuer', '2023-11-20 02:00:07', '2023-11-20 04:48:03'),
(6, 'Jane, Advisor', '<h4>2Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>', 'http://localhost/m7rock/public/testimonialsImages/image1700475409.jpg', 'jane-advisor', '2023-11-20 04:46:49', '2023-11-20 04:48:56'),
(7, 'Bob, Entreprenuer', '<h4>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>', 'http://localhost/m7rock/public/testimonialsImages/image1700475438.jpg', 'bob-entreprenuer', '2023-11-20 04:47:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT 1 COMMENT '1=user',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state_id` varchar(255) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `referral_code` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT 'male',
  `remember_token` varchar(255) DEFAULT NULL,
  `wallet` varchar(255) DEFAULT '0',
  `actual_amount` double NOT NULL DEFAULT 0,
  `free_cash` double NOT NULL DEFAULT 0,
  `refer_user_id` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` longtext DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_of_birth` varchar(100) DEFAULT NULL,
  `social_id` text DEFAULT NULL,
  `social_type` varchar(100) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `is_businesses` int(11) NOT NULL DEFAULT 0,
  `is_notify` int(11) NOT NULL DEFAULT 1,
  `is_notify_full` int(11) NOT NULL DEFAULT 1,
  `user_status` varchar(255) DEFAULT '1' COMMENT 'user_status 1 for users and for admin it should be 2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `phone`, `state_id`, `city_id`, `referral_code`, `dob`, `longitude`, `gender`, `remember_token`, `wallet`, `actual_amount`, `free_cash`, `refer_user_id`, `latitude`, `status`, `image`, `password`, `token`, `is_delete`, `created_at`, `updated_at`, `time_of_birth`, `social_id`, `social_type`, `language`, `google_id`, `is_businesses`, `is_notify`, `is_notify_full`, `user_status`) VALUES
(1, 2, 'admin', 'admin@gurukul.com', '8077619780', NULL, NULL, NULL, NULL, '77.4036616', 'male', NULL, '0', 0, 0, NULL, '28.4952738', 1, NULL, '$2y$10$d6jHSHzxPF5bIXr/gfftgOpAGLDpUROjbDJGD6qE7gJrJNi9yyLYS', NULL, 0, '2023-09-05 10:50:04', '2023-09-21 12:19:52', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '2'),
(3, 1, 'Suraj', 'suraj@yopmail.com', '8077619781', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:17:54', '2023-10-11 00:17:54', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '1'),
(4, 1, 'Mukul', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-10-11 00:44:47', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '1'),
(5, 1, 'Mukul', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-10-11 00:44:47', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '1'),
(6, 1, 'Mukul3', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-12-07 01:06:01', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '0'),
(7, 1, 'Mukul4', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-12-07 01:06:07', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '0'),
(8, 1, 'Mukul5', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-10-11 00:44:47', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '1'),
(9, 1, 'Mukul6', 'mukul@yopmail.com', '9319009459', NULL, NULL, NULL, NULL, NULL, 'male', NULL, '0', 0, 0, NULL, NULL, 1, NULL, NULL, NULL, 0, '2023-10-11 00:44:47', '2023-10-11 00:44:47', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `vdo_heading` varchar(255) DEFAULT NULL,
  `vdo_priority` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `vdo_url` text DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `watch_on` varchar(255) DEFAULT NULL,
  `access_time` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `cat_id`, `course_id`, `vdo_heading`, `vdo_priority`, `video`, `vdo_url`, `language`, `sub_title`, `watch_on`, `access_time`, `updated_at`, `created_at`) VALUES
(2, 11, 2, 'degi', '21', '', NULL, 'Urdu', 'Yes', 'Laptop,Desktop,Mobile', '6months', '2023-12-12 00:58:28', '2023-11-27 03:46:15'),
(3, 11, 3, 'advance', '3', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QC8iQqtG0hg?si=qTfMCGL6ZLL29Ntd\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Hindi', 'Yes', 'Laptop,Desktop,Mobile', 'Full Time', '2023-12-12 00:58:18', '2023-11-27 04:23:36'),
(4, 13, 10, 'infulncevdo', '1', '', 'https://www.youtube.com/embed/lFO6qENstJ8', 'Hindi', 'Yes', 'Desktop,Mobile', 'Full Time', '2023-12-12 01:21:48', '2023-12-01 06:39:56'),
(5, 10, 6, 'Traffic Mastery1', '1', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/C0DPdy98e4c?si=Y0EQ-Cx54qFk3i5D\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Hindi', 'Yes', 'Desktop,Mobile', 'Full Time', '2023-12-12 02:30:17', '2023-12-11 05:56:04'),
(6, 14, 8, 'test1', '2', '', 'https://www.youtube.com/embed/lFO6qENstJ8', 'English', 'No', 'Laptop,Desktop', '6months', '2023-12-12 01:20:42', '2023-12-11 23:18:06'),
(7, 13, 10, 'test vdo 1', '1', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/video1702374741.mp4', '', 'English', 'No', 'Laptop,Desktop,Mobile', 'Full Time', '2023-12-12 04:22:21', '2023-12-12 04:22:21'),
(8, 13, 7, 'dykjgjg', '2', 'http://localhost/gurukulnation/public/courseThumbnailsNvdo/video1702374969.mp4', '', 'Hindi', 'No', 'Laptop,Desktop,Mobile', 'Full Time', '2023-12-12 04:26:09', '2023-12-12 04:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `why_gurukul_nations`
--

CREATE TABLE `why_gurukul_nations` (
  `id` int(11) NOT NULL,
  `count1` varchar(255) DEFAULT NULL,
  `count2` varchar(255) DEFAULT NULL,
  `count3` varchar(255) DEFAULT NULL,
  `count4` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_gurukul_nations`
--

INSERT INTO `why_gurukul_nations` (`id`, `count1`, `count2`, `count3`, `count4`, `title1`, `title2`, `title3`, `title4`, `updated_at`, `created_at`) VALUES
(1, '200', '2', '500', '80', 'Trainers', 'Students Enrolled', 'Live Training', 'Community Earning', '2023-11-27 06:35:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepagebanner`
--
ALTER TABLE `homepagebanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_gurukul_nation_works`
--
ALTER TABLE `how_gurukul_nation_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learner_supports`
--
ALTER TABLE `learner_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_banners`
--
ALTER TABLE `main_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_story_n_missions`
--
ALTER TABLE `our_story_n_missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termsandprivacies`
--
ALTER TABLE `termsandprivacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`name`,`email`,`phone`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_gurukul_nations`
--
ALTER TABLE `why_gurukul_nations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homepagebanner`
--
ALTER TABLE `homepagebanner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `how_gurukul_nation_works`
--
ALTER TABLE `how_gurukul_nation_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `learner_supports`
--
ALTER TABLE `learner_supports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_banners`
--
ALTER TABLE `main_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_story_n_missions`
--
ALTER TABLE `our_story_n_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termsandprivacies`
--
ALTER TABLE `termsandprivacies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `why_gurukul_nations`
--
ALTER TABLE `why_gurukul_nations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
