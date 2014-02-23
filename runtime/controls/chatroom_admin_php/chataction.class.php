<?php
	class ChatAction extends Common {
		function index(){
            $this->assign('siteurl', SITEURL);
			$this->display();
		}		
	}
