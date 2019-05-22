/**
 * autor: guo 2019.5.22
 * @ http请求
 */
const http={
  network(api, data, fun) { // 公用请求-------------------------------------------------------------------------------------------
    let origin = window.location.origin;
        origin ="http://testgame.vbo0.com/"
    let url = origin + api
    let api_token = "f6bce6f3a8373adfec45263ac573776a"
    if (!data) {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", url);
      xhr.responseType = 'json';
      xhr.setRequestHeader('api_token', api_token);
      xhr.onload = function() {fun(xhr.response)};
      xhr.onerror = function() {console.log("error");};
      xhr.send();
    } else {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", url);
      xhr.responseType = 'json';
      xhr.setRequestHeader('api_token', api_token);
      xhr.onload = function() {fun(xhr.response)};
      xhr.onerror = function() {console.log("error")};
      xhr.send(JSON.stringify(data)); //需要先转成字符串再发送
    }
  },
}
const install = Vue => {
  Vue.prototype.$http = http
  Vue.prototype.$MyConfig = http
}

export default {
  install
}
