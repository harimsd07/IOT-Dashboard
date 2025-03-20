<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOT Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/swiper-bundle.min.css')}}">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Jost', sans-serif;
        }
        header {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 30;
            background-color: white;
        }
        .hero {
            height: 640px;
            background-image: url('/images/IOT-bg.jpg'); /* Corrected path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;

        }
        @media (min-width: 1200px) {
            .hero {
                height: 840px;
                border-bottom-left-radius: 290px;
            }
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }
        .bg-gray-50 {
            background-color: #f9fafb;
        }
        .bg-gray-800 {
            background-color: #1f2937;
        }
        .text-gray-400 {
            color: #9ca3af;
        }
        .text-gray-500 {
            color: #6b7280;
        }
        .text-gray-600 {
            color: #4b5563;
        }
        .text-gray-800 {
            color: #1f2937;
        }
        .text-green-500 {
            color: #10b981;
        }
        .text-blue-500 {
            color: #3b82f6;
        }
        .text-blue-300 {
            color: #93c5fd;
        }
        .text-pink-400 {
            color: #f0abfc;
        }
        .text-white{
            color: white;
        }
        .rounded-full{
          border-radius: 50%;
        }
        .shadow-xl{
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-100">

    <header class="sticky-top shadow-xl bg-white">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <a href="#" class="d-flex justify-content-center">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.freepik.com%2Fpremium-vector%2Fiot-internet-things-devices-connectivity-concepts-network-flat-style-with-people_194782-1655.jpg%3Fw%3D2000&f=1&nofb=1&ipt=8681133329df3b366d3069f5e1fa413b7260c83531577ec93c130c081241ff08&ipo=images" alt="LOGO" class="rounded-circle border border-4 border-primary" style="height: 96px; width: 96px;" />
            </a>
            <nav class="d-flex align-items-center">
                <div class="d-lg-none" id="nav_trigger_btn">
                    <i class="ri-menu-4-line text-4xl text-primary"></i>
                </div>
                <ul class="list-unstyled mb-0 d-none d-lg-flex gap-3" id="nav_menu">
                    <li><a href="#" class="text-decoration-none text-dark">Home</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">About</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Testimonials</a></li>
                    <li><a href="{{route('register')}}" class="text-decoration-none text-dark">Register</a></li>
                    <li><a href="{{route('login_form')}}" class="text-decoration-none text-dark">Login</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container-fluid p-0">
        <section class="hero d-flex align-items-center">
            <div class="container">
                <div class="text-center text-lg-start">
                    <h1 class="display-4 text-white">Let Your Home Be Unique</h1>
                    <p class="lead text-white mb-4">
                        There are many variations of the passages of lorem Ipsum from available, variations of the passages.
                    </p>
                    <button class="btn btn-primary">Get free estimation <i class="ri-arrow-right-line text-accent"></i></button>
                </div>
            </div>
        </section>
    </main>


    <div class="h-[1200px]">
        <section class="py-5 bg-gray-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="w-100">
                            <h2 class="mb-3">About Us</h2>
                            <h2 class="mb-3 fw-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">WHY CHOOSE US?</h2>
                            <p class="mb-4 text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus hic atque magni minus aliquam, eos quam incidunt nam iusto sunt voluptates inventore a veritatis doloremque corrupti. Veritatis est expedita cupiditate!</p>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center py-2">
                                    <i class="ri-ri-calendar-2-line text-gray-500 me-2"></i>
                                    <span class="text-gray-500">Faster Processing and Delivery</span>
                                </li>
                                <li class="d-flex align-items-center py-2">
                                    <i class="ri-money-dollar-circle-line text-gray-500 me-2"></i>
                                    <span class="text-gray-500">Easy Payments</span>
                                </li>
                                <li class="d-flex align-items-center py-2">
                                    <i class="ri-shield-check-line text-gray-500 me-2"></i>
                                    <span class="text-gray-500">100% Protection and Security for Your App</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsvitla.com%2Fuploads%2F0%2F2327-iot.jpg%3F1562227999&f=1&nofb=1&ipt=d775905ee589077df29d9035dc91583de3c4cc9aa65ae6742132e5bf9e0aaf93&ipo=images" alt="feature image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-gray-800">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-6 fw-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">Testimonial</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card bg-white rounded-lg shadow-lg">
                            <div class="d-flex justify-content-center mt-n5 mb-3">
                                <img src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="rounded-circle border border-2 border-green-500" style="width: 80px; height: 80px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold text-gray-800">Home Automation</h5>
                                <p class="card-text text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                                <a href="#" class="text-green-500 fw-medium">John Doe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-white rounded-lg shadow-lg">
                            <div class="d-flex justify-content-center mt-n5 mb-3">
                                <img src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg" class="rounded-circle border border-2 border-green-500" style="width: 80px; height: 80px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold text-gray-800">Home Automation</h5>
                                <p class="card-text text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                                <a href="#" class="text-green-500 fw-medium">Jane Smith</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-white rounded-lg shadow-lg">
                            <div class="d-flex justify-content-center mt-n5 mb-3">
                                <img src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg" class="rounded-circle border border-2 border-green-500" style="width: 80px; height: 80px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold text-gray-800">Home Automation</h5>
                                <p class="card-text text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                                <a href="#" class="text-green-500 fw-medium">David Lee</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-gray-800 border-top border-gray-200 py-4">
            <div class="container d-flex flex-wrap justify-content-center align-items-center justify-content-lg-between">
                <ul class="list-inline mb-0 text-white">
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li class="list-inline-item ms-4"><a href="#" class="text-white text-decoration-none">About</a></li>
                    <li class="list-inline-item ms-4"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    <li class="list-inline-item ms-4"><a href="#" class="text-white text-decoration-none">Terms</a></li>
                </ul>
                <div class="mt-4 mt-lg-0">
                    <a href="#" class="me-3 text-blue-600"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="me-3 text-blue-300"><i class="ri-twitter-fill"></i></a>
                    <a href="#" class="me-3 text-pink-400"><i class="ri-instagram-fill"></i></a>
                    <a href="#" class="text-blue-500"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{ URL::asset('js/swiper-bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navTriggerBtn = document.getElementById('nav_trigger_btn');
            const navMenu = document.getElementById('nav_menu');

            if (navTriggerBtn && navMenu) {
                navTriggerBtn.addEventListener('click', function() {
                    navMenu.classList.toggle('d-none');
                });
            }
        });
    </script>
</body>
</html>
