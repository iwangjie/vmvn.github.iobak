<?php
    
?>
<html lang="zh">
    <head>
        <title>免费云解析</title>
        <meta charset="UTF-8">
    </head>
<body>
    

</body>
</html>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
 <style type="text/css">
 body,html,div{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;color:#aaa;}
</style>
<script>
    //获取请求参数方法
    function getQueryString(a) {
        a = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i");
        a = window.location.search.substr(1).match(a);
        return null != a ? unescape(a[2]) : null
    }
    $(function(){
         //获取地址和视频类型
        url = getQueryString("url");
        type = getQueryString("type");
        $("<iframe src='/api.php?url="+url+"&type="+type+" width='100%' scrolling='no' height='100%' id='YuFrame1' name='YuFrame1' style='position:absolute;z-index:4;'  align='middle' frameborder='no' hspace='0' vspace='0' marginheight='0' marginwidth='0'></iframe>").prependTo('body');  
        //$("body").html(<iframe src='/api.php?url="+url+"&type="+type" width='100%' scrolling='no' height='100%' align='middle' frameborder='no' hspace='0' vspace='0' marginheight='0' marginwidth='0'></iframe>");
        //加载iframe
    });
   
</script>

