<nav  class="w-full py-3 z-30 bg-white top-0 sticky">
  <div x-data="{ isOpen: false }" class="flex flex-row  justify-end relative lg:pr-20">
      <div class="flex mr-auto">
          <a href="{{ url('/') }}"><img src="{{ asset('images/xxol-logo-update-2.png') }}"></a>
      </div>
      <div class="lg:hidden">
          <button 
          {{-- id="navbartoggle" --}}
          type="button" 
           class="pr-6"
           aria-label="toggle menu"
           @click="isOpen = !isOpen"
           >
              <i
               {{-- x-bind:class="isOpen ? 'fa-times' : 'fa-bars'" --}}
               class="fas fa-bars text-3xl"></i>
              {{-- <i class="hidden fas fa-times"></i> --}}
          </button>
      </div>
     
      <ul :class="isOpen ? 'show' : 'hidden'"
          class="lg:flex bg-primary w-full lg:w-auto lg:bg-transparent  flex-col lg:flex-row text-lg font-semibold absolute lg:static top-16 justify-around lg:items-center font-body">
          <li class="pl-8 lg:px-8 py-2 hover:bg-tenth lg:hover:bg-transparent  border-b border-white">
              <a class='font-semibold {{ request()->is('/') ? 'text-secondary' : 'link' }} '
                  href="{{ url('/') }}">Home</a>
          </li>
          <li id='servicesnav' class="pl-8 lg:px-8 py-2 hover:bg-tenth lg:hover:bg-transparent  border-b border-white">
              <a class='font-semibold {{ request()->is('service') ? 'text-secondary' : 'link' }} ' href="#">
                  Services
              </a>
              <div>
                  <ul id="dropdown" class="absolute top-12 bg-gray-300 hidden pl-6 pr-14 pt-4">
                      <li id='homeclean' onclick="changeDropDownSub(event)" class="flex justify-between pb-4">
                          <a id='homeclean' href="{{ url('/bookings/service/standard_home_cleaning') }}">Standard home cleaning</a><i id='homeclean'
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                      <li id='caregivers' onclick="changeDropDownSub(event)" class="flex justify-between pb-4">
                          <a id='caregivers' href="{{ url('/bookings/service/care_givers') }}">Care Givers</a><i id='caregivers'
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                      {{-- <li id='' class="flex justify-between pb-7"><a href="#">Baby sitting/home nanny</a><i
                              class="text-sm fas fa-caret-down"></i></li> --}}
                      <li class="flex justify-between pb-4"><a href="{{url('/bookings/service/deep_cleaning')}}">Deep Cleaning/Post Construction cleaning</a><i
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                      <li id='salonclick' onclick="changeDropDownSub(event)" class="flex justify-between pb-4">
                          <a id='salonclick' href="{{url('/bookings/service/salon_service')}}">Salon
                              {{-- (male and female home hair grooming,
                              make-up,
                              manicure, pedicure, etc) --}}
                          </a>
                          <i id='salonclick' class="text-sm fas fa-caret-down"></i>
                      </li>
                      <li class="flex justify-between pb-4"><a href="{{url('/bookings/service/spa_service')}}">Spa</a><i
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                      {{-- <li class="flex justify-between pb-4"><a href="#">Logistics (Car/driver rental, delivery)</a><i
                              class="text-sm fas fa-caret-down"></i></li> --}}
                      <li class="flex justify-between pb-4"><a href="{{url('/bookings/service/office_cleaning')}}">Office cleaning</a><i
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                      <li class="flex justify-between pb-4"><a href="{{url('/bookings/service/relocation_assistance')}}">Relocation</a><i
                              class="text-sm fas fa-caret-down"></i>
                      </li>
                  </ul>
              </div>
              <div id='dropdownsub'>
                  <div class='hidden' id='homecleaningdp'>
                      <ul class="absolute top-12 bg-gray-300 pt-4 pl-6 w-thirteenth left-0">
                          <li class="flex justify-between pb-7">
                              <a href="#">Laundry</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">Ironing</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">Carwash</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">Vacuuming of sofa</a>
                          </li>
                      </ul>
                  </div>
                  <div class='hidden' id='caregiversdp'>
                      <ul class="absolute top-12 bg-gray-300 pt-4 pl-6 w-thirteenth left-0">
                          <li class="flex justify-between pb-7">
                              <a href="#">Home nannies</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">care for people with special needs</a>
                          </li>hair grooming
                      </ul>
                  </div>
                  <div class='hidden' id='salondp'>
                      <ul class="absolute top-12 bg-gray-300 pt-4 pl-6 w-thirteenth left-0">
                          <li class="flex justify-between pb-7">
                              <a href="#">Hair grooming</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">manicure</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">Pedicure</a>
                          </li>
                          <li class="flex justify-between pb-7">
                              <a href="#">Massages</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </li>
          <li class="pl-8 lg:px-8 py-2 hover:bg-tenth lg:hover:bg-transparent  border-b border-white">
              <a class='font-semibold {{ request()->is('about') ? 'text-secondary' : 'link' }} '
                  href="{{ url('/about') }}">About</a>
          </li>
          <li class="pl-8 lg:px-8 py-2 hover:bg-tenth lg:hover:bg-transparent  border-b border-white">
              <a class='font-semibold {{ request()->is('contact') ? 'text-secondary' : 'link' }} '
                  href="{{ url('/contact') }}">Contact
                  Us</a>
          </li>
          @guest
          <li id='loginButton' class="pl-8 py-2 hover:bg-tenth md:hover:text-white  bg-primary lg:px-6 lg:py-2 rounded-sm text-fifth text-opacity-50">
              <a href="{{ url('/login') }}">Login</a>
              <div class='hidden'>
                  <ul id='loginKeys' class='absolute'>
                      <li class="py-2 hover:bg-tenth md:hover:text-white  bg-primary lg:px-6 lg:py-2 rounded-sm text-fifth text-opacity-50">
                          <a  href="{{ url('/login') }}">Login as Customer</a>
                      </li>
                      <li class="py-2 hover:bg-tenth md:hover:text-white  bg-primary lg:px-6 lg:py-2 rounded-sm text-fifth text-opacity-50">
                          <a  href="{{ url('/xxolstars/login') }}">Login as XXOLSTAR</a>
                      </li>
                  </ul>
              </div>
          </li>
      
          @endguest
          @auth
          <li class="pl-8 py-2 hover:bg-tenth md:hover:text-white  bg-primary lg:px-6 lg:py-2 rounded-sm text-fifth text-opacity-50">
              <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
          @endauth
      </ul>
     
  </div>
  <div id="overlay3"></div>
</nav>
