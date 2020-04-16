<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="wbg-white container">
    <?php $this->comments()->to($comments); ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('发布评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
                <div  class="form-group">
                <!-- <label for="textarea" class="required"><?php //_e('内容：'); ?></label> -->
                <textarea rows="8" cols="50" name="text"  placeholder="评论内容，必填"  id="textarea" class="textarea form-control" required ><?php $this->remember('text'); ?></textarea>
                </div>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div  class="form-group">
                <!-- <label for="textarea" class="required"><?php //_e('内容：'); ?></label> -->
                <textarea rows="8" cols="50" name="text" placeholder="评论内容，必填" id="textarea" class="textarea form-control" required ><?php $this->remember('text'); ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text bg-dark text-white">昵称</span>
                    </div>
                    <input type="text" class="text form-control" placeholder="昵称 (必填)" id="author" name="author"  value="<?php $this->remember('author'); ?>" required>
                </div>

    		<div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text  bg-dark text-white" <?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>>邮箱</span>
                </div>
    			<input type="email" name="mail" id="mail"  placeholder="邮箱 (必填，仅管理员可见，仅用于评论推送和头像显示)"  class="text form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                </div>
    		<div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" <?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>>网站</span>
                </div>

    			<input type="url" name="url" id="url" class="text form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div>
            <?php endif; ?>
    		
    		<div>
                <button type="submit" class="submit btn btn-secondary"><?php _e('提交评论'); ?></button>
            </div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>



    
</div>

<div id="comments-all" class="wbg-white container">
<?php if ($comments->have()): ?>
	<span class="text-muted"><?php $this->commentsNum(_t('暂无评论'), _t('共 1 条评论'), _t('共 %d 条评论')); ?></span>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>
</div>
