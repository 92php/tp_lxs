<?php
//±íÇéÌæ»»º¯Êý
function replace_pic($content){
	preg_match_all('/\[.*?\]/is',$content,$arr);
	if($arr[0]){
		$pic=F('pic','','./data/');
		foreach($arr[0] as $v){
			foreach($pic as $key=>$val){
				if($v=='['.$val.']'){
					$content=str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif"/>',$content);
				}
				continue;
			}
		}
	}
	return $content;
}


?>