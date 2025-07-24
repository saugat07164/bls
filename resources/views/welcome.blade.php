<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BiratLaxmi Solutions</title>
  <link href="/css/output.css" rel="stylesheet" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
  @livewireStyles
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

 <section class="relative h-screen flex items-center justify-center text-center">
    <div 
        class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0 pointer-events-none"
        style="background-image: url('{{ asset('storage/images/banner.jpg') }}');">
    </div>
    <div class="absolute inset-0 bg-black/60 z-10"></div>
    <div class="relative z-20 space-y-8">
        <!-- Logo and Title -->
        <div class="flex items-center justify-center gap-4">
            <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo" class="w-16 h-16">
            <h1 class="text-5xl font-extrabold text-white">BiratLaxmi Solutions</h1>
        </div>

        <!-- Subtitle -->
        <p class="text-2xl text-gray-200">Solutions That Matter</p>

        <!-- Buttons -->
        <div class="flex justify-center gap-6">
            <a href="{{ route('login') }}" class="px-6 py-3 bg-white/30 hover:bg-white/40 rounded-xl text-white shadow-lg text-lg">Login</a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-white/30 hover:bg-white/40 rounded-xl text-white shadow-lg text-lg">Register</a>
        </div>
    </div>
</section>



  <section class="py-20 bg-white text-center font-[Inter]">
    <!-- Main heading for the section -->
    <h2 class="text-4xl font-bold mb-6 font-serif text-[#1A2B4C]">Our Latest Insights</h2>
    <!-- Sub-paragraph providing context -->
    <p class="max-w-3xl mx-auto text-gray-700 mb-10">Dive into our blog for articles on technology, development, and digital trends.</p>

    <!-- Tag/Category filters -->
    <div class="flex flex-wrap justify-center gap-4 mb-12">
      <!-- Web Apps tag -->
      <a href="#" class="px-5 py-2 bg-[#6699CC] text-[#1A2B4C] rounded-full text-sm font-semibold hover:bg-opacity-80 transition duration-150 ease-in-out shadow-sm">Web Apps</a>
      <!-- E-Commerce tag -->
      <a href="#" class="px-5 py-2 bg-[#6699CC] text-[#1A2B4C] rounded-full text-sm font-semibold hover:bg-opacity-80 transition duration-150 ease-in-out shadow-sm">E-Commerce</a>
      <!-- SaaS tag -->
      <a href="#" class="px-5 py-2 bg-[#6699CC] text-[#1A2B4C] rounded-full text-sm font-semibold hover:bg-opacity-80 transition duration-150 ease-in-out shadow-sm">SaaS</a>
      <!-- Mobile Development tag -->
      <a href="#" class="px-5 py-2 bg-[#6699CC] text-[#1A2B4C] rounded-full text-sm font-semibold hover:bg-opacity-80 transition duration-150 ease-in-out shadow-sm">Mobile Development</a>
      <!-- Laravel & Livewire tag -->
      <a href="#" class="px-5 py-2 bg-[#6699CC] text-[#1A2B4C] rounded-full text-sm font-semibold hover:bg-opacity-80 transition duration-150 ease-in-out shadow-sm">Laravel & Livewire</a>
    </div>

    <!-- Blog Post Cards Container -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">

      <!-- Blog Post Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col h-full">
        <!-- Image for the blog post -->
        <img src="https://placehold.co/600x400/1A2B4C/FFFFFF?text=Web+Development" alt="Blog Post Image 1" class="w-full h-48 object-cover">
        <div class="p-6 flex flex-col flex-grow">
          <!-- Title of the blog post -->
          <h3 class="text-2xl font-semibold text-[#1A2B4C] mb-3 text-left">The Future of Web Development with AI</h3>
          <!-- Description of the blog post -->
          <p class="text-gray-700 text-left mb-4 flex-grow">Explore how artificial intelligence is revolutionizing the way we build and deploy web applications, from automated coding to intelligent user interfaces.</p>
          <!-- Read More button -->
          <div class="mt-auto text-left">
            <a href="#" class="inline-block px-6 py-2 bg-[#1A2B4C] text-white rounded-lg shadow-md hover:bg-opacity-90 transition duration-150 ease-in-out">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col h-full">
        <!-- Image for the blog post -->
        <img src="https://placehold.co/600x400/6699CC/1A2B4C?text=UI/UX+Design" alt="Blog Post Image 2" class="w-full h-48 object-cover">
        <div class="p-6 flex flex-col flex-grow">
          <!-- Title of the blog post -->
          <h3 class="text-2xl font-semibold text-[#1A2B4C] mb-3 text-left">Crafting Seamless User Experiences: A UI/UX Guide</h3>
          <!-- Description of the blog post -->
          <p class="text-gray-700 text-left mb-4 flex-grow">Dive into the principles of effective UI/UX design and learn how to create intuitive and delightful digital journeys for your users.</p>
          <!-- Read More button -->
          <div class="mt-auto text-left">
            <a href="#" class="inline-block px-6 py-2 bg-[#1A2B4C] text-white rounded-lg shadow-md hover:bg-opacity-90 transition duration-150 ease-in-out">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col h-full">
        <!-- Image for the blog post -->
        <img src="https://placehold.co/600x400/FFD700/1A2B4C?text=Application+Scaling" alt="Blog Post Image 3" class="w-full h-48 object-cover">
        <div class="p-6 flex flex-col flex-grow">
          <!-- Title of the blog post -->
          <h3 class="text-2xl font-semibold text-[#1A2B4C] mb-3 text-left">Scaling Your Application: Best Practices for Performance</h3>
          <!-- Description of the blog post -->
          <p class="text-gray-700 text-left mb-4 flex-grow">Learn about crucial strategies and tools to ensure your application remains fast, reliable, and scalable as your user base grows.</p>
          <!-- Read More button -->
          <div class="mt-auto text-left">
            <a href="#" class="inline-block px-6 py-2 bg-[#1A2B4C] text-white rounded-lg shadow-md hover:bg-opacity-90 transition duration-150 ease-in-out">Read More</a>
          </div>
        </div>
      </div>

    </div>
    <!-- View All Blog Posts button -->
    <div class="mt-12">
        <a href="#" class="inline-block px-8 py-3 bg-[#b2b2b2] text-[#1A2B4C] rounded-lg shadow-md hover:bg-opacity-80 transition duration-150 ease-in-out text-lg font-semibold">View All Blog Posts</a>
    </div>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts for Inter (if not already loaded) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
      /* Apply Inter font family globally */
      body {
        font-family: 'Inter', sans-serif;
      }
    </style>
