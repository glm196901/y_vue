import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/page/Home.vue'
import Banner from '@/page/Banner/Banner.vue'
import ShowInfoBar from '@/page/ShowInfoBar/ShowInfoBar.vue'

Vue.use(Router)
const router = new Router({
  
  mode: 'history',
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/',
      name: 'Banner',
      component: Banner
    },
    {
      path: '/',
      name: 'ShowInfoBar',
      component: ShowInfoBar
    }
    ]
})
export default router
