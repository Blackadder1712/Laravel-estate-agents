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
           Monthly Payment
        </template>
        <div>
           <label class = "label">
             Interest Rate({{ interestRate}} %)
           </label>
           <input v-model.number="interestRate"
           type="range" min = "0.1" max = "30" step="0.1" 
            class ="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/> <!--slider connected to interest rate amount-->
            
            <label class = "label">
             Duration ( {{duration}} years)
           </label>
            <input v-model.number="duration"
             type="range" min = "3" max = "35" step="1" 
            class ="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/> <!--slider-->

            <div class ="text-gray-600 dark: text-gray-300 mt-2">
                <div class="text-gray-400">
                  Your Monthly Payment
                </div>
                <Price :price="monthlyPayment" class="text-3xl"></Price>
            </div>
        </div>
      
    
      </Box>
    </div>

  </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'

import {ref} from 'vue' //monthly import calculation

import {useMonthlyPayment} from '@/Composables/UseMonthlyPayment'

const interestRate = ref(2.5)
const duration = ref(25)

const props = 
  defineProps({
    listing:Object,
  })

  const { monthlyPayment } = useMonthlyPayment(props.listing.price, interestRate, duration,) //what to be used in computed montly payment

</script>