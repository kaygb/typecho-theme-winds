<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer container-fluid blur">
<footer id="footer" class="container" role="contentinfo">

    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <br>
    <?php _e('Powered by <a class="text-success" href="https://www.typecho.org" target="_blank">Typecho</a> and theme  <a class="text-success" href="https://github.com/kaygb/typecho-theme-winds" target="_blank">WINDS</a> '); ?>.
    <br>
    <a href="#">没ICP备12345678号</a>


</footer><!-- end #footer -->
</div>
<?php $this->footer(); ?>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>