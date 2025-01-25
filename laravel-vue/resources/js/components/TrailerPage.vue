<template>
  <div>
    <h2 class="text-xl font-bold mb-4">Trailers</h2>
  </div>
  <div class="list">
  <ul v-if="pagedTrailers.length">
    <li v-for="trailer in pagedTrailers" :key="trailer.id" class="mb-2">
      <strong>{{ trailer.id}}. {{ trailer.name }}</strong> is a {{trailer.datatype }} 
    </li>
  </ul>
  <p v-else>Loading trailers...</p>
</div>
  <div class="center space-x-2">
    <button
      @click="prevPage"
      :disabled="page === 1"
      class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:bg-gray-100"
    >
      Previous
    </button>
    <span>Page {{ page }} of {{ totalPages }}</span>
    <button
      @click="nextPage"
      :disabled="page === totalPages"
      class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:bg-gray-100"
    >
      Next
    </button>

    <!-- Pagination Controls -->
  </div>
</template>

<script>
export default {
  name: "TrailerList",
  data() {
    return {
      trailers: [], // All trailers
      page: 1, // Current page number
      limit: 30, // Items per page
    };
  },
  computed: {
    // Calculate the trailers to display on the current page
    pagedTrailers() {
      const start = (this.page - 1) * this.limit;
      const end = this.page * this.limit;
      return this.trailers.slice(start, end);
    },
    // Calculate total number of pages
    totalPages() {
      return Math.ceil(this.trailers.length / this.limit);
    },
  },
  created() {
    this.fetchTrailers();
  },
  methods: {
    async fetchTrailers() {
      try {
        const response = await fetch("/api/transport-units-trailer");
        const data = await response.json();
        this.trailers = data;
      } catch (error) {
        console.error("Error fetching trailers:", error);
      }
    },
    nextPage() {
      if (this.page < this.totalPages) {
        this.page++;
      }
    },
    prevPage() {
      if (this.page > 1) {
        this.page--;
      }
    },
  },
};
</script>

<style scoped>
.list{
  
  padding: 20px 0;
  margin-left: 20px;
  text-align: left;
}
.center{
  padding: 20px 0;
  text-align: center;
}
</style>
