<template>
    <div id="main">
        <header id="header">
            <h1>
                <router-link :to="{name: 'home'}">
                    Laravel Vue SPA
                </router-link>
            </h1>
            <nav-menu></nav-menu>
        </header>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
  import navigationMenu from './components/Menu.vue'
  export default {
    data() {
      return {
        //
      }
    },
    components: {
      'nav-menu' : navigationMenu
    }
  }
</script>