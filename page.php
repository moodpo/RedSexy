<?php $this->need('header.php'); ?>
<div class="container">
	<div id="content" class="content">
		<ul>
		<?php if ($this->have()): ?>
			<?php while($this->next()): ?>
			<li class="post" style="width: 760px;">
				<h2><?php $this->title() ?></h2> 
				<!-- post content -->
				<?php $this->content('阅读剩余部分...'); ?>
				<!-- /post content -->
			</li>
			<?php endwhile; ?>
		<?php else: ?>
		<!-- else{} -->
		<?php endif; ?>
		</ul>
	</div>
	<!-- siderbar -->
	<?php $this->need('sidebar.php'); ?>
	<!-- /siderbar -->
	<div class="clearfix"></div>
</div>
<?php $this->need('footer.php'); ?>