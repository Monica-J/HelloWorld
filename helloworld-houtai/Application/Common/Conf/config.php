<?php
return array(
	//'配置项'=>'配置值'
	//禁止目录访问
	//'MODULE_DENY_LIST'=>array('Common','Runtime'),
	//允许模块访问
	//'MODULE_ALLOW_LIST'=>array('Home'),
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'helloworld',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口

    'DB_CHARSET'            =>   'utf8',
//  'LAYOUT_ON'             =>  ''

    /*'DB_PREFIX'             =>  '',          //数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,           //是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        //数据库编码默认采用utf8*/
    
//  'LAYOUT_ON'             =>  

	// 'LOG_RECORD'            =>  true,  // 进行日志记录
	// 'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
	// 'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',  // 允许记录的日志级别
	// 'TMPL_PARSE_STRING'     =>   array(
	//             '__UPLOAD__' => 'Public' // 更改默认的/Public 替换规则
	//         )

	//页面调试工具
	// 'SHOW_PAGE_TRACE'=>true,
);