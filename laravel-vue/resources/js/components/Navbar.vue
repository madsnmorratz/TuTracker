<template>
<nav class="bg-gray-800">
    <div class="mx-auto max-w-1xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center ">
            <p class="text-3xl font-semibold text-white">Transport Units </p>
            <div class="flex items-center">
                <div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-20 flex items-baseline space-x-1">
                    <router-link to="/" class= "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700">Home </router-link>
                    <router-link to="/truck" class=" rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Trucks</router-link>
                    <router-link to="/trailer" class=" rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Trailers</router-link>
                </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
    export default{};
</script>