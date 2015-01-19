-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 11:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
`id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `filedescription` text NOT NULL,
  `file` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `downloads` int(11) NOT NULL,
  `enabled` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `furl` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `user`, `filename`, `filedescription`, `file`, `price`, `downloads`, `enabled`, `views`, `furl`) VALUES
(35, 'admin', 'lol edit', 'kkkk\r\njkgjkj', '10928186_402139236619334_5984659932444137695_n.jpg', '0.5', 0, 0, 7, '54ba99098f449');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `body` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `body`, `date`) VALUES
(1, 'No pages exists', 'default', 'No page via that url exists. ', ''),
(2, 'Terms of service', 'tos', '<h1>UPDATED</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Introduction</p>\r\n\r\n<p>BTC-e provides an online tool that allows users to freely trade Bitcoins for a number of different currencies worldwide. The Terms of Use described here apply to all transactions and activities engaged by the users of this website, data gathered, private messeges, online chat between the users and support BTC-e.</p>\r\n\r\n<h3>Changes to Website</h3>\r\n\r\n<p>BTC-e will always attempt to keep its users informed of any changes to the website. However, BTC-e may terminate, change, suspend or discontinue any aspect of this website, including the availability of features of the site, at any time. BTC-e may also impose limits on certain features and services or restrict your access to part or the entire website without prior notice or liability.</p>\r\n\r\n<h3>Proprietary Rights</h3>\r\n\r\n<p>All contents of the BTC-e website, including, but not limited to, text, names, data, logos, buttons, icons, code, methods, techniques, models, graphics and the underlying software (the &quot;Components&quot;), are proprietary of BTC-e and are protected by the patent, copyright, trademark. Nothing contained in this website shall be used in any form unless expressly stated by BTC-e.</p>\r\n\r\n<h3>Privacy</h3>\r\n\r\n<p>BTC-e will not share, publish, or sell any user data contained in its databases. However, BTC-e may be requested at any time to share trade data including, but not restricted to, emails, user transactions, and trade data by government authorities. BTC-e will not deny such requests and cannot be held responsible for the leakage of information by third parties whether the action was performed intentionally or not. We are prohibited from using multiple accounts.</p>\r\n\r\n<h3>Fees and Comissions</h3>\r\n\r\n<p>In order to pay for server space, bandwidth, programmers, designers, and other costs, BTC-e imposes a standard: Fee &ndash; 0.2% - 0.5%. fee on every transaction performed by all users of the website. This transaction may vary and may be different for each individual account.</p>\r\n\r\n<h3>Limitation of Liability</h3>\r\n\r\n<p>BTC-e does not provide advice for its users on trading techniques, models, algorithms or similar. Occasionally, BTC-e may publish best practices or recommendations publicly to all its users or privately to users expressly requesting assistance. Users of this website are responsible for the outcome of their actions with their account balances. Users are also responsible for protecting access information to the Website including, but not limited to, user names, passwords, and bank account details. BTC-e is not responsible for the outcome, whether positive or negative, of any action performed by any of its users within or related to the Website. Some withdraw methods require BTC-e to use personal details of the user including, but not limited to, name, address, email, phone number, and bank account number for which BTC-e has the capability to send and receive encrypted emails. The usage of encryption is left entirely at the discretion of the user.</p>\r\n\r\n<h3>BTC-e Terms of Use</h3>\r\n\r\n<p>By opening an account at BTC-e you agree to the Terms of Use stated in this page. BTC-e reserves the right, at its discretion, to add, remove, or modify portions of these Terms of Agreement at any time. Your continued use of BTC-e following the implementation of changes to these Terms of Agreement implies that you accept such changes.<br />\r\nPlease note the funds will be on hold untill the identity is verified.<br />\r\nWe don&#39;t accept any more international wire transfers from US Citizens or from US Bank<br />\r\nAs of 11.28.2014 we will not accept any claims about account hacking or fraudulent activities in your account carried out by third parties if Google 2-Factor authentication is not enabled.<br />\r\nAll newly registered users can&#39;t withdraw money from an account within 3 working days.</p>\r\n\r\n<h3>Identity verification</h3>\r\n\r\n<p>Required in case you choose to load your account by wire transfer.To comply with AML/CTF recommendations, we require our clients to verify identity by providing scanned copy of ID and scanned copy of utility bill or a bank statement which should not be older then 6 month. Copy should be in good resolution and colored.</p>\r\n\r\n<h3>Jurisdiction</h3>\r\n\r\n<p>Laws in the country where the user resides may not allow the usage of an online tool with the characteristics of BTC-e or any of its features. BTC-e does not encourage the violation of any laws and cannot be held responsible for violation of such laws. For all legal purposes, these Terms of Use shall be governed by the laws applicable in the Cyprus. You agree and hereby submit to the exclusive personal jurisdiction and venue of the Cyprus for the resolution of any disputes arising from these Terms of Use.</p>\r\n\r\n<h3>Contact us</h3>\r\n\r\n<p>At BTC-e, we want to provide the best service while keeping everyone informed of the existing features and limitations. Please do not hesitate to contact us in case you have any questions at:</p>\r\n\r\n<h3>Chat rules for users</h3>\r\n\r\n<p>1. Obscene words in any type (swearing, hidden and veiled swearing) are prohibited in our chat</p>\r\n\r\n<p>2. Abusing other users is prohibited</p>\r\n\r\n<p>3. Pronouncements that incite ethnic hatred, advocating violence in any form, insulting religious feelings of other users are not allowed.</p>\r\n\r\n<p>4. Flooding (flood is the posting of similar information, same repeating phrase or identical graphic files), flaming and spamming are prohibited.</p>\r\n\r\n<p>5. Obscene words (both in obvious and veiled forms) in a user&rsquo;s nick are not allowed.</p>\r\n\r\n<p>6. Distribution of maleficent links, links to third party online projects and advertising links is prohibited.</p>\r\n\r\n<p>7. Abusing statements addressed to the administration, moderators, hard-hitting pronouncements about the chat are prohibited.</p>\r\n\r\n<p>8. Discussing moderators&rsquo; actions is inadmissible. If you believe you have been treated unfairly, write to the administrator, he will take care of that.</p>\r\n\r\n<p>9. Users must not beg for the moderator status or any other status from the administration.</p>\r\n\r\n<p>10. Writing only capitals is prohibited.</p>\r\n\r\n<p>11. If you respond to abuses by abusing, you are treated as the one violating the rules, and a relevant punishment will be applied to you.</p>\r\n\r\n<h3>Chat rules for moderators</h3>\r\n\r\n<p>1. Moderator, being a representative of the administrator, must strictly obey all user rules and be a reference for everyone.</p>\r\n\r\n<p>2. Before applying a punishment, the moderator must warn the user that he/she has violated the rules (this does not refer to the situations with obvious abuse of a user/users and flood). In case of a repeated violation of the chat rules the user will not be warned.</p>\r\n\r\n<p>3. Banning for longer than 60 days is admitted only in case of repeated major chat rules violations by a user.</p>\r\n\r\n<p>4. For violation of the chat rules upon the decision of the administration a moderator can be deprived of his/her authority without the right to recover.</p>\r\n\r\n<h3>Have questions? Contact us:</h3>\r\n\r\n<p>Chat: support</p>\r\n\r\n<p>Ticket system: https://support.btc-e.com/</p>\r\n', '1420135612'),
(3, 'Privacy', 'privacy', '\r\nThis Privacy Policy governs the manner in which Project Investors, Inc collects, uses, maintains and discloses information collected from users (each, a "User") of the <a href="https://www.cryptsy.com">www.cryptsy.com</a> website ("Site"). This privacy policy applies to the Site and all products and services offered by Project Investors, Inc.<br><br>\r\n\r\n<b>Personal identification information</b><br><br>\r\n\r\nWe may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, place an order, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, phone number. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.<br><br>\r\n\r\n<b>Non-personal identification information</b><br><br>\r\n\r\nWe may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.<br><br>\r\n\r\n<b>Web browser cookies</b><br><br>\r\n\r\nOur Site may use "cookies" to enhance User experience. User''s web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.<br><br>\r\n\r\n<b>How we use collected information</b><br><br>\r\n\r\nProject Investors, Inc may collect and use Users personal information for the following purposes:<br><br>\r\n<ul>\r\n<li><i>- To improve customer service</i><br><br>\r\n	Information you provide helps us respond to your customer service requests and support needs more efficiently.</li><br>\r\n<li><i>- To personalize user experience</i><br><br>\r\n	We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li><br>\r\n<li><i>- To improve our Site</i><br><br>\r\n	We may use feedback you provide to improve our products and services.</li><br>\r\n<li><i>- To process payments</i><br><br>\r\n	We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.</li><br>\r\n<li><i>- To send periodic emails</i><br><br>\r\nWe may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, they may do so by contacting us via our Site.</li><br>\r\n</ul>\r\n\r\n\r\n<b>How we protect your information</b><br><br>\r\n\r\nWe adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.<br><br>\r\n\r\nSensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures. Our Site is also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users.<br><br>\r\n\r\n<b>Sharing your personal information</b><br><br>\r\n\r\nWe do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.<br><br>\r\n\r\n<b>Third party websites</b><br><br>\r\n\r\nUsers may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website''s own terms and policies.<br><br>\r\n\r\n<b>Changes to this privacy policy</b><br><br>\r\n\r\nProject Investors, Inc has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.<br><br>\r\n\r\n<b>Your acceptance of these terms</b><br><br>\r\n\r\nBy using this Site, you signify your acceptance of this policy and <a href="https://www.cryptsy.com/pages/terms">terms of service</a>. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.<br><br>\r\n\r\n<b>Contacting us</b><br><br>\r\n\r\nIf you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:<br><br>\r\n<a href="https://www.cryptsy.com">www.cryptsy.com</a><br>\r\nProject Investors Inc<br>\r\n160 Congress Park Dr, Suite 101<br>\r\nDelray Beach, FL  33445<br>\r\n888-963-9935<br>\r\nsupport@cryptsy.com<br>\r\n<br>', '1420137916'),
(4, 'Jobs', 'jobs', '\r\n 	\r\n<h4>Want to get in on something new and exciting and help create the future of eCommerce? </h4>\r\n\r\n<br>\r\n<b>Benefits:</b>\r\n\r\n<ul style="padding:20px; list-style-type:circle;">\r\n<li>Own your own projects from conception to launch</li>\r\n<li>Excellent health insurance</li>\r\n<li>Excellent 401k with employer matching</li>\r\n<li>Work whenever you work best (flexible hours)</li>\r\n<li>Flexible vacation - take time off when you need it</li>\r\n</ul>\r\n\r\n<hr class="separator">\r\n\r\n<h4>Programmer / Architect</h4>\r\n<br>\r\n<b>Requirements:</b><br>\r\n<ul style="padding:20px; list-style-type:circle;">\r\n\r\n<li>Degree or comparative work experience</li>\r\n<li>Familiar with working with MVC frameworks</li>\r\n<li>Experience in a majority of the following: PHP, JS, NodeJS, MySQL, Memcache, Redis, Python</li>\r\n<li>Experience in working in a LAMP environment - Linux CLI</li>\r\n<li>MongoDB experience a plus</li>\r\n<li>Experience in End-to-End development</li>\r\n	\r\n</ul>\r\n\r\n<p class="submit-holder" style="text-align:center; padding:0px;">\r\n      				<a href="mailto:jobs@cryptsy.com?Subject=Programmer%20/%20Architect%20Job" class="btn btn-default btn-success"><span>Apply</span></a>\r\n</p>\r\n', '1420138238'),
(5, 'Test Page', 'test', '<p>hfdgjsahjfhdjfhjf</p>\r\n', '1420484397');

-- --------------------------------------------------------

--
-- Table structure for table `purchas`
--

CREATE TABLE IF NOT EXISTS `purchas` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `txtid` int(11) NOT NULL,
  `wallet` int(11) NOT NULL,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `sitename` varchar(250) NOT NULL,
  `siteslogan` varchar(250) NOT NULL,
  `siteurl` text NOT NULL,
  `sitetheme` varchar(250) NOT NULL,
  `sitefees` varchar(250) NOT NULL,
  `slogan` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `vat` varchar(25) NOT NULL,
  `fees` varchar(23) NOT NULL,
  `emailverify` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`sitename`, `siteslogan`, `siteurl`, `sitetheme`, `sitefees`, `slogan`, `keywords`, `description`, `vat`, `fees`, `emailverify`) VALUES
('Market', '- Pay to downllad', 'http://localhost/market/', 'default', '0.1', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `salt` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `btc` varchar(25) NOT NULL,
  `wallet` text NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `salt`, `username`, `btc`, `wallet`, `admin`) VALUES
(14, 'natecorkish@mail.com', '1f3f9a4ac8938f1b0f426b0f9371b4bc157167a959dbbf7eb4b36833a48db803', '54bc2c9c0cc5c', 'admin', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
