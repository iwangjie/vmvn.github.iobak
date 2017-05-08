<?php
   
?>
<html>
<head>
<title>解析中..</title>
 <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<script>
   function getQueryString(a) {
        a = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i");
        a = window.location.search.substr(1).match(a);
        return null != a ? unescape(a[2]) : null
    }
    $(function(){
        //获取地址
        url = getQueryString("url");
        if (url !== null && url !== undefined && url !== '') { 
            //加载ifreme插件
            $("body").html("<iframe src='https://vip.api.47ks.com/cp0309/?v="+url+"' height='100%' width='100% frameborder='0'></iframe>");     
        }else{
            //输入地址为空，播放默认视频
            //alert("输入地址为空，将播放默认视频！");
            $("body").html("<iframe src='https://vip.api.47ks.com/cp0309/?v=http://www.iqiyi.com/v_19rrb8qeok.html' height='100%' width='100% frameborder='0'></iframe>");
        } 
    })
</script>
<body>
</body>
</html>