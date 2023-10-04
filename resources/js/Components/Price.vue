<template>
 <span>{{ formattedPrice }}</span> <!--render price -->
</template>
<script setup>
  import {computed} from 'vue'
  const props = defineProps({
    price: [Number, String],//number and price info converted currency
  })

  const formattedPrice = computed(
    () => Number(props.price).toLocaleString( 
    'en-UK', {
        style: 'currency',
        currency: 'GBP',
        maximumFractionDigits: 0,
    }) 
  )
</script>