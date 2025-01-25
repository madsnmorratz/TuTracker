<template>
    <div class="transport-units">
      <h1 class="text-xl font-bold mb-4">Here is a list of all your trucks</h1>
      <ul>
        <li v-for="unit in transportUnits" :key="unit.id" class="mb-2">
           {{unit.id}}.   {{ unit.name }} Type is: {{ unit.datatype }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        transportUnits: [],
      };
    },
    mounted() {
      // Fetch data from the Laravel API
      axios.get('/api/transport-units-truck')
        .then(response => {
          this.transportUnits = response.data;
        })
        .catch(error => {
          console.error('Error fetching transport units:', error);
        });
    },
  };
  </script>
  
  <style>
  /* Optional styling */
  .transport-units {
    padding: 1rem;
  }
  </style>
  