<?php
	class EvaluateAction extends Common {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
