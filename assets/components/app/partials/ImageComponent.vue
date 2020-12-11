<template>
  <div>
    <img alt="random image" :src="source" class="rounded mx-auto d-block"/>
  </div>
</template>

<script>
export default {
  name: "ImageComponent",
  props: ["source"]
}

</script>

<style scoped>
img {
width: 30%;
  height: 30%;
}
</style>