<?php
/*
 *酒店视图模型
 */
class HotelViewModel extends ViewModel{
	//定义视图表关联关系
	Protected $viewFields=array(
		'hotel'=>array(
			'content','addtime','id','grade','price','location','title',
			'_type'=>'LEFT'
		),
		'pictrue'=>array(
			'max','medium','mini',
			'_on'=>'hotel.id=pictrue.hid'
		)
	);
	/*
	 *返回查询所有记录
	 *
	 */
	Public function getAll($where){
		return $this->where($where)->select();
	}
}

?>