</section>
  <section class="py-20 bg-gray-100 text-center">
    <h2 class="text-4xl font-bold mb-12">Meet Our Team</h2>
    <div class="px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">

            <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center transform hover:scale-105 transition duration-300 ease-in-out w-full max-w-xs">
                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Team Member 1" class="rounded-full w-32 h-32 object-cover mb-4 ring-2 ring-blue-500 ring-offset-2">
                <h3 class="text-2xl font-semibold text-gray-900 mb-1">Bishnu Sharma</h3>
                <p class="text-blue-600 font-medium mb-2">Lead Laravel Architect</p>
                <ul class="text-sm text-gray-700 text-left w-full space-y-1">
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> 10+ Years in Web Development</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Expert in Laravel & Livewire</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Database Optimization (SQL, NoSQL)</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> AWS Cloud Solutions</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center transform hover:scale-105 transition duration-300 ease-in-out w-full max-w-xs">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Team Member 2" class="rounded-full w-32 h-32 object-cover mb-4 ring-2 ring-pink-500 ring-offset-2">
                <h3 class="text-2xl font-semibold text-gray-900 mb-1">Sarita Devi</h3>
                <p class="text-blue-600 font-medium mb-2">UI/UX Designer & Frontend Lead</p>
                <ul class="text-sm text-gray-700 text-left w-full space-y-1">
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Figma & Adobe XD Proficient</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Responsive Design Expert</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Tailwind CSS & Vue.js</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> User Experience Flow</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center transform hover:scale-105 transition duration-300 ease-in-out w-full max-w-xs">
                <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Team Member 3" class="rounded-full w-32 h-32 object-cover mb-4 ring-2 ring-green-500 ring-offset-2">
                <h3 class="text-2xl font-semibold text-gray-900 mb-1">Ram Prasad</h3>
                <p class="text-blue-600 font-medium mb-2">DevOps Engineer</p>
                <ul class="text-sm text-gray-700 text-left w-full space-y-1">
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> CI/CD Pipelines (GitLab, GitHub Actions)</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Docker & Kubernetes</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Server Management (Nginx, Apache)</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Azure/GCP Deployments</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center transform hover:scale-105 transition duration-300 ease-in-out w-full max-w-xs">
                <img src="https://images.pexels.com/photos/775358/pexels-photo-775358.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Team Member 4" class="rounded-full w-32 h-32 object-cover mb-4 ring-2 ring-purple-500 ring-offset-2">
                <h3 class="text-2xl font-semibold text-gray-900 mb-1">Priya Karki</h3>
                <p class="text-blue-600 font-medium mb-2">Full-stack Developer</p>
                <ul class="text-sm text-gray-700 text-left w-full space-y-1">
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> PHP, Node.js & Python</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> React & Angular Experience</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> API Development & Integration</li>
                    <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Agile Methodologies</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<section class="relative h-[500px] bg-fixed bg-cover bg-center"
         style="background-image: url('{{ asset('storage/images/parallax2.jpg') }}');">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-6 text-center">
    <h2 class="text-4xl font-bold">You get what you wanted</h2>
    <p class="text-xl text-gray-300">Because we work hard to meet your requirements.</p>
  </div>
