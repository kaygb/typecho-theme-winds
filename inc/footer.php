<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer container-fluid blur">
<footer id="footer" class="container" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
</footer><!-- end #footer -->
</div>
<?php $this->footer(); ?>

</body>
</html>
