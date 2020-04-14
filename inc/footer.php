<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer container-fluid blur">
<footer id="footer" class="container" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a class="text-primary" href="https://www.typecho.org" target="_blank">Typecho</a> and theme  <a class="text-primary" href="https://github.com/kaygb/typecho-theme-winds" target="_blank">winds</a> '); ?>.
</footer><!-- end #footer -->
</div>
<?php $this->footer(); ?>

</body>
</html>
