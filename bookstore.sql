/*
SQLyog Ultimate v9.51 
MySQL - 5.5.5-10.4.8-MariaDB : Database - bookstore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bookstore` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci */;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `name_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_cat` int(10) NOT NULL AUTO_INCREMENT,
  `id_cat_parent` int(10) DEFAULT 0,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`name_cat`,`id_cat`,`id_cat_parent`,`description`) values ('Sách Khoa Học',3,0,'');
insert  into `category`(`name_cat`,`id_cat`,`id_cat_parent`,`description`) values ('Sách Blockchain',4,0,'');
insert  into `category`(`name_cat`,`id_cat`,`id_cat_parent`,`description`) values ('Sách công nghệ',5,0,'');

/*Table structure for table `donhang` */

DROP TABLE IF EXISTS `donhang`;

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `total_product` int(20) NOT NULL,
  `total_money` int(20) NOT NULL,
  `creat_time` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `donhang` */

insert  into `donhang`(`id`,`total_product`,`total_money`,`creat_time`,`status`,`full_name`,`email`,`address`) values (6,10,500000,1574955040,'Minh Khai','Tran Quang Minh','minh@gmail.com','Ha Noi');
insert  into `donhang`(`id`,`total_product`,`total_money`,`creat_time`,`status`,`full_name`,`email`,`address`) values (7,5,125000,1575279936,'123456','Äá»— Kháº¯c Äiá»‡p','khacdiep150598@gmail.com','HÃ  Ná»™i');
insert  into `donhang`(`id`,`total_product`,`total_money`,`creat_time`,`status`,`full_name`,`email`,`address`) values (8,5,625000,1575884943,'sdsadsad','Vá»¯ CÆ°á»ng','ghgf@gmail.com','yuyuytu');

/*Table structure for table `img` */

DROP TABLE IF EXISTS `img`;

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(225) NOT NULL,
  `name` varchar(150) NOT NULL,
  `id_item` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `img` */

insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (27,'../common/images/bg-detail-news.jpg','bg-detail-news.jpg',4241);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (28,'../common/images/atm.png','atm.png',3980);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (29,'../common/images/bg-detail-news.jpg','bg-detail-news.jpg',3148);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (30,'../common/images/bg-product.jpg','bg-product.jpg',1630);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (31,'../common/images/bg-product.jpg','bg-product.jpg',844);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (32,'../common/images/item-p.jpg','item-p.jpg',4685);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (33,'../common/images/course-pw.jpg','course-pw.jpg',741);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (34,'../common/images/332492_p86867mscan0001.jpg','332492_p86867mscan0001.jpg',4704);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (35,'../common/images/298813_p81324mbiatruoc.jpg','298813_p81324mbiatruoc.jpg',1631);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (36,'../common/images/302849_p82462mbatrc.jpg','302849_p82462mbatrc.jpg',3363);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (37,'../common/images/305582_p82714m1.jpg','305582_p82714m1.jpg',4877);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (38,'../common/images/298955_p81232mscan0001.jpg','298955_p81232mscan0001.jpg',3838);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (39,'../common/images/348612_p90006mvatly.jpg','348612_p90006mvatly.jpg',4326);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (40,'../common/images/334322_p87082mscan0001.jpg','334322_p87082mscan0001.jpg',464);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (41,'../common/images/346273_p88554mchiemtinh.jpg','346273_p88554mchiemtinh.jpg',3009);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (42,'../common/images/332434_p86851mscan0001.jpg','332434_p86851mscan0001.jpg',4246);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (43,'../common/images/339073_p87683mscan0001.jpg','339073_p87683mscan0001.jpg',2032);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (44,'../common/images/49207_55750.jpg','49207_55750.jpg',3116);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (45,'../common/images/17633_p24041.jpg','17633_p24041.jpg',2379);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (46,'../common/images/332434_p86851mscan0001.jpg','332434_p86851mscan0001.jpg',4482);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (47,'../common/images/49207_55750.jpg','49207_55750.jpg',4720);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (48,'../common/images/334322_p87082mscan0001.jpg','334322_p87082mscan0001.jpg',431);
insert  into `img`(`img_id`,`url`,`name`,`id_item`) values (49,'../common/images/332492_p86867mscan0001.jpg','332492_p86867mscan0001.jpg',280);

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` int(10) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `name_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `price_maket` float DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `item_sortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_desc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `item` */

insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (431,3,'Giáº£i tÃ­ch',50000,60000,5,'abcdsf','Ngoc Anh','tÃ©ttttttt','hgfh');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (464,3,'Những Câu Hỏi Lớn - Vật Lý',127000,159,50,'NHá»®NG CÃ‚U Há»ŽI Lá»šN Ä‘á» cáº­p Ä‘áº¿n nhá»¯ng váº¥n Ä‘á» cÆ¡ báº£n trong khoa há»c tá»± nhiÃªn vÃ  xÃ£ há»™i, nhÆ°ng váº«n khiáº¿n nhá»¯ng bá»™ Ã³c vÄ© Ä‘áº¡i trong lá»‹ch sá»­ Ä‘au Ä‘áº§u.','Michael Brooks','NHá»®NG CÃ‚U Há»ŽI Lá»šN Ä‘á» cáº­p Ä‘áº¿n nhá»¯ng váº¥n Ä‘á» cÆ¡ báº£n trong khoa há»c tá»± nhiÃªn vÃ  xÃ£ há»™i, nhÆ°ng váº«n khiáº¿n nhá»¯ng bá»™ Ã³c vÄ© Ä‘áº¡i trong lá»‹ch sá»­ Ä‘au Ä‘áº§u.  Trong cuá»‘n Nhá»¯ng cÃ¢u há»i lá»›n â€“ Váº­t lÃ½, tÃ¡c giáº£ Michael Brooks Ä‘Ã£ lÃ½ giáº£i tháº¿ giá»›i váº­t lÃ½ qua nhá»¯ng váº¥n Ä‘á» tá»•ng quÃ¡t cÃ²n bá» ngÃµ. Tá»« nhá»¯ng chá»§ Ä‘á» thÃ¢n thuá»™c nhÆ° thá»i gian, trá»ng lÆ°á»£ng, cÃ¡c thá»ƒ váº­t cháº¥t, cho Ä‘áº¿n nhá»¯ng khÃ¡i niá»‡m trá»«u tÆ°á»£ng nhÆ° â€œcon mÃ¨o cá»§a SchrÃ¶dingerâ€, nguyÃªn lÃ½ báº¥t Ä‘á»‹nh Heisenberg, sá»± ngáº«u nhiÃªn cá»§a thá»±c táº¡i vÃ  báº£n cháº¥t cá»§a thá»±c táº¡i chÃºng ta Ä‘ang sá»‘ng, Tiáº¿n sÄ© Brooks Ä‘Ã£ cho chÃºng ta tháº¥y con Ä‘Æ°á»ng phÃ¡t triá»ƒn cá»§a Váº­t lÃ½ tá»« thá»i cá»• Ä‘áº¡i, Ä‘Æ°Æ¡ng Ä‘áº¡i, tá»›i tÆ°Æ¡ng lai qua 20 cÃ¢u há»i lá»›n:  Ã NGHÄ¨A Cá»¦A Váº¬T LÃ LÃ€ GÃŒ?  THá»œI GIAN LÃ€ GÃŒ?  CHUYá»†N GÃŒ Xáº¢Y RA Vá»šI CON MÃˆO Cá»¦A SCHRÃ–DINGER?  Táº I SAO QUáº¢ TÃO RÆ I?  CHáº¤T Ráº®N CÃ“ THá»°C Sá»° Ráº®N?  Táº I SAO KHÃ”NG CÃ“ Bá»®A TRÆ¯A NÃ€O MIá»„N PHÃ?  PHáº¢I CHÄ‚NG Má»ŒI THá»¨ Äá»€U LÃ€ NGáºªU NHIÃŠN?  Háº T Cá»¦A CHÃšA LÃ€ GÃŒ?  TÃ”I CÃ“ LÃ€ DUY NHáº¤T?  CHÃšNG TA CÃ“ THá»‚ DU HÃ€NH XUYÃŠN THá»œI GIAN KHÃ”NG?  Tá»ª TRÆ¯á»œNG Báº¢O Vá»† TRÃI Äáº¤T ÄANG BIáº¾N Máº¤T?  Táº I SAO E=MC2?  TÃ”I CÃ“ THá»‚ THAY Äá»”I VÅ¨ TRá»¤ CHá»ˆ Vá»šI Má»˜T ÃNH NHÃŒN?  LIá»†U THUYáº¾T Há»–N Äá»˜N CÃ“ GÃ‚Y NÃŠN THáº¢M Há»ŒA?  ÃNH SÃNG LÃ€ GÃŒ?  LÃ THUYáº¾T DÃ‚Y CÃ“ THá»°C Sá»° Tá»’N Táº I THAY VÃŒ KHÃ”NG GÃŒ Cáº¢?  PHáº¢I CHÄ‚NG CON NGÆ¯á»œI Sá»NG TRONG Má»˜T THáº¾ GIá»šI MÃ” PHá»ŽNG?  ÄÃ‚U LÃ€ Lá»°C Tá»° NHIÃŠN Máº NH NHáº¤T?  Báº¢N CHáº¤T CHÃNH XÃC Cá»¦A THá»°C Táº I LÃ€ GÃŒ?','NXB Thanh NiÃªn');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (1631,4,'Bitcoin Thá»±c HÃ nh: Nhá»¯ng KhÃ¡i Niá»‡m CÆ¡ Báº£n VÃ  CÃ¡ch Sá»­ Dá»¥ng ÄÃºng Äá»“ng Tiá»n MÃ£ HÃ³a',340000,360000,5,'Mastering Bitcoin cung cáº¥p cÃ¡c kiáº¿n thá»©c cáº§n thiáº¿t Ä‘á»ƒ giÃºp Ä‘á»™c giáº£ gia nháº­p tháº¿ giá»›i cá»§a tiá»n áº£o. Bitcoin lÃ  Ä‘á»“ng tiá»n sá»‘ thÃ nh cÃ´ng Ä‘áº§u tiÃªn khÃ´ng do báº¥t ká»³ má»™t chÃ­nh phá»§ nÃ o phÃ¡t hÃ nh. Máº·c dÃ¹','Ngoc Anh','Mastering Bitcoin cung cáº¥p cÃ¡c kiáº¿n thá»©c cáº§n thiáº¿t Ä‘á»ƒ giÃºp Ä‘á»™c giáº£ gia nháº­p tháº¿ giá»›i cá»§a tiá»n áº£o. Bitcoin lÃ  Ä‘á»“ng tiá»n sá»‘ thÃ nh cÃ´ng Ä‘áº§u tiÃªn khÃ´ng do báº¥t ká»³ má»™t chÃ­nh phá»§ nÃ o phÃ¡t hÃ nh. Máº·c dÃ¹ bitcoin váº«n Ä‘ang á»Ÿ giai Ä‘oáº¡n má»›i hÃ¬nh thÃ nh tuy nhiÃªn, nÃ³ Ä‘Ã£ táº¡o ra Ä‘Æ°Æ¡c má»™t ná»n kinh táº¿ hÃ ng tá»‰ Ä‘Ã´. Ná»n kinh táº¿ nÃ y luÃ´n má»Ÿ ra chÃ o Ä‘Ã³n táº¥t cáº£ nhá»¯ng ai cÃ³ kiáº¿n thá»©c vÃ  Ä‘am mÃª gia nháº­p. VÃ  cuá»‘n sÃ¡ch cung cáº¥p cho báº¡n kiáº¿n thá»©c, cÃ²n báº¡n chá»‰ cáº§n theo Ä‘uá»•i nÃ³ vá»›i Ä‘am mÃª.  Cuá»‘n sÃ¡ch nÃ y cÃ³ gÃ¬:  - Giá»›i thiá»‡u má»™t cÃ¡ch khÃ¡i quÃ¡t vá» bitcoin  - CÃ¡c giáº£i thÃ­ch vá» ná»n táº£ng cÃ´ng nghá»‡ cá»§a bitcoin vÃ  tiá»n sá»‘  - Chi tiáº¿t vá» máº¡ng lÆ°á»›i bitcoin, cáº¥u trÃºc P2P, vÃ²ng Ä‘á»i giao dá»‹ch, cÃ¡c nguyÃªn táº¯c an ninh  - NgoÃ i ra cÃ²n gá»“m cáº£ nhá»¯ng bÆ°á»›c tiáº¿n phÃ¡t triá»ƒn má»›i nhÆ° Segregated Witness, Payment Channels, and Lightning Network  - CÃ¡c ná»™i dung khÃ¡c liÃªn quan Ä‘áº¿n bitcoin vÃ  cÃ´ng nghá»‡ blockchain nhÆ° cÃ¡c á»©ng dá»¥ng, tiá»n vÃ  chuá»—i thay tháº¿  - CÃ¢u chuyá»‡n cá»§a nhá»¯ng ngÆ°á»i dÃ¹ng, cÃ¡c vÃ­ dá»¥, nhá»¯ng khÃ¡i niá»‡m vá» ká»¹ thuáº­t','BCVT');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (2032,3,'CÃ¡c HÃ nh Tinh',559000,699000,10,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','N.Q HÆ°ng','Má»™t quyá»ƒn sÃ¡ch chá»©a Ä‘áº§y nhá»¯ng thÃ´ng tin, hÃ¬nh áº£nh sáº¯c nÃ©t nhÆ° Ä‘em chÃ­nh chÃºng ta tá»›i nhá»¯ng miá»n háº»o lÃ¡nh, xa xÃ´i nháº¥t cá»§a Há»‡ Máº·t trá»i.  NÃ³ cho chÃºng ta tháº¥y Ä‘Æ°á»£c quang cáº£nh chi tiáº¿t vÃ  Ä‘em Ä‘áº¿n cho chÃºng ta nhá»¯ng thÃ´ng tin má»›i máº» nháº¥t vá» cÃ¡c Ä‘áº·c Ä‘iá»ƒm Ä‘á»‹a hÃ¬nh, Ä‘á»‹a cháº¥t, khÃ­ quyá»ƒn, cÃ¡c suy Ä‘oÃ¡n cÃ¹ng toÃ n bá»™ lá»‹ch sá»­ phÃ¡t hiá»‡n vÃ  thÃ¡m hiá»ƒm nhá»¯ng thiÃªn thá»ƒ xa xÃ´i mÃ  con ngÆ°á»i Ä‘Ã£, hoáº·c chÆ°a thá»ƒ vá»›i tá»›i.   Ai sáº½ Ä‘á»c cuá»‘n sÃ¡ch nÃ y:   ÄÃ¢y sáº½ lÃ  quyá»ƒn sÃ¡ch dÃ nh cho báº¥t ká»³ ai cÃ³ bá»™ Ã³c phiÃªu lÆ°u, muá»‘n phÃ¡ tan cÃ¡c giá»›i háº¡n vÃ  cÃ³ khÃ¡t vá»ng náº¯m báº¯t cÃ¡c bÃ­ áº©n cá»§a vÅ© trá»¥ nÃ³i chung vÃ  Há»‡ Máº·t trá»i nÃ³i riÃªng.  NgoÃ i ra, sÃ¡ch Ä‘áº§y áº¯p nhá»¯ng thÃ´ng tin cáº­p nháº­t nháº¥t, Ä‘Æ°á»£c truyá»n táº£i báº±ng nhá»¯ng hÃ¬nh áº£nh rÃµ nÃ©t nháº¥t, phÃ¹ há»£p cho cáº£ nhá»¯ng chuyÃªn gia láº«n cÃ¡c Ä‘á»‘i tÆ°á»£ng Ä‘á»™c giáº£ nghiá»‡p dÆ° cáº§n tÆ° liá»‡u tham kháº£o trong ngÃ nh VÅ© trá»¥ há»c vÃ  ThiÃªn vÄƒn há»c.','BCVT');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (2379,5,'Tá»± Há»c Thiáº¿t Káº¿ Web',340000,699000,5,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','Ngoc Anh','Tá»± Há»c Thiáº¿t Káº¿ Web Má»¥c Lá»¥c: GIá»šI THIá»†U NGÃ”N NGá»® HTML HTML lÃ  gÃ¬? HTML TAGS JAVASCRIPT 1.Äáº·c tÃ­nh cá»§a ngÃ´n ngá»¯ Javascript 2.NgÃ´n ngá»¯ JavaScript 3.Built- inObject trong JavaScript 4.CÃ¡c Ä‘á»‘i tÆ°á»£ng Ä‘Æ°á»£c cung cáº¥p bá»Ÿi mÃ´i trÆ°á»ng Netscape 5.CÃ¡c Ä‘á»‘i tÆ°á»£ng do ngÆ°á»i láº­p trÃ¬nh xÃ¢y dá»±ng 6.NhÃºng JavaScript vÃ o trong táº­p tin HTML 7.áº¨n cÃ¡c Scripts Ä‘á»‘i vá»›i cÃ¡c Browser khÃ´ng cung cáº¥p JavaScript 8.Sá»­ dá»¥ng táº­p tin JavaScript bÃªn ngoÃ i 9.ThÃªm chÆ°Æ¡ng trÃ¬nh vÃ o táº­p tin HTML Sá»¬ Dá»¤NG JAVASCRIPT CÃº phÃ¡p cÆ¡ báº£n cá»§a lá»‡nh CÃ¡c khá»‘i lá»‡nh Xuáº¥t dá»¯ liá»‡ura cá»­a sá»• trÃ¬nhduyá»‡t Xuáº¥t cÃ¡c tháº» HTML tá»« JavaScript Sá»­ dá»¥ng phÆ°Æ¡ng phÃ¡p writeln() vá»›i tháº» PRE CÃ¡c kÃ½ tá»± Ä‘áº·c biá»‡t trong chuá»—i LÃ m viá»‡c vá»›i cÃ¡c dialog boxes TÆ°Æ¡ng tÃ¡c vá»›i ngÆ°á»i sá»­ dá»¥ng CÃ¡c kiá»ƒu dá»¯ liá»‡u trong JavaScript Táº¡o biáº¿n trong JavaScript LÃ m viá»‡c vá»›i biáº¿n vÃ  biá»ƒu thá»©c    HÃ€M VÃ€ Äá»I TÆ¯á»¢NG Truyá»n tham sá»‘ Pháº¡m vi cá»§a biáº¿n Tráº£ vá» cÃ¡c giÃ¡ trá»‹ HÃ m gá»i láº¡i hÃ m    Táº O Äá»I TÆ¯á»¢NG TRONG JAVASCRIPT Äá»‹nh nghÄ©a thuá»™c tÃ­nh cá»§a Ä‘á»‘i tÆ°á»£ng ThÃªm phÆ°Æ¡ng phÃ¡p cho Ä‘á»‘i tÆ°á»£ng   Sá»° KIá»†N TRONG JAVASCRIPT  CÃ¡c sá»± kiá»‡n trong JavaScript  Bá»™ quáº£n lÃ½ sá»± kiá»‡n (Event Handler)  CÃ¡c bá»™ quáº£n lÃ½ sá»± kiá»‡n trong Javascript  CÃ¡ch dÃ¹ng bá»™ quáº£n lÃ½ sá»± kiá»‡n oÂ­nLoad &amp; oÂ­nUnload  CÃ¡c sá»± kiá»‡n vÃ  Form   Sá»¬ Dá»¤NG VÃ’NG Láº¶P TRONG JAVASCRIPT VÃ²ng láº·p for VÃ²ng láº·p while Táº¡o máº£ng vá»›i vÃ²ng láº·p for  Sá»­ dá»¥ng Ä‘á»‘i tÆ°á»£ng Windows  LÃ m viá»‡c vá»›i status bar  Má»Ÿ vÃ  Ä‘Ã³ng cÃ¡c cá»­a sá»•  Sá»­dá»¥ng Ä‘á»‘i tÆ°á»£ng string.  Má»i báº¡n Ä‘Ã³n Ä‘á»c.','NXB Thanh NiÃªn');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (2659,3,'Giáº£i tÃ­ch',50000,60000,5,'abcdsf','Ngoc Anh','sfdsfdsgfd','fgfhfh');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (3009,3,'ChiÃªm Tinh Há»c Nháº­p MÃ´n',84000,105000,20,'Báº¡n cáº£m tháº¥y mÃ¬nh khÃ´ng giá»‘ng má»™t Xá»­ Ná»¯, má»™t NhÃ¢n MÃ£, má»™t Kim NgÆ°uâ€¦ cho láº¯m?Báº¡n muá»‘n biáº¿t sau nÃ y mÃ¬nh cÃ³ giÃ u khÃ´ng, bao giá» mÃ¬nh cÃ³ ngÆ°á»i yÃªu, mÃ¬nh sáº½ yÃªu ngÆ°á»i tháº¿ nÃ o?','ChiÃªm tinh sá»‘','Báº¡n cáº£m tháº¥y mÃ¬nh khÃ´ng giá»‘ng má»™t Xá»­ Ná»¯, má»™t NhÃ¢n MÃ£, má»™t Kim NgÆ°uâ€¦ cho láº¯m?  Báº¡n muá»‘n biáº¿t sau nÃ y mÃ¬nh cÃ³ giÃ u khÃ´ng, bao giá» mÃ¬nh cÃ³ ngÆ°á»i yÃªu, mÃ¬nh sáº½ yÃªu ngÆ°á»i tháº¿ nÃ o?  Táº¥t cáº£ cÃ¢u tráº£ lá»i sáº½ Ä‘á»u cÃ³ trÃªn báº£n Ä‘á»“ sao cÃ¡ nhÃ¢n cá»§a báº¡n.  Váº¥n Ä‘á» lÃ , lÃ m tháº¿ nÃ o Ä‘á»ƒ Ä‘á»c Ä‘Æ°á»£c báº£n Ä‘á»“ sao cÃ¡ nhÃ¢n?  Thay vÃ¬ tÃ¬m má»i máº¯t má»™t chiÃªm tinh gia chuyÃªn nghiá»‡p Ä‘Ã¡ng tin cáº­y, hay lÃ  thá»­ tá»± Ä‘á»c báº£n Ä‘á»“ sao cho mÃ¬nh xem, vÃ¬ há»c chiÃªm tinh cÅ©ng khÃ´ng khÃ³ láº¯m Ä‘Ã¢u!  Asbooks hÃ¢n háº¡nh giá»›i thiá»‡u cuá»‘n sÃ¡ch tá»‰ má»‰, chi tiáº¿t, Ä‘áº§y Ä‘á»§, dá»… hiá»ƒu nháº¥t Ä‘á»ƒ báº¡n cÃ³ thá»ƒ tá»± Ä‘á»c báº£n Ä‘á»“ sao Ä‘áº§u tiÃªn táº¡i Viá»‡t Nam. Äáº¿n tá»« tÃ¡c giáº£ lÃ  chiÃªm tinh gia chuyÃªn nghiá»‡p vá»›i gáº§n 20 nÄƒm nghiÃªn cá»©u, cuá»‘n sÃ¡ch Ä‘Æ°á»£c thiáº¿t káº¿ Ä‘á»ƒ ai cÅ©ng cÃ³ thá»ƒ tá»± xem báº£n Ä‘á»“ sao.  â€œChiÃªm tinh há»c vá» cÆ¡ báº£n lÃ  má»™t ngÃ´n ngá»¯. MÃ  khi ta thÃ´ng hiá»ƒu ngÃ´n ngá»¯ nÃ y, cáº£ báº§u trá»i sáº½ báº¯t Ä‘áº§u nÃ³i chuyá»‡n vá»›i taâ€ - Dane Rudhyar  ChiÃªm tinh há»c nháº­p mÃ´n - KhÃ¡m phÃ¡ báº£n thÃ¢n qua ngÃ´n ngá»¯ cá»§a cÃ¡c chÃ²m sao!','NXB Thanh NiÃªn');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (3116,5,'SQL Server 2008 - HÆ°Æ¡Ìng DÃ¢Ìƒn HoÌ£c Qua ViÌ DuÌ£ (Murach\'s SQL Server 2008 for Developers)',50000,60000,5,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','N.Q HÆ°ng','SQL Server 2008 - HÆ°Æ¡Ìng DÃ¢Ìƒn HoÌ£c Qua ViÌ DuÌ£ (Murach\'s SQL Server 2008 for Developers)  CÆ¡ sá»Ÿ dá»¯ liá»‡u giá»¯ má»™t vai trÃ² quan trá»ng trong há»‡ thá»‘ng thÃ´ng tin cá»§a cÃ¡c tá»• chá»©c, doanh nghiá»‡p. ChÃ­nh vÃ¬ láº½ Ä‘Ã³ mÃ  mÃ´n há»c cÆ¡ sá»Ÿ dá»¯ liá»‡u Ä‘Ã£ Ä‘Æ°á»£c cÃ¡c trÆ°á»ng Äáº¡i há»c, Cao Ä‘áº³ng Ä‘Æ°a vÃ o giáº£ng dáº¡y nháº±m cung cáº¥p nhá»¯ng kiáº¿n thá»©c ná»n táº£ng cho cÃ¡c sinh viÃªn ngÃ nh cÃ´ng nghá»‡ thÃ´ng tin.  Cuá»‘n sÃ¡ch SQL Server 2008 - HÆ°á»›ng dáº«n há»c qua vÃ­ dá»¥ Ä‘Ã£ Ä‘Æ°á»£c TrÆ°á»ng Äáº¡i há»c FPT chá»n dá»‹ch tá»« áº¥n báº£n gá»‘c Murach\'s SQL Server 2008 for Developers theo triáº¿t lÃ½ Thá»±c há»c - Thá»±c nghiá»‡m vÃ  Ä‘Äƒng kÃ½ Ä‘á»™c quyá»n phÃ¡t hÃ nh táº¡i Viá»‡t Nam. ÄÆ°á»£c phÃ¡t hÃ ng bá»Ÿi nhÃ  sáº£n xuáº¥t Mike Murach &amp; Associates - chuyÃªn vá» dÃ²ng sÃ¡ch láº­p trÃ¬nh vÃ  cÆ¡ sá»Ÿ dá»¯ liá»‡u, cuá»‘n sÃ¡ch há»©a háº¹n sáº½ cung cáº¥p nhá»¯ng kiáº¿n thá»©c há»¯u Ã­ch vá» SQL Server, má»™t trong nhá»¯ng há»‡ quáº£n trá»‹ cÆ¡ sá»Ÿ dá»¯ liá»‡u phá»‘ biáº¿n táº¡i doanh nghiá»‡p.  Bá»‘ cá»¥c má»—i ká»¹ nÄƒng chia lÃ m hai pháº§n rÃµ rá»‡t: BÃªn pháº£i nÃªu cÃº phÃ¡p, vÃ­ dá»¥, chá»‰ dáº«n vÃ  tÃ³m lÆ°á»£c ká»¹ nÄƒng, bÃªn trÃ¡i diá»…n giáº£i vÃ  má»Ÿ rá»™ng kiáº¿n thá»©c, giÃºp báº¡n tiáº¿t kiá»‡m Ä‘Æ°á»£c thá»i gian vÃ  cÃ´ng sá»©c há»c táº­p. NgoÃ i nhá»¯ng kiáº¿n thá»©c liÃªn quan Ä‘áº¿n há»‡ quáº£n trá»‹ cÆ¡ sá»Ÿ dá»¯ liá»‡u SQL Server, cuá»‘n sÃ¡ch cÃ²n Ä‘Æ°á»£c cung cáº¥p kiáº¿n thá»©c vá» SQL chuáº©n, giÃºp báº¡n dá»… dÃ ng Ã¡p dá»¥ng sang cÃ¡c há»‡ quáº£n trá»‹ khÃ¡c. NgoÃ i ra, sÃ¡ch cÃ²n hÆ°á»›ng dáº«n cÃ¡c kiáº¿n thá»©c cÆ¡ sá»Ÿ vá» thiáº¿t káº¿, cÃ i Ä‘áº·t, báº£o trÃ¬ vÃ  báº£o máº­t cÆ¡ sá»Ÿ dá»¯ liá»‡u, giÃºp trang bá»‹ kiáº¿n thá»©c vá»¯ng cháº¯c cho báº¡n Ä‘á»ƒ trá»Ÿ thÃ nh nhá»¯ng nhÃ  phÃ¡t triá»ƒn há»‡ thá»‘ng, quáº£n trá»‹ viÃªn cÆ¡ sá»Ÿ dá»¯ liá»‡u tÆ°Æ¡ng lai.  MÆ¡Ì€i baÌ£n Ä‘oÌn Ä‘oÌ£c.','BCVT');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (3838,4,'Blockchain VÃ  Äáº§u TÆ° ICOs CÄƒn Báº£n - Con ÄÆ°á»ng Tá»›i Tá»± Do TÃ i ChÃ­nh',200000,250000,10,'Hiá»‡n nay, thuáº­t ngá»¯ Blockchain Ä‘Ã£ trá»Ÿ thÃ nh tá»« khÃ³a tÃ¬m kiáº¿m phá»• biáº¿n táº¡i Viá»‡t Nam. Tuy nhiÃªn háº§u háº¿t cÃ¡c tÃ i liá»‡u lÃ  nÆ°á»›c ngoÃ i vÃ  gÃ¢y khÃ³ khÄƒn cho Ä‘á»™c giáº£ trong viá»‡c tiáº¿p cáº­n. VÃ¬ sá»± phÃ¡t triá»ƒn ','David Nguyá»…n, LÆ°u Tháº¿ Lá»£i','Hiá»‡n nay, thuáº­t ngá»¯ Blockchain Ä‘Ã£ trá»Ÿ thÃ nh tá»« khÃ³a tÃ¬m kiáº¿m phá»• biáº¿n táº¡i Viá»‡t Nam. Tuy nhiÃªn háº§u háº¿t cÃ¡c tÃ i liá»‡u lÃ  nÆ°á»›c ngoÃ i vÃ  gÃ¢y khÃ³ khÄƒn cho Ä‘á»™c giáº£ trong viá»‡c tiáº¿p cáº­n. VÃ¬ sá»± phÃ¡t triá»ƒn cá»§a Blockchain Viá»‡t Nam vÃ  vá»›i má»¥c tiÃªu chia sáº» kiáº¿n thá»©c vá»›i cá»™ng Ä‘á»“ng, trang bá»‹ kiáº¿n thá»©c cho cÃ¡c nhÃ  Ä‘áº§u tÆ° tráº» trong thá»‹ trÆ°á»ng tiá»n tá»‡ sá»‘, Satoshi Hunters And Rocking Experts phá»‘i há»£p vá»›i NhÃ  xuáº¥t báº£n Thanh NiÃªn xuáº¥t báº£n cuá»‘n sÃ¡ch mang tÃªn â€œBlockchain vÃ  Ä‘áº§u tÆ° ICOs cÄƒn báº£nâ€.','NXB Thanh NiÃªn');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (4246,3,'Tá»« Äiá»ƒn ThiÃªn VÄƒn Há»c VÃ  Váº­t LÃ½ ThiÃªn VÄƒn',125000,156000,5,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','Ngoc Anh','Tá»« Äiá»ƒn ThiÃªn VÄƒn Há»c VÃ  Váº­t LÃ½ ThiÃªn VÄƒn Ä‘Æ°á»£c nhÃ³m tÃ¡c giáº£ thá»±c hiá»‡n Ä‘á»“ng thá»i hai má»¥c Ä‘Ã­ch song song lÃ  Ä‘Æ°a tá»›i kiáº¿n thá»©c chÃ­nh xÃ¡c vÃ  tÆ°Æ¡ng Ä‘á»‘i Ä‘áº§y Ä‘á»§, dá»… hiá»ƒu cho ngÆ°á»i Ä‘á»c vá» cÃ¡c Ä‘á»‘i tÆ°á»£ng chÃ­nh cá»§a thiÃªn vÄƒn há»c vÃ  váº­t lÃ½ thiÃªn vÄƒn, Ä‘á»“ng thá»i Ä‘Æ°a tá»›i sá»± chuáº©n xÃ¡c vÃ  thá»‘ng nháº¥t trong viá»‡c sá»­ dá»¥ng cÃ¡c thuáº­t ngá»¯ cáº£ dÆ°á»›i dáº¡ng tiáº¿ng Viá»‡t cÅ©ng nhÆ° dáº¡ng nguyÃªn thá»ƒ Ä‘Æ°á»£c quá»‘c táº¿ thá»«a nháº­n.  Äá»ƒ há»— trá»£ Ä‘á»™c giáº£ trong viá»‡c theo dÃµi vÃ  Ä‘á»‘i chiá»u cÃ¡c tÃ i liá»‡u, website nÆ°á»›c ngoÃ i, nhÃ³m tÃ¡c giáº£ Ä‘áº·t táº¥t cáº£ cÃ¡c thuáº­t ngá»¯ tiáº¿ng Anh tÆ°Æ¡ng á»©ng táº¡i má»—i khÃ¡i niá»‡m tiáº¿ng Viá»‡t, cÅ©ng nhÆ° giá»¯ nguyÃªn cÃ¡c danh tá»« riÃªng gá»“m tÃªn cÃ¡c tiá»ƒu hÃ nh tinh, vá»‡ tinh, sao chá»•i, chÃ²m sao... (trá»« Máº·t Trá»i, Máº·t TrÄƒng vÃ  cÃ¡c hÃ nh tinh lÃ  nhá»¯ng cÃ¡i tÃªn Ä‘Ã£ Ä‘Æ°á»£c dÃ¹ng rá»™ng rÃ£i trong Tiáº¿ng Viá»‡t Ä‘á»“ng thá»i khÃ´ng gÃ¢y hiá»ƒu nháº§m vá» máº·t Ã½ nghÄ©a). NhÃ³m tÃ¡c giáº£ cÅ©ng cá»‘ gáº¯ng cáº­p nháº­t thÃ´ng tin má»›i nháº¥t vá» cÃ¡c nghiÃªn cá»©u tÃ­nh tá»›i thá»i Ä‘iá»ƒm trÆ°á»›c khi tá»« Ä‘iá»ƒn Ä‘Æ°á»£c phÃ¡t hÃ nh bá»Ÿi lÄ©nh vá»±c nÃ y, nhÆ° Ä‘Ã£ nÃ³i, hiá»‡n nay cÃ³ tá»‘c Ä‘á»™ phÃ¡t triá»ƒn ráº¥t nhanh. CÃ¡c nghiÃªn cá»©u má»›i sau thá»i Ä‘iá»ƒm nÃªu trÃªn cÃ³ thá»ƒ dáº«n tá»›i sá»± bá»• sung trong nhá»¯ng láº§n chá»‰nh lÃ­ vÃ  tÃ¡i báº£n tiáº¿p theo.','BCVT');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (4280,4,'Cuá»™c CÃ¡ch Máº¡ng Blockchain',340000,350000,10,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','Alex Tapscott, Don Tapscott','CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.  Tháº¿ há»‡ thá»© nháº¥t cá»§a cuá»™c cÃ¡ch máº¡ng sá»‘ hÃ³a Ä‘Ã£ Ä‘Æ°a chÃºng ta Ä‘áº¿n vá»›i ká»· nguyÃªn Internet cá»§a thÃ´ng tin. Tháº¿ há»‡ thá»© hai â€“ Ä‘Æ°á»£c tiáº¿p sá»©c bá»Ÿi cÃ´ng nghá»‡ blockchain â€“ Ä‘ang Ä‘Æ°a chÃºng ta Ä‘áº¿n vá»›i Internet cá»§a giÃ¡ trá»‹: má»™t ná»n táº£ng phi táº­p trung má»›i máº», thá»© cÃ³ thá»ƒ giÃºp chÃºng ta tÃ¡i Ä‘á»‹nh hÃ¬nh ngÃ nh kinh doanh vÃ  thay Ä‘á»•i cÃ¡ch thá»©c hoáº¡t Ä‘á»™ng cá»§a con ngÆ°á»i theo hÆ°á»›ng tá»‘t hÆ¡n.  Cuá»™c cÃ¡ch máº¡ng Blockchain lÃ  cuá»‘n sÃ¡ch lÃ½ giáº£i tiá»m nÄƒng kiáº¿n táº¡o tÆ°Æ¡ng lai nhÃ¢n loáº¡i cá»§a cÃ´ng nghá»‡ blockchain. Cuá»‘n sÃ¡ch lÃ  cÃ´ng trÃ¬nh Ä‘Æ°á»£c nghiÃªn cá»©u ká»¹ lÆ°á»¡ng vá»›i lá»‘i trÃ¬nh bÃ y gáº§n gÅ©i dá»… hiá»ƒu, phÃ¹ há»£p vá»›i cáº£ nhá»¯ng ngÆ°á»i chuyÃªn vÃ  khÃ´ng chuyÃªn vá» cÃ´ng nghá»‡','');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (4326,4,'Sách vật lý',143000,179000,5,'â€œNáº¿u má»™t Ã½ tÆ°á»Ÿng nghe chá»«ng khÃ´ng cÃ³ gÃ¬ ngá»› ngáº©n thÃ¬ Ä‘á»«ng mong cÃ³ hy vá»ng gÃ¬ cho nÃ³.â€ â€“ Albert Einstein','Michio Kaku','â€œNáº¿u má»™t Ã½ tÆ°á»Ÿng nghe chá»«ng khÃ´ng cÃ³ gÃ¬ ngá»› ngáº©n thÃ¬ Ä‘á»«ng mong cÃ³ hy vá»ng gÃ¬ cho nÃ³.â€ â€“ Albert Einstein  Trong Váº­t lÃ½ cá»§a nhá»¯ng Ä‘iá»u tÆ°á»Ÿng chá»«ng báº¥t kháº£, nhÃ  váº­t lÃ½ Michio Kaku khÃ¡m phÃ¡ kháº£ nÄƒng Ä‘Æ°a nhá»¯ng cÃ´ng nghá»‡ vÃ  thiáº¿t bá»‹ tá»« lÃ£nh Ä‘á»‹a cá»§a khoa há»c viá»…n tÆ°á»Ÿng vÃ o cuá»™c sá»‘ng thÆ°á»ng nháº­t trong tÆ°Æ¡ng lai.  Báº±ng lá»‘i dáº«n chuyá»‡n lÃ´i cuá»‘n vÃ  khÆ¡i gá»£i trÃ­ tÃ² mÃ², Kaku Ä‘Æ°a chÃºng ta theo má»™t hÃ nh trÃ¬nh khÃ³ quÃªn Ä‘áº§y mÃª hoáº·c cá»§a cÃ¡c chÃ¹m tia há»§y diá»‡t, trÆ°á»ng lá»±c, Ã¡o khoÃ¡c tÃ ng hÃ¬nh Ä‘áº¿n du hÃ nh thá»i gianâ€¦ DÃ¹ pháº£i chá» thÃªm hÃ ng tháº¿ ká»· hay kháº£ thi ngay trong vÃ i tháº­p ká»· tá»›i, háº³n báº¡n sáº½ báº¥t ngá» khi biáº¿t nhá»¯ng Ä‘iá»u ngá»¡ â€œviá»…n tÆ°á»Ÿngâ€ nÃ y, tháº­t ra, láº¡i trong táº§m vá»›i cá»§a khoa há»c','BCVT');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (4704,4,'CÃ¡ch Máº¡ng CÃ´ng Nghá»‡ 4.0 (ChuyÃªn Äá» 2 - ThÃ¡ng 4/2018)',550000,560000,15,'Cuá»‘n táº¡p chÃ­ kinh táº¿ CÃ¡ch Máº¡ng CÃ´ng Nghá»‡ 4.0 Ä‘á»“ng hÃ nh cÃ¹ng Ä‘á»™c giáº£ Ä‘á»ƒ Ä‘Æ°a Ä‘áº¿n cho cÃ¡c báº¡n nhá»¯ng kiáº¿n thá»©c cÅ©ng nhÆ° tráº£i nghiá»‡m má»›i nháº¥t vá» cÃ´ng nghá»‡, cÃ¹ng hÆ°á»›ng tá»›i nhá»¯ng má»¥c tiÃªu:','Nhiá»u tÃ¡c giáº£','Cuá»‘n táº¡p chÃ­ kinh táº¿ CÃ¡ch Máº¡ng CÃ´ng Nghá»‡ 4.0 Ä‘á»“ng hÃ nh cÃ¹ng Ä‘á»™c giáº£ Ä‘á»ƒ Ä‘Æ°a Ä‘áº¿n cho cÃ¡c báº¡n nhá»¯ng kiáº¿n thá»©c cÅ©ng nhÆ° tráº£i nghiá»‡m má»›i nháº¥t vá» cÃ´ng nghá»‡, cÃ¹ng hÆ°á»›ng tá»›i nhá»¯ng má»¥c tiÃªu:  - Ná»— lá»±c trá»Ÿ thÃ nh áº¥n pháº©m cÃ´ng nghá»‡ cÃ³ uy tÃ­n vÃ  vá»‹ tháº¿ hÃ ng Ä‘áº§u táº¡i Viá»‡t Nam  - XÃ¢y dá»±ng má»™t cá»™ng Ä‘á»“ng Ä‘am mÃª cÃ´ng nghá»‡ vÃ  Ä‘áº§u tÆ° thÃ´ng minh  - GÃ³p pháº§n nÃ¢ng cao hiá»ƒu biáº¿t cá»§a cá»™ng Ä‘á»“ng vÃ  nÃ¢ng cao vá»‹ tháº¿ cá»§a ngÆ°á»i Viá»‡t trong cÃ´ng nghá»‡ Blockchain nÃ³i riÃªng vÃ  cÃ´ng nghá»‡ 4.0 nÃ³i chung trÃªn trÆ°á»ng quá»‘c táº¿','NXB Thanh NiÃªn');
insert  into `item`(`id`,`id_cat`,`name_item`,`price`,`price_maket`,`quantity`,`item_sortdesc`,`author`,`item_desc`,`manufacturer`) values (4877,4,'Giáº£i MÃ£ Tiá»n Tá»‡ MÃ£ HÃ³a',160000,200000,50,'CÃ´ng nghá»‡ cÃ³ thá»ƒ tÃ¡c Ä‘á»™ng lá»›n Ä‘áº¿n tÆ°Æ¡ng lai cá»§a ná»n kinh táº¿ tháº¿ giá»›i Ä‘Ã£ xuáº¥t hiá»‡n, Ä‘Ã³ khÃ´ng pháº£i lÃ  Ã´ tÃ´ tá»± lÃ¡i, lÃ  nÄƒng lÆ°á»£ng máº·t trá»i hay trÃ­ thÃ´ng minh nhÃ¢n táº¡o. ÄÃ³ chÃ­nh lÃ  Blockchain.Tháº¿','Leng Hoe Lon','Liá»‡u chÃºng ta cÃ³ thá»ƒ nÃªn lÆ°u Ã½ cuá»‘n sÃ¡ch nÃ y Ä‘Æ°á»£c viáº¿t bá»Ÿi má»™t nhÃ  quáº£n lÃ½ tiá»n tá»‡ giÃ u kinh nghiá»‡m trong cÃ¡c tá»• chá»©c cáº¥p cao, ngÆ°á»i mÃ  ngoÃ i cÃ´ng viá»‡c thÆ°á»ng ngÃ y cÅ©ng ráº¥t quan tÃ¢m chÃº Ã½ Ä‘áº¿n tiá»n mÃ£ hÃ³a? TÃ´i chÆ°a tá»«ng Ä‘á»c báº¥t kÃ¬ cuá»‘n sÃ¡ch nÃ o mÃ´ táº£ cÃ´ Ä‘á»ng báº£n cháº¥t cá»§a blockchain vÃ  triáº¿t lÃ½ Ä‘áº±ng sau má»™t cÃ¡ch dá»… hiá»ƒu, dá»… tiáº¿p thu nhÆ° váº­y. Báº¥t kÃ¬ ai muá»‘n cÃ³ ná»n táº£ng hiá»ƒu biáº¿t ban Ä‘áº§u vá» tháº¿ giá»›i kÃ¬ thÃº nÃ y mÃ  khÃ´ng pháº£i cáº£m tháº¥y Ä‘ang Ä‘á»c sÃ¡ch giÃ¡o khoa nÃªn xem cuá»‘n sÃ¡ch nÃ y. Báº¥t kÃ¬ ai muá»‘n Ä‘Æ°á»£c nháº¯c nhá»Ÿ vÃ  truyá»n thÃªm Ä‘á»™ng lá»±c cho viá»‡c táº¡i sao há» dáº«n thÃ¢n vÃ o kinh doanh tiá»n mÃ£ hÃ³a cÅ©ng nÃªn Ä‘á»c nÃ³. Báº£n thÃ¢n tÃ´i cÅ©ng tháº¿â€.   Cuá»‘n sÃ¡ch dÃ nh táº·ng cho nhá»¯ng ngÆ°á»i tin vÃ o tháº¿ giá»›i má»›i cá»§a tiá»n tá»‡ mÃ£ hÃ³a má»™t mÃ³n quÃ  Ä‘áº·c biá»‡t','NXB Thanh NiÃªn');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birdthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('admin','45fbeb1303b9cb2626207cd960f59683',1,'admin','khacdiep150598@gmail.com','VP','1998','0373256298','sp admin',1);
insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('minh','e10adc3949ba59abbe56e057f20f883e',0,'Minh','ghgf@gmail.com',NULL,'1574692824','345895265',NULL,3);
insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('admin','45fbeb1303b9cb2626207cd960f59683',0,'sada','ghgf@gmail.com',NULL,'1574738173','345895265',NULL,4);
insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('admin','45fbeb1303b9cb2626207cd960f59683',0,'ythjhgj','ghgf@gmail.com',NULL,'1574738690','345895265',NULL,5);
insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('diep','e10adc3949ba59abbe56e057f20f883e',0,'diep','kacdiep1@gmail.com',NULL,'1574738861','345895265',NULL,6);
insert  into `user`(`user_name`,`password`,`role`,`name`,`email`,`address`,`birdthday`,`phone`,`description`,`id`) values ('chinh','e10adc3949ba59abbe56e057f20f883e',0,'Nguyen Van Chinh','chinh@gmail.com',NULL,'1575291901','012358795',NULL,7);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
