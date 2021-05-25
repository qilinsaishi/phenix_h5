<!DOCTYPE html>
<html lang="en">
<?php include_once ("web.php");
$params = [
    "defaultConfig"=>["keys"=>["ios_url","android_url","contact_type","contact_content","copy_text"],"fields"=>["name","key","value"],"site_id"=>6],
];
$return = curl_post(json_encode($params),1);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="format-detection" content="telephone=no">
    <title>凤凰电竞-一站式电竞竞猜平台</title>
    <script src="./js/flexible.js"></script>
    <link rel="stylesheet" href="./css/index.css">

    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?a2c06161561401fbffafb9af1cc534b1";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<script type='text/javascript'>
    (function(a, b, c, d, e, j, s) {
        a[d] = a[d] || function() {
            (a[d].a = a[d].a || []).push(arguments)
        };
        j = b.createElement(c),
            s = b.getElementsByTagName(c)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = 'https://static.meiqia.com/widget/loader.js';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 'b948b78e11238278a4931fec12f85650');
</script>
<body>
    <div class="wrapper">
        <div class="titleimg">
            <img src="./images/title.png" alt="">
        </div>
        <div class="banner">
            <img src="./images/img1.png" alt="">
        </div>
        <div class="btn">
            <a href="<?php echo $return['defaultConfig']['data']['android_url']['value'];?>" class="android">
                <img src="./images/android.gif" alt="">
            </a>
            <a href="<?php echo $return['defaultConfig']['data']['ios_url']['value'];?>" class="ios">
                <img src="./images/ios.gif" alt="">
            </a>
        </div>
        <div class="weixin">
            <p>添加<?php echo $return['defaultConfig']['data']['contact_type']['value'];?>：<span><?php echo $return['defaultConfig']['data']['contact_content']['value'];?></span>领取礼金</p>
            <a href="##" onclick="copyText()" class="click show"><?php echo $return['defaultConfig']['data']['copy_text']['value'];?></a>
        </div>
        <p class="copyright">
            <a href="https://beian.miit.gov.cn/">琼ICP备19001306号-4</a></p>
    </div>
    <div class="mip-sjh-wechat-model">
        <div class="mip-fill-content">
            <div class="wechat-model-layer">
                <img class="iconguanbi close" src="./images/plus.png" />
                <div class="wechat-model-success">
                    <div class="image">
                        <img src="./images/wechat_success_icon.png"
                            class="wechat_success_logo">
                    </div>
                    <div class="title">复制成功</div>
                    <div class="desc">添加<?php echo $return['defaultConfig']['data']['contact_type']['value'];?>, 领取福利</div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/zepto.js"></script>
    <script>
        function copyText() {
            const input = document.createElement('input')
            document.body.appendChild(input)
            input.setAttribute('value', "<?php echo $return['defaultConfig']['data']['contact_content']['value'];?>")
            input.select()
            if (document.execCommand('copy')) {
                document.execCommand('copy')
            }
            document.body.removeChild(input);
        }


        $(".close,.knowButton").click(function () {
            $(".mip-sjh-wechat-model").hide();
        })

        $(".show").click(function () {
            $(".mip-sjh-wechat-model").show();
        })
    </script>
</body>

</html>