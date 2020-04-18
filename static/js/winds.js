console.log(" %c WINDS %c https://github.com/kaygb/typecho-theme-winds/ ", "color: #000; background: pink; padding:5px;", "background: #fff; padding:5px;"),

    // 代码高亮
    hljs.initHighlightingOnLoad();
hljs.initLineNumbersOnLoad();

//初始化
$(document).ready(function() {
    // 初始化highlightjs
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
    // 初始化fancybox
    $(".fancybox").fancybox();
});

// 表格样式
$('table').addClass('table table-hover table-bordered text-muted');
$('thead').addClass('thead-dark');

// 分页导航

$('#w-pagination ol').addClass('pagination');
$('#w-pagination ol li').addClass('page-item');
$('#w-pagination ol li a').addClass('page-link bg-white text-dark');
$('#w-pagination .current a').removeClass('bg-white text-dark');
$('#w-pagination .current a').addClass('active bg-dark text-white');


// 评论回复按钮

$('.comment-reply a').addClass('btn btn-success');

// 链接跳转新页面

$('#main-post a').attr('target', '\"_blank\"');