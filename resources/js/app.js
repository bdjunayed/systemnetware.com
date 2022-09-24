import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
// import ExampleComponent from './components/ExampleComponent.vue'
import ContactForm from './components/ContactForm.vue'
import axios from 'axios';
import Form from './core/Form';



createApp({
    components: {
        ContactForm
    }
}).mount('#contact-form');
