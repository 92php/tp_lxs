<?php
return array(
	'APP_GROUP_LIST'		=>'Index,Admin',
	'DEFAULT_GROUP'			=>'Index',
	'APP_GROUP_MODE'		=>1,
	'APP_GROUP_PATH'		=>'Modules',
	//=================================================
	'DB_TYPE'               => 'mysql',			// 数据库类型
    'DB_HOST'               => 'localhost',		// 服务器地址
    'DB_NAME'               => 'qingchun',       // 数据库名
    'DB_USER'               => 'root',			// 用户名
    'DB_PWD'                => 'php100',		// 密码
    'DB_PORT'               => '3306',			// 端口
    'DB_PREFIX'             => 'qc_',			// 数据库表前缀
    'DB_CHARSET'            => 'utf8',			// 数据库编码默认采用utf8
	//'SHOW_PAGE_TRACE'		=>	true,			// 开启页面Trace
	'TMPL_L_DELIM'			=>	'{',			//设置左定界符
	'TMPL_R_DELIM'			=>	'}',			//设置右定界符
	'URL_HTML_SUFFIX'		=>	'.html',		//设置伪静态后缀名
	//加载扩展配置
	'LOAD_EXT_CONFIG' => 'system',
);
?>