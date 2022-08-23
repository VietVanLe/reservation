// require('./bootstrap');

window.Vue = require('vue').default;
import App from '@/components/App';
import router from '@/routers/index';
import store from "@/stores";
import '@/plugins';
import '@/assets/css/style.css'
import '@/backtotop'
import '@/fontawesome'
import { ApiService } from '@/services';
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

ApiService.init()
ApiService.setHeader()
new Vue({
  router,
  store,
  render: (h)=> h(App),
}).$mount('#app');
