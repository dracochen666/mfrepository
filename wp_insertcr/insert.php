<?php
/**
 * @package 添加版权信息和时间
 * @version 1.0
 */
/*
Plugin Name: 添加版权信息和时间 
Plugin URI: 
Description: 当你添加此插件后，会自动在博客页内添加年终倒计时（左上）和版权信息（下方）
Author: myname
Version: 1.0
Author URI: 
*License:GPL2+
*/

// 当加载文章内容的时候，执行添加版权信息的方法
add_action('the_content', 'add_copyright_info');

/**
 * [add_copyright_info 输出内容后连上要显示的版权信息，简单设置增加版权信息的内容的样式]
 * @param [type] $content [string]
 */
function add_copyright_info ($content){
    $content .= '<div style="clear:both; border-top:1px dashed #e0e0e0; padding:10px 0 10px 0; font-size:12px;">版权所有©转载必须注明作者和原始出处：<a href="'.get_bloginfo("home").'" title="点击去首页">'.get_bloginfo("name").'</a> » <a title="本文地址" href="'.get_permalink().'">'.get_the_title().'</a></div>' ;
    return $content;
}
/*
以下代码用于显示年终倒计时
*/
	$time1 = time();

	$time2 = strtotime("2020-12-31");

	$time3 = strtotime("2020-12-31");

	$sub = ceil(($time2 - $time1)/3600);

	$sub2 = ceil(($time3 - $time1)/86400);

	$sub3=ceil(($time3 - $time1)/60);

	echo "距离年底还有$sub2" . "天！" . '<br>';

	echo "距离年底还有$sub" . "小时！" . '<br>';

	echo "距离年底还有$sub3" . "分钟！" . '<br>';

?>