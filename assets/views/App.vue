<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">This is from <span class="text-danger">Vue</span> Component</h1>
        <p class="lead">This is part of <strong class="text-primary">{{ message }}</strong></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  props: ["message"],
  mounted(){
    console.info(this.message);
  }
}

</script>

<style scoped>

</style>