<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <link href="{{ asset('/css/adminDashboardHome.css') }}" rel="stylesheet" />
    <title>Edit Customer - Sklep komputerowy</title>
    <link
      rel="shortcut icon"
      href="{{ asset('storage/img/logo/Logo2.webp') }}"
      type="image/x-icon" />
    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        feather.replace();
    </script>
    <script src="/a11y/a11y-panel.js" data-accent="#1d4ed8" defer></script>
</head>

<body>
    <div class="admin-panel">
        <aside class="admin-aside">
            <div class="admin-aside__title">TechByte Computer Store</div>
            <div class="admin-aside__desc fs-5">{{ $jobPosition }}</div>
            <nav class="admin-aside__nav">
                <ul class="admin-aside__list">
                    <li>
                        <a href="{{ route('employee.dashboard') }}" class="admin-aside__link">
                            <i data-feather="home" class="admin-aside__link-icon"></i>Home</a>
                    </li>
                    <br />
                    <li>
                        <a href="{{ route('employee.orders') }}" class="admin-aside__link">
                            <i data-feather="shopping-cart" class="admin-aside__link-icon"></i>Orders</a>
                    </li>
                    <li>
                        <a href="{{ route('employee.products') }}" class="admin-aside__link">
                            <i data-feather="box" class="admin-aside__link-icon"></i>Products</a>
                    </li>
                    <li>
                        <a href="{{ route('employee.customers') }}" class="admin-aside__link">
                            <i data-feather="users" class="admin-aside__link-icon"></i>Customers</a>
                    </li>
                    <li>
                        <a href="{{ route('employee.complaints') }}" class="admin-aside__link">
                            <i data-feather="list" class="admin-aside__link-icon"></i>Complaints</a>
                    </li>
                    <li>
                        <a href="{{ route('index') }}" class="admin-aside__link">
                            <i data-feather="arrow-left" class="admin-aside__link-icon"></i>Back to page</a>
                    </li>     
                    <br />
                    <li>
                        <a href="{{ route('logout') }}" class="admin-aside__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i data-feather="log-out" class="admin-aside__link-icon"></i>Logout
                        </a>
                    </li>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        </aside>
        <div class="admin-wrapper">
            <header class="admin-header">
                <p class="admin-header__title">Final project on Databases - Dawid Olko & Piotr Smoła</p>
                <div class="dropdown" id="navbar-user admin-header__user">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="admin-header__user-av rounded-circle" src="{{ asset('storage/img/icons/avatar.svg') }}" alt="logo awatar">
                        @if (Auth::check())
                            <span class="ms-2 admin-header__user-hello" style="color: inherit; text-decoration: none;">
                                    Hello, {{ $employeeName }} {{ $employeeLastName }}
                            </span>
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        @if (Auth::check())
                        <li><a class="dropdown-item" href="{{ route('employee.dashboard') }}">My profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('cart') }}">Cart</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-link dropdown-item" style="margin-left: 15px; padding: 0; background: none; border: none;">Log out</button>
                            </form>
                        </li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>
                    @endif  
                    </ul>
                </div>
            </header>
            <main class="admin-main">
                <div class="container admin-form">

                    
              @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
          @endif

                    <div class="row mb-3">
                        <h1>Edit Customer #{{ $customer->id }}</h1>
                        <a class="" href="{{ route('employee.customers') }}">Go to all customers</a>
                    </div>
                
                    @if(session('success__edit'))
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            {{ session('success__edit') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(session('error__edit'))
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            {{ session('error__edit') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                
                    <form method="POST" action="{{ route('employee.updateCustomer', $customer->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input value="{{ $customer->name }}" id="name" name="name" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input value="{{ $customer->last_name }}" id="last_name" name="last_name" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="delivery_address" class="form-label">Delivery Address</label>
                                <input value="{{ $customer->delivery_address }}" id="delivery_address" name="delivery_address" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone</label>
                                <input id="phone_number" value="{{ $customer->phone_number }}" name="phone_number" type="tel" maxlength="20" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-Mail</label>
                                <input value="{{ $customer->email }}" id="email" name="email" type="email" maxlength="100" class="form-control"/>
                            </div>
                            <input value="{{ $customer->id }}" name="id" type="hidden"/>
                            <input class="btn btn-primary" type="submit" value="Edit"/>
                        </div>
                    </form>
                                                           
                </div>
            </div>
        </div>
    
        <!-- Scripts for dynamic parts of the page, like charts or interactive elements -->
        <script>
            feather.replace();
        </script>
    </body>
    
    </html>