<template>
  <div>
    <toolbar></toolbar>
    <!-- <access></access> -->
    <router-view></router-view>
    <app-footer></app-footer>
  </div>
</template>

<script>
import toolbar from './Toolbar'
import AppFooter from './AppFooter'
import Login from './login/Login'
import access from './access'

export default {
    components: {toolbar, AppFooter, Login, access}
}
</script>

<style>
  
</style>