<template>
<div>
    <div class="bottomAd" v-for="(item, index) in bottomAd" :key="index">
        <a :href="item.url"  target="_blank" >
          <img :src="item.img_url"/>
        </a>
    </div>
    <div class="footer">
        <router-link to="/AV">
            <span class="iconfont icon-iconshipin"></span>
            AV
        </router-link>
        <router-link to='/Video'>
            <span class="iconfont icon-shipin"></span>
            视频
        </router-link>
        <router-link to='/tag'>
            <span class="iconfont icon-icon-"></span>
            分类
        </router-link>
        <router-link to='/Collect'>
            <span class="iconfont icon-shoucang2"></span>
            收藏
        </router-link>
        <router-link to='/user'>
            <span class="iconfont icon-wode"></span>
            我的
        </router-link>
    </div>
</div>
</template>

<script>
export default {
  data () {
    return {
      selected: '/',
      bottomAd:[]
    }
  },
  watch: {
    selected (newVal) {
      this.$router.push(newVal)
    }
  },
  created () {
      this.getbottomAd()
  },
  methods:{
    //底部插入广告
    getbottomAd(){
      this.$http.get('/api/advert/list',{cate_code:'AppFooter'}).then(res => {
        if (res.status === 0) {
          this.bottomAd = res.data
        }
      })
    },
  }
}
</script>

<style lang="scss" scoped>

.footer {
  display: flex;
  display: -webkit-flex;
  flex-wrap: nowrap;
  width: 100%;
  height: 1rem;
  background: #fff;
  box-shadow: 0 -1px 1px #ccc;
  position: fixed;
  bottom: 0;
  left: 0;
  z-index:10;
  a {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    font-size: 0.2rem;
    justify-content: center;
    align-items: center;
    span {
        font-size: 0.5rem;
    }
    &.active {
      color: #FE7A94;
    }
  }
}
</style>
