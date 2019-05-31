<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <meta name="screen-orientation" content="portrait">
  <meta name="x5-orientation" content="portrait">
  <meta name="full-screen" content="yes">
  <meta name="x5-fullscreen" content="true">
  <meta name="browsermode" content="application">
  <meta name="x5-page-mode" content="app">
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
  <link rel="stylesheet" href="https://unpkg.com/mint-ui/lib/style.css">

  <link rel="stylesheet" href="../../css/iconfont3.css">
  <!-- <link rel="stylesheet" href="iconfont3.css">
  <link rel="stylesheet" href="Multistyle.css"> -->

  <script src="https://cdn.bootcss.com/vue/2.6.10/vue.min.js" charset="utf-8"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script src="https://unpkg.com/mint-ui/lib/index.js"></script>
  <script src="http://lib.baomitu.com/jquery/2.1.1/jquery.min.js"></script>
  <!-- 省-市-区三级联级选择json -->
  <!-- <script src="city.js"></script> -->
  <script src="../../js/city.js"></script>




  <style>

  </style>
  <script>
      !function(N,M){function L(){var a=I.getBoundingClientRect().width;a/F>1024&&(a=1024*F);var d=a/10;I.style.fontSize=d+"px",D.rem=N.rem=d}var K,J=N.document,I=J.documentElement,H=J.querySelector('meta[name="viewport"]'),G=J.querySelector('meta[name="flexible"]'),F=0,E=0,D=M.flexible||(M.flexible={});if(H){/*console.warn("将根据已有的meta标签来设置缩放比例");*/var C=H.getAttribute("content").match(/initial\-scale=([\d\.]+)/);C&&(E=parseFloat(C[1]),F=parseInt(1/E))}else{if(G){var B=G.getAttribute("content");if(B){var A=B.match(/initial\-dpr=([\d\.]+)/),z=B.match(/maximum\-dpr=([\d\.]+)/);A&&(F=parseFloat(A[1]),E=parseFloat((1/F).toFixed(2))),z&&(F=parseFloat(z[1]),E=parseFloat((1/F).toFixed(2)))}}}if(!F&&!E){var y=N.navigator.userAgent,x=(!!y.match(/android/gi),!!y.match(/iphone/gi)),w=x&&!!y.match(/OS 9_3/),v=N.devicePixelRatio;F=x&&!w?v>=3&&(!F||F>=3)?3:v>=2&&(!F||F>=2)?2:1:1,E=1/F}if(I.setAttribute("data-dpr",F),!H){if(H=J.createElement("meta"),H.setAttribute("name","viewport"),H.setAttribute("content","initial-scale="+E+", maximum-scale="+E+", minimum-scale="+E+", user-scalable=no"),I.firstElementChild){I.firstElementChild.appendChild(H)}else{var u=J.createElement("div");u.appendChild(H),J.write(u.innerHTML)}}N.addEventListener("resize",function(){clearTimeout(K),K=setTimeout(L,300)},!1),N.addEventListener("pageshow",function(b){b.persisted&&(clearTimeout(K),K=setTimeout(L,300))},!1),"complete"===J.readyState?J.body.style.fontSize=12*F+"px":J.addEventListener("DOMContentLoaded",function(){J.body.style.fontSize=12*F+"px"},!1),L(),D.dpr=N.dpr=F,D.refreshRem=L,D.rem2px=function(d){var c=parseFloat(d)*this.rem;return"string"==typeof d&&d.match(/rem$/)&&(c+="px"),c},D.px2rem=function(d){var c=parseFloat(d)/this.rem;return"string"==typeof d&&d.match(/px$/)&&(c+="rem"),c}}(window,window.lib||(window.lib={}));
  </script>
  <!-- 修复ios输入框的 焦点无法自动失去bug -->
  <script type="text/javascript">
        window.onload = function() {
                document.querySelector('body').addEventListener('touchend', function(e) {
                    if(e.target.className != '.inputBox') {
                        $(".inputBox").each(function(){
                          $(this).blur();
                        })
                    }
                });
            }
  </script>
