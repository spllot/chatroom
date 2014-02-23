<?php
	class Area {
        //获取一级地区列表
        function getLevel1Area(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $area  = D('area_level1');
            $areaRes = $area->select();
            $ret['data'] = $areaRes;

            echo json_encode($ret);
        }

        //根据一级地区ID 获取二级地区列表 GET 传入aid
        function getLevel2AreaById(){
            $ret = array(
                "errNo"=>0,
                "data"=>array()
            );

            $aid = isset($_GET['aid']) ? $_GET['aid'] : 0;
            $area  = D('area_level2');
            $areaRes = $area->where("level1_aid=".$aid)->select();
            $ret['data'] = $areaRes;

            echo json_encode($ret);
        }
	}
