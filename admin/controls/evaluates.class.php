<?php
	class Evaluates {
		function index(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }
            $eval = D('evaluate');
            $page = new Page($eval->total(),PAGESIZE,"");
                       
            $evalRes = $eval->limit($page->limit)->select();

            $user  = D('user');
            $userArr  = array();
            foreach($evalRes as $key => $item){
                $evalRes[$key]['create_time'] = date('Y-m-d H:i:s',$evalRes[$key]['create_time']);
                $evalRes[$key]['rank'] = getRankByType($evalRes[$key]['rank']);
                $userId1  = $evalRes[$key]['uid1'];
                $userId2  = $evalRes[$key]['uid2'];
                
                if(isset($userArr[$userId1])){
                    $evalRes[$key]['name1']  = $userArr[$userId1]['name'];
                }else{
                    $userRes = $user->where('uid='.$userId1)->select();
                    $evalRes[$key]['name1']   = $userRes[0]['name'];
                    $userArr[$userId1]['name']  = $userRes[0]['name'];
                }

                if(isset($userArr[$userId2])){
                    $evalRes[$key]['name2']  = $userArr[$userId2]['name'];
                }else{
                    $userRes = $user->where('uid='.$userId2)->select();
                    $evalRes[$key]['name2']   = $userRes[0]['name'];
                    $userArr[$userId2]['name']  = $userRes[0]['name'];
                }
            }
            
            $this->assign('evaluates',$evalRes);
            $this->assign("page",$page->fpage(3,4,5,6));

            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
            $this->display();
		}		
	}
