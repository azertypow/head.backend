<template>
  <div class="v-students">

    <div class="v-students__resources-items">
      <resources-item
          v-if="studentsItems"
          v-for="item of studentsItems"
          :data="item"
      />
    </div>

  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import ResourcesItem from "@/components/ResourcesItem.vue"
import {IResourcesItem, IState, IStudents, useStore} from "@/store"

export default defineComponent({
  name: 'Students',


  data() {
    return {
      store: useStore()
    }
  },

  mounted() {

    console.log( "students: ", this.store.state.students )

  },

  computed: {
    studentsItems(): IResourcesItem | null {
      return this.store.state.students?.items || null
    }
  },

  components: {
    ResourcesItem
  },
});
</script>

<style lang="scss" scoped>

@import "../style/main";

.v-students {

}

.v-students__resources-items {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
  box-sizing: border-box;
  padding: $padding;

  > * {
    margin: $padding;
  }
}

</style>
