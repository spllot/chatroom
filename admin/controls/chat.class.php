<?php
	class Chat {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
