<template>
    <h1>Welcome to Laravel with Vue JS!</h1>
    <nav>
        <router-link class="nav-link" to="/">Home</router-link>
        <router-link class="nav-link" to="/example">Example</router-link>

    </nav>

    <router-view/>
  </template>
  <script>
  export default {
    name: 'Home',
  };
  </script>
  <style scoped>
  h1 {
    color: #42b983;
    text-align: center;
  }
  .nav-link{
    margin: 5px;
  }
  </style>