</section>

<!-- New Section 1: Lightweight Colorful Tech Features -->
<section class="py-20 bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 text-gray-900 px-6">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-10 text-indigo-900">Empowering Your Digital Future</h2>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="p-8 bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-pink-300 transition duration-300 border border-white/40">
        <svg class="mx-auto mb-4 w-14 h-14 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="8" width="18" height="12" rx="2" ry="2"></rect>
          <circle cx="7" cy="14" r="1.5"></circle>
          <circle cx="17" cy="14" r="1.5"></circle>
          <path d="M12 8V5M9 2h6"></path>
        </svg>
        <h3 class="text-xl font-semibold mb-2 text-pink-700">Cutting-Edge AI Solutions</h3>
        <p class="text-sm text-gray-700">Harness the power of AI to automate and innovate your business workflows.</p>
      </div>

      <!-- Card 2 -->
      <div class="p-8 bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-indigo-300 transition duration-300 border border-white/40">
        <svg class="mx-auto mb-4 w-14 h-14 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M20 16.58A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 4 16.25" />
          <path d="M16 17H7a4 4 0 0 1 0-8c.34 0 .68.04 1 .1" />
        </svg>
        <h3 class="text-xl font-semibold mb-2 text-indigo-700">Cloud Integration</h3>
        <p class="text-sm text-gray-700">Seamlessly connect your apps with scalable, secure cloud infrastructure.</p>
      </div>

      <!-- Card 3 -->
      <div class="p-8 bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-purple-300 transition duration-300 border border-white/40">
        <svg class="mx-auto mb-4 w-14 h-14 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
          <path d="M16 3h-8v4h8V3z"/>
        </svg>
        <h3 class="text-xl font-semibold mb-2 text-purple-700">Custom Software Development</h3>
        <p class="text-sm text-gray-700">Build software tailored exactly to your unique business needs.</p>
      </div>
    </div>
  </div>
</section>


