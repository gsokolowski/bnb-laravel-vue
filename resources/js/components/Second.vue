<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Second Component</div>

          <div class="card-body">I'm an second component.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// business logic of this componnet
// here goes the Business logic of this component
// mounted as a Life circel event
// and is fired always when this component is rendered
// this Component needs to be imported into routes file
export default {
  mounted() {
    console.log("Component Second mounted.");
  }
};
</script>

<style scoped>

</style>
