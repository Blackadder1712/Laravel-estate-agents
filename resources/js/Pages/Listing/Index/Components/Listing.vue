<template>
    <Box> <!--loop through array objects and display cities unique id and box styling-->
        <div>
                <Link :href="route('listing.show',{listing: listing.id})"> <!--go to item when clicked-->

                    <div class="flex items-center gap-1">
          <Price
            :price="listing.price"
            class="text-2xl font-bold"
          />
          <div class="text-xs text-gray-500">
            <Price :price="monthlyPayment" /> pm
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress
          :listing="listing"
          class="text-gray-500"
        />
      </Link>
    </div>
        <div>
            <Link :href = "route('listing.edit', {listing: listing.id})">Edit</Link> <!--edit link for listing-->
        </div>

        <div>
                <Link :href = "route('listing.destroy', {listing: listing.id})" method="DELETE" as="button">Delete</Link> <!--delete button for listing-->
        </div>
      
  </Box>


</template>

<script setup>
  import { Link } from '@inertiajs/vue3'
  import ListingAddress from '@/Components/ListingAddress.vue'
  import Box from '@/Components/UI/Box.vue'
  import ListingSpace from '@/Components/ListingSpace.vue'
  import Price from '@/Components/Price.vue'
  import { useMonthlyPayment } from '@/Composables/UseMonthlyPayment'

    const props = defineProps({listing: Object})
    const { monthlyPayment } = useMonthlyPayment(
        props.listing.price,  2.5,  25
    )

  
</script>