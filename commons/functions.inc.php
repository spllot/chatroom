<?php
	function getUserType($type){
		if($type == 1){
			return "一般會員";
		}
		if($type == 2){
			return "聊天會員";
		}
	}
    function getRankByType($type){
        if($type == 1){
            return "優良";
        }
        if($type == 2){
            return "普通";
        }
        if($type == 3){
            return "差";
        }
    }
    function getUserStatusInfoBytype($type){
        if($type == 0){
            return "停用";
        }
        if($type == 1){
            return "啟用";
        }
    }