</head>
<body>
  <!-- api_token 本地服务器切换 -->
  <!-- <span id="api_token" class="dsn">af343e2197bbfc802e741cc26e67d021</span> -->
  <span id="nickname" class="dsn">{{ $nickname ?? null}}</span>
  <span id="id" class="dsn">{{$id ?? null}}</span>
  <div id="app" >
    <!-- 提现界面 -->
    <div v-show="switchView == 'withDraw' " class="viewWithdraw">
    <!-- 切换银行卡(提现) -->

    <!-- 若用户第一次进入，则提示用户进行银行卡绑定 -->
      <div class="goback" @click="goback">
        <span class="iconfont icon-jiantouyou2"></span> <span style="font-size: 0.4rem;">返回</span>
      </div>
      <div v-if="bindCard== 'unbind' " class="unbind" @click="BindBankCard">
        <span>+</span>
        <span>请添加银行卡</span>
      </div>
      <!-- 如果用户有卡片则显示用户卡片列表，默认最后一次绑定 -->
      <div v-if="bindCard== 'bind' "  class="switchCard " :class="activeBank" @click="switchCard" >
        <!-- 图标 -->
        <img :src="bankImg" alt="" class="bankImg">
        <span class="bankNameInit" v-text="cardChoose"></span>
        <span class="bankCodeInit" v-text=" '尾号' +  activeItem[3]"></span>
        <span class="bankWordInit">银行卡</span>
        <p class="iconfont  icon-jiantou-right"> </p>
      </div>

      <!-- 输入提现金额 -->
      <div  class="withDraw">
          <p class="left withMoney" >提现金额</p>
          <div class="inputDad">
              <span class="left RMB iconfont icon-renmingbi">
              </span>
              <span>
                  <input class="inputMoney" type="number" placeholder="提现额最少100元" v-model="withDrawMoney" v-on:input="compareInput">
              </span>
          </div>
          <div class="line"></div>
          <p class="left" v-show="condition" v-text=" '可用余额' + deposit"></p>
          <p class="left isInput" v-text="isInput"></p>
          <div class="btn">
              <button type="button" name="button" class="bindbtn" id="withDrawbtn" @click="withDraw" :style="withDrawBtn">预计两个工作日内到账，确认提现</button>
              <p class="backupNote" >备注：提现金额必须大于等于游戏流水</p>
          </div>
      </div>
    </div>
    <!-- 选银行界面 -->
    <div v-show="switchView == 'chooseBank' " class="viewChooseCard" >
      <div v-if="isPointCard"  class="cardList" :class="">
            <!-- 图标 -->
            <ul  class="banklist">
              <li v-for="(item, index) in bankList" :key="index" @click="isActiveCard(index,item)" >
                <div>
                    <img :src="item.bankImg" alt="" v-text="index" class="bankImg">
                    <span class="fl bankName" v-text="item.bank"></span>
                    <span class="fl tailCode" v-text=" '尾号' +item.card_number.substr(item.card_number.length-4) "></span>
                    <span class="fl tailCode bankWord">银行卡</span>
                </div>
                <span class="fr iconfont" :class="activeRight == index ? 'icon-zhengque':'' " ></span>
                <!-- <i class=" fr iconfont"   :class="activeRight == index ? 'icon-zhengque': '' "></i> -->
              </li>
              <button class=" iconfont addBankCard"  @click="addBankCard" :style="bindCardStyle">+添加银行卡(每个人最多添加5张)</button>
            </ul>
      </div>
    </div>
    <!-- 绑卡界面 -->
    <div v-show="switchView == 'bindbank' " class="viewBindCard" >
          <!-- 绑定银行卡  start -->
      <div class="bindbankcard">
        <div class="">
          <div class="goback" @click="goback">
           <span class="iconfont icon-jiantouyou2"></span> <span style="font-size: 0.4rem;">返回</span>
          </div>
          <!-- <div class="header">
            <p>
              <span v-text="'昵称：'+nickname"></span>
            </p>
          </div> -->
          <div class="container">
            <table>
              <!-- <tr>
                <td class="tdLeft">ID</td>
                <td v-text="id"></td>
              </tr> -->
              <tr>
                <td class="tdLeft">持卡人</td>
                <td class="tdRight"><input class="input inputBox"  name="" v-model:value="userName" placeholder="请输入姓名" > </td>
              </tr>
              <tr>
                  <td class="tdLeft">
                      所在地
                   <div  :class="activeFix" class="block" id="showBlock" style="line-height: 1.5;" style="width:100px" >
                  </td>
                  <td class="tdRight">
                      <input :class="activeInit" class="tdLeft" id="multiPickerInput" v-model="multiSelected" style="width:100%;background:#fff;" type="text" value="" disabled="disabled">
                      <div  id="targetContainer" ></div>

                      </div>
                  </td>
                </tr>
                <tr>
                    <td class="tdLeft">卡号</td>
                    <td class="tdRight">
                      <input class="input inputBox" type="text"name="" v-model:value="bankcardNumber" v-on:input="cardNumFormat"  placeholder="请输入银行卡号" maxlength="23" class="inputCardNumber" style=" ">
                      <span class="iconfont  icon-jiantou-right position"> </span>
                    </td>
                </tr>
              <tr>
                <td  class="tdLeft">开户银行</td>
                <td class="tdRight"  v-text="bankInfo.bankName"></td>
              </tr>
              <tr>
                <td  class="tdLeft">支行地址</td>
                <td class="tdRight">
                <input type="text" class="inputBox" v-model:value="branch" v-on:input="listen">
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="btn">
            <button type="button" name="button" class="bindbtn" id="bindbtn" @click="submit" disabled="true" placeholder="请输入支行地址"  :style="btnstyle">确认提交</button>
        </div>
      </div>
    </div>
      <!-- 绑定银行卡 bindbankcard end -->
      <!-- 弹框 -->
    <section  :class="['copyAlert',showCopyAlert]">
      <div class="container">
        <div class="centen">
          <!--按设计图  -->
          <!-- <p class="title">消息提示</p> -->
          <!--按设计图  -->
          <p class="titleText" v-text="titleText"></p>
          <!--按设计图  -->
          <!-- <p class="ShowBtnGoGame">
            <button type="button" name="button" class="btnsure" @click="cancel" >确定</button>
          </p> -->
          <!--按设计图  -->
        </div>
      </div>
    </section>
      <!-- 弹框 -->
  </div>
