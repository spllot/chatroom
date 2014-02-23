<?php
	class Evaluate {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
