<aside id="siderbar">
	<section id="hot_posts" class="list_posts">
		<h3>热门文章</h3>
		<ul>
			<?php $this->widget("Digg_Plugin")->rank('<li><a href="{permalink}">{title}</a></li>', 1, 5); ?>
		</ul>
	</section>

	<?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
	<section id="recent_posts" class="list_posts">
		<h3>最新文章</h3>
		<ul>
			<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
		</ul>
	</section>
	<?php endif; ?>
	
	<?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
	<section id="categories">
		<h3>文章分类</h3>
		<ul>
			<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a> <span>{count}</span></li>'); ?>
		</ul>
	</section>
	<?php endif; ?>
</aside>