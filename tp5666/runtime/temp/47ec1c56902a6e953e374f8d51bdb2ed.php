<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"C:\xampp\htdocs\wr4/application/index\view\index\index.html";i:1555318289;s:63:"C:\xampp\htdocs\wr4\application\index\view\Template\header.html";i:1555318289;s:63:"C:\xampp\htdocs\wr4\application\index\view\Template\footer.html";i:1555318289;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微软官网</title>
    <link rel="stylesheet" href="/wr4/public/static/css/layui.css">
    <link rel="stylesheet" href="/wr4/public/static/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div id="pageWrap">
        <!-- 头部模板 -->
        <!-- 导航栏 -->
        <div id="nav">
            <ul class="layui-nav">
                <!-- 手机端导航图标 -->
                <li class="layui-nav-item layui-hide-lg" id="Mobilelist">
                    <img src="/wr4/public/static/images/nav.png">
                </li>
                <li class="layui-nav-item" id="logo">
                    <a href="<?php echo url('index/index/index'); ?>" style="color: #666;"><img src="/wr4/public/static/images/logo.png" width="40px" height="40px">Microsoft</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="">Office</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="">Windows</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="">Surface</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="">Xbox</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="<?php echo url('index/index/wrzc'); ?>">支持</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="">更多</a>
                    <dl class="layui-nav-child">
                      <dd><a href="javascript:;">修改信息</a></dd>
                      <dd><a href="javascript:;">安全管理</a></dd>
                      <dd><a href="javascript:;">退了</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-hide-xs" id="dl">
                    <a href="">登录</a>
                </li>
                <!-- 购物车图标 -->
                <li class="layui-nav-item" id="Shopping">
                    <a href=""><span class="layui-icon layui-icon-cart-simple"></span></a>
                </li>
                <!-- 搜索框 -->
                <li class="layui-nav-item layui-hide-xs" id="input">
                    <div>
                        <input type="text" value=" 在 Microsoft.com 中搜索"></input>
                        <a href=""><i class="layui-icon layui-icon-search" style="color: #000"></i></a>
                    </div>
                </li>
                <!-- 手机端搜索框 -->
                <li class="layui-nav-item layui-hide-lg" id="sjss"> 
                    <a href=""><i class="layui-icon layui-icon-search" style="color: #000"></i></a>
                </li>
            </ul>
            <!-- 手机端导航栏 -->
            <ul class="layui-nav layui-nav-tree layui-hide-lg" lay-filter="test" id="Mobilenavigation">
            <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
                <li class="layui-nav-item" id="first-li"><a href="">Microsoft 主页</a></li>
                <li class="layui-nav-item"><a href="">Office</a></li>
                <li class="layui-nav-item"><a href="">Windows</a></li>
                <li class="layui-nav-item"><a href="">Surface</a></li>
                <li class="layui-nav-item"><a href="">Xbox</a></li>
                <li class="layui-nav-item"><a href="">支持</a></li>
                <li class="layui-nav-item">
                    <a>更多</a>
                    <dl class="layui-nav-child">
                      <dd><a href="javascript:;">修改信息</a></dd>
                      <dd><a href="javascript:;">安全管理</a></dd>
                      <dd><a href="javascript:;">退了</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <!-- 导航栏结束 -->

        <!-- 轮播图1 -->
        <div class="layui-carousel" id="test1" style="margin: 50px auto;">
            <div carousel-item> 
                <div class="tupian" >
                    <div class="tuwen">
                        <h1 style="font-weight: bolder;">Office 365</h1>
                        <p>借助最新版本的 Word、Excel、PowerPoint 等获得更佳的 Office 使用体验</p>
                        <div class="kuang1 pub">
                            <span>立即购买</span>
                            <i class="layui-icon layui-icon-right"></i>
                        </div>
                    </div>
                </div>
                <div class="tupian1">
                    <div class="tuwen1 ">
                        <h1 style="font-weight: bolder;">Surface Pro</h1>
                        <p>随心所欲，百变菁英</p>
                        <div class="kuang pub">
                            <span>立即购买</span>
                            <i class="layui-icon layui-icon-right"></i>
                        </div>
                    </div>             
                </div>
            </div>
        </div>        

        <!-- 中间产品展示一 -->
        <div class="layui-container" id="cont"> 
            <div class="layui-row " id="dis">
                <div class="layui-col-xs12 layui-col-sm6 layui-col-md3 layui-col-lg3">
                    <img src="/wr4/public/static/images/01.jpg" />
                    <div class="dis1 pub">
                        <p class="big">Surface Book 2</p>
                        <p>性能巨匠。</p>
                        <a href="#">立即购买 </a> 
                        <i class="layui-icon layui-icon-right" ></i>
                    </div>
                    </div>
                    
                <div class="layui-col-xs12 layui-col-sm6 layui-col-md3 layui-col-lg3">
                    <img src="/wr4/public/static/images/02.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Xbox One X</p>
                        <p>真4K 60帧超高清游戏机。</p>
                        <a href="#">立即购买</a>
                        <i class="layui-icon layui-icon-right"></i> 
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm6 layui-col-md3 layui-col-lg3" >
                    <img src="/wr4/public/static/images/03.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Surface Laptop</p>
                        <p>独具匠心，彰显自我。</p>
                        <a href="#">立即购买 </a>
                        <i class="layui-icon layui-icon-right"></i>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm6 layui-col-md3 layui-col-lg3" >
                    <img src="/wr4/public/static/images/04.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Xbox One S</p>
                        <p>物超所值的游戏和娱乐设备，配备 4K 蓝光和视频流。</p>
                        <a href="#">购买 XBOX ONE S </a>
                        <i class="layui-icon layui-icon-right"></i>
                    </div>
                </div>
                </div>
            </div>


        <!-- 中间图片部分 -->
        <div id="pic">
            <div id="pic-show">
                <div class="pic-font">
                    <span>微软官方商城</span>
                    <p>寻找适合的技术，满足生活、学习、工作和娱乐之所需。</p>
                    <div class="fangkuai pub">
                        <span>立即够买</span>
                        <i class="layui-icon layui-icon-right" ></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 产品展示部分二 -->
        <div class="layui-row" id="cont-font">
            <div class="ayui-col-xs12 layui-col-sm6 layui-col-md12">
                <span>适用于工作地点</span>
            </div>
        </div>

        <div class="layui-container" id="cont"> 
            <div class="layui-row" id="dis">
                    
                <div class="ayui-col-xs12 layui-col-sm6 layui-col-md3"  >
                    <img src="/wr4/public/static/images/05.jpg" />
                    <div class="dis1 pub">
                        <p class="big">面向企业的 Office 365</p>
                        <p>无论联机或脱机，均可随时随地访问您的文件。</p>
                        <a href="#">了解更多</a>
                        <i class="layui-icon layui-icon-right"></i> 
                    </div>
                </div>
                <div class="ayui-col-xs12 layui-col-sm6 layui-col-md3" >
                    <img src="/wr4/public/static/images/06.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Windows 10 企业版</p>
                        <p>下载适用于 IT 专业人士的 90 天免费评估版。</p>
                        <a href="#">立即下载 </a>
                        <i class="layui-icon layui-icon-right"></i>
                    </div>
                </div>
                <div class="ayui-col-xs12 layui-col-sm6 layui-col-md3" >
                    <img src="/wr4/public/static/images/07.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Microsoft HoloLens</p>
                        <p>预定开发版。改变你的世界。</p>
                        <a href="#">立即订购</a>
                        <i class="layui-icon layui-icon-right"></i> 
                    </div>
                </div>
                <div class="ayui-col-xs12 layui-col-sm6 layui-col-md3" >
                    <img src="/wr4/public/static/images/08.jpg"/>
                    <div class="dis1 pub">
                        <p class="big">Microsoft Azure</p>
                        <p>脱离服务器的束缚 - 无需管理基础结构即可更快地构建应用。</p>
                        <a href="#">了解更多 </a>
                        <i class="layui-icon layui-icon-right"></i>
                    </div>
                </div> 
            </div>
        </div>

        <!-- 轮播图2 -->
        <div class="layui-carousel" id="test2" style="margin: 50px auto;">
            <div carousel-item> 
                <div class="tupian2" >
                    <div class="tuwen">
                        <h1 style="font-weight: bolder;">微软中国Events Hub</h1>
                        <p>了解更多微软中国市场活动</p>
                        
                        <div class="kuang1 pub">
                            <span>立即购买</span>
                            <i class="layui-icon layui-icon-right"></i>
                        </div>
                    </div>
                </div>
                <div class="tupian3">
                    <div class="tuwen1 ">
                        <h1 style="font-weight: bolder;">ai//innovate</h1>
                        <p>2018 微软人工智能大会</p>
                        <p>2018年5月21日 中国.北京</p>
                        <div class="kuang pub">
                            <span>立即购买</span>
                            <i class="layui-icon layui-icon-right"></i>
                        </div>
                    </div>             
                </div>
            </div>
        </div>
        <!-- 关注块 -->
        <div class="layui-container" id="font" >
            <div class="layui-row" id="fon" >
                <div class="layui-col-xs12 layui-col-sm12 layui-col-md12" id="fon1">
                    <span>关注 Microsoft</span>
                    <img id="weixin" src="/wr4/public/static/images/wechat.png">
                    <img src="/wr4/public/static/images/weibo.png">
                    <span><img src="/wr4/public/static/images/weixin.png" alt="微信二维码"></span>
                </div>  
            </div>
        </div>
        <!-- 底部模板 -->
        <!-- 底部 -->
    <div class="layui-container" id="bottom">  
        <div class="layui-row" id="down" >
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>新增内容</span>
                <p>Surface Book 2</p>
                <p>Surface Pro</p>
                <p>Xbox One X</p>
                <p>Xbox One S</p>
                <p>Windows 10 应用程序</p>
            </div>
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>应用商店和支持</span>
                <p>帐户个人资料</p>
                <p>下载中心</p>
                <p>订单跟踪</p>
                <p>支持</p>
            </div>
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>教育</span>
                <p>Microsoft 教育领域</p>
                <p>适合学生的 Office</p>
                <p>适用于学校的 Office 365</p>
                <p>Microsoft Azure 教育领域</p>
            </div>
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>企业</span>
                <p>企业</p>
                <p>数据平台</p>
                <p>查找解决方案提供商</p>
                <p>Microsoft 合作伙伴资源</p>
                <p>Microsoft AppSource</p>
                <p>制造业与资源</p>
                <p>金融服务</p>              
            </div>
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>开发人员</span>
                <p>Microsoft Visual Studio</p>
                <p>Windows 开发人员中心</p>
                <p>开发人员网络</p>
                <p>TechNet</p>
                <p>Microsoft Virtual Academy</p>
                <p>Microsoft 开发人员计划</p>
                <p>通道 9</p>
                <p>Office 开发人员中心</p> 
            </div>
            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" id="down1">
                <span>公司</span>
                <p>招贤纳士</p>
                <p>关于 Microsoft</p>
                <p>公司新闻</p>
                <p>Microsoft 合作伙伴资源</p>
                <p>Microsoft 隐私</p>
                <p>投资人</p>
                <p>安全性</p> 
            </div>
        </div>
       <div class="layui-row" id="last" >
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md3" id="last1">
               <i class="layui-icon layui-icon-website"></i>
               <span>中文（中国）</span>
            </div> 
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3" id="last2">
               <span class="pub">与我们联系</span>
               <span class="public">隐私与 Cookie</span>
               <span class="public">使用条款</span>
               <span class="public">商标</span>
            </div>
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3" id="last2">
               <span class="public">关于我们的广告</span>
               <span class="public">京ICP备09042378号-6</span>
            </div>
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3" id="last2">
               <span class="public">京公网安备11010802023178</span>
               <span class="public">Microsoft2018</span>
            </div>
       </div> 
    </div>

    </div>
