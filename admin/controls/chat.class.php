<?php
	class Chat {
		function index(){
            if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "" || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
                $this->redirect("user/login");
                return;
            }

            $chat = D('chat');
            $page = new Page($chat->where(array("delete"=>0))->total(),PAGESIZE,"");
                       
            $chatRes = $chat->where(array("delete"=>0))->limit($page->limit)->select();

            $user  = D('user');
            $userArr  = array();
            foreach($chatRes as $key => $item){
                $chatRes[$key]['create_time'] = date('Y-m-d H:i:s',$chatRes[$key]['create_time']);
                $userId1  = $chatRes[$key]['uid1'];
                $userId2  = $chatRes[$key]['uid2'];
                
                if(isset($userArr[$userId1])){
                    $chatRes[$key]['name1']  = $userArr[$userId1]['name'];
                }else{
                    $userRes = $user->where('uid='.$userId1)->select();
                    $chatRes[$key]['name1']   = $userRes[0]['name'];
                    $userArr[$userId1]['name']  = $userRes[0]['name'];
                }

                if(isset($userArr[$userId2])){
                    $chatRes[$key]['name2']  = $userArr[$userId2]['name'];
                }else{
                    $userRes = $user->where('uid='.$userId2)->select();
                    $chatRes[$key]['name2']   = $userRes[0]['name'];
                    $userArr[$userId2]['name']  = $userRes[0]['name'];
                }

                $chatRes[$key]['show_content'] = $chatRes[$key]['content'];
                if(mb_strlen($chatRes[$key]['content'],'utf8')>200){
                    $chatRes[$key]['show_content'] = mb_strcut($chatRes[$key]['content'], 0,200,'utf8')."...";
                }
            }

            $this->assign('chats',$chatRes);  
            $this->assign("page",$page->fpage(3,4,5,6));

            $this->assign('name',$_SESSION['name']);
            $this->assign('siteurl', SITEURL);
            $this->display();
		}
        function delete(){
            $ret = array(
                "errNo"=>0
            );
            
            $chat  = D('chat');
            $chatRes = $chat->where("cid=".$_POST['cid'])->update('delete=1');
            
            echo json_encode($ret);
        }	
	}
