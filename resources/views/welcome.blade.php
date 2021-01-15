<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'hsmess.dev') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.css" />
</head>
<body id="container" class="bg-gray-100 h-screen antialiased leading-none font-sans">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-0 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <img class="custom-logo-css" src="https://dontshootdg.s3.eu-west-2.amazonaws.com/logo_web.png" alt="">
                    </a>
                </div>
{{--                <div class="-mr-2 -my-2 md:hidden">--}}
{{--                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">--}}
{{--                        <span class="sr-only">Open menu</span>--}}
{{--                        <!-- Heroicon name: menu -->--}}
{{--                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
                <nav class="hidden md:flex space-x-10">
{{--                    <div class="relative">--}}
{{--                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->--}}
{{--                        <button type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                            <span>Solutions</span>--}}
{{--                            <!----}}
{{--                              Heroicon name: chevron-down--}}

{{--                              Item active: "text-gray-600", Item inactive: "text-gray-400"--}}
{{--                            -->--}}
{{--                            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <!----}}
{{--                          'Solutions' flyout menu, show/hide based on flyout menu state.--}}

{{--                          Entering: "transition ease-out duration-200"--}}
{{--                            From: "opacity-0 translate-y-1"--}}
{{--                            To: "opacity-100 translate-y-0"--}}
{{--                          Leaving: "transition ease-in duration-150"--}}
{{--                            From: "opacity-100 translate-y-0"--}}
{{--                            To: "opacity-0 translate-y-1"--}}
{{--                        -->--}}
{{--                        <div class="absolute -ml-4 mt-3 transform z-10 px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">--}}
{{--                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">--}}
{{--                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: chart-bar -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Analytics--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Get a better understanding of where your traffic is coming from.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: cursor-click -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Engagement--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Speak directly to your customers in a more meaningful way.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: shield-check -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Security--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Your customers&#039; data will be safe and secure.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: view-grid -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Integrations--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Connect with third-party tools that you&#039;re already using.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: refresh -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Automations--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Build strategic funnels that will drive your customers to convert--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">--}}
{{--                                    <div class="flow-root">--}}
{{--                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">--}}
{{--                                            <!-- Heroicon name: play -->--}}
{{--                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--                                            </svg>--}}
{{--                                            <span class="ml-3">Watch Demo</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="flow-root">--}}
{{--                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">--}}
{{--                                            <!-- Heroicon name: phone -->--}}
{{--                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />--}}
{{--                                            </svg>--}}
{{--                                            <span class="ml-3">Contact Sales</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">--}}
{{--                        Pricing--}}
{{--                    </a>--}}
{{--                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">--}}
{{--                        Docs--}}
{{--                    </a>--}}

{{--                    <div class="relative">--}}
{{--                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->--}}
{{--                        <button type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                            <span>More</span>--}}
{{--                            <!----}}
{{--                              Heroicon name: chevron-down--}}

{{--                              Item active: "text-gray-600", Item inactive: "text-gray-400"--}}
{{--                            -->--}}
{{--                            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <!----}}
{{--                          'More' flyout menu, show/hide based on flyout menu state.--}}

{{--                          Entering: "transition ease-out duration-200"--}}
{{--                            From: "opacity-0 translate-y-1"--}}
{{--                            To: "opacity-100 translate-y-0"--}}
{{--                          Leaving: "transition ease-in duration-150"--}}
{{--                            From: "opacity-100 translate-y-0"--}}
{{--                            To: "opacity-0 translate-y-1"--}}
{{--                        -->--}}
{{--                        <div class="absolute left-1/2 z-10 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">--}}
{{--                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">--}}
{{--                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: support -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Help Center--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Get all of your questions answered in our forums or contact support.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: bookmark-alt -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Guides--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Learn how to maximize our platform to get the most out of it.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: calendar -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Events--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                See what meet-ups and other events we might be planning near you.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">--}}
{{--                                        <!-- Heroicon name: shield-check -->--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <p class="text-base font-medium text-gray-900">--}}
{{--                                                Security--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-1 text-sm text-gray-500">--}}
{{--                                                Understand how we take your privacy seriously.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">--}}
{{--                                    <div>--}}
{{--                                        <h3 class="text-sm tracking-wide font-medium text-gray-500 uppercase">--}}
{{--                                            Recent Posts--}}
{{--                                        </h3>--}}
{{--                                        <ul class="mt-4 space-y-4">--}}
{{--                                            <li class="text-base truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">--}}
{{--                                                    Boost your conversion rate--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                            <li class="text-base truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">--}}
{{--                                                    How to use search engine optimization to drive traffic to your site--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                            <li class="text-base truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700">--}}
{{--                                                    Improve your customer experience--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="mt-5 text-sm">--}}
{{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all posts <span aria-hidden="true">&rarr;</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Sign in
                    </a>
{{--                    <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">--}}
{{--                        Sign up--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>

        <!--
          Mobile menu, show/hide based on mobile menu state.

          Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
{{--        <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">--}}
{{--            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">--}}
{{--                <div class="pt-5 pb-6 px-5">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <div>--}}
{{--                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">--}}
{{--                        </div>--}}
{{--                        <div class="-mr-2">--}}
{{--                            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">--}}
{{--                                <span class="sr-only">Close menu</span>--}}
{{--                                <!-- Heroicon name: x -->--}}
{{--                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mt-6">--}}
{{--                        <nav class="grid gap-y-8">--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">--}}
{{--                                <!-- Heroicon name: chart-bar -->--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                </svg>--}}
{{--                                <span class="ml-3 text-base font-medium text-gray-900">--}}
{{--                  Analytics--}}
{{--                </span>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">--}}
{{--                                <!-- Heroicon name: cursor-click -->--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />--}}
{{--                                </svg>--}}
{{--                                <span class="ml-3 text-base font-medium text-gray-900">--}}
{{--                  Engagement--}}
{{--                </span>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">--}}
{{--                                <!-- Heroicon name: shield-check -->--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                </svg>--}}
{{--                                <span class="ml-3 text-base font-medium text-gray-900">--}}
{{--                  Security--}}
{{--                </span>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">--}}
{{--                                <!-- Heroicon name: view-grid -->--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />--}}
{{--                                </svg>--}}
{{--                                <span class="ml-3 text-base font-medium text-gray-900">--}}
{{--                  Integrations--}}
{{--                </span>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">--}}
{{--                                <!-- Heroicon name: refresh -->--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />--}}
{{--                                </svg>--}}
{{--                                <span class="ml-3 text-base font-medium text-gray-900">--}}
{{--                  Automations--}}
{{--                </span>--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="py-6 px-5 space-y-6">--}}
{{--                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">--}}
{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Pricing--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Docs--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Enterprise--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Blog--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Help Center--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Guides--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Security--}}
{{--                        </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            Events--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">--}}
{{--                            Sign up--}}
{{--                        </a>--}}
{{--                        <p class="mt-6 text-center text-base font-medium text-gray-500">--}}
{{--                            Existing customer?--}}
{{--                            <a href="#" class="text-indigo-600 hover:text-indigo-500">--}}
{{--                                Sign in--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <main class="lg:relative bg-secondary">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-2/3 sm:px-8 xl:pr-16">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">Web Development
                    to help </span><span class="block text-indigo-600 xl:inline">grow your business</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                    I'm Harry, and I have six years of experience developing and maintaining high quality web applications, e-commerce stores and business websites, helping to manage your technology so that you can focus on what matters most - your customers.
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#my-work" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                            View My Work
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#testimonials" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Read My Testimonials
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/3 lg:h-full">
            <img class="absolute inset-0 w-full h-full object-cover op-2" src="https://dontshootdg.s3.eu-west-2.amazonaws.com/IMG_0949.jpg" alt="">
        </div>
    </main>
</div>
</div>
<div class="py-16 bg-white overflow-hidden lg:py-24" id="my-work">
    <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
        <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)" />
        </svg>

        <div class="relative">
            <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                My work speaks for itself.
            </h2>
            <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                Working with small businesses, I have brought much needed technical insights, communicated in an effective way which allowed my clients to revolutionise the way customers interact with their business.
            </p>
        </div>

        <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="relative">
                <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                    PureLine Disc Golf
                </h3>
                <p class="mt-3 text-lg text-gray-500">
                    Working alongside professional Disc Golfer Charlie Goodpasture, I built an effective custom e-commerce platform allowing Charlie to transition his very specific business requirements from a fully social-media based sales platform to a new website, increasing revenue by up to 300% and freeing up the business owner's time to better compete in the sport itself.
                </p>

                <dl class="mt-10 space-y-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Complex Requirements
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                The nature of Disc Golf e-commerce is such that products are very <em>specific</em>. Customers expect to pick a specific stock item, requiring the site handle the differentiation of Color, Weight and even Stamp Color per product.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                <!-- Heroicon name: scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Client Communication Key
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Ask Mr Goodpasture, and he would be the first to admit he is largely <em>non-technical</em>. This plus the 5 hour time difference, provided opportunities for me to develop my <em>communication</em> skills, as well as showed the need for the development of the custom CMS designed around <em>ease-of-use</em>.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                <!-- Heroicon name: lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Technologies Used
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                <em>Laravel</em> + Laravel Nova forms the backbone of the custom PHP-based CMS. The front-end is made up of custom <em>Vue.JS</em> components along with Blade templating. Checkout functionality is enabled by <em>Snipcart</em> and <em>Stripe</em>, industry standard e-commerce heavyweights.
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>

            <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                    <defs>
                        <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                </svg>
                <img class="relative mx-auto" width="490" src="https://dontshootdg.s3.eu-west-2.amazonaws.com/shotsnapp-1610714754.774.png" alt="">
            </div>
        </div>

        <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
        </svg>

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                        quarrypark.app Booking System
                    </h3>
                    <p class="mt-3 text-lg text-gray-500">
                        During the Covid-19 pandemic, the UK entertainment industry was thrown into disarray. With the requirements imposed by authorities, suddenly a booking system with online payments became a necessity. Quarry Park Disc Golf Course asked me to come up with a solution to allow them to open their doors and bring in vital revenue.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                    <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    24 Hour Concept to Release
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Facing being forced to remain closed until a solution was found, the website was developed as <em>rapidly</em> as possible, and within <em>24 hours</em> there was reservations being taken. An <em>iterative development</em> cycle then commenced, rolling out payments as well as other features as they became completed.
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                    <!-- Heroicon name: lightning-bolt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Technologies Used
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    <em>Laravel</em> with <em>Alpine.JS</em> facilitated rapid development, and <em>Tailwind UI</em> allowed components to be used facilitating a fast, quick, clean design. <em>PayPal</em> and <em>Stripe</em> were used to enable payments.
                                    The system is equipped with email <em>notifications</em> and reciepts, facilitating a full booking experience.
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="1175" height="606" fill="none" viewBox="0 0 1175 606" aria-hidden="true">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="1175" height="606" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                    </svg>
                    <img class="relative mx-auto" width="735" src="https://dontshootdg.s3.eu-west-2.amazonaws.com/shotsnapp-1610715915.182.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<section class="py-12 bg-secondary overflow-hidden md:py-20 lg:py-24" id="testimonials">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
            <title id="svg-workcation">Pureline</title>
            <defs>
                <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
        </svg>

        <div class="relative">
            <img class="mx-auto h-16" src="https://purelinedg.com/images/logo/pureline.svg" alt="Workcation">
            <blockquote class="mt-4">
                <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                        &ldquo;The work that Harry has done over the last two years has enabled me to take my business to the next level. I'm grateful for all the passion and ideas that Harry has put into making my dream a reality!&rdquo;
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                        <div class="md:flex-shrink-0">
                            <img class="mx-auto h-10 w-10 rounded-full" src="https://dontshootdg.s3.eu-west-2.amazonaws.com/charlie256.jpg" alt="">
                        </div>
                        <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                            <div class="text-base font-medium text-gray-900">Charlie Goodpasture</div>

                            <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M11 0h3L9 20H6l5-20z" />
                            </svg>

                            <div class="text-base font-medium text-gray-500">Owner, PureLine</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
<footer class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="https://facebook.com/harry-discgolf-3" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="https://instagr.am/harry.messenger" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="https://twitter.com/harrysmessenger" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>

            <a href="https://github.com/hsmess" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-400">
                &copy; {{date('Y')}} Harry Messenger - Built with ❤ <span class="space"> </span>by <a href="https://hsmess.dev">hsmess.dev</a>
            </p>
        </div>
    </div>
</footer>
</body>
</html>
