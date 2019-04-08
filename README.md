# serverchan-private-letter
一个基于 [serverchan](https://sc.ftqq.com) 微信推送服务的私信发送器，本项目fork @[Tsuk1ko/serverchan-private-letter](https://github.com/Tsuk1ko/serverchan-private-letter)进行的一些小修改。可用于个人博客联系方式等私信发送需求场合，并且会将消息发送者的 IP 和表单提交的用户姓名、邮箱地址、手机号、信息等一并推送至微信。

## 截图

![mobile.jpg](https://ws3.sinaimg.cn/large/005BYqpgly1g1va4k582uj30oq0i8q3t.jpg)
![PC.jpg](https://ws3.sinaimg.cn/large/005BYqpggy1g1va3l6ovnj30nw0f13z5.jpg)

**安装环境：**`nginx` `apache`之类的再加上`php`就能跑了吧

部署完之后请修改`.key.php`，写上你的`SCKEY`

如果需要修改背景图片之类的请编辑`index.php`修改 head 中的 css 内容

另外，访问时带上 get 参数`nobg`可以将背景图变成透明，方便在 iframe 中使用
```
https://xxx.com/?nobg
```
