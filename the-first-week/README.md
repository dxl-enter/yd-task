# 第一周作业
## Yii开发⼀一个图书管理理系统(能够完成增删改查)
🍎开发这个项⽬目的🍎
1. 为啥要⽤用YII? 学习经典的MVC开发模式 
2. 为啥要学PHP? PHP的语⾔言和ES9⾮非常像 
3. PHP为了了解真正后端 为NodeJS做准备 
4. 学习并不不是很熟悉的YII 能够取学习新框架能⼒
5. 为什么要学数据库?前端已经具备完整数据库 
6. 为什么PHP模板?为了学习Vue SSR 
7. HTML不能使⽤自定义的HTML+js
# 第一周实战+作业讲解
## 图书管理系统项目讲义
* 1. MVC模式
	- 单体应用：UI 逻辑（biz）、数据库处理（odbc：统一数据库操作接口 - 20年前的技术）  =双向传递=   数据库 （用户量大了不行）
	- c语言只有库，没有框架（只有企业内部有），技术和业务混合的模式 cs模式（powerbuilder：数据库操作非常简单 - 非常古老的技术 - 被java弄死了 - 用的是b包c java-applet - c - c包b模式 移动端打包壳）业务逻辑写成对应的业务模块（封装在dll里面，而不是ui组件事件里【出问题：导致界面出现没有响应。利用消息循环框架 - 界面有自己的线程 - 消息处理器 - 监听界面事件】）
	- web形式出现，开源才火，现在的框架不带业务 bs模式，更多东西都是由cs来的（是由浏览器处理 - 要和服务器通信 - 等待服务器响应 - 界面也会冻结 - 要对界面进行分层  但是浏览器采用异步处理）
	- 三层结构：controller：调用其他的业务模块 - 给数据库增删改查也设计到model，处理持久层返回的信息（manipulates：操纵）  model：数据模型-涉及业务上的数据结构  （updates：更新到） view （sees：给用户看） user （uses：用户的反馈）controller：负责控制user的对应的action - 业务逻辑
	- 一个典型的web mvc流程：
		+ controller截获用户发出的请求
		+ controller调用model完成状态的读写操作
		+ controller把数据传递给view
		+ view 渲染最终结果并呈现给用户
	- the model-view-controller architecture（图片）
	- 软件的本质：算法+数据结构 （是把view剖出去的）
	- 软件设计层面的本质：数据流（以数据为主题）数据从哪儿产生 - 做什么 - 到哪儿去 - 做什么 - 再到哪儿去
	- 比如查：从db来 返回的数据结构（model） 到 controller（算法-指挥官） 到view 再到浏览器
	- 如果要从多个接口请求数据 ：多个接口统一请求 - 加工数据 - 符合我view的数据统一输出（而不是数据来，加工一半罐到界面，然后再加工再罐，耦合很高）要求不高、数据量不高的需求。如果数据大，会造成服务器、浏览器奔溃 
	- js不适合做计算密集性的，适合做ui密集性的（要采用webworker计算）
	- 软件行业：技术不是会用api，技术是方案（多快好省）
	- 框架是控制台（特征、坑、适合什么）
	
* 2. 环境安全操作步骤
	- xampp（mariaDB：mysql的分叉，约等于mysql，都是同一个作者）：apache（嵌套了php模块）静态的web服务器、可以加模块cgi程序（其他语言写的）、mariaDB（mysql之前的网络型的数据库是oracle、sqlserver、imp、DB2，桌面型数据库：sqlite、access、dbase->foxbase->foxpro）、php、perl（linux的内置语言）
	- php不能使用nginx，因为nginx不支持cgi程序
	- mariaDB和mysql的不同：服务的名字不一样（ps aux|grep mariadb可以看出）
	- 不要下载-vm，它是虚拟机，通过localhost和127.0.0.1是访问不到的，因为它需要虚拟网络
	- nginx要下载稳定版本（别以为越新的越好）
	- 下载yii（通过归档文件安装）basic是直接能跑起来的 adventure只是框架、不能直接使用
	- 修改config/web.php，给cookievalidai添加值，不改用到cookie的时候会报错
	- 保证yii安装目录的访问权限（linux和mac读写权限都的有）
	- 通过浏览器访问yii目录即可
	- phpmyadmin：web版的mysql数据库，mysql数据库千万不能弄它（只能动user：root只能在本机登录,::1:ipv6的），它是数据库核心库,root远程访问是需要root复制一行，host哪个改成%
	- mysqlworkbench 官方的客户端 纯英文的
* 3. yii环境基本配置
	- db.php需要配置dsn 中的localhost（远程操作需要改否则不用改）。dbname：要保证phpmyadmin中有这个数据库。password 测试环境可以为空，上线环境不可以会被黑。所有的都要设置成utf-8（html头、数据库字符集utf8_general_ci，为了扩展的imgi（表情库好）要选择utf8_mb4）
	- 激活gii模块，修改config/web.php,找到一下代码，并检查（查图片）
	- 1. model generator：只填写前两项
	- 2. crud generator: mvc取名（会生成到分别目录里面）
	- 3. yii调试解释：gii的最下面 左下角
	- 4. gii操作界面介绍
	- 5. yii项目结构
* 下周二
	- http协议：前端的基础，讲的晚
