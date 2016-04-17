<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-tb-8 col-tb-offset-2">
        <div class="error-page">
            <p class="emotion_404">=_=</p>
            <br />
            <p class="title_404">404 - <?php _e('该页面跟别人私奔了'); ?></p>
            <p><?php _e('服务器君找不到这个页面了，肿么办(＞﹏＜)，客官您要不要搜索看看：'); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
