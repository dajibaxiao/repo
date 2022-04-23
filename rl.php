<!doctype html>
<html>

<head>
    <link rel="apple-touch-icon" href="http://ukapp.cn/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <title>手游过人脸验证</title>
    <script type="text/javascript">
     // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
     var useragent = navigator.userAgent;
     if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
         // 这里警告框会阻塞当前页面继续加载
         alert('已禁止本次访问：您必须使用微信内置浏览器访问本页面！');
         // 以下代码是用javascript强行关闭当前页面
         var opened = window.open('about:blank', '_self');
         opened.opener = null;
         opened.close();
     }
 </script>
    <style type="text/css">
        @media print {
            BODY {
                display: none
            }
        }

        body {
            margin: 0px;
            padding: 0px;
            font-family: Arial;
            border: 0px;
            z-index: 1;
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        .allnr {
            width: 100%;
            height: auto;
            display: block;
            max-width: 800px;
            margin-top: 80px;
            margin-left: auto;
            margin-right: auto;
        }

        .gonggao {
            width: auto;
            height: auto;
            margin-left: 20px;
            margin-right: 20px;
            background-color: #ffffff;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .ggtile {
            font-size: 18px;
            color: #000000;
            font-weight: 900;
            display: block;
            margin-top: 0px;
        }

        .ggnr {
            color: #616264;
            font-weight: normal;
            font-size: 14px;
            margin-top: 20px;
            display: block;
        }

        .wechat {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 70%;
            height: auto;
        }

        .back {
            font-family: -apple-system-font, "Helvetica Neue", sans-serif;
            margin: 0;
            padding: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            background-color: #000000;
            color: ffffff;
            margin-left: 20px;
            margin-right: 20px;
            height: 50px;
            line-height: 50px;
            width: auto;
            display: block;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
        }
	.back2{
		background-color: #000000;
		color: white;
		margin-left: 20px;
		margin-right: 20px;
		height: 30px;
		line-height: 30px;
		width: auto;
		display: block;
		border-radius: 10px;
		text-decoration: none;
		text-align: center;
        .span {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="allnr">
        <div class="gonggao">
           <a class="back2" href="index.html">返回首页>>></a><br>
            <a class="ggtile">解除手游登录人脸限制</a>
            <a class="ggnr">扫码登录过程中，出现人脸验证情况，将下方二维码截图发给号主，让号主使用微信识别二维码后，手动进行人脸验证。验证完成后，重新去生成上号二维码让号主扫码上号</a>
                        <a class="ggnr" href="gz/index.php"><span class="span"><font color="#FF0000"><b>关注阿九vx：xdoo10089 </b></font><b></b></span></a>
            <img class="wechat" src="./imgs/renlian.png" tppabs="https://imagesup.oss-cn-beijing.aliyuncs.com/img/202109291457543.png">
            <!--<a class="ggnr">添加好友时最好备注来意，个别情况回复慢请见谅。</a>-->
        </div>
    </div>



</body>

</html>