<template>
  <div class="home">
    <HeaderBar/>
  </div>
</template>
<script>
import HeaderBar from '@/components/HeaderBar.vue'
export default {
  name: 'Home',
  data () {
    return {
      msg: ''
    }
  },
  components:{
    HeaderBar,
  }
}
</script>
<style lang="scss" scoped>
  .home{

  }
</style>
