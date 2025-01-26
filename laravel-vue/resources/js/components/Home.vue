<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Create a New Transport Unit</h1>

    <form @submit.prevent="createTransportUnit" class="space-y-4">
      <div>
        <label for="name" class="block text-sm font-medium">Name</label>
        <input
          type="text"
          id="name"
          v-model="form.name"
          class="mt-1 block w-flex  border border-gray-300 rounded-md p-2"
          placeholder="Enter transport unit name"
          required
        />
      </div>

      <div>
        <label for="datatype" class="block text-sm font-medium">Datatype</label>
        <select
          id="datatype"
          v-model="form.datatype"
          class="mt-1 block w-flex border border-gray-300 rounded-md p-2"
          required
        >
          <option disabled value="">Select Type</option>
          <option value="Trailer">Trailer</option>
          <option value="Truck">Truck</option>
        </select>
      </div>

      <div>
        <button
          type="submit"
          class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600"
        >
          Create Transport Unit
        </button>
      </div>
    </form>

    <div v-if="successMessage" class="text-2xl mt-4 text-green-500">
      {{ successMessage }} 
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      form: {
        name: "",
        datatype: "",
      },
      successMessage: "",
    };
  },
  methods: {
    async createTransportUnit() {
      try {
        const response = await axios.post("/api/transport-units", {
          name: this.form.name,
          datatype: this.form.datatype,
        });

        // Clear the form and show success message
        this.form.name = "";
        this.form.datatype = "";
        this.successMessage = "Transport Unit created successfully!";

        console.log("Created Transport Unit:", response.data);
      } catch (error) {

        console.error("Error creating transport unit:", error);
        alert("Failed to create transport unit. Please try again.");
      }
    },
  },
};
</script>

<style>
</style>
