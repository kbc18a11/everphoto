<template>
  <div class="app">
    <NavBer></NavBer>

    <router-view />
  </div>
</template>

<script>
import NavBer from './components/navber.vue'

export default {


    components:{
        NavBer,
    },

  mounted() {
    console.log('Component mounted.');
  }
};
</script>
