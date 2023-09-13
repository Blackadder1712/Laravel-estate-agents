<template>
 <div v-for="listing in listings" :key="listing.id"> <!--loop through array objects and display cities unique id-->
      <Link :href="`/listing/${listing.id}`">
          {{listing.street}}  {{listing.street_nr}},  {{listing.city}}, for  {{listing.price}} 
      </Link>
    
 </div>
</template>

<script setup>
  import {Link} from '@inertiajs/vue3'
   defineProps({
     listings: Array, 
   })

</script>