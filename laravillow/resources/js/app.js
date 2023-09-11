import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

createInertiaApp({
  //async = promise
  resolve: async (name) => { //where to find pages
    const pages = import.meta.glob('./Pages/**/*.vue') //load all pages 
    const page = await pages[`./Pages/${name}.vue`]() //wait for value to be resolved
    page.default.layout = page.default.layout || MainLayout

    return page
  },
  //function () {}
  //{el: xxx, App: xx, props:xxx}
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el) //the application
  },
})