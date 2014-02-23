<?php /* Smarty version 2.6.18, created on 2014-02-23 00:20:27
         compiled from public/header.html */ ?>

<!DOCTYPE html>
<html>
  <head>
    <title>chatroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf8">
    <link href="<?php echo $this->_tpl_vars['res']; ?>
/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo $this->_tpl_vars['res']; ?>
/fonts/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['res']; ?>
/css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="top-bar">
        <div class="logo">
          Chatroom<sup><i class="icon-cloud"></i></sup>
        </div>
      </div>
      <header class="navbar" role="navigation">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" data-original-title="" title="">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand" data-original-title="" title="">&nbsp;</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/user/index" data-original-title="" title="">會員管理</a>
            </li>
            <li>
              <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/chat/index" data-original-title="" title="">對話訊息管理</a>
            </li>
            <li>
              <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/charge/index" data-original-title="" title="">充值記錄管理</a>
            </li>
            <li>
              <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/evaluate/index" data-original-title="" title="">評價管理</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title=""><i class="icon-user"></i> Sandy </a>
            </li>
          </ul>
        </nav>
      </header>