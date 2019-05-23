<template>
  <div class="Home">
    <HeaderBar/>
    <Banner></Banner>
    <Bar/>
    <Nav/>
    <GameList></GameList>
    <Result/>
    <Footer/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'//头部
import Footer from '@/components/Footer.vue'//脚部
import Banner from '@/components/Banner.vue'//轮播图
import Nav from '@/components/Nav.vue'//导航
import Bar from '@/components/Bar.vue'//滚动条
import Result from '@/components/Result.vue'//中奖信息
import GameList from '@/components/GameList.vue'//游戏列表
export default {
  name: 'Home',
  data () {
    return {

    }
  },
  components:{
    Banner,
    Bar,
    Nav,
    Result,
    GameList,
    HeaderBar,
    Footer,
  }
}
</script>
<style lang="scss" scoped>
.Home{background: #F7F7F7}
</style>
