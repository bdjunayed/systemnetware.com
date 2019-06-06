
        {{-- === Header === --}}
          <header>
              <div class="full_body">
               <div class="top_header">
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> SN Bhaban, Lavel 4, 174 Tejkunipara, Tejgaon Dhaka</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i> 9146437</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> towhid@systemnetware.com</li>
                </ul>
            </div>
            <div class="right_header">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
             </div>{{-- full_body --}}
            </header>
{{-- === LOGO === --}}   
<div class="logo">
        <div class="full_body">
         <div class="logo_body">
              <img src="images/sn-logo1.png" >
           </div>
        </div>
      </div>
  {{-- Menu --}}
      <div class="menu">
        <div class="full_body"> 
          <div class="ipad_menu">
          <ul>
          <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
              <li class="{{ request()->is('services') ? 'active' : ''}}"><a href="services">Services</a></li>
              <li class="{{ request()->is('products') ? 'active' : ''}}"><a href="products">Products</a></li>
              <li class="{{ request()->is('ourclients') ? 'active' : ''}}"><a href="ourclients">Our Clients</a></li>
              <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="about">About</a></li>
              <li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="contact">Contact</a></li>
          </ul>
      </div>
       <div class="mobile_menu">
         <select>
             <option selected="selected" value="">Main Navigation</option>
             <option value="/">Home</option>
             <option value="services">Services</option>
             <option value="products">Products</option>
             <option value="ourclients">Our Clients</option>
             <option value="about">About</option>
             <option value="contact">Contact</option>
          </select>
        </div>{{-- mobile_menu --}}
      </div>{{-- full_body --}}
      </div>{{-- menu --}}
      
     