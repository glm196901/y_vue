<template>
  <div class="GameList">
    <ul class="GameUl">
      <li v-for="(item, index) in navigationBar" :key="index" class="GameItem">
        <i v-text="item.gameItem" ></i>
        <div></div>        
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'GameList',
  data () {
    return {
      navigationBar:[
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        },
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        },
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        },        
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        }, 
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        },  
        {gameItem:"斗地主",
          content:[ {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                  {gameIcon:"",gameName:"开元斗地主"},
                ] 
        },                            
      ],

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.GameList{height: 4%; margin: 0 auto; width: 100%}
.GameUl{overflow-x: scroll;height: 4%; }
.GameItem{font-size: 2vw;float: left; padding: 2% 5%; }
</style>