<script type="text/javascript" src="/wr4/public/static/js/layui.all.js"></script>
<script type="text/javascript" src="/wr4/public/static/js/jquery-1.12.4.js"></script>
<script type="text/javascript">
    //导航样式
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var elem2ent = layui.element;

        //…
    });

    //手机导航单击事件
    $('#Mobilelist').click(function(){

            if ($('#Mobilenavigation').is(':visible')){
                //执行收回
                $('#Mobilenavigation').hide();
            }
            else
            {
                //执行展开
                $('#Mobilenavigation').show();
            }
        });


        // 获取视口宽度
        //var viewPortWidth = document.documentElement.clientWidth;
        //轮播
        layui.use('carousel', function(){
          var carousel = layui.carousel;
          //建造实例
          carousel.render({
            elem: '#test1'
            ,width:'88%' //设置容器宽度
          ,height: '450'
        //  ,arrow: 'always' //始终显示箭头
        //    ,anim: 'updown' //切换动画方式
          });
        });


        //轮播二
        layui.use('carousel', function(){
          var carousel = layui.carousel;
          //建造实例
          carousel.render({
            elem: '#test2'
            ,width:'88%' //设置容器宽度
          ,height: '450'
        //  ,arrow: 'always' //始终显示箭头
        //    ,anim: 'updown' //切换动画方式
          });
        });


    // ">"的动画效果

    $('.pub').hover(function(){
            $(this).children('i').animate({'margin-left':5});
        },function(){
            $(this).children('i').animate({'margin-left':0});
    });
   
   // 鼠标触碰微信弹出二维码
   $('#weixin').hover(function()
   {
        $(this).nextAll('span').show();
   },function(){
        $(this).nextAll('span').hide();
   });
</script>
</script>
</body>
</html>