<!-- New Section 2: Shop/Products -->
<section class="py-20 bg-gray-50 px-6">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-10 text-gray-900">Explore Our Tech Products</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
      
      <!-- Product 1 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-6 flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="Smart IoT Hub"
             class="mb-4 rounded-lg w-full h-40 object-cover">
        <h3 class="text-xl font-semibold mb-2">Smart IoT Hub</h3>
        <p class="text-gray-600 mb-4">Control your smart home devices easily and securely.</p>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Buy Now</button>
      </div>

      <!-- Product 2 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-6 flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1677756119517-756a188d2d94?q=80&w=1450&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="AI Robot Assistant"
             class="mb-4 rounded-lg w-full h-40 object-cover">
        <h3 class="text-xl font-semibold mb-2">AI Robot Assistant</h3>
        <p class="text-gray-600 mb-4">Your personal AI assistant for daily tasks and productivity.</p>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Buy Now</button>
      </div>

      <!-- Product 3 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-6 flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1592478411213-6153e4ebc07d?q=80&w=812&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="VR Gaming Kit"
             class="mb-4 rounded-lg w-full h-40 object-cover">
        <h3 class="text-xl font-semibold mb-2">VR Gaming Kit</h3>
        <p class="text-gray-600 mb-4">Immerse yourself in next-gen virtual reality gaming.</p>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Buy Now</button>
      </div>

      <!-- Product 4 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-6 flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80"
             alt="Ultra Laptop Pro"
             class="mb-4 rounded-lg w-full h-40 object-cover">
        <h3 class="text-xl font-semibold mb-2">Ultra Laptop Pro</h3>
        <p class="text-gray-600 mb-4">Powerful performance in a sleek, ultra-portable design.</p>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Buy Now</button>
      </div>

    </div>
  </div>
</section>


<section class="bg-white py-20 text-center px-6"
         x-data="{
           index: 0,
           testimonials: [
             { name: 'Ramesh K.', text: '“Best Laravel team I’ve worked with!”' },
             { name: 'Sita R.', text: '“Delivered our project 2 weeks early, and pixel perfect.”' },
             { name: 'Bikash T.', text: '“The only devs I trust for big builds.”' }
           ],
           starRatings: [],
           generateStars() {
             this.starRatings = this.testimonials.map(() => Math.floor(Math.random() * 5) + 1);
           }
         }"
         x-init="generateStars()"
>
  <h2 class="text-4xl font-bold mb-10">What Our Clients Say</h2>
  <div class="max-w-2xl mx-auto">
    <p class="text-xl italic text-gray-700" x-text="testimonials[index].text"></p>
    <h4 class="mt-4 font-semibold text-gray-900" x-text="testimonials[index].name"></h4>
    <div class="flex justify-center mt-2 space-x-1 text-yellow-400 text-2xl">
      <template x-for="star in 5" :key="star">
        <span x-html="star <= starRatings[index] ? '&#9733;' : '&#9734;'"></span>
      </template>
    </div>

    <div class="flex justify-center gap-3 mt-6">
      <button @click="index = (index - 1 + testimonials.length) % testimonials.length"
              class="px-4 py-2 bg-[#1A2B4C] text-white rounded-lg shadow-sm
                     hover:bg-gray-300 hover:text-gray-900
                     focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50
                     transition ease-in-out duration-150 text-xl font-bold">
        &larr;
      </button>
      <button @click="index = (index + 1) % testimonials.length"
              class="px-4 py-2 bg-[#1A2B4C] text-white rounded-lg shadow-sm
                     hover:bg-gray-300 hover:text-gray-900
                     focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50
                     transition ease-in-out duration-150 text-xl font-bold">
        &rarr;
      </button>
    </div>
  </div>
</section>



 <section class="relative h-[500px] flex flex-row overflow-hidden bg-cover bg-center"
         style="background-image: url('{{ asset('storage/images/parallax1.jpg') }}')"
         id="heroSection">

  <!-- Main Hero Content -->
  <!-- Modern Features Sidebar Panel -->
