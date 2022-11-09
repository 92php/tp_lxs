<?php
/*
 *线路图片模型
 */
class CircuitRelationModel extends Model{
	//定义主表
	protected $tableName='circuit';
	//定义线路信息表与图片息表关联关系
	protected $_link=array(
		'picture'=>array(
			'mapping_type'=>HAS_MANY,		//一对多关系			
			'foreign_key'=>'cid',			//主表在中间表中的关联字段名称
		
		)
	
	);



}

?>