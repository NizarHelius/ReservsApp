<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookApp - Find and Book Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('images/reservs_app_logo.jpg') }}" alt="Logo" style="height:40px; margin-left: 40px;">
            </a>
            <div class="ms-auto d-flex align-items-center" style="gap: 0.5rem;">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-danger m-2 px-4">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-danger m-2 px-4">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-danger m-2 px-4">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Find Anything From Nearest Location To Make A Booking</h1>
                    <p class="hero-subtitle">Use BookApp for advanced information booking services to get what you want from places you'll enjoy.</p>

                    <div class="search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="btn search-btn" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button class="btn btn-outline-secondary"><i class="fas fa-map-marker-alt"></i> Select Location</button>
                        <button class="btn btn-outline-secondary"><i class="fas fa-calendar-alt"></i> Select Category</button>
                        <button class="btn btn-primary">FIND</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/hero-illustration.png" alt="Booking Illustration" class="img-fluid hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container text-center">
            <h2 class="section-title">Most Popular Categories</h2>

            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="category-card">
                        <div class="category-icon orange">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h5>Plumber</h5>
                        <p>Plumbing services</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="category-card">
                        <div class="category-icon blue">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h5>Gym Center</h5>
                        <p>Fitness services</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="category-card">
                        <div class="category-icon purple">
                            <i class="fas fa-broom"></i>
                        </div>
                        <h5>Cleaning</h5>
                        <p>Cleaning services</p>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="section-title text-white">How appointment Booking System Works</h2>
                    <p class="text-white-50">Our booking system has the easiest functionality, find what you want and book it with a few clicks.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="work-card purple-card">
                                <div class="work-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h5>Find Services</h5>
                                <p>Find the services of your choice at your desired location</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="work-card blue-card">
                                <div class="work-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h5>Booking</h5>
                                <p>Book your appointment with your preferred time slot</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="featured-services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Top Featured Services</h2>
                <div class="navigation-buttons">
                    <button class="nav-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="row services-slider">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/service1.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.8
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$35.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/service2.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.9
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$50.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/service3.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.7
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$45.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discount Banner -->
    <section class="discount-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white">Now Get 50% Discount For First Booking</h2>
                    <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod assumenda. Amet dolores, harum voluptas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Booking Services -->
    <section class="popular-services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Most Popular Booking Services We Offer</h2>
                <div class="view-all-btn">
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>

            <div class="filter-buttons">
                <button class="filter-btn active">All Services</button>
                <button class="filter-btn">Online Shop</button>
                <button class="filter-btn">Doctor</button>
                <button class="filter-btn">Health Center</button>
                <button class="filter-btn">Fitness</button>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="service-card">
                        <img src="images/service4.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.8
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$35.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <img src="images/service5.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating blue-rating">
                                <i class="fas fa-star"></i> 4.9
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$40.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <img src="images/service6.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.7
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$45.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card">
                        <img src="images/service7.jpg" alt="Service" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.8
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$35.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Shop Section -->
    <section class="featured-shop">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Top Featured Shop</h2>
                <div class="view-all-btn">
                    <a href="#" class="btn btn-primary">View All Shop</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/shop1.jpg" alt="Shop" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.8
                            </div>
                            <h5>City Town Doctor Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$35.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/shop2.jpg" alt="Shop" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.9
                            </div>
                            <h5>City Town Barber Shop</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$40.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="images/shop3.jpg" alt="Shop" class="img-fluid">
                        <div class="service-info">
                            <div class="service-rating">
                                <i class="fas fa-star"></i> 4.7
                            </div>
                            <h5>FITNESS</h5>
                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                            <div class="price-info">
                                <div>
                                    <span class="price">$45.00</span>
                                    <span class="price-text">Starting Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">What Customers Say About Our Booking Systems</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quis assumenda. Amet dolores, harum voluptas.</p>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="images/avatar.jpg" alt="Customer" class="testimonial-avatar">
                            <div>
                                <h5>James Rodrigo</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quis assumenda. Amet dolores, harum voluptas."</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/testimonial-illustration.png" alt="Testimonial" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <img src="images/logo.png" alt="BookApp" class="img-fluid">
                        </div>
                        <p>A professional booking services platform</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5>Home</h5>
                        <ul class="footer-links">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Providers</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Categories</h5>
                        <ul class="footer-links">
                            <li><a href="#">Cleaning</a></li>
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Saloon</a></li>
                            <li><a href="#">Transport</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Newsletter</h5>
                        <p>Subscribe to get the latest news and updates</p>
                        <div class="newsletter-form">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright">Copyright ©2024 BookApp. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <ul class="footer-bottom-links">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>