<?php
	class User {
		function index(){
            $uid  = $_SESSION['uid'] ?  $_SESSION['uid'] : 1;
            $user = D('user');
            $userRes = $user->where("uid=".$uid)->select();
            if($userRes && count($userRes)>0){
                $userInfo = $userRes[0];
                $userInfo['type'] = getUserType($userInfo.type);
                $this->assign('user',$userInfo);
            }else{
                $this->assign('result','none');
            }

            $this->assign('siteurl', SITEURL);
			$this->display();
		}
		function login(){
			$user = D('user');
            $where = "uname='".$_POST['uname']."' AND upass='".md5($_POST['upass'])."'";
            $userdate = $user->where($where)->select();
            if($userdate && count($userdate)>0){
                $_SESSION['uname'] = $_POST['uname'];
                $_SESSION['uid'] = $userdate[0]['id'];
                echo  0;
            }
            else{
                echo 1;
            }
		}		
	}
