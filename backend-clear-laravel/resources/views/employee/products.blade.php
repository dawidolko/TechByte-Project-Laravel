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
    <title>Products - Sklep komputerowy</title>
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
    <style>
        .description-cell {
            max-height: 100px;
            overflow-y: auto; 
            word-wrap: break-word; 
        }
    </style>    
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
                <div class="container">

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                
                    <div class="d-flex justify-content-between align-items-end mb-5 pb-2">
                        <h1>Products</h1>
                        <div class="d-flex align-items-end">
                            <div class="me-4">
                                <a class="btn btn-success" href="{{ route('employee.addProduct') }}">Add new product</a>
                            </div>
                            <form method="GET" action="{{ route('employee.listProducts') }}">
                                <div class="d-flex align-items-end">
                                    <div class="me-2" role="group" aria-label="Third group">
                                        <label class="form-label">Searching:</label>
                                        <input name="search" class="form-control" type="search" placeholder="Search product" value="{{ request('search') }}" />
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">#</th>
                                <th scope="col" style="width: 20%">Name</th>
                                <th scope="col" style="width: 10%">Price</th>
                                <th scope="col" style="width: 5%">Quantities Available</th>
                                <th scope="col" style="width: 5%">Sale ID</th>
                                <th scope="col" style="width: 5%">Old Price</th>
                                <th scope="col" style="width: 30%;">Description</th>
                                <th scope="col" style="width: 10%">Category</th>
                                <th scope="col" style="width: 10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <th class="align-middle" scope="row">{{ $product->id }}</th>
                                <td class="align-middle">{{ $product->name }}</td>
                                <td class="align-middle">{{ $product->price }} $</td>
                                <td class="align-middle">{{ $product->quantities_available }}</td>
                                <td class="align-middle">{{ $product->sale_id }}</td>
                                <td class="align-middle">{{ $product->old_price }}</td>
                                <td class="align-middle description-cell">{{ $product->description }}</td>
                                <td class="align-middle">
                                    @foreach ($product->categories as $category)
                                    {{ $category->description }}
                                @endforeach
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                        <a class="table-button table-button--edit" href="{{ route('employee.editProduct', ['id' => $product->id]) }}">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('employee.destroyProduct', ['id' => $product->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="table-button table-button--delete" type="submit" onclick="return confirm('Are you sure you want to delete this product?');">
                                                <i data-feather="x-circle"></i>
                                            </button>
                                        </form>                                        
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th scope="row" colspan="8">No products.</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $products->links('pagination::bootstrap-4') }} 
                        </div>
                    </div>
                </div>                
            </main>
            </div>
        </div>
    
        <!-- Scripts for dynamic parts of the page, like charts or interactive elements -->
        <script>
            feather.replace();
        </script>
    </body>
    
    </html>