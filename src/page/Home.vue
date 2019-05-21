<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <Banner></Banner>  
    <ShowInfoBar></ShowInfoBar>   
  </div>
</template>

<script>
import Banner from './Banner/Banner.vue'
import ShowInfoBar from './ShowInfoBar/ShowInfoBar.vue'

export default {
  name: 'Home',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  components:{
    Banner,
    ShowInfoBar
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
