<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BiratLaxmi Solutions</title>
  <link href="/css/output.css" rel="stylesheet" />
  @livewireStyles
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

  <section class="relative h-screen flex items-center justify-center text-center">
    <video autoplay muted loop playsinline class="absolute w-full h-full object-cover z-0">
      <source src="{{ asset('storage/videos/welcome.mp4') }}" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/60 z-10"></div>
    <div class="relative z-20 space-y-8">
      <h1 class="text-6xl font-extrabold text-white">BiratLaxmi Solutions</h1>
      <p class="text-2xl text-gray-200">Digital Craftsmanship Starts Here</p>
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
         style="background-image: url('{{ asset('storage/images/parallax3.jpg') }}');">
  <div class="absolute inset-0 bg-black/70"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-6 text-center">
    <h2 class="text-4xl font-bold">You get what you wanted</h2>
    <p class="text-xl text-gray-300">Because we work hard to meet your requirements.</p>
  </div>
</section>

<!-- New Section 1: Colorful Tech Features -->
<section class="py-20 bg-gradient-to-r from-indigo-900 via-purple-800 to-pink-700 text-white px-6">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-10">Empowering Your Digital Future</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-8 bg-white bg-opacity-10 rounded-xl shadow-lg hover:shadow-indigo-700 transition-shadow duration-300">
        <svg class="mx-auto mb-4 w-16 h-16 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
  <rect x="3" y="8" width="18" height="12" rx="2" ry="2"></rect>
  <circle cx="7" cy="14" r="1.5"></circle>
  <circle cx="17" cy="14" r="1.5"></circle>
  <path d="M12 8V5M9 2h6"></path>
</svg>

        <h3 class="text-2xl font-semibold mb-2">Cutting-Edge AI Solutions</h3>
        <p>Harness the power of AI to automate and innovate your business workflows.</p>
      </div>
      <div class="p-8 bg-white bg-opacity-10 rounded-xl shadow-lg hover:shadow-purple-700 transition-shadow duration-300">
        <svg class="mx-auto mb-4 w-16 h-16 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
  <path d="M20 16.58A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 4 16.25" />
  <path d="M16 17H7a4 4 0 0 1 0-8c.34 0 .68.04 1 .1" />
</svg>

        <h3 class="text-2xl font-semibold mb-2">Cloud Integration</h3>
        <p>Seamlessly connect your apps with scalable, secure cloud infrastructure.</p>
      </div>
      <div class="p-8 bg-white bg-opacity-10 rounded-xl shadow-lg hover:shadow-pink-700 transition-shadow duration-300">
        <svg class="mx-auto mb-4 w-16 h-16 text-purple-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 3h-8v4h8V3z"/></svg>
        <h3 class="text-2xl font-semibold mb-2">Custom Software Development</h3>
        <p>Build software tailored exactly to your unique business needs.</p>
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
  <div class="w-full md:w-1/2 flex flex-col items-center justify-center text-center px-6 z-10">
    <h2 class="text-4xl font-bold mb-3 text-white">Innovate. Integrate. Inspire.</h2>
    <p class="text-lg mb-4 max-w-xl text-white">We create systems that spark change and evolve with you.</p>
  </div>

  <!-- Blurred Overlay Section (Right) -->
  <div class="w-1/2 relative hidden md:block">
    <div class="absolute inset-0 backdrop-blur-sm bg-white/20"></div>
  </div>

  <!-- Features Sidebar Panel -->
  <div id="featuresPanel"
       class="absolute right-0 top-0 h-full w-full md:w-1/2 bg-[#1A2B4C] text-white p-8 transform translate-x-full transition-transform duration-500 ease-in-out z-30">
    <h3 class="text-2xl font-bold mb-6 text-[#FFD700]">Our Features</h3>
    <ul class="space-y-4">
      <li class="flex items-center">
        <span class="w-3 h-3 bg-[#FFD700] rounded-full mr-3"></span>
        <span>Custom Software Development</span>
      </li>
      <li class="flex items-center">
        <span class="w-3 h-3 bg-[#6699CC] rounded-full mr-3"></span>
        <span>System Integration</span>
      </li>
      <li class="flex items-center">
        <span class="w-3 h-3 bg-[#FFD700] rounded-full mr-3"></span>
        <span>Digital Transformation</span>
      </li>
      <li class="flex items-center">
        <span class="w-3 h-3 bg-[#6699CC] rounded-full mr-3"></span>
        <span>Cloud Solutions</span>
      </li>
      <li class="flex items-center">
        <span class="w-3 h-3 bg-[#FFD700] rounded-full mr-3"></span>
        <span>AI & Automation</span>
      </li>
    </ul>
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

<script>
  const showBtn = document.getElementById('showFeatures');
  const hideBtn = document.getElementById('hideFeatures');
  const featuresPanel = document.getElementById('featuresPanel');

  showBtn.addEventListener('click', () => {
    featuresPanel.classList.remove('translate-x-full');
    featuresPanel.classList.add('translate-x-0');
    showBtn.classList.add('hidden');
    hideBtn.classList.remove('hidden');
  });

  hideBtn.addEventListener('click', () => {
    featuresPanel.classList.remove('translate-x-0');
    featuresPanel.classList.add('translate-x-full');
    hideBtn.classList.add('hidden');
    showBtn.classList.remove('hidden');
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
          await new Promise(resolve => setTimeout(resolve, 800)) // wait before lighting next
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
        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 12h18M3 6h18M3 18h18" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Lightning Fast Delivery</h3>
      <p class="text-gray-600 text-sm">We deploy at the speed of thought—agile, efficient, and deadline-proof.</p>
    </div>

    <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-purple-300 transition hover:-translate-y-1 duration-300">
      <div class="text-purple-500 mb-4">
        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM4 20v-1c0-2.21 3.58-4 8-4s8 1.79 8 4v1H4z" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Secure by Design</h3>
      <p class="text-gray-600 text-sm">Security isn’t a feature—it’s our architecture’s backbone.</p>
    </div>

    <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-pink-300 transition hover:-translate-y-1 duration-300">
      <div class="text-pink-500 mb-4">
        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 1v22M5 5l14 14M5 19L19 5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
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
    <video autoplay muted loop playsinline class="absolute w-full h-full object-cover z-0">
      <source src="{{ asset('storage/videos/welcome4.mp4') }}" type="video/mp4">
    </video>
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