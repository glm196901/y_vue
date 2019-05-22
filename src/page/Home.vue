<template>
  <div class="Home">
    <Banner></Banner>  
    <ShowInfoBar></ShowInfoBar>
    <JumpArea></JumpArea> 
    <GameList></GameList>
    <WinInfo></WinInfo>
  </div>
</template>
<script>
import Banner from './Banner/Banner.vue'
import JumpArea from './JumpArea/JumpArea.vue'
import ShowInfoBar from './ShowInfoBar/ShowInfoBar.vue'
import WinInfo from './WinInfo/WinInfo.vue'
import GameList from './GameList/GameList.vue'
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
  }
}
</script>
<style lang="scss" scoped>
.Home{background: #F7F7F7}
</style>
