@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Home - Sklep komputerowy'])
  <head>
    <link rel="stylesheet" href="{{ asset('css/style-prefix.css') }}" />
  </head>
  <body>
    @include('shared.navbar')

    <main>
        <!--
        - BANNER
      -->
  
        <div class="banner">
          <div class="container">
            <div class="slider-container has-scrollbar">
              <div class="slider-item">
                <img
                  src="{{ asset('storage/img/banners/BannerMain3.png') }}"
                  alt="store1"
                  class="banner-img" />
  
                <div class="banner-content">
                  <h2 class="title-heading" id="titleheading">PC Store</h2>
                  <div class="subTitleCon">
                    <div class="animation">
                      <div class="first banner-title"><div>Build</div></div>
                      <div class="second banner-title"><div>Overclock</div></div>
                      <div class="third banner-title"><div>service</div></div>
                    </div>
                    <p class="banner-title1">your computer</p>
                  </div>
  
                  <a href="{{ route('laptops.index') }}" class="banner-btn">Shop now</a>
                </div>
              </div>
  
              <div class="slider-item">
                <img
                  src="{{ asset('storage/img/banners/BannerMain2.png') }}"
                  alt="store2"
                  class="banner-img" />
  
                <div class="banner-content">
                  <h2 class="title-heading" id="titleheading">PC Store</h2>
                  <div class="subTitleCon">
                    <div class="animation">
                      <div class="first banner-title"><div>Build</div></div>
                      <div class="second banner-title"><div>Overclock</div></div>
                      <div class="third banner-title"><div>service</div></div>
                    </div>
                    <p class="banner-title1">your computer</p>
                  </div>
  
                  <a href="{{ route('components.index') }}" class="banner-btn">Shop now</a>
                </div>
              </div>
  
              <div class="slider-item">
                <img
                  src="{{ asset('storage/img/banners/BannerMain1.png') }}"
                  alt="store3"
                  class="banner-img" />
  
                <div class="banner-content">
                  <h2 class="title-heading" id="titleheading">PC Store</h2>
                  <div class="subTitleCon">
                    <div class="animation">
                      <div class="first banner-title"><div>Build</div></div>
                      <div class="second banner-title"><div>Overclock</div></div>
                      <div class="third banner-title"><div>service</div></div>
                    </div>
                    <p class="banner-title1">your computer</p>
                  </div>
  
                  <a href="{{ route('computers.index') }}" class="banner-btn">Shop now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!--
        - CATEGORY
      -->
  
        <div class="category">
          <div class="container">
            <div class="category-item-container has-scrollbar">
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/Computers.jpg') }}"
                    alt="computers"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Computers</h3>
  
                    <p class="category-item-amount">({{ $iloscKomputerow }})</p>
                  </div>
  
                  <a href="{{ route('computers.index') }}" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/Laptops.jpg') }}"
                    alt="laptops"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Laptops</h3>
  
                    <p class="category-item-amount">({{ $iloscLaptopow }})</p>
                  </div>
  
                  <a href="{{ route('laptops.index') }}" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/Processors.jpg') }}"
                    alt="Processors"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Processors</h3>
  
                    <p class="category-item-amount">({{ $iloscProcessors }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/Grafika.jpg') }}"
                    alt="Grafika"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Graphics</h3>
  
                    <p class="category-item-amount">({{ $iloscGraphics }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img src="{{ asset('storage/img/icons/ram.jpg') }}" alt="ram" width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Memory RAM</h3>
  
                    <p class="category-item-amount">({{ $iloscMemoryRam }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/cooling.jpg') }}"
                    alt="colling"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Cooling</h3>
  
                    <p class="category-item-amount">({{ $iloscCooling }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/fans.jpg') }}"
                    alt="Fans"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Fans</h3>
  
                    <p class="category-item-amount">({{ $iloscFans }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
  
              <div class="category-item">
                <div class="category-img-box">
                  <img
                    src="{{ asset('storage/img/icons/powerSupply.jpg') }}"
                    alt="powerSupply"
                    width="30" />
                </div>
  
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">Power supply</h3>
  
                    <p class="category-item-amount">({{ $iloscPowerSupply }})</p>
                  </div>
  
                  <a href="{{ route('components.index') }}#all" class="category-btn">Show all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!--
        - PRODUCT
      -->
  
        <div class="product-container">
          <div class="container">
            <!--
            - SIDEBAR
          -->
  
            <div class="sidebar has-scrollbar" data-mobile-menu>
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
  
              <div class="product-showcase">
                <h3 class="showcase-heading">Random items</h3>
  
                <div class="showcase-wrapper">
                  <div class="showcase-container">
                    @forelse($randomProducts as $produkt)
                    <div class="showcase">
                      <a
                      href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}"
                        class="showcase-img-box">
                        @php
                            $photoPath = $produkt->photosProducts->isNotEmpty() ? $produkt->photosProducts->first()->path : 'default.png';
                        @endphp
                        <img src="{{ asset('storage/images/' . $photoPath) }}"
                            alt="{{ $produkt->name }}"
                            width="75"
                            height="75"
                            class="showcase-img" />
                      </a>
  
                      <div class="showcase-content">
                        <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}"
                          >
                          <h3 class="showcase-title">{{ $produkt->name }}</h3>
                        </a>
  
                        <div class="price-box">
                          <del>${{ $produkt->old_price }}</del>
                          <p class="price">${{ $produkt->price }}</p>
                      </div>
                      </div>
                    </div>
                    @empty
                        <p>No products.</p>
                    @endforelse
                  </div>
                </div>
              </div>
            </div>
  
            <div class="product-box">
              <!--
              - PRODUCT MINIMAL
            -->
  
              <div class="product-minimal">
                <div class="product-showcase">
                  <h2 class="title">Computers</h2>
  
                  <div class="showcase-wrapper has-scrollbar">
                    <div class="showcase-container">
                      @forelse($computerProducts as $produkt)
                          <div class="showcase">
                              @php
                                  $photoPath = $produkt->photosProducts->isNotEmpty() ? $produkt->photosProducts->first()->path : 'default.png';
                              @endphp
                              <a href={{route('laptops.show', ['id' => $produkt->id])}} class="showcase-img-box">
                                  <img src="{{ asset('storage/images/' . $photoPath) }}"
                                      alt="{{ $produkt->name }}"
                                      width="75"
                                      height="75"
                                      class="showcase-img" />
                              </a>

                              <div class="showcase-content">
                                  <a href={{route('computers.show', ['id' => $produkt->id])}}>
                                      <h3 class="showcase-title">{{ $produkt->name }}</h3>
                                  </a>

                                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}#{{ $produkt->productsCategories->first()->DESCRIPTION }}" class="showcase-category">
                                      {{ $produkt->productsCategories->first()->DESCRIPTION }}
                                  </a>

                                  <div class="price-box">
                                      <p class="price">${{ $produkt->price }}</p>
                                      <del>${{ $produkt->old_price }}</del>
                                  </div>
                              </div>
                          </div>
                      @empty
                          <p>No computers available.</p>
                      @endforelse
                    </div>
                  </div>
                </div>
  
                <div class="product-showcase">
                  <h2 class="title">Laptops</h2>
  
                  <div class="showcase-wrapper has-scrollbar">
                    <div class="showcase-container">
                      @forelse($laptopProducts as $produkt)
                          <div class="showcase">
                              @php
                                  $photoPath = $produkt->photosProducts->isNotEmpty() ? $produkt->photosProducts->first()->path : 'default.png';
                              @endphp
                              <a href={{route('laptops.show', ['id' => $produkt->id])}} class="showcase-img-box">
                                  <img src="{{ asset('storage/images/' . $photoPath) }}"
                                      alt="{{ $produkt->name }}"
                                      width="75"
                                      height="75"
                                      class="showcase-img" />
                              </a>

                              <div class="showcase-content">
                                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                                      <h3 class="showcase-title">{{ $produkt->name }}</h3>
                                  </a>

                                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}#{{ $produkt->productsCategories->first()->DESCRIPTION }}" class="showcase-category">
                                      {{ $produkt->productsCategories->first()->DESCRIPTION }}
                                  </a>

                                  <div class="price-box">
                                      <p class="price">${{ $produkt->price }}</p>
                                      <del>${{ $produkt->old_price }}</del>
                                  </div>
                              </div>
                          </div>
                      @empty
                          <p>No laptops available.</p>
                      @endforelse
                    </div>
                  </div>
                </div>
  
                <div class="product-showcase">
                  <h2 class="title">Components</h2>
  
                  <div class="showcase-wrapper has-scrollbar">
                    <div class="showcase-container">
                      @forelse($componentProducts as $produkt)
                          <div class="showcase">
                              @php
                                  $photoPath = $produkt->photosProducts->isNotEmpty() ? $produkt->photosProducts->first()->path : 'default.png';
                              @endphp
                              <a href={{route('components.show', ['id' => $produkt->id])}} class="showcase-img-box">
                                  <img src="{{ asset('storage/images/' . $photoPath) }}"
                                      alt="{{ $produkt->name }}"
                                      width="75"
                                      height="75"
                                      class="showcase-img" />
                              </a>
                      
                              <div class="showcase-content">
                                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                                      <h3 class="showcase-title">{{ $produkt->name }}</h3>
                                  </a>
                      
                                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}#{{ $produkt->productsCategories->first()->DESCRIPTION }}" class="showcase-category">
                                      {{ $produkt->productsCategories->first()->DESCRIPTION }}
                                  </a>
                      
                                  <div class="price-box">
                                      <p class="price">${{ $produkt->price }}</p>
                                      <del>${{ $produkt->old_price }}</del>
                                  </div>
                              </div>
                          </div>
                      @empty
                          <p>No components available.</p>
                      @endforelse
                    </div>
                  </div>
                </div>
              </div>
  
              <!--
              - PRODUCT FEATURED
            -->
  
              <div class="product-featured">
                <h2 class="title">Deal of the day</h2>
  
                <div class="showcase-wrapper has-scrollbar">
                  <div class="showcase-container">
                    @forelse([$selectedLaptop] as $produkt)
                    <div class="showcase">
                        <div class="showcase-banner">
                            <img
                                src="{{ $produkt->photosProducts->isNotEmpty() ? asset('storage/images/' . $produkt->photosProducts->first()->path) : asset('storage/images/default.png') }}"
                                alt="{{ $produkt->name }}"
                                class="showcase-img" />
                        </div>
                
                        <div class="showcase-content">
                            <a href={{route('laptops.show', ['id' => $produkt->id])}}>
                                <h3 class="showcase-title">
                                    {{ $produkt->name }}
                                </h3>
                            </a>
                
                            <p class="showcase-desc">
                                Powerful, fast and infinitely flexible. Let your imagination run wild - the most 
                                powerful Surface laptop takes advantage of the best features of Windows 11. Act 
                                without limits, be inspired and pursue your passions.
                            </p>
                
                            <div class="price-box">
                                <p class="price">${{ $produkt->price }}</p>
                                <del>${{ $produkt->old_price }}</del>
                            </div>

                            <form action="{{ route('cart.add', ['id' => $produkt->id]) }}" method="POST">
                              @csrf
                              <button type="submit" class="btn-action add-cart-btn">
                                  add cart
                              </button>
                            </form>
                
                            <div class="showcase-status">
                                <div class="wrapper">
                                    
                                    <p>available: <b>{{ $availableCount }}</b></p>
                                </div>
                                <div class="showcase-status-bar" style="width: {{ $soldCount / max($soldCount+1, 1) * 100 }}%;"></div>
                            </div>
                
                            <div class="countdown-box">
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                                <div class="countdown-content">
                                  <p class="display-number">360</p>
                                  <p class="display-text">Days</p>
                                </div>
                                <div class="countdown-content">
                                  <p class="display-number">24</p>
                                  <p class="display-text">Hours</p>
                                </div>
      
                                <div class="countdown-content">
                                  <p class="display-number">59</p>
                                  <p class="display-text">Min</p>
                                </div>
      
                                <div class="countdown-content">
                                  <p class="display-number">00</p>
                                  <p class="display-text">Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No product found.</p>
                @endforelse
                
                  </div>
  
                  <div class="showcase-container">
                    @forelse([$selectedComputer] as $produkt)
                        <div class="showcase">
                            <div class="showcase-banner">
                                <img
                                    src="{{ $produkt->photosProducts->isNotEmpty() ? asset('storage/images/' . $produkt->photosProducts->first()->path) : asset('storage/images/default.png') }}"
                                    alt="{{ $produkt->name }}"
                                    class="showcase-img" />
                            </div>

                            <div class="showcase-content">
                                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                                    <h3 class="showcase-title">
                                        {{ $produkt->name }}
                                    </h3>
                                </a>

                                <p class="showcase-desc">
                                    Powerful, fast and infinitely flexible. Let your imagination run wild - the most 
                                    powerful Surface laptop takes advantage of the best features of Windows 11. Act 
                                    without limits, be inspired and pursue your passions.
                                </p>

                                <div class="price-box">
                                    <p class="price">${{ $produkt->price }}</p>
                                    <del>${{ $produkt->old_price }}</del>
                                </div>

                                <form action="{{ route('cart.add', ['id' => $produkt->id]) }}" method="POST">
                                  @csrf
                                  <button type="submit" class="btn-action add-cart-btn">
                                      add cart
                                  </button>
                                </form>

                                <div class="showcase-status">
                                    <div class="wrapper">
                                        
                                        <p>available: <b>{{ $availableCount2 }}</b></p>
                                    </div>
                                    <div class="showcase-status-bar" style="width: {{ ($soldCount2 / max($soldCount2 + $availableCount2, 1)) * 100 }}%;"></div>
                                </div>                              

                                <div class="countdown-box2">
                                  <p class="countdown-desc2">Hurry Up! Offer ends in:</p>
        
                                  <div class="countdown-content2">
                                    <p class="display-number2">24</p>
                                    <p class="display-text2">Hours</p>
                                  </div>
        
                                  <div class="countdown-content2">
                                    <p class="display-number2">59</p>
                                    <p class="display-text2">Min</p>
                                  </div>
        
                                  <div class="countdown-content2">
                                    <p class="display-number2">00</p>
                                    <p class="display-text2">Sec</p>
                                  </div>
                              </div>
  
                            </div>
                        </div>
                    @empty
                        <p>No product found.</p>
                    @endforelse

                  </div>
                </div>
              </div>
  
              <!--
              - PRODUCT GRID
            -->
  
              <div id="imageOverlay" class="image-overlay" style="display: none">
                <span class="close-btn">&times;</span>
                <img class="overlay-image" src="" alt="Powiększone zdjęcie" />
              </div>

              @if(session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if(session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
  
              <div class="product-main">
                <h2 class="title">Hot Offers</h2>
              
                  <div class="product-grid">
                    @forelse($produktyPromocyjne as $produkt)
                    <div class="showcase">
                      <div class="showcase-banner">
                        @if($produkt->photosProducts->isNotEmpty())
                            @if($produkt->photosProducts->count() >= 2)
                            <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                            </a>
                                @else
                            <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                                </a>
                                @endif
                            <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                            <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                        </a>
                            @else
                        <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                            <img src="{{ asset('storage') }}/images/default.png" alt="{{ $produkt->name }} - default photo" width="300" class="product-img default" />
                        </a>
                            @endif
                            
                        @if($produkt->sale)
                        <p class="showcase-badge">-{{ $produkt->sale->DISCOUNT_AMOUNT }}$</p>
                        @endif

                        <div class="showcase-actions">
                          <form action="{{ route('favorites.add', ['id' => $produkt->id]) }}" method="POST" style="display: inline;">
                              @csrf
                              <button type="submit" class="btn-action heart">
                                  <ion-icon name="heart-outline"></ion-icon>
                              </button>
                          </form>
                      
                            <button class="btn-action magnification">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                
                            <button class="btn-action repeat">
                                <ion-icon name="repeat-outline"></ion-icon>
                            </button>
                
                            <form action="{{ route('cart.add', ['id' => $produkt->id]) }}" method="POST">
                              @csrf
                              <button type="submit" class="btn-action bag-add">
                                  <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                            </form>
                        </div>
                      </div>

                      <div class="showcase-content">
                        <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}#{{ $produkt->productsCategories->first()->DESCRIPTION }}" class="showcase-category">{{ $produkt->productsCategories->first()->DESCRIPTION }}</a>

                        <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
                          <h3 class="showcase-title">{{ $produkt->name }}</h3>
                        </a>

                        <div class="price-box">
                          <p class="price">${{ $produkt->price }}</p>
                          <del>${{ $produkt->old_price }}</del>
                        </div>
                      </div>
                    </div>
                    @empty
                        <p>No promotional products.</p>
                    @endforelse
                  </div>
              </div>
            </div>
        </div>
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
  
        <!--
        - BLOG
      -->
  
        <div class="blog">
          <div class="container">
            <div class="blog-container has-scrollbar">
              <div class="blog-card">
                <a>
                  <img
                    src="{{ asset('storage/img/banners/montage1.webp') }}"
                    alt="Beginning the Build: Laying the Foundation with Core Components"
                    width="300"
                    class="blog-banner" />
                </a>
  
                <div class="blog-content">
                  <a href="{{ route('computers.index') }}" class="blog-category">Computers</a>
  
                  <a>
                    <h3 class="blog-title">
                      Beginning the Build: Laying the Foundation with Core
                      Components.
                    </h3>
                  </a>
  
                  <p class="blog-meta">
                    By <cite>Mr Piotr</cite> /
                    <time datetime="2022-04-06">Apr 06, 2023</time>
                  </p>
                </div>
              </div>
  
              <div class="blog-card">
                <a>
                  <img
                    src="{{ asset('storage/img/banners/montage2.webp') }}"
                    alt="Advanced Assembly: Integrating Power and Precision"
                    class="blog-banner"
                    width="300" />
                </a>
  
                <div class="blog-content">
                  <a href="{{ route('computers.index') }}" class="blog-category">Computers</a>
  
                  <h3>
                    <a class="blog-title"
                      >Advanced Assembly: Integrating Power and Precision.</a
                    >
                  </h3>
  
                  <p class="blog-meta">
                    By <cite>Mr Dawid</cite> /
                    <time datetime="2022-01-18">Jan 18, 2023</time>
                  </p>
                </div>
              </div>
  
              <div class="blog-card">
                <a>
                  <img
                    src="{{ asset('storage/img/banners/montage3.webp') }}"
                    alt="Final Touches: Crafting the Heart of High Performance"
                    class="blog-banner"
                    width="300" />
                </a>
  
                <div class="blog-content">
                  <a href="{{ route('components.index') }}" class="blog-category">Components</a>
  
                  <h3>
                    <a class="blog-title"
                      >Final Touches: Crafting the Heart of High Performance.</a
                    >
                  </h3>
  
                  <p class="blog-meta">
                    By <cite>Mr Piotr</cite> /
                    <time datetime="2022-02-10">Feb 10, 2023</time>
                  </p>
                </div>
              </div>
  
              <div class="blog-card">
                <a>
                  <img
                    src="{{ asset('storage/img/banners/montage4.webp') }}"
                    alt="Mastering the Machine: From Parts to Powerhouse"
                    class="blog-banner"
                    width="300" />
                </a>
  
                <div class="blog-content">
                  <a href="{{ route('components.index') }}" class="blog-category">Components</a>
  
                  <h3>
                    <a class="blog-title"
                      >Mastering the Machine: From Parts to Powerhouse.</a
                    >
                  </h3>
  
                  <p class="blog-meta">
                    By <cite>Mr Dawid</cite> /
                    <time datetime="2022-03-15">Mar 15, 2023</time>
                  </p>
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
        <script src="{{ asset('js/scriptIndex.js') }}"></script>
        <script src="{{ asset('js/photoIndex.js') }}"></script>
        <script src="{{ asset('js/rotationIndex.js') }}"></script>
        <script src="{{ asset('js/lanIndex.js') }}"></script>
        <script src="{{ asset('js/lanMoblieIndex.js') }}"></script>
        <script src="{{ asset('js/clocker.js') }}"></script>
        <script src="{{ asset('js/clocker2.js') }}"></script>
        <script src="{{ asset('js/counterCart.js') }}"></script>
  </body>
</html>
