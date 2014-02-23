<?php /* Smarty version 2.6.18, created on 2014-02-23 00:06:51
         compiled from user/index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- 中间内容 start -->
	<div class="page-title">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
		        
	      	</div>
	      	<div class="col-md-6 col-sm-6 col-xs-6">
	      	</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-6 col-xs-6">
	        <div class="panel panel-default">
	        	<div class="panel-heading clearfix">
	        		<h3>會員信息</h3>
	        	</div>
	        	<div class="panel-body">
	        		<div class="ui-form-item">
	        			<label class="ui-label">會員名</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['name']; ?>
</label>
	        			<label class="ui-label">密碼</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['pass']; ?>
</label>
	        		</div>
	        		<div class="ui-form-item">
	        			<label class="ui-label">昵稱</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['nick']; ?>
</label>
	        			<label class="ui-label">郵箱</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['email']; ?>
</label>
	        			<label class="ui-label">會員類型</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['type']; ?>
</label>
	        		</div>
	        		<div class="ui-form-item">
	        			<label class="ui-label">自我简介</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['info']; ?>
</label>
	        		</div>
	        		<div class="ui-form-item">
	        			<label class="ui-label">自我介紹</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['introduction']; ?>
</label>
	        		</div>
	        		<div class="ui-form-item">
	        			<label class="ui-label">剩餘點數</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['point']; ?>
</label>
	        			<label class="ui-label">聊天次數限定</label>
	        			<label class="ui-lalel"><?php echo $this->_tpl_vars['user']['chat_time_limit']; ?>
</label>
	        		</div>
	        	</div>
	        	<div class="panel-footer clearfix">
	        	</div>
	        </div>
      	</div>
	</div>
</div>
<!-- 中间内容 and -->     
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>