<template>
 <div v-for="listing in listings" :key="listing.id"> <!--loop through array objects and display cities unique id-->
   <div>
          <Link :href="route('listing.show',{listing: listing.id})"> <!--go to item when clicked-->
             <ListingAddress :listing="listing"/>
          </Link>
   </div>
   <div>
         <Link :href = "route('listing.edit', {listing: listing.id})">Edit</Link> <!--edit link for listing-->
   </div>

   <div>
          <Link :href = "route('listing.destroy', {listing: listing.id})" method="DELETE" as="button">Delete</Link> <!--delete button for listing-->
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