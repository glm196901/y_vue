<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href=favicon.ico type=image/x-icon>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js" charset="utf-8"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <link rel="stylesheet" href="../../css/iconfont3.css">
    <title>神之勇士</title>
    <style media="screen">
        body {background-size: 100%;z-index:10;  height: 100%; width: 100%; position: absolute; background: #0B1628}
        * {margin: 0;padding: 0;font-family: 微软雅黑;}
        a {text-decoration: none;}
        input {outline: none}
        li {list-style: none;}
        p{font-size: 0.3rem;}
        .fr{float:right; color: #75B8FF}
        .fl{float:left; }
        /* #app{background-size: 100%;z-index:10; background-image: url("power.png");background-repeat: no-repeat; height: 100%; position: absolute} */
        .detil{width: 100%;text-align: center;}
        .head{ width: 100%;height: 6rem;text-align: center;; z-index:20; background: url(http://play.zdzlw.com/img/v/vapp/activity/flower/flowerBack_1.png);background-repeat: no-repeat; background-size: 100%}
        .textinfo{text-align: left;padding: 0.2rem 0rem; color: #75B8FF;font-weight: 550;z-index: 5;}
        .el-tabs--card>.el-tabs__header .el-tabs__nav{width: 100%;}
        .el-tabs--card>.el-tabs__header .el-tabs__item{width: 50%;text-align: center;}
        .el-progress{margin: 0.2rem 0rem; }
        .el-progress-bar__outer{background-color: #B6B6B6; margin: 0 auto; width:78%; height: 3.2rem}
        .list{text-align: center;padding-bottom: 1rem;}
        .list h2{height: 1.5rem;line-height: 1.5rem;}
        .el-table th>.cell{width:100%;}
        .bottom{display: inline-block;width: 100%;}
        .bottom p{overflow: hidden; text-overflow:ellipsis; white-space: nowrap; }
        .bottom .title span{width: 50%;display: inline-block;height: 0.5rem;float: left;font-size: 0.3rem;font-weight: bold;color: #f70808;}
        .progress{margin: 0.2rem 0;}
        .progress i{float:right;width: 0.6rem;height: 0.6rem;font-size: 0.6rem;font-weight: bold;color: #6f6d6d; top: -0.67rem; left: -0.3rem; position: relative;}
        .progress span{width:100%;float: left;}
        .el-table td{padding: 7px 0;}
        .h2span{padding-left: 1.4rem;}
        .addd{position: relative; right: 1.1rem;top: -0.8rem;}
        .detil .img{ background-image: url("http://play.zdzlw.com/img/v/activies/quanli/power.png");background-repeat: no-repeat; ;position: relative; height: 6rem; width: 100%; background-size: 100%}
        .btn{background: #3a8ee6;border-color: #3a8ee6;color: #fff;outline: 0;display: inline-block;border: 1px solid #dcdfe6;
            text-align: center;box-sizing: border-box;transition: .1s;font-weight: 500;padding: 12px 20px;font-size: 14px;
            border-radius: 4px;line-height: 1;white-space: nowrap;cursor: pointer;}
        .dark{background:#bbb;color: #8a8383;}
        .alert{display: none;text-align: center;width: 55%; height: 3.8rem;line-height: 0.7rem;position: fixed;top: 24%;left: 18%;z-index: 15;overflow: auto;background-size: 100%;background-repeat: no-repeat; padding: 0.4rem;color: #606266;}
        .alert .close{height:0.5rem;line-height: 0.45rem;width:0.5rem;display: inline-block;position: absolute;right: 28%;top: 0%;background: #eae5e5;border: 0.02rem solid #9c9a9a;border-radius: 0.5rem;text-align: center;font-size: 0.4rem;z-index: 2;}
        .alert i{height:0.6rem;line-height: 0.6rem;width:0.5rem;display: inline-block;position: absolute;top: 0;right: 0;font-size: 0.4rem;margin: 0.1rem;}
        .alert p{font-size: 0.35rem;top:2.7rem;position: relative;color: red;font-size: bold;}
        .el-message-box{width: 66%;}
        .el-tabs--card>.el-tabs__header .el-tabs__item{font-size: 0.4rem;font-weight: bold;}
        .dsp{display: block;}
        .dsn{display: none;}
        .fontweight{font-weight: bold;}
        .el-button--info.is-plain{background: #eaeaec;}
        .time{width: 3.rem;display: inline-block;position: absolute;top: -1.6rem;left: 0;text-align: right; top: 0; font-weight: lighter}
        .time li{padding: 0.1rem 0rem; background:rgba(23,124,105, 0.6) ;border-top-right-radius: 50px;border-bottom-right-radius: 50px; color: #fff;}
        .el-table .cell{text-align: center;}
        .list .active{width: 3rem;height: 1.05rem;background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/flowerBtn_1.png);background-repeat: no-repeat;background-size: 100%;padding: 0;border: none;font-size:0.38rem;font-family:PingFangSC-Semibold;font-weight:900;color:rgba(255,255,255,1);letter-spacing:4px;outline: none;}
        .list .active:active{color: #0B1628;}
        .el-button--info.is-plain:active,.el-button--info.is-plain:focus, .el-button--info.is-plain:hover{background: #eaeaec;border-color:#d3d4d6;color: #909399;}

        /* 更新样式 */
        /* 倒计时样式 */
        .textcenter{float: left;}
        /* 起初按钮灰色 */
        .noactive{ width: 3rem; height: 1.05rem; background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/noactive.png); background-repeat: no-repeat; background-size: 100%; padding: 0; border: none; font-size:0.38rem; font-family:PingFangSC-Semibold; font-weight:900; color:rgba(255,255,255,1); letter-spacing:4px; outline: none;}
        .getbnous{width: 3rem;height: 1.05rem;background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/flowerBtn_1.png);background-repeat: no-repeat;background-size: 100%;padding: 0;border: none;font-size:0.38rem;font-family:PingFangSC-Semibold;font-weight:900;color:rgba(255,255,255,1);letter-spacing:4px;outline: none;}
        .getbnous:active{color: #0B1628;}
        /* 进度条样式 */
        .el-progress-bar__inner{background-color:#75B8FF;}
        /* 刷新按钮颜色 */
        .el-icon-refresh:before{color:#75B8FF}
        /* 进度条刷新 */
        .xxx{transform: rotate(360deg);transition: all .8s;}
        /* 榜单按钮 */
        .bangdan{width: 6vw;height: 18vw;background: #155DA8;border-top-left-radius: 3vw;border-bottom-left-radius: 3vw;top: 7.8rem;right: 0;position: absolute;z-index: 10;padding: 0.1rem;}
        .bangdan p{width: 0.3rem;font-size: 0.3rem;text-align: center;margin-left: 0.2rem;line-height: 0.45rem;color:#fff;}
        .bangdan p:active {color: #0B1628;}
        .text{padding: 0 5vw;padding-bottom: 1rem;}

        /* 标题样式 */
        .fontstyle{margin: 0 auto;text-align: center;height:0.8rem;font-size:0.45rem;font-family:PingFangSC-Medium;font-weight:900;color:rgba(255,255,255,1);background: #75B8FF;-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
        .init{margin-top: 0.5rem;margin-bottom: 0.5rem;margin: 0 auto;padding: 0.4rem 0rem;text-align: center;}
        .left{width: 1.5rem;position: relative;top: -0.15rem;}
        .right{width: 1.5rem;position: relative;top: -0.15rem;}      /* 榜单内容 */
        .initlist{margin-top: 0.5rem;margin-bottom: 0.5rem;padding-left: 0.14rem;}       /* 榜单样式 */
        .el-table{background-color: #0B1628;color:#75B8FF;}
        .el-table th, .el-table tr{background-color:#0B1628;}
        .el-table--border, .el-table--group{border: 0;}
        .el-table--border{}
        .el-table td, .el-table th.is-leaf{border-bottom:1px solid #0B1628;}
        .el-table--border::after, .el-table--group::after, .el-table::before{background-color: #0B1628;}
        .el-table--border td, .el-table--border th, .el-table__body-wrapper .el-table--border.is-scrolling-left~.el-table__fixed{border-right: 1px solid #0B1628;}
        .el-table thead{color:#75B8FF;}
        .el-table--enable-row-hover .el-table__body tr:hover>td{background-color:#0B1628;}
        /* 取消mesk白屏 */
        #app .el-loading-mask{background: none;}
        /* 榜单图片 1 2 3 */
        tbody tr:nth-child(1)>td:nth-child(1) .cell {width: 0.2rem;height: 0.7rem;background: url(http://play.zdzlw.com/img/v/vapp/activity/flower/top.png);background-repeat: no-repeat;background-size: 100%;margin: 0 auto;}
        tbody tr:nth-child(2)>td:nth-child(1) .cell {width: 0.2rem;height: 0.7rem;background: url(http://play.zdzlw.com/img/v/vapp/activity/flower/second.png);background-repeat: no-repeat;background-size: 100%;margin: 0 auto;}
        tbody tr:nth-child(3)>td:nth-child(1) .cell {width: 0.2rem;height: 0.7rem;background: url(http://play.zdzlw.com/img/v/vapp/activity/flower/third.png);background-repeat: no-repeat;background-size: 100%;margin: 0 auto;}      /* 弹框关闭图标 */
        .jump1{background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/congratulation.png);  height: 5rem ; background-size:100%; background-repeat: no-repeat;}
        .jump1 .el-icon-close{top: 1.5rem;right: 0.2rem}
        .jump2{background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/kaijiang.png); background-size:100%; background-repeat: no-repeat;}
        .jump3{background:url(http://play.zdzlw.com/img/v/vapp/activity/flower/awkward.png);  height: 4rem; line-height: 2rem; background-size:100%; background-repeat: no-repeat;}
    </style>
    <title></title>
    <script>
        !function(N,M){function L(){var a=I.getBoundingClientRect().width;a/F>1024&&(a=1024*F);var d=a/10;I.style.fontSize=d+"px",D.rem=N.rem=d}var K,J=N.document,I=J.documentElement,H=J.querySelector('meta[name="viewport"]'),G=J.querySelector('meta[name="flexible"]'),F=0,E=0,D=M.flexible||(M.flexible={});if(H){/*console.warn("将根据已有的meta标签来设置缩放比例");*/var C=H.getAttribute("content").match(/initial\-scale=([\d\.]+)/);C&&(E=parseFloat(C[1]),F=parseInt(1/E))}else{if(G){var B=G.getAttribute("content");if(B){var A=B.match(/initial\-dpr=([\d\.]+)/),z=B.match(/maximum\-dpr=([\d\.]+)/);A&&(F=parseFloat(A[1]),E=parseFloat((1/F).toFixed(2))),z&&(F=parseFloat(z[1]),E=parseFloat((1/F).toFixed(2)))}}}if(!F&&!E){var y=N.navigator.userAgent,x=(!!y.match(/android/gi),!!y.match(/iphone/gi)),w=x&&!!y.match(/OS 9_3/),v=N.devicePixelRatio;F=x&&!w?v>=3&&(!F||F>=3)?3:v>=2&&(!F||F>=2)?2:1:1,E=1/F}if(I.setAttribute("data-dpr",F),!H){if(H=J.createElement("meta"),H.setAttribute("name","viewport"),H.setAttribute("content","initial-scale="+E+", maximum-scale="+E+", minimum-scale="+E+", user-scalable=no"),I.firstElementChild){I.firstElementChild.appendChild(H)}else{var u=J.createElement("div");u.appendChild(H),J.write(u.innerHTML)}}N.addEventListener("resize",function(){clearTimeout(K),K=setTimeout(L,300)},!1),N.addEventListener("pageshow",function(b){b.persisted&&(clearTimeout(K),K=setTimeout(L,300))},!1),"complete"===J.readyState?J.body.style.fontSize=12*F+"px":J.addEventListener("DOMContentLoaded",function(){J.body.style.fontSize=12*F+"px"},!1),L(),D.dpr=N.dpr=F,D.refreshRem=L,D.rem2px=function(d){var c=parseFloat(d)*this.rem;return"string"==typeof d&&d.match(/rem$/)&&(c+="px"),c},D.px2rem=function(d){var c=parseFloat(d)/this.rem;return"string"==typeof d&&d.match(/px$/)&&(c+="rem"),c}}(window,window.lib||(window.lib={}));
    </script>
</head>
<body>
<!-- 加载所有图片 -->
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/awkward.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/kaijiang.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/congratulation.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/top.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/second.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/third.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/flowerBack_1.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/leftLine_1.png" alt="" class="dsn">
<img src="http://play.zdzlw.com/img/v/vapp/activity/flower/rightLine_1.png" alt="" class="dsn">


<div id="app" style="font-size: 0.3rem;" v-loading="loading">
    <div class="head">
        <div class="time" v-show="Showtime" style="display:inline-block">
            <li>
                <span>本轮活动倒计时</span>
                <span class="fontweight" v-text="h">00</span>
                <span class="fontweight">:</span>
                <span class="fontweight" v-text="m">00</span>
                <span class="fontweight">:</span>
                <span class="fontweight" v-text="s" style="padding-right:0.2rem">00</span>
            </li>
        </div>
    </div>
    <div class="bangdan">
        <p  @click="bangdanCheck"  class="" v-text="changebtn"></p>
    </div>
    <div class="detil" v-show="showdetil">
        <!-- 进度条 -->

        <div class="textinfo">
            <div  class="text item">

                <p class="init">
                    <img  class="left" :src="ImgLineLeft" alt="">
                    <span class="titlep fontstyle">活动介绍</span>
                    <img class="right" :src="ImgLineRight" alt="">
                </p>
                <p>故事背景 ：</p>
                <br>
                <p>黑暗大帝是黑暗的存在 黑暗大帝闯入雪山  抢走了雪山之雪域神女 需要神圣的勇士修炼神器 打败黑暗大帝 拯救雪域神女 修炼神器要积够水晶石，用作修炼神器之用</p>
                <br>
                <ul>
                    <li>1、勇士将踏上修炼之路 寻找水晶石（1钻石=1颗水晶石）</li>
                    <li>2、各位勇士寻得一万颗水晶石   神器分数+1</li>
                    <li>3、每一个直播间积够一万颗水晶石，天帝将会在寻得一万颗水晶石的该主播房间发放福利</li>
                </ul>
                <p class="init">
                    <img  class="left" :src="ImgLineLeft" alt="">
                    <span class="titlep fontstyle">排行榜</span>
                    <img class="right" :src="ImgLineRight" alt="">
                </p>
                <ul>
                    <li>水晶石排行榜，每在直播间找寻一万颗水晶石，该直播间主播水晶石分数+1</li>
                    <li>神圣勇士排行榜，勇士寻找水晶石数 合计最高的排名</li>
                </ul>
                <p class="init">
                    <img  class="left" :src="ImgLineLeft" alt="">
                    <span class="titlep fontstyle">奖励</span>
                    <img class="right" :src="ImgLineRight" alt="">
                </p>

                <ul>
                    <li>1、寻找出一万颗水晶石的直播间由天帝发放福利，点击领取既有机会获得钻石奖励</li>
                    <li>2、特别奖励流量：前三 分别获得50流量 30流量 20流量  额外奖励   </li>
                    <li>3、直播间  排名前三，分别获得300元、150元、50元现金奖励</li>
                    <li>4、神圣勇士 排名前三，分别获得3000钻、1500钻、500钻奖励</li>
                    <li>5、活动奖励发放时间：6月3日</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 榜单列表 -->
    <div class="list text" v-show="showlist" >
        <!-- <button class="getbnous" @click="getInfoList" class="refreshbtn fr btn">榜单刷新</button> -->
        <div class="bottom">
            <p class="progress">
                  <span>
                    <el-progress :text-inside="true" :stroke-width="14" :percentage="progressNum" ></el-progress>
                  </span>
                <i  @click="rotate" :class="xxx"></i>

            </p>
            <p class="addd"><span></span><span class="fr">水晶石</span><span class="fr" v-text="main_score"></span></p>
        </div>
        <button  class="noactive" :class="active" @click="act" >参加活动</button>
        <p class="init">
            <img class="left" :src="ImgLineLeft" alt="">
            <span class="fontstyle">活动时间</span>
            <img class="right" :src="ImgLineRight" alt="">
        </p>
        <p style="text-align:center; letter-spacing: 0.1rem; color:#75B8FF" >2019年5.27 至 2019年6.2</p>
        <p class="initlist" >
            <img class="left" :src="ImgLineLeft" alt="">
            <span class="fontstyle">主播榜单</span>
            <img class="right" :src="ImgLineRight" alt="">
        </p>

        <el-table :data="leaderships"  border style="width: 100%">
            <el-table-column prop="classname"  label="排名" width="100"></el-table-column>
            <el-table-column prop="nickname" label="主播名称" ></el-table-column>
            <el-table-column prop="counts" label="神器排名" width="100"></el-table-column>
        </el-table>
        <p class="initlist">
            <img class="left" :src="ImgLineLeft" alt="">
            <span class="fontstyle">用户榜单</span>
            <img class="right" :src="ImgLineRight" alt="">
        </p>
        <el-table :data="brush_list"  border style="width: 100%">
            <el-table-column prop="classname"  label="排名" width="100"></el-table-column>
            <el-table-column prop="nickname" label="用户名称" ></el-table-column>
            <el-table-column prop="sum_points" label="勇士排名" width="100"></el-table-column>
        </el-table>
    </div>

    <div :class="['alert',ShowAlert, 'jump1']" style="">
        <i class="el-icon-close" @click="close" style=""></i>
        <p v-if="toggle">恭喜你,在本轮活动中获得</p>
        <p v-if="toggle"><span class="damo" v-text="self_score"></span><span>钻</span></p>
        <p v-if="toggle"><span>稍后开启下一轮活动,请刷新页面</span></p>

        <p v-if="toggle1">成功参与活动</p>
        <p v-if="toggle1">3分钟后公布中奖结果</p>
    </div>
    <div :class="['alert',ShowAlert1, 'jump2']" style="" >
        <i class="el-icon-close" @click="close" ></i>
        <p class="p2">开奖进行中......</p>
    </div>
    <div :class="['alert',ShowAlert2, 'jump3']" style="" >
        <i class="el-icon-close" @click="close"></i>
        <p class="p2" v-text="msgp2">你已经点击过了啊......</p>
    </div>
</div>
<!-- <input type="hidden" name="api_token" value="4b31fd852695a32d64455c6671ed99df">
<input type="hidden" name="score" value="10000">
<span style="display:none" id="room_id">0</span> -->
<span style="display:none" id="room_id">{{$room_id}}</span>
<input type="hidden" name="api_token" value="{{$api_token}}">
<input type="hidden" name="score" value="{{$score}}">
</body>
</html>

<!-- <script src="./js/jquery.min.js"></script> -->
<script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script> -->
<script  charset="utf-8">
    document.body.addEventListener('touchstart',function(){});
    var vm=new Vue({
        data() {
            return {
                num:'800',
                changebtn:"查看介绍",
                showdetil:false,
                showlist:true,
                toggle:true,
                toggle1:false,
                xxx:'el-icon-refresh',
                ImgLineLeft:'http://play.zdzlw.com/img/v/vapp/activity/flower/leftLine_1.png',
                ImgLineRight:'http://play.zdzlw.com/img/v/vapp/activity/flower/rightLine_1.png',
                dspRule:false,
                dspMain:true,
                MyCountNum:"",//进度条积分
                progressNum:0,
                boom:'',
                active:'',
                off_time:1,
                h:0,
                m:0,
                s:0,
                s2:0,
                i:0,
                j:0,
                id:'',
                main_score:'',//总积分
                status:0,//活动状态---1为激活状态,0为冻结状态--------------------------------------
                sum_users:0,//参与人数
                self_score:'',//
                time:'',
                id:'',
                activeName: 'first',
                brush_list: [],
                leaderships:[],
                Showtime:false,
                Showbtn:true,
                loading:false,
                ShowAlert:'',
                ShowAlert1:'',
                ShowAlert2:'',
                j:0,
                msgp2:'',
                room_id:document.getElementById("room_id").innerText,
                api_token:'',
                ip:window.location.origin,
                // ip:'http://zb-api-ceshi.mekxfj.com',
            }
        },
        el: '#app',
        components: {},
        methods: {
            // network(api, data, fun) { // 公用请求-------------------------------------------------------------------------------------------
            //   let ip = this.ip
            //   let url = ip + api
            //   let api_token = this.api_token
            //   if (!data) {
            //     var xhr = new XMLHttpRequest();
            //     xhr.open("GET", url);
            //     xhr.responseType = 'json';
            //     xhr.setRequestHeader('api_token', api_token);
            //     xhr.onload = function() {fun(xhr.response)};
            //     xhr.onerror = function() {console.log("error");};
            //     xhr.send();
            //   } else {
            //     var xhr = new XMLHttpRequest();
            //     xhr.open("POST", url);
            //     xhr.responseType = 'json';
            //     xhr.setRequestHeader('api_token', api_token);
            //     xhr.onload = function() {fun(xhr.response)};
            //     xhr.onerror = function() {console.log("error")};
            //     xhr.send(JSON.stringify(data)); //需要先转成字符串再发送
            //   }
            // },
            // 公用请求
            network(api, data, fun) {
              let ip = this.ip
              let url = ip + api
              let api_token = this.api_token
              if (!data) {
                $.ajax({
                  type: "GET",
                  url:  url,
                  headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'api_token':api_token
                  },
                  ContentType: "application/x-www-form-urlencoded",
                  dataType: "json",
                  success: function(data) {
                    fun(data)
                  },
                  error: function(data) {
                    fun(data)
                  }
                });
              } else {
                $.ajax({
                  type: "POST",
                  url:  url,
                  data: data,
                  headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'api_token':api_token
                  },
                  ContentType: "application/x-www-form-urlencoded",
                  dataType: "json",
                  success: function(data) {
                    fun(data)
                  },
                  error: function(data) {
                    // fun(data)
                  }
                });
              }
            },
            timeLose(){
                let off_time=this.off_time
                let i=0
                i=i+1
                off_time=off_time-i
                this.off_time=off_time
                if(off_time>=0){
                    let h = Math.floor(off_time/60/60%24);
                    if(h<9){h="0"+h}
                    this.h = h
                    let m = Math.floor(off_time/60);
                    if(m<9){m="0"+m}
                    this.m=m
                    let s = Math.floor(off_time%60);
                    if(s<10){s="0"+s}
                    this.s = s
                }
                this.time=setTimeout(this.timeLose, 1000);
            },
            // 点击刷新进度条
            rotate(){//点击刷新
                this.xxx="el-icon-refresh xxx"
                setTimeout(()=>{
                    this.xxx='el-icon-refresh'
            },800)
                window.location.reload()
                this.getData()
            },

            //切换榜单
            bangdanCheck(){
                // let toggle = this.toggle
                if(this.changebtn == "查看介绍"){
                    this.showlist=false
                    this.changebtn = "查看榜单"
                    this.showdetil= true
                    // this.toggle = false
                    // this.getInfoList()

                }else{
                    this.changebtn = "查看介绍"
                    // this.toggle = true
                    this.showdetil= false
                    this.showlist=true
                }
            } ,
            getData(){//获取参数
                this.loading=true
                let year_id=this.year_id
                let room_id=this.room_id
                // let link = window.location.href
                //  alert(link)
                this.getInfoList()
                this.network('/api/activity/yearInfo?',null,res=>{
                    if(res.status==0){
                    this.loading=false
                    let off_time=res.data.off_time;
                    if(off_time<0){this.off_time=0}
                    if(off_time>=0){this.off_time=off_time}
                    let room_id=this.room_id;
                    let MyCountNum=res.data.year_info.score;       this.MyCountNum=MyCountNum   //进度条里面分数
                    let self_score=res.data.self_score;            this.self_score=self_score
                    let status=res.data.year_info.status;          this.status=status;
                    let sum_users=res.data.sum_users;              this.sum_users=sum_users;
                    let id=this.id;                                this.id=res.data.year_info.id;;
                    let progressNum=this.progressNum;               //进度条里面百分比
                    let main_score=this.main_score;
                    this.progressNum=0;
                    // this.status=1//------------------------------------------------------------------------------------------------------------------
                    if(this.status==1){
                        this.Showtime=true
                        //  this.imgsrc='../../img/a_1.png'
                        //  this.imgsrc='a_1.png'
                        // 框框出现
                        this.toogle= true;
                        this.toggle1=false;
                        this.active="active"
                        window.clearTimeout(this.time)
                        this.timeLose()
                    }
                    if(this.status!=1){
                        this.Showtime=false
                        //  this.imgsrc='../../img/a_1.png'
                        // this.imgsrc='a_1.png'
                        this.active=""
                    }
                    if(this.j>0){
                        this.active=''
                    }
                    if(MyCountNum<=main_score){
                        progressNum=(MyCountNum/main_score)*100
                        this.progressNum=progressNum
                    }
                    if(MyCountNum>main_score){
                        this.MyCountNum=main_score
                        this.progressNum=100
                    }
                    document.getElementsByClassName("el-progress-bar__innerText")[0].innerText=this.MyCountNum//进度条里的百分比
                }
            })
            },
            close(){//关闭弹框
                this.ShowAlert=false
                this.ShowAlert1=false
                this.ShowAlert2=false
            },
            act(){//扔鞭炮
                let MyCountNum=this.MyCountNum
                let main_score=this.main_score
                let status=this.status
                let id=this.id
                let room_id=this.room_id
                let api_token=this.api_token
                let url=window.location.origin
                let j=this.j
                if(status==1){
                    this.Showbtn=false
                    j=j+1
                    this.j=j
                    if(j<2){
                        let data={
                            'year_id':id,
                            'room_id':room_id,
                            'api_token':api_token
                        }
                        this.network('/api/activity/yearUserThrow',data,res=>{
                            if(res.status==0){
                            let status=this.status
                            this.sum_users=res.data.sum_users
                            this.toggle1=true
                            this.toggle= false
                            this.ShowAlert='dsp'
                        }else{
                            this.ShowAlert2='dsp'
                            this.msgp2=res.message
                            setTimeout(()=>{
                                this.ShowAlert2='dsn'
                        },1000)
                        }
                    })
                    }else{
                        this.ShowAlert2='dsp'
                        setTimeout(()=>{
                            this.ShowAlert2='dsn'
                    },1000)
                    }
                }
            },
            activeReul(){//点击活动规则
                this.dspRule=true
                this.dspMain=false
            },
            goBack(){//从规则返回活动页
                this.dspRule=false
                this.dspMain=true
            },
            getInfoList(){
                this.loading=true
                let status=this.status
                let dark=this.dark
                this.network('/api/activity/getBrushList',null,res=>{
                    if(res.status==0){
                    this.loading=false
                    this.leaderships=res.data.leaderships
                    let leaderships=this.leaderships
                    for(var i in leaderships){
                        if(i==0){leaderships[i].classname=""}
                        if(i==1){leaderships[i].classname=""}
                        if(i==2){leaderships[i].classname=""}
                        if(i==3){leaderships[i].classname="4"}
                        if(i==4){leaderships[i].classname="5"}
                    }
                    this.leaderships=leaderships
                    this.brush_list=res.data.brush_list
                    let brushlist=this.brush_list

                    for(var i in brushlist){
                        if(i==0){brushlist[i].classname=""}
                        if(i==1){brushlist[i].classname=""}
                        if(i==2){brushlist[i].classname=""}
                        if(i==3){brushlist[i].classname="4"}
                        if(i==4){brushlist[i].classname="5"}
                    }
                    this.brush_list=brushlist
                }
            })
            }
        },
        mounted(){
            document.getElementsByClassName("el-progress-bar__innerText")[0].innerText=this.MyCountNum
        },
        updated() {
            // this.ShowAlert1='dsn'
            // this.ShowAlert='dsp';
            // this.ShowAlert='dsn';
            // this.ShowAlert1='dsp';
            if(this.off_time==0&&this.status==1){//倒计时10秒的时候显示弹框,请求中,开奖进行中......
                this.ShowAlert='dsn';
                this.ShowAlert1='dsp';

                setTimeout(()=>{//倒计时走完的时候显示结果
                    this.getData()
                this.ShowAlert1='dsn'
                this.ShowAlert='dsp';
                this.toggle1=false
                this.toggle= true
            },10000)

            }
        },
        created() {
            let height=window.screen.height
            this.api_token=document.getElementsByName("api_token")[0].value
            this.main_score=document.getElementsByName("score")[0].value
            this.getData()//初始调用一次
        },
    })
</script>
