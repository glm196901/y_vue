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
			<li v-for="(item,index) in gamelist" @click="item(item,index)"  >
				<img src="" alt="">
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
    item(){},
  },
  created () {
  },
}
</script>
<style scoped>
.list{height: 4%; margin: 0 auto; width: 100%}
.GameUl{overflow-x: scroll;height: 4%; }
.GameItem{font-size: 2vw;float: left; padding: 2% 5%; }
.list .titlelist .active{color:#FF0556}
.list .titlelist{height: 1.2rem;overflow: -webkit-paged-x;font-size: 0;width: 100%;}
.list .titlelist ul{white-space: nowrap;overflow-x: auto;height: 0.8rem;display: block;}
.list .titlelist ul::-webkit-scrollbar { width:0; height:0; display: none; }
.list .titlelist ul li{display: inline-block;width: 22vw;text-align: center;height:12vw;padding-top: 0.2rem;font-size: 0.3rem;color: #000;}
.list .titlelist .border_b{border-bottom: 0.5vw solid #FF0556;margin: 0.1rem auto;}
.list .li li{width: 2rem;height: 1.2rem;position: relative;padding: 0.2rem;border-radius: 0.08rem;display: inline-block;font-size: 0.3rem;border: 0.02rem solid #efeeee;text-align: center;color: #000;margin: 0.2rem;}
.list .li .active{border: 0.02rem solid #FF7BAC;color:#FF7BAC;}
.list .li .active .price i,.list .li .active .price span{color:#000;}
</style>
