<template>
  <div class="v-app">
    <header-app></header-app>
    <router-view></router-view>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import HeaderApp from "@/components/HeaderApp.vue"

export default defineComponent({
  name: 'App',

  components: {
    HeaderApp,
  },
});
</script>

<style lang="scss" scoped>
@import "style/main";

.v-app {
  overflow: hidden;
  background: $site-background-color;
  min-height: 100vh;
}
</style>
