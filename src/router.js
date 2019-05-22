import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/page/Home.vue'


Vue.use(Router)
const router = new Router({

  mode: 'history',
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    }]
})
export default router
