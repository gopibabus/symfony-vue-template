<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">This is from <span class="text-danger">Vue</span> Component</h1>
        <p class="lead">This is part of <strong class="text-primary">{{ message }}</strong></p>
        <ImageComponent :source="imageUrl"/>
      </div>
    </div>
  </div>
</template>
<script>
import ImageComponent from "./partials/ImageComponent";

export default {
  name: "App",
  props: ["message"],
  components: {
    ImageComponent
  },
  data() {
    return {imageUrl: "https://source.unsplash.com/random"}
  },
  mounted(){
    console.info(this.message);
  }
}

</script>

<style scoped>

</style>