<?php
	function getUserType($type){
		if($type == 1){
			return "一般会员";
		}
		if($type == 2){
			return "聊天会员";
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