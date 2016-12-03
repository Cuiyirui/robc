<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/robc/Public/pics/logo.jpg" type="image/x-ico">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>
    <!-- Bootstrap -->
    <link href="/robc/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/robc/Public/jquery/jquery-1.11.3.min.js"></script>
    <!-- 自己的js和css -->
    <!-- <script src="/robc/Public/myjs/"></script> -->
    <link href="/robc/Public/mycss/index.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <!-- 包含头部显示文件 -->
            <link href="/robc/Public/mycss/header.css" rel="stylesheet">
<!-- 头部文字 -->
<div class="row">
    <div class="col-md-2">
        <img src="/robc/Public/pics/logo.jpg" alt="..." class="img-rounded" id="logo">
    </div>
    <div class="col-md-10">
        <br/>
        <p id="head-text">
            国家重点研发计划——重要热带病传播相关的入侵媒介及其病原体的生物学特性研究
        </p>
        <div class="row">
            <div class="col-md-8">
                <p id="sub-head-text">
                    National Research and Development Plan: Research on Biological Characteristics of the Tropical Disease Related Invasion vectors and Pathogens
                </p>
            </div>
            <div class="col-md-2">
                <div class="form-group has-success has-feedback">
                    <input type="text" class="form-control" id="inputSuccess2">
                    <span class="glyphicon glyphicon-search form-control-feedback" id="search-btn"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 导航条 -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid" id="nav">
        <ul class="nav navbar-nav" id="nav-content">
            <li class="active "><a href="<?php echo U('Index/index');?>" class="nav-item nav-active">首页</a></li>
            <li><a href="<?php echo U('AboutProject/show');?>" class="nav-item">关于项目</a></li>
            <li><a href="#" class="nav-item">研究团队</a></li>
            <li><a href="#" class="nav-item">项目进展</a></li>
            <li><a href="#" class="nav-item">发表文章</a></li>
            <li><a href="#" class="nav-item">学术交流</a></li>
        </ul>
    </div>
