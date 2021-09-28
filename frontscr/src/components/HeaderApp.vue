<template>
  <div class="v-header-app">

    <router-link
        to="/"
    >
      {{title}}
    </router-link>

    <div>
      projects
      <div>
        <navigation></navigation>
      </div>
    </div>

    <div>
      about
    </div>

  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Navigation from "./Navigation.vue"
import {ISite, IState, useStore} from "../store"

export default defineComponent({
  name: 'HeaderApp',
  components: {
    Navigation
  },

  data() {
    return {
      store: useStore()
    }
  },

  computed: {
    title(): string {
      return this.store.state.site?.title || ""
    }
  }

});
</script>

<style lang="scss" scoped>
.v-header-app {

}
</style>
