<template>
  <div id="app">
      <router-view></router-view>
  </div>
</template>

<script>
  export default {
    name: 'App'
  }
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.container {
  position: absolute;
  top: 0.2rem;
  bottom: 0.8rem;
  width: 100%;
  font-size: 0.2rem;
}
#app * {
  box-sizing: border-box;
}
.disabled {
  color: #aaa !important;
}
button {
  border: none;
  outline: none;
  cursor: pointer;
}
* {
  margin: 0;
  padding: 0;
  font-family: 微软雅黑;
}

a {
  text-decoration: none;
  cursor: pointer;
}

input {
  outline: none;
}

li {
  list-style: none;
}
/* CSS Document */
* {
  margin: 0;
  padding: 0;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-text-size-adjust: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-family: Arial, "微软雅黑";
}

img {
  border: none;
  max-width: 100%;
  vertical-align: middle;
}

body,
p,
form,
input,
button,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  padding: 0;
  list-style: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: 100%;
}

input,
textarea {
  -webkit-user-select: text;
  -ms-user-select: text;
  user-select: text;
  -webkit-appearance: none;
}

table {
  border-collapse: collapse;
}

input,
select,
textarea {
  outline: none;
  border: none;
  background: none;
}

a {
  outline: 0;
  cursor: pointer;
  color: #666;
}

a:link,
a:active {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a {
  text-decoration: none;
  -webkit-touch-callout: none;
}

em,
i {
  font-style: normal;
}

li,
ol {
  list-style: none;
}


.clearfix::after {
  clear: both;
  height: 0;
  font-size: 0;
  display: block;
  content: ' ';
}

.fl {
  float: left;
}

.fr {
  float: right;
}

body {
  margin: 0 auto;
  min-width: 320px;
  color: #666;
  background: #fff;
}

body>* {
  box-sizing: border-box;
}

/*单行文本溢出显示省略号*/
.text_splice {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

/*多行文本溢出显示省略号*/
.more_text_splice {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
}

.el-checkbox .el-checkbox__label{
  font-size: 0.3rem;
}
.el-loading-mask{background-color: rgba(255, 255, 255, 0.1);}
.el-loading-spinner{top:15%}
</style>
