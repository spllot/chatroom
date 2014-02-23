-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 22 日 15:25
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `chatroom`
--

-- --------------------------------------------------------

--
-- 表的结构 `ch_area_level1`
--

CREATE TABLE IF NOT EXISTS `ch_area_level1` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '一级地区ID',
  `aname` varchar(100) NOT NULL COMMENT '一级地区名称',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_area_level1`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_area_level2`
--

CREATE TABLE IF NOT EXISTS `ch_area_level2` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '二级地区ID',
  `aname` varchar(100) NOT NULL COMMENT '二级地区名称',
  `level1_aid` int(10) NOT NULL COMMENT '一级地区ID',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_area_level2`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_charge`
--

CREATE TABLE IF NOT EXISTS `ch_charge` (
  `cid` int(10) NOT NULL COMMENT '自增ID',
  `charge_time` varchar(100) NOT NULL COMMENT '充值或扣点时间',
  `uid` int(10) NOT NULL COMMENT '被充值用户的Id',
  `add_point` float NOT NULL COMMENT '充值点数',
  `minus_point` float NOT NULL COMMENT '扣点点数',
  `remain_point` float NOT NULL COMMENT '剩余点数',
  `operator` int(10) NOT NULL COMMENT '操作者ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ch_charge`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_chat`
--

CREATE TABLE IF NOT EXISTS `ch_chat` (
  `cid` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uid1` int(10) NOT NULL COMMENT '聊天会员ID',
  `uid2` int(10) NOT NULL COMMENT '被聊天会员ID',
  `content` varchar(800) NOT NULL COMMENT '聊天内容',
  `create_time` varchar(100) NOT NULL COMMENT '聊天时间',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_chat`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_evaluate`
--

CREATE TABLE IF NOT EXISTS `ch_evaluate` (
  `eid` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uid1` int(10) NOT NULL COMMENT '评论会员ID',
  `uid2` int(10) NOT NULL COMMENT '被评论会员ID',
  `content` varchar(800) NOT NULL COMMENT '评论内容',
  `create_time` varchar(100) NOT NULL COMMENT '评论时间',
  `rank` int(10) NOT NULL COMMENT '评论等级',
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_evaluate`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_friends`
--

CREATE TABLE IF NOT EXISTS `ch_friends` (
  `fid` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uid1` int(11) NOT NULL COMMENT '会员ID',
  `uid2` int(11) NOT NULL COMMENT '会员ID1的好友ID',
  `create_time` varchar(100) NOT NULL COMMENT '成为好友的时间',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_friends`
--


-- --------------------------------------------------------

--
-- 表的结构 `ch_user`
--

CREATE TABLE IF NOT EXISTS `ch_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键，自增ID',
  `name` varchar(100) NOT NULL COMMENT '用户名',
  `pass` varchar(100) NOT NULL COMMENT '密码',
  `nick` varchar(100) NOT NULL COMMENT '昵称',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `imgurl` varchar(500) NOT NULL COMMENT '头像地址',
  `area_level1_id` int(10) NOT NULL COMMENT '一级地区ID',
  `area_level2_id` int(10) NOT NULL COMMENT '二级地区ID',
  `type` int(10) NOT NULL COMMENT '会员类型（一般会员、聊天会员）',
  `rank` int(10) NOT NULL COMMENT '会员级别（聊天级别：成人级等）',
  `info` text NOT NULL COMMENT '自我简介（年纪、性别）',
  `introduction` text NOT NULL COMMENT '自我介绍',
  `point` float NOT NULL COMMENT '现有点数',
  `reg_time` varchar(100) NOT NULL COMMENT '用户注册时间',
  `last_login_time` varchar(100) NOT NULL COMMENT '上次登录时间',
  `chat_time_limit` int(10) NOT NULL COMMENT '聊天次数限定',
  `chat_one_time_fee` float NOT NULL COMMENT '每一次聊天费用',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `ch_user`
--

insert into ch_user values(1,'張三','e10adc3949ba59abbe56e057f20f883e','spllot','spllot@163.com','',1,1,1,1,'個人介紹信息','個人簡介信息',0,'','',10,0);

insert into ch_area_level1 values(1,'臺北巿');
insert into ch_area_level2 values(null,'松山區',1);
insert into ch_area_level2 values(null,'大安區',1);
insert into ch_area_level2 values(null,'中正區',1);
insert into ch_area_level2 values(null,'萬華區',1);
insert into ch_area_level2 values(null,'大同區',1);
insert into ch_area_level2 values(null,'中山區',1);
insert into ch_area_level2 values(null,'文山區',1);
insert into ch_area_level2 values(null,'南港區',1);
insert into ch_area_level2 values(null,'內湖區',1);
insert into ch_area_level2 values(null,'士林區',1);
insert into ch_area_level2 values(null,'北投區',1);
insert into ch_area_level2 values(null,'信義區',1);
insert into ch_area_level1 values(2,'臺中巿');
insert into ch_area_level2 values(null,'中區',2);
insert into ch_area_level2 values(null,'東區',2);
insert into ch_area_level2 values(null,'西區',2);
insert into ch_area_level2 values(null,'南區',2);
insert into ch_area_level2 values(null,'北區',2);
insert into ch_area_level2 values(null,'西屯區',2);
insert into ch_area_level2 values(null,'南屯區',2);
insert into ch_area_level2 values(null,'北屯區',2);
insert into ch_area_level2 values(null,'豐原區',2);
insert into ch_area_level2 values(null,'東勢區',2);
insert into ch_area_level2 values(null,'大甲區',2);
insert into ch_area_level2 values(null,'清水區',2);
insert into ch_area_level2 values(null,'沙鹿區',2);
insert into ch_area_level2 values(null,'梧棲區',2);
insert into ch_area_level2 values(null,'神岡區',2);
insert into ch_area_level2 values(null,'后里區',2);
insert into ch_area_level2 values(null,'大雅區',2);
insert into ch_area_level2 values(null,'潭子區',2);
insert into ch_area_level2 values(null,'新社區',2);
insert into ch_area_level2 values(null,'石岡區',2);
insert into ch_area_level2 values(null,'外埔區',2);
insert into ch_area_level2 values(null,'大安區',2);
insert into ch_area_level2 values(null,'烏日區',2);
insert into ch_area_level2 values(null,'大肚區',2);
insert into ch_area_level2 values(null,'龍井區',2);
insert into ch_area_level2 values(null,'霧峰區',2);
insert into ch_area_level2 values(null,'太平區',2);
insert into ch_area_level2 values(null,'大里區',2);
insert into ch_area_level2 values(null,'和平區',2);
insert into ch_area_level1 values(3,'基隆巿');
insert into ch_area_level2 values(null,'中正區',3);
insert into ch_area_level2 values(null,'七堵區',3);
insert into ch_area_level2 values(null,'暖暖區',3);
insert into ch_area_level2 values(null,'仁愛區',3);
insert into ch_area_level2 values(null,'中山區',3);
insert into ch_area_level2 values(null,'安樂區',3);
insert into ch_area_level2 values(null,'信義區',3);
insert into ch_area_level1 values(4,'臺南巿');
insert into ch_area_level2 values(null,'東區',4);
insert into ch_area_level2 values(null,'南區',4);
insert into ch_area_level2 values(null,'北區',4);
insert into ch_area_level2 values(null,'安南區',4);
insert into ch_area_level2 values(null,'安平區',4);
insert into ch_area_level2 values(null,'中西區',4);
insert into ch_area_level2 values(null,'新營區',4);
insert into ch_area_level2 values(null,'鹽水區',4);
insert into ch_area_level2 values(null,'白河區',4);
insert into ch_area_level2 values(null,'柳營區',4);
insert into ch_area_level2 values(null,'後壁區',4);
insert into ch_area_level2 values(null,'東山區',4);
insert into ch_area_level2 values(null,'麻豆區',4);
insert into ch_area_level2 values(null,'下營區',4);
insert into ch_area_level2 values(null,'六甲區',4);
insert into ch_area_level2 values(null,'官田區',4);
insert into ch_area_level2 values(null,'大內區',4);
insert into ch_area_level2 values(null,'佳里區',4);
insert into ch_area_level2 values(null,'西港區',4);
insert into ch_area_level2 values(null,'七股區',4);
insert into ch_area_level2 values(null,'將軍區',4);
insert into ch_area_level2 values(null,'北門區',4);
insert into ch_area_level2 values(null,'學甲區',4);
insert into ch_area_level2 values(null,'新化區',4);
insert into ch_area_level2 values(null,'善化區',4);
insert into ch_area_level2 values(null,'新巿區',4);
insert into ch_area_level2 values(null,'安定區',4);
insert into ch_area_level2 values(null,'山上區',4);
insert into ch_area_level2 values(null,'玉井區',4);
insert into ch_area_level2 values(null,'楠西區',4);
insert into ch_area_level2 values(null,'南化區',4);
insert into ch_area_level2 values(null,'左鎮區',4);
insert into ch_area_level2 values(null,'仁德區',4);
insert into ch_area_level2 values(null,'歸仁區',4);
insert into ch_area_level2 values(null,'關廟區',4);
insert into ch_area_level2 values(null,'龍崎區',4);
insert into ch_area_level2 values(null,'永康區',4);
insert into ch_area_level1 values(5,'高雄巿');
insert into ch_area_level2 values(null,'鹽埕區',5);
insert into ch_area_level2 values(null,'鼓山區',5);
insert into ch_area_level2 values(null,'左營區',5);
insert into ch_area_level2 values(null,'楠梓區',5);
insert into ch_area_level2 values(null,'三民區',5);
insert into ch_area_level2 values(null,'新興區',5);
insert into ch_area_level2 values(null,'前金區',5);
insert into ch_area_level2 values(null,'苓雅區',5);
insert into ch_area_level2 values(null,'前鎮區',5);
insert into ch_area_level2 values(null,'旗津區',5);
insert into ch_area_level2 values(null,'小港區',5);
insert into ch_area_level2 values(null,'鳳山區',5);
insert into ch_area_level2 values(null,'鳥松區',5);
insert into ch_area_level2 values(null,'仁武區',5);
insert into ch_area_level2 values(null,'大社區',5);
insert into ch_area_level2 values(null,'大樹區',5);
insert into ch_area_level2 values(null,'大寮區',5);
insert into ch_area_level2 values(null,'林園區',5);
insert into ch_area_level2 values(null,'岡山區',5);
insert into ch_area_level2 values(null,'茄萣區',5);
insert into ch_area_level2 values(null,'永安區',5);
insert into ch_area_level2 values(null,'橋頭區',5);
insert into ch_area_level2 values(null,'梓官區',5);
insert into ch_area_level2 values(null,'田寮區',5);
insert into ch_area_level2 values(null,'阿蓮區',5);
insert into ch_area_level2 values(null,'路竹區',5);
insert into ch_area_level2 values(null,'燕巢區',5);
insert into ch_area_level2 values(null,'彌陀區',5);
insert into ch_area_level2 values(null,'湖內區',5);
insert into ch_area_level2 values(null,'旗山區',5);
insert into ch_area_level2 values(null,'六龜區',5);
insert into ch_area_level2 values(null,'內門區',5);
insert into ch_area_level2 values(null,'美濃區',5);
insert into ch_area_level2 values(null,'杉林區',5);
insert into ch_area_level2 values(null,'甲仙區',5);
insert into ch_area_level2 values(null,'茂林區',5);
insert into ch_area_level2 values(null,'桃源區',5);
insert into ch_area_level2 values(null,'那瑪夏區',5);
insert into ch_area_level1 values(6,'新北市');
insert into ch_area_level2 values(null,'新莊區',6);
insert into ch_area_level2 values(null,'林口區',6);
insert into ch_area_level2 values(null,'五股區',6);
insert into ch_area_level2 values(null,'蘆洲區',6);
insert into ch_area_level2 values(null,'三重區',6);
insert into ch_area_level2 values(null,'泰山區',6);
insert into ch_area_level2 values(null,'新店區',6);
insert into ch_area_level2 values(null,'石碇區',6);
insert into ch_area_level2 values(null,'深坑區',6);
insert into ch_area_level2 values(null,'坪林區',6);
insert into ch_area_level2 values(null,'烏來區',6);
insert into ch_area_level2 values(null,'板橋區',6);
insert into ch_area_level2 values(null,'三峽區',6);
insert into ch_area_level2 values(null,'鶯歌區',6);
insert into ch_area_level2 values(null,'樹林區',6);
insert into ch_area_level2 values(null,'中和區',6);
insert into ch_area_level2 values(null,'土城區',6);
insert into ch_area_level2 values(null,'瑞芳區',6);
insert into ch_area_level2 values(null,'平溪區',6);
insert into ch_area_level2 values(null,'雙溪區',6);
insert into ch_area_level2 values(null,'貢寮區',6);
insert into ch_area_level2 values(null,'金山區',6);
insert into ch_area_level2 values(null,'萬里區',6);
insert into ch_area_level2 values(null,'淡水區',6);
insert into ch_area_level2 values(null,'汐止區',6);
insert into ch_area_level2 values(null,'三芝區',6);
insert into ch_area_level2 values(null,'石門區',6);
insert into ch_area_level2 values(null,'八里區',6);
insert into ch_area_level2 values(null,'永和區',6);
insert into ch_area_level1 values(7,'宜蘭縣');
insert into ch_area_level2 values(null,'宜蘭巿',7);
insert into ch_area_level2 values(null,'頭城鎮',7);
insert into ch_area_level2 values(null,'礁溪鄉',7);
insert into ch_area_level2 values(null,'壯圍鄉',7);
insert into ch_area_level2 values(null,'員山鄉',7);
insert into ch_area_level2 values(null,'羅東鎮',7);
insert into ch_area_level2 values(null,'五結鄉',7);
insert into ch_area_level2 values(null,'冬山鄉',7);
insert into ch_area_level2 values(null,'蘇澳鎮',7);
insert into ch_area_level2 values(null,'三星鄉',7);
insert into ch_area_level2 values(null,'大同鄉',7);
insert into ch_area_level2 values(null,'南澳鄉',7);
insert into ch_area_level1 values(8,'桃園縣');
insert into ch_area_level2 values(null,'桃園巿',8);
insert into ch_area_level2 values(null,'大溪鎮',8);
insert into ch_area_level2 values(null,'中壢巿',8);
insert into ch_area_level2 values(null,'楊梅市',8);
insert into ch_area_level2 values(null,'蘆竹鄉',8);
insert into ch_area_level2 values(null,'大園鄉',8);
insert into ch_area_level2 values(null,'龜山鄉',8);
insert into ch_area_level2 values(null,'八德市',8);
insert into ch_area_level2 values(null,'龍潭鄉',8);
insert into ch_area_level2 values(null,'平鎮市',8);
insert into ch_area_level2 values(null,'新屋鄉',8);
insert into ch_area_level2 values(null,'觀音鄉',8);
insert into ch_area_level2 values(null,'復興鄉',8);
insert into ch_area_level1 values(9,'嘉義巿');
insert into ch_area_level2 values(null,'嘉義巿',9);
insert into ch_area_level1 values(10,'新竹縣');
insert into ch_area_level2 values(null,'竹東鎮',10);
insert into ch_area_level2 values(null,'關西鎮',10);
insert into ch_area_level2 values(null,'新埔鎮',10);
insert into ch_area_level2 values(null,'竹北市',10);
insert into ch_area_level2 values(null,'湖口鄉',10);
insert into ch_area_level2 values(null,'橫山鄉',10);
insert into ch_area_level2 values(null,'新豐鄉',10);
insert into ch_area_level2 values(null,'芎林鄉',10);
insert into ch_area_level2 values(null,'寶山鄉',10);
insert into ch_area_level2 values(null,'北埔鄉',10);
insert into ch_area_level2 values(null,'峨眉鄉',10);
insert into ch_area_level2 values(null,'尖石鄉',10);
insert into ch_area_level2 values(null,'五峰鄉',10);
insert into ch_area_level1 values(11,'苗栗縣');
insert into ch_area_level2 values(null,'苗栗巿',11);
insert into ch_area_level2 values(null,'苑裡鎮',11);
insert into ch_area_level2 values(null,'通霄鎮',11);
insert into ch_area_level2 values(null,'公館鄉',11);
insert into ch_area_level2 values(null,'銅鑼鄉',11);
insert into ch_area_level2 values(null,'三義鄉',11);
insert into ch_area_level2 values(null,'西湖鄉',11);
insert into ch_area_level2 values(null,'頭屋鄉',11);
insert into ch_area_level2 values(null,'竹南鎮',11);
insert into ch_area_level2 values(null,'頭份鎮',11);
insert into ch_area_level2 values(null,'造橋鄉',11);
insert into ch_area_level2 values(null,'後龍鎮',11);
insert into ch_area_level2 values(null,'三灣鄉',11);
insert into ch_area_level2 values(null,'南庄鄉',11);
insert into ch_area_level2 values(null,'大湖鄉',11);
insert into ch_area_level2 values(null,'卓蘭鎮',11);
insert into ch_area_level2 values(null,'獅潭鄉',11);
insert into ch_area_level2 values(null,'泰安鄉',11);
insert into ch_area_level1 values(12,'南投縣');
insert into ch_area_level2 values(null,'南投巿',12);
insert into ch_area_level2 values(null,'埔里鎮',12);
insert into ch_area_level2 values(null,'草屯鎮',12);
insert into ch_area_level2 values(null,'竹山鎮',12);
insert into ch_area_level2 values(null,'集集鎮',12);
insert into ch_area_level2 values(null,'名間鄉',12);
insert into ch_area_level2 values(null,'鹿谷鄉',12);
insert into ch_area_level2 values(null,'中寮鄉',12);
insert into ch_area_level2 values(null,'魚池鄉',12);
insert into ch_area_level2 values(null,'國姓鄉',12);
insert into ch_area_level2 values(null,'水里鄉',12);
insert into ch_area_level2 values(null,'信義鄉',12);
insert into ch_area_level2 values(null,'仁愛鄉',12);
insert into ch_area_level1 values(13,'彰化縣');
insert into ch_area_level2 values(null,'彰化巿',13);
insert into ch_area_level2 values(null,'鹿港鎮',13);
insert into ch_area_level2 values(null,'和美鎮',13);
insert into ch_area_level2 values(null,'北斗鎮',13);
insert into ch_area_level2 values(null,'員林鎮',13);
insert into ch_area_level2 values(null,'溪湖鎮',13);
insert into ch_area_level2 values(null,'田中鎮',13);
insert into ch_area_level2 values(null,'二林鎮',13);
insert into ch_area_level2 values(null,'線西鄉',13);
insert into ch_area_level2 values(null,'伸港鄉',13);
insert into ch_area_level2 values(null,'福興鄉',13);
insert into ch_area_level2 values(null,'秀水鄉',13);
insert into ch_area_level2 values(null,'花壇鄉',13);
insert into ch_area_level2 values(null,'芬園鄉',13);
insert into ch_area_level2 values(null,'大村鄉',13);
insert into ch_area_level2 values(null,'埔鹽鄉',13);
insert into ch_area_level2 values(null,'埔心鄉',13);
insert into ch_area_level2 values(null,'永靖鄉',13);
insert into ch_area_level2 values(null,'社頭鄉',13);
insert into ch_area_level2 values(null,'二水鄉',13);
insert into ch_area_level2 values(null,'田尾鄉',13);
insert into ch_area_level2 values(null,'埤頭鄉',13);
insert into ch_area_level2 values(null,'芳苑鄉',13);
insert into ch_area_level2 values(null,'大城鄉',13);
insert into ch_area_level2 values(null,'竹塘鄉',13);
insert into ch_area_level2 values(null,'溪州鄉',13);
insert into ch_area_level1 values(14,'新竹巿');
insert into ch_area_level2 values(null,'新竹巿',14);
insert into ch_area_level1 values(15,'雲林縣');
insert into ch_area_level2 values(null,'斗六市',15);
insert into ch_area_level2 values(null,'斗南鎮',15);
insert into ch_area_level2 values(null,'虎尾鎮',15);
insert into ch_area_level2 values(null,'西螺鎮',15);
insert into ch_area_level2 values(null,'土庫鎮',15);
insert into ch_area_level2 values(null,'北港鎮',15);
insert into ch_area_level2 values(null,'古坑鄉',15);
insert into ch_area_level2 values(null,'大埤鄉',15);
insert into ch_area_level2 values(null,'莿桐鄉',15);
insert into ch_area_level2 values(null,'林內鄉',15);
insert into ch_area_level2 values(null,'二崙鄉',15);
insert into ch_area_level2 values(null,'崙背鄉',15);
insert into ch_area_level2 values(null,'麥寮鄉',15);
insert into ch_area_level2 values(null,'東勢鄉',15);
insert into ch_area_level2 values(null,'褒忠鄉',15);
insert into ch_area_level2 values(null,'台西鄉',15);
insert into ch_area_level2 values(null,'元長鄉',15);
insert into ch_area_level2 values(null,'四湖鄉',15);
insert into ch_area_level2 values(null,'口湖鄉',15);
insert into ch_area_level2 values(null,'水林鄉',15);
insert into ch_area_level1 values(16,'嘉義縣');
insert into ch_area_level2 values(null,'朴子市',16);
insert into ch_area_level2 values(null,'布袋鎮',16);
insert into ch_area_level2 values(null,'大林鎮',16);
insert into ch_area_level2 values(null,'民雄鄉',16);
insert into ch_area_level2 values(null,'溪口鄉',16);
insert into ch_area_level2 values(null,'新港鄉',16);
insert into ch_area_level2 values(null,'六腳鄉',16);
insert into ch_area_level2 values(null,'東石鄉',16);
insert into ch_area_level2 values(null,'義竹鄉',16);
insert into ch_area_level2 values(null,'鹿草鄉',16);
insert into ch_area_level2 values(null,'太保巿',16);
insert into ch_area_level2 values(null,'水上鄉',16);
insert into ch_area_level2 values(null,'中埔鄉',16);
insert into ch_area_level2 values(null,'竹崎鄉',16);
insert into ch_area_level2 values(null,'梅山鄉',16);
insert into ch_area_level2 values(null,'番路鄉',16);
insert into ch_area_level2 values(null,'大埔鄉',16);
insert into ch_area_level2 values(null,'阿里山鄉',16);
insert into ch_area_level1 values(17,'屏東縣');
insert into ch_area_level2 values(null,'屏東巿',17);
insert into ch_area_level2 values(null,'潮州鎮',17);
insert into ch_area_level2 values(null,'東港鎮',17);
insert into ch_area_level2 values(null,'恆春鎮',17);
insert into ch_area_level2 values(null,'萬丹鄉',17);
insert into ch_area_level2 values(null,'長治鄉',17);
insert into ch_area_level2 values(null,'麟洛鄉',17);
insert into ch_area_level2 values(null,'九如鄉',17);
insert into ch_area_level2 values(null,'里港鄉',17);
insert into ch_area_level2 values(null,'鹽埔鄉',17);
insert into ch_area_level2 values(null,'高樹鄉',17);
insert into ch_area_level2 values(null,'萬巒鄉',17);
insert into ch_area_level2 values(null,'內埔鄉',17);
insert into ch_area_level2 values(null,'竹田鄉',17);
insert into ch_area_level2 values(null,'新埤鄉',17);
insert into ch_area_level2 values(null,'枋寮鄉',17);
insert into ch_area_level2 values(null,'新園鄉',17);
insert into ch_area_level2 values(null,'崁頂鄉',17);
insert into ch_area_level2 values(null,'林邊鄉',17);
insert into ch_area_level2 values(null,'南州鄉',17);
insert into ch_area_level2 values(null,'佳冬鄉',17);
insert into ch_area_level2 values(null,'琉球鄉',17);
insert into ch_area_level2 values(null,'車城鄉',17);
insert into ch_area_level2 values(null,'滿州鄉',17);
insert into ch_area_level2 values(null,'枋山鄉',17);
insert into ch_area_level2 values(null,'三地門鄉',17);
insert into ch_area_level2 values(null,'霧臺鄉',17);
insert into ch_area_level2 values(null,'瑪家鄉',17);
insert into ch_area_level2 values(null,'泰武鄉',17);
insert into ch_area_level2 values(null,'來義鄉',17);
insert into ch_area_level2 values(null,'春日鄉',17);
insert into ch_area_level2 values(null,'獅子鄉',17);
insert into ch_area_level2 values(null,'牡丹鄉',17);
insert into ch_area_level1 values(18,'花蓮縣');
insert into ch_area_level2 values(null,'花蓮巿',18);
insert into ch_area_level2 values(null,'光復鄉',18);
insert into ch_area_level2 values(null,'玉里鎮',18);
insert into ch_area_level2 values(null,'新城鄉',18);
insert into ch_area_level2 values(null,'吉安鄉',18);
insert into ch_area_level2 values(null,'壽豐鄉',18);
insert into ch_area_level2 values(null,'鳳林鎮',18);
insert into ch_area_level2 values(null,'豐濱鄉',18);
insert into ch_area_level2 values(null,'瑞穗鄉',18);
insert into ch_area_level2 values(null,'富里鄉',18);
insert into ch_area_level2 values(null,'秀林鄉',18);
insert into ch_area_level2 values(null,'萬榮鄉',18);
insert into ch_area_level2 values(null,'卓溪鄉',18);
insert into ch_area_level1 values(19,'臺東縣');
insert into ch_area_level2 values(null,'台東巿',19);
insert into ch_area_level2 values(null,'成功鎮',19);
insert into ch_area_level2 values(null,'關山鎮',19);
insert into ch_area_level2 values(null,'卑南鄉',19);
insert into ch_area_level2 values(null,'大武鄉',19);
insert into ch_area_level2 values(null,'太麻里鄉',19);
insert into ch_area_level2 values(null,'東河鄉',19);
insert into ch_area_level2 values(null,'長濱鄉',19);
insert into ch_area_level2 values(null,'鹿野鄉',19);
insert into ch_area_level2 values(null,'池上鄉',19);
insert into ch_area_level2 values(null,'綠島鄉',19);
insert into ch_area_level2 values(null,'延平鄉',19);
insert into ch_area_level2 values(null,'海端鄉',19);
insert into ch_area_level2 values(null,'達仁鄉',19);
insert into ch_area_level2 values(null,'金峰鄉',19);
insert into ch_area_level2 values(null,'蘭嶼鄉',19);
insert into ch_area_level1 values(20,'金門縣');
insert into ch_area_level2 values(null,'金湖鎮',20);
insert into ch_area_level2 values(null,'金沙鎮',20);
insert into ch_area_level2 values(null,'金城鎮',20);
insert into ch_area_level2 values(null,'金寧鄉',20);
insert into ch_area_level2 values(null,'烈嶼鄉',20);
insert into ch_area_level2 values(null,'烏坵鄉',20);
insert into ch_area_level1 values(21,'澎湖縣');
insert into ch_area_level2 values(null,'馬公巿',21);
insert into ch_area_level2 values(null,'湖西鄉',21);
insert into ch_area_level2 values(null,'白沙鄉',21);
insert into ch_area_level2 values(null,'西嶼鄉',21);
insert into ch_area_level2 values(null,'望安鄉',21);
insert into ch_area_level2 values(null,'七美鄉',21);
insert into ch_area_level1 values(22,'連江縣');
insert into ch_area_level2 values(null,'南竿鄉',22);
insert into ch_area_level2 values(null,'北竿鄉',22);
insert into ch_area_level2 values(null,'莒光鄉',22);
insert into ch_area_level2 values(null,'東引鄉',22);