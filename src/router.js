import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/page/Home.vue'
import rechargeH5 from '@/page/rechargeH5.vue'
import Withdraw from '@/page/Withdraw.vue'
import Wallet from '@/page/Wallet.vue'
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
    },
    {
      path: '/Withdraw',
      name: 'Withdraw',
      component: Withdraw
    },{
      path: '/Wallet',
      name: 'Wallet',
      component: Wallet
    },]
})
export default router
