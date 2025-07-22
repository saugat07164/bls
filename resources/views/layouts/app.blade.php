<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BLS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="/js/app.js" defer></script>
@livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <div class="min-h-screen bg-gray-100 relative" x-data="{ sidebarOpen: false }">
    <!-- Sidebar Toggle Button -->
    <button
        class="fixed top-1/2 -translate-y-1/2 left-0 p-3 bg-[#1A2B4C] text-yellow-300 rounded-r-full shadow-lg hover:bg-[#6699CC] z-50"
        @click="sidebarOpen = true"
        x-show="!sidebarOpen"
        x-transition
    >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Sidebar Panel -->
    <div
        class="fixed top-0 left-0 h-full w-72 bg-[#1A2B4C] text-white shadow-xl z-50 rounded-r-lg backdrop-blur-sm overflow-y-auto"
        x-show="sidebarOpen"
        @click.away="sidebarOpen = false"
        x-transition
    >
        <div class="p-6 relative">
            <!-- Close Button -->
            <button class="absolute top-4 right-4 text-gray-300 hover:text-white" @click="sidebarOpen = false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Logo & Tagline -->
            <div class="text-center mb-6 mt-4">
                <img src="{{ asset('storage/images/logo.svg') }}" alt="Organization Logo" class="mx-auto h-16 w-16 mb-2">
                <p class="text-sm text-[#b2b2b2] italic font-semibold">"Solutions That Matter."</p>
            </div>

            <h2 class="text-2xl font-bold mb-6 text-[#FFD700]">BLS Menu</h2>

            <!-- Navigation -->
            <nav>
                <ul class="space-y-2">

                    @php
                                $dashboardRoute = 'dashboard'; // fallback
                                if (auth()->user()?->hasRole('admin')) {
                                    $dashboardRoute = 'dashboard.admin';
                                } elseif (auth()->user()?->hasRole('staff')) {
                                    $dashboardRoute = 'dashboard.staff';
                                } elseif (auth()->user()?->hasRole('instructor')) {
                                    $dashboardRoute = 'dashboard.instructor';
                                } elseif (auth()->user()?->hasRole('student')) {
                                    $dashboardRoute = 'dashboard.student';
                                } elseif (auth()->user()?->hasRole('support')) {
                                    $dashboardRoute = 'dashboard.support';
                                } elseif (auth()->user()?->hasRole('visitor')) {
                                    $dashboardRoute = 'dashboard.visitor';
                                }
                            @endphp
                            
                            <li>
                                <a href="{{ route($dashboardRoute) }}" 
                                   class="flex items-center p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 group"

                                   wire:navigate>
                                    <svg class="w-5 h-5 mr-3 text-[#FFD700]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>

                    <!-- Profile -->
                    <li>
                        <a href="{{ route('profile') }}"
                           class="flex items-center p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Profile</span>
                        </a>
                    </li>

                    <!-- Contact Messages -->
                    <li>
                        <a href="#"
                           class="flex items-center p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 group">
                            <i class="fa-solid fa-paper-plane mr-3 text-[#FFD700] group-hover:text-white"></i>
                            <span>Contact Messages</span>
                        </a>
                    </li>
