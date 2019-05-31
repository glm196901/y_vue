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

/* 充值页样式结束 */

/* 导航条 */
.nav{height: 18vw; margin: 0 auto; width: 90%;background: #fff;border-radius: 2vw;position: relative;top: -2vw;}
.navlist{font-size: 2vw;float: left;  text-align: center; width:25%;height: 18vw;line-height: 18vw;}
.navlist .title{text-align: center; width:100%;height: 4vw;line-height: 4vw;}
.navlist i{text-align: center; width:10vw;height: 10vw;line-height: 10vw;display: block;margin: 0 auto;}
.navlist a{display: block;}
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
.Banner{margin-top: 11vw;}
</style>
