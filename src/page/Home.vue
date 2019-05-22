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
import JumpArea from '@/components/JumpArea.vue'
import ShowInfoBar from '@/components/ShowInfoBar.vue'
import WinInfo from '@/components/WinInfo.vue'
import GameList from '@/components/GameList.vue'//
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
  }
}
</script>
<style lang="scss" scoped>
.Home{background: #F7F7F7}
</style>
