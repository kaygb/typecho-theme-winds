console.log(" %c WINDS %c https://github.com/kaygb/typecho-theme-winds/ ", "color: #000; background: pink; padding:5px;", "background: #fff; padding:5px;");
//初始化
$(document).ready(function() {
    // 初始化highlightjs
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
    // 初始化fancybox
    $(".fancybox").fancybox();

    // 导航栏分类
    $(".winds-category-menu-item").css("display", "none");
    $(".winds-category-menu").mouseover(function() {
        $(".winds-category-menu-item").css("display", "flex");
    });
    $(".winds-category-menu").mouseout(function() {
        $(".winds-category-menu-item").css("display", "none");
    });
    $(".winds-category-page-item").css("display", "none");
    $(".winds-category-page").mouseover(function() {
        $(".winds-category-page-item").css("display", "flex");
    });
    $(".winds-category-page").mouseout(function() {
        $(".winds-category-page-item").css("display", "none");
    });
    $('.main-title').fadeIn(3000);
});
// 返回顶部
$(function() {
        $(window).scroll(function() {
            var scroHei = $(window).scrollTop();
            if (scroHei > 300) {
                $('.back-to-top').css("display", "block");
                $('.back-to-top').fadeIn;
            } else {
                $('.back-to-top').css("display", "none");
                $('.back-to-top').fadeOut;
            }
        })
        $('.back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        })
    })
    // 代码高亮
hljs.initHighlightingOnLoad();
hljs.initLineNumbersOnLoad();


// $(function() {
//     //Calls the tocify method on your HTML div.
//     var toc = $("#toc").tocify({ selectors: "h2,h3,h4,h5" });

// });

// autoMenu
$("#autoMenu").autoMenu({
    levelOne: 'h2', //一级标题
    levelTwo: 'h3', //二级标题（暂不支持更多级）
    width: 200, //容器宽度
    height: 400, //容器高度
    padding: 20, //内部间距
    offTop: 100 //滚动切换导航时离顶部的距离
});
// 表格样式
$('table').addClass('table table-hover table-bordered text-muted');
// $('thead').addClass('thead-dark');

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

// lazyload
window.onload = function() {
    $('#main-post img').addClass('lazyload');
    $(function() {
        $("img.lazyload").lazyload({
            effect: 'fadeIn'
        });
    });

    $("img.lazy-img").lazyload({
        effect: 'fadeIn'
    });
}

//tab组
$('#tabs').tabulous({
    effect: 'scale'
});

// sidebar
if ($(window).width() > 1000) {
            //获取垂直滚动的距离
            let profileTop = $(".main").offset().top - $(window).scrollTop();
            let profileBottom = $(".profile").offset().bottom - $(".footer").offset().top;
    console.log(profileBottom);
            // console.log(profileTop);
            // var scrollTop = $(document).scrollTop();
            if (profileTop < 100) {
                $(".profile").css({ "top": "100px", "position": "fixed" });
                // $(".blur-nav-bg").css({ "display": "inherit" });
                // $(".blur-nav").css({ "display": "inherit" });
                $(".blur-nav-bg").fadeIn();
                $(".blur-nav").fadeIn();
            } else {
                $(".profile").css({ "top": "inherit", "position": "" });
                // $(".blur-nav-bg").css({ "display": "none" });
                // $(".blur-nav").css({ "display": "none" });
                $(".blur-nav-bg").fadeOut();
                $(".blur-nav").fadeOut();
            }
            if (profileBottom < 100) {
                $(".profile").css({ "top": "inherit", "position": "" });

            } 
        } else {
            $(".blur-nav-bg").css({ "display": "inherit" });
            $(".blur-nav").css({ "display": "inherit" });
        }
$(function() {
    $(window).scroll(function() {
        if ($(window).width() > 1000) {
            //获取垂直滚动的距离
            let profileTop = $(".main").offset().top - $(window).scrollTop();
            // console.log(profileTop);
            // var scrollTop = $(document).scrollTop();
            if (profileTop < 100) {
                $(".profile").css({ "top": "100px", "position": "fixed" });
                // $(".blur-nav-bg").css({ "display": "inherit" });
                // $(".blur-nav").css({ "display": "inherit" });
                $(".blur-nav-bg").fadeIn();
                $(".blur-nav").fadeIn();
            } else {
                $(".profile").css({ "top": "inherit", "position": "" });
                // $(".blur-nav-bg").css({ "display": "none" });
                // $(".blur-nav").css({ "display": "none" });
                $(".blur-nav-bg").fadeOut();
                $(".blur-nav").fadeOut();
            }
        } else {
            $(".blur-nav-bg").css({ "display": "inherit" });
            $(".blur-nav").css({ "display": "inherit" });
        }

    });
});


//侧栏跟随

// (function(){

//     var oDiv=document.getElementById("profile");
//     var H=0,iE6;
//     var Y=oDiv;
//     while(Y){H+=Y.offsetTop;Y=Y.offsetParent};

//         window.onscroll=function()
//         {
//             var s=document.body.scrollTop||document.documentElement.scrollTop;
//             if(s>H){
//                 $(".profile").css({ "top": "inherit", "position": "fixed" });
//             }else{$(".profile").css({ "top": "inherit", "position": "" });
//         }
//             } 
        
//     }
 
//  )();


//移动端导航

$(".winds-mb-menu").click(function() {
    // $(".mobile-menu").css({ "display": "block" });
    $(".mobile-menu").fadeIn();

    $(".winds-mb-menu-f").css({ "display": "inherit" });
    $(".winds-mb-menu ").css({ "display": "none" });
    $(".back-to-top ").css({ "z-index": "98" });
    $("body").css({ "overflow-y": "hidden" });
    $(".mobile-nav").css({ "background": "#000" });

});
$(".winds-mb-menu-f").click(function() {
    // $(".mobile-menu").css({ "display": "none" });
    $(".mobile-menu").fadeOut();
    $(".winds-mb-menu-f").css({ "display": "none" });
    // $(".winds-mb-menu-f").fadeOut();;
    $(".winds-mb-menu").css({ "display": "inherit" });
    $("body").css({ "overflow-y": "scroll" });
    $(".mobile-nav").css({ "background": "" });




});
$(".wind-other a").addClass("col-6");