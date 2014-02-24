<?php
	class User {
        //登录 POST传入 name pass
        function login(){
            $ret = array(
                "errNo"=>0
            );
            
            $name  = isset($_POST['name']) ? $_POST['name'] : "";
            $pass  = isset($_POST['pass']) ? $_POST['pass'] : "";

            $user  = D('user');
            $where = "(nick='".$name."' OR name='".$name."') AND pass='".$pass."'";
            $userRes = $user->where($where)->select();
            if(!$userRes || count($userRes) == 0){
                $ret['errNo'] = 1;
            }
            echo json_encode($ret);
        }
        //注册 POST传入name nick pass email
        function reg(){
            $ret = array(
                "errNo"=>0
            );

            $user  = D('user');
            $_POST['reg_time'] = time();
            $user->insert($_POST);

            echo json_encode($ret);
        }

        //搜索好友 GET传入 type(会员类型 0 所有 1 一般会员 2聊天会员) info introdution 
        //aid1 aid2 当aid1==0 时aid2==0 全部地区 当aid1!=0 aid==0 二级所有地区
        function search(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $type = isset($_GET['type']) ? $_GET['type'] : 0;
            $aid1 = isset($_GET['aid1']) ? $_GET['aid1'] : 0;
            $aid2 = isset($_GET['aid2']) ? $_GET['aid2'] : 0;
            $info = isset($_GET['info']) ? $_GET['info'] : "";
            $intr = isset($_GET['intr']) ? $_GET['intr'] : "";

            $user = D('user');
            
            $where = "";
            if($type == 0){
                $where = $where . "(type=1 OR type=2) ";
            }else{
                $where = $where . "type=".$type." ";
            }
            if($aid1 != 0){
                $where = $where . " AND area_level1_id=".$aid1." ";
            }
            if($aid2 != 0){
                $where = $where . " AND area_level2_id=".$aid2." ";
            }
            if($info != ""){
                $where = $where . " AND info like '%".$info."%' ";
            }
            if($intr != ""){
                $where = $where . " AND introduction like '%".$intr."%' ";
            }

            $userRes = $user->where($where)->select();
            $ret['data'] = $userRes;
            echo json_encode($ret);
        }

        //设置一次可以发几则讯息 POST传入 uid times
        function setLimitMessageTimes(){
            $ret = array(
                "errNo"=>0
            );

            $uid   = isset($_POST['uid']) ? $_POST['uid'] : 0;
            $times = isset($_POST['times']) ? $_POST['times'] : 0;
            $user = D('user');
            
            $user->where("uid=".$uid)->update('chat_time_limit='.$times);

            echo json_encode($ret);
        }

        //扣点 POST传入 uid point
        function minusPoint(){
            $ret = array(
                "errNo"=>0
            );

            $uid   = isset($_POST['uid']) ? $_POST['uid'] : 0;
            $point = isset($_POST['point']) ? $_POST['point'] : 0;

            //先扣点
            $user  = D('user');
            $userRes = $user->where("uid=".$uid);
            $newPoint = intval($userRes[0]['point']) - intval($point);
            $user->where("uid=".$uid)->update('chat_time_limit='.$newPoint);

            //更新扣点记录
            //TODO need?

            echo json_encode($ret);
        }

        //加为好友 POST传入uid1 uid2
        function addFriend(){
            $ret = array(
                "errNo"=>0
            );

            $friend  = D('friends');
            $_POST['create_time'] = time();
            $friend->insert($_POST);

            echo json_encode($ret);
        }
	}