<template>
  <div class="result">
    <div class="titlelist">
      <p>
        <span class="title">中奖信息</span>
      </p>
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

</style>
