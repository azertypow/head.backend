<template>
  <div class="v-home">

    <div class="v-home__resources-items">
      <resources-item
          v-if="students"
          v-for="item of students.items"
          :data="item"
      />
    </div>

  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import ResourcesItem from "@/components/ResourcesItem.vue"
import {IStoreState, IStudents} from "@/store"

export default defineComponent({
  name: 'Home',

  data() {
    return {
      // @ts-ignore
      // students: (this.$store.state as IStoreState).students
    }
  },

  computed: {
    students(): IStudents {
      // @ts-ignore
      return (this.$store.state as IStoreState).students
    }
  },

  components: {
    ResourcesItem
  },
});
</script>

<style lang="scss" scoped>
@import "../style/main";

.v-home {

}

.v-home__resources-items {
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
