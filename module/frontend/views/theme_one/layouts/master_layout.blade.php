<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum knowledge</title>
    <link href="{{ callFrontendStaticResources('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100 font-Roboto">
<div class="root">

    <!--Header-->
    <header>
        <div id="head" class="bg-blue-500 py-2 px-5 text-xs text-white text-center">
            <div class="notification max-w-7xl mx-auto relative">
                <p class="inline">We use cookies to give you a better experience. Carry on browsing if you're happy with this, or read our <a class="text-pink-500" href="#">
                        cookies policy
                    </a> for more information.</p>
                <a id="close" href="#" class="inline-block absolute bottom-0 right-0">
              <span class="text-base leading-none">
                &times;
              </span>
                </a>
            </div>
        </div>
        <div id="main" class="grid md:grid-cols-3 gap-4 bg-white shadow-lg px-5 py-2 lg:px-20 lg:py-0 lg:border-0 border-b lg:border-none">

            <div class="flex justify-between items-center">
                <div class="w-3/4">
                    <img src="{{ callFrontendStaticResources('img/logo.jpg') }}" alt="logo">
                </div>
                <div id="burger" class="px-4 cursor-pointer md:hidden">
                    <svg class="w-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
            </div>
            <div id="menu" class="md:col-span-2 md:block hidden">
                <div class="h-full md:flex md:justify-between">
                    <nav class="md:flex md:items-center relative sm:p-5">
                        <ul>
                            <li class="md:inline-block lg:border-0 sm:border-b sm:p-2"><a href="#" class="font-medium text-gray-500 hover:text-gray-900 px-5">Home</a></li>
                            <li class="md:inline-block lg:border-0 sm:border-b sm:p-2"><a href="#" class="font-medium text-gray-500 hover:text-gray-900 px-5">About</a></li>
                            <li x-data="{ dropdownOpen: false }" class="md:inline-block lg:border-0 sm:border-b sm:p-2 relative">
                                <svg class="h-5 w-5 lg:absolute lg:right-0 lg:top-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                <a href="#" @click="dropdownOpen = !dropdownOpen" class="font-medium text-gray-500 hover:text-gray-900 px-5">Courses</a>
                                <ul x-show="dropdownOpen" class="md:bg-white md:absolute md:w-96 md:rounded-lg p-8 md:shadow-lg md:ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum UCAT
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum University Application Review
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum WACE
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum GATE (For Year 5 students of 2021)
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum GAMSAT
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum Future Medicine Students
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Spectrum First Aid
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Maths – Secondary (Y-8,Y-9,Y-10)
                                                </p>
                                                <p class="mt-1 text-xs text-gray-500">
                                                    Spectrum Mock Interviews for Medicine and Dentistry
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="md:inline-block lg:border-0 sm:border-b sm:p-2"><a href="#" class="font-medium text-gray-500 hover:text-gray-900 px-5">FAQ</a></li>
                            <li class="md:inline-block lg:border-0 sm:border-b sm:p-2"><a href="#" class="font-medium text-gray-500 hover:text-gray-900 px-5">Contact us</a></li>
                        </ul>
                    </nav>
                    <div class="md:flex md:items-center">
                <span class="mx-2 inline-flex p-2 relative">
                  <a href="#">
                    <span class="w-5 h-5 leading-none p-1 bg-green-500 inline-block rounded-full absolute -top-1 -right-1 text-white text-xs text-center">3</span>
                    <svg class="h-6 w-6 hover:text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </a>
                </span>
                        <span>
                  <a href="#" class="ml-8 whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    Sign in
                  </a>
                </span>
                        <span>
                  <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-600">
                    Sign up
                  </a>
                </span>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <main>

        <!--Hero section-->
        <div id="hero" class="mt-5 mx-auto px-4 sm:mt-12 sm:px-6 md:mt-16">
            <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                <div class="md:px-10 md:py-7">
                    <h1 class="font-roboto uppercase text-gray-700 sm:text-5xl md:text-5xl font-bold subpixel-antialiased">
                        <span class="block mb-2 md:text-6xl text-blue-500">Spectrum</span>
                        <span class="block">Knowledge Consultants</span>
                    </h1>
                    <p class="my-3 text-gray-500 sm:mt-5 sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 subpixel-antialiased">
                        Our philosophy is centred around the belief that preparation is the key to excellence. We aim to provide quality and affordable educational services to our students in the form of weekly classes as well as mock tests.
                    </p>
                    <div class="md:max-w-lg">
                        <from action="#">
                            <div class="relative">
                                <input type="text" class="h-14 w-full border border-gray-300 pl-10 pr-20 rounded-lg focus:shadow focus:outline-none" placeholder="Search course here.">
                                <div class="absolute top-2 right-2">
                                    <button class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-Indigo-600">Search</button>
                                </div>
                            </div>
                        </from>
                    </div>
                </div>
                <div>
                    <div class="">
                        <img class="w-full object-cover" src="{{ callFrontendStaticResources('img/hero-bg-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--Section next-->
        <div class="py-20">
            <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-8">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                    <div class="flex justify-center items-center">
                        <div>
                            <dl class="md:grid md:grid-cols-2 md:gap-8">

                                <div class="group bg-white hover:bg-blue-400 p-5 justify-start items-center rounded-md cursor-pointer">
                                    <dt>
                                        <div class="rounded-full flex items-center justify-center text-white p-2">
                                            <svg width="80" height="80" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                                <path d="M190.3,68.6L102,40.7c-0.8-0.3-1.7-0.3-2.5,0L57.2,54l1.2,3.8l42.2-13.3c0,0,0.1,0,0.1,0l88.3,27.9
                              c0.1,0,0.1,0,0.1,0.2c0,0.1-0.1,0.2-0.1,0.2l-51.2,16.1l1.2,3.8l25.1-7.9v41.5c-19.6,10.1-49.8,15.1-79.1,13l-0.3,4
                              c4.5,0.3,9,0.5,13.5,0.5c26.1,0,51.6-5.3,68.9-14.5l1.1-0.6V83.5l22-6.9c1.8-0.5,2.9-2.2,2.9-4C193.2,70.7,192,69.1,190.3,68.6z"/>
                                                <path d="M50.6,89.7l47.8,14.9c0.4,0.1,0.8,0.2,1.2,0.2c0.4,0,0.8-0.1,1.3-0.2l31.6-9.9l-1.2-3.8l-31.6,9.9
                              c0,0-0.1,0-0.1,0L54.7,86.8l37.7-12.2c1.6,2.1,4.1,3.4,6.9,3.4c4.8,0,8.7-3.9,8.7-8.7s-3.9-8.7-8.7-8.7c-4.8,0-8.7,3.9-8.7,8.7
                              c0,0.5,0.1,1.1,0.2,1.6L48.1,84.8L10.9,73.2c-0.1,0-0.1,0-0.1-0.2c0-0.1,0.1-0.2,0.1-0.2L48.4,61l-1.2-3.8L9.7,69
                              c-1.8,0.6-2.9,2.2-2.9,4c0,1.8,1.2,3.4,2.9,4L31,83.6v44.7l1,0.6c4.3,2.5,9.2,4.8,14.6,6.8V156c-4.5,0.2-8,3.9-8,8.4V179H59v-14.6
                              c0-4.6-3.8-8.4-8.4-8.4V137c7.7,2.4,16.3,4.3,25.6,5.4l0.5-4c-9.5-1.1-18.2-3-26-5.6V89.7z M99.3,64.7c2.6,0,4.7,2.1,4.7,4.7
                              s-2.1,4.7-4.7,4.7s-4.7-2.1-4.7-4.7S96.8,64.7,99.3,64.7z M35,126.1V84.9l11.6,3.6v42.9C42.4,129.8,38.5,128,35,126.1z M55,164.4
                              V175H42.6v-10.6c0-2.4,2-4.4,4.4-4.4h3.6C53,160,55,162,55,164.4z"/>
                                            </svg>
                                        </div>
                                    </dt>
                                    <dd class="mt-2 text-gray-500 group-hover:text-white">
                                        <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Our story</h4>
                                        <p class="text-sm">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                                        <a href="#" class="px-2 py-2 pl-3 mt-4 bg-blue-500 group-hover:bg-yellow-300 inline-block text-sm text-white font-bold rounded-full">More details
                                            <svg class="bg-white h-5 w-5 rounded-full inline-block ml-2 text-gray-900 fill-current group-hover:text-yellow-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dd>
                                </div>
                                <div class="group bg-white hover:bg-blue-400 p-5 justify-start items-center rounded-md cursor-pointer">
                                    <dt>
                                        <div class="rounded-full flex items-center justify-center text-white p-2">
                                            <svg width="80" height="80" class="group-hover:bg-purple-500 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                                <path d="M131.2,66.9h-20.7l-6.4-19.7c-0.3-1-1.2-1.6-2.3-1.6c-1,0-1.9,0.7-2.3,1.6l-6.4,19.7H72.6c-1,0-1.9,0.7-2.3,1.6
                              c-0.3,1,0,2,0.9,2.6l16.7,12.1L81.5,103c-0.3,1,0,2,0.9,2.6c0.4,0.3,0.9,0.5,1.4,0.5s1-0.2,1.4-0.5l16.7-12.1l16.7,12.1
                              c0.8,0.6,1.9,0.6,2.8,0c0.8-0.6,1.2-1.7,0.9-2.6l-6.4-19.7l16.7-12.1c0.8-0.6,1.2-1.7,0.9-2.6C133.1,67.5,132.2,66.9,131.2,66.9z
                              M112.5,80.8c-0.8,0.6-1.2,1.7-0.9,2.6l5.2,16l-13.6-9.9c-0.4-0.3-0.9-0.5-1.4-0.5c-0.5,0-1,0.2-1.4,0.5l-13.6,9.9l5.2-16
                              c0.3-1,0-2-0.9-2.6l-13.6-9.9h16.8c1,0,1.9-0.7,2.3-1.6l5.2-16l5.2,16c0.3,1,1.2,1.6,2.3,1.6h16.8L112.5,80.8z"/>
                                                <path d="M163.4,61.2c-3.1-2.8-6-5.5-7.1-8.3c-1.2-2.9-1.1-7.2-0.9-11.3c0.2-6.1,0.4-12.5-3.5-16.4s-10.3-3.7-16.4-3.5
                              c-4.1,0.1-8.4,0.3-11.3-0.9c-2.8-1.1-5.4-4-8.3-7.1c-4.2-4.6-8.6-9.4-14.5-9.4s-10.2,4.8-14.5,9.4c-2.8,3.1-5.5,6-8.3,7.1
                              c-2.9,1.2-7.2,1.1-11.3,0.9c-6.1-0.2-12.5-0.4-16.4,3.5c-3.9,3.9-3.7,10.3-3.5,16.4c0.1,4.1,0.3,8.4-0.9,11.3
                              c-1.1,2.8-4,5.4-7.1,8.3c-4.6,4.2-9.4,8.6-9.4,14.5s4.8,10.2,9.4,14.5c3.1,2.8,6,5.5,7.1,8.3c1.2,2.9,1.1,7.2,0.9,11.3
                              c-0.2,6.1-0.4,12.5,3.5,16.4c1.9,1.9,4.5,2.9,7.3,3.3l-16.3,59l24.7-10.6l16.5,16.5L96.8,146c1.5,0.7,3,1,4.6,1
                              c0.9,0,1.8-0.1,2.7-0.3l13.4,47.7l16.5-16.5l24.7,10.6l-16.3-58.8c3.6-0.2,7-1.1,9.4-3.5c3.9-3.9,3.7-10.3,3.5-16.4
                              c-0.1-4.1-0.3-8.4,0.9-11.3c1.1-2.8,4-5.4,7.1-8.3c4.6-4.2,9.4-8.6,9.4-14.5S168,65.5,163.4,61.2z M81.1,186.8l-13.6-13.6L48,181.5
                              l14.3-51.8c1.7,0,3.4,0,5.1-0.1c4.1-0.1,8.4-0.3,11.3,0.9c2.8,1.1,5.4,4,8.3,7.1c2,2.2,4.1,4.4,6.3,6.1L81.1,186.8z M133.1,173.1
                              l-13.6,13.6l-11.7-41.6c2.9-1.8,5.6-4.6,8.1-7.4c2.8-3.1,5.5-6,8.3-7.1c2.9-1.2,7.2-1.1,11.3-0.9c1,0,1.9,0.1,2.9,0.1l14.3,51.8
                              L133.1,173.1z M160.7,87.2c-3.3,3-6.6,6.1-8.1,9.7c-1.6,3.7-1.4,8.5-1.2,13c0.2,5.5,0.4,10.7-2.3,13.4c-2.7,2.7-7.9,2.5-13.4,2.3
                              c-4.6-0.2-9.3-0.3-13,1.2c-3.6,1.5-6.7,4.8-9.7,8.1c-3.7,4-7.4,8.1-11.5,8.1c-4.1,0-7.9-4.1-11.5-8.1c-3-3.3-6.1-6.6-9.7-8.1
                              c-2.6-1.1-5.6-1.3-8.7-1.3c-1.4,0-2.8,0.1-4.3,0.1c-5.5,0.2-10.7,0.4-13.4-2.3c-2.7-2.7-2.5-7.9-2.3-13.4c0.2-4.6,0.3-9.3-1.2-13
                              c-1.5-3.6-4.8-6.7-8.1-9.7c-4-3.7-8.1-7.4-8.1-11.5s4.1-7.9,8.1-11.5c3.3-3,6.6-6.1,8.1-9.7c1.6-3.7,1.4-8.5,1.2-13
                              c-0.2-5.5-0.4-10.7,2.3-13.4c2.7-2.7,7.9-2.5,13.4-2.3c4.6,0.2,9.3,0.3,13-1.2c3.6-1.5,6.7-4.8,9.7-8.1c3.7-4,7.4-8.1,11.5-8.1
                              c4.1,0,7.9,4.1,11.5,8.1c3,3.3,6.1,6.6,9.7,8.1c3.7,1.6,8.5,1.4,13,1.2c5.5-0.2,10.7-0.4,13.4,2.3c2.7,2.7,2.5,7.9,2.3,13.4
                              c-0.2,4.6-0.3,9.3,1.2,13c1.5,3.6,4.8,6.7,8.1,9.7c4,3.7,8.1,7.4,8.1,11.5C168.8,79.8,164.7,83.6,160.7,87.2z"/>
                                            </svg>
                                        </div>
                                    </dt>
                                    <dd class="mt-2 text-gray-500 group-hover:text-white">
                                        <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Best reviews</h4>
                                        <p class="text-sm">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                                        <a href="#" class="px-2 py-2 pl-3 mt-4 bg-blue-500 group-hover:bg-purple-500 inline-block text-sm text-white font-bold rounded-full">More details
                                            <svg class="bg-white h-5 w-5 rounded-full inline-block ml-2 text-gray-900 fill-current group-hover:text-purple-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dd>
                                </div>
                                <div class="group bg-white hover:bg-blue-400 p-5 justify-start items-center rounded-md cursor-pointer">
                                    <dt>
                                        <div class="rounded-full flex items-center justify-center text-white p-4">

                                            <svg width="80" height="80" class="group-hover:bg-green-600 rounded-full text-gray-700 fill-current group-hover:text-white p-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                                <path d="M36,148.9c-0.6,0-9.8,0.1-15.9,0.1c-8.2,0-14.9-6.9-14.9-15.5c0-18.4,12.3-32.2,28.7-32.2c5.8,0,15.3,0.1,16.1,0.2l0.3-1.5
                              l0.6-1.4c-0.3-0.1-0.7-0.3-17-0.4c-18.1,0-31.7,15.1-31.7,35.2c0,10.2,8,18.5,17.9,18.5c16,0,16.1-0.1,16.4-0.1l-0.4-1.7L36,148.9z
                              "/>
                                                <path d="M166.1,98.3c-16.3,0.1-16.6,0.2-17,0.4l0.7,1.7l0.1,1.2c0.9-0.1,10.4-0.2,16.1-0.2c16.4,0,28.7,13.9,28.7,32.2
                              c0,8.5-6.7,15.5-14.9,15.5c-6,0-15.3,0-15.9-0.1l-0.1,1.5l-0.3,1.5c0.2,0,0.4,0.1,16.4,0.1c9.9,0,17.9-8.3,17.9-18.5
                              C197.8,113.4,184.2,98.3,166.1,98.3z"/>
                                                <path d="M41.7,91.2c12,0,21.8-10.9,21.8-24.3c0-14.8-8.5-24.3-21.8-24.3s-21.8,9.5-21.8,24.3C19.9,80.2,29.7,91.2,41.7,91.2z
                              M41.7,45.5c11.4,0,18.8,8.4,18.8,21.3c0,11.7-8.4,21.3-18.8,21.3s-18.8-9.6-18.8-21.3C22.9,53.9,30.3,45.5,41.7,45.5z"/>
                                                <path d="M158.3,91.2c12,0,21.8-10.9,21.8-24.3c0-14.8-8.5-24.3-21.8-24.3c-13.2,0-21.8,9.5-21.8,24.3
                              C136.5,80.2,146.3,91.2,158.3,91.2z M158.3,45.5c11.4,0,18.8,8.4,18.8,21.3c0,11.7-8.4,21.3-18.8,21.3c-10.4,0-18.8-9.6-18.8-21.3
                              C139.5,53.9,146.9,45.5,158.3,45.5z"/>
                                                <path d="M111.9,93.2H88.1c-25,0-45.4,19.9-45.4,44.3v5c0,10.8,9,19.5,20,19.5h74.5c11,0,20-8.8,20-19.5v-5
                              C157.3,113.1,136.9,93.2,111.9,93.2z M154.3,142.6c0,9.1-7.6,16.5-17,16.5H62.7c-9.4,0-17-7.4-17-16.5v-5c0-22.8,19-41.3,42.4-41.3
                              h23.8c23.4,0,42.4,18.5,42.4,41.3V142.6z"/>
                                                <path d="M100,81c16.2,0,29.4-14.3,29.4-31.9c0-19.7-11.3-31.9-29.4-31.9c-18.1,0-29.4,12.2-29.4,31.9C70.6,66.7,83.8,81,100,81z
                              M100,20.2c16.3,0,26.4,11.1,26.4,28.9C126.4,65,114.5,78,100,78c-14.5,0-26.4-13-26.4-28.9C73.6,31.3,83.7,20.2,100,20.2z"/>
                                            </svg>
                                        </div>
                                    </dt>
                                    <dd class="mt-2 text-gray-500 group-hover:text-white">
                                        <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Professionals</h4>
                                        <p class="text-sm">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                                        <a href="#" class="px-2 py-2 pl-3 mt-4 bg-blue-500 group-hover:bg-green-600 inline-block text-sm text-white font-bold rounded-full">More details
                                            <svg class="bg-white h-5 w-5 rounded-full inline-block ml-2 text-gray-900 fill-current group-hover:text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dd>
                                </div>
                                <div class="group bg-white hover:bg-blue-400 p-5 justify-start items-center rounded-md cursor-pointer">
                                    <dt>
                                        <div class="rounded-full flex items-center justify-center text-white p-2">
                                            <svg width="80" height="80" class="group-hover:bg-pink-600 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                                <path d="M88.3,118.2c-0.5,0-1-0.2-1.4-0.6L66.5,97.8c-0.8-0.8-0.8-2,0-2.8c0.8-0.8,2-0.8,2.8,0l19,18.5l42.3-42.1
                              c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8l-43.7,43.5C89.3,118,88.8,118.2,88.3,118.2z"/>
                                                <path d="M100,190.8c-0.2,0-0.4,0-0.6-0.1c-0.7-0.2-1.4-0.4-2.3-0.7c-9-2.9-32-12.2-51.6-34.7C21.2,127.4,10.2,89.7,12.9,43
                              c0-0.6,0.3-1.1,0.7-1.4c0.4-0.4,1-0.5,1.6-0.4c0.4,0.1,42.8,6.4,81.1-29.2c0.7-0.7,1.5-1.4,2.2-2.1c0.8-0.8,2-0.8,2.8,0
                              c0.7,0.7,1.5,1.4,2.2,2.1c38.3,35.6,80.7,29.3,81.2,29.2c0.6-0.1,1.1,0.1,1.6,0.4c0.4,0.4,0.7,0.9,0.7,1.4
                              c2.7,46.7-8.2,84.4-32.5,112.2c-19.6,22.5-42.7,31.8-51.7,34.7c-0.9,0.3-1.7,0.5-2.3,0.7C100.4,190.7,100.2,190.8,100,190.8z
                              M16.8,45.3C14.6,90,25.3,126,48.5,152.6c19,21.7,41.2,30.7,49.9,33.6c0.6,0.2,1.2,0.4,1.6,0.5c0.5-0.1,1-0.3,1.6-0.5c0,0,0,0,0,0
                              c8.7-2.9,30.9-11.8,49.9-33.6C174.7,126,185.4,90,183.2,45.3c-9.4,0.8-47.6,1.8-82.3-30.5c-0.3-0.3-0.6-0.5-0.9-0.8
                              c-0.3,0.3-0.6,0.6-0.9,0.8C64.4,47.1,26.3,46.2,16.8,45.3z"/>
                                            </svg>
                                        </div>
                                    </dt>
                                    <dd class="mt-2 text-gray-500 group-hover:text-white">
                                        <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Quality Guarantee</h4>
                                        <p class="text-sm">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                                        <a href="#" class="px-2 py-2 pl-3 mt-4 bg-blue-500 group-hover:bg-pink-600 inline-block text-sm text-white font-bold rounded-full">More details
                                            <svg class="bg-white h-5 w-5 rounded-full inline-block ml-2 text-gray-900 fill-current group-hover:text-pink-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-gray-500">
                        <div>
                            <div class="lg:text-center font-sans">
                                <h2 class="font-roboto text-gray-700 sm:text-5xl md:text-5xl font-bold subpixel-antialiased">
                                    <span class="block md:text-5xl uppercase">Know more about</span>
                                    <span class="block mb-2 md:text-6xl text-yellow-500 uppercase">spectrum.</span>
                                </h2>
                                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ad, doloremque, iste sed, sunt dicta ut ullam eligendi officia quas non magnam quia reprehenderit culpa voluptatibus molestiae? Voluptatem, maiores quo.
                                </p>
                                <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                    <svg class="bg-white h-5 w-5 rounded-full inline-block ml-2 text-gray-900 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
        <!--Section next-->
        <div class="py-10 bg-white">
            <div class="max-w-7xl mx-auto md:p-10 p-5 sm:px-6 lg:px-8">
                <div class="lg:text-center font-sans">
                    <h2 class="text-3xl leading-8 font-extrabold text-gray-900 sm:text-4xl">Featured courses.</h2>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
                    </p>
                </div>
                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-4 md:gap-x-5 md:gap-y-10">

                        <div class="hover:shadow-lg border border-gray-200">
                            <dt>
                                <div class="flex items-center justify-center bg-white text-white hover:bg-gray-200 rounded-t-md">
                                    <a href="#"><img src="{{ callFrontendStaticResources('img/hero-bg-2.png') }}" alt="#"/></a>
                                </div>
                            </dt>
                            <dd class="text-gray-500 p-4">
                                <a href="#">
                                    <h4 class="mb-2 leading-6 text-base	font-bold text-gray-700">Spectrum GATE (For Year 5 students of 2021)</h4>
                                    <span class="inline-block py-1 px-2 text-sm font-bold bg-blue-200 text-gray-500">Bestseller</span>
                                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque.</p>
                                </a>
                            </dd>
                        </div>
                        <div class="hover:shadow-lg border border-gray-200">
                            <dt>
                                <div class="flex items-center justify-center bg-white text-white hover:bg-gray-200 rounded-t-md">
                                    <a href="#"><img src="{{ callFrontendStaticResources('img/hero-bg-2.png') }}" alt="#"/></a>
                                </div>
                            </dt>
                            <dd class="text-gray-500 p-4">
                                <a href="#">
                                    <h4 class="mb-2 leading-6 text-base	font-bold text-gray-700">Spectrum GATE (For Year 5 students of 2021)</h4>
                                    <span class="inline-block py-1 px-2 text-sm font-bold bg-blue-200 text-gray-500">Bestseller</span>
                                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque.</p>
                                </a>
                            </dd>
                        </div>
                        <div class="hover:shadow-lg border border-gray-200">
                            <dt>
                                <div class="flex items-center justify-center bg-white text-white hover:bg-gray-200 rounded-t-md">
                                    <a href="#"><img src="{{ callFrontendStaticResources('img/hero-bg-2.png') }}" alt="#"/></a>
                                </div>
                            </dt>
                            <dd class="text-gray-500 p-4">
                                <a href="#">
                                    <h4 class="mb-2 leading-6 text-base	font-bold text-gray-700">Spectrum GATE (For Year 5 students of 2021)</h4>
                                    <span class="inline-block py-1 px-2 text-sm font-bold bg-blue-200 text-gray-500">Bestseller</span>
                                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque.</p>
                                </a>
                            </dd>
                        </div>
                        <div class="hover:shadow-lg border border-gray-200">
                            <dt>
                                <div class="flex items-center justify-center bg-white text-white hover:bg-gray-200 rounded-t-md">
                                    <a href="#"><img src="{{ callFrontendStaticResources('img/hero-bg-2.png') }}" alt="#"/></a>
                                </div>
                            </dt>
                            <dd class="text-gray-500 p-4">
                                <a href="#">
                                    <h4 class="mb-2 leading-6 text-base	font-bold text-gray-700">Spectrum GATE (For Year 5 students of 2021)</h4>
                                    <span class="inline-block py-1 px-2 text-sm font-bold bg-blue-200 text-gray-500">Bestseller</span>
                                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque.</p>
                                </a>
                            </dd>
                        </div>

                    </dl>
                </div>
                <div class="block text-center pt-8">
                    <a href="#" class="py-3 px-5 inline-block text-sm font-bold text-blue-600 border-2 border-blue-600 hover:bg-blue-500 hover:text-white hover:border-white">
                        Explore more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!--Section next-->
        <div class="py-8">
            <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-8">
                <div class="lg:text-center font-sans pb-5">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-4xl">Browse popular topics.</h2>
                </div>
                <dl class="space-y-5 md:space-y-0 md:grid md:py-10 md:grid-cols-3 md:gap-x-8 md:gap-y-5">

                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>
                    <div class="bg-white flex items-center p-2 cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center">
                        <div class="h-auto w-auto p-1 inline-block rounded-full border-2">
                            <svg width="40" height="40" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                <path d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                      h84.9V40.2H147.4z"/>
                                <path d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                <rect x="95.1" y="36.2" width="34.6" height="4"/>
                                <rect x="95.1" y="48.8" width="34.6" height="4"/>
                                <rect x="48.5" y="81.6" width="81.2" height="4"/>
                                <rect x="48.5" y="94.4" width="81.2" height="4"/>
                                <rect x="48.5" y="107.1" width="81.2" height="4"/>
                                <rect x="48.5" y="119.9" width="81.2" height="4"/>
                                <polygon points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2"/>
                                <rect x="98.8" y="146" width="30.8" height="4"/>
                                <path d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                      v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                      C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                      C170.2,160.8,169,162,167.6,162z"/>
                            </svg>
                        </div>
                        <div class="inline-block ml-3">
                            <h5 class="text-md font-bold">
                                <a href="#" class="text-gray-600 hover:text-blue-700">Project Management.</a>
                            </h5>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
        <!--Section next-->
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-12 gap-4 lg:border-0 border-b lg:border-none">

                    <div class="md:col-span-1 flex justify-start items-center text-gray-500">
                        <div>
                            <div class="lg:text-center font-roboto">
                                <h5 class="text-gray-400 sm:text-sm font-bold subpixel-antialiased">
                                    We are Featured in
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-11 flex justify-center items-center">
                        <div>
                            <dl class="md:grid md:grid-cols-10 md:gap-2">

                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/eventbrite.svg') }}" alt="#"/>
                                </div>
                                <div class="ml-5 flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/netflix.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/eventbrite.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/box.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/netflix.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/eventbrite.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/box.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/netflix.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/netflix.svg') }}" alt="#"/>
                                </div>
                                <div class="flex items-center p-2 border border-gray-200">
                                    <img src="{{ callFrontendStaticResources('img/eventbrite.svg') }}" alt="#"/>
                                </div>


                            </dl>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Section next-->
        <div class="py-8">
            <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-8">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                    <div class="flex justify-center items-center">
                        <div>
                            <h2 class="mt-2 text-3xl leading-8 font-extrabold text-gray-700 sm:text-4xl">Why spectrum <span class="bg-yellow-300 px-2">knowledge?</span></h2>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur
                                recusandae debitis tempora veniam maxime distinctio, ad minus eum quo amet vel doloribus provident? Iusto?
                            </p>
                        </div>
                    </div>
                    <div class="justify-center flex flex-wrap relative">
                        <div class="my-4 w-full lg:w-6/12 md:px-4 lg:mt-16">
                            <div class="bg-white text-center cursor-pointer	shadow-lg hover:shadow-none rounded-md text-center p-8">
                                <div class="h-auto w-auto p-2 inline-block rounded-full bg-blue-500 text-white">
                                    <svg width="50" height="50" class="rounded-full text-white fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                        <path class="st0" d="M139.2,24.5H38v135h12.3v13h101.2V36.2h-12.3V24.5z M42,28.5h93.2v127H42V28.5z M147.4,40.2v128.3H54.2v-9
                            h84.9V40.2H147.4z"/>
                                        <path class="st0" d="M88,36.2H50.2v37.8H88V36.2z M84,70.1H54.2V40.2H84V70.1z"/>
                                        <rect x="95.1" y="36.2" class="st0" width="34.6" height="4"/>
                                        <rect x="95.1" y="48.8" class="st0" width="34.6" height="4"/>
                                        <rect x="48.5" y="81.6" class="st0" width="81.2" height="4"/>
                                        <rect x="48.5" y="94.4" class="st0" width="81.2" height="4"/>
                                        <rect x="48.5" y="107.1" class="st0" width="81.2" height="4"/>
                                        <rect x="48.5" y="119.9" class="st0" width="81.2" height="4"/>
                                        <polygon class="st0" points="128.4,141.2 128.4,130.9 100.1,130.9 100.1,141.2 104.1,141.2 104.1,134.9 124.4,134.9 124.4,141.2
                            "/>
                                        <rect x="98.8" y="146" class="st0" width="30.8" height="4"/>
                                        <path class="st0" d="M167.6,88.4c-3.1,0-5.6,2.5-5.6,5.6v65.4c0,2.6,1.8,4.8,4.1,5.4v8.7c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5
                            v-8.7c2.4-0.7,4.1-2.8,4.1-5.4V94C173.2,90.9,170.7,88.4,167.6,88.4z M167.6,91.4c1.5,0,2.6,1.2,2.6,2.6v3.1H165V94
                            C165,92.5,166.1,91.4,167.6,91.4z M170.2,100.1v47.7H165v-47.7H170.2z M167.6,162c-1.5,0-2.6-1.2-2.6-2.6v-8.5h5.3v8.5
                            C170.2,160.8,169,162,167.6,162z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="text-lg mt-4 font-bold">10k+ courses</h5>
                                    <p class="text-base opacity-75 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="bg-white cursor-pointer	shadow-lg rounded-lg hover:shadow-none text-center p-8 mt-8">
                                <div class="h-auto w-auto p-2 inline-block rounded-full bg-blue-500 text-white">
                                    <svg width="50" height="50" class="rounded-full text-white fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                        <path d="M77.7,92.2c-19,0-34.4-15.4-34.4-34.4s15.4-34.4,34.4-34.4s34.4,15.4,34.4,34.4S96.7,92.2,77.7,92.2z M77.7,27.4
			                    c-16.8,0-30.4,13.6-30.4,30.4s13.6,30.4,30.4,30.4s30.4-13.6,30.4-30.4S94.5,27.4,77.7,27.4z"/>
                                        <path d="M120.2,92.2l-0.2-4c16-1,28.5-14.3,28.5-30.3c0-16.6-13.5-30.2-30.2-30.4l0-4c18.8,0.2,34.1,15.6,34.1,34.4
                          C152.5,76,138.3,91.1,120.2,92.2z"/>
                                        <path d="M140.9,174.6h-4v-18.7c0-19.5-15.9-35.5-35.5-35.5H54c-19.6,0-35.5,15.9-35.5,35.5v18.6h-4v-18.6
                          c0-21.8,17.7-39.5,39.5-39.5h47.5c21.8,0,39.5,17.7,39.5,39.5V174.6z"/>
                                        <path d="M181.4,174.6h-4v-24.7c0-16.3-13.2-29.5-29.5-29.5v-4c18.5,0,33.5,15,33.5,33.5V174.6z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="text-lg mt-4 font-bold">500+ trainers</h5>
                                    <p class="text-base opacity-75 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 w-full lg:w-6/12 md:px-4">
                            <div class="bg-white cursor-pointer	shadow-lg rounded-lg hover:shadow-none text-center p-5">
                                <div class="h-auto w-auto p-2 inline-block rounded-full bg-blue-500 text-white">
                                    <svg width="50" height="50" class="rounded-full text-white fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                        <path d="M170.3,56.2V30.4l-1.6-0.3c-8-1.6-17.4,0.6-23.4,2.4V12.1c0-0.7-0.3-1.3-0.9-1.6c-0.5-0.4-1.2-0.5-1.8-0.2
                          c-0.9,0.3-21.8,8.3-43.1,44.2C93,47.3,73.4,29,44.4,29.7l-2,0l0,14.4c-3.2,0.1-9,0.4-12.4,1l-1.7,0.3l0,10.8H17.2v99.5h164.6V56.2
                          H170.3z M46.4,33.7c28.7,0.2,47.2,19.8,51.4,24.8V144c-17.1-16.3-43.9-19.2-51.4-19.7V33.7z M32.3,48.8c3.2-0.4,7.5-0.6,10.1-0.7
                          l0,80l1.9,0.1c0.3,0,30.3,1,49,17.2c-25.1-8.5-52.9-5.8-61-4.8V48.8z M21.2,151.7V60.2h7.1l0,85.1l2.3-0.4c0.4-0.1,38-6,67.5,6.6
                          c0.1,0.1,0.1,0.2,0.2,0.2H21.2z M144.3,108.2c0.6-0.4,1-1,1-1.7V36.7c5.1-1.7,13.6-3.9,21-3v90.9c-31,6.2-52.4,16.4-61.6,21.3
                          C110.1,137.5,122.7,120.9,144.3,108.2z M101.8,58.3c16.5-28.5,33.1-39.6,39.5-43.1v90.1c-21.3,12.7-33.8,28.8-39.5,37.6V58.3z
                          M177.8,151.7h-75.2c4.1-2.5,28.4-16.3,66.1-23.5l1.6-0.3V60.2h7.5V151.7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="text-lg mt-4 font-bold">20+ Full Practice Exams</h5>
                                    <p class="text-base opacity-75 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="bg-white cursor-pointer	shadow-lg hover:shadow-none rounded-lg text-center p-8 mt-8">
                                <div class="h-auto w-auto p-2 inline-block rounded-full bg-blue-500 text-white">
                                    <svg width="50" height="50" class="rounded-full text-white fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                        <path d="M131.2,66.9h-20.7l-6.4-19.7c-0.3-1-1.2-1.6-2.3-1.6c-1,0-1.9,0.7-2.3,1.6l-6.4,19.7H72.6c-1,0-1.9,0.7-2.3,1.6
                            c-0.3,1,0,2,0.9,2.6l16.7,12.1L81.5,103c-0.3,1,0,2,0.9,2.6c0.4,0.3,0.9,0.5,1.4,0.5s1-0.2,1.4-0.5l16.7-12.1l16.7,12.1
                            c0.8,0.6,1.9,0.6,2.8,0c0.8-0.6,1.2-1.7,0.9-2.6l-6.4-19.7l16.7-12.1c0.8-0.6,1.2-1.7,0.9-2.6C133.1,67.5,132.2,66.9,131.2,66.9z
                            M112.5,80.8c-0.8,0.6-1.2,1.7-0.9,2.6l5.2,16l-13.6-9.9c-0.4-0.3-0.9-0.5-1.4-0.5c-0.5,0-1,0.2-1.4,0.5l-13.6,9.9l5.2-16
                            c0.3-1,0-2-0.9-2.6l-13.6-9.9h16.8c1,0,1.9-0.7,2.3-1.6l5.2-16l5.2,16c0.3,1,1.2,1.6,2.3,1.6h16.8L112.5,80.8z"/>
                                        <path d="M163.4,61.2c-3.1-2.8-6-5.5-7.1-8.3c-1.2-2.9-1.1-7.2-0.9-11.3c0.2-6.1,0.4-12.5-3.5-16.4s-10.3-3.7-16.4-3.5
                            c-4.1,0.1-8.4,0.3-11.3-0.9c-2.8-1.1-5.4-4-8.3-7.1c-4.2-4.6-8.6-9.4-14.5-9.4s-10.2,4.8-14.5,9.4c-2.8,3.1-5.5,6-8.3,7.1
                            c-2.9,1.2-7.2,1.1-11.3,0.9c-6.1-0.2-12.5-0.4-16.4,3.5c-3.9,3.9-3.7,10.3-3.5,16.4c0.1,4.1,0.3,8.4-0.9,11.3
                            c-1.1,2.8-4,5.4-7.1,8.3c-4.6,4.2-9.4,8.6-9.4,14.5s4.8,10.2,9.4,14.5c3.1,2.8,6,5.5,7.1,8.3c1.2,2.9,1.1,7.2,0.9,11.3
                            c-0.2,6.1-0.4,12.5,3.5,16.4c1.9,1.9,4.5,2.9,7.3,3.3l-16.3,59l24.7-10.6l16.5,16.5L96.8,146c1.5,0.7,3,1,4.6,1
                            c0.9,0,1.8-0.1,2.7-0.3l13.4,47.7l16.5-16.5l24.7,10.6l-16.3-58.8c3.6-0.2,7-1.1,9.4-3.5c3.9-3.9,3.7-10.3,3.5-16.4
                            c-0.1-4.1-0.3-8.4,0.9-11.3c1.1-2.8,4-5.4,7.1-8.3c4.6-4.2,9.4-8.6,9.4-14.5S168,65.5,163.4,61.2z M81.1,186.8l-13.6-13.6L48,181.5
                            l14.3-51.8c1.7,0,3.4,0,5.1-0.1c4.1-0.1,8.4-0.3,11.3,0.9c2.8,1.1,5.4,4,8.3,7.1c2,2.2,4.1,4.4,6.3,6.1L81.1,186.8z M133.1,173.1
                            l-13.6,13.6l-11.7-41.6c2.9-1.8,5.6-4.6,8.1-7.4c2.8-3.1,5.5-6,8.3-7.1c2.9-1.2,7.2-1.1,11.3-0.9c1,0,1.9,0.1,2.9,0.1l14.3,51.8
                            L133.1,173.1z M160.7,87.2c-3.3,3-6.6,6.1-8.1,9.7c-1.6,3.7-1.4,8.5-1.2,13c0.2,5.5,0.4,10.7-2.3,13.4c-2.7,2.7-7.9,2.5-13.4,2.3
                            c-4.6-0.2-9.3-0.3-13,1.2c-3.6,1.5-6.7,4.8-9.7,8.1c-3.7,4-7.4,8.1-11.5,8.1c-4.1,0-7.9-4.1-11.5-8.1c-3-3.3-6.1-6.6-9.7-8.1
                            c-2.6-1.1-5.6-1.3-8.7-1.3c-1.4,0-2.8,0.1-4.3,0.1c-5.5,0.2-10.7,0.4-13.4-2.3c-2.7-2.7-2.5-7.9-2.3-13.4c0.2-4.6,0.3-9.3-1.2-13
                            c-1.5-3.6-4.8-6.7-8.1-9.7c-4-3.7-8.1-7.4-8.1-11.5s4.1-7.9,8.1-11.5c3.3-3,6.6-6.1,8.1-9.7c1.6-3.7,1.4-8.5,1.2-13
                            c-0.2-5.5-0.4-10.7,2.3-13.4c2.7-2.7,7.9-2.5,13.4-2.3c4.6,0.2,9.3,0.3,13-1.2c3.6-1.5,6.7-4.8,9.7-8.1c3.7-4,7.4-8.1,11.5-8.1
                            c4.1,0,7.9,4.1,11.5,8.1c3,3.3,6.1,6.6,9.7,8.1c3.7,1.6,8.5,1.4,13,1.2c5.5-0.2,10.7-0.4,13.4,2.3c2.7,2.7,2.5,7.9,2.3,13.4
                            c-0.2,4.6-0.3,9.3,1.2,13c1.5,3.6,4.8,6.7,8.1,9.7c4,3.7,8.1,7.4,8.1,11.5C168.8,79.8,164.7,83.6,160.7,87.2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="text-lg mt-4 font-bold">10k+ five star reviews</h5>
                                    <p class="text-base opacity-75 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
        <!--Section next-->
        <div class="py-10 bg-white">
            <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-8">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-10 md:gap-x-8 md:gap-y-10">

                    <div class="col-span-5 flex justify-center items-center">
                        <div>
                            <img src="{{ callFrontendStaticResources('img/img-pic.png') }}" alt="#"/>
                        </div>
                    </div>
                    <div class="col-span-5 flex justify-center items-center text-gray-500">
                        <div>
                            <h2 class="mt-2 text-3xl leading-8 font-extrabold text-gray-700 sm:text-4xl">In-depth UCAT <span class="bg-yellow-300 px-2">Workshop</span></h2>
                            <p class="my-4 max-w-2xl text-lg lg:mx-auto">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur
                                recusandae debitis tempora veniam maxime distinctio, ad minus eum quo amet vel doloribus provident? Iusto?
                            </p>
                            <ul class="pl-3">
                                <li class="text-md pb-3 font-bold text-gray-500">
                      <span class="inline-block align-middle text-white text-md w-6 h-6 bg-green-500 rounded-full p-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </span>
                                    <span class="inline-block align-middle">
                        Inside Info & Effective Strategies
                      </span>
                                </li>
                                <li class="text-md pb-3 font-bold text-gray-500">
                      <span class="inline-block align-middle text-white text-md w-6 h-6 bg-green-500 rounded-full p-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </span>
                                    <span class="inline-block align-middle">
                        Run by Expert Doctors
                      </span>
                                </li>
                                <li class="text-md pb-3 font-bold text-gray-500">
                      <span class="inline-block align-middle text-white text-md w-6 h-6 bg-green-500 rounded-full p-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </span>
                                    <span class="inline-block align-middle">
                        Inside Info & Effective Strategies
                      </span>
                                </li>
                                <li class="text-md pb-3 font-bold text-gray-500">
                      <span class="inline-block align-middle text-white text-md w-6 h-6 bg-green-500 rounded-full p-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </span>
                                    <span class="inline-block align-middle">
                        Formal Instruction & Group Learning
                      </span>
                                </li>
                                <li class="text-md pb-3 font-bold text-gray-500">
                      <span class="inline-block align-middle text-white text-md w-6 h-6 bg-green-500 rounded-full p-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </span>
                                    <span class="inline-block align-middle">
                        Inside Info & Effective Strategies
                      </span>
                                </li>
                            </ul>
                            <a href="#" class="px-3 py-2 mt-4 ml-5 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">Explore
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
        <!--Section next-->
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M190.3,68.6L102,40.7c-0.8-0.3-1.7-0.3-2.5,0L57.2,54l1.2,3.8l42.2-13.3c0,0,0.1,0,0.1,0l88.3,27.9
                        c0.1,0,0.1,0,0.1,0.2c0,0.1-0.1,0.2-0.1,0.2l-51.2,16.1l1.2,3.8l25.1-7.9v41.5c-19.6,10.1-49.8,15.1-79.1,13l-0.3,4
                        c4.5,0.3,9,0.5,13.5,0.5c26.1,0,51.6-5.3,68.9-14.5l1.1-0.6V83.5l22-6.9c1.8-0.5,2.9-2.2,2.9-4C193.2,70.7,192,69.1,190.3,68.6z"/>
                                    <path d="M50.6,89.7l47.8,14.9c0.4,0.1,0.8,0.2,1.2,0.2c0.4,0,0.8-0.1,1.3-0.2l31.6-9.9l-1.2-3.8l-31.6,9.9
                        c0,0-0.1,0-0.1,0L54.7,86.8l37.7-12.2c1.6,2.1,4.1,3.4,6.9,3.4c4.8,0,8.7-3.9,8.7-8.7s-3.9-8.7-8.7-8.7c-4.8,0-8.7,3.9-8.7,8.7
                        c0,0.5,0.1,1.1,0.2,1.6L48.1,84.8L10.9,73.2c-0.1,0-0.1,0-0.1-0.2c0-0.1,0.1-0.2,0.1-0.2L48.4,61l-1.2-3.8L9.7,69
                        c-1.8,0.6-2.9,2.2-2.9,4c0,1.8,1.2,3.4,2.9,4L31,83.6v44.7l1,0.6c4.3,2.5,9.2,4.8,14.6,6.8V156c-4.5,0.2-8,3.9-8,8.4V179H59v-14.6
                        c0-4.6-3.8-8.4-8.4-8.4V137c7.7,2.4,16.3,4.3,25.6,5.4l0.5-4c-9.5-1.1-18.2-3-26-5.6V89.7z M99.3,64.7c2.6,0,4.7,2.1,4.7,4.7
                        s-2.1,4.7-4.7,4.7s-4.7-2.1-4.7-4.7S96.8,64.7,99.3,64.7z M35,126.1V84.9l11.6,3.6v42.9C42.4,129.8,38.5,128,35,126.1z M55,164.4
                        V175H42.6v-10.6c0-2.4,2-4.4,4.4-4.4h3.6C53,160,55,162,55,164.4z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">What Is UCAT?</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path class="st0" d="M101.9,46.7c9.1,0,16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4c-9.1,0-16.4,7.4-16.4,16.4S92.8,46.7,101.9,46.7z
                        M101.9,17.8c6.9,0,12.4,5.6,12.4,12.4s-5.6,12.4-12.4,12.4c-6.9,0-12.4-5.6-12.4-12.4S95,17.8,101.9,17.8z"/>
                                    <path class="st0" d="M76.5,75.6c1.1,0,2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2
                        c0-13.6-12.5-24.6-27.9-24.6C87,49,74.5,60,74.5,73.6C74.5,74.7,75.4,75.6,76.5,75.6z"/>
                                    <path class="st0" d="M50.9,146.6c9.1,0,16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4s-16.4,7.4-16.4,16.4S41.9,146.6,50.9,146.6z
                        M50.9,117.8c6.9,0,12.4,5.6,12.4,12.4c0,6.9-5.6,12.4-12.4,12.4s-12.4-5.6-12.4-12.4C38.5,123.3,44.1,117.8,50.9,117.8z"/>
                                    <path class="st0" d="M51.4,148.9c-15.4,0-27.9,11-27.9,24.6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6
                        c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2C79.3,160,66.8,148.9,51.4,148.9z"/>
                                    <path class="st0" d="M137.8,130.2c0,9.1,7.4,16.4,16.4,16.4s16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4S137.8,121.1,137.8,130.2z
                        M166.7,130.2c0,6.9-5.6,12.4-12.4,12.4c-6.9,0-12.4-5.6-12.4-12.4c0-6.9,5.6-12.4,12.4-12.4C161.1,117.8,166.7,123.3,166.7,130.2z
                        "/>
                                    <path class="st0" d="M154.7,148.9c-15.4,0-27.9,11-27.9,24.6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6
                        c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2C182.6,160,170.1,148.9,154.7,148.9z"/>
                                    <path class="st0" d="M151,100.7c0,1.1,0.9,2,2,2s2-0.9,2-2V85.1h-51.1V74.9c0-1.1-0.9-2-2-2s-2,0.9-2,2v10.2H49.7v15.6
                        c0,1.1,0.9,2,2,2s2-0.9,2-2V89.1H151V100.7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Free Bootcamp</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path class="st0" d="M170.3,56.2V30.4l-1.6-0.3c-8-1.6-17.4,0.6-23.4,2.4V12.1c0-0.7-0.3-1.3-0.9-1.6c-0.5-0.4-1.2-0.5-1.8-0.2
                      c-0.9,0.3-21.8,8.3-43.1,44.2C93,47.3,73.4,29,44.4,29.7l-2,0l0,14.4c-3.2,0.1-9,0.4-12.4,1l-1.7,0.3l0,10.8H17.2v99.5h164.6V56.2
                      H170.3z M46.4,33.7c28.7,0.2,47.2,19.8,51.4,24.8V144c-17.1-16.3-43.9-19.2-51.4-19.7V33.7z M32.3,48.8c3.2-0.4,7.5-0.6,10.1-0.7
                      l0,80l1.9,0.1c0.3,0,30.3,1,49,17.2c-25.1-8.5-52.9-5.8-61-4.8V48.8z M21.2,151.7V60.2h7.1l0,85.1l2.3-0.4c0.4-0.1,38-6,67.5,6.6
                      c0.1,0.1,0.1,0.2,0.2,0.2H21.2z M144.3,108.2c0.6-0.4,1-1,1-1.7V36.7c5.1-1.7,13.6-3.9,21-3v90.9c-31,6.2-52.4,16.4-61.6,21.3
                      C110.1,137.5,122.7,120.9,144.3,108.2z M101.8,58.3c16.5-28.5,33.1-39.6,39.5-43.1v90.1c-21.3,12.7-33.8,28.8-39.5,37.6V58.3z
                      M177.8,151.7h-75.2c4.1-2.5,28.4-16.3,66.1-23.5l1.6-0.3V60.2h7.5V151.7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">What is WACE?</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M165.7,44h-65.5l-0.2-0.3L99.8,44H35.6L0.4,90.2L101,199.8l98.6-109.5L165.7,44z M193.1,88.1h-58.2l29.8-38.8L193.1,88.1z
                      M160.6,48l-28.8,37.5L103.3,48H160.6z M100,50.3l28.8,37.8H71L100,50.3z M96.7,48L67.9,85.5L40.5,48H96.7z M36.6,49.3l28.2,38.8H7
                      L36.6,49.3z M7.6,92.1h59.2l32.1,99.4L7.6,92.1z M100.9,185L71,92.1h57.8L100.9,185z M103.2,191.4l29.7-99.3h59.6L103.2,191.4z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Spectrum GAMSAT</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M131.2,66.9h-20.7l-6.4-19.7c-0.3-1-1.2-1.6-2.3-1.6c-1,0-1.9,0.7-2.3,1.6l-6.4,19.7H72.6c-1,0-1.9,0.7-2.3,1.6
                        c-0.3,1,0,2,0.9,2.6l16.7,12.1L81.5,103c-0.3,1,0,2,0.9,2.6c0.4,0.3,0.9,0.5,1.4,0.5s1-0.2,1.4-0.5l16.7-12.1l16.7,12.1
                        c0.8,0.6,1.9,0.6,2.8,0c0.8-0.6,1.2-1.7,0.9-2.6l-6.4-19.7l16.7-12.1c0.8-0.6,1.2-1.7,0.9-2.6C133.1,67.5,132.2,66.9,131.2,66.9z
                        M112.5,80.8c-0.8,0.6-1.2,1.7-0.9,2.6l5.2,16l-13.6-9.9c-0.4-0.3-0.9-0.5-1.4-0.5c-0.5,0-1,0.2-1.4,0.5l-13.6,9.9l5.2-16
                        c0.3-1,0-2-0.9-2.6l-13.6-9.9h16.8c1,0,1.9-0.7,2.3-1.6l5.2-16l5.2,16c0.3,1,1.2,1.6,2.3,1.6h16.8L112.5,80.8z"/>
                                    <path d="M163.4,61.2c-3.1-2.8-6-5.5-7.1-8.3c-1.2-2.9-1.1-7.2-0.9-11.3c0.2-6.1,0.4-12.5-3.5-16.4s-10.3-3.7-16.4-3.5
                        c-4.1,0.1-8.4,0.3-11.3-0.9c-2.8-1.1-5.4-4-8.3-7.1c-4.2-4.6-8.6-9.4-14.5-9.4s-10.2,4.8-14.5,9.4c-2.8,3.1-5.5,6-8.3,7.1
                        c-2.9,1.2-7.2,1.1-11.3,0.9c-6.1-0.2-12.5-0.4-16.4,3.5c-3.9,3.9-3.7,10.3-3.5,16.4c0.1,4.1,0.3,8.4-0.9,11.3
                        c-1.1,2.8-4,5.4-7.1,8.3c-4.6,4.2-9.4,8.6-9.4,14.5s4.8,10.2,9.4,14.5c3.1,2.8,6,5.5,7.1,8.3c1.2,2.9,1.1,7.2,0.9,11.3
                        c-0.2,6.1-0.4,12.5,3.5,16.4c1.9,1.9,4.5,2.9,7.3,3.3l-16.3,59l24.7-10.6l16.5,16.5L96.8,146c1.5,0.7,3,1,4.6,1
                        c0.9,0,1.8-0.1,2.7-0.3l13.4,47.7l16.5-16.5l24.7,10.6l-16.3-58.8c3.6-0.2,7-1.1,9.4-3.5c3.9-3.9,3.7-10.3,3.5-16.4
                        c-0.1-4.1-0.3-8.4,0.9-11.3c1.1-2.8,4-5.4,7.1-8.3c4.6-4.2,9.4-8.6,9.4-14.5S168,65.5,163.4,61.2z M81.1,186.8l-13.6-13.6L48,181.5
                        l14.3-51.8c1.7,0,3.4,0,5.1-0.1c4.1-0.1,8.4-0.3,11.3,0.9c2.8,1.1,5.4,4,8.3,7.1c2,2.2,4.1,4.4,6.3,6.1L81.1,186.8z M133.1,173.1
                        l-13.6,13.6l-11.7-41.6c2.9-1.8,5.6-4.6,8.1-7.4c2.8-3.1,5.5-6,8.3-7.1c2.9-1.2,7.2-1.1,11.3-0.9c1,0,1.9,0.1,2.9,0.1l14.3,51.8
                        L133.1,173.1z M160.7,87.2c-3.3,3-6.6,6.1-8.1,9.7c-1.6,3.7-1.4,8.5-1.2,13c0.2,5.5,0.4,10.7-2.3,13.4c-2.7,2.7-7.9,2.5-13.4,2.3
                        c-4.6-0.2-9.3-0.3-13,1.2c-3.6,1.5-6.7,4.8-9.7,8.1c-3.7,4-7.4,8.1-11.5,8.1c-4.1,0-7.9-4.1-11.5-8.1c-3-3.3-6.1-6.6-9.7-8.1
                        c-2.6-1.1-5.6-1.3-8.7-1.3c-1.4,0-2.8,0.1-4.3,0.1c-5.5,0.2-10.7,0.4-13.4-2.3c-2.7-2.7-2.5-7.9-2.3-13.4c0.2-4.6,0.3-9.3-1.2-13
                        c-1.5-3.6-4.8-6.7-8.1-9.7c-4-3.7-8.1-7.4-8.1-11.5s4.1-7.9,8.1-11.5c3.3-3,6.6-6.1,8.1-9.7c1.6-3.7,1.4-8.5,1.2-13
                        c-0.2-5.5-0.4-10.7,2.3-13.4c2.7-2.7,7.9-2.5,13.4-2.3c4.6,0.2,9.3,0.3,13-1.2c3.6-1.5,6.7-4.8,9.7-8.1c3.7-4,7.4-8.1,11.5-8.1
                        c4.1,0,7.9,4.1,11.5,8.1c3,3.3,6.1,6.6,9.7,8.1c3.7,1.6,8.5,1.4,13,1.2c5.5-0.2,10.7-0.4,13.4,2.3c2.7,2.7,2.5,7.9,2.3,13.4
                        c-0.2,4.6-0.3,9.3,1.2,13c1.5,3.6,4.8,6.7,8.1,9.7c4,3.7,8.1,7.4,8.1,11.5C168.8,79.8,164.7,83.6,160.7,87.2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Spectrum GAMSAT</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center items-centerover:bg-blue-400 py-5">
                        <div class="mr-5">
                            <div class="rounded-full bg-white flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M127.2,133.9c-2.1-1.7-4.5-1.6-5.8-1.3c-4.2-4.8-10.1-4.2-12.4-3.7c-4.9-4.8-10.6-4.1-13.7-3.1l-1.1-31.4
                        c-0.3-4.6-3.3-6.7-6-6.6c-2.9,0-5.8,2.4-6,6.7L81,122.1l-1,25.5c-1.2-1.1-2.2-2.8-3.3-4.5c-1.7-2.8-3.5-5.7-6.4-6.8
                        c-6.3-2.3-8.6,1.4-8.7,1.6l-0.4,0.7l0.3,0.7c4.7,10.4,6.6,17.8,7.8,22.7c0.7,2.9,1.2,4.8,2,6.1c1.7,3,10.4,10.8,12.6,12.8l1.5,12.8
                        l41.1-1.1l-0.1-1.6c-0.6-8.9,0.5-15.8,1.4-20.1l0.2-1c0.9-4.3,2-9.7,2.4-15.8C132,143.5,130.9,136.7,127.2,133.9z M127.5,153.7
                        L127.5,153.7c-0.5,6.1-1.5,11.1-2.4,15.6l-0.2,1c-0.9,4.3-1.9,10.9-1.5,19.4l-35.2,0.9l-1.3-11.2l-0.4-0.4
                        c-4.3-3.8-11.2-10.3-12.4-12.5c-0.5-0.9-1-2.8-1.7-5.3c-1.2-4.8-3.1-12.1-7.5-22.2c0.7-0.4,2.1-0.8,4.6,0.1c1.9,0.7,3.3,3,4.8,5.5
                        c1.8,2.9,3.6,6,6.8,7l1.9,0.6l1.1-29.9l1.1-27.8c0.1-2.6,1.7-3.8,3.1-3.8c0,0,0,0,0,0c1.6,0,2.8,1.5,3,3.8l1.3,35.7l2.1-1
                        c1.2-0.6,7.7-3.4,12.8,2.3l0.6,0.7l0.9-0.3c0.1,0,6.7-2,10.7,3.2l0.7,0.9l1.1-0.4c0.1,0,2.3-0.8,4,0.6
                        C126.9,137.5,129.3,141.4,127.5,153.7z"/>
                                    <polygon points="93.2,81.2 90.3,78.4 88.2,80.5 93.2,85.4 101.4,77.4 99.3,75.3 	"/>
                                    <path d="M100.8,15.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H89.4c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5H100.8z"/>
                                    <path d="M70.1,119.7h9.7v-3h-9.7c-2.5,0-4.5-2-4.5-4.5V13.9c0-2.5,2-4.5,4.5-4.5H120c2.5,0,4.5,2,4.5,4.5v82.5h3V13.9
                        c0-4.1-3.4-7.5-7.5-7.5H70.1c-4.2,0-7.5,3.4-7.5,7.5v98.3C62.6,116.3,66,119.7,70.1,119.7z"/>
                                    <path d="M127.5,112.2V96.4h-3v15.8c0,2.5-2,4.5-4.5,4.5H96.3v3H120C124.2,119.7,127.5,116.3,127.5,112.2z"/>
                                    <path d="M109.1,79.8c0-7.9-6.4-14.3-14.3-14.3c-7.9,0-14.3,6.4-14.3,14.3c0,3,0.9,5.8,2.6,8.2l2.5-1.7c-1.3-1.9-2-4.1-2-6.5
                        c0-6.2,5.1-11.3,11.3-11.3c6.2,0,11.3,5.1,11.3,11.3c0,5.8-4.5,10.8-10.3,11.3l0.3,3C103.4,93.5,109.1,87.2,109.1,79.8z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">What Is UCAT?</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services for UCAT, WACE, GATE.</p>
                            <a href="#" class="px-3 py-2 mt-4 bg-green-500 group inline-block text-sm text-white font-bold rounded-full">More details
                                <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Section next-->
        <div class="py-10">
            <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-8">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-10 md:gap-x-8 md:gap-y-10">

                    <div class="col-span-6 flex justify-center items-center text-gray-500">
                        <div>
                            <h2 class="mt-2 text-3xl leading-8 font-extrabold text-gray-700 sm:text-4xl">Spectrum GAMSAT <span class="bg-yellow-300 px-2">Workshop</span></h2>
                            <p class="my-4 max-w-2xl text-lg">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur.
                            </p>
                            <ul>
                                <li class="flex justify-center items-center bg-white rounded-md p-3 my-5">
                                    <div class="inline-block text-white mr-5">
                                        <svg width="70" height="70" class="text-green-500 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                            <path d="M190.3,68.6L102,40.7c-0.8-0.3-1.7-0.3-2.5,0L57.2,54l1.2,3.8l42.2-13.3c0,0,0.1,0,0.1,0l88.3,27.9
                            c0.1,0,0.1,0,0.1,0.2c0,0.1-0.1,0.2-0.1,0.2l-51.2,16.1l1.2,3.8l25.1-7.9v41.5c-19.6,10.1-49.8,15.1-79.1,13l-0.3,4
                            c4.5,0.3,9,0.5,13.5,0.5c26.1,0,51.6-5.3,68.9-14.5l1.1-0.6V83.5l22-6.9c1.8-0.5,2.9-2.2,2.9-4C193.2,70.7,192,69.1,190.3,68.6z"/>
                                            <path d="M50.6,89.7l47.8,14.9c0.4,0.1,0.8,0.2,1.2,0.2c0.4,0,0.8-0.1,1.3-0.2l31.6-9.9l-1.2-3.8l-31.6,9.9
                            c0,0-0.1,0-0.1,0L54.7,86.8l37.7-12.2c1.6,2.1,4.1,3.4,6.9,3.4c4.8,0,8.7-3.9,8.7-8.7s-3.9-8.7-8.7-8.7c-4.8,0-8.7,3.9-8.7,8.7
                            c0,0.5,0.1,1.1,0.2,1.6L48.1,84.8L10.9,73.2c-0.1,0-0.1,0-0.1-0.2c0-0.1,0.1-0.2,0.1-0.2L48.4,61l-1.2-3.8L9.7,69
                            c-1.8,0.6-2.9,2.2-2.9,4c0,1.8,1.2,3.4,2.9,4L31,83.6v44.7l1,0.6c4.3,2.5,9.2,4.8,14.6,6.8V156c-4.5,0.2-8,3.9-8,8.4V179H59v-14.6
                            c0-4.6-3.8-8.4-8.4-8.4V137c7.7,2.4,16.3,4.3,25.6,5.4l0.5-4c-9.5-1.1-18.2-3-26-5.6V89.7z M99.3,64.7c2.6,0,4.7,2.1,4.7,4.7
                            s-2.1,4.7-4.7,4.7s-4.7-2.1-4.7-4.7S96.8,64.7,99.3,64.7z M35,126.1V84.9l11.6,3.6v42.9C42.4,129.8,38.5,128,35,126.1z M55,164.4
                            V175H42.6v-10.6c0-2.4,2-4.4,4.4-4.4h3.6C53,160,55,162,55,164.4z"/>
                                        </svg>
                                    </div>
                                    <div class="inline-block align-middle">
                                        <h3 class="text-lg font-bold text-gray-700">Inside Info & Effective Strategies</h3>
                                        <p class="my-2 max-w-2xl text-md lg:mx-auto">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex justify-center items-center bg-white rounded-md p-3 my-5">
                                    <div class="inline-block text-white mr-5">
                                        <svg width="70" height="70" class="text-green-500 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                            <path class="st0" d="M183.3,16.5L15.8,93.8l67.6,22.5v66.7l44-52.1l56,18.6V16.5z M171.8,26.2l-87,86.4L26.6,93.2L171.8,26.2z
                          M87.3,172.1v-54.5l35.9,11.9L87.3,172.1z M89,114l90.3-89.5V144L89,114z"/>
                                        </svg>
                                    </div>
                                    <div class="inline-block align-middle">
                                        <h3 class="text-lg font-bold text-gray-700">Different Course Variation</h3>
                                        <p class="my-2 max-w-2xl text-md lg:mx-auto">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex justify-center items-center bg-white rounded-md p-3 my-5">
                                    <div class="inline-block text-white mr-5">
                                        <svg width="70" height="70" class="text-green-500 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                            <path d="M88.3,118.2c-0.5,0-1-0.2-1.4-0.6L66.5,97.8c-0.8-0.8-0.8-2,0-2.8c0.8-0.8,2-0.8,2.8,0l19,18.5l42.3-42.1
                          c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8l-43.7,43.5C89.3,118,88.8,118.2,88.3,118.2z"/>
                                            <path d="M100,190.8c-0.2,0-0.4,0-0.6-0.1c-0.7-0.2-1.4-0.4-2.3-0.7c-9-2.9-32-12.2-51.6-34.7C21.2,127.4,10.2,89.7,12.9,43
                          c0-0.6,0.3-1.1,0.7-1.4c0.4-0.4,1-0.5,1.6-0.4c0.4,0.1,42.8,6.4,81.1-29.2c0.7-0.7,1.5-1.4,2.2-2.1c0.8-0.8,2-0.8,2.8,0
                          c0.7,0.7,1.5,1.4,2.2,2.1c38.3,35.6,80.7,29.3,81.2,29.2c0.6-0.1,1.1,0.1,1.6,0.4c0.4,0.4,0.7,0.9,0.7,1.4
                          c2.7,46.7-8.2,84.4-32.5,112.2c-19.6,22.5-42.7,31.8-51.7,34.7c-0.9,0.3-1.7,0.5-2.3,0.7C100.4,190.7,100.2,190.8,100,190.8z
                          M16.8,45.3C14.6,90,25.3,126,48.5,152.6c19,21.7,41.2,30.7,49.9,33.6c0.6,0.2,1.2,0.4,1.6,0.5c0.5-0.1,1-0.3,1.6-0.5c0,0,0,0,0,0
                          c8.7-2.9,30.9-11.8,49.9-33.6C174.7,126,185.4,90,183.2,45.3c-9.4,0.8-47.6,1.8-82.3-30.5c-0.3-0.3-0.6-0.5-0.9-0.8
                          c-0.3,0.3-0.6,0.6-0.9,0.8C64.4,47.1,26.3,46.2,16.8,45.3z"/>
                                        </svg>
                                    </div>
                                    <div class="inline-block align-middle">
                                        <h3 class="text-lg font-bold text-gray-700">Inside Info & Effective Strategies</h3>
                                        <p class="my-2 max-w-2xl text-md lg:mx-auto">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste delectus, fuga magnam quibusdam accusantium consequatur.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="px-5 py-3 mt-4 ml-5 group inline-block text-sm text-green-500 font-bold border border-green-500">Explore more
                                    <svg class="h-5 w-5 rounded-full inline-block ml-2 group-hover:ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 flex justify-center items-center">
                        <div>
                            <img src="{{ callFrontendStaticResources('img/img-pic2.png') }}" alt="#"/>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
        <!--Section next-->
        <div class="py-20 relative">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="lg:text-center font-sans pb-5">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-4xl">How it works?</h2>
                </div>
                <div class="grid md:grid-cols-4 md:gap-x-8 md:gap-y-10">

                    <div class="text-center py-5">
                        <div>
                            <div class="rounded-full flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M190.3,68.6L102,40.7c-0.8-0.3-1.7-0.3-2.5,0L57.2,54l1.2,3.8l42.2-13.3c0,0,0.1,0,0.1,0l88.3,27.9
                        c0.1,0,0.1,0,0.1,0.2c0,0.1-0.1,0.2-0.1,0.2l-51.2,16.1l1.2,3.8l25.1-7.9v41.5c-19.6,10.1-49.8,15.1-79.1,13l-0.3,4
                        c4.5,0.3,9,0.5,13.5,0.5c26.1,0,51.6-5.3,68.9-14.5l1.1-0.6V83.5l22-6.9c1.8-0.5,2.9-2.2,2.9-4C193.2,70.7,192,69.1,190.3,68.6z"/>
                                    <path d="M50.6,89.7l47.8,14.9c0.4,0.1,0.8,0.2,1.2,0.2c0.4,0,0.8-0.1,1.3-0.2l31.6-9.9l-1.2-3.8l-31.6,9.9
                        c0,0-0.1,0-0.1,0L54.7,86.8l37.7-12.2c1.6,2.1,4.1,3.4,6.9,3.4c4.8,0,8.7-3.9,8.7-8.7s-3.9-8.7-8.7-8.7c-4.8,0-8.7,3.9-8.7,8.7
                        c0,0.5,0.1,1.1,0.2,1.6L48.1,84.8L10.9,73.2c-0.1,0-0.1,0-0.1-0.2c0-0.1,0.1-0.2,0.1-0.2L48.4,61l-1.2-3.8L9.7,69
                        c-1.8,0.6-2.9,2.2-2.9,4c0,1.8,1.2,3.4,2.9,4L31,83.6v44.7l1,0.6c4.3,2.5,9.2,4.8,14.6,6.8V156c-4.5,0.2-8,3.9-8,8.4V179H59v-14.6
                        c0-4.6-3.8-8.4-8.4-8.4V137c7.7,2.4,16.3,4.3,25.6,5.4l0.5-4c-9.5-1.1-18.2-3-26-5.6V89.7z M99.3,64.7c2.6,0,4.7,2.1,4.7,4.7
                        s-2.1,4.7-4.7,4.7s-4.7-2.1-4.7-4.7S96.8,64.7,99.3,64.7z M35,126.1V84.9l11.6,3.6v42.9C42.4,129.8,38.5,128,35,126.1z M55,164.4
                        V175H42.6v-10.6c0-2.4,2-4.4,4.4-4.4h3.6C53,160,55,162,55,164.4z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Workshop</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services.</p>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <div>
                            <div class="rounded-full flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path class="st0" d="M101.9,46.7c9.1,0,16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4c-9.1,0-16.4,7.4-16.4,16.4S92.8,46.7,101.9,46.7z
                        M101.9,17.8c6.9,0,12.4,5.6,12.4,12.4s-5.6,12.4-12.4,12.4c-6.9,0-12.4-5.6-12.4-12.4S95,17.8,101.9,17.8z"/>
                                    <path class="st0" d="M76.5,75.6c1.1,0,2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2
                        c0-13.6-12.5-24.6-27.9-24.6C87,49,74.5,60,74.5,73.6C74.5,74.7,75.4,75.6,76.5,75.6z"/>
                                    <path class="st0" d="M50.9,146.6c9.1,0,16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4s-16.4,7.4-16.4,16.4S41.9,146.6,50.9,146.6z
                        M50.9,117.8c6.9,0,12.4,5.6,12.4,12.4c0,6.9-5.6,12.4-12.4,12.4s-12.4-5.6-12.4-12.4C38.5,123.3,44.1,117.8,50.9,117.8z"/>
                                    <path class="st0" d="M51.4,148.9c-15.4,0-27.9,11-27.9,24.6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6
                        c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2C79.3,160,66.8,148.9,51.4,148.9z"/>
                                    <path class="st0" d="M137.8,130.2c0,9.1,7.4,16.4,16.4,16.4s16.4-7.4,16.4-16.4s-7.4-16.4-16.4-16.4S137.8,121.1,137.8,130.2z
                        M166.7,130.2c0,6.9-5.6,12.4-12.4,12.4c-6.9,0-12.4-5.6-12.4-12.4c0-6.9,5.6-12.4,12.4-12.4C161.1,117.8,166.7,123.3,166.7,130.2z
                        "/>
                                    <path class="st0" d="M154.7,148.9c-15.4,0-27.9,11-27.9,24.6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-11.4,10.7-20.6,23.9-20.6
                        c13.2,0,23.9,9.2,23.9,20.6c0,1.1,0.9,2,2,2s2-0.9,2-2C182.6,160,170.1,148.9,154.7,148.9z"/>
                                    <path class="st0" d="M151,100.7c0,1.1,0.9,2,2,2s2-0.9,2-2V85.1h-51.1V74.9c0-1.1-0.9-2-2-2s-2,0.9-2,2v10.2H49.7v15.6
                        c0,1.1,0.9,2,2,2s2-0.9,2-2V89.1H151V100.7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Online Platform</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services.</p>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <div>
                            <div class="rounded-full flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path class="st0" d="M170.3,56.2V30.4l-1.6-0.3c-8-1.6-17.4,0.6-23.4,2.4V12.1c0-0.7-0.3-1.3-0.9-1.6c-0.5-0.4-1.2-0.5-1.8-0.2
                      c-0.9,0.3-21.8,8.3-43.1,44.2C93,47.3,73.4,29,44.4,29.7l-2,0l0,14.4c-3.2,0.1-9,0.4-12.4,1l-1.7,0.3l0,10.8H17.2v99.5h164.6V56.2
                      H170.3z M46.4,33.7c28.7,0.2,47.2,19.8,51.4,24.8V144c-17.1-16.3-43.9-19.2-51.4-19.7V33.7z M32.3,48.8c3.2-0.4,7.5-0.6,10.1-0.7
                      l0,80l1.9,0.1c0.3,0,30.3,1,49,17.2c-25.1-8.5-52.9-5.8-61-4.8V48.8z M21.2,151.7V60.2h7.1l0,85.1l2.3-0.4c0.4-0.1,38-6,67.5,6.6
                      c0.1,0.1,0.1,0.2,0.2,0.2H21.2z M144.3,108.2c0.6-0.4,1-1,1-1.7V36.7c5.1-1.7,13.6-3.9,21-3v90.9c-31,6.2-52.4,16.4-61.6,21.3
                      C110.1,137.5,122.7,120.9,144.3,108.2z M101.8,58.3c16.5-28.5,33.1-39.6,39.5-43.1v90.1c-21.3,12.7-33.8,28.8-39.5,37.6V58.3z
                      M177.8,151.7h-75.2c4.1-2.5,28.4-16.3,66.1-23.5l1.6-0.3V60.2h7.5V151.7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Tutoring</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services.</p>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <div>
                            <div class="rounded-full flex items-center justify-center text-white p-2">
                                <svg width="110" height="110" class="group-hover:bg-yellow-300 rounded-full text-gray-700 fill-current group-hover:text-white p-3" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 200 200">
                                    <path d="M165.7,44h-65.5l-0.2-0.3L99.8,44H35.6L0.4,90.2L101,199.8l98.6-109.5L165.7,44z M193.1,88.1h-58.2l29.8-38.8L193.1,88.1z
                      M160.6,48l-28.8,37.5L103.3,48H160.6z M100,50.3l28.8,37.8H71L100,50.3z M96.7,48L67.9,85.5L40.5,48H96.7z M36.6,49.3l28.2,38.8H7
                      L36.6,49.3z M7.6,92.1h59.2l32.1,99.4L7.6,92.1z M100.9,185L71,92.1h57.8L100.9,185z M103.2,191.4l29.7-99.3h59.6L103.2,191.4z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-gray-500 group-hover:text-white">
                            <h4 class="mb-3 text-2xl leading-6 font-medium text-gray-700 group-hover:text-white">Online Classes</h4>
                            <p class="text-md">Spectrum Consultants specialise in delivering quality affordable educational services.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <!--Footer-->
    <footer class="footer-1 bg-white pt-5 relative">

        <div class="top-0 left-0 right-0 w-full absolute text-white">
            <svg class="fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path d="M738,63l262-58v-6H0v5.6L738,63z"/>
            </svg>
        </div>

        <div class="container mx-auto mt-20 px-4">
            <div class="sm:flex sm:flex-wrap py-10">
                <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
                    <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">Stay connected</h5>
                    <div class="flex sm:justify-center xl:justify-start">
                        <a href="" class="bg-white text-lightBlue-400 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg>
                        </a>
                        <a href="" class="bg-white text-lightBlue-400 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center">
                            <svg width="17" height="17" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg>
                        </a>
                        <a href="" class="bg-white text-lightBlue-400 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.86,9.09 C18.46,12.12 17.14,16.05 13.81,17.56 C9.45,19.53 4.13,17.68 2.47,12.87 C0.68,7.68 4.22,2.42 9.5,2.03 C11.57,1.88 13.42,2.37 15.05,3.65 C15.22,3.78 15.37,3.93 15.61,4.14 C14.9,4.81 14.23,5.45 13.5,6.14 C12.27,5.08 10.84,4.72 9.28,4.98 C8.12,5.17 7.16,5.76 6.37,6.63 C4.88,8.27 4.62,10.86 5.76,12.82 C6.95,14.87 9.17,15.8 11.57,15.25 C13.27,14.87 14.76,13.33 14.89,11.75 L10.51,11.75 L10.51,9.09 L17.86,9.09 L17.86,9.09 Z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
                    <h5 class="text-xl font-bold mb-6">Features</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Cool stuff</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Random feature</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team feature</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Stuff for developers</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
                    <h5 class="text-xl font-bold mb-6">Resources</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource name</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Another resource</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Final resource</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">About</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Locations</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacy</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Terms</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">Help</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Support</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Help Center</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="flex border-t py-5 px-10 border-b border-gray-100">

                <div class="md:w-3/5 px-5">
                    <h5 class="font-bold uppercase text-gray-500">Subscribe to our newletter</h5>
                    <p>The latest news, articles, an resources, sent to your inbox</p>
                </div>
                <div class="md:w-1/3 px-5">
                    <from action="#">
                        <div class="relative">
                            <input type="text" class="h-14 w-full px-3 border border-gray-300 rounded-lg focus:shadow focus:outline-none" placeholder="Enter your email.">
                            <div class="absolute top-2 right-2">
                                <button class="h-10 w-30 px-5 text-white rounded-lg bg-blue-500 hover:bg-blue-600">Subscribe</button>
                            </div>
                        </div>
                    </from>
                </div>

            </div>

            <div class="flex py-3 justify-center items-center">
                <div class="text-gray-500">
                    <p>&copy; Copyright, spectrum, All right reserved.</p>
                </div>
            </div>

        </div>
    </footer>

</div>
<script src="index.js"></script>
</body>
</html>