<?php   
/**
 * archives
 *
 * @package custom
 */

$this->need('header.php');
?>
<!-- container -->
<div class="container">
	<div id="content" class="content">
		<ul>
			<li class="post" style="width: 760px;">
				<h2 class="posttitle">文章列表</h2>
				<?php 
					$archives = null;
					$date = "0";
					$output = "";
					$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives); 
					while($archives->next()):
						$date_temp = date('F Y',$archives->created);
						if($date_temp != $date){
							if($date != "0"){
								$output = $output.'</li></ul>';
							}
							$date = $date_temp;
							$output = $output.'<h3 style="border:none;">'.$date.'</h3><ul class="archivelist"><li><a href="'.$archives->permalink.'">'.$archives->title.'</a>';
						}else{
							$output = $output.'<li><a href="'.$archives->permalink.'">'.$archives->title.'</a>';
						}
						// author
						//$output = $output.' --- <span class="archive_author"> <a href="#"></a> </span>';
				?>
				<?php endwhile; ?>
				<?php echo $output; ?>
			</li>
		</ul>
	</div>
	<!-- siderbar -->
	<aside id="siderbar">
		<?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
		<section id="categories">
			<h3>文章分类</h3>
			<ul>
				<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a> <span>{count}</span></li>'); ?>
			</ul>
		</section>
		<?php endif; ?>
	</aside>
	<!-- /siderbar -->
	<div class="clearfix"></div>
</div>
<!-- /container -->
<?php $this->need('footer.php'); ?> 