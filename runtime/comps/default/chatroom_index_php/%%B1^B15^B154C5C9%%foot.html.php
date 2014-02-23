<?php /* Smarty version 2.6.18, created on 2014-02-22 22:27:19
         compiled from public/foot.html */ ?>
<div class="row newrow">
        <div class="span12">
            <div class="tabbable" id="tabs-185497">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-62400" data-toggle="tab">南宁优秀商家</a>
					</li>
					<li>
						<a href="#panel-256320" data-toggle="tab">友情链接</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-62400"><!-- Start tab1 -->
                        <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['imgs4']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                        <?php if (!($this->_sections['ls']['index'] % 6) && $this->_sections['ls']['index'] != 0): ?>
                         </div>
                        <?php endif; ?>

                        <?php if (!($this->_sections['ls']['index'] % 6)): ?>
                        <div class="row-fluid brandrow">
                        <?php endif; ?>

                            <div class="span2">
                                <a href="<?php echo $this->_tpl_vars['imgs4'][$this->_sections['ls']['index']]['url']; ?>
" class="thumbnail" title="<?php echo $this->_tpl_vars['imgs4'][$this->_sections['ls']['index']]['title']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['imgs4'][$this->_sections['ls']['index']]['src']; ?>
"/></a>
                            </div>
                        <?php endfor; endif; ?>
                        </div>
                    </div><!-- End tab1 -->
					<div class="tab-pane" id="panel-256320"><!-- Start tab2 -->
                        <div class="row-fluid">
                            <div class="span12">
                                <ul class="inline">
                                    <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <a href="<?php echo $this->_tpl_vars['links'][$this->_sections['ls']['index']]['url']; ?>
" alt="<?php echo $this->_tpl_vars['links'][$this->_sections['ls']['index']]['alt']; ?>
" target="_blank"><?php echo $this->_tpl_vars['links'][$this->_sections['ls']['index']]['title']; ?>
</a>
                                        </li>
                                    <?php endfor; endif; ?>
                                </ul>
                            </div>
                        </div>

					</div><!-- End tab2 -->
				</div>
            </div>
        </div>
	</div>




    <div class="row">
        <hr />
		<div class="span4 offset4">
            <p>&copy;2013 南宁电动车网</p>
		</div>
	</div>
</div>



    <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/bootstrap.min.js"></script>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <script>$('.carousel').carousel()</script>

  </body>
</html>
