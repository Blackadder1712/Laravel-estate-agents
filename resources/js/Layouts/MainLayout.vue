
<template> 
 <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
   <div class="container mx-auto">
    <nav class="p-4 flex items-center justify-between">
      <div class="text-lg font-medium">
        <Link :href="route('listing.index')">Listings</Link> <!--button to listing page-->
      </div> <!--buttons at top-->
      <div class="text-xl text-indigo-600 dark:text-indigo-400 font-bold text-center">
        <Link :href = "route('listing.index')">Amy's LaraVillow</Link>
      </div>
      <div>
        <Link :href = "route('listing.create')" class="btn-primary">Create Listing</Link> <!--make into button-->
      </div>
      
    </nav>

   </div>

 </header>
 <!--<div>The page with time {{timer}}</div>-->
 <main class ="container mx-auto p-4">
  <div v-if="flashSuccess" class ="mb-4 border rounded-md shadow-sm border-green-200 bg-green-100 dark:border-green-1000 p-2 ">
    {{flashSuccess}}
    
  </div>
  <slot>Default</slot>
 
 </main>

</template>


<script setup> 
  import {ref, computed} from 'vue'
  import {Link, usePage} from '@inertiajs/vue3' 

  const page = usePage()
  const flashSuccess = computed(
   ()=> page.props.flash.success,
  )

</script>
