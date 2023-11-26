<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">Kopipopi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/dashboard/menus">Menus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/banners">Banners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/review">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/financials">Financials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/contact">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/galleries">Galleries</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"> My
                                        Dashboard</i></a>
                            </li>
                            <li>
                                <hr class="drop down-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="/">Homepage</a>
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"> Logout</i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
