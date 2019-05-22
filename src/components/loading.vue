<template>
<div class="loading" @click="goup">
  <div class="img">
    <img src="/loading3.gif" alt="">
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  methods: {
    goup() {},
  },
  created() {
    // this.goup()
  },
}
</script>

<style lang="scss" scoped>
.loading {
    position: fixed;
    z-index: 20;
    // background-color: rgba(255, 255, 255, 0.9);
    margin: 0;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.loading .img {
    position: absolute;
    text-align: center;
    top: 70%;
    left: 43%;
}
.loading .img img {
    height: 1rem;
}
</style>
