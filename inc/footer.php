<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="back-to-top"><i class="fas fa-angle-up"></i></div>
    <div class="footer container-fluid ">
    <footer id="footer" class="container" role="contentinfo">
        <ul class="winds-all-links">
            <?php 
                $mypattern1 = "<li data-original-title=\"{title}\" data-toggle=\"tooltip\" data-placement=\"top\"><a href=\"{url}\" target=\"_blank\"><span>{name}</span></a></li>";
                Links_Plugin::output($mypattern1=NULL, $links_num=0, $sort="ten");
                ?>
        </ul>
<span>
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</span>
<span>
        <?php _e('<a class="text-success" href="https://www.typecho.org" target="_blank">TYPECHO</a>  THEME  <a class="text-success" href="https://github.com/kaygb/typecho-theme-winds" target="_blank">WINDS</a> '); ?></span>
<span>
        <a href="http://beian.miit.gov.cn/"><?php $this->options->beianNum(); ?></a>
        已运行：<span id="htmer_time" style="color: red;"></span>
        </span>
        <br>
        <?php $this->options->footer(); ?>


        <script>
    function secondToDate(second) {
        if (!second) {
            return 0;
        }
        var time = new Array(0, 0, 0, 0, 0);
        if (second >= 365 * 24 * 3600) {
            time[0] = parseInt(second / (365 * 24 * 3600));
            second %= 365 * 24 * 3600;
        }
        if (second >= 24 * 3600) {
            time[1] = parseInt(second / (24 * 3600));
            second %= 24 * 3600;
        }
        if (second >= 3600) {
            time[2] = parseInt(second / 3600);
            second %= 3600;
        }
        if (second >= 60) {
            time[3] = parseInt(second / 60);
            second %= 60;
        }
        if (second > 0) {
            time[4] = second;
        }
        return time;
    }
    function setTime() {
        var str="<?php $this->options->beginTime(); ?>";
	    var begin_time=str.split("-");
        // 博客创建时间秒数，时间格式中，月比较特殊，是从0开始的，所以想要显示5月，得写4才行，如下
        var create_time = Math.round(new Date(Date.UTC(begin_time[0], begin_time[1]-1, begin_time[2] , 0, 0, 0))
                .getTime() / 1000);
        // 当前时间秒数,增加时区的差异
        var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
        currentTime = secondToDate((timestamp - create_time));
        currentTimeHtml = currentTime[0] + '年' + currentTime[1] + '天'
                + currentTime[2] + '时' + currentTime[3] + '分' + currentTime[4]
                + '秒';
        document.getElementById("htmer_time").innerHTML = currentTimeHtml;
    }
    setInterval(setTime, 1000);
</script>



    </footer><!-- end #footer -->
    </div>
    <?php $this->footer(); ?>

    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.18.1/build/highlight.min.js"></script>
    <script src="https://cdn.bootcss.com/highlightjs-line-numbers.js/2.7.0/highlightjs-line-numbers.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kaygb/blogMenu@master/js/jquery.autoMenu.js"></script>
    <!-- <script src="https://cdn.staticfile.org/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery.tocify/1.9.0/javascripts/jquery.tocify.min.js"></script> -->
    <script src="https://cdn.staticfile.org/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script src="<?php $this->options->themeUrl('static/js/tabulous.js');?>"></script>
    <script src="<?php $this->options->themeUrl('static/js/winds.js');?>"></script>
</body>
</html>
