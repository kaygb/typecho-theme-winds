console.log(" %c WINDS %c https://github.com/kaygb/typecho-theme-winds/ ", "color: #000; background: pink; padding:5px;", "background: #fff; padding:5px;"),
    // 代码高亮
    hljs.initHighlightingOnLoad();
hljs.initLineNumbersOnLoad();
$(document).ready(function() {
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
});
// 表格样式
$('table').addClass('table table-hover table-bordered text-muted');
$('thead').addClass('thead-dark');

// 分页导航

$('#w-pagination ol').addClass('pagination');


$('#w-pagination ol li').addClass('page-item');
$('#w-pagination ol li a').addClass('page-link bg-dark text-white');

$('#w-pagination .current').addClass('active');