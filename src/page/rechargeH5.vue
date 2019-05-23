<template>
  <div class="rechargeH5">
    <HeaderBar/>
    
    <Footer/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'//头部
import Footer from '@/components/Footer.vue'//脚部
export default {
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
.rechargeH5{background: #F7F7F7}
</style>
