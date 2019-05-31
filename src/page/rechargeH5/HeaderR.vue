<template>
  <div class="header_recharge">
    <p class="blacnce">当前账户余额</p>
    <p><span class="red">5000.00</span><span class="diamondtext">钻石</span><i>&nbsp;</i></p>
  </div>
</template>
<script>
export default {
  data () {
    return {

    }
  },
  components:{

  },
  methods: {
    foo(){

    }
  }
}
</script>
<style lang="scss" scoped>
.header_recharge{height:17vw;font-size:4vw;background: #fff;padding-left: 2vw;padding-top: 1.5vw;}
.header_recharge .red{font-size: 5vw;height: 7vw;line-height:7vw;color: #000;}
.header_recharge .blacnce{display: block;height:7vw;line-height:7vw;font-size: 4.5vw;color: #8F8F8F;}
.header_recharge .diamondtext{font-size: 3vw;color: #000;padding: 0 2vw;}
</style>
