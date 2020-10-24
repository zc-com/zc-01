<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<style>
.DreamCat-footer {
    padding: 10px 0;
    background: rgba(255,255,255,.6);
    box-shadow: 1px 0px 9px 1px rgba(0,0,0,.1);
}
.DreamCat-infooter {
    text-align: center;
    margin: 0 auto;
    font-size: 12px;
    color: #999;
}
</style>
<!--START by LEO-->
<div class="DreamCat-footer">
    <div class="DreamCat-infooter">
                    <div class="mdui-typo"> 
                    <p>Designed by <a href="https://hanfen.run">HanFen</a> Power by <a href="http://typecho.org/">Typecho</a>.</p>
                    <p id="testme">Theme <strong style="color: rgba(77, 136, 255,.9);">DreamCat</strong>
                    <p>Copyright © <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</p>
                    </div>
    </div>
</div>
<!--END-->
<script>
    !function (e, t, a) {
        function r() {
            for (var e = 0; e < s.length; e++) s[e].alpha <= 0 ? (t.body.removeChild(s[e].el), s.splice(e, 1)) : (s[e].y--, s[e].scale += .004, s[e].alpha -= .013, s[e].el.style.cssText = "left:" + s[e].x + "px;top:" + s[e].y + "px;opacity:" + s[e].alpha + ";transform:scale(" + s[e].scale + "," + s[e].scale + ") rotate(45deg);background:" + s[e].color + ";z-index:99999");
            requestAnimationFrame(r)
        }
        function n() {
            var t = "function" == typeof e.onclick && e.onclick;
            e.onclick = function (e) {
                t && t(), o(e)
            }
        }
        function o(e) {
            var a = t.createElement("div");
            a.className = "heart", s.push({
                el: a,
                x: e.clientX - 5,
                y: e.clientY - 5,
                scale: 1,
                alpha: 1,
                color: c()
            }), t.body.appendChild(a)
        }
        function i(e) {
            var a = t.createElement("style");
            a.type = "text/css";
            try {
                a.appendChild(t.createTextNode(e))
            } catch (t) {
                a.styleSheet.cssText = e
            }
            t.getElementsByTagName("head")[0].appendChild(a)
        }
        function c() {
            return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
        }
        var s = [];
        e.requestAnimationFrame = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) {
            setTimeout(e, 1e3 / 60)
        }, i(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"), n(), r()
    }(window, document);
</script>
          <div class="mdui-dialog" id="About_DreamCat">
            <div class="mdui-dialog-title">ABOUT DreamCat</div>
            <div class="mdui-dialog-content">
            <blockquote>
                <div class="mdui-chip">
                  <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">star</i></span>
                  <span class="mdui-chip-title">DreamCat</span>
                </div>
                <div class="mdui-chip">
                  <span class="mdui-chip-icon mdui-color-blue">X</span>
                  <span class="mdui-chip-title">1.4-2020507</span>
                </div>
				<br/>
				</p> 
				<div class="mdui-typo">       
				<p>开发者: <a href="https://github.com/Han-Fen" target="_blank">HanFen</a> | <a href="https://github.com/pa4sword" target="_blank">pa4sword</a> | <a href="https://github.com/
Dev-Leo" target="_blank">
Dev-Leo</a></p>
                <p>鸣谢:<a href="https://github.com/DFFZMXJ" target="_blank">学神之女</a></p>
				</div>
				<footer>© Copyright 2015-2020 by LychApe All rights are reserved.</footer>
			</blockquote>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-close>知 道 啦 !</button>
            </div>
          </div>

<!--右下悬浮按钮-->
  <div class="mdui-fab-wrapper">
        <a href="#top" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink" id="myBtn">
          <i class="mdui-icon material-icons">&#xe5d8;</i></a>
  </div>
<!-- 返回顶部js -->
<script src="//cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>
<script src='https://cdnjs.loli.net/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js'></script>
<script>
var scroll = new SmoothScroll("a[href*='#']");
var $$ = mdui.JQ;
$$('#myBtn').on('click', function () {
  mdui.snackbar({
    message: '啊！撞到头辣！(๑╹っ╹๑)',
    position: 'right-top'
  });
});
var $$ = mdui.JQ;
$$('#ERRO-404').on('click', function () {
  mdui.snackbar({
    message: '当前状态不支持辣！(๑╹っ╹๑)',
    position: 'right-top'
  });
});
// 当网页向下滑动 30px 出现"返回顶部" 按钮
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
</script>
<!---<script type="text/javascript" src="https://down.inwao.com/Bash/jquery.min.js"></script>
<script type="text/javascript" src="https://down.inwao.com/Bash/go-top.js"></script>!-->

</div>
<?php $this->footer(); ?>
</body>
</html>