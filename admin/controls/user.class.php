<?php
	class User {
		function index(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }
            $user = D('user');
            $page = new Page($user->where(array("delele_flag"=>0))->total(),PAGESIZE,"");              
            $userRes = $user->where(array("delele_flag"=>0))->limit($page->limit)->select();

            foreach($userRes as $key => $item){
                $userRes[$key]['type'] = getUserType($userRes[$key]['type']);
                $userRes[$key]['show_pass'] = $userRes[$key]['pass'];
                $userRes[$key]['show_info'] = $userRes[$key]['info'];
                $userRes[$key]['status_info'] = getUserStatusInfoBytype($userRes[$key]['status']);
                $userRes[$key]['reg_time'] = date("Y-m-d H:i:s",$userRes[$key]['reg_time']);
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

                $area_level1_id = $userRes[$key]['area_level1_id'];
                $area_level2_id = $userRes[$key]['area_level2_id'];
                $area_level1_arr= array();
                $area_level2_arr= array();
                $area_level1_name = "";
                $area_level2_name = "";
                if(isset($area_level1_arr[$area_level1_id])){
                    $area_level1_name  = $area_level1_arr[$area_level1_id];
                }else{
                    $area = D('area_level1');
                    $areaRes = $area->where('aid='.$area_level1_id)->select();
                    $area_level1_name   = $areaRes[0]['aname'];
                    $area_level1_arr[$area_level1_id]  = $areaRes[0]['aname'];
                }
                if(isset($area_level2_arr[$area_level2_id])){
                    $area_level2_name  = $area_level2_arr[$area_level2_id];
                }else{
                    $area = D('area_level2');
                    $areaRes = $area->where('aid='.$area_level2_id)->select();
                    $area_level2_name   = $areaRes[0]['aname'];
                    $area_level2_arr[$area_level2_id]  = $areaRes[0]['aname'];
                }
                $userRes[$key]['area'] = $area_level1_name." ".$area_level2_name; 
            }

            $this->assign('users',$userRes);
            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
            $this->assign("page",$page->fpage(3,4,5,6));
			$this->display();
		}

        function info(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }
            $user = D('user');
            $userRes  = $user->where($_GET['id'])->select();
            $userInfo = $userRes[0];

            $userInfo['type'] = getUserType($userInfo['type']['type']);
            $userInfo['status_info'] = getUserStatusInfoBytype($userRes[$key]['status']);
            $userInfo['reg_time'] = date("Y-m-d H:i:s",$userRes[$key]['reg_time']);

            $area_level1_id = $userInfo['area_level1_id'];
            $area_level2_id = $userInfo['area_level2_id'];

            $area = D('area_level1');
            $areaRes = $area->where('aid='.$area_level1_id)->select();
            $area_level1_name   = $areaRes[0]['aname'];
            
            $area = D('area_level2');
            $areaRes = $area->where('aid='.$area_level2_id)->select();
            $area_level2_name   = $areaRes[0]['aname'];

            $userInfo['area'] = $area_level1_name." ".$area_level2_name; 
            
            $this->assign('user',$userInfo);
            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
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
            $where = "name='".$_POST['name']."' AND pass='".md5($_POST['pass'])."'";
            $userRes = $admin->where($where)->select();
            if($userRes && count($userRes)>0){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['uid']  = $userRes[0]['id'];
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
        function changeStatus(){
            $ret = array(
                "errNo"=>0
            );
            
            $user = D('user');
            $userRes = $user->where("uid=".$_POST['uid'])->update('status='.$_POST['status']);
            
            echo json_encode($ret);
        }
        function delete(){
            $ret = array(
                "errNo"=>0
            );
            
            $user = D('user');
            $userRes = $user->where("uid=".$_POST['uid'])->update('delele_flag=1');
            
            echo json_encode($ret);
        }
	}
