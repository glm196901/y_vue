/**
 * autor: Snake 2018.9.1
 * @ http请求
 */
import axios from 'axios'
import {Message} from 'element-ui'
import qs from 'qs'
var config;
var originUrl=window.location.origin;
//测试环境
if(originUrl=="http://dist.6fg645fsd.com"||
    originUrl=='http://localhost:8080'||
    originUrl=='http://localhost:8081'||
    originUrl=='http://192.168.1.103:8080'||
    originUrl=='http://192.168.1.105:8080'||
    originUrl=='http://192.168.1.107:8080'||
    originUrl=='http://192.168.1.109:8080'||
    originUrl=='http://192.168.1.102:8080'||
    originUrl=='http://v.me'
    ){

   config = {
    // baseURL: 'https://webvideo.6fg645fsd.com',
    baseURL: 'http://video-api.psxgtj.com',
    timeout: 30000
  }
}
if(originUrl=="https://dist.6fg645fsd.com"){
   config = {
    baseURL: 'https://webvideo.6fg645fsd.com',
    timeout: 30000
  }
}
//线上环境
if(originUrl=="http://dist.psxgtj.com"){
   config = {
    baseURL: 'http://video-api.psxgtj.com',
    timeout: 30000
  }
}
if(originUrl=="https://dist.psxgtj.com"){
   config = {
    baseURL: 'https://video-api.psxgtj.com',
    timeout: 30000
  }
}
if(originUrl=="http://dist.xxxdnm.com"){
   config = {
    baseURL: 'http://video-api.xxxdnm.com',
    timeout: 30000
  }
}
if(originUrl=="https://dist.xxxdnm.com"){
   config = {
    baseURL: 'https://video-api.xxxdnm.com',
    timeout: 30000
  }
}
if(originUrl=="https://dist.bjs99.com"){
   config = {
    baseURL: 'https://video-api.bjs99.com',
    timeout: 30000
  }
}
let cancel
var apiToken
const promiseArr = {}
if (sessionStorage.getItem('userdata')) {
  apiToken = JSON.parse(sessionStorage.getItem('userdata')).api_token
}

axios.defaults.baseURL = config.baseURL
axios.defaults.timeout = config.timeout
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded'
axios.defaults.headers.post['X-Requested-With'] = 'XMLHttpRequest'
if (apiToken) {
  axios.defaults.headers.api_token = apiToken
}
// axios.defaults.headers['Access-Control-Allow-Origin'] = '*'

// 请求拦截器
axios.interceptors.request.use(config => {
  // 发起请求时，取消掉当前正在进行的相同请求
  if (promiseArr[config.url]) {
    promiseArr[config.url]('操作取消')
    promiseArr[config.url] = cancel
  } else {
    promiseArr[config.url] = cancel
  }
  return config
}, error => {
  return Promise.reject(error)
})

// 响应拦截器
axios.interceptors.response.use(response => {
  // Access-Control-Allow-Origin:*
  if (response.data.islogin === 0 || response.data.message === '请先登录') {
    window.sessionStorage.removeItem('userdata')
    Message({
      type: 'error',
      message: '请先登录'
    })
  }
  return response
}, error => {
  return Promise.resolve(error.response)
})

const http = {
  get: '',
  post: ''
}

// get请求
http.get = (api = '', data = {}) => {
  let params = data // qs.stringify(data)
  return new Promise((resolve, reject) => {
    axios.get(api, {
      params
    }).then(res => {
      resolve(res.data)
    }).catch(res => {
      reject(res)
    })
  })
}

// post请求
http.post = (api = '', data = {}) => {
  let params = qs.stringify(data)
  return new Promise((resolve, reject) => {
    axios.post(api, params).then(res => {
      resolve(res.data)
    }).catch(res => {
      reject(res)
    })
  })
}

const install = Vue => {
  Vue.prototype.$http = http
  Vue.prototype.$MyConfig = config
}

export default {
  install
}
