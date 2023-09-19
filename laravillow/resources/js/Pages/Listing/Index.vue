<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 "><!--grid styling (mob default)-->
    <Box v-for="listing in listings" :key="listing.id"> <!--loop through array objects and display cities unique id and box styling-->
      <div>
              <Link :href="route('listing.show',{listing: listing.id})"> <!--go to item when clicked-->
                <Price :price="listing.price" class="text-2xl font-bold"></Price><!--show formatted price-->
                <ListingSpace :listing= "listing" class="text-lg font-bold"/><!--to show listing details -->
                <ListingAddress :listing="listing" class="text-gray-500 dark:text-gray-200"/>
              </Link>
      </div>
      <div>
            <Link :href = "route('listing.edit', {listing: listing.id})">Edit</Link> <!--edit link for listing-->
      </div>

      <div>
              <Link :href = "route('listing.destroy', {listing: listing.id})" method="DELETE" as="button">Delete</Link> <!--delete button for listing-->
      </div>
        
    </Box>

  </div>

</template>

<script setup>
  import {Link} from '@inertiajs/vue3'
  import ListingAddress from '@/Components/ListingAddress.vue'
  import Box from '@/Components/UI/Box.vue'
  import ListingSpace from '@/Components/ListingSpace.vue'
  import Price from '@/Components/Price.vue'
   defineProps({
     listings: Array, 
   })

</script>