<?php 
/**
 * 
 * 红色性感Typecho主题
 * 
 * @package RedSexy
 * @author moodpo
 * @version 1.0.0
 * @link http://moodpo.com
 */

$this->need('header.php');
?>

<div class="container">
	<div id="content" class="content">
		<ul>
			<?php while($this->next()): ?>
			<li class="post">
				<h2>
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</h2> 
				<section class="post_details">
					<img title="author: <?php $this->author(); ?>" src="<?php $this->options->siteUrl();?>usr/uploads/author/<?php $this->author(); ?>.jpg" width="150">
					<ul>
						<li class="date"><?php $this->date('M j, Y'); ?></li>
						<li class="author"><a href="<?php $this->author->url(); ?>"><?php $this->author(); ?></a></li>
						<li class="views"><?php $this->views(); ?> 次围观</li>
						<li class="digg"><?php $this->widget("Digg_Plugin")->output(); ?></li>
					</ul>
				</section>
				<!-- post content -->
				<?php $this->content('阅读剩余部分...'); ?>
				<!-- /post content -->
			</li>
			<?php endwhile; ?>
		</ul>
		
		<!-- pagination -->
		<div class="pagination">
			<?php $this->pageLink('NEWER','prev'); ?>
			<?php $this->pageLink('OLDER','next'); ?>
		</div>
		<!-- /pagination -->
	</div>
	
	<!-- siderbar -->
	<?php $this->need('sidebar.php'); ?>
	<!-- /siderbar -->
	<div class="clearfix"></div>
</div>
<?php $this->need('footer.php'); ?>
