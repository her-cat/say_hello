<?php
/*
Plugin Name: Say Hello
Plugin URI: https://github.com/hexianghui/say_hello
Description: Sample plugin to illustrate how actions and filters work.
Version: 0.1
Author: HeXiangHui
Author URI: https://github.com/hexianghui/say_hello
*/

// 防止直接访问
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// 注册插件
yourls_add_filter( 'api_action_say_hello', 'say_hello' );

// 实现插件
function say_hello()
{
    $content = isset($_GET['content']) ? $_GET['content'] : 'Hello World!';
    echo "<h1>{$content}</h1>";
    exit;
}
