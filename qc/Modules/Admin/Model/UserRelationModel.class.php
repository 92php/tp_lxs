<?php
//�û���ɫ����ģ��
class UserRelationModel extends RelationModel{
	//��������
	protected $tableName='user';
	//���������ϵ
	protected $_link=array(
		'role'=>array(
			'mapping_type'=>MANY_TO_MANY,		//��Զ��ϵ			
			'foreign_key'=>'user_id',			//�������м���еĹ����ֶ�����
			'relation_key'=>'role_id',			//�������м���еĹ����ֶ�����
			'relation_table'=>'hd_role_user',	//�м������
			'mapping_fields'=>'id,name,remark'
		)
	
	);


}
?>