<template>
  <div class="Home">
    <Banner></Banner>  
    <ShowInfoBar></ShowInfoBar>
    <JumpArea></JumpArea> 
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
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.Home{background: #F7F7F7}
</style>
