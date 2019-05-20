<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"F:\xampp\htdocs\wr4/application/index\view\index\wrzc.html";i:1528188312;s:63:"F:\xampp\htdocs\wr4\application\index\view\Template\header.html";i:1528108468;s:63:"F:\xampp\htdocs\wr4\application\index\view\Template\footer.html";i:1528037944;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微软官网-支持界面</title>
    <link rel="stylesheet" href="/wr4/public/static/css/layui.css">
    <link rel="stylesheet" href="/wr4/public/static/css/style.css">
    <link rel="stylesheet" href="/wr4/public/static/css/zhichi.css">
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
        
        <!-- 中间块 -->
        <div  class="layui-row" style="margin-top: 10px;">
            <div id="tou" class="layui-col-md12 layui-show-sm-block  layui-hide-xs">
                <li id="li1"><a href="" id="a1">Microsoft支持</a></li>
            </div>
        </div>
        <div  style="overflow: hidden;">
            <div class="layui-row" style="background-color:#f2f2f2;  padding-bottom: 1500px; margin-bottom: -1500px; ">
                <div id="fangwen" class="layui-col-md12 layui-col-sm12  layui-col-xs12">
                    <div id="txt" class="layui-col-md-offset1 layui-col-md6 layui-col-sm7 layui-hide-xs layui-show-sm-block ">
                        <h1 style="">欢迎访问 Microsoft 支持</h1>
                        <input id="search" type="text" name="title" required lay-verify="required" placeholder="搜索帮助" autocomplete="off" class="layui-input">
                        <i id="i1" class="layui-icon  layui-icon-search"></i>
                    </div>
                    <div id="img1" class="layui-col-md5 layui-col-sm5 layui-col-xs12">
                        <div style="width: 212px;height: 206px;margin:50px auto;"><img src="/wr4/public/static/images/1.png"></div>
                    </div>
                    <div class="layui-container">
                        <div id="txt" class="layui-col-xs12 layui-hide-md  layui-hide-sm ">
                            <h1 style="margin-top: 0px;  font-size: 25px; ">欢迎访问 Microsoft 支持</h1>
                            <input id="search" style="margin-bottom: 20px;"  type="text" name="title" required lay-verify="required" placeholder="搜索帮助" autocomplete="off" class="layui-input">
                            <i id="i1" class="layui-icon  layui-icon-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-row">
            <div id="text" class="layui-col-md12">
                <p id="p1">需要哪些产品帮助？</p>
            </div>
        </div>
        <div class="layui-fluid" style="overflow: hidden; width: 90%;">
            <div class="layui-row" id="main" style="margin-top: 50px;">
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3 " id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3"  id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
                <div class="layui-col-md2 layui-col-xs6 layui-col-sm3" id="tubiao2">
                    <div id="images" ><img src="/wr4/public/static/images/2.png"></div>
                </div>
            </div>
        </div>
        <div class="layui-container" style="text-align: center; height: 120px;">
             <a>查看所有 Microsoft 产品</a>
        </div>

        <!-- 界面底部 -->
        <div class="layui-fluid" style="; margin-bottom: 50px;" id="Middlebase">
            <div class="layui-row layui-col-space10">
                <div class="layui-col-md4 layui-col-sm4 layui-col-xs12">
                    <span style="font-family: '微软雅黑';
                        font-size: 25px; line-height: 50px; font-weight:normal;">获取更多支持</span>
                    <ul>
                        <li><a href="">商业领域支持</a></li>
                        <li><a>Surface warranty</a></li>
                        <li><a>举报支持欺诈</a></li>
                        <li><a>隐私问题</a></li>
                        <li><a>订阅获取内容更新</a></li>
                    </ul>
                </div>
                <div class="layui-col-md4 layui-col-sm4 layui-col-xs12" >
                    <span style="font-family: '微软雅黑';
                        font-size: 25px; line-height: 50px;">设置和安装</span>
                    <ul>
                        <li><a>升级到Windows10的帮助</a></li>
                        <li><a>安装Office365家庭版、个人版、大专院校版</a></li>
                        <li><a>激活Office365家庭版、个人版、university、Office2013或Office2016</a></li>
                        <li><a>为什么安装Office需要花费这么长时间</a></li>
                    </ul>
                </div>
                <div class="layui-col-md4 layui-col-sm4 layui-col-xs12">
                    <span style="font-family: '微软雅黑';
                        font-size: 25px; line-height: 50px;">热门主题</span>
                    <ul>
                        <li><a>Windows10中的激活</a></li>
                        <li><a>Windows10帮助和方法</a></li>
                        <li><a>在Windows10、Windows8或Windows7中找不到Office应用？</a></li>
                    </ul>
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
</script>
</script>
</body>
</html>