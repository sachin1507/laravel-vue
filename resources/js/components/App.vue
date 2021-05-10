<template>
<div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <router-link :to="{name: 'home'}" class="navbar-brand">Clause Matics</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link"><router-link :to="{name: 'home'}" class="navbar-brand">Home</router-link></li>
                    <li class="nav-link"><router-link :to="{name: 'privacy-policy'}" class="navbar-brand">Privacy Policy</router-link></li>
                    <!--UNLOGGED-->
                    <li class="nav-link hide" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                        <router-link  :to="{ name : route.path }" :key="key" class="navbar-brand">
                            {{route.name}}
                        </router-link>
                    </li>
                    <!--LOGGED USER-->
                    <li class="nav-link hide" v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
                        <router-link  :to="{ name : route.path }" :key="key" class="navbar-brand">
                            {{route.name}}
                        </router-link>
                    </li>
                    <!--LOGGED ADMIN-->
                    <li class="nav-link hide" v-if="$auth.check(2)" v-for="(route, key) in routes.admin" v-bind:key="route.path">
                        <router-link  :to="{ name : route.path }" :key="key" class="navbar-brand">
                            {{route.name}}
                        </router-link>
                    </li>
                    <!--LOGOUT-->
                    <li class="nav-link" v-if="$auth.check()">
                        <a href="#" @click.prevent="$auth.logout()" class="navbar-brand">Logout</a>
                    </li>    
                </ul>
            </div>
        </div>
    </nav>
    <main class="">  
        <router-view></router-view>
    </main>
</div>
</template>
<script>
  export default {
    data() {
      return {
        routes: {
          // UNLOGGED
          unlogged: [
            {
              name: 'Register',
              path: 'register'
            },
            {
              name: 'Login',
              path: 'login'
            }
          ],
          // LOGGED USER
          user: [
            {
              name: 'Dashboard',
              path: 'dashboard'
            }
          ],
          // LOGGED ADMIN
          admin: [
            {
              name: 'Dashboard',
              path: 'admin.dashboard'
            }
          ]
        }
      }
    },
    mounted() {
      //
    }
  }
</script>