<div id="featuresPanel"
     class="absolute right-0 top-0 h-full w-full bg-white text-gray-800 shadow-2xl p-10 transform translate-x-full transition-transform duration-500 ease-in-out z-30 overflow-y-auto">


  <h3 class="text-3xl font-extrabold text-blue-900 mb-8 border-b pb-3">What We Offer</h3>

  <div class="grid gap-6 md:grid-cols-2">
    <div class="bg-blue-50 p-5 rounded-xl border-l-4 border-blue-400 shadow-sm hover:scale-[1.02] transition duration-300">
      <h4 class="font-semibold text-lg text-blue-800">Custom Software</h4>
      <p class="text-sm text-blue-700 mt-1">Tailored applications for your unique business needs.</p>
    </div>

    <div class="bg-yellow-50 p-5 rounded-xl border-l-4 border-yellow-400 shadow-sm hover:scale-[1.02] transition duration-300">
      <h4 class="font-semibold text-lg text-yellow-700">System Integration</h4>
      <p class="text-sm text-yellow-600 mt-1">Connecting all your services into a seamless workflow.</p>
    </div>

    <div class="bg-green-50 p-5 rounded-xl border-l-4 border-green-400 shadow-sm hover:scale-[1.02] transition duration-300">
      <h4 class="font-semibold text-lg text-green-700">Digital Transformation</h4>
      <p class="text-sm text-green-600 mt-1">Modernize your business with cutting-edge solutions.</p>
    </div>

    <div class="bg-purple-50 p-5 rounded-xl border-l-4 border-purple-400 shadow-sm hover:scale-[1.02] transition duration-300">
      <h4 class="font-semibold text-lg text-purple-700">Cloud Solutions</h4>
      <p class="text-sm text-purple-600 mt-1">Reliable, secure, and scalable cloud technologies.</p>
    </div>

    <div class="bg-pink-50 p-5 rounded-xl border-l-4 border-pink-400 shadow-sm hover:scale-[1.02] transition duration-300 col-span-2">
      <h4 class="font-semibold text-lg text-pink-700">AI & Automation</h4>
      <p class="text-sm text-pink-600 mt-1">Leverage artificial intelligence to boost efficiency.</p>
    </div>
  </div>
</div>

</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const panel = document.getElementById("featuresPanel");
    const section = document.getElementById("heroSection");

    let hasInteracted = false; // Prevents animation on initial load if already in view

    const observer = new IntersectionObserver(
      (entries) => {
        const entry = entries[0];

        // Delay setting `hasInteracted` until user actually scrolls
        if (!hasInteracted && entry.isIntersecting) {
          // Only mark as "interacted" after first scroll-in
          hasInteracted = true;
        }

        if (entry.isIntersecting && hasInteracted) {
          // Slide in when entering
          panel.classList.remove("translate-x-full");
        } else if (hasInteracted && !entry.isIntersecting) {
          // Slide out when leaving
          panel.classList.add("translate-x-full");
        }
      },
      {
        threshold: 0.1,           // Trigger when 10% is visible
        rootMargin: "-100px 0px", // Trigger ~100px before/after section hits viewport
      }
    );

    // Observe the section
    observer.observe(section);
  });
</script>





<section 
  class="py-20 text-center bg-white px-6" 
  x-data="processAnimation()" 
  x-init="observe()" 
  x-ref="section"
>
  <h2 class="text-4xl font-bold mb-12">Our Streamlined Development Process</h2>
  <div class="grid md:grid-cols-4 gap-8 max-w-4xl mx-auto">
    
    <template x-for="(step, i) in steps" :key="i">
      <div 
        class="p-8 rounded-xl bg-gray-200 text-gray-700 font-semibold cursor-pointer transition-all duration-300 flex flex-col items-center"
        :class="[
          step.hovered ? step.hoverClass + ' text-white' : '',
          'hover:' + step.hoverClass + ' hover:text-white'
        ]"
      >
        <div class="mb-4">
          <svg 
            class="w-10 h-10 stroke-current" 
            fill="none" 
            stroke-width="2" 
            viewBox="0 0 24 24" 
            stroke-linecap="round" 
            stroke-linejoin="round"
            x-html="step.icon"
          ></svg>
        </div>
        <div x-text="step.title"></div>
      </div>
    </template>
    
  </div>
</section>

