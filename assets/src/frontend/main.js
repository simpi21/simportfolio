import Vue from 'vue';
import App from './App.vue';
import router from './routers.js';

new Vue({
    el: '#stackonet-app',
    router: router,
    render: h => h(App)
});


