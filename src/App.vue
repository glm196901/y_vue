<template>
  <div id="app">
      <router-view></router-view>
  </div>
</template>

<script>
  export default {
    name: 'App'
  }
</script>

<style>
#app {font-family: "Avenir", Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;}
.container { position: absolute;  top: 0.2rem;  bottom: 0.8rem;  width: 100%;  font-size: 0.2rem;}
#app * {  box-sizing: border-box;}
.disabled {  color: #aaa !important;}
button {  border: none;  outline: none;  cursor: pointer;}
* {  margin: 0;  padding: 0;  font-family: 微软雅黑;}
a {  text-decoration: none;  cursor: pointer;}
input {  outline: none;}
li {  list-style: none;}
* {margin: 0;padding: 0;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);-webkit-text-size-adjust: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;font-family: Arial, "微软雅黑";}
img {border: none;max-width: 100%;vertical-align: middle;}
body,p,form,input,button,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;  list-style: none;}
h1,h2,h3,h4,h5,h6 {font-size: 100%;}
input,textarea {-webkit-user-select: text;  -ms-user-select: text;  user-select: text;  -webkit-appearance: none;}
table {border-collapse: collapse;}
input,select,textarea {outline: none; border: none; background: none;}
a {  outline: 0;  cursor: pointer;  color: #666;}
a:link,a:active {  text-decoration: none;}
a:visited {  text-decoration: none;}
a {  text-decoration: none;  -webkit-touch-callout: none;}
em,i {  font-style: normal;}
li,ol {  list-style: none;}
.clearfix::after {  clear: both;  height: 0;  font-size: 0;  display: block;  content: ' ';}
.fl {float: left;}
.fr {float: right;}
body {margin: 0 auto;min-width: 320px;color: #666;background: #fff;}
body>* {box-sizing: border-box;}
/*单行文本溢出显示省略号*/
.text_splice {  overflow: hidden;  text-overflow: ellipsis;  white-space: nowrap;}
/*多行文本溢出显示省略号*/
.more_text_splice {  display: -webkit-box;  -webkit-box-orient: vertical;  -webkit-line-clamp: 2;  overflow: hidden;}
.el-checkbox .el-checkbox__label{  font-size: 0.3rem;}
.el-loading-mask{background-color: rgba(255, 255, 255, 0.1);}
.el-loading-spinner{top:15%}
/* 充值页样式 */
*{ margin:0; padding:0; box-sizing: border-box;}
li{list-style: none;}
.dsn{display:none!important}
.dsb{display:block!important}
.fl{float: left!important}
.fr{float: right!important}
.header{font-size: 0;}
.header span{display: inline-block;}
.header .red{font-size: 0.3rem;height: 0.4rem;line-height: 0.4rem;}
.header  i {position: relative;top: 0.17rem;display: inline-block; width: 0.28rem; height: 0.28rem; background: url(/images/diamond.png) 0 0 no-repeat; background-size: cover; }
.header{position: relative;height: 1.2rem;line-height: 1.2rem;background: #fff;font-size: 0.4rem;padding: 0rem 0.2rem;}
.footer .title{ color:#2f2f2f; font-size: 0.25rem;  font-weight: bold; padding-left: 0.3rem;}
.serve{ padding-left:0.12rem;height: 1rem;display: inline-block;font-size: 0.3rem;width: 100%;padding-left: 0.3rem;}
.serve li a{font-size: 0.25rem;}
.serve li{font-size: 0.25rem;}
.serve .go{ color:red;font-size: 0.25rem;}
.list{font-size: 0;background: #fff;margin-top: 0rem;}
.titlee li{display: inline-block;width:1.7rem;text-align: center;height:0.7rem;padding-top: 0.2rem;font-size: 0.3rem;color:#000;}
.titlee li span{display: inline-block;}
.titlee ul{white-space: nowrap; overflow-x: auto;height: 0.8rem;}
.titlee ul::-webkit-scrollbar { width:0; height:0; display: none; }
.titlee .border_b{width:0.7rem;border-bottom: 0.08rem solid #FF7BAC;margin: 0.1rem auto;}
.titlee {height: 1.2rem;overflow: -webkit-paged-x;font-size: 0;}
.list .titlee .active{color:#FF7BAC}
.list .li li{width: 2rem;height: 1.2rem;position: relative;padding: 0.2rem;border-radius: 0.08rem;display: inline-block;font-size: 0.3rem;border: 0.02rem solid #efeeee;text-align: center;color: #000;margin: 0.2rem;}
.list .li .money{font-size: 0.2rem;color: #969696;}
.list .li .sm{font-size: 0.25rem;color:#969696}
.list .li .active{border: 0.02rem solid #FF7BAC;color:#FF7BAC;}
.list .li .active .price i,.list .li .active .price span{color:#000;}
.list .li .gif{display: inline-block;position: absolute;top: -0.2rem;font-size: 0.2rem;width: 1.2rem;left: 1rem;background: #FF7BAC;color: #fff;padding: 0.02rem;border-radius: 0.05rem;}
.border_bottom_active{border-bottom: 0.02rem solid #FF7BAC;}
.paylist {background: #fff;padding-top: 0.2rem;}
.paytitle{font-size: 0.25rem;padding-left: 0.2rem;position: relative;color: #8D8C8C;height: 0.5rem !important;line-height: 0.5rem;}
.paylist li{width: 100%;height: 0.7rem;}
.paylist li i{display:none;}
.blacnce{display: block;height: 0.5rem;line-height: 0.5rem;font-size: 0.3rem;color: #8F8F8F;}
.damo{position: relative;left: 0.05rem;top: 0.05rem;display: inline-block; width: 0.3rem; height: 0.3rem; background: url(/images/diamond.png) 0 0 no-repeat; background-size: cover; }
.paylist .el-icon-success{height: 0.4rem;width: 0.4rem;font-size: 0.4rem;color: #FF7BAC;margin-right: 0.5rem;margin-top: 0.15rem;}
.paylist .payname{font-size: 0.3rem;float: left;padding-top: 0.15rem;padding-left: 0.4rem;}
.sure{width: 100%;background: #fff;}
.sure .surebtn{display: block;width: 6.5rem;height:0.9rem;background: linear-gradient(to right, #FCBBD3 , #F8669C);color: #fff;line-height: 0.78rem;text-align: center;font-size: 0.3rem;letter-spacing: 1px;margin: 0.4rem auto;margin-top: 0.25rem;outline: none;border-radius: 1rem;border: none;box-shadow: 0rem 0.1rem 0.5rem 0.005rem #f3bed2;}
.footer{background: #fff;font-size: 0;width: 100%;}
.addbottom{position: absolute;bottom: 0;}
.diaM{ margin-top:0.1rem;padding: 0rem 0.22rem;margin: 0 auto; }
.line{ display: block;margin: 0.1rem auto;height:0.2rem; background: #e4dee0;border-radius:0.07rem;}
.diaM .getDm{margin:0 auto; background: #eee; }
.diaM .getDm .title{ position: relative; width:100%; height:0.76rem; line-height: 0.76rem; text-indent: 0.3rem; font-size: 0.28rem; background: #fff; }
.diaM .getDm .title > i{ position: absolute; left:0.02rem; top:0.12rem; display: block; width:0.06rem; height:0.5rem; background: #fe0000; }
.dimBox {background: #fff;font-size: 0;margin: 0 0.3rem;}
.dimBox li.discount.active{ border:0.02rem solid red; background: #ffdede;}
.dimBox li{display: inline-block;position: relative; width:25%; height:2.7rem; border:0.01rem dashed #ccc;font-size: 0.3rem;}
.dimBox li.discount p{ text-align: center; }
.dimBox li.discount p.f-p{ padding-top:0.6rem; }
.dimBox li.discount p.s-p{ margin-top:0.2rem; font-weight: bold; color:red; }
.dimBox li.discount p.f-p i{ position: relative; top:0.1rem; display: inline-block; width:0.5rem; height:0.5rem; background: url(/images/diamond.png) 0 0 no-repeat; background-size:cover; margin-left:0.1rem;}
.dimBox li.discount .t-tip{ position: absolute; left: 0rem; bottom:0rem; width:100%; font-size: 0.3rem; background: yellow; }
.dimBox li.discount .t-tip p{ width:100%; padding:0.05rem 0rem;}
.dimBox li.discount .t-tip span{color:red;}
button{outline: none;text-align: center;border-radius: 0.1rem;}
.btn-group .displaynone{display:none}
.btn-group {position: relative;font-size: 0;margin-bottom: 0.15rem;bottom: 0.15rem;}
.payType{display: inline-block;width: 48%;margin-left: 0.1rem;margin-top:0.2rem;border-radius: 0.2rem;margin-left: 0.05rem;height: 1rem;}
.actAmount .Charge,.actAmount .Charge{width:50%;display:inline-block;text-align: center;}
.actAmount  .activee{background: #03A9F4;color: #fff;}
#ManualCharge{display:block;padding: 0.1rem 0rem;font-size: 0.25rem;background: #fff;height: 70%;}
#ManualCharge .myAccount{text-align: center;background: #fff;height:1rem;line-height: 1rem;}
#ManualCharge .myAccount button{height: 0.6rem;line-height: 0.6rem;font-size: 0.25rem;padding: 0 0.2rem;border-radius: 0.2rem;background:#f3f3f3;border: 0.01rem solid #ededed;box-shadow:0px 4px 7px 0px rgba(214, 211, 212, 0.5);}
.clist{background: #fff;}
.clist ul li{width: 25%;text-align: center;display: inline-block;border: 0.02rem solid #efeeee;margin: 0.2rem 0.31rem;padding: 0.2rem 0rem;border-radius: 0.1rem;}
.clist ul li p{overflow: hidden;text-overflow: ellipsis;padding-bottom: 0.15rem;}
.Charge .hot{position: relative;right: -0.1rem;color: #f50909;font-size: 0.23rem;top: -0.18rem;font-weight: 600;}
.clist ul li  i{height: 0.4rem;line-height: 0.4rem;font-size: 0.45rem;width: 0.7rem;color: #fff;display: inline-block;margin-top: 0.15rem;}
.clist ul li  button,.footer .wechatbtn{font-size: 0.28rem;background:#FF7BAC;padding: 0.1rem 0.2rem;color: #fff;border: none;box-shadow:0px 4px 7px 0px rgba(214, 211, 212, 0.5);}
.footer .wechatbtn{margin-left: 0.2rem;font-size: 0.25rem;background: #00cc00;padding: 0.1rem 0.1rem;color: #fff;border: none;margin-top: 0.1rem;box-shadow:0px 4px 7px 0px rgba(214, 211, 212, 0.5);}
.my_account{padding-right:10px}
#cAlert{display:none}
#cAlert{width: 100%;height: 100%;background-color: rgba(0,0,0,.5);position: fixed;top: 0;left: 0;z-index: 15;overflow: auto;}
#cAlert .cAlert{width:70%;margin: 5rem auto;background-color: #fff;position: relative;overflow: hidden;border-radius: 0.1rem;}
#cAlert .cAlert p{font-size: 0.25rem;padding: 0.2rem;}
.cAlert i{height: 1rem;width: 1rem;display: inline-block;color: #fff;font-size: 0.5rem;float: right;}
.cAlert .wechatbtn{margin: 0 auto;height:0.7rem;line-height:0.7rem;font-size: 0.25rem;width: 4rem;background: #FF7BAC;color:#fff;display: block;box-shadow: 2px 3px 5px #b3b7b2;border: none;}
.cAlert .wechatbtn a{color:#fff;}
#cAlert .cAlert .title{background: #FF7BAC;padding: 0;text-align: center;color: #fff;}
#cAlert .cAlert .infobtn{height: 1.1rem;line-height: 1.1rem;}
#cAlert .cAlert .info{margin: 0.2rem;border: 0.01rem solid #333;border-radius: 0.1rem;}
#cAlert .cAlert .act{text-align: center;}
#cAlert .title{position: relative;font-size: 0.3rem;padding-left: 0;height: 0.7rem;line-height: 0.7rem;}
.greenc{background: #00cc00 !important;color: #fff;border: 0.01rem solid #00cc00!important;}
.redc{background: #fb0000 !important;color: #fff;border: 0.01rem solid #fb0000!important;}
.myAccount .switch{float: right;margin-top: 0.2rem;position: relative;right: 1.15rem;}
.head{height: 0.5rem;}
#app {position: absolute;width: 100%;background: #fff;}
#qrcode{text-align: center;padding: 1rem 0rem;}
#qrcode img{display: inline-block !important;width: 5rem;}
.qrtitle{position: relative;font-size: 0.4rem;font-weight: bold;padding-left: 0;height: 0.7rem;line-height: 0.7rem;text-align: center;padding-top: 0.2rem;color: #fb0b0b;}
.alertfall{width: 100%;height: 100%;background: rgba(0, 0, 0, 0.3);position: fixed;z-index: 11;top: 0;display:none;}
.alertfall .title span{color: #fff;}
.alertfall .title{height: 0.2rem;font-size: 0.35rem;text-align: center;color: #fff;background: #ff7bac;border-top-left-radius: 0.1rem;border-top-right-radius: 0.1rem;}
.alertfall .msgg{font-size: 0.35rem;text-align: center;padding: 0.6rem 0rem;}
.alertfall .content{position: relative;top: 26%;width: 80%;background:#fff;background-size: 100%;font-size: 0.35rem;margin: 0.5rem auto;border-radius: 0.1rem;}
.ShowBtnGoGame{width: 100%;font-size: 0;}
.ShowBtnGoGame button{width: 50%;border-radius: 0;height: 1rem;font-size: 0.35rem;background: #fff;border: 0.01rem solid #dedede;}
.ShowBtn{width: 100%;font-size: 0;text-align: center;}
.ShowBtn button{height: 1rem;font-size: 0.35rem;color: #000;background: #fff;border: 0.01rem solid #dedede;border-radius: 0.1rem;width: 100%;}
.svg-icon {width: 0.5rem;display: inline-block;height: 0.5rem;line-height: 0.5rem;float: left;position: relative;top: 0.1rem;margin-left: 0.4rem;}
.dark{height:0.1rem;width:100%;background: #efefef;}
/* 充值页样式结束 */
/* 提现样式开始 */
/* 省市联级选择 */
*{padding:0;margin:0;font-weight:400;}
.multi-picker-locked{height:100% !important;overflow:hidden !important;}
.multi-picker-bg{position:fixed;top:0;left:0;background:rgba(75,75,75,0);height:100%;width:100%;overflow:hidden;transition:all .3s ease;-webkit-transition:all .3s ease;z-index:-1;}
.multi-picker-bg-up{z-index:999 !important;background:rgba(75,75,75,0.65) !important;}
.multi-picker-container{width:100%;height:250px;position:absolute;bottom:0;transform:translate3d(0,250px,0);-webkit-transform:translate3d(0,250px,0);left:0;background-color:#FFF;transition:transform .3s ease;-webkit-transition:-webkit-transform .3s ease;z-index:-1;}
.multi-picker-container-up{transform:translate3d(0,0,0) !important;-webkit-transform:translate3d(0,0,0) !important;}
.multi-picker-btn-box{display:block;position:absolute;text-align:center;width:100%;height:50px;line-height:50px;z-index:10;}
.multi-picker-btn-box .multi-picker-btn{position:absolute;display:inline-block;margin:0 20px;color:#fff;right:0;}
.multi-picker-btn-box .multi-picker-btn:nth-child(1){color:#000}
.multi-picker-content{border-top:1px solid rgba(218,218,218,.7);position:absolute;width:100%;background:#fff;font-size:0;top:50px;z-index:10;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);transition:transform .3s ease;-webkit-transition:-webkit-transform .3s ease;}
.multi-picker-content .multi-picker{display:inline-block;height:200px;overflow:hidden;position:relative;z-index:-1;transition:width .3s ease;vertical-align:top;}.multi-picker-content ul::-webkit-scrollbar{display:none;}
.multi-picker-content li{height:40px;text-align:center;font-size:16px;line-height:40px;list-style:none;color:#333;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.multi-picker-content .multi-picker-up-shadow,.multi-picker-content .multi-picker-down-shadow{position:absolute;width:100%;height:80px;pointer-events:none;}
.multi-picker-content .multi-picker-up-shadow{top:0;background-image:linear-gradient(to bottom,#FFF,rgba(255,255,255,0));z-index:50;}
.multi-picker-content .multi-picker-down-shadow{bottom:-200px;z-index:50;background-image:linear-gradient(to top,#FFF,rgba(255,255,255,0));}
.multi-picker-content .multi-picker-line{width:95%;height:40px;position:absolute;top:80px;left:50%;pointer-events:none;box-sizing:border-box;border-top:1px solid #DCDCDC;border-bottom:1px solid #DCDCDC;transform:translate3d(-50%,0,0);-webkit-transform:translate3d(-50%,0,0);}
*{ margin:0px; padding:0px;}
li{list-style:none;}
html{overflow-y:scroll;font-size:0.4rem;}
body{background: #f6f6f6;user-select: none;onselectstart:none;font-family: PingFangSC-Regular;font-weight: normal;height: 100%;}
.left{text-align: left; margin-left: 0.4rem; }
.switchCard{width: 100%; height: 1.7rem; text-align: center; background: #fff;margin-top: 0.5rem; line-height: 1.5rem}
.withMoney{margin-top: 0.2rem}
.inputDad{height: 1.2rem;padding-left:0.4rem; padding-top: 0.5rem; }
.withDraw{width: 100%; height: 3.5rem; text-align: center; background: #fff ; margin-top: 1rem; }
.withDraw p{padding-top: 0.35rem}
.RMB{float: left; height: 1rem;text-align: center; margin-left: 0;}
.inputMoney{border: none;float: left;height: 1rem; width: 8rem;;font-size: 0.5rem;outline:none; margin-left: 0.2rem}
/* 人民币字体号 */
.icon-renmingbi:before{position: relative;top: 0.28rem;}
.line{width: 89%;height: 1px; background:#cac4c6; margin: 0 auto}
.unbind{background: #cac4c6; width: 100%; height: 1.5rem; font-size:0.5rem; color:#fff; text-align: center; margin-top: 0.5rem;line-height: 1.5rem}
.show{display: block !important ;}
.hidden{display: none !important ;}
.banklist{width: 100%; text-align: center; margin-top:0.3rem }
.banklist li{background: #fff;  height: 1.7rem; text-align: center; border-bottom: 1px solid #cac4c6;}
/* 输入卡号时候光标乱动 */
.inputCardNumber{position: absolute;}
/* 最多五张 */
.addBankCard{height: 1.1rem;line-height: 1.1rem;width: 92%;color: #fff;background: #ff7bac;border: none;font-size: 0.5rem;border-radius: 0.1rem; margin-top:0.5rem;}
/*  字体文件样式 */
.icon-jiantou-right:before{float: right;top: -1.35rem;position: relative;}
.icon-zhengque:before{margin-right: 0.1rem;color: #ff7bac;font-size: 0.5rem;line-height: 1.7rem}
/* 文字备注 */
.backupNote{margin-top: 0.5rem }
/* 体现页面文字 */
.bankNameInit{ top: -0.1rem;position: relative;left: -1rem;font-size: 0.4rem;font-weight: 550}
.bankCodeInit{ top: 0.5rem;position: relative;left: -2.6rem;font-size: 0.35rem;}
.bankWordInit{ top: 0.5rem;position: relative;left: -2.6rem;font-size: 0.35rem;}
/* 选银行页面文字 */
.bankName{top: 0.4rem;position: relative;left: 0.3rem;font-size: 0.4rem;font-weight:550;}
.tailCode{position: relative;left: -1.25rem;top: 1rem;color: #5D5C5F;font-size: 0.35rem;}
.bankWord{margin-left: 0.1rem;color: #5D5C5F;font-size: 0.35rem;}
/* 银行图片logo */
.bankImg{margin-left: 0.5rem;margin-top: 0.35rem;float:left;height: 1rem;}

/* 绑卡界面样式 */
.fl{float:left}
.fr{float:right}
.clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}
.dsn{display:none!important}
.dsb{display:block!important}
.bindbankcard .container{background: #fff;padding-left: 0.5rem;}
.bindbankcard .container .td{text-align: left;padding-left: 0.5rem;}
table{width: 100%;border-collapse:collapse; table-layout:fixed}
table tr .tdLeft{width: 30%;text-align: left;font-size: 1rem;font-size: 0.38rem;color:#000}
table tr .tdRight{width: 70% ; font-size: 0.38rem;}
table tr td{border-bottom: 1px solid #eee;height: 1.5rem;  text-align: left;}
table tr td input{height: 0.9rem;outline: none;border: none;font-size: 0.38rem;width: 85%;}
.bindbtn{height: 1.1rem;line-height: 1.1rem;width: 92%;color: #fff;background: #ff7bac;border: none;font-size: 0.5rem;border-radius: 0.1rem;}
.btn{text-align: center;margin-top: 1rem;background: #eee;}
 #app{position: absolute;height: 100%;width: 100%;background: #eee;}
.header{height: 1.3rem;line-height: 1.3rem;margin-bottom: 0.3rem;background: #fff;margin-top: 0.2rem;padding-left: 0.6rem;}
.header p span{display: block;}
 #app .copyAlert{text-align: center;font-size: 0.4rem;height: 100%;  width: 100%;background: rgba(0, 0, 0, 0.3);position: absolute;top: 0;z-index: 5;}
.copyAlert .title{height: 1rem;background: #ff7bac;line-height: 1rem;color: #fff;font-size: 0.4rem;}
.copyAlert .title span{color: #fff;}
.copyAlert .centen{background: #fff;position: relative;top: -1rem;border-radius: 0.1rem;}
.copyAlert .centen .ShowBtnGoGame{position: relative;bottom: 0;width: 100%;font-size: 0;height: 1.5rem;}
.copyAlert .centen .ShowBtnGoGame button{width: 37%;border-radius: 0;height: 1rem;margin: 0.2rem;border-radius: 0.1rem;border: 0.05rem solid #ff7bac;background: #fff;}
.copyAlert .container{width: 6rem;margin: 77% auto;}
.titleText{color:#000;height: 2rem;line-height: 2rem;width: 5rem;margin: 0 auto;height: 3rem;line-height: 3rem;}
.ShowBtn{position: absolute;bottom: 0.3rem;width: 100%;font-size: 0;}
.goback{height: 1rem;line-height: 1rem;background: #fff;color: #ff7bac;margin-bottom: 0.15rem;padding-left: 0.3rem;}
.goback span{height: 1rem;line-height: 1rem;display: inline-block;}
.goback .iconfont{position: relative;top: 0.04rem;}
/* 提现样式结束 */
/* 导航条 */
.nav{height: 18vw; margin: 0 auto; width: 90%;background: #fff;border-radius: 2vw;position: relative;top: -2vw;}
.navlist{font-size: 2vw;float: left;  text-align: center; width:25%;height: 18vw;line-height: 18vw;}
.navlist .title{text-align: center; width:100%;height: 4vw;line-height: 4vw;}
.navlist i{text-align: center; width:10vw;height: 10vw;line-height: 10vw;display: block;margin: 0 auto;}
/* 导航条 */
/* 游戏列表,滑动导航条样式 */
.list_home{font-size: 0;background: #fff;margin-top: 0rem;}
.list_home .titlelist .active p{color:#FF0556;}
.list_home .titlelist .active{border-bottom: 0.5vw solid #ff0556;}
.list_home .titlelist,.result .titlelist{height: 10vw;overflow: -webkit-paged-x;font-size: 0;width: 100%;}
.list_home .titlelist ul,.result .titlelist ul{white-space: nowrap;overflow-x: auto;height: 0.8rem;}
.list_home .titlelist ul::-webkit-scrollbar ,.result .titlelist ul::-webkit-scrollbar{width:0; height:0;display: none;}
.list_home .titlelist ul li,.result .titlelist ul li{display: inline-block;width: 22vw;text-align: center;height:8vw;padding-top: 0rem;font-size: 0.3rem;color: #000;}
.list_home .titlelist ul li{border-bottom: 0.5vw solid #eee;margin: 0.1rem auto;}
.list_home .gamelist li{width: 25vw;height: 25vw;display: inline-block;margin: 3vw 3vw;text-align: center;background: #F4F4F4;border-radius: 2vw;}
.list_home .gamelist li img{width: 15vw;height: 15vw;margin-top: 3vw;}
.list_home .gamelist li span{width: 15vw;height: 4vw;display: inline-block;color: #000;font-size: 3vw;padding-top: 1vw;}
.list_home .gamelist{display: inline-block;text-align: center;}
.result .titlelist ul li{width: 55vw;height: 23vw;display: inline-block;padding-top:0;margin:3vw;background: linear-gradient(to top, #6887F9 , #A9BCFA);border-radius: 2vw;}
.result .titlelist ul li img{height:15vw;margin-top: 4vw;}
.result .titlelist ul{height:100%;display: block;}
.result .titlelist{height: 33vw;}
.result .titlelist .title{}
.result .info{color: #fff;width: 33vw;display: inline-block;float: left;padding-left: 2vw;padding-top: 2vw;}
.result .info p{white-space: normal;text-align: left;}
.result .title{font-size: 4vw;margin-left: 5vw;border-left: 1vw solid red;padding-left: 2vw;}
.result{margin-top: 1.5vw;background: #fff;padding-top: 1.5vw;padding-bottom: 1.5vw;margin-bottom: 12vw;}
.result .winInfo{width:30vw;}
/* 游戏列表,滑动导航条样式 */
</style>
