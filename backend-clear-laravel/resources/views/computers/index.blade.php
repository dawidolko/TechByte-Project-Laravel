@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Home - Sklep komputerowy'])
  <head>
    <link rel="stylesheet" href="{{ asset('css/computersStyle.css') }}" />
  </head>
  <body>
    @include('shared.navbarComputers')
    <main>
        <!--
      - BANNER
    -->

    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img
              src="{{ asset('storage/img/banners/BannerComputer1.png') }}"
              alt="computer 1"
              class="banner-img" />

            <div class="banner-content">
              <h2 class="title-heading" id="titleheading">COMPUTERS</h2>
              <div class="subTitleCon">
                <div class="animation">
                  <div class="first banner-title"><div>Find</div></div>
                  <div class="second banner-title"><div>Check</div></div>
                  <div class="third banner-title"><div>Test it</div></div>
                </div>
                <p class="banner-title1">your computers</p>
              </div>
              <a href="{{ route('computers.index') }}" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img
              src="{{ asset('storage/img/banners/BannerComputer1.png') }}"
              alt="computer 2"
              class="banner-img" />

            <div class="banner-content">
              <h2 class="title-heading" id="titleheading">COMPUTERS</h2>
              <div class="subTitleCon">
                <div class="animation">
                  <div class="first banner-title"><div>Find</div></div>
                  <div class="second banner-title"><div>Check</div></div>
                  <div class="third banner-title"><div>Test it</div></div>
                </div>
                <p class="banner-title1">your computers</p>
              </div>

              <a href="{{ route('computers.index') }}" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img
              src="{{ asset('storage/img/banners/BannerComputer3.png') }}"
              alt="Computer3"
              class="banner-img" />

            <div class="banner-content">
              <h2 class="title-heading" id="titleheading">COMPUTERS</h2>
              <div class="subTitleCon">
                <div class="animation">
                  <div class="first banner-title"><div>Find</div></div>
                  <div class="second banner-title"><div>Check</div></div>
                  <div class="third banner-title"><div>Test it</div></div>
                </div>
                <p class="banner-title1">your computers</p>
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
                alt="computer gaming"
                width="30" />
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">All</h3>

                <p class="category-item-amount">({{ $iloscKomputerow }})</p>
              </div>

              <button class="category-btn" data-category="#all">Show all</button>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img
                src="{{ asset('storage/img/icons/Computers.jpg') }}"
                alt="learning"
                width="30" />
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Learning</h3>

                <p class="category-item-amount">({{ $iloscLearningComputers }})</p>
              </div>

              <button class="category-btn" data-category="#learning">Show learning</button>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img
                src="{{ asset('storage/img/icons/Computers.jpg') }}"
                alt="office"
                width="30" />
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Office</h3>

                <p class="category-item-amount">({{ $iloscOfficeComputers }})</p>
              </div>

              <button class="category-btn" data-category="#office">Show office</button>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img
                src="{{ asset('storage/img/icons/Computers.jpg') }}"
                alt="all"
                width="30" />
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Gaming</h3>

                <p class="category-item-amount">({{ $iloscGamingComputers }})</p>
              </div>

              <button class="category-btn" data-category="#gaming">Show gaming</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!--
        - SIDEBAR
      -->
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
                  <button class="category-btn" data-category="#gaming">Gaming
                    <data class="stock" title="Available Stock"
                      >{{ $iloscGamingComputers }}</data
                    >
                  </button>
                </li>

                <li class="sidebar-submenu-category">
                  <button class="category-btn" data-category="#learning">Learning
                    <data class="stock" title="Available Stock"
                      >{{ $iloscLearningComputers }}</data
                    >
                  </button>
                </li>

                <li class="sidebar-submenu-category">
                  <button class="category-btn" data-category="#office">Office
                    <p class="product-name">Office</p>
                    <data class="stock" title="Available Stock"
                      >{{ $iloscOfficeComputers }}</data
                    >
                  </button>                  </li>

                <li class="sidebar-submenu-category">
                  <button class="category-btn" data-category="#all">All
                    <data class="stock" title="Available Stock"
                      >{{ $iloscKomputerow }}</data
                    >
                  </button>
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
                  <a href="{{ route('laptops.index') }}#gaming" class="sidebar-submenu-title">
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
                  <a href="{{ route('laptops.index') }}#office" class="sidebar-submenu-title">
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
          <h3 class="showcase-heading">best sellers</h3>

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
                  <a href="{{ route($produkt->productsCategories->first()->CATEGORY_NAME) }}">
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
    </div>
      {{-- ! ! ! SEKCJA PODSTRONY ! ! !  --}}

      <div id="imageOverlay" class="image-overlay" style="display: none;">
        <span class="close-btn">&times;</span>
        <img class="overlay-image" src="" alt="Powiększone zdjęcie">
      </div>    


      <div class="container new-conti category-section" id="all">
        <div class="product-main">
          <h2 class="title">Computers All</h2>

          @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

          <div class="product-grid">
            @forelse($komputeryAll as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                </a>
                @else
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/default.png" alt="{{ $produkt->name }} - default photo" width="300" class="product-img default" />
                </a>
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

                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No computers found.</p>
            @endforelse
        </div>
      </div>
      </div>

          <!-- 
        PRODUCT GRID gaming
       -->

       <div class="container new-conti category-section" id="gaming">
        <div class="product-main">
          <h2 class="title">Computers Gaming</h2>

          <div class="product-grid">
            @forelse($komputeryGaming as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                    @else
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                    @endif
                    <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                </a>
                @else
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/default.png" alt="{{ $produkt->name }} - default photo" width="300" class="product-img default" />
                </a>
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

                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No computers found.</p>
            @endforelse
        </div>
      </div>
      </div>

           <!-- 
        PRODUCT GRID learning
       -->

       <div class="container new-conti category-section" id="learning">
        <div class="product-main">
          <h2 class="title">Computers Learning</h2>
          <div class="product-grid">
            @forelse($komputeryLearning as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                @if($produkt->photosProducts->count() >= 2)
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                @else
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                @endif
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
            </a>
            @else
            <a href={{route('computers.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/default.png" alt="{{ $produkt->name }} - default photo" width="300" class="product-img default" />
            </a>
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

                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No computers found.</p>
            @endforelse
        </div>
      </div>
      </div>

           <!-- 
        PRODUCT GRID office
       -->

       <div class="container new-conti category-section" id="office">
        <div class="product-main">
          <h2 class="title">Computers Office</h2>

          <div class="product-grid">
            @forelse($komputeryOffice as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                @if($produkt->photosProducts->count() >= 2)
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                @else
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                @endif
                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
            </a>
            @else
            <a href={{route('computers.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/default.png" alt="{{ $produkt->name }} - default photo" width="300" class="product-img default" />
            </a>
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

                <a href={{route('computers.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No computers found.</p>
            @endforelse
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

    </main>
    @include('shared.footerComputers')

    <!--
    - custom js link
    -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/counterCart.js') }}"></script>
    <script src="{{ asset('js/changeTheLanguage.js') }}"></script>
    <script src="{{ asset('js/counterCart.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const categoryButtons = document.querySelectorAll('.category-btn');
      
        function showSection(category) {
          document.querySelectorAll('.category-section').forEach(section => {
            section.style.display = 'none';
          });
      
          const sectionToShow = document.querySelector(category);
          if (sectionToShow) {
            sectionToShow.style.display = 'block';
          } else {
            console.error('No sections found for:', category);
          }
        }
      
        categoryButtons.forEach(button => {
          button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            showSection(category);
          });
        });
      
        const currentHash = window.location.hash;
        if (currentHash) {
          showSection(currentHash);
        } else {
          showSection('#all');
        }
      });
      </script>
      
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const overlay = document.getElementById('imageOverlay');

        function showOverlayImage(imgSrc) {
          overlay.style.display = 'flex';
          overlay.querySelector('.overlay-image').src = imgSrc;
        }

        document.querySelectorAll('.magnification').forEach(button => {
          button.addEventListener('click', function(event) {
            const imgSrc = this.closest('.showcase-banner').querySelector('.product-img.default').src;
            showOverlayImage(imgSrc);
            event.stopPropagation(); 
          });
        });

        document.querySelector('.image-overlay .close-btn').addEventListener('click', function() {
          overlay.style.display = 'none';
        });

        overlay.addEventListener('click', function(event) {
          if (event.target === overlay) {
            overlay.style.display = 'none';
          }
        });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        function rotateImages(showcaseBanner, rotation) {
          const images = showcaseBanner.querySelectorAll('img');
          images.forEach(img => {
            const currentRotation = parseInt(img.dataset.rotation) || 0;
            const newRotation = currentRotation + rotation;
            img.style.transform = `rotate(${newRotation}deg)`;
            img.dataset.rotation = newRotation % 360;
          });
        }
      
        document.querySelectorAll('.repeat').forEach(button => {
          button.addEventListener('click', function() {
            const showcaseBanner = this.closest('.showcase-banner');
            rotateImages(showcaseBanner, 90); 
          });
        });
      });
      </script>
</body>
</html>
