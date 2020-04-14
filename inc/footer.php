<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer container-fluid blur">
<footer id="footer" class="container" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a class="text-primary" href="https://www.typecho.org" target="_blank">Typecho</a> and theme  <a class="text-primary" href="https://github.com/kaygb/typecho-theme-winds" target="_blank">winds</a> '); ?>.
</footer><!-- end #footer -->
</div>
<?php $this->footer(); ?>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