<script>
  function processAnimation() {
    return {
      steps: [
        {
          title: 'Plan',
          hoverClass: 'bg-blue-500',
          hovered: false,
          icon: `
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
            <path d="M15 2H9a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"></path>
            <line x1="12" y1="10" x2="12" y2="14"></line>
            <line x1="10" y1="12" x2="14" y2="12"></line>
          `
        },
        {
          title: 'Design',
          hoverClass: 'bg-purple-600',
          hovered: false,
          icon: `
            <path d="M2 16.5v3a2 2 0 0 0 2 2h3l11-11-5-5-11 11z"></path>
            <path d="M14.5 5.5l4 4"></path>
          `
        },
        {
          title: 'Develop',
          hoverClass: 'bg-green-600',
          hovered: false,
          icon: `
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
          `
        },
        {
          title: 'Deploy',
          hoverClass: 'bg-yellow-500',
          hovered: false,
          icon: `
            <path d="M12 2L2 7l10 5 10-5L12 2z"></path>
            <path d="M2 17l10 5 10-5"></path>
            <path d="M2 12l10 5 10-5"></path>
          `
        }
      ],
      lastShown: 0,
      observe() {
        const observer = new IntersectionObserver(([entry]) => {
          if (entry.isIntersecting && Date.now() - this.lastShown > 1500) {
            this.lastShown = Date.now()
            this.animateSteps()
          }
        }, { threshold: 0.4 })

        observer.observe(this.$refs.section)
      },
      async animateSteps() {
        // Reset all
        this.steps.forEach(s => s.hovered = false)

        for (let i = 0; i < this.steps.length; i++) {
          this.steps[i].hovered = true
          await new Promise(resolve => setTimeout(resolve, 200)) // wait before lighting next
          this.steps[i].hovered = false
        }
      }
    }
  }
</script>




<section class="py-20 px-6 bg-gradient-to-br from-indigo-50 via-white to-purple-100 text-center">
  <h2 class="text-5xl font-extrabold text-gray-900 mb-4">Crafting Seamless Digital Journeys</h2>
  <p class="max-w-2xl mx-auto text-gray-600 text-lg mb-10">
    We turn clicks into connections—delivering fast, secure, and mobile-first experiences designed to make users fall in love.
  </p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
    <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-indigo-300 transition hover:-translate-y-1 duration-300">
      <div class="text-indigo-500 mb-4">
        <i class="fas fa-bolt text-yellow-500 text-4xl mx-auto"></i>

      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Lightning Fast Delivery</h3>
      <p class="text-gray-600 text-sm">We deploy at the speed of thought—agile, efficient, and deadline-proof.</p>
    </div>

    <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-purple-300 transition hover:-translate-y-1 duration-300">
      <div class="text-purple-500 mb-4">
        <i class="fas fa-lock text-gray-800 text-3xl mx-auto"></i>

      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Secure by Design</h3>
      <p class="text-gray-600 text-sm">Security isn’t a feature—it’s our architecture’s backbone.</p>
    </div>

    <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-pink-300 transition hover:-translate-y-1 duration-300">
      <div class="text-pink-500 mb-4">
       <i class="fas fa-mobile-alt text-gray-800 text-3xl mx-auto"></i>

      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Mobile Friendly</h3>
      <p class="text-gray-600 text-sm">Every pixel adapts—from desktops to palms, fluidly and beautifully.</p>
    </div>
  </div>

  <div class="mt-12">
    <a href="#features" class="inline-block bg-indigo-600 text-white font-semibold py-3 px-6 rounded-xl shadow hover:bg-indigo-700 transition">
      Explore Our Process
    </a>
  </div>
</section>

 


  
  
  

  <section class="relative h-screen flex items-center justify-center text-center">
    <div 
        class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0 pointer-events-none"
        style="background-image: url('{{ asset('storage/images/banner.jpg') }}');">
    </div>
    <div class="absolute inset-0 bg-black/70 z-10"></div>
    <div class="relative z-20 space-y-6 text-white">
        <h2 class="text-5xl font-bold">Watch Your Dreams Take Shape</h2>
        <p class="text-xl text-gray-300">Reliable Systems, one step closer</p>
    </div>
</section>


  <footer class="bg-[#1A2B4C] text-white text-center py-8">
    <h3 class="text-xl font-bold">BiratLaxmi Solutions</h3>
    <p class="text-md">Solutions That Matter</p>
    <p class="text-sm mt-2">&copy; 2025 All Rights Reserved.</p>
  </footer>

  @livewireScripts
</body>
</html>