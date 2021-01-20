require('./bootstrap');

// Import modules...
import Vue from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';
import VueCurrencyInput from 'vue-currency-input'

Vue.mixin({ methods: { route } });
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
const pluginOptions = {
  /* see config reference */
  globalOptions: { currency: 'clp', locale: 'cl', precision:0, allowNegative:false, distractionFree:false, valueRange:{min:10000},valueAsInteger:true, valueAsInteger:true}
}
Vue.use(VueCurrencyInput, pluginOptions)

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
