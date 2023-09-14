<template>
 <div v-for="listing in listings" :key="listing.id"> <!--loop through array objects and display cities unique id-->
   <div>
          <Link :href="`/listing/${listing.id}`">
             <ListingAddress :listing="listing"/>
          </Link>
   </div>
   <div>
         <Link :href = "`/listing/${listing.id}/edit`">Edit</Link> <!--edit link for listing-->
   </div>
    
 </div>
</template>

<script setup>
  import {Link} from '@inertiajs/vue3'
  import ListingAddress from '@/Components/ListingAddress.vue'
   defineProps({
     listings: Array, 
   })

</script>