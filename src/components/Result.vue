<template>
  <div class="result">
    <div class="titlelist">
      <p>
        <span class="title">中奖信息</span>
      </p>
      <ul>
        <li @click="gotogame(item,index)" v-for="(item,index) in list">
          <p class="info" v-text="item.name"></p>
          <p class="money"></p>
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
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
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
