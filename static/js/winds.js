hljs.initHighlightingOnLoad();
hljs.initLineNumbersOnLoad();
$('table').addClass('table table-hover table-bordered text-muted');
$('thead').addClass('thead-dark');

$(document).ready(function() {
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
});