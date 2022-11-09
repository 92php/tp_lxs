<?php
/*
 *酒店图片模型
 */
class HotelRelationModel extends Model{
	//定义主表
	protected $tableName='hotel';
	//定义酒店信息表与图片息表关联关系
	protected $_link=array(
		'picture'=>array(
			'mapping_type'=>HAS_MANY,		//一对多关系			
			'foreign_key'=>'hid',			//主表在中间表中的关联字段名称
		
		)
	
	);



}

?>