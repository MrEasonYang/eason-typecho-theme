        </div><!-- end .colgroup -->
    </div>

</div><!-- end #body -->
<footer id="footer" role="contentinfo" name="#footer">
    &nbsp;&nbsp;&nbsp;&nbsp;&copy; <?php echo date('Y'); ?> 
    <a class="footer-a" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>|
    <?php _e('Powered By <a class="footer-a" href="http://www.typecho.org">Typecho</a>'); ?>|
    <?php echo "Adapted & Designed By "; ?><a class="footer-a" href="<?php $this->options->siteUrl(); ?>">Eason Yang</a>
    </div>
</footer></div><!-- end #footer -->
<?php $this->footer(); ?>
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="./ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./ueditor/ueditor.all.js"></script>
<!-- 语言包文件(建议手动加载语言包，避免在ie下，因为加载语言失败导致编辑器加载失败) -->
<script type="text/javascript" src="./ueditor/lang/zh-cn/zh-cn.js"></script>

<script> 
$(function(){  
    $(function () {  
        $(window).scroll(function(){  
            if ($(window).scrollTop()>100){  
                $("#back-to-top").fadeIn(1500);  
            }  
            else  
            {  
                $("#back-to-top").fadeOut(1500);  
            }  
        });

        $("#back-to-top").click(function(){  
            $('body,html').animate({scrollTop:0},1000);  
            return false;  
        });  
    });  
});  
</script>
</body>
</html>