</nav>

            <!-- 项目简介 -->
            <div class="row">
                <div class="col-sm-7 project-introduction">
                    <p class="project-introduction-title">项目简介</p>
                    <p class="project-introduction-paragraph">
                        “保障人类健康”是我国生物安全优先考虑的战略重点之一。医学媒介生物及其相关病原体的入侵可引起如登革热、寨卡病毒病、疟疾、锥虫病、血吸虫病、广州管圆线虫病等重要热带病的流行、疫情暴发与扩散，甚至成为重大公共卫生安全事件，对人类健康和社会稳定构成极大威胁。
                    </p>
                    <p class="project-introduction-paragraph">
                        本项目拟以入侵螺类（福寿螺和褐云玛瑙螺、藁杆双脐螺）、入侵伊蚊（埃及伊蚊和白纹伊蚊）、输入性病原体（疟原虫、锥虫和血吸虫）等为研究对象，开展它们的入侵与疾病传病相关的生物学特性研究，为建立媒介生物及其病原体入侵、扩散和传播的快速侦查、风险评估及预警处置体系提供科学依据和技术支撑，以推动我国生物安全科技支撑能力建设。
                    </p>
                    <p class="project-introduction-paragraph">
                        围绕“主要入侵生物入侵致害相关生物学特性，鉴别其分子标记以及与宿主相互作用的分子机制”的关键科学问题，本项目拟设置4 个课题。
                    </p>
                    <p class="project-introduction-paragraph">
                        <b>课题1：入侵媒介及相关病原入侵致害的相关生物学特性研究</b>：将研究入侵生物的生态多型、形态学标定与以及鉴定的分子标记，建立标准化的鉴定指南；揭示入侵媒介生物对我国本地病原体的易感性和输入性病原对我国本地媒介生物的感染性，并探索输入性病原体通过蚊媒经卵传播实现本地化的可能性，最终确定这些入侵生物传播疾病的风险性。
                    </p>
                    <p class="project-introduction-paragraph">
                        <b>课题2：入侵媒介的生态适应性及进化研究研究</b>：围绕入侵媒介生物的不同生态型群体，研究预测它们对新生境的适应性及其扩散潜能；基于入侵生物不同生态型的系统地理模式、易感性差异、抗逆机制及其传播疾病潜能研究，揭示入侵生物在扩散和定殖过程中的环境适应性及入侵扩散规律。
                    </p>
                    <p class="project-introduction-paragraph">
                        <b>课题3：入侵媒介及相关病原的种质遗传学特征和生态适应的分子机制研究</b>：运用比较基因组学和群体遗传学方法，研究入侵媒介和病原体本地化过程中时空遗传变异规律、入侵、适应性和易感性的遗传学基础，揭示入侵生物及其不同生态型群体的种系发生过程，评估入侵生物与本地种通过天然杂交与遗传渐渗而发生的基因组混合，以及因此带来的扩散和致病风险。筛选可用于鉴别入侵媒介或输入病原体的分子标志。
                    </p>
                    <p class="project-introduction-paragraph">
                        <b>课题4：入侵媒介和病原体/病原体与宿主（媒介）相互作用的分子机制研究</b>：在遗传学研究的基础上，开展本地病原体与入侵媒介生物、输入性病原体与本地宿主（含媒介生物）、外来病原体与相关病原体（含共生菌）共感染与宿主、外来媒介生物与本地相近媒介生物相互作用的分子机制研究；为疫情评价/监控技术以及防治药物的开发提供生物靶标。
                    </p>
                    <p class="project-introduction-paragraph">
                        本项目的完成，将丰富我国重要热带病入侵媒介螺类（福寿螺、褐云玛瑙螺、双脐螺）和伊蚊（埃及伊蚊和白纹伊蚊）入侵、扩散和传病相关的生物学特性，获得一批创新性成果（高水平论文、专著、专利和指南等），提升我国入侵媒介生物领域的研究水平，提高国家生物安全科技支撑能力。
                    </p>
                </div>
                <!-- 右侧-新闻动态，通知公告 -->
                <div class="sidebar col-sm-5 ">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="panel panel-success">
                                <div class="more-news">
                                    <a href="http://news2.sysu.edu.cn/">More &gt;&gt;</a>
                                </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title">新闻动态</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="news-ul">
                                        <li>
                                            <span class="news-date">16-08-07</span>
                                            <div class="news-title">
                                                <a href="http://news2.sysu.edu.cn/news01/147148.htm">
                                                    <nobr>附属三院高志良教授团队发表乙肝治愈标志物研究新成果</nobr>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="news-date">16-08-03</span>
                                            <div class="news-title">
                                                <a href="http://news2.sysu.edu.cn/news03/147153.htm">
                                                    <nobr>广东21家医院组建医疗联盟</nobr>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="news-date">16-07-25</span>
                                            <div class="news-title">
                                                <a href="http://news2.sysu.edu.cn/news03/147149.htm">
                                                    <nobr>广州研究团队历经六年，发现鼻咽癌易感基因位点“家族”的两个新成员</nobr>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel-success -->
                            <div class="panel panel-danger">
                                <div class="more-notifications">
                                    <a href="http://www.sysu.edu.cn/2012/en/announcements/index.htm">More &gt;&gt;</a>
                                </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title">通知公告</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="notification-ul">
                                        <li>
                                            <span class="notification-date">16-08-05</span>
                                            <div class="notification-title">
                                                <a href="https://www.baidu.com/">
                                                    <nobr>项目启动会将于2016年8月13-14日在中山大学南校区举办</nobr>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-date">16-08-02</span>
                                            <div class="notification-title">
                                                <a href="https://oa.sysu.edu.cn/oa/info/sysu/00000000560786d50156455a4c861f57/index">
                                                    <nobr>关于做好防台风防汛工作的通知</nobr>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="notification-date">16-07-08</span>
                                            <div class="notification-title">
                                                <a href="http://life.fudan.edu.cn/Data/View/2409">
                                                    <nobr>关于进一步规范租赁人员薪酬发放的通知</nobr>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel-danger -->
                            <div class="page-header">
                                合作单位
                            </div>
                            <div class="row">
                                <div class="col-sm-3 coop1">
                                    <img src="/robc/Public/pics/cooperators_logo/1.gif" title="中山大学" height="112">
                                </div>
                                <div class="col-sm-3 coop2">
                                    <img src="/robc/Public/pics/cooperators_logo/2.jpg" title="中国疾病预防控制中心" height="102">
                                </div>
                                <div class="col-sm-3 coop3">
                                    <img src="/robc/Public/pics/cooperators_logo/3.png" title="复旦大学" height="92">
                                </div>
                                <div class="col-sm-3 coop4">
                                    <img src="/robc/Public/pics/cooperators_logo/4.jpg" title="南方医科大学" height="110">
                                </div>
                            </div>
                        </div>
                        <!-- col-sm-11 col-sm-offset-1 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /.sidebar -->
            </div>
            <hr>
            <!-- 包含尾部显示文件 -->
            <link href="/robc/Public/mycss/footer.css" rel="stylesheet">
<footer class="footer">
    <div class="row">
        <div class="col-sm-8">
            <div class="col-sm-7 project-introduction">
                <p><b>相关链接</b></p>
                <p><a href="http://zssom.sysu.edu.cn/">中山大学中山医学院</a></p>
                <p><a href="http://www.ipd.org.cn/">中国疾病预防控制中心寄生虫病预防控制所</a></p>
                <p><a href="http://life.fudan.edu.cn/ ">复旦大学生命科学学院</a></p>
                <p><a href="http://www.ipd.org.cn/">南方医科大学公共卫生与热带医学学院</a></p>
            </div>
            <div class="col-sm-5">
                <p><b>资源共享</b></p>
                <p><a href="http://www.chinaias.cn/wjPart/index.aspx ">中国外来入侵物种数据库</a></p>
                <p><a href="http://www.iucngisd.org/gisd/">全球入侵物种数据库GISD</a></p>
                <p><a href="https://www.vectorbase.org/">人类病原体无脊椎动物媒介生物信息资源数据库（VectorBase）</a></p>
            </div>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
            <div class=" QRcode-reminder">
                <p>请关注我们的公众号：</p>
            </div>
            <!-- <div class="col-sm-4"> -->
            <img src="/robc/Public/pics/QRcode.png" height="105">
            <!-- </div> -->
        </div>
    </div>
    <div class="col-sm-6 col-sm-offset-3">
        <p>Copyright © 2016 <a href="http://www.sysu.edu.cn/2012/cn/index.htm">中山大学</a> &nbsp;&nbsp;&nbsp; 联系我们：
            <a href="mailto:wuzhd@mail2.sysu.edu.cn">wuzhd@mail2.sysu.edu.cn</a></p>
        <p>地址：中国广州市中山二路74号中山大学北校区（邮政编码：510080）</p>
    </div>
</footer>

        </div>
        <div class="col-md-1"></div>
    </div>
</body>

</html>