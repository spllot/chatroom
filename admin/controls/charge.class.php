<?php
	class Charge {
		function index(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }

            $charge = D('charge');
            $page = new Page($charge->total(),PAGESIZE,"");
                       
            $chargeRes = $charge->limit($page->limit)->select();

            $admin = D('admin');
            $user  = D('user');
            $adminArr = array();
            $userArr  = array();
            foreach($chargeRes as $key => $item){
                $chargeRes[$key]['charge_time'] = date('Y-m-d H:i:s',$chargeRes[$key]['charge_time']);
                $adminId = $chargeRes[$key]['operator'];
                $userId  = $chargeRes[$key]['uid'];
                if(isset($adminArr[$adminId])){
                    $chargeRes[$key]['operator'] = $adminArr[$adminId];
                }else{
                    $adminRes = $admin->where('id='.$adminId)->select();
                    $chargeRes[$key]['operator'] = $adminRes[0]['name'];
                    $adminArr[$adminId] = $adminRes[0]['name'];
                }

                if(isset($userArr[$userId])){
                    $chargeRes[$key]['name']  = $userArr[$userId]['name'];
                    $chargeRes[$key]['point'] = $userArr[$userId]['point'];
                }else{
                    $userRes = $user->where('uid='.$userId)->select();
                    $chargeRes[$key]['name']   = $userRes[0]['name'];
                    $chargeRes[$key]['point']  = $userRes[0]['point'];
                    $userArr[$userId]['name']  = $userRes[0]['name'];
                    $userArr[$userId]['point'] = $userRes[0]['point'];
                }
            }

            $this->assign('charges',$chargeRes);
            $this->assign("page",$page->fpage(3,4,5,6));

            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
            $this->display();
		}		
	}
