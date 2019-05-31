<template>
  <div class="Home">
    <div class="header-bar">
      <span class="left-btn iconfont icon-jiantou"></span>
      <div class="title">趣玩娱乐</div>
      <div class="right-btn">
        <slot></slot>
      </div>
    </div>
    <div class="Banner">
    <Swiper v-if="Swiperlist.length > 0" :interval="5000" class="Swiper" :showIndicator="false">
         <Slide v-for="item in Swiperlist">
           <img :src="item.imgsrc" alt="">
         </Slide>
    </Swiper>
    </div>
    <Bar/>
    <Nav/>
    <GameList></GameList>
    <div class="result">
      <div class="winInfo">
        <!-- <div class="redBar"></div> -->
        <div class="title">中奖信息</div>
      </div>
      <div class="titlelist">
        <ul>
          <li @click="gotogame(item,index)" v-for="(item,index) in list">
            <div class="info">
              <p><span v-text="item.name" class="span"></span></p>
              <p><span class="money" v-text="'喜中'+item.money"></span></p>
            </div>
            <img :src="item.img_src" alt="">
          </li>
        </ul>
      </div>
  	</div>
    <div class="footer">
        <router-link to="/AV">
            <span class="iconfont icon-youxi1"></span>
            游戏
        </router-link>
        <router-link to='/Video'>
            <span class="iconfont icon-shipin"></span>
            视频
        </router-link>
        <router-link to='/user'>
            <span class="iconfont icon-wode"></span>
            我的
        </router-link>
    </div>
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
      list:[
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
        {name:"玩家kt小妮妮在开元斗地主",img_src:"/img/ddz.png",money:9999,},
      ],
        Swiperlist:[{imgsrc:"/img/1.png"},{imgsrc:"/img/2.png"},{imgsrc:"/img/3.png"},{imgsrc:"/img/4.png"}]
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
