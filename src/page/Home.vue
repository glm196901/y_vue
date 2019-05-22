<template>
  <div class="Home">
    <HeaderBar/>
    <Banner></Banner>
    <ShowInfoBar></ShowInfoBar>
    <JumpArea></JumpArea>
    <GameList></GameList>
    <WinInfo></WinInfo>
    <Footer/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'//头部
import Footer from '@/components/Footer.vue'//脚部
import Banner from '@/components/Banner.vue'//轮播图
import JumpArea from '@/components/JumpArea.vue'//导航
import ShowInfoBar from '@/components/ShowInfoBar.vue'//滚动条
import WinInfo from '@/components/WinInfo.vue'//中奖信息
import GameList from '@/components/GameList.vue'//游戏列表
export default {
  name: 'Home',
  data () {
    return {

    }
  },
  components:{
    Banner,
    ShowInfoBar,
    JumpArea,
    WinInfo,
    GameList,
    HeaderBar,
    Footer,
  }
}
</script>
<style lang="scss" scoped>
.Home{background: #F7F7F7}
</style>
