@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Computers - Sklep komputerowy'])
  <head>
    <link rel="stylesheet" href="{{ asset('css/componentsStyle.css') }}" />
  </head>
  <body>
    @include('shared.navbarComponents')
    <main>
      <div class="banner">
        <div class="container">
          <div class="slider-container has-scrollbar">
            <div class="slider-item">
              <img
                src="{{ asset('storage/img/banners/BannerComponents1.png') }}"
                alt="Components1"
                class="banner-img" />

              <div class="banner-content">
                <h2 class="title-heading" id="titleheading">COMPONENTS</h2>
                <div class="subTitleCon">
                  <div class="animation">
                    <div class="first banner-title"><div>Find</div></div>
                    <div class="second banner-title"><div>Check</div></div>
                    <div class="third banner-title"><div>Test it</div></div>
                  </div>
                  <p class="banner-title1">your components</p>
                </div>
                <a href="{{ route('components.index') }}" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img
                src="{{ asset('storage/img/banners/BannerComponents2.png') }}"
                alt="Components2"
                class="banner-img" />

              <div class="banner-content">
                <h2 class="title-heading" id="titleheading">COMPONENTS</h2>
                <div class="subTitleCon">
                  <div class="animation">
                    <div class="first banner-title"><div>Find</div></div>
                    <div class="second banner-title"><div>Check</div></div>
                    <div class="third banner-title"><div>Test it</div></div>
                  </div>
                  <p class="banner-title1">your components</p>
                </div>

                <a href="{{ route('components.index') }}" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img
                src="{{ asset('storage/img/banners/BannerComponents3.png') }}"
                alt="Components3"
                class="banner-img" />

              <div class="banner-content">
                <h2 class="title-heading" id="titleheading">COMPONENTS</h2>
                <div class="subTitleCon">
                  <div class="animation">
                    <div class="first banner-title"><div>Find</div></div>
                    <div class="second banner-title"><div>Check</div></div>
                    <div class="third banner-title"><div>Test it</div></div>
                  </div>
                  <p class="banner-title1">your components</p>
                </div>

                <a href="{{ route('components.index') }}" class="banner-btn">Shop now</a>
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
                  src="{{ asset('storage/img/icons/Components.jpg') }}"
                  alt="components all"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">All</h3>

                  <p class="category-item-amount">(546)</p>
                </div>

                <button class="category-btn" data-category="#all">
                  Show all
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/Processors.jpg') }}"
                  alt="procesors"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Processors</h3>

                  <p class="category-item-amount">({{ $iloscProcessors }})</p>
                </div>

                <button class="category-btn" data-category="#processors">
                  Show processors
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/Grafika.jpg') }}"
                  alt="graphics"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Graphics</h3>

                  <p class="category-item-amount">({{ $iloscGraphics }})</p>
                </div>

                <button class="category-btn" data-category="#graphics">
                  Show graphics
                </button>
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

                <button class="category-btn" data-category="#memoryRam">
                  Show memory ram
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/cooling.jpg') }}"
                  alt="cooling"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Cooling</h3>

                  <p class="category-item-amount">({{ $iloscCooling }})</p>
                </div>

                <button class="category-btn" data-category="#cooling">
                  Show cooling
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/fans.jpg') }}"
                  alt="fans"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Fans</h3>

                  <p class="category-item-amount">({{ $iloscFans }})</p>
                </div>

                <button class="category-btn" data-category="#fans">
                  Show fans
                </button>
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
                  <h3 class="category-item-title">Power Supply</h3>

                  <p class="category-item-amount">({{ $iloscPowerSupply }})</p>
                </div>

                <button class="category-btn" data-category="#powerSupply">
                  Show power supply
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/motherboard.jpg') }}"
                  alt="mobo"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Motherboards</h3>

                  <p class="category-item-amount">({{ $iloscMotherboards }})</p>
                </div>

                <button class="category-btn" data-category="#motherboards">
                  Show motherboards
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/case.jpg') }}"
                  alt="all"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Case</h3>

                  <p class="category-item-amount">({{ $iloscCases }})</p>
                </div>

                <button class="category-btn" data-category="#cases">
                  Show cases
                </button>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{ asset('storage/img/icons/ram.jpg') }}"
                  alt="disk"
                  width="30" />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Disk</h3>

                  <p class="category-item-amount">({{ $iloscDisks }})</p>
                </div>

                <button class="category-btn" data-category="#disks">
                  Show disks ram
                </button>
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
                    <a
                      href="computers.html#gaming"
                      class="sidebar-submenu-title">
                      <p class="product-name">Gaming</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGamingComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="computers.html#learning"
                      class="sidebar-submenu-title">
                      <p class="product-name">Learning</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscLearningComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="computers.html#office"
                      class="sidebar-submenu-title">
                      <p class="product-name">Office</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscOfficeComputers }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="computers.html#all" class="sidebar-submenu-title">
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
                    <a href="laptops.html#gaming" class="sidebar-submenu-title">
                      <p class="product-name">Gaming</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGamingLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a
                      href="laptops.html#learning"
                      class="sidebar-submenu-title">
                      <p class="product-name">Learning</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscLearningLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="laptops.html#office" class="sidebar-submenu-title">
                      <p class="product-name">Office</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscOfficeLaptops }}</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="laptops.html#all" class="sidebar-submenu-title">
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
                  <li class="sidebar-submenu-category ">
                    <button class="category-btn" data-category="#processors">
                      <p class="product-name">Processors</p>
                      <data class="stock" title="Available Stock"
                        >{{ $iloscProcessors }}</data
                      >
                    </button>
                  </li>

                  <li class="sidebar-submenu-category">
                    <button class="category-btn " data-category="#graphics">
                      Graphics
                      <data class="stock" title="Available Stock"
                        >{{ $iloscGraphics }}</data
                      >
                    </button>
                  </li>

                  <li class="sidebar-submenu-category">
                    <button class="category-btn" data-category="#memoryRam">
                      Memory RAM
                      <data class="stock" title="Available Stock"
                        >{{ $iloscMemoryRam }}</data
                      >
                    </button>
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
      {{-- ! ! ! SEKCJA PODSTRONY !!! --}}

      <div id="imageOverlay" class="image-overlay" style="display: none">
        <span class="close-btn">&times;</span>
        <img class="overlay-image" src="" alt="Powiększone zdjęcie" />
      </div>

      <div class="container new-conti category-section" id="all">
        <div class="product-main">
          <h2 class="title">Components All</h2>

          @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

          <!-- CASE -->
          <div class="product-grid">
            @forelse($komponentyAll as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID CASE
       -->

      <div class="container new-conti category-section" id="cases">
        <div class="product-main">
          <h2 class="title">Cases</h2>

          <div class="product-grid">
            @forelse($komponentyCases as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID GRAPHICS
       -->

      <div class="container new-conti category-section" id="graphics">
        <div class="product-main">
          <h2 class="title">Graphics</h2>

          <div class="product-grid">
            @forelse($komponentyGraphics as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID MEMORY RAM
       -->

      <div class="container new-conti category-section" id="memoryRam">
        <div class="product-main">
          <h2 class="title">Memory RAM</h2>

          <div class="product-grid">
            @forelse($komponentyMemoryRam as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse

          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID COOLING
       -->

      <div class="container new-conti category-section" id="cooling">
        <div class="product-main">
          <h2 class="title">Cooling</h2>

          <div class="product-grid">
            @forelse($komponentyCooling as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID FANS
       -->

      <div class="container new-conti category-section" id="fans">
        <div class="product-main">
          <h2 class="title">Fans</h2>

          <div class="product-grid">
            @forelse($komponentyFans as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                @if($produkt->photosProducts->count() >= 2)
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @endif
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                </a>
                @else
            <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID POWERSUPPLY
       -->

      <div class="container new-conti category-section" id="powerSupply">
        <div class="product-main">
          <h2 class="title">Power Supply</h2>

          <div class="product-grid">
            @forelse($komponentyPowerSupply as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID MOTHERBOARDS
       -->

      <div class="container new-conti category-section" id="motherboards">
        <div class="product-main">
          <h2 class="title">Motherboards</h2>

          <div class="product-grid">
            @forelse($komponentyMotherboards as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                    @if($produkt->photosProducts->count() >= 2)
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @else
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                        <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                    </a>
                        @endif
                    <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                    </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID PROCESSORS
       -->

      <div class="container new-conti category-section" id="processors">
        <div class="product-main">
          <h2 class="title">Processors</h2>

          <div class="product-grid">
            @forelse($komponentyProccesors as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                @if($produkt->photosProducts->count() >= 2)
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @endif
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                </a>
                @else
            <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>

                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- 
        PRODUCT GRID DISKS
       -->

      <div class="container new-conti category-section" id="disks">
        <div class="product-main">
          <h2 class="title">Disks</h2>

          <div class="product-grid">
            @forelse($komponentyDisks as $produkt)
            <div class="showcase">
              <div class="showcase-banner">
                @if($produkt->photosProducts->isNotEmpty())
                @if($produkt->photosProducts->count() >= 2)
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts[1]->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @else
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                    <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 2" width="300" class="product-img hover" />
                </a>
                    @endif
                <a href={{route('components.show', ['id' => $produkt->id])}}>
                <img src="{{ asset('storage') }}/images/{{ $produkt->photosProducts->first()->path }}" alt="{{ $produkt->name }} - photo 1" width="300" class="product-img default" />
                </a>
                @else
            <a href={{route('components.show', ['id' => $produkt->id])}}>
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

                <a href={{route('components.show', ['id' => $produkt->id])}}>
                  <h3 class="showcase-title">{{ $produkt->name }}</h3>
                </a>
                <div class="price-box">
                  <p class="price">${{ $produkt->price }}</p>
                  <del>${{ $produkt->old_price }}</del>
                </div>
              </div>
            </div>
            @empty
                <p>No components found.</p>
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
    @include('shared.footerComponents')

    <!--
    - custom js link
    -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/counterCart.js') }}"></script>
    <script src="{{ asset('js/changeTheLanguage.js') }}"></script>
    <script src="{{ asset('js/counterCart.js') }}"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const categoryButtons = document.querySelectorAll(".category-btn");

        function showSection(category) {
          document.querySelectorAll(".category-section").forEach((section) => {
            section.style.display = "none";
          });

          const sectionToShow = document.querySelector(category);
          if (sectionToShow) {
            sectionToShow.style.display = "block";
          } else {
            console.error("No sections found for:", category);
          }
        }

        categoryButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const category = this.getAttribute("data-category");
            showSection(category);
          });
        });

        const currentHash = window.location.hash;
        if (currentHash) {
          showSection(currentHash);
        } else {
          showSection("#all");
        }
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const overlay = document.getElementById("imageOverlay");

        function showOverlayImage(imgSrc) {
          overlay.style.display = "flex";
          overlay.querySelector(".overlay-image").src = imgSrc;
        }

        document.querySelectorAll(".magnification").forEach((button) => {
          button.addEventListener("click", function (event) {
            const imgSrc = this.closest(".showcase-banner").querySelector(
              ".product-img.default"
            ).src;
            showOverlayImage(imgSrc);
            event.stopPropagation();
          });
        });

        document
          .querySelector(".image-overlay .close-btn")
          .addEventListener("click", function () {
            overlay.style.display = "none";
          });

        overlay.addEventListener("click", function (event) {
          if (event.target === overlay) {
            overlay.style.display = "none";
          }
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        function rotateImages(showcaseBanner, rotation) {
          const images = showcaseBanner.querySelectorAll("img");
          images.forEach((img) => {
            const currentRotation = parseInt(img.dataset.rotation) || 0;
            const newRotation = currentRotation + rotation;
            img.style.transform = `rotate(${newRotation}deg)`;
            img.dataset.rotation = newRotation % 360;
          });
        }

        document.querySelectorAll(".repeat").forEach((button) => {
          button.addEventListener("click", function () {
            const showcaseBanner = this.closest(".showcase-banner");
            rotateImages(showcaseBanner, 90); 
          });
        });
      });
    </script>
</body>
</html>
