<!--padding margin etc -->

<template>
  <div class="border border-gray-200 dark:borger-gray-800 rounded-md p-4 shadow-sm text-gray-800 dark:text-gray-300">
    <div class="text-gray-500 font-medium mb-1">
            <slot name= "header"></slot>
    </div>
    <slot></slot>
  </div>

</template>