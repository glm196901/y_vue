<template>
  <div class="list_home">
    <div class="titlelist">
      <ul>
        <li @click="channel(item,index)" v-for="(item,index) in titlelist" :class="{active:index==num}">
          <p v-text="item.name"></p>
        </li>
      </ul>
    </div>
		<ul class="gamelist">
			<li v-for="(item,index) in gamelist" @click="gotogame(item,index)"  >
				<img :src="item.img_src" alt="">
        <span v-text="item.name"></span>
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
        {name:"斗地主",img_src:"/img/ddz.png"},
        {name:"斗地主",img_src:"/img/ddz.png"},
        {name:"斗地主",img_src:"/img/ddz.png"},
        {name:"斗地主",img_src:"/img/ddz.png"},
        {name:"斗地主",img_src:"/img/ddz.png"},
        {name:"斗地主",img_src:"/img/ddz.png"},
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
