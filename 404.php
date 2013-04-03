<?php $this->need('header.php');?>
<div class="container">
	<div id="content" class="content">
		<img style="display:block;margin:0 auto" src="img/404.gif" />
		<p style="margin:0 auto;text-align:center; width: 70%;">
			啊哦！这个页面貌似被无节操的外星人带走了呢！你可以<a href="javascript:history.go(-1)">返回上一页</a>。
			如果是博主把你带到这里的话，请<a href="/guestbook">报告错误页面</a>。
		</p>
	</div>
	<!-- siderbar -->
	<?php $this->need('sidebar.php'); ?>
	<!-- /siderbar -->
	<div class="clearfix"></div>
</div>
<?php $this->need('footer.php'); ?>		
		