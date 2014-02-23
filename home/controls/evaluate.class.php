<?php
	class Evaluate {
        //添加一条评价记录 POST传入uid1 uid2 content rank
        function addEvaluate(){
            $ret = array(
                "errNo"=>0
            );

            $eval  = D('evaluate');
            $_POST['create_time'] = time();
            $eval->insert($_POST);

            echo json_encode($ret);
        }

        //获取某人评价记录 GET传入uid
        function getEvaluatesByUid2(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
            $eval  = D('evaluate');
            
            $evalRes = $eval->where("uid2=".$uid)->select();
            if($evalRes && count($evalRes) > 0){
                foreach ($evalRes as $key => $value) {
                    $evalRes['create_time'] = date('Y-m-d H:m:i',$evalRes['create_time']);
                    $evalRes['rank_info']   = getRankByType($evalRes['rank_info']);
                }
                $ret['data'] = $evalRes;
            }

            echo json_encode($ret);
        }

        //获取某人的被评价记录 GET传入uid
        function getEvaluatesByUid1(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
            $eval  = D('evaluate');
            
            $evalRes = $eval->where("uid1=".$uid)->select();
            if($evalRes && count($evalRes) > 0){
                foreach ($evalRes as $key => $value) {
                    $evalRes['create_time'] = date('Y-m-d H:m:i',$evalRes['create_time']);
                    $evalRes['rank_info']   = getRankByType($evalRes['rank_info']);
                }
                $ret['data'] = $evalRes;
            }

            echo json_encode($ret);
        }

        //获取B对A的被评价记录 GET传入uid1 uid2
        function getEvaluatesByUid1(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $uid1 = isset($_GET['uid1']) ? $_GET['uid1'] : 0;
            $uid2 = isset($_GET['uid2']) ? $_GET['uid2'] : 0;
            $eval  = D('evaluate');
            
            $evalRes = $eval->where("uid1=".$uid." AND uid2=".$uid2)->select();
            if($evalRes && count($evalRes) > 0){
                foreach ($evalRes as $key => $value) {
                    $evalRes['create_time'] = date('Y-m-d H:m:i',$evalRes['create_time']);
                    $evalRes['rank_info']   = getRankByType($evalRes['rank_info']);
                }
                $ret['data'] = $evalRes;
            }

            echo json_encode($ret);
        }
	}
