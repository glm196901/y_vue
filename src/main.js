import Vue from 'vue'
import App from './App'
import router from './router'
import VueLazyload from 'vue-lazyload'
import elementUi from 'element-ui'
import http from './utils/http.js'
import './utils/rem.js'
Vue.use(VueLazyload, {
  error:'/default1.jpg',
  throttleWait: 100,
  loading: '/default1.jpg',
  listenEvents: ['scroll', 'touchmove']
})
Vue.config.productionTip = false
Vue.use(elementUi)
Vue.use(http)
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
