<?php /* Smarty version 2.6.18, created on 2014-02-22 22:27:19
         compiled from index/index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="row newrow">
        <div class="span9"><!-- 幻灯片开始 -->
            <div class="carousel slide" id="carousel-288420" >
				<ol class="carousel-indicators">
                    <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['imgs3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <?php if ($this->_sections['ls']['index'] == 0): ?>
					<li class="active" data-slide-to="0" data-target="#carousel-288420"></li>
                    <?php else: ?>
                    <li data-slide-to="<?php echo $this->_sections['ls']['index']; ?>
" data-target="#carousel-288420"></li>
                    <?php endif; ?>
                    <?php endfor; endif; ?>
				</ol>
				<div class="carousel-inner">
                    <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['imgs3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <?php if ($this->_sections['ls']['index'] == 0): ?>
                    <div class="item active">
                    <?php else: ?>
                    <div class="item">
                    <?php endif; ?>
                    <img alt="" src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['imgs3'][$this->_sections['ls']['index']]['src']; ?>
" />
						<div class="carousel-caption">
							<p>
                            <?php echo $this->_tpl_vars['imgs3'][$this->_sections['ls']['index']]['title']; ?>

							</p>
						</div>
                    </div>
                    <?php endfor; endif; ?>
				</div> <a data-slide="prev" href="#carousel-288420" class="left carousel-control">&lsaquo;</a> <a data-slide="next" href="#carousel-288420" class="right carousel-control">&rsaquo;</a>
                <script>$('.carousel').carousel()</script>
			</div>

        </div><!-- 幻灯片结束 -->
		<div class="span3">
            <div class="hot">
            <h4>热度排行</h4>
            <ol>
                <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['recChapters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <span><?php echo $this->_sections['ls']['index']+1; ?>
</span>
                    <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post?pid=<?php echo $this->_tpl_vars['recChapters'][$this->_sections['ls']['index']]['pid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recChapters'][$this->_sections['ls']['index']]['ptitle']; ?>
</a>
                    </li>
                <?php endfor; endif; ?>

            </ol>            
            </div>
		</div>
	</div>
    <div class="row"><!-- 分类展示开始 -->
		<div class="span9">
            <?php $_from = $this->_tpl_vars['chapter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
        $this->_foreach['outer']['iteration']++;
?>
                <?php if (($this->_foreach['outer']['iteration']-1) < 3): ?>
                    <?php if (($this->_foreach['outer']['iteration']-1) == 0): ?>
                    <div class="row">
                    <?php else: ?>
                    <div class="row nfirst">
                    <?php endif; ?>
                        <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['inner'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['inner']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['item']):
        $this->_foreach['inner']['iteration']++;
?>
                            <?php if (($this->_foreach['inner']['iteration']-1) == 0): ?>
                                <div class="span5">
                                    <div class="media">
                                        <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post/pid/<?php echo $this->_tpl_vars['item']['pid']; ?>
" class="pull-left"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['item']['pimgs']; ?>
" class="media-object media-img" /></a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post/pid/<?php echo $this->_tpl_vars['item']['pid']; ?>
"><?php echo $this->_tpl_vars['item']['ptitle']; ?>
</a></h4>
                                            <p><?php echo $this->_tpl_vars['item']['pcontent']; ?>
</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (($this->_foreach['inner']['iteration']-1) > 0 && ($this->_foreach['inner']['iteration']-1) <= 4): ?>
                                <?php if (($this->_foreach['inner']['iteration']-1) == 1): ?>
                                    <div class="span4">
                                        <ul>
                                <?php endif; ?>
                                            <li>
                                                <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post/pid/<?php echo $this->_tpl_vars['item']['pid']; ?>
"><?php echo $this->_tpl_vars['item']['ptitle']; ?>
</a>
                                            </li>
                                <?php if (($this->_foreach['inner']['iteration']-1) == ($this->_foreach['inner']['iteration'] == $this->_foreach['inner']['total']) || ($this->_foreach['inner']['iteration']-1) == 4): ?>
                                        </ul>
                                        <div class="more"><a href="#">更多>></a></div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>  
		</div>
    <?php $_from = $this->_tpl_vars['chapter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
        $this->_foreach['outer']['iteration']++;
?>
        <?php if (($this->_foreach['outer']['iteration']-1) == 3): ?>
		<div class="span3">
            <div class="thumbnail">
        <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['inner'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['inner']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['item']):
        $this->_foreach['inner']['iteration']++;
?>
            <?php if (($this->_foreach['inner']['iteration']-1) == 0): ?>
                <img class="media2-img" src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/<?php echo $this->_tpl_vars['item']['pimgs']; ?>
" />
                <div class="caption">
                    <h4>
                        <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post/pid/<?php echo $this->_tpl_vars['item']['pid']; ?>
"><?php echo $this->_tpl_vars['item']['ptitle']; ?>
</a>
                    </h4>
                    <ul>
            <?php else: ?>
                        <li>
                            <a href="<?php echo $this->_tpl_vars['app']; ?>
/index/post/pid/<?php echo $this->_tpl_vars['item']['pid']; ?>
"><?php echo $this->_tpl_vars['item']['ptitle']; ?>
</a>
                        </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                    <div class="more"><a href="#">更多>></a></div>

                </div>
            </div>
		</div>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
	</div><!-- 分类展示结束 -->

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>