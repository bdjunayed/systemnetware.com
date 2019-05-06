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
            <div class="contact_input first_services">
                <h2>Contact Us</h2>
                <div class="input_name">
                        <input type="text" placeholder="Name">
                </div>
                <div class="input_email">
                        <input type="email" placeholder="Your Email">
                </div>
                <div class="input_textarea">
                        <textarea name="" id="" cols="50" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="input_button">
                        <button>Send</button>
                </div>
            </div>
            <div class="office_location">
                <h1>Office Location</h1>
                <p>System Netware<br> SN Bhaban, Lavel 4, 174 Tejkunipara  <br>Tejgaon Dhaka<br> 9146437, 8120858</p>
            </div>
            <div class="map">
                <div class="map_iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.774389759556!2d90.39007885816956!3d23.763464850949738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f824f6915%3A0x495e26f00de54001!2sLevel+4%2C+174+Tejkunipara+Rd%2C+Dhaka+1215!5e0!3m2!1sen!2sbd!4v1557120185180!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0"  allowfullscreen></iframe>
            </div>
       </div>
      </div>
    </div>
  </div>
  @endsection
