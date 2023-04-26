
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>Sofia Cake
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
            <a href="{{route('menu')}}" class="nav-item nav-link">Menu & Pricing</a>
            <a href="{{route('team')}}" class="nav-item nav-link">Master Chefs</a>
            <div class="nav-item dropdown">
                <a href="/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{route('servis')}}" class="dropdown-item">Our Service</a>
                    <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
