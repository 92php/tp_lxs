<?php
//��Ʒ�����
class GoodsTypeModel extends RelationModel{
	protected $_link=>array(
			'Goods'=>array(
			'mapping_type'	=>HAS_MANY,
			'foreign_key'	=>'cid',
		),
	);
}
