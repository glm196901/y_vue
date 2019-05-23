<template>
  <div class="Bar">
       <div class='icon'>
         <i class="iconfont icon-notice"></i>
       </div>
       <marquee  data-behavior="scroll" data-direction="left" data-width='100%' data-scrollamount='40'>{{msg}}</marquee>
     </div>
  </div>
</template>

<script>
export default {//滚动条
  name: 'ShowInfoBar',
  data () {
    return {
      msg:'本平台禁止七码及七码以上的无风险投注，禁止利用平台进行套利、套现、对打等违规行为，风控系统如检测到玩家有违规行为，将会对该账号进行封号处理，请遵守“幸运彩票”游戏规则，幸运彩票祝您游戏愉快，盈利多多！！！'
    }
  }
}
</script>
<style lang="scss" scoped>
.ShowInfoBar{margin: 0 auto; width: 90%; height: 6vw; background: #fff; border-radius: 5vw; position: relative; top: -3vw;z-index: 1; }
.Bar{
    margin: 0 auto;
    width: 90%;
    background-color: #fff;
    color: #000;
    border-radius: 5vw;
    height: 6vw;
  .icon{
    width: 7vw;
    height: 7vw;
    display: inline-block;
    float: left;
    line-height: 7vw;
    text-align: center;
    .iconfont{
        display: block;
        font-size: 4vw;
      }
  }
  marquee{
    height: 7vw;
    line-height: 7vw;
    width: 90%;
float: right;
font-size:3vw;
margin-right: 2vw;
  }
}
</style>
