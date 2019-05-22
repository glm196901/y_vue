<template>
  <div class="ShowInfoBar">

  </div>
</template>

<script>
export default {//滚动条
  name: 'ShowInfoBar',
  data () {
    return {
      msg: ''
    }
  }
}
</script>
<style scoped>
.ShowInfoBar{margin: 0 auto; width: 90%; height: 6vw; background: #fff; border-radius: 5vw; position: relative; top: -3vw;z-index: 1; }
</style>
