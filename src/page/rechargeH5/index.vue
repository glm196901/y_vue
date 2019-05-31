<template>
  <div class="rechargeH5">
    <HeaderR/>
    <ListR/>
  </div>
</template>
<script>
import HeaderR from '@/page/rechargeH5/HeaderR.vue'//头部
import ListR from '@/page/rechargeH5/ListR.vue'//脚部
export default {
  data () {
    return {

    }
  },
  components:{
    HeaderR,
    ListR,
  },
  methods:{

  },
  created () {
    console.log(this)
  }
}
</script>
<style lang="scss" scoped>
.rechargeH5{background: #F7F7F7}
</style>
