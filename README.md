# Minecraft-Server-Status

![Minecraft-Server-Status](https://socialify.git.ci/GamerNoTitle/Minecraft-Server-Status/image?description=1&language=1&name=1&owner=1&stargazers=1&theme=Light)

在网页中看到你的MC服务器状态！由[@MCNewsTools](https://github.com/MCNewsTools/webpage-minecraft-server-status)的项目修改而来！

使用了[HTML5](https://html5up.net/)的模板，做了一些美化，如果你也想用本项目，记得在改PHP内嵌的HTML代码的时候把有关的内容改掉

玩家头像显示调用的是[cravatar.eu](cravatar.eu)的链接，国内404，请自建反代或镜像站并替换里面的链接（[自建反代教程](https://bili33.top/posts/CloudFlare-Workers-Section1/)）

本开源项目遵循[MPL-2.0](https://github.com/GamerNoTitle/Minecraft-Server-Status/blob/master/LICENSE)协议，请遵守该协议！

Demo: http://mcstats.bili33.top

### 使用方法

#### 基础使用

##### 与服务器对接

只需要修改index.php中第3行的`$host`后面的内容为你的域名/IP和修改第4行的`$port`后面为你的端口号（可以是游戏用的端口也可以是query端口，但是query要自己手动开启而且是UDP协议）

##### 更多修改

只需要将`index.php`文件开头几行的变量修改一下就行了（PS：头像的反代请去把`https://cravatar.eu`自行替换成自己的反代链接）

```php
$host = "mc.example.com"; //设置服务器域名或 IP
$port = "25565"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
$name = 'ExampleName'; // 服务器名字，会显示在标签页的标题和网站打头的大标题处
$iconlink = 'https://cdn.jsdelivr.net/gh/GamerNoTitle/Picture-repo@1.0/AboutMe/logo-mini.png'; // 网站图标链接，可以使图片格式（.png/.jpg/etc.）或者是ico图标，用绝对路径或相对路径均可
$description = 'Server Status by <a href="https://bili33.top">GamerNoTitle</a> | Tamplate by <a href="https://html5up.net">HTML5UP</a><br>Open Source Project <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Minecraft-Server-Status</a> is now avaliable on <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Github</a>'; // 描述，会显示在大标题的下方，用html语法写就可以了，换行请用<br>
$imagelink = 'https://cdn.jsdelivr.net/gh/GamerNoTitle/Picture-repo@1.0/AboutMe/logo-mini.png'; // 图片链接，会显示在服务器信息右边的圈圈里
```



#### 进阶修改

在\<html>元标记直接用任意html语法修改即可！会HTML的人就能改！

### 预览图

![](https://cdn.jsdelivr.net/gh/GamerNoTitle/Minecraft-Server-Status@master/preview.png)

---

Credit:

[@MCNewsTools/webpage-minecraft-server-status](https://github.com/MCNewsTools/webpage-minecraft-server-status)
