<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>"> 
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/normalize.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
<script src="<?php $this->options->themeUrl('js/modernizr.js'); ?>"></script>
<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw='); ?>
</head>
<body>
	<?php echo '<div id="wrapper">' ?>
		<header>
			<h1><a href="<?php $this->options->siteUrl(); ?>" class="logo"><?php $this->options->title() ?></a></h1>
			<p class="blog_desc"><?php $this->options->description() ?></p>
			<nav>
				<ul>
					<li <?php if($this->is('index')): ?> class="selected" <?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
					<?php $pages = null; $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
						<li <?php if($this->is('page', $pages->slug)): ?> class="selected" <?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</nav>
		</header>