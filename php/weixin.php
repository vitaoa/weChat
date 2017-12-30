<?php
//scope=snsapi_base 实例
$appid='wxd19dff706393a011';
$redirect_uri = urlencode( 'http://www.zhouweivita.cn/getUserInfo.php' );
$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
header("Location:".$url);

?>

