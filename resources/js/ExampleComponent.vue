<template>
  <div class="app container">
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
