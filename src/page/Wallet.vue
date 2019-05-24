<template>
  <div class="Wallet">
    <HeaderBar/>

    <Footer/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'//头部
import Footer from '@/components/Footer.vue'//脚部

export default {//钱包页
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
.Wallet{background: #F7F7F7}
</style>
