<?php
	class User {
		function index(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }
            $user = D('user');
            $page = new Page($user->total(),PAGESIZE,"");              
            $userRes = $user->limit($page->limit)->select();

            foreach($userRes as $key => $item){
                $userRes[$key]['type'] = getUserType($userRes[$key]['type']);
                $userRes[$key]['show_pass'] = $userRes[$key]['pass'];
                $userRes[$key]['show_info'] = $userRes[$key]['info'];
                if(mb_strlen($userRes[$key]['pass'],'utf8')>30){
                    $userRes[$key]['show_pass'] = mb_strcut($userRes[$key]['pass'], 0,30,'utf8')."...";
                }
                $userRes[$key]['show_introduction'] = $userRes[$key]['introduction'];
                if(mb_strlen($userRes[$key]['info'],'utf8')>30){
                    $userRes[$key]['show_info'] = mb_strcut($userRes[$key]['info'], 0,30,'utf8')."...";
                }
                if(mb_strlen($userRes[$key]['introduction'],'utf8')>30){
                    $userRes[$key]['show_introduction'] = mb_strcut($userRes[$key]['introduction'], 0,30,'utf8')."...";
                }
            }

            $this->assign('users',$userRes);
            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
            $this->assign("page",$page->fpage(3,4,5,6));
			$this->display();
		}

        function login(){
            $this->assign('siteurl', SITEURL);
            $this->display();  
        }
		function ulogin(){
            $ret = array(
                "errNo"=>0
            );
			$admin  = D('admin');
            $where = "name='".$_POST['name']."') AND pass='".md5($_POST['pass'])."'";
            $userRes = $admin->where($where)->select();
            if($userRes && count($userRes)>0){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['uid']  = $userRes[0]['uid'];
            }
            else{
                $ret['errNo'] = 1;
            }
            echo json_encode($ret);
		}
        function ulogout(){
            unset($_SESSION['name']);
            unset($_SESSION['uid']);
            $this->redirect('user/login');
        }		
	}
