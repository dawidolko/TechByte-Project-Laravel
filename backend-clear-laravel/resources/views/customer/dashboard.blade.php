@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Dashboard - Sklep komputerowy'])
  <head>
    <link rel="stylesheet" href="{{ asset('css/CustomerStyle.css') }}" />
    <style>
      .table th, .table td {
          text-align: center;
          vertical-align: middle; 
          word-wrap: break-word;
      }

      .table .name-column {
          max-width: 200px;
      }
      .product-image {
          width: 100px; 
          height: auto; 
      }
      .btn-action {
          padding: 3px 6px; 
          margin-bottom: 5px; 
          width: auto; 
      }
      .form-control {
          margin-top: 5px;
      }
  </style>
  </head>
  <body style="overflow-x: hidden;">
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
        
      <div class="row mt-4 mb-4 text-center" style="text-align: center;">
        <div class="col-12" style="    display: flex;
        flex-direction: column;
        align-items: center;">
            <h1>Your profile</h1>
        </div>
    </div>
  
  @if (auth()->check())
  <div class="container mt-5">
      <div class="card">
          <div class="card-header" style="padding: 20px;">
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                  <div class="flex-grow-1 mb-3 mb-md-0">
                      <h1>{{ auth()->user()->name }} {{ auth()->user()->last_name }}</h1>
                      <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                      <p><strong>Address:</strong> {{ auth()->user()->delivery_address }}</p>
                      <div>
                          <a href="{{ route('customer.settings') }}" class="btn btn-primary">Edit data</a>
                          <a href="{{ route('cart') }}" class="btn btn-warning">Cart</a>
                          <form action="{{ route('logout1') }}" method="POST" style="display: inline;">
                              @csrf
                              <button type="submit" class="btn btn-danger">Log out</button>
                          </form>                    
                      </div>
                  </div>
              </div>
          </div>
      </div>    
      <br>
      @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
      @endif
      @foreach ($orders as $order)
      <h3>Order no: {{ $order->id }}</h3>
      <h6>Status of the order: {{ $order->status }}</h6>
      @if($order->shipments)
          @foreach($order->shipments as $shipment)
              <h6>Shipping Information: {{ $shipment->delivery_company }} - Status: {{ $shipment->delivery_status }} - Date: {{ $shipment->delivery_time }}</h6>
          @endforeach
      @endif
      <div class="table-responsive">
        <table class="table">
          <thead>
              <tr>
                  <th>Product</th>
                  <th class="name-column">Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Status complaints</th>
                  <th>Shares</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($order->products as $product)
              <tr>
                  <td><img src="{{ $product->photo_path ? asset('storage/images/' . $product->photo_path) : asset('storage/images/default.jpg') }}" alt="Produkt" class="product-image"></td>
                  <td class="name-column">{{ $product->name }}</td>
                  <td>{{ $product->price }} $</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->complaint_status ?? 'No report' }}</td>
                  <td>
                      <button class="btn btn-primary btn-action" onclick="toggleForm('opinion-{{ $product->id }}')">Add your opinion</button>
                      <button class="btn btn-warning btn-action" onclick="toggleForm('complaint-{{ $product->id }}')">File a complaint</button>
                      <div id="opinion-{{ $product->id }}" style="display: none;">
                          <form method="POST" action="{{ route('opinions.store') }}">
                              @csrf
                              <input type="hidden" name="products_id" value="{{ $product->id }}">
                              <textarea name="content_opinion" class="form-control" placeholder="Twoja opinia"></textarea>
                              <input type="number" name="rating" class="form-control" placeholder="Ocena (1-5)" min="1" max="5">
                              <button type="submit" class="btn btn-success btn-action">Send</button>
                          </form>
                      </div>
                      <div id="complaint-{{ $product->id }}" style="display: none;">
                          <form method="POST" action="{{ route('complaints.store') }}">
                              @csrf
                              <input type="hidden" name="order_id" value="{{ $order->id }}">
                              <textarea name="complaint_reason" class="form-control" placeholder="Powód reklamacji"></textarea>
                              <button type="submit" class="btn btn-danger btn-action">Send</button>
                          </form>
                      </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      </div>
  @endforeach  
  </div>
  @else
  <div class="full-height text-center">
      <p class="text-large">Please log in to access your profile.</p>
      <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
  </div>
  @endif
   
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
      function toggleForm(elementId) {
          var x = document.getElementById(elementId);
          if (x.style.display === "none") {
              x.style.display = "block";
          } else {
              x.style.display = "none";
          }
      }
    </script>      
</body>
</html>
