<template>
  <div class="Banner">

  <Swiper v-if="list.length > 0" :interval="5000" class="Swiper" :showIndicator="false">
       <Slide v-for="(item,index) in list" :key="index" v-text="item.index">
       </Slide>
  </Swiper>


  </div>
</template>




<script>
import { Swiper, Slide } from 'vue-swiper-component';


export default {
  name: 'Banner',
  data () {
    return {
      msg: 'its banner',
      list:[{index:1},{index:2},{index:3},{index:4},{index:5}]
    }
  },
  components:{
    Swiper,
    Slide
  },

  mounted(){

  },

}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->


<style scoped>
.Swiper{height:55vw;background:yellow}
.wh_slide{height:55vw}


</style>
