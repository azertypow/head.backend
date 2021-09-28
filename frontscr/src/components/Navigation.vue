<template>
  <div class="v-navigation">
    <router-link
        v-for="route of this.$router.getRoutes()"
        :to="route.path"
    >{{route.name}}</router-link>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'Navigation',
  components: {
  },
});
</script>

<style lang="scss" scoped>
.v-navigation {

}
</style>
