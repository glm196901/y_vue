<template>
  <div class="list">
    <div class="titlelist">
      <ul>
        <li @click="channel(item,index)" v-for="(item,index) in titlelist">
          <p :class="{active:index==num}" v-text="item.name"></p>
          <p class="border_b" v-if="index==num"></p>
        </li>
      </ul>
    </div>
		<ul class="gamelist">
			<li v-for="(item,index) in gamelist" @click="gotogame(item,index)"  >
				<img :src="item.img_src" alt="">
			</li>
		</ul>
	</div>
</template>
<script>
export default {
  name: 'GameList',
  data () {
    return {
      gamelist:[
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
        {name:"斗地主",img_src:"/img/1.png"},
      ],
      titlelist:[
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
        {name:"斗地主"},
      ],
      num:0,
    }
  },
  methods:{
    channel(item,index){
      this.num=index
    },
    gotogame(item,index){

    },
  },
  created () {
  },
}
</script>
<style lang="scss" scoped>
/* .list{height: 4%; margin: 0 auto; width: 100%} */
/* .GameUl{overflow-x: scroll;height: 4%; } */
/* .GameItem{font-size: 2vw;float: left; padding: 2% 5%; } */

</style>
