import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ZiggyVue } from 'ziggy'
import {InertiaProgress} from '@inertiajs/progress'
import '../css/app.css'

InertiaProgress.init(//progress bar
  {
    delay: 0,
    color:'#29d',
    includeCSS: true,
    showSpinner: true
  }
)

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
      .use(ZiggyVue)
      .mount(el) //the application
  },
})