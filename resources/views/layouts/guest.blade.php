<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BLS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net ">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css " />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Custom Animation Style -->
        <style>
            @keyframes flyIn {
                from {
                    opacity: 0;
                    transform: translateY(-50px) scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .animate-fly-in {
                animation: flyIn 0.8s ease-out forwards;
                will-change: transform, opacity;
            }
        </style>

        <script src="/js/app.js" defer></script>
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center bg-cover bg-center relative" style="background-image: url('{{ asset('storage/images/banner.jpg') }}');">

    

           <!-- Login Card with Glassmorphic Styling -->
<div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white/10 backdrop-blur-md border border-white/20 text-white shadow-xl rounded-xl animate-fly-in relative z-10">
    <!-- Logo Inside Card -->
    <div class="flex justify-center mb-6">
        <img 
            src="{{ asset('storage/images/logo_with_stroke.png') }}" 
            alt="{{ config('app.name') }} Logo"
            class="h-16 w-auto object-contain"
            onerror="this.src='{{ asset('images/default-logo.png') }}'; this.onerror=null;"
        >
    </div>

    {{ $slot }}
</div>

        </div>

        @livewireScripts
        <script src="{{ mix('js/app.js') }}"></script>

        <!-- Trigger Animation on Load -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const img = document.querySelector('#logo-container img');
                // Wait for image to load for smooth appearance
                img.onload = () => {
                    img.classList.remove('opacity-0');
                    img.classList.add('animate-fly-in');
                };
                // Fallback in case image is cached
                if (img.complete) img.onload();
            });
        </script>
        <footer class="bg-[#1A2B4C] text-white">
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