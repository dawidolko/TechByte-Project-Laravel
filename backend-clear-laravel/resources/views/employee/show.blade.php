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
    <title>Dashboard - Sklep komputerowy</title>
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
                <div class="container">
                    <div class="row mb-4">
                        <h1 class="mb-2">Order #{{ $order->id }}</h1>
                        <p>Date of Order: {{ $order->date_order }} - <a class="" href="{{ route("employee.orders") }}">Back to all orders</a></p>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
            
                <div class="col-md-4">
                    <div class="">
                        <label class="form-label">Customer - <a href="{{ route('employee.customer', $order->customers_id) }}">Go to</a></label>
                        <ol class="list-group mb-4">
                            @if ($order->customer)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $order->customer->name }} {{ $order->customer->last_name }}</div>
                                        Name and Last name
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $order->customer->email }}</div>
                                        E-Mail
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">+48{{ $order->customer->phone_number }}</div>
                                        Phone number
                                    </div>
                                </li>
                            @else
                                <li class="list-group-item">
                                    No customer details available.
                                </li>
                                @endif
                            
            
                                <div class="mb-4">
                                    <label class="form-label">Address</label>
                                    <ol class="list-group">
                                        @if ($order->customer)
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div>{{ $order->customer->delivery_address }}</div>
                                                </div>
                                            </li>
                                        @else
                                            <li class="list-group-item">No address details available.</li>
                                        @endif
                                    </ol>
                                </div>
            
                            <div style="border-top: 1px solid #eaeaea; border-bottom: 1px solid #eaeaea;" class="pt-4 pb-4 mb-3">
                                <form method="POST" action="{{ route('employee.updateOrderStatus', $order->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <label for="status_order" class="form-label">Change order status</label>
                                    <div class="input-group mb-3">
                                        <select {{ in_array($order->status, ['delivered', 'cancelled']) ? 'disabled' : '' }} class="form-select me-3" name="status_order" id="status_order" aria-label="Default select example">
                                            <option {{ $order->status == 'ordered' ? 'selected' : '' }} value="ordered">Ordered</option>
                                            <option {{ $order->status == 'accepted' ? 'selected' : '' }} value="accepted">Accepted</option>
                                            <option {{ $order->status == 'awaiting payment' ? 'selected' : '' }} value="awaiting payment">Waiting for payment</option>
                                            <option {{ $order->status == 'shipped' ? 'selected' : '' }} value="shipped">Shipped</option>
                                            <option {{ $order->status == 'delivered' ? 'selected' : '' }} value="delivered">Delivered</option>
                                            <option {{ $order->status == 'cancelled' ? 'selected' : '' }} value="cancelled">Cancelled</option>
                                        </select>
                                        <input type="submit" class="btn btn-success" value="Change" {{ in_array($order->status, ['delivered', 'cancelled']) ? 'disabled' : '' }}>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                        {{-- <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label">Ordered products</label>
                                <ol class="list-group list-group-numbered order-cart">
                                    @foreach($order->ordersProducts as $orderProduct)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">{{ $orderProduct->product->NAME }}</div>
                                                <p class="mb-1">Price:
                                                    {{ $orderProduct->product->PRICE }}
                                                    zł,
                                                </p>
                                            </div>
                                            <span class="badge bg-primary rounded-pill me-1">quantity:
                                                {{ $orderProduct->pivot->quantity }}</span>
                                        </li>
                                        @endforeach
                                </ol>
                            </div>
                            <div class="mb-3" style="text-align: right;">
                                <div>Total value of the order:</div>
                                <h2>
                                    <span class="cart-value">{{ $order->totalAmount }}</span>
                                    $</h2>
                            </div>
                        </div>
                    </div> --}}


            </main>
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>
