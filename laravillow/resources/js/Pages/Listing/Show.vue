<template>
  <div class ="flex flex-col-reverse md:grid md:grid-cols-12 gap-4"> <!--12 column grid-->
    <Box class=" md:col-span-7 flex-items-center.w-full"><!--image container take 7 columns-->
      <div class = "w-full text-center font-medium text-gray-500"><!--in centre full width-->
        No images
      </div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box> <!--take 5 columns/ 12 on small screens show on screen-->
        <template #header><!--use box slot-->
          Basic info
        </template>
        <Price :price="listing.price" class="text-2xl font-bold"></Price><!--show formatted price-->
        <ListingSpace :listing= "listing" class="text-lg font-bold"/><!--to show listing details -->
        <ListingAddress :listing="listing" class="text-gray-500 dark:text-gray-200"/>

      </Box>
      <Box>
        <template #header>
           Offer
        </template>
           Make an Offer
    
      </Box>
    </div>

  </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'
  defineProps({
    listing:Object,
  })

</script>