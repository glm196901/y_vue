<template>
  <div class="JumpArea">
    <ul >
      <li v-for="(item, index) in JumpArea" :key="index" class="jumpList">
        <i v-text="item.icon" ></i>
        <div v-text="item.title"></div>        
      </li>
    </ul>
    <!-- <TopUp></TopUp>
    <Transfer></Transfer>
    <FreeGame></FreeGame>
    <WithDraw></WithDraw>   -->
  </div>
</template>

<script>
import TopUp from './TopUp.vue'
import WithDraw from './WithDraw.vue'
import Transfer from './Transfer.vue'
import FreeGame from './FreeGame.vue'

export default {
  name: 'Home',
  data () {
    return {
      JumpArea:[
        {icon:"",title:"充值"},
        {icon:"",title:"提现"},
        {icon:"",title:"转换"},
        {icon:"",title:"免费试玩"},
      ]
    }
  },
  components:{
    TopUp,  
    WithDraw,
    Transfer,
    FreeGame
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.JumpArea{height: 8%; margin: 0 auto; width: 90%}
.jumpList{font-size: 2vw;float: left;  text-align: center; padding: 8% 8% }
</style>
