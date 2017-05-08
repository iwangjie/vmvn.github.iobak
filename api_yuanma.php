<?php
     
?>
<html lang="zh">
    <head>
        <title>免费云解析</title>
        <meta charset="UTF-8">
        <!-- width=device-width：让文档的宽度与设备的宽度保持一致，且文档最大的宽度比例是1.0,initial-scale=1：初始的缩放比例,maximum-scale=1：允许用户缩放到的最大比例（对应还有个minimum-scale）, user-scalable=no：不允许用户手动缩放-->
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
        <!--  telephone=no：禁止自动将页面中的数字识别为电话号码, address=no：禁止自动地址转为链接,email=no：禁止自动将email转为链接 -->
        <meta name="format-detection" content="telephone=no,address=no,email=no" />
        <!-- 强制将页面布局为一列 -->
        <meta name="mobileOptimized" content="width" />
        <!-- 申明页面是移动友好的 -->
        <meta name="handheldFriendly" content="true" />
        <!-- 允许用户使用全屏模式浏览 -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- 当用户使用全屏浏览时，将状态条设置为黑色 -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    </head>
    <style type="text/css">body,html{padding: 0;margin: 0;width:100%;height:100%;background-color:#000; color:#999;}
     #a1,#loading,#error{padding: 0;margin: 0;width:100%;height:100%;background-color:#000; color:#999;}
    </style>
    <body id="main">
        <div id="loading" align="center" style=""><strong><br><br><br><br><br>正在加载播放中,请稍等....<input type="button" value="刷新" onclick="location.replace(location)"><br><br><a href="https://vmvn.github.io/" target="_parent">免费解析接口</a></strong></div>
        <div id="a1"></div>
        <div id="error" align="center" style="display:none;color:#f90;"><br><br><br><br><br>视频加载失败，请稍候再试...</div>
    </body>
 <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="./ck/ckplayer.js" charset="utf-8"></script>
 <script>
     //获取浏览器宽和高
     width = document.body.scrollWidth;
     height = document.body.scrollHeight; 
     //获取请求参数方法
    function getQueryString(a) {
        a = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i");
        a = window.location.search.substr(1).match(a);
        return null != a ? unescape(a[2]) : null
    }
    //获取地址和视频类型
    url = getQueryString("url");
	type = getQueryString("type");
   
    </script>

    <script>
        (function(global){"use strict";var _Base64=global.Base64;var version="2.1.9";var buffer;if(typeof module!=="undefined"&&module.exports){try{buffer=require("buffer").Buffer}catch(err){}}var b64chars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";var b64tab=function(bin){var t={};for(var i=0,l=bin.length;i<l;i++)t[bin.charAt(i)]=i;return t}(b64chars);var fromCharCode=String.fromCharCode;var cb_utob=function(c){if(c.length<2){var cc=c.charCodeAt(0);return cc<128?c:cc<2048?fromCharCode(192|cc>>>6)+fromCharCode(128|cc&63):fromCharCode(224|cc>>>12&15)+fromCharCode(128|cc>>>6&63)+fromCharCode(128|cc&63)}else{var cc=65536+(c.charCodeAt(0)-55296)*1024+(c.charCodeAt(1)-56320);return fromCharCode(240|cc>>>18&7)+fromCharCode(128|cc>>>12&63)+fromCharCode(128|cc>>>6&63)+fromCharCode(128|cc&63)}};var re_utob=/[\uD800-\uDBFF][\uDC00-\uDFFFF]|[^\x00-\x7F]/g;var utob=function(u){return u.replace(re_utob,cb_utob)};var cb_encode=function(ccc){var padlen=[0,2,1][ccc.length%3],ord=ccc.charCodeAt(0)<<16|(ccc.length>1?ccc.charCodeAt(1):0)<<8|(ccc.length>2?ccc.charCodeAt(2):0),chars=[b64chars.charAt(ord>>>18),b64chars.charAt(ord>>>12&63),padlen>=2?"=":b64chars.charAt(ord>>>6&63),padlen>=1?"=":b64chars.charAt(ord&63)];return chars.join("")};var btoa=global.btoa?function(b){return global.btoa(b)}:function(b){return b.replace(/[\s\S]{1,3}/g,cb_encode)};var _encode=buffer?function(u){return(u.constructor===buffer.constructor?u:new buffer(u)).toString("base64")}:function(u){return btoa(utob(u))};var encode=function(u,urisafe){return!urisafe?_encode(String(u)):_encode(String(u)).replace(/[+\/]/g,function(m0){return m0=="+"?"-":"_"}).replace(/=/g,"")};var encodeURI=function(u){return encode(u,true)};var re_btou=new RegExp(["[À-ß][-¿]","[à-ï][-¿]{2}","[ð-÷][-¿]{3}"].join("|"),"g");var cb_btou=function(cccc){switch(cccc.length){case 4:var cp=(7&cccc.charCodeAt(0))<<18|(63&cccc.charCodeAt(1))<<12|(63&cccc.charCodeAt(2))<<6|63&cccc.charCodeAt(3),offset=cp-65536;return fromCharCode((offset>>>10)+55296)+fromCharCode((offset&1023)+56320);case 3:return fromCharCode((15&cccc.charCodeAt(0))<<12|(63&cccc.charCodeAt(1))<<6|63&cccc.charCodeAt(2));default:return fromCharCode((31&cccc.charCodeAt(0))<<6|63&cccc.charCodeAt(1))}};var btou=function(b){return b.replace(re_btou,cb_btou)};var cb_decode=function(cccc){var len=cccc.length,padlen=len%4,n=(len>0?b64tab[cccc.charAt(0)]<<18:0)|(len>1?b64tab[cccc.charAt(1)]<<12:0)|(len>2?b64tab[cccc.charAt(2)]<<6:0)|(len>3?b64tab[cccc.charAt(3)]:0),chars=[fromCharCode(n>>>16),fromCharCode(n>>>8&255),fromCharCode(n&255)];chars.length-=[0,0,2,1][padlen];return chars.join("")};var atob=global.atob?function(a){return global.atob(a)}:function(a){return a.replace(/[\s\S]{1,4}/g,cb_decode)};var _decode=buffer?function(a){return(a.constructor===buffer.constructor?a:new buffer(a,"base64")).toString()}:function(a){return btou(atob(a))};var decode=function(a){return _decode(String(a).replace(/[-_]/g,function(m0){return m0=="-"?"+":"/"}).replace(/[^A-Za-z0-9\+\/]/g,""))};var noConflict=function(){var Base64=global.Base64;global.Base64=_Base64;return Base64};global.Base64={VERSION:version,atob:atob,btoa:btoa,fromBase64:decode,toBase64:encode,utob:utob,encode:encode,encodeURI:encodeURI,btou:btou,decode:decode,noConflict:noConflict};if(typeof Object.defineProperty==="function"){var noEnum=function(v){return{value:v,enumerable:false,writable:true,configurable:true}};global.Base64.extendString=function(){Object.defineProperty(String.prototype,"fromBase64",noEnum(function(){return decode(this)}));Object.defineProperty(String.prototype,"toBase64",noEnum(function(urisafe){return encode(this,urisafe)}));Object.defineProperty(String.prototype,"toBase64URI",noEnum(function(){return encode(this,true)}))}}if(global["Meteor"]){Base64=global.Base64}})(this);
    </script>
    <script>

function player(data){
    var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
    //判空
        if (null !== url && void 0 !== url && "" !== url && null !== type && void 0 !== type && "" !== type) {
            if(data.success == 1){
                var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
                if(data.play == 'url'){
                    $('#a1').html('<iframe width="100%" height="100%" allowTransparency="true" frameborder="0" scrolling="no" src="'+data.url+'"></iframe>');
                } else if(isiPad || data.play == 'html5'){
                    $('#a1').html('<video src="'+data.url+'" controls="controls" preload="preload" poster="/wap.gif" width="100%" height="100%"></video>');
                } else {
                    if(data.play == 'm3u8'){
                        var flashvars={f:'/ck/m3u8.swf',a:data.url,c:0,p:1,s:4,v:100,lv:0,loaded:'error'};
                    } else {
                        var flashvars={f:'http://aikan-tv.com/api1.php?key=8be00da634c9f57f6810f9c0dea458aa&time=1494208635&url='+url+'&type=&xml=1',c:0,s:2,p:1,b:1};
                    }
                  var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                CKobject.embedSWF('/ck/ckplayer.swf','a1','ckplayer_a1','100%','100%',flashvars,params);
                }
                $('#loading').hide();
                $('#a1').show();
            }else{
                $('#loading').hide();
                $('#a1').hide();
        $('#error').html('<br><br><br><br><br>'+data['m']);
                $('#error').show();
            }
      } else document.write("参数错误！ 调用格式：https://vmvn.github.io/api.html?url=视频连接&type=视频类型(qq,iqy,youku)");
}

    //    function play(data){
    //     //判空
    //     if (null !== url && void 0 !== url && "" !== url && null !== type && void 0 !== type && "" !== type) {
    //         var flashvars = {
    //             f: "http://aikan-tv.com/api1.php?key=8be00da634c9f57f6810f9c0dea458aa&time=1494208635&url=" + url + "&type=" + type + "&xml=1",
    //             s: 2,
    //             c: 0
    //         },
    //             params = {
    //                 bgcolor: "#FFF",
    //                 allowFullScreen: !0,
    //                 allowScriptAccess: "always",
    //                 wmode: "transparent"
    //             };
    //             var video=['http://movie.ks.js.cn/flv/other/1_0.mp4->video/mp4'];
    //             CKobject.embed('./ck/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params);
    //         } else document.write("参数错误！ 调用格式：https://vmvn.github.io/api.html?url=视频连接&type=视频类型(qq,iqy,youku)");
    //    } 
        //jsonp回调函数
       function datac(data){
            //alert(data.play)
            //得到json对象,调用播放方法
            player(data);
       }
       //创建script标签
       var script = document.createElement('script');
       script.type = 'text/javascript';
       script.src = 'http://api99.qzone8.cc/345127857.php?n='+url;     //填自己的js路径
       $('body').append(script);
    </script>
    <!--//跨域获取视频类型-->
    </body>
</html>