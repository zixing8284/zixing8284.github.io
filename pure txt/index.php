﻿<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
<header id="header">
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<aside>
<?php bloginfo( 'description' ); ?>
</aside>
</header>
<section id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
<h3><?php the_time('Y-m-d'); ?></h3>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<aside><?php the_author_posts_link(); ?> Published <?php the_time('G:i'); ?>&nbsp;<?php edit_post_link('Edit', ' |', '| '); ?>&nbsp;<?php comments_popup_link('Leave a message &#187;', '1 message &#187;', '% messages &#187;'); ?></aside>
</article>
<?php if ( is_singular() ) : ?>
<p><?php previous_post_link('&laquo; %link') ?> <?php next_post_link(' %link &raquo;') ?></p>
<p><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></p>
<div id="clear">
<?php comments_template(); ?>
<?php endif; ?>
<?php endwhile; ?>
<?php posts_nav_link(); ?>
<?php else : ?>
<h1><?php _e('Not Found'); ?></h1>
<?php endif; ?>
</section>
<section id="sidebar">
<nav>
<h3><?php _e('Archives'); ?></h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
<nav id="nonefl">
<h3><?php _e('Pages'); ?></h3>
<ul>
<?php wp_list_pages('title_li='); ?>
</ul>
<?php if ( is_home() ) : ?>
<h3>播播</h3>
<embed src="http://www.xiami.com/widget/3750447_1460397,2085277,_235_346_000000_ffffff_1/multiPlayer.swf" type="application/x-shockwave-flash" width="214" height="293" wmode="opaque"></embed>
<?php endif; ?>
</nav>
</nav>
</section>
<footer id="footer">
<!-- 侧边栏不滚动的JS调用 -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript">// <![CDATA[
$.fn.smartFloat = function() {
var position = function(element) {
var top = element.position().top, pos = element.css("position");
$(window).scroll(function() {
var scrolls = $(this).scrollTop();
if (scrolls > top) {
if (window.XMLHttpRequest) {
element.css({
position: "fixed",
top: 0
});
} else {
element.css({
top: scrolls
});
}
}else {
element.css({
position: pos,
top: top
});
}
});
};
return $(this).each(function() {
position($(this)); 
});
};
//绑定
$("#nonefl").smartFloat();
// ]]></script>
<!-- 调用结束 -->
<p>ode to my family. 04.2012 紫星.2013</p>
</footer>
</body>
</html>