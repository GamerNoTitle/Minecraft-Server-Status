# Minecraft-Server-Status
在网页中看到你的MC服务器状态！由[@MCNewsTools](https://github.com/MCNewsTools/webpage-minecraft-server-status)的项目修改而来！

使用了[HTML5](https://html5up.net/)的模板，做了一些美化，如果你也想用本项目，记得在改PHP内嵌的HTML代码的时候把有关的内容改掉

玩家头像显示调用的是[cravatar.eu](cravatar.eu)的链接，国内404，请自建反代或镜像站并替换里面的链接（[自建反代教程](https://bili33.top/2019/10/25/CloudFlare-Workers-Section1/)）

本开源项目遵循[MPL-2.0](https://github.com/GamerNoTitle/Minecraft-Server-Status/blob/master/LICENSE)协议，请遵守该协议！

Demo: http://mcstats.bili33.top

### 使用方法

#### 基础使用

只需要修改index.php中第3行的`$host`后面的内容为你的域名/IP和修改第4行的`$port`后面为你的端口号

#### 更多修改

##### 头像调用链接

在第67行

```php+HTML
<?php echo '<img src="https://cravatar.eu/helmhead/'.htmlspecialchars($Player).'/15.png"> '.htmlspecialchars($Player); ?><br>
```

和第69行

```php+HTML
<?php echo '<img src="https://cravatar.eu/helmhead/steve/15.png"> '.htmlspecialchars($Player); ?><br>
```

中把`cravatar.eu`改成你自己的反代域名或者其他域名就可以了

##### 底端按钮

在第76~78行

```php+HTML
<li><a href="https://bili33.top" class="button">About GamerNoTitle</a></li>
<li><a href="https://github.com/GamerNoTitle/Minecraft-Server-Status" class="button">View on Github</a></li>
<li><a href="https://html5up.net" class="button">HTML5UP</a></li>
```

格式是

```html
<li><a href="在这里填入你的链接" class="button">在这里填入显示的文字</a></li>
```

##### 右侧图片

在第81行

```html
<span class="image"><img src="https://cdn.jsdelivr.net/gh/GamerNoTitle/Picture-repo@1.0/AboutMe/logo-mini.png" alt="" /></span>
```

直接把`src=`后面的链接改成你的图片链接即可！

```html
<span class="image"><img src="在这里填入你的链接" alt="" /></span>
```

#### 进阶修改

在\<html>元标记直接用任意html语法修改即可！会HTML的人就能改！

### 预览图

![](https://cdn.jsdelivr.net/gh/GamerNoTitle/Minecraft-Server-Status@master/preview.png)

---

Credit:

[@MCNewsTools/webpage-minecraft-server-status](https://github.com/MCNewsTools/webpage-minecraft-server-status)