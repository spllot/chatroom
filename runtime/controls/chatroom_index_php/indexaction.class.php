<?php
	class IndexAction extends Common {
        function common(){
			$cat = D('cat');
			$catdata = $cat->order("weight")->select();
            $this->assign('catedata', $catdata);
		
        }

		function index(){
			$cat = D('cat');
			$catdate = $cat->order("weight")->select();
			$catarr  = array();
			$data    = array();
			foreach($catdate as $key => $item){
				$cid   = $item['cid'];
				$cname = $item['cname'];
				$catarr[$cid] = $cname;
				$data[$cname] = array();
			}

			$chapter = D('chapter');
			$chapterDate = $chapter->where("pstatus in (1,2)")->order('pimgs desc')->select();
			foreach ($chapterDate as $key => $item) {
				$cid = $item['pcid'];
                $item['ptitle'] = ft($item['ptitle'], 18);
				$cname = $catarr[$cid];
				$data[$cname][] = $item;
			}

            $recommand = $chapter->where("pstatus=2")->order("pctime desc")->limit(7)->select();
            $recChapters = array();
            foreach ($recommand as $item) {
                $item['ptitle'] = ft($item['ptitle'], 13);
                $recChapters[] = $item;
            }
            $this->assign('recChapters', $recChapters);

			$rec = D('rec');
			for ($type=1 ;$type<5 ;$type++) {
				$recDate = $rec->where("type=".$type)->order("weight")->select();
				$this->assign('imgs'.$type,$recDate);
			}			
			$this->assign('chapter',$data);
            $this->assign('catedata', $catdate);

            $link = D('link');
            $links = $link->select();
            $this->assign('links', $links);
//var_dump($recDate);
//var_dump($data);
            $this->assign('siteurl', SITEURL);
			$this->display();
		}


        function post(){
			$cat = D('cat');
			$catdata = $cat->order("weight")->select();
            $this->assign('catedata', $catdata);

			$rec = D('rec');
			for ($type=1 ;$type<5 ;$type++) {
				$recDate = $rec->where("type=".$type)->order("weight")->select();
				$this->assign('imgs'.$type,$recDate);
			}			

            $chapter = D("chapter");
			$chapterdata = $chapter->select("pid=".$_GET['pid']);
            $this->assign("chapter", $chapterdata[0]);

            $recommand = $chapter->where("pstatus=2")->order("pctime desc")->limit(7)->select();
            $recChapters = array();
            foreach ($recommand as $item) {
                $item['ptitle'] = ft($item['ptitle'], 20);
                $recChapters[] = $item;
            }
            $this->assign('recChapters', $recChapters);

            $sameCate = $chapter->where("pcid=".$chapterdata[0]['pcid']. " and pid !=".$chapterdata[0]['pid']  )
                                ->order("pctime desc")
                                ->limit(10)
                                ->select();
            $sameCateChapters = array();
            foreach($sameCate as $item){
                $item['ptitle'] = ft($item['ptitle'], 20);
                $sameCateChapters[] = $item;
            }
            $this->assign('cateChapters', $sameCateChapters);

            $link = D('link');
            $links = $link->select();
            $this->assign('links', $links);

            $this->assign('siteurl', SITEURL);
			$this->display();
		}

        function category(){
			$cat = D('cat');
			$catdata = $cat->order("weight")->select();
            $this->assign('catedata', $catdata);

			$rec = D('rec');
			for ($type=1 ;$type<5 ;$type++) {
				$recDate = $rec->where("type=".$type)->order("weight")->select();
				$this->assign('imgs'.$type,$recDate);
			}			

            $chapter = D("chapter");
            $page=new Page($chapter->where("pcid=".$_GET['cid'])->total(), PAGESIZE, "cid/".$_GET['cid']); 
            $data=$chapter->where("pcid=".$_GET['cid'])->limit($page->limit)->select();
            $this->assign("data", $data);
            $this->assign("fpage", $page->fpage());


            $recommand = $chapter->where("pstatus=2")->order("pctime desc")->limit(7)->select();
            $recChapters = array();
            foreach ($recommand as $item) {
                $item['ptitle'] = ft($item['ptitle'], 20);
                $recChapters[] = $item;
            }
            $this->assign('recChapters', $recChapters);


            $link = D('link');
            $links = $link->select();
            $this->assign('links', $links);

            $this->assign('siteurl', SITEURL);
			$this->display();
		}
	}
