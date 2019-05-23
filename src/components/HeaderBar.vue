<template>
  <div class="header-bar">
    <span class="left-btn iconfont icon-jiantou" @click="goBack"></span>
    <div class="title">趣玩娱乐</div>
    <div class="right-btn">
      <slot></slot>
    </div>
  </div>
</template>
<script>
// import Hub from '@/components/Hub.vue'
export default {
  props: {
    titler: {
      type: String
    }
  },
  data () {
    return {}
  },
  computed: {
    title () {
      return this.$route.meta.title || this.titler
    }
  },
  methods: {
    goBack () {
      // let  BScroll=this.$BScroll
      // // this.BScroll.refresh()
      // // BScroll.refresh()
      // Hub.$emit("xxx", 'ssss');
      // window.history.length > 1
      //   ? this.$router.go(-1)
      //   : this.$router.push('/')
    }
  }
}
</script>

<style lang="scss" scoped>
.header-bar{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height:11vw;
  line-height:11vw;
  text-align: center;
  font-size: 3vw;
  box-shadow: -1px 0px 1px #ccc;
  background: #000;
  z-index: 10;
  .iconfont.icon-jiantou {
    font-size: 0.3rem;
    transform: rotate(90deg);
  }
  .left-btn,.right-btn {
    position: absolute;
    top: 0;
  }
  .left-btn {
    left: 0;
    padding-left: 0.1rem;
  }
  .right-btn {
    right: 0;
    padding-right: 0.1rem;
  }
  .title{
    color:#fff;
  }
}
</style>
