<template>
  <div class="justify-content m-3">
    <h2 class="text-xl font-bold">List of Trailers</h2>
    <div class="mt-2">
     <input v-model="searchTerm" placeholder=" Search for trailer name" @input="filterUnits" style="border:1px solid black; border-radius: 2px;" />
    </div>
  </div>
  <div style="margin-left: 20px; display:inline-block">
    <ul class="divide-y border-gray-900" v-if="pagedTrailers.length">
      <li v-for="trailer in pagedTrailers" :key="trailer.id" class="flex justify-between gap-x-2 py-2 width 50%" >
        <div class="flex min-w-0 gap-x-4">
          <p class="text-sm/6 font-semibold text-gray-900">{{ trailer.id }}.</p>
          <div class=" flex-auto">
            <p class="text-sm/6 font-semibold text-gray-900">{{ trailer.name }}</p>
            <p class="text-sm/6 text-gray-900">{{ trailer.datatype }}</p>
          </div>
        </div>
      </li>
    </ul>
  <p v-else>Loading trailers...</p>
</div>
  <div class="center space-x-2">
    <button
      @click="firstPage"
      :disabled="page === 1"
      class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:bg-gray-100"
    >
      First
    </button>
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
    <button
      @click="lastPage"
      :disabled="page === totalPages"
      class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:bg-gray-100"
    >
      Last
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      trailers: [],
      filteredUnits: [], 
      searchTerm: '',
      page: 1, 
      limit: 30, 
    };
  },
  computed: {
    pagedTrailers() {
      const start = (this.page - 1) * this.limit;
      const end = this.page * this.limit;
      return this.filteredUnits.slice(start, end);
    },
    totalPages() {
      return Math.ceil(this.filteredUnits.length / this.limit);
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
        this.filteredUnits = this.trailers;
      } catch (error) {
        console.error("Error fetching trailers:", error);
      }
    },
    filterUnits() {
      const term = this.searchTerm.toLowerCase();
      this.filteredUnits = this.trailers.filter(unit =>
        unit.name.toLowerCase().includes(term)
      );
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
    firstPage() {
      if (this.page > 1) {
        this.page = 1;
      }
    },
    lastPage() {
      if (this.page != this.totalPages) {
        this.page = this.totalPages;
      }
    },
  },
};
</script>

<style scoped>
.center{
  text-align: center;
}
</style>
