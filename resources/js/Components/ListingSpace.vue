<template>
  <div>
    <span class="font-bold text-indigo-400">{{ listing.beds }}</span> bds
    <span class="text-gray-400">| </span> 
    <span class="font-bold text-indigo-400">{{ listing.baths }}</span> ba <!--listings to show and aliases -->
    <span class="text-gray-400 ">| </span> 
    <span class="font-bold text-indigo-400">{{ listing.area }}</span> m² <!--listings to show and aliases -->

  </div>
</template>

<script setup>
  defineProps({
    listing:Object,
  })

</script>