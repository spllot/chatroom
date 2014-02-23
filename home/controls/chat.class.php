<?php
	class Chat {
        //添加一条聊天记录 POST传入uid1 uid2 content
        function addChat(){
            $ret = array(
                "errNo"=>0
            );

            $chat  = D('chat');
            $_POST['create_time'] = time();
            $chat->insert($_POST);

            echo json_encode($ret);
        }

        //获取对话记录 GET传入uid1 uid2
        function getChats(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $uid1 = isset($_GET['uid1']) ? $_GET['uid1'] : 0;
            $uid2 = isset($_GET['uid2']) ? $_GET['uid2'] : 0;
            $chat = D('chat');
            
            $chatRes = $chat->where("uid1=".$uid1." AND uid2=".$uid2)->select();
            if($chatRes && count($chatRes) > 0){
                foreach ($chatRes as $key => $value) {
                    $chatRes['create_time'] = date('Y-m-d H:m:i',$chatRes['create_time']);
                }
                $ret['data'] = $chatRes;
            }

            echo json_encode($ret);
        }
	}
