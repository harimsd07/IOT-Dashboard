<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IOT Landing Page</title>
        @vite('resources/css/app.css')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('css/swiper-bundle.min.css')}}">
    </head>
    <body class="bg-gray-100">

        <header class="sticky top-0 h-[px] shadow-xl z-30 bg-white">
            <div class="container mx-auto flex justify-between h-full items-center">

                <a href="#" class="flex justify-center">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.freepik.com%2Fpremium-vector%2Fiot-internet-things-devices-connectivity-concepts-network-flat-style-with-people_194782-1655.jpg%3Fw%3D2000&f=1&nofb=1&ipt=8681133329df3b366d3069f5e1fa413b7260c83531577ec93c130c081241ff08&ipo=images" alt="LOGO" class="h-24 w-24 rounded-full border-4 border-blue-500" />
                </a>


                <nav>

                    <div class="cursor-pointer lg:hidden" id="nav_trigger_btn">
                        <i class="ri-menu-4-line text-4xl text-primary"></i>
                    </div>

                    <ul class="fixed w-full h-0 p-0  bg-white overflow-hidden border-t
                    top-[90px] left-0 right-0 flex flex-col gap-4 lg:relative lg:flex-row lg:p-0 lg:top-0 lg:border-none lg:h-full transition-all duration-300" id="nav_menu">

                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('login_form')}}">Login</a></li>
                        <li><a href="#">Contact </a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <main class="max-w-[1920px] mx-auto bg-white overflow-hidden">
            {{-- <div class="xl:bg-grid xl:bg-center xl:bg-repear-y fixed top-0 bottom-0 left-0 right-0"></div> --}}

            <section class="hero h-[640px] xl:h-[840px] bg-hero bg-center lg:bg-center bg-n-repeat bg-fixed xl:rounded-bl-[290px] relative z-20">

                <div class="container mx-auto h-full flex items-center xl:justify-start">

                    <div class="hero__text w-[567px] flex flex-col items-center text-center xl:text-left lg:items-start">
                        <h1 class="h1 text-white">Let Your Home Be Unique</h1>
                        <p class="mb-8 text-white">
                            There are many variations of the passages of lorem Ipsum from available,variations of the passages.
                        </p>
                        <button class="btn btn-primary mx-auto xl:mx-6">Get free estimation
                            <i class="ri-arrow-right-line text-accent"></i>
                        </button>
                    </div>
                </div>
            </section>
        </main>

        <div class="h-[1200px]">
            <section class="py-20 bg-gray-50">
                <div class="container items-center max-w-6xl  mx-auto sm:px-20 md:px-32 lg:px-16">
                  <div class="flex flex-wrap items-center -mx-3">
                    <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                      <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">About Us</h2>
                        <h2
                          class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                          WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Lorem ipsum dolor sit amet consectetur
                          adipisicing elit. Natus hic atque magni minus aliquam, eos quam incidunt nam iusto sunt voluptates
                          inventore a veritatis doloremque corrupti. Veritatis est expedita cupiditate!</p>
                        <ul>
                          <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                              </path>
                            </svg>
                            <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
                          </li>
                          <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="font-medium text-gray-500">Easy Payments</span>
                          </li>
                          <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                              </path>
                            </svg>
                            <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsvitla.com%2Fuploads%2F0%2F2327-iot.jpg%3F1562227999&f=1&nofb=1&ipt=d775905ee589077df29d9035dc91583de3c4cc9aa65ae6742132e5bf9e0aaf93&ipo=images" alt="feature image"></div>
                  </div>
                </div>
              </section>

              <section class="pt-4 pb-12 bg-gray-800">
                <div class="my-16 text-center">
                  <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    Testimonial </h2>
                  <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
                </div>
                <div class="grid gap-2 lg:grid-cols-3">
                  <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center -mt-16 md:justify-end">
                      <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                    </div>
                    <div>
                      <h2 class="text-3xl font-semibold text-gray-800">Home Automation</h2>
                      <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                    </div>
                    <div class="flex justify-end mt-4">
                      <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                    </div>
                  </div>
                  <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center -mt-16 md:justify-end">
                      <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                    </div>
                    <div>
                      <h2 class="text-3xl font-semibold text-gray-800">Home Automation</h2>
                      <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                    </div>
                    <div class="flex justify-end mt-4">
                      <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                    </div>
                  </div>
                  <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center -mt-16 md:justify-end">
                      <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                    </div>
                    <div>
                      <h2 class="text-3xl font-semibold text-gray-800">Home Automation</h2>
                      <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                    </div>
                    <div class="flex justify-end mt-4">
                      <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                    </div>
                  </div>
                </div>
              </section>
           {{-- Footer  --}}
    <footer class="bg-gray-800 border-t border-gray-200">
            <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
              <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                  <li>Home</li>
                  <li>About</li>
                  <li>Contact</li>
                  <li>Terms</li>
                </ul>
              </div>
              <div class="flex justify-center mt-4 lg:mt-0">
                <a>
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                    <path stroke="none"
                      d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
                </a>
              </div>
            </div>
     </footer>
        </div>


    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{ URL::asset('js/swiper-bundle.min.js')}}"></script>
    </body>
</html>
