<?php 

?>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
 <script>
    //浏览器跳转
    function goplay(url){
        window.location.href = "https://vip.api.47ks.com/cp0309/?v="+url;
    }
    //获取请求参数方法
    function getQueryString(a) {
        a = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i");
        a = window.location.search.substr(1).match(a);
        return null != a ? unescape(a[2]) : null
    }
    //是否微信打开
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }
    //是否QQ打开
    function isQQ(){
        if (navigator.userAgent.indexOf('MQQBrowser') !== -1) {
            return true;
        } else {
            return false;
        }
    }
    var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
    //获取地址
    url = getQueryString("url");
    $(function(){
        if(!isiPad){
            alert("目前仅支持手机端调用！");
            window.location.href = "/err.html";
        }
        if(!(isWeiXin()||isQQ()){
            alert("请使用QQ或微信打开连接，观影效果更佳！");
            window.location.href = "/err.html";
        }
        alert("如果发现不能观看，请联系QQ：345127857！");
        goplay();
    })
</script>
