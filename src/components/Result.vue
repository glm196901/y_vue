<template>
  <div class="result">
    <div class="winInfo">
      <div class="redBar"></div>
      <div class="title">中奖信息</div>
    </div>
    <div class="titlelist">
      <ul>
        <li @click="gotogame(item,index)" v-for="(item,index) in list">
          <div class="info">
            <p><span v-text="item.name" class="span"></span></p>
            <p><span class="money" v-text="'喜中'+item.money"></span></p>
          </div>
          <img src="" alt="">
        </li>
      </ul>
    </div>
	</div>
</template>
<script>
export default {
  name: 'GameList',
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
    }
  },
  methods:{
    gotogame(){

    },
  },
  created () {
  },
}
</script>
<style lang="scss" scoped>
.result{height: 60vw;
    margin-top: 1.5vw;
    background: #fff;
    padding-top: 4.5vw;
    padding-bottom: 1.5vw;
    
    }
.winInfo{width:30vw;}    
.redBar{width:1.5vw;height: 8vw;background: red; margin-left: 5vw;float: left;}
.title{ font-size: 4vw;margin-left: 10vw;}
.titlelist{margin-left: 2vw}
</style>
