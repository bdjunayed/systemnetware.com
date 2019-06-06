/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';
// import Notifications from 'vue-notification';

window.axios = axios;
window.Form = Form;

// Vue.use(Notifications);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// New laravel changes!
// Vue.component('example-component', require('./components/ExampleComponent.vue').default); 


// Switching to EcmaScript imports is the recommended option:
// import ExampleComponent from './components/ExampleComponent.vue';
// Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#contactForm',
    data: {
        notificationClasses: null, 
        form: new Form({
            name: '',
            email: '',
            message: '',
            newsletter: true
        }),
        response: '',
        isLoading: false,
    },
    methods: {
        onSubmit() {
            this.isLoading = true;
            this.form.post('/contacts')
                .then(response => (
                    this.response = 'Thank you for contacting us!',

                    this.notificationClasses = 'vue-notification success',
                    this.$notify({
                        group: 'foo',
                        title: 'Important message',
                        text: 'Hello user! This is a notification!'
                      })
                ))
                .catch((err) => {
                    console.log('Error!');

                    this.notificationClasses = 'vue-notification error';
                    this.$notify({
                        group: 'foo',
                        title: 'Important message',
                        text: 'Hello user! This is a notification!'
                      });
                })
                .finally(() => (this.isLoading = false));
        }
    }
});


