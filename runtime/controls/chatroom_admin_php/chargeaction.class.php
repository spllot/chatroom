<?php
	class ChargeAction extends Common {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
