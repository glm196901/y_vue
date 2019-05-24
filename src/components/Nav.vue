<template>
  <div class="nav">
    <ul >
      <li v-for="(item, index) in navlist" :key="index" class="navlist">
        <i :class="item.icon" ></i>
        <p v-text="item.title" class="title"></p>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'Home',
  data () {
    return {
      navlist:[
        {icon:"iconfont icon-chongzhi",title:"充值"},
        {icon:"iconfont icon-tixian",title:"提现"},
        {icon:"iconfont icon-zhuanhuan",title:"转换"},
        {icon:"iconfont icon-youxi2",title:"免费试玩"},
      ]
    }
  },
  components:{

  }
}
</script>
<style lang="scss" scoped>
.nav{margin-top: -1vw}
</style>
