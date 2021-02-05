require('./bootstrap');

import Vue from 'vue'
import vuetify from '@/plugins/vuetify' // path to vuetify export

//Main pages
import App from './views/App'


const app = new Vue({
    vuetify,
    el: '#app',
    components: { App }
});
