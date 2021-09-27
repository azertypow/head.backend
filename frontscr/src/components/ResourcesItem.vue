<template>
  <a
      class="v-resources-item"
      :href="data.link"
      target="_blank"
  >
    <div class="v-resources-item__img" >
      <img
          v-for="image of data.images"
          :src="image.url">
    </div>

    <h2
        class="v-resources-item__title"
    >{{data.title}}</h2>

    <div
        class="v-resources-item__content"
        v-html="data['description en']"
    ></div>
  </a>
</template>

<script lang="ts">
import {defineComponent, PropType} from 'vue';
import {IResourcesItem} from "@/store"

export default defineComponent({
  name: 'ResourcesItem',

  props: {
    data: {
      required: true,
      type: Object as PropType<IResourcesItem>,
    },
  },

  components: {
  },
});
</script>

<style lang="scss" scoped>
@import "../style/main";

.v-resources-item {
  display: block;
  max-width: 500px;
  overflow: hidden;
  background: $site-background-color;
  color: $site-color;
  border: solid 1px rgba($site-color, 0.5);
  box-sizing: border-box;
  box-shadow: 0 10px 10px 5px rgba(0, 0, 0, 0.30);
  text-decoration: inherit;
}

.v-resources-item__img {
  position: relative;
  width: 100%;
  padding-top: 33.33333%;

  &:after {
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 33.33333%;
    background: linear-gradient(0deg, rgba($site-color--main, 0.33333), transparent);
  }

  img {
    position: absolute;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
  }
}

.v-resources-item__title {
  padding: $padding;
  margin: 0;
  color: $site-color--main;
}

.v-resources-item__content {
  padding: $padding;
}

</style>

<style lang="scss">
.v-resources-item__content {
  > *:first-child {
    margin-top: 0;
  }
}
</style>
