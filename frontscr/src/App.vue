<template>
  <div class="v-app">
    <router-view></router-view>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'App',

  components: {
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