</body>
</html>
<script  charset="utf-8">

    var vm=new Vue({
        data() {
          return {
            ip:window.location.origin,
            // ip:'http://zb-api-ceshi.mekxfj.com',
            api_token:'',
            // nickname:document.getElementById("nickname").innerText,
            // id:document.getElementById("id").innerText,
            ip_jump:window.location.href,
            // 点击选择省市 样式切换
            activeInit:'',
            activeFix:'dsp',
            //格式化银行卡
            cardNum:'',
            withDrawMoney:'',
            cardChoose:'',
            bankImg:'',
            //根据银行卡的bankcode 映射图片
            bandCode:'',
            // 银行小icon属性添加到初始化到initBankList中
            bankIcon:[],
            cdnIp:'http://play.zdzlw.com/img/v/vapp/withDraw/',
            png:'.png',
            bindCard:'',
            deposit:'',
            // 判断是否点击选择银行卡
            isPointCard:false,
            bankList:[],
            // 体现页面判断用户是否输入金额
            condition:true,
            isInput:this.deposit,
            handingFee:''  ,
            // 选中银行样式切换
            activeBank:'',
            // 根据银行ID map银行名字
            mapBank:{
                  "SRCB": "深圳农村商业银行",
                  "BGB": "广西北部湾银行",
                  "SHRCB": "上海农村商业银行",
                  "BJBANK": "北京银行",
                  "WHCCB": "威海市商业银行",
                  "BOZK": "周口银行",
                  "KORLABANK": "库尔勒市商业银行",
                  "SPABANK": "平安银行",
                  "SDEB": "顺德农商银行",
                  "HURCB": "湖北省农村信用社",
                  "WRCB": "无锡农村商业银行",
                  "BOCY": "朝阳银行",
                  "CZBANK": "浙商银行",
                  "HDBANK": "邯郸银行",
                  "BOC": "中国银行",
                  "BOD": "东莞银行",
                  "CCB": "中国建设银行",
                  "ZYCBANK": "遵义市商业银行",
                  "SXCB": "绍兴银行",
                  "GZRCU": "贵州省农村信用社",
                  "ZJKCCB": "张家口市商业银行",
                  "BOJZ": "锦州银行",
                  "BOP": "平顶山银行",
                  "HKB": "汉口银行",
                  "SPDB": "上海浦东发展银行",
                  "NXRCU": "宁夏黄河农村商业银行",
                  "NYNB": "广东南粤银行",
                  "GRCB": "广州农商银行",
                  "BOSZ": "苏州银行",
                  "HZCB": "杭州银行",
                  "HSBK": "衡水银行",
                  "HBC": "湖北银行",
                  "JXBANK": "嘉兴银行",
                  "HRXJB": "华融湘江银行",
                  "BODD": "丹东银行",
                  "AYCB": "安阳银行",
                  "EGBANK": "恒丰银行",
                  "CDB": "国家开发银行",
                  "TCRCB": "江苏太仓农村商业银行",
                  "NJCB": "南京银行",
                  "ZZBANK": "郑州银行",
                  "DYCB": "德阳商业银行",
                  "YBCCB": "宜宾市商业银行",
                  "SCRCU": "四川省农村信用",
                  "KLB": "昆仑银行",
                  "LSBANK": "莱商银行",
                  "YDRCB": "尧都农商行",
                  "CCQTGB": "重庆三峡银行",
                  "FDB": "富滇银行",
                  "JSRCU": "江苏省农村信用联合社",
                  "JNBANK": "济宁银行",
                  "CMB": "招商银行",
                  "JINCHB": "晋城银行JCBANK",
                  "FXCB": "阜新银行",
                  "WHRCB": "武汉农村商业银行",
                  "HBYCBANK": "湖北银行宜昌分行",
                  "TZCB": "台州银行",
                  "TACCB": "泰安市商业银行",
                  "XCYH": "许昌银行",
                  "CEB": "中国光大银行",
                  "NXBANK": "宁夏银行",
                  "HSBANK": "徽商银行",
                  "JJBANK": "九江银行",
                  "NHQS": "农信银清算中心",
                  "MTBANK": "浙江民泰商业银行",
                  "LANGFB": "廊坊银行",
                  "ASCB": "鞍山银行",
                  "KSRB": "昆山农村商业银行",
                  "YXCCB": "玉溪市商业银行",
                  "DLB": "大连银行",
                  "DRCBCL": "东莞农村商业银行",
                  "GCB": "广州银行",
                  "NBBANK": "宁波银行",
                  "BOYK": "营口银行",
                  "SXRCCU": "陕西信合",
                  "GLBANK": "桂林银行",
                  "BOQH": "青海银行",
                  "CDRCB": "成都农商银行",
                  "QDCCB": "青岛银行",
                  "HKBEA": "东亚银行",
                  "HBHSBANK": "湖北银行黄石分行",
                  "WZCB": "温州银行",
                  "TRCB": "天津农商银行",
                  "QLBANK": "齐鲁银行",
                  "GDRCC": "广东省农村信用社联合社",
                  "ZJTLCB": "浙江泰隆商业银行",
                  "GZB": "赣州银行",
                  "GYCB": "贵阳市商业银行",
                  "CQBANK": "重庆银行",
                  "DAQINGB": "龙江银行",
                  "CGNB": "南充市商业银行",
                  "SCCB": "三门峡银行",
                  "CSRCB": "常熟农村商业银行",
                  "SHBANK": "上海银行",
                  "JLBANK": "吉林银行",
                  "CZRCB": "常州农村信用联社",
                  "BANKWF": "潍坊银行",
                  "ZRCBANK": "张家港农村商业银行",
                  "FJHXBC": "福建海峡银行",
                  "ZJNX": "浙江省农村信用社联合社",
                  "LZYH": "兰州银行",
                  "JSB": "晋商银行",
                  "BOHAIB": "渤海银行",
                  "CZCB": "浙江稠州商业银行",
                  "YQCCB": "阳泉银行",
                  "SJBANK": "盛京银行",
                  "XABANK": "西安银行",
                  "BSB": "包商银行",
                  "JSBANK": "江苏银行",
                  "FSCB": "抚顺银行",
                  "HNRCU": "河南省农村信用",
                  "COMM": "交通银行",
                  "XTB": "邢台银行",
                  "CITIC": "中信银行",
                  "HXBANK": "华夏银行",
                  "HNRCC": "湖南省农村信用社",
                  "DYCCB": "东营市商业银行",
                  "ORBANK": "鄂尔多斯银行",
                  "BJRCB": "北京农村商业银行",
                  "XYBANK": "信阳银行",
                  "ZGCCB": "自贡市商业银行",
                  "CDCB": "成都银行",
                  "HANABANK": "韩亚银行",
                  "CMBC": "中国民生银行",
                  "LYBANK": "洛阳银行",
                  "GDB": "广东发展银行",
                  "ZBCB": "齐商银行",
                  "CBKF": "开封市商业银行",
                  "H3CB": "内蒙古银行",
                  "CIB": "兴业银行",
                  "CRCBANK": "重庆农村商业银行",
                  "SZSBK": "石嘴山银行",
                  "DZBANK": "德州银行",
                  "SRBANK": "上饶银行",
                  "LSCCB": "乐山市商业银行",
                  "JXRCU": "江西省农村信用",
                  "ICBC": "中国工商银行",
                  "JZBANK": "晋中市商业银行",
                  "HZCCB": "湖州市商业银行",
                  "NHB": "南海农村信用联社",
                  "XXBANK": "新乡银行",
                  "JRCB": "江苏江阴农村商业银行",
                  "YNRCC": "云南省农村信用社",
                  "ABC": "中国农业银行",
                  "GXRCU": "广西省农村信用",
                  "PSBC": "中国邮政储蓄银行",
                  "BZMD": "驻马店银行",
                  "ARCU": "安徽省农村信用社",
                  "GSRCU": "甘肃省农村信用",
                  "LYCB": "辽阳市商业银行",
                  "JLRCU": "吉林农信",
                  "URMQCCB": "乌鲁木齐市商业银行",
                  "XLBANK": "中山小榄村镇银行",
                  "CSCB": "长沙银行",
                  "JHBANK": "金华银行",
                  "BHB": "河北银行",
                  "NBYZ": "鄞州银行",
                  "LSBC": "临商银行",
                  "BOCD": "承德银行",
                  "SDRCU": "山东农信",
                  "NCB": "南昌银行",
                  "TCCB": "天津银行",
                  "WJRCB": "吴江农商银行",
                  "CBBQS": "城市商业银行资金清算中心",
                  "HBRCU": "河北省农村信用社"
                },
            // 绑定银行卡
            bankIid:'', //银行id
            userName:'', //开户人姓名
            province:'',
            city:document.getElementById('multiPickerInput').value.split("/")[1],
            branch:'', //支行地址
            bankcardNumber:'',
            // 省市联动
            // 省市map

            multiSelected: '',
            // 初始化后台，所有可供选择银行的列表
            initBankList:{},
            bankCards:{},

            // 点击银行卡默认选中，对勾
            activeRight:'',
            activeItem:[],
            switchView:'withDraw',
            nickname:'王大锤',
            bankInfo:{bankId:'',bankName:'卡号填写正确后显示'},
            id:'11111',
            // 提示框
            titleText:'xxxxxx',
            // 绑卡提交按钮样式切换
            btnstyle:'background: #cac4c6;',
            withDrawBtn:'background: #cac4c6;',
            bindCardStyle:'',
            showCopyAlert:'dsn',
            loading:false,
            btnstatus:false,
            //监听绑卡界面所有输入框是否已经填写完成
          }
        },
        el: '#app',
        components: {},
        computed:{

        },
        methods: {
          // 获取ip
          getApiToken(){
            let ip = window.location.href
            this.api_token = ip.split("=")[1]
            // console.log(this.api_token)
          },

          // 公用请求
        network(url, data, fun) {
            if (!data) {
              $.ajax({
                type: "GET",
                url:  url,
                headers: {
                  'X-Requested-With': 'XMLHttpRequest'
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
                  'X-Requested-With': 'XMLHttpRequest'
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
        // 初始化请求一次数据

        getInitData(){
          // 先请求一次银行卡接口，
            //如果返回有银行则展示，如果没有则显示添加银行卡
            let ip = this.ip
            let api_token = this.api_token
            let initBankList
            let bankList = []
            let bankcards
            let deposit
            // 根据 value 找到 key
            let mapBankName = this.mapBank

            this.network(ip+"/api/withdraw/bankcard?api_token=" + api_token,null, res=>{
                    if(res.status==0){
                        // console.log(res.data.banks)
                        initBankList = res.data.banks
                        bankcards = res.data.bankcards
                        this.initBankList = initBankList
                        deposit = res.data.deposit
                        this.deposit = deposit

                        // this.handingFee = deposit/10
                        // console.log(typeof(deposit))
                        this.bankCards = bankcards
                        this.initDeposit = deposit
                        // 将图标遍历到数组
                        // this.mapImg()
                        let png = this.png
                        let cdnIp = this.cdnIp


                        // 当前已经绑定至少一张卡
                        if(bankcards.length>0){
                          this.bindCard = 'bind'
                          this.cardChoose = bankcards[0].bank

                          this.activeItem = [bankcards[0].id,bankcards[0].bank,bankcards[0].code,bankcards[0].card_number.substr(bankcards[0].card_number.length-4)]

                          bankList = res.data.bankcards


                          let aliImgBank = "https://apimg.alipay.com/combo.png?d=cashier&t="

                          for(let i in bankList){
                            // console.log(bankList)
                            if(this.mapBankKey(mapBankName,bankList[i].bank) == undefined){
                            this.bankImg = cdnIp + bankList[i].code +png

                            bankList[i].bankImg =  cdnIp + bankList[i].code +png
                            // bankList[i].bankImg =



                            }else{
                            this.bankImg = cdnIp + bankList[i].code +png
                            bankList[i].bankImg =  cdnIp + bankList[i].code +png

                            // console.log(bankList)

                          }
                            this.bankImg = bankcards[0].bankImg


                            this.bankList = bankList
                          }

                        }else{
                          this.bindCard = 'unbind'
                        }

                    }else{

                    }
                })
          },

        // 监听选择省市切换样式
        check(){
          let userName=this.userName
          let bankcardNumber = this.bankcardNumber
          let branch  = this.branch
          let userReg =/^[\u4e00-\u9fa5]+$/;

          if(userName==="" || bankcardNumber==="" || branch===""){
            $("#bindbtn").attr("disabled",true);

          }else{
            this.btnstyle='background: #ff7bac;'
            $("#bindbtn").attr("disabled",false);

          }

        },

        // 绑定银行卡
          // 如果用户第一次打开充值，则给用户提示绑定卡片
        BindBankCard(){
          // this.switchView = 'chooseBank'
          this.switchView = 'bindbank'

        },

        //  输入金额与最大金额比大小
        compareInput(){
          this.condition = false
          let inputMoney = this.withDrawMoney
          let deposit = this.deposit
          let realMoney = inputMoney/1.1

              // realMoney = realMoney.toFixed(2)
          if(inputMoney <= deposit){
            // alert("输入金额超出最大提现金额")
            // this.isInput='输入金额超出最大提现金额'
            $("#withDrawBtn").attr("disabled",false);
            this.isInput = '实际到账' + realMoney.toFixed(2) + '元（汇率1元=11钻石）'

            if(inputMoney == ''){
                this.withDrawBtn='background:rgb(202, 196, 198)'
                this.isInput = '可用余额' + deposit
                $("#withDrawBtn").attr("disabled",true);

              }
            if( inputMoney < 100){
                this.withDrawBtn='background:rgb(202, 196, 198)'
              }
            else{
                this.withDrawBtn='background: #ff7bac;'
                $("#withDrawBtn").attr("disabled",false);

              }

          }else{
            $("#withDrawBtn").attr("disabled",true);
              this.isInput = '输入金额超出最大提现金额'
              this.withDrawBtn='background:rgb(202, 196, 198)'


          }


        },

        // 监听input 框是否全部输入完成
        listen(){
            let userName = this.userName
            let multiSelected = document.getElementById("multiPickerInput").value
            this.multiSelected = multiSelected
            let bankcardNumber = this.bankcardNumber
            let bankName = this.bankInfo.bankName
            let branch = this.branch
            let bindbtn
            if(branch!=='' && name!==''  && card_number !=='' ){

              this.btnstyle = "background: #ff7bac; "


            }else{
              this.btnstyle = "background:rgb(202, 196, 198); "

              // this.branch = ""

            }
          },
        // 提现按钮
        withDraw(){
          let ip = this.ip
          let api_token = this.api_token
          // bankcard 是银行卡id
          let id = this.activeItem[0]
          // console.log(id)
          data={
            api_token:api_token,
            bankcard:id,
            amount:this.withDrawMoney
          }
          if(this.withDrawMoney >= 100){
            $('#withDrawbtn').attr("disabled",false)
            this.network(ip + "/api/withdraw/commit",data,res=>{
            if(res.status==0){
                    this.loading=false
                    this.showCopyAlert="dsb"
                    this.titleText=res.message
                    setTimeout(()=>{this.showCopyAlert='dsn'},2500)
                    this.getInitData()
                    this.isInput = '可用余额' + this.deposit
                }else{
                    this.loading=false
                    this.showCopyAlert="dsb"
                    this.titleText=res.message
                    setTimeout(()=>{this.showCopyAlert='dsn'},1000)
                }

          })
          }else{
            $('#withDrawbtn').attr("disabled",false)
          }


        },
        mapBankKey(obj,value, compare = (a, b) => a === b){


          return Object.keys(obj).find(k => compare(obj[k], value))

        },

          // 点击切换或这绑定银行里卡，
              // 如果用户第一次打开充值，则给用户提示绑定卡片
              // 并且当用绑定卡片之后，显示用户绑定卡片信息，默认选择用户最后一次绑定
              // 否则允许用户进行选择
        switchCard(){
          if(this.bankList.length >= 5){
            this.bindCardStyle='background:rgb(202, 196, 198);'
          }else{
            this.switchView = 'bindbank'
          }
          let that = this
          let index = that.activeIndex
          that.isPointCard = true
          that.switchView = 'chooseBank'

          // console.log(that.activeItem)

        },

        // 选中银行卡显示该卡信息并且隐藏其他
        isActiveCard(index,item){
          let that = this
          item.tailCode = item.card_number.substr(item.card_number.length-4)
          let indexArr = [item.id, item.bank,item.code,item.tailCode]
          that.activeItem = indexArr
          // console.log(indexArr)
          // console.log(item)
          that.activeIndex = index
          that.cardChoose = item.bank
          that.switchView = 'withDraw'
          that.activeRight = index
          let mapBankName = this.mapBank
          this.bankImg =  this.cdnIp + indexArr[2] + this.png
        },
        addBankCard(){
          if(this.bankList.length >= 5){
            this.bindCardStyle='background:rgb(202, 196, 198);'
          }else{
            this.switchView = 'bindbank'
          }
        },
        // 绑卡界面返回按钮
        // 不同界面的返回按钮不同
        goback(){
          let currentView = this.switchView
          if(currentView == 'withDraw'){
            let origin=window.location.origin
            let api_token=this.api_token
            window.location.href = origin+"/api/chess/wallet?api_token="+api_token;
          }else{
            this.switchView = 'withDraw'
            this.getInitData()
          }

        },

        // 选择银行
        bankChoose(){

        },

        // 确认绑卡信息并提交
        submit(){
            let ip=this.ip
            let api_token=this.api_token
            let name=this.userName
            let area = document.getElementById("multiPickerInput").value
                area = area.split("/")
                // console.log(area)
            let province = area[0]
            let city = area[1]
            let bank_name=this.bankInfo.bankName
                bank_name = bank_name.replace(/\s/g, '')
            //银行卡号
            let card_number=this.bankcardNumber
                card_number = card_number.replace(/\s/g, '')
                // console.log(card_number)
            let branch = this.branch
            // console.log(bank_name)
            let bankInfo = this.bankInfo
              // console.log(this.bankInfo)
              let id = this.mapOtherKeyValue(this.bankInfo.bankName,this.initBankList)
              // console.log(id)
              this.bankInfo.bankId = id

              //按钮可点击

              this.btnstatus=true
              // this.btnstyle='background: #ff7bac;'
              this.loading=true
              let data={
                api_token:api_token,
                name:name,
                card_number:card_number,
                bank_id:id,
                province:province,
                city:city,
                branch:branch
              }
              if(branch!=='' && name!=='' && city.search("选择")==-1 && province.search("选择")==-1 && card_number !=='' ){
                let ip = this.ip
                this.network(ip+"/api/withdraw/bind",data, res=>{
                    if(res.status==0){
                        this.getInitData()
                        this.loading=false
                        this.showCopyAlert="dsb"
                        this.titleText=res.message
                        setTimeout(()=>{this.showCopyAlert='dsn'},1000)
                        // setTimeout(()=>{this.switchView = "chooseBank"},200)
                        this.switchView = "chooseBank"



                    }else{
                        this.loading=false
                        this.showCopyAlert="dsb"
                        this.titleText=res.message
                        setTimeout(()=>{this.showCopyAlert='dsn'},1000)
                    }
                })
              }else{
                this.loading=false
                this.showCopyAlert="dsb"
                this.titleText="请补全未填写内容"
                setTimeout(()=>{this.showCopyAlert='dsn'},1000)
              }

          },
        // 输入银行卡号格式化
        cardNumFormat(){
          let multiSelected = document.getElementById("multiPickerInput").value

          this.multiSelected = multiSelected
          this.province = multiSelected.split("/")[0]
          this.city = multiSelected.split("/")[0]

            let before = this.bankcardNumber
            //只能输入数字，输入非数字自动清零
            if(before.charAt(0) >= '0' && before.charAt(0) <= '9'){
                before = before.replace(/(\d{4})(?=\d)/g, "$1 ");
                this.bankcardNumber = before
                // console.log(this.bankcard_number)
                let chekNum = before.replace(/\s/g, '');
                if(chekNum.length == 19){
                    // console.log(chekNum.length)
                    let aliBank = "https://ccdcapi.alipay.com/validateAndCacheCardInfo.json?_input_charset=utf-8&cardNo="+ chekNum + "&cardBinCheck=true"
                    this.network(aliBank,null,res=>{
                      // console.log(res)

                      if(res.messages.length === 0){
                        let mapBandCode = res.bank
                        // console.log(res)
                        let bankName = this.mapBank[mapBandCode]
                        if(bankName === "中国银行" || bankName === "中国邮政储蓄银行" ){
                          this.bankInfo.bankName =  bankName
                        }else{
                              if(bankName.indexOf("中国") != -1){
                              bankName =  bankName.split("中国")[1]
                              this.bankInfo.bankName = bankName
                            }
                        }
                      }else{
                        this.bankcardNumber = ""
                        this.bankInfo.bankName = "请填写有效银行卡号"
                      }

                    })
            }
            }else{
                this.bankcardNumber = ""
                this.bankInfo.bankName="请填写有效银行卡号"

            }

          },
          // 通过一个属性，找到对象里的另一个属性
          mapOtherKeyValue(value,arr){
            // 为以后传不同参数做准备
            if( (value === this.activeItem[0])){
              let filterArray = arr.filter(function(v) {
              return v.id === value
            })
            if(filterArray.length){
              return filterArray[0].card_number
            }
            }else{
              let filterArray = arr.filter(function(v) {
              return v.name === value
            })
              if((value == this.bankInfo.bankName) && filterArray.length){
              return filterArray[0].id
            }
            }


          },

        //提示框
        },
        updated() {

        },
        created() {
          this.getApiToken()
          this.getInitData()

        },
        watch:{
          userName:function(curVal, oldVal){
            if (curVal) {
              this.check()
            }
          },
          branch:function(curVal, oldVal){
            if (curVal) {
              this.check()
            }
          },
          bankcardNumber:function(curVal, oldVal){
            if (curVal) {
              this.check()
            }
          }
        },


        mounted() {
          // MulitiPicker 省-市-区三级选择
            (function (wid, dcm) {
                  var win = wid;
                  var doc = dcm;

                  function $id(id) {
                      return doc.getElementById(id);
                  }
                  function $class(name) {
                      return doc.getElementsByClassName(name);
                  }
                  function loop(begin, length, fuc) {
                      for ( var i = begin; i < length; i++ ) {
                          if (fuc(i)) break;
                      }
                  }
                  function on(action, selector, callback) {
                      doc.addEventListener(action, function (e) {
                          if (selector == e.target.tagName.toLowerCase() || selector == e.target.className || selector == e.target.id) {
                              callback(e);
                          }
                      })
                  }
                  function MultiPicker(config) {
                      this.input     = config.input;
                      this.container = config.container;
                      this.jsonData  = config.jsonData;
                      this.success   = config.success;

                      this.ulCount   = 0; //记录上一次的
                      this.ulIdx     = 0; //ul下标计数器,前一次的计数器
                      this.ulDomArr  = [];//ul的dom元素,【a】
                      this.idxArr    = [];//更新后的ul的下标 【a】
                      this.jsonArr   = [];//用来存储每个ul的li中显示的arr【a】
                      this.liHeight  = 40;
                      this.maxHeight = [];//每个ul的最大高度【a】
                      this.distance  = [];//transition的移动位置【a】
                      this.start     = {
                          Y: 0,
                          time: ''
                      };
                      this.move      = {
                          Y: 0,
                          speed: []
                      };
                      this.end       = {
                          Y: 0,
                          status: true,
                      };
                      this.resultArr = [];
                      this.initDomFuc();
                      this.initReady(0, this.jsonData[0]);
                      this.initBinding();
                  }

                  MultiPicker.prototype = {
                      constructor: MultiPicker,
                      generateArrData: function (targetArr) {
                          var tempArr = [];
                          loop(0, targetArr.length, function (i) {
                              tempArr.push({
                                  "id": targetArr[i].id,
                                  "value": targetArr[i].value
                              })
                          });
                          return tempArr;
                      },
                      checkArrDeep: function (parent) {
                          var _this = this;
                          if ('child' in parent && parent.child.length > 0) {
                              _this.jsonArr.push(_this.generateArrData(parent.child));
                              _this.checkArrDeep(parent.child[0]);
                          }
                          _this.idxArr.push(this.ulIdx++);
                      },
                      insertLiArr: function (targetUl, arr) {
                          var html    = '';
                          var nullObj = {
                              id: '-99',
                              value: '',
                          };
                          arr.unshift(nullObj, nullObj);
                          arr.push(nullObj, nullObj);
                          loop(0, arr.length, function (i) {
                              html += '<li data-id="' + arr[i].id + '">' + arr[i].value + '</li>';
                          });
                          targetUl.innerHTML = html;
                      },
                      initDomFuc: function () {
                          var _this                      = this;
                          var html                       = '';
                          html += '<div class="multi-picker-bg" id="multi-picker-bg-' + _this.container + '">'
                                  + '<div  class="multi-picker-container" id="multi-picker-container-' + _this.container + '">'
                                  + '<div class="multi-picker-btn-box">'
                                  // + '<div class="multi-picker-btn" id="multi-picker-btn-cancel">返回</div>'
                                  + '<div class="multi-picker-btn" id="multi-picker-btn-save-' + _this.container + '" >提交</div>'
                                  + '</div>'
                                  + '<div class="multi-picker-content">'
                                  + '<div class="multi-picker-up-shadow"></div>'
                                  + '<div class="multi-picker-down-shadow"></div>'
                                  + '<div class="multi-picker-line"></div>'
                                  + '</div></div></div>';
                          $id(_this.container).innerHTML = html;
                          _this.jsonArr.push(_this.generateArrData(_this.jsonData));
                      },
                      initReady: function (idx, target) {
                          var _this            = this;
                          this.ulIdx           = 0;
                          this.idxArr.length   = idx;
                          _this.jsonArr.length = idx + 1;
                          _this.checkArrDeep(target);
                          var parentNode = $id('multi-picker-container-' + _this.container).children[1];
                          var tempMax    = _this.ulCount <= _this.idxArr.length ? _this.ulCount : _this.idxArr.length;
                          loop(idx + 1, tempMax, function (i) {
                              var $picker = $id('multi-picker-' + _this.container + '-' + i);
                              _this.insertLiArr($picker, _this.jsonArr[i]);
                              _this.distance[i]             = 0;
                              $picker.style.transform       = 'translate3d(0, 0, 0)';
                              $picker.style.webkitTransform = 'translate3d(0, 0, 0)';
                          });
                          if (_this.ulCount <= _this.idxArr.length) {
                              loop(_this.ulCount, _this.idxArr.length, function (i) {
                                  var newPickerDiv = document.createElement('div');
                                  newPickerDiv.setAttribute('class', 'multi-picker');
                                  newPickerDiv.innerHTML = '<ul id="multi-picker-' + _this.container + '-' + i + '"></ul>';
                                  parentNode.insertBefore(newPickerDiv, parentNode.children[parentNode.children.length - 3]);
                                  var tempDomUl = $id('multi-picker-' + _this.container + '-' + i);
                                  _this.ulDomArr.push(tempDomUl);
                                  _this.distance.push(0);

                                  _this.insertLiArr(tempDomUl, _this.jsonArr[i]);

                                  var tempArray = _this.jsonArr[i];
                                  tempDomUl.addEventListener('touchstart', function () {
                                      _this.touch(event, _this, tempDomUl, tempArray, i);
                                  }, false);
                                  tempDomUl.addEventListener('touchmove', function () {
                                      _this.touch(event, _this, tempDomUl, tempArray, i);
                                  }, false);
                                  tempDomUl.addEventListener('touchend', function () {
                                      _this.touch(event, _this, tempDomUl, tempArray, i);
                                  }, true);
                              });
                          } else {
                              for ( var j = _this.ulCount - 1; j > _this.idxArr.length - 1; j-- ) {
                          var oldPicker = $id(_this.container).querySelectorAll('.multi-picker')[j];
                                  oldPicker.parentNode.removeChild(oldPicker);
                                  _this.ulDomArr.pop();
                                  _this.distance.pop();
                              }
                          }

                          _this.maxHeight.length = 0;
                          _this.resultArr.length = 0;
                          loop(0, _this.idxArr.length, function (i) {
                              $id(_this.container).querySelectorAll('.multi-picker')[i].style.width = 100 / _this.idxArr.length + '%';
                              _this.maxHeight.push($id('multi-picker-' + _this.container + '-' + i).childNodes.length * _this.liHeight);
                              _this.resultArr.push({
                                  "id": _this.jsonArr[i][_this.distance[i] / _this.liHeight + 2].id,
                                  "value": _this.jsonArr[i][_this.distance[i] / _this.liHeight + 2].value,
                              });
                          });
                          _this.ulCount = _this.idxArr.length;
                      },
                      initBinding: function () {
                          var _this     = this;
                          var bg        = $id('multi-picker-bg-' + _this.container);
                          var container = $id('multi-picker-container-' + _this.container);
                          var body      = doc.body;
                          on('touchstart', _this.input, function () {
                              bg.classList.add('multi-picker-bg-up');
                              container.classList.add('multi-picker-container-up');
                              body.classList.add('multi-picker-locked');
                          }, false);

                          on('touchstart', 'multi-picker-btn-save-' + _this.container, function () {
                              _this.success(_this.resultArr);
                              bg.classList.remove('multi-picker-bg-up');
                              container.classList.remove('multi-picker-container-up');
                              body.classList.remove('multi-picker-locked');
                          }, false);

                          on('touchstart', 'multi-picker-bg-' + _this.container, function () {
                              bg.classList.remove('multi-picker-bg-up');
                              container.classList.remove('multi-picker-container-up');
                              body.classList.remove('multi-picker-locked');
                          }, false);

                          on('touchstart', 'multi-picker-btn-cancel', function () {
                              bg.classList.remove('multi-picker-bg-up');
                              container.classList.remove('multi-picker-container-up');
                              body.classList.remove('multi-picker-locked');
                          }, false);
                      },
                      checkRange: function (idx) {
                          var _this     = this;
                          var tempObj   = _this.jsonData;
                          var targetIdx = 0;
                          loop(0, idx + 1, function (i) {
                              targetIdx = _this.distance[i] / _this.liHeight;
                              tempObj   = i == 0 ? tempObj[targetIdx] : tempObj.child[targetIdx];
                          });
                          _this.initReady(idx, tempObj);
                      },
                      initPosition: function (dis, max, idx) {
                          dis     = dis < 0 ? 0 : dis;
                          dis     = dis > max ? max : dis;
                          var sub = dis % this.liHeight;
                          if (sub < this.liHeight / 2) {
                              this.distance[idx] = dis - sub;
                          } else {
                              this.distance[idx] = dis + (this.liHeight - sub);
                          }
                          return this;
                      },
                      initSpeed: function (arr, dir, max, idx) {
                          var variance = 0;
                          var sum      = 0;
                          var rate     = 0;
                          for ( var i in arr ) {
                              sum += arr[i] - 0;
                          }
                          for ( var j in arr ) {
                              variance += (arr[j] - (sum / arr.length)) * (arr[j] - (sum / arr.length));
                          }
                          if ((variance / arr.length).toFixed(2) > .1) {
                              rate = max > this.liHeight * 15 ? dir * 2 : 0;
                              this.initPosition(this.distance[idx] + rate, max - this.liHeight * 5, idx);
                              this.move.speed[0] = .2;
                          } else {
                              this.initPosition(this.distance[idx], max, idx);
                              this.move.speed[0] = this.move.speed[0] > 0.2 ? .2 : this.move.speed[0];
                          }
                      },
                      touch: function (event, that, $picker, array, idx) {
                          event = event || window.event;
                          event.preventDefault();
                          switch (event.type) {
                              case "touchstart":
                                  if (that.end.status) {
                                      that.end.status = !that.end.status;
                                      event.preventDefault();
                                      that.move.speed = [];
                                      that.start.Y    = event.touches[0].clientY;
                                      that.start.time = Date.now();
                                  }

                                  break;
                              case "touchend":
                                  that.end.Y         = Math.abs(event.changedTouches[0].clientY);
                                  var tempDis        = that.distance[idx] + (that.start.Y - that.end.Y);
                                  var temp           = that.distance[idx];
                                  that.distance[idx] = tempDis < 0 ? 0 : (tempDis < that.maxHeight[idx] - this.liHeight * 5 ? tempDis : that.maxHeight[idx] - this.liHeight * 5);
                                  that.initSpeed(that.move.speed, that.start.Y - that.end.Y, that.maxHeight[idx], idx);

                                  $picker.style.transform        = 'translate3d(0,-' + that.distance[idx] + 'px, 0)';
                                  $picker.style.webkitTransform  = 'translate3d(0,-' + that.distance[idx] + 'px, 0)';
                                  $picker.style.transition       = 'transform ' + that.move.speed[0] + 's ease-out';
                                  $picker.style.webkitTransition = '-webkit-transform ' + that.move.speed[0] + 's ease-out';
                                  //设置后续ul;
                                  if (temp != that.distance[idx]) that.checkRange(idx);
                                  setTimeout(function () {
                                      that.end.status = true;
                                  }, that.move.speed[0] * 1000);
                                  break;
                              case "touchmove":
                                  event.preventDefault();
                                  that.move.Y = event.touches[0].clientY;
                                  var offset  = that.start.Y - that.move.Y;
                                  if (that.distance[idx] == 0 && offset < 0) {
                                      $picker.style.transform        = 'translate3d(0,' + 1.5 * that.liHeight + 'px, 0)';
                                      $picker.style.webkitTransform  = 'translate3d(0,' + 1.5 * that.liHeight + 'px, 0)';
                                      $picker.style.transition       = 'transform 0.2s ease-out';
                                      $picker.style.webkitTransition = '-webkit-transform 0.2s ease-out';
                                  } else {
                                      $picker.style.transform       = 'translate3d(0,-' + (offset + that.distance[idx]) + 'px, 0)';
                                      $picker.style.webkitTransform = 'translate3d(0,-' + (offset + that.distance[idx]) + 'px, 0)';
                                  }
                                  if (Math.abs(offset).toFixed(0) % 5 === 0) {
                                      var time = Date.now();
                                      that.move.speed.push((Math.abs(offset) / (time - that.start.time)).toFixed(2));
                                  }
                                  break;
                          }
                      }
                  };
                  if (typeof exports == "object") {
                      module.exports = MultiPicker;
                  } else if (typeof define == "function" && define.amd) {
                      define([], function () {
                          return MultiPicker
                      })
                  } else {
                      win.MultiPicker = MultiPicker;
                  }
              })(window, document)

              //---------------------函数调用开始---------------------
              new MultiPicker({
                  input: 'multiPickerInput',//点击触发插件的input框的id
                  container: 'targetContainer',//插件插入的容器id
                  jsonData: $city,
                  success: function (arr) {
                      // alert('页面会显示最终结果');
                      if(arr.length == 2 || arr[2].value=='请选择'){
                        // document.getElementById('showBlock').innerHTML = arr[0].value + "/" + arr[1].value ;
                        document.getElementById('multiPickerInput').value = arr[0].value + "/" + arr[1].value ;



                      }else{
                        // document.getElementById('showBlock').innerHTML = arr[0].value + "/" + arr[1].value + "/" + arr[2].value ;
                        document.getElementById('multiPickerInput').value = arr[0].value + "/" + arr[1].value + "/" + arr[2].value;

                      }

                  }//回调
              })
              //---------------------函数调用结束---------------------

            }
    })
</script>
