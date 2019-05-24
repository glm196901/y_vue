<template>
  <div class="withdraw">
    <HeaderBar/>

    <Footer/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'//头部
import Footer from '@/components/Footer.vue'//脚部

export default {//提现
  name: 'Home',
  data () {
    return {

    }
  },
  components:{
    HeaderBar,
    Footer,
  }
}
</script>
<style lang="scss" scoped>
.withdraw{background: #F7F7F7}
</style>