<!-- Finance -->
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center w-full p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 focus:outline-none group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M18 10V6M6 18h.01M18 18h.01M6 14h.01M18 14h.01M12 18h.01M12 14h.01M9 10h.01M15 10h.01M3 21h18a1 1 0 001-1V4a1 1 0 00-1-1H3a1 1 0 00-1 1v16a1 1 0 001 1z" />
                            </svg>
                            <span class="flex-1 text-left">Finance</span>
                            <svg :class="{'rotate-90': open}" class="w-4 h-4 text-[#b2b2b2] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-6 space-y-1 mt-1">
                            <li class="flex items-center justify-between">
                                <a href="#" class="p-2 rounded hover:bg-[#6699CC] flex-1">Income</a>
                        {{--      <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>--}}
                            </li>
                            <li class="flex items-center justify-between">
                                <a href="{{ route('expenses.index') }}" class="p-2 rounded hover:bg-[#6699CC] flex-1">Expenses</a>
                                {{--<span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>--}}
                            </li>
                            <li class="flex items-center justify-between">
                                <a href="#" class="p-2 rounded hover:bg-[#6699CC] flex-1">Progress Overview</a>
                                <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>
                            </li>
                        </ul>
                    </li>
                    <!-- Courses Dropdown -->
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center w-full p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 focus:outline-none group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="flex-1 text-left">Courses</span>
                            <svg :class="{'rotate-90': open}" class="w-4 h-4 text-[#b2b2b2] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-6 space-y-1 mt-1">
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Browse Courses</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Categories</a></li>
                            <li class="flex items-center justify-between">
                                <a href="#" class="p-2 rounded hover:bg-[#6699CC] flex-1">My Courses</a>
                                <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>
                            </li>
                        </ul>
                    </li>

                    <!-- Course Builder -->
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center w-full p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 focus:outline-none group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065zM12 15a3 3 0 100-6 3 3 0 000 6z" />
                            </svg>
                            <span class="flex-1 text-left">Course Builder</span>
                            <svg :class="{'rotate-90': open}" class="w-4 h-4 text-[#b2b2b2] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-6 space-y-1 mt-1">
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Chapters</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Units</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Set Course Status</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Set Course Instructor</a></li>
                        </ul>
                    </li>

                    

                    <!-- Management -->
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center w-full p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 focus:outline-none group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="flex-1 text-left">Management</span>
                            <svg :class="{'rotate-90': open}" class="w-4 h-4 text-[#b2b2b2] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-6 space-y-1 mt-1">
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Users</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Roles</a></li>
                            <li class="flex items-center justify-between">
                                <a href="#" class="block p-2 rounded hover:bg-[#6699CC]">Notifications</a>
                                <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>
                            </li>
                        </ul>
                    </li>

                    <!-- My Learning -->
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center w-full p-3 rounded-lg hover:bg-[#6699CC] transition-colors duration-200 focus:outline-none group">
                            <svg class="w-5 h-5 mr-3 text-[#FFD700] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="flex-1 text-left">My Learning</span>
                            <svg :class="{'rotate-90': open}" class="w-4 h-4 text-[#b2b2b2] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-6 space-y-1 mt-1">
                            <li class="flex items-center justify-between">
                                <a href="#" class="block p-2 rounded hover:bg-[#6699CC]">My Enrollments</a>
                                <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>
                            </li>
                            <li class="flex items-center justify-between">
                                <a href="#" class="block p-2 rounded hover:bg-[#6699CC]">My Progress</a>
                                <span class="ml-2 text-xs font-semibold text-yellow-300 bg-yellow-800 bg-opacity-20 px-2 py-0.5 rounded-full animate-pulse shadow-sm border border-yellow-400">
                                    🚧 Soon
                                </span>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
        </div>
         @livewireScripts
<script src="{{ mix('js/app.js') }}"></script>

<footer class="bg-[#1A2B4C] text-white mt-10">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Column 1: Brand Info -->
            <div>
                <h2 class="text-xl font-semibold text-[#FFD700]">Biratlaxmi Solutions</h2>
                <p class="text-[#b2b2b2] text-sm mt-2">
                    Empowering businesses with smarter, scalable, and secure technology solutions.
                </p>
                <p class="text-[#b2b2b2] text-xs mt-4">
                    &copy; 2025 Biratlaxmi Solutions. All Rights Reserved.
                </p>
            </div>

            <!-- Column 2: Link Columns -->
            <div class="grid grid-cols-3 gap-6">

                <!-- Services -->
                <div>
                    <h3 class="font-semibold text-[#FFD700] mb-3">Services</h3>
                    <ul class="space-y-2 text-sm text-[#b2b2b2]">
                        <li><a href="/services/software-development" class="hover:text-white transition">Software Development</a></li>
                        <li><a href="/services/cloud-solutions" class="hover:text-white transition">Cloud Solutions</a></li>
                        <li><a href="/services/cybersecurity" class="hover:text-white transition">Cybersecurity</a></li>
                        <li><a href="/services/ai-machine-learning" class="hover:text-white transition">AI & ML</a></li>
                        <li><a href="/services/it-consulting" class="hover:text-white transition">IT Consulting</a></li>
                        <li><a href="/services/mobile-apps" class="hover:text-white transition">Mobile Apps</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="font-semibold text-[#FFD700] mb-3">Company</h3>
                    <ul class="space-y-2 text-sm text-[#b2b2b2]">
                        <li><a href="/about" class="hover:text-white transition">About Us</a></li>
                        <li><a href="/team" class="hover:text-white transition">Our Team</a></li>
                        <li><a href="/careers" class="hover:text-white transition">Careers</a></li>
                        <li><a href="/blog" class="hover:text-white transition">Blog</a></li>
                        <li><a href="/case-studies" class="hover:text-white transition">Case Studies</a></li>
                        <li><a href="/partners" class="hover:text-white transition">Partners</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="font-semibold text-[#FFD700] mb-3">Support</h3>
                    <ul class="space-y-2 text-sm text-[#b2b2b2]">
                        <li><a href="/contact" class="hover:text-white transition">Contact Us</a></li>
                        <li><a href="/support" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="/faq" class="hover:text-white transition">FAQs</a></li>
                        <li><a href="/privacy-policy" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="/terms-of-service" class="hover:text-white transition">Terms of Service</a></li>
                        <li><a href="/status" class="hover:text-white transition">System Status</a></li>
                    </ul>
                </div>

            </div>

            <!-- Column 3: Social Media -->
            <div class="flex flex-col items-start md:items-end space-y-4">
                <div class="flex space-x-5">
                    <a href="#" class="hover:opacity-80 transition" aria-label="Facebook">
                        <img src="{{ asset('storage/images/social/fb.png') }}" alt="Facebook" class="h-8 w-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition" aria-label="Instagram">
                        <img src="{{ asset('storage/images/social/insta.png') }}" alt="Instagram" class="h-8 w-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition" aria-label="X">
                        <img src="{{ asset('storage/images/social/x.png') }}" alt="X" class="h-8 w-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition" aria-label="LinkedIn">
                        <img src="{{ asset('storage/images/social/linkedin.png') }}" alt="LinkedIn" class="h-8 w-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition" aria-label="YouTube">
                        <img src="{{ asset('storage/images/social/youtube.png') }}" alt="YouTube" class="h-8 w-8">
                    </a>
                </div>
                <div class="text-xs text-[#b2b2b2] text-center md:text-right mt-2">
                    Follow us for updates, tech tips, and insights.
                </div>
            </div>

        </div>
    </div>

    <!-- Attribution Marquee -->
    <div class="w-full bg-[#132137] overflow-hidden py-1">
        <div class="animate-marquee whitespace-nowrap text-[10px] text-[#b2b2b2]">
            <span class="inline-block px-4">
                <a href="https://www.flaticon.com/free-icons/facebook" title="facebook icons" class="hover:text-white">Facebook icons by Hight Quality Icons</a> |
                <a href="https://www.flaticon.com/free-icons/brands-and-logotypes" title="brands and logotypes icons" class="hover:text-white">Brands icons by Freepik</a> |
                <a href="https://www.flaticon.com/free-icons/linkedin" title="linkedin icons" class="hover:text-white">Linkedin icons by Md Tanvirul Haque</a>
            </span>
        </div>
    </div>
</footer>

<!-- Add this style in your CSS -->
<style>
@keyframes marquee {
  0%   { transform: translateX(100%); }
  100% { transform: translateX(-100%); }
}

.animate-marquee {
  display: inline-block;
  white-space: nowrap;
  animation: marquee 30s linear infinite;
}
</style>



    </body>
</html>