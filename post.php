<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
<div class="crumbs_patch">
	<a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		Latest Post
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: ?><!-- 页面为其他页时 -->
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?>
</div>
    <article class="post">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li><?php _e('作者：'); ?><?php $this->author(); ?></li>
            <li><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?></li>
            <li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><?php _e('标签：'); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>

    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>