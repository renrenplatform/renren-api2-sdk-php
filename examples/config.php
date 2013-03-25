<?php
header ( 'Content-Type: text/html; charset=UTF-8' );

// 调试模式开关
define ( 'DEBUG_MODE', false );

if (! function_exists ( 'curl_init' )) {
	echo '您的服务器不支持 PHP 的 Curl 模块，请安装或与服务器管理员联系。';
	exit ();
}

// App Key
define ( "APP_KEY", 'bb787da6f7b242fe8a3dfb17e4b221c5' );
// App Secret
define ( "APP_SECRET", '052a093f4f67488780826db6061a3cab' );
// 应用回调页地址
define ( "CALLBACK_URL", "http://xun-ubuntu/renren-api2-sdk-php/examples/callback.php" );

if (DEBUG_MODE) {
	error_reporting ( E_ALL );
	ini_set ( 'display_errors', true );
}
