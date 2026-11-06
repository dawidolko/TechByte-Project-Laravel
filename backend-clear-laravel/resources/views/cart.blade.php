@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Cart - Sklep komputerowy'])
  <head>
    <link rel="stylesheet" href="{{ asset('css/cartStyle.css') }}" />
  </head>
  <body>
    @include('shared.navbar')

    <main>
      <div class="barside">
        <div class="sidebar has-scrollbar" data-mobile-menu="sidebar">
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('storage/img/icons/Computers.jpg') }}"
                      alt="Computers"
                      width="20"
                      height="20"
                      class="menu-title-img" />

                    <p class="menu-title">Computers</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('computers.index') }}#gaming"
                      class="sidebar-submenu-title">
                      <p class="product-name">Gaming</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGamingComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('computers.index') }}#learning"
                      class="sidebar-submenu-title">
                      <p class="product-name">Learning</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscLearningComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('computers.index') }}#office"
                      class="sidebar-submenu-title">
                      <p class="product-name">Office</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscOfficeComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('computers.index') }}#all"
                      class="sidebar-submenu-title">
                      <p class="product-name">All</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscKomputerow }}</data
                      >
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('storage/img/icons/Laptops.jpg') }}"
                      alt="Laptops"
                      class="menu-title-img"
                      width="20"
                      height="20" />

                    <p class="menu-title">Laptops</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('laptops.index') }}#gaming"
                      class="sidebar-submenu-title">
                      <p class="product-name">Gaming</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGamingLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('laptops.index') }}#learning"
                      class="sidebar-submenu-title">
                      <p class="product-name">Learning</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscLearningLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('laptops.index') }}#office"
                      class="sidebar-submenu-title">
                      <p class="product-name">Office</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscOfficeLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="{{ route('laptops.index') }}#all" class="sidebar-submenu-title">
                      <p class="product-name">All</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscLaptopow }}</data
                      >
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('storage/img/icons/Components.jpg') }}"
                      alt="Components"
                      class="menu-title-img"
                      width="20"
                      height="20" />

                    <p class="menu-title">Components</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('components.index') }}#processors"
                      class="sidebar-submenu-title">
                      <p class="product-name">Prossecors</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscProcessors }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('components.index') }}#graphics"
                      class="sidebar-submenu-title">
                      <p class="product-name">Graphics</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGraphics }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="{{ route('components.index') }}#memoryRam"
                      class="sidebar-submenu-title">
                      <p class="product-name">Memory RAM</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscMemoryRam }}</data
                      >
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      {{--
        ! ! !SUBPAGE SECTION ! ! !
      --}}

  <div class="container">
    <h2 class="cart__heading">Your cart</h2>
    <section class="cart">
        <div class="cart__wrapper">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('cart') && count(session('cart')) > 0)
                <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <table class="cart__table">
                        <tr class="cart__table-titles">
                            <th style="text-align: center">Product</th>
                            <th style="text-align: center">Name</th>
                            <th style="text-align: center">Quantity</th>
                            <th style="text-align: center">Total</th>
                            <th style="text-align: center">Remove</th>
                        </tr>
                        @php $total = 0; @endphp
                        @foreach(session('cart') as $id => $details)
                            @if(isset($products[$id]))
                                @php
                                    $product = $products[$id];
                                    $total += $details['price'] * $details['quantity'];
                                @endphp
                                <tr>
                                    <td><img src="{{ asset('storage/images/'.$details['photo']) }}" width="50" height="50" alt="product"></td>
                                    <td>{{ $details['name'] }}</td>
                                    <td>
                                        <input type="number" name="quantities[{{ $id }}]" value="{{ $details['quantity'] }}" min="1" max="{{ $product->quantities_available }}" class="form-control" style="width: 70%;">
                                    </td>
                                    <td>$<span>{{ number_format($details['price'] * $details['quantity'], 2) }}</span></td>
                                    <td>
                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf 
                                            @method('POST')
                                            <button type="submit" class="btn btn btn-danger" style="background: #dc3545;">REMOVE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="cart__box">
                        <a href="{{ route('index') }}" class="cart__continue">
                            <i class="fa-solid fa-chevron-left"></i> Continue Shopping
                        </a>
                        <p class="cart__total-price">Total: ${{ number_format($total, 2) }}</p>
                        <button type="submit" class="cart__continue">Update Cart</button>
                    </div>
                </form>
            @else
                <div style="text-align: center; font-size: 2rem; margin-top: 20px;">
                    Your cart is empty
                </div>
                <div class="cart__box">
                    <a href="{{ route('index') }}" class="cart__continue" style="
                    width: 100%;
                    text-align: center;">
                        <i class="fa-solid fa-chevron-left"></i> Continue Shopping
                    </a>
                </div>
            @endif
        </div>
        <form id="personalInfoForm" action="{{ route('cart.checkout') }}" method="POST">
          @csrf
          <div class="payment">
              <h2 class="payment__title">Personal Information</h2>
              <label class="payment__label">Name and Surname</label>
              <input type="text" placeholder="Your name" id="nameSurname" name="nameSurname" class="payment__input" required />
      
              <label class="payment__label">Phone Number</label>
              <input type="text" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" class="payment__input" required />
      
              <label class="payment__label">Address</label>
              <input type="text" placeholder="Address" id="address" name="address" class="payment__input" required />
      
              <h2 class="payment__title">Card Information</h2>
              <div class="payment__icons">
                  <img src="{{ asset('storage/img/socials/payment.png') }}" alt="" class="payment__icon" />
                  <img src="{{ asset('storage/img/socials/visa.webp') }}" alt="" class="payment__icon" />
              </div>
      
              <input type="password" id="cardNumber" name="cardNumber" class="payment__input" placeholder="Card Number" required />
      
              <div class="payment__Info">
                  <input type="text" placeholder="mm" id="expMonth" name="expMonth" class="payment__input payment__input-date" required />
                  <input type="text" placeholder="yyyy" id="expYear" name="expYear" class="payment__input payment__input-date" required />
                  <input type="text" placeholder="cvv" id="cvv" name="cvv" class="payment__input payment__input-date" required />
              </div>
      
              <p class="payment__message"></p>
              <button type="submit" class="payment__button">Checkout!</button>
          </div>
      </form>
         
    </section>
