<template>
  <div class="JumpArea">
    <ul >
      <li v-for="(item, index) in JumpArea" :key="index" class="jumpList">
        <i v-text="item.icon" ></i>
        <div v-text="item.title"></div>
      </li>
    </ul>
  </div>
</template>
<script>
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

  }
}
</script>
<style scoped>
.JumpArea{height: 8%; margin: 0 auto; width: 90%}
.jumpList{font-size: 2vw;float: left;  text-align: center; padding: 8% 8% }
</style>
