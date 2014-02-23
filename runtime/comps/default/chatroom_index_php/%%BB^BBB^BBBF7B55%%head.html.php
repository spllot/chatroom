<?php /* Smarty version 2.6.18, created on 2014-02-22 22:27:19
         compiled from public/head.html */ ?>
<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<html>
  <head>
    <title>首页 - 南宁电动车网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $this->_tpl_vars['res']; ?>
/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $this->_tpl_vars['res']; ?>
/css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="span12">
            <a href="<?php echo $this->_tpl_vars['imgs1'][0]['url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['imgs1'][0]['src']; ?>
" /></a>
		</div>
	</div>
	<div class="row newrow">
        <div class="span3">
            <img src="<?php echo $this->_tpl_vars['res']; ?>
/images/logo.jpg" />
		</div>
		<div class="span6">
            <form id="search" class="form-search">
				<input type="text" class="search-query" /> <button type="submit" class="btn">全站搜索</button>
			</form>

		</div>
		<div class="span3">
            <p>南宁电动车网QQ群: 156959743</p>
            <wb:follow-button uid="3762538277" type="red_3" width="100%" height="24" ></wb:follow-button>
            <p>微信关注：<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/weixinerweima.jpg" class="weixin-img" /></p>
		</div>
	</div>
    <div class="row"><!-- Start Menu -->
		<div class="span12">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
                        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
" class="brand">南宁电动车网</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
">首页</a>
								</li>
                                <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['catedata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['show'] = true;
$this->_sections['ls']['max'] = $this->_sections['ls']['loop'];
$this->_sections['ls']['step'] = 1;
$this->_sections['ls']['start'] = $this->_sections['ls']['step'] > 0 ? 0 : $this->_sections['ls']['loop']-1;
if ($this->_sections['ls']['show']) {
    $this->_sections['ls']['total'] = $this->_sections['ls']['loop'];
    if ($this->_sections['ls']['total'] == 0)
        $this->_sections['ls']['show'] = false;
} else
    $this->_sections['ls']['total'] = 0;
if ($this->_sections['ls']['show']):

            for ($this->_sections['ls']['index'] = $this->_sections['ls']['start'], $this->_sections['ls']['iteration'] = 1;
                 $this->_sections['ls']['iteration'] <= $this->_sections['ls']['total'];
                 $this->_sections['ls']['index'] += $this->_sections['ls']['step'], $this->_sections['ls']['iteration']++):
$this->_sections['ls']['rownum'] = $this->_sections['ls']['iteration'];
$this->_sections['ls']['index_prev'] = $this->_sections['ls']['index'] - $this->_sections['ls']['step'];
$this->_sections['ls']['index_next'] = $this->_sections['ls']['index'] + $this->_sections['ls']['step'];
$this->_sections['ls']['first']      = ($this->_sections['ls']['iteration'] == 1);
$this->_sections['ls']['last']       = ($this->_sections['ls']['iteration'] == $this->_sections['ls']['total']);
?>
								<li>
                                    <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/category/cid/<?php echo $this->_tpl_vars['catedata'][$this->_sections['ls']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['catedata'][$this->_sections['ls']['index']]['cname']; ?>
</a>
                                </li>
                                <?php endfor; endif; ?>
							</ul>
							<!--<ul class="nav pull-right">
								<li>
									<a href="#">电动车配件淘宝店</a>
								</li>
                            </ul>-->
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
    </div><!-- End Menu -->
    <div class="row">
        <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['imgs2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['show'] = true;
$this->_sections['ls']['max'] = $this->_sections['ls']['loop'];
$this->_sections['ls']['step'] = 1;
$this->_sections['ls']['start'] = $this->_sections['ls']['step'] > 0 ? 0 : $this->_sections['ls']['loop']-1;
if ($this->_sections['ls']['show']) {
    $this->_sections['ls']['total'] = $this->_sections['ls']['loop'];
    if ($this->_sections['ls']['total'] == 0)
        $this->_sections['ls']['show'] = false;
} else
    $this->_sections['ls']['total'] = 0;
if ($this->_sections['ls']['show']):

            for ($this->_sections['ls']['index'] = $this->_sections['ls']['start'], $this->_sections['ls']['iteration'] = 1;
                 $this->_sections['ls']['iteration'] <= $this->_sections['ls']['total'];
                 $this->_sections['ls']['index'] += $this->_sections['ls']['step'], $this->_sections['ls']['iteration']++):
$this->_sections['ls']['rownum'] = $this->_sections['ls']['iteration'];
$this->_sections['ls']['index_prev'] = $this->_sections['ls']['index'] - $this->_sections['ls']['step'];
$this->_sections['ls']['index_next'] = $this->_sections['ls']['index'] + $this->_sections['ls']['step'];
$this->_sections['ls']['first']      = ($this->_sections['ls']['iteration'] == 1);
$this->_sections['ls']['last']       = ($this->_sections['ls']['iteration'] == $this->_sections['ls']['total']);
?>
		<div class="span3">
            <a href="<?php echo $this->_tpl_vars['imgs2'][$this->_sections['ls']['index']]['url']; ?>
" class="thumbnail" target="_blank"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['imgs2'][$this->_sections['ls']['index']]['src']; ?>
" /></a>
        </div>
        <?php endfor; endif; ?>
	</div>