</div>

         <!--
        - TESTIMONIALS, CTA & SERVICE
      -->
  
      <div>
        <div class="container">
          <div class="testimonials-box">
            <!--
            - TESTIMONIALS
          -->

            <div class="testimonial">
              <h2 class="title">testimonial</h2>

              <div class="testimonial-card">
                <img
                  src="{{ asset('storage/img/Portret.jpg') }}"
                  alt="alan doe"
                  class="testimonial-banner"
                  width="80"
                  height="80" />

                <p class="testimonial-name">Dawid Olko</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img
                  src="{{ asset('storage/img/icons/quotes.svg') }}"
                  alt="quotation"
                  class="quotation-img"
                  width="26" />

                <p class="testimonial-desc">
                  <q
                    >Empowering your digital world, one byte at a time. Welcome
                    to TechByte, where innovation meets excellence.</q
                  >
                </p>
              </div>
            </div>

            <!--
            - CTA
          -->

            <div class="cta-container">
              <img
                src="{{ asset('storage/img/banners/BannerComain2.webp') }}"
                alt="summer collection"
                class="cta-banner" />

              <a href="{{ route('sales') }}" class="cta-content">
                <p class="discount">25% Discount</p>

                <h2 class="cta-title">Computer collection</h2>

                <p class="cta-text">Starting $100</p>

                <button class="cta-btn">Shop now</button>
              </a>
            </div>

            <!--
            - SERVICE
          -->

            <div class="service">
              <h2 class="title">Our Services</h2>

              <div class="service-container">
                <a href="{{ route('contact') }}" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="boat-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Worldwide Delivery</h3>
                    <p class="service-desc">For Order Over $100</p>
                  </div>
                </a>

                <a href="{{ route('index') }}" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="rocket-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Next Day delivery</h3>
                    <p class="service-desc">PL Orders Only</p>
                  </div>
                </a>

                <a href="{{ route('contact') }}" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="call-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Best Online Support</h3>
                    <p class="service-desc">Hours: 8AM - 16PM</p>
                  </div>
                </a>

                <a href="{{ route('privacy') }}" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="arrow-undo-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Return Policy</h3>
                    <p class="service-desc">Easy & Free Return</p>
                  </div>
                </a>

                <a href="{{ route('index') }}" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="ticket-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">20% money back</h3>
                    <p class="service-desc">For Order Over $500</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    @include('shared.footer')

    <!--
    - custom js link
    -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/changeTheLanguage.js') }}"></script>
    <script src="{{ asset('js/counterCart.js') }}"></script>    
    <script>
      document.getElementById("personalInfoForm").addEventListener("submit", function(event) {
          var valid = true;
          var errorMessage = '';
      
          var cardNumber = document.getElementById('cardNumber').value;
          if (!/^\d{16}$/.test(cardNumber)) {
              valid = false;
              errorMessage += 'Card number must be exactly 16 digits long.\n';
          }
      
          var expMonth = document.getElementById('expMonth').value;
          if (!/^(0[1-9]|1[0-2])$/.test(expMonth)) {
              valid = false;
              errorMessage += 'Expiration month must be MM format (01 to 12).\n';
          }
      
          var expYear = document.getElementById('expYear').value;
          if (!/^\d{4}$/.test(expYear)) {
              valid = false;
              errorMessage += 'Expiration year must be YYYY format.\n';
          }
      
          var cvv = document.getElementById('cvv').value;
          if (!/^\d{3}$/.test(cvv)) {
              valid = false;
              errorMessage += 'CVV must be exactly 3 digits long.\n';
          }
      
          if (!valid) {
              event.preventDefault(); 
              alert(errorMessage); 
          }
      });
    </script>
    
</body>
</html>
