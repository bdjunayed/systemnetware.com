<template>
<div>

    <div v-if="showNofity" class="notification success">
        @{{ response }}
    </div>

    <form action="{{route('contactUsFrom.store')}}"
          @submit.prevent="onSubmit"
          @keydown="form.errors.clear($event.target.name)"
          v-if="!showNofity"
    >
        <div class="contact_input first_services">
            <h2>Contact Us</h2>
            <div class="input_name">
                <input name="name" v-model="form.name" type="text" placeholder="Name">
                <span v-if="form.errors.has('name')" v-text="form.errors.get('name')" class="msg error"></span>
            </div>
            <div class="input_email">
                <input name="email" v-model="form.email" type="email" placeholder="Your Email">
                <span v-if="form.errors.has('email')" v-text="form.errors.get('email')" class="msg error"></span>
            </div>
            <div class="input_textarea">
                <textarea name="message" v-model="form.message" cols="50" rows="5" placeholder="Message"></textarea>
                <span v-if="form.errors.has('message')" v-text="form.errors.get('message')" class="msg error"></span>
            </div>
            <div class="input_newsletter">
                <input name="newsletter" v-model="form.newsletter" type="checkbox" id="newsletter">
                <label for="newsletter">Newsletter</label>
            </div>
            <div class="input_button">
                <button type="submit" :disabled="form.errors.any() || isLoading">Send</button>
                <span v-if="isLoading" class="notification warn">Working...</span>
            </div>
        </div>
    </form>
</div>
</template>

<script>

import Form from '../core/Form';
import axios from 'axios';

export default {
    data() {
        return {
            notificationClasses: null,
            form: new Form({
                name: '',
                email: '',
                message: '',
                newsletter: true
            }),
            response: '',
            isLoading: false,
            showNofity: false,
        }
    },
    methods: {
        onSubmit() {
            this.isLoading = true;
            this.form.post('/contacts')
                .then(response => (
                    this.response = 'Thank you for contacting us!',
                        this.nofity()
                ))
                .catch((err) => {
                    console.log('Error!');
                    //this.nofity();
                })
                .finally(() => (this.isLoading = false));
        },
        nofity() {
            this.showNofity = true;
            setTimeout(() => {
                this.showNofity = false;
                this.response = '';
            }, 3000);

        }
    }
}
</script>

<style>

</style>

