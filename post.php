<?php $this->need('header.php'); ?>
<div class="container">
	<div id="content" class="content">
		<ul>
		<?php if ($this->have()): ?>
			<?php while($this->next()): ?>
			<li class="post">
				<h2>
					<?php $this->title() ?>
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
				<!-- comments -->
				<div class="comments">
					<script type="text/javascript">
					    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					    var disqus_shortname = 'moodpo'; // required: replace example with your forum shortname
					
					    /* * * DON'T EDIT BELOW THIS LINE * * */
					    (function () {
					        var s = document.createElement('script'); s.async = true;
					        s.type = 'text/javascript';
					        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
					        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
					    }());
    				</script>
				</div>
				<!-- /comments -->
			</li>
			<?php endwhile; ?>
		<?php else: ?>
		<!-- else -->
		<?php endif; ?>
		</ul>
	</div>
	
	<!-- siderbar -->
	<?php $this->need('sidebar.php'); ?>
	<!-- /siderbar -->
	<div class="clearfix"></div>
</div>
<?php $this->need('footer.php'); ?>