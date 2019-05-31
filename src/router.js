import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/page/Home.vue'
import rechargeH5 from '@/page/rechargeH5/index.vue'
// import Withdraw from '@/page/Withdraw.vue'
// import Wallet from '@/page/Wallet.vue'
Vue.use(Router)
const router = new Router({
  mode: 'history',
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },{
      path: '/rechargeH5',
      name: 'rechargeH5',
      component: rechargeH5
    }]
})
export default router
