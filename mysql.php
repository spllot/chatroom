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