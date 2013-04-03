		<footer id="blog_footer">
			<p class="siteinfo">
				<small>Copyright &copy; <a title="<?php $this->options->description() ?>" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>  /  Theme by <a href="http://moodpo.com" target="_blank">Yangxiaoxie</a> / Power by <a title="轻击键盘，静候回音。" href="http://typecho.org" target="_blank">Typecho)))</a></small>
			</p>
			<p class="back2top">
				<small><a href="javascript:void(0)">Back to top &uarr;</a></small>
			</p>
		</footer>
	<?php echo '</div>' ?>
<!-- script
	============================================================ -->
	<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/prettify.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/my.js'); ?>"></script>
	<?php $this->footer(); ?>
</body>
</html>