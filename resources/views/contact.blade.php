@extends('layouts.master')

@section('content')
{{-- CONTACT --}}
<div class="contact">
<div class="full_body">

<div class="quick_links">
    <h3>Quick Links</h3>
    <ul>
        <li><a href="#" title="Services">Services</a></li>
        <li><a href="#" title="Products">Products</a></li>
        <li><a href="#" title="Login">Login</a></li>
        <li><a href="#" title="Webmail">Webmail</a></li>
    </ul>
</div>


<div class="location_map">

    <div class="contact_form" id="contactForm">

        {{-- Error messages  php not worked due to js applied--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Contact form Start--}}            
        <form method="post" action="{{ route('form.store') }}" @submit.prevent="onSubmit"  @keydown="form.errors.clear($event.target.name)">
            @csrf
            <div class="contact_input first_services">
                <h2>Contact Us</h2>
                <div class="input_name">
                    <input name="name" v-model="form.name" type="text" placeholder="Name">
                    <span v-if="form.errors.has('name')" v-text="form.errors.get('name')" class="alert error"></span>
                    @error('name')
                        <div class="alert error">{{ $message }}</div>
                    @enderror {{-- Error messages  php not worked due to js applied--}}

                </div>
                <div class="input_email">
                    <input name="email" v-model="form.email" type="email" placeholder="Your Email">
                    <span v-if="form.errors.has('email')" v-text="form.errors.get('email')" class="alert error"></span>
                    @error('email')
                        <div class="alert error">{{ $message }}</div>
                    @enderror {{-- Error messages  php not worked due to js applied--}}                   
                </div>
                <div class="input_textarea">
                    <textarea name="message" v-model="form.message" cols="50" rows="5" placeholder="Message"></textarea>
                    <span v-if="form.errors.has('message')" v-text="form.errors.get('message')" class="alert error"></span>
                    @error('message')
                        <div class="alert error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input_button">
                    <button type="submit" :disabled="form.errors.any()">Send</button>
                </div>
            </div> {{-- Contacts form end --}}
        </form>

    </div><!-- contact_form -->
    
    <div class="office_location">
        <h1>Office Location</h1>
        <p>System Netware<br> SN Bhaban, Lavel 4, 174 Tejkunipara  <br>Tejgaon Dhaka<br> 9146437, 8120858</p>
    </div>
    <div class="map">
        <div class="map_iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.774389759556!2d90.39007885816956!3d23.763464850949738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f824f6915%3A0x495e26f00de54001!2sLevel+4%2C+174+Tejkunipara+Rd%2C+Dhaka+1215!5e0!3m2!1sen!2sbd!4v1557120185180!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0"  allowfullscreen></iframe>
        </div>
    </div>
</div><!-- location_map -->

</div> <!-- full_body -->
</div>
  @endsection
