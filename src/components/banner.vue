<template>
  <div class="Banner">
  <Swiper v-if="list.length > 0" :interval="5000" class="Swiper" :showIndicator="false">
       <Slide v-for="item in list">
         <img :src="item.imgsrc" alt="">
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
      list:[{imgsrc:"/img/1.png"},{imgsrc:"/img/2.png"},{imgsrc:"/img/3.png"},{imgsrc:"/img/4.png"}]
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
<style lang="scss" scoped>
.Banner{margin-top: 11vw;}
</style>
