<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>Server酱</title>
        <link href="favicon.ico" rel="shortcut icon">
        <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/serverchan.min.css" type="text/css" />
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/tip.min.css" type="text/css" />
        
        <!-- 自定义背景 -->
        <style>
            body:before{
                background: url(img/bg_wide.jpg) no-repeat bottom center
            }
            @media screen and (max-width: 980px){
                body:before{
                    background-image: url(img/bg_narrow.jpg);
                    background-position: top center;
                }
            }
            #form-bg{
                background: #FFF url(img/bg_form.png) no-repeat bottom right;
            }
            <?php
                if(isset($_GET["nobg"])){
                    echo("body:before{display: none !important}");
                }
            ?>
        </style>
    </head>
    <body>
        <div id="form-bg" style="">
            <form role="form" action="sc.php" method="post" id="send_form" class="well">
                <h4 style="text-align: center;margin-top: 0 !important"><i class="fa fa-weixin"></i> 发送消息</h4>
                <div class="form-group">
                    <label for="text"><i class="fa fa-info-circle"></i> 消息标题</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="必填，最长256字节" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="name"><i class="fa fa-user-o"></i> 您的姓名</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="必填，填写您的姓名" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>                             
                <div class="form-group">
                    <label for="tel"><i class="fa fa-phone"></i> 联系手机</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="必填，填写您的11位手机号" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="contact"><i class="fa fa-envelope-o"></i> 您的邮箱</label>
                    <input type="email" class="form-control" id="contact" name="contact" placeholder="选填，填写你的邮箱，并注意查收邮件" onkeydown="if(event.keyCode==13) return false;" value="">
                </div>
                <div class="form-group">
                    <label for="desp"><i class="fa fa-commenting"></i> 问题描述</label>
                    <textarea class="form-control" id="desp" row="3" placeholder="请描述一下你的问题，最长64K，选填，支持MarkDown，换行请敲两次回车键" name="desp"></textarea>
                </div>
                <button type="submit" id="submit-btn" class="btn btn-primary">发送消息</button>
                <button type="reset" class="btn btn-primary" onclick="$('input').val('');$('textarea').html('')">　重置　</button>
            </form>
        </div>
        <script src="js/submit.min.js"></script>
    </body>

</html>
