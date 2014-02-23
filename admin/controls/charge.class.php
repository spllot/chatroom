<?php
	class Charge {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
