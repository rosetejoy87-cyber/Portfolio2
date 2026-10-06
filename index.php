<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Darwin Joy Rosete | Portfolio</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            pink: {
              50: '#fdf2f8',
              100: '#fce7f3',
              200: '#fbcfe8',
              300: '#f9a8d4',
              400: '#f472b6',
              500: '#ec4899',
              600: '#db2777',
              700: '#be185d',
              800: '#9d174d',
              900: '#831843',
              950: '#500724',
            },
          },
        },
      },
    }
  </script>
  <style>
    /* Multi-Shade Gray Background Layering with Pink Glow */
    body {
      background-color: #111012; /* Base Shade - slightly warmer/darker for contrast */
      background-image: 
        radial-gradient(circle at 10% 10%, rgba(236, 72, 153, 0.15) 0%, transparent 40%), /* Pink Glow Top Left */
        radial-gradient(circle at 90% 90%, rgba(236, 72, 153, 0.08) 0%, transparent 40%), /* Pink Glow Bottom Right */
        linear-gradient(to right, rgba(236, 72, 153, 0.03) 1px, transparent 1px), /* Pink Grid */
        linear-gradient(to bottom, rgba(236, 72, 153, 0.03) 1px, transparent 1px);
      background-size: 100% 100%, 100% 100%, 40px 40px, 40px 40px;
    }
    
    /* Smooth Scroll Behavior */
    html {
      scroll-behavior: smooth;
    }
    
    /* Custom Selection Color */
    ::selection {
      background-color: #fbcfe8; /* pink-200 */
      color: #831843; /* pink-900 */
    }
  </style>
</head>
<body class="text-zinc-200 font-sans antialiased min-h-screen">

  <!-- Fixed Header Navigation -->
  <header class="fixed top-0 left-0 right-0 z-50 bg-[#111012]/80 backdrop-blur-lg border-b border-zinc-800/50">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
      <a href="#" class="text-2xl font-extrabold tracking-tighter text-white group">
        Darwin Joy<span class="text-pink-500 group-hover:text-pink-400 transition-colors">.</span>Rosete
      </a>
      <nav class="hidden md:flex items-center space-x-1 text-sm font-medium text-zinc-400">
        <a href="#about" class="px-4 py-2 rounded-lg hover:text-pink-300 hover:bg-pink-950/30 transition-all">About</a>
        <a href="#stack" class="px-4 py-2 rounded-lg hover:text-pink-300 hover:bg-pink-950/30 transition-all">Stack</a>
        <a href="#portfolio" class="px-4 py-2 rounded-lg hover:text-pink-300 hover:bg-pink-950/30 transition-all">Portfolio</a>
      </nav>
      <a href="#contact" class="flex items-center gap-2.5 px-6 py-3 text-sm font-semibold text-pink-950 bg-pink-300 rounded-full hover:bg-pink-200 active:bg-pink-400 transition-all shadow-lg shadow-pink-500/10">
        Get in Touch
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </header>

  
  <!-- Main Content Wrapper -->
  <main class="max-w-7xl mx-auto px-6 sm:px-8 pt-40 pb-32 space-y-36">

    <!-- Hero Section -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
      <div class="space-y-8 lg:col-span-8">
        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-sm font-medium bg-pink-950/50 text-pink-200 border border-pink-800/50 shadow-inner">
          <span class="w-2.5 h-2.5 rounded-full bg-pink-400 animate-pulse"></span>
          Ready for your next project
        </div>
        <h1 class="text-5xl sm:text-7xl font-extrabold tracking-tighter text-white leading-[0.95] max-w-4xl">
          Darwin Joy Rosete
        </h1>
        <p class="text-xl text-zinc-300 leading-relaxed max-w-3xl font-normal">
          Hi, I'm <strong class="text-white font-semibold">Joy Rosete</strong>, a passionate web developer dedicated to building elegant, responsive, and user-centric applications from <span class="text-zinc-100 font-medium">the Philippines</span>.
        </p>
        <div class="flex flex-wrap gap-4 pt-4">
          <a href="#portfolio" class="px-8 py-4 rounded-xl text-base font-semibold bg-pink-400 text-pink-950 hover:bg-pink-300 transition-all shadow-lg shadow-pink-500/20">
            Explore My Work
          </a>
          <a href="#contact" class="flex items-center gap-2 px-8 py-4 rounded-xl text-base font-semibold border border-zinc-700 text-zinc-100 hover:bg-zinc-800/50 hover:border-zinc-600 transition-all">
            Let's Talk
            <i data-lucide="message-square" class="w-5 h-5 text-pink-400"></i>
          </a>
        </div>
      </div>
      

     <!-- Visual Element for Hero (Professional Portrait Card) -->
<div class="hidden lg:block lg:col-span-4 relative aspect-[4/5] max-w-sm mx-auto w-full">
  <!-- Soft Ambient Glow Backgrounds -->
  <div class="absolute inset-0 bg-pink-600 rounded-3xl rotate-3 opacity-20 blur-2xl"></div>
  <div class="absolute inset-10 bg-pink-500 rounded-full opacity-25 blur-3xl"></div>

  <!-- Main Glassmorphic Outer Frame -->
  <div class="relative w-full h-full rounded-3xl border border-pink-500/30 bg-[#111012]/80 backdrop-blur-md p-3 flex flex-col shadow-2xl">
    
    <!-- Image Wrapper optimized for Headshots / Bust Shots -->
    <div class="relative w-full h-full rounded-2xl overflow-hidden border border-zinc-800/80 bg-zinc-900 group">
      <img 
        src="assets/joyprofile.jpg"
        class="w-full h-full object-cover object-top transform transition-transform duration-500 group-hover:scale-105"
      />

      <!-- Subtle Vignette & Bottom Shadow Overlay -->
      <div class="absolute inset-0 bg-gradient-to-t from-[#111012] via-transparent to-transparent opacity-80 pointer-events-none"></div>

      
       
      </div>
    </div>

  </div>
</div>
    </section>

    <!-- About Section -->
    <section id="about" class="scroll-mt-28 grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
      <div class="space-y-4 md:col-span-5 md:sticky md:top-32">
        <span class="text-sm font-mono uppercase tracking-widest text-pink-400 font-medium">01 // THE DEVELOPER</span>
        <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tighter text-white">
          Passionate about <span class="text-pink-300">code</span> & design
        </h2>
        <p class="text-lg text-zinc-300 leading-relaxed pt-2">
           Turning bold concepts into elegant, high-performing websites—where pixel-perfect design meets solid structure
      </div>

      <div class="md:col-span-7 space-y-12">
          <!-- Bio Paragraphs -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 text-zinc-300 text-base leading-relaxed">
            <p>
              "I'm Darwin Joy Rosete, a web developer from Davao del Sur who loves building reliable, high-performing software that looks great on any screen
            </p>
            <p>
              Driven by Java logic and React interfaces, I craft web applications that feel fast, simple, and purposeful
            </p>
          </div>

          <!-- Feature Cards Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-4">
            
            <div class="p-7 rounded-2xl border border-zinc-800/70 bg-zinc-900/50 hover:border-pink-800 transition-all duration-300 space-y-4 group">
              <div class="w-12 h-12 rounded-xl bg-pink-950/50 flex items-center justify-center text-pink-300 border border-pink-800/30">
                <i data-lucide="code-xml" class="w-6 h-6 group-hover:scale-110 transition-transform"></i>
              </div>
              <h3 class="text-xl font-semibold text-white">Clean Architect</h3>
              <p class="text-sm text-zinc-400 leading-relaxed">
                I craft structured, scalable code that makes future updates a breeze.
              </p>
            </div>

            <div class="p-7 rounded-2xl border border-zinc-800/70 bg-zinc-900/50 hover:border-pink-800 transition-all duration-300 space-y-4 group">
              <div class="w-12 h-12 rounded-xl bg-pink-950/50 flex items-center justify-center text-pink-300 border border-pink-800/30">
                <i data-lucide="palette" class="w-6 h-6 group-hover:scale-110 transition-transform"></i>
              </div>
              <h3 class="text-xl font-semibold text-white">Frontend Artisan</h3>
              <p class="text-sm text-zinc-400 leading-relaxed">
                I transform design concepts into sharp, interactive experiences users enjoy using.
              </p>
            </div>

            <div class="p-7 rounded-2xl border border-zinc-800/70 bg-zinc-900/50 hover:border-pink-800 transition-all duration-300 space-y-4 group">
              <div class="w-12 h-12 rounded-xl bg-pink-950/50 flex items-center justify-center text-pink-300 border border-pink-800/30">
                <i data-lucide="gauge" class="w-6 h-6 group-hover:scale-110 transition-transform"></i>
              </div>
              <h3 class="text-xl font-semibold text-white">Performance Focused</h3>
              <p class="text-sm text-zinc-400 leading-relaxed">
                Optimized from day one for lightning-fast loads and silky-smooth rendering.
              </p>
            </div>

            <div class="p-7 rounded-2xl border border-zinc-800/70 bg-zinc-900/50 hover:border-pink-800 transition-all duration-300 space-y-4 group">
              <div class="w-12 h-12 rounded-xl bg-pink-950/50 flex items-center justify-center text-pink-300 border border-pink-800/30">
                <i data-lucide="messages-square" class="w-6 h-6 group-hover:scale-110 transition-transform"></i>
              </div>
              <h3 class="text-xl font-semibold text-white">Clear Communicator</h3>
              <p class="text-sm text-zinc-400 leading-relaxed">
                I keep conversations clear, honest, and focused on solving real problems.
              </p>
            </div>

          </div>
      </div>
    </section>


    <!-- Tech Stack Section -->
    <section id="stack" class="scroll-mt-28 space-y-12">
      <div class="space-y-3 text-center max-w-2xl mx-auto">
        <span class="text-sm font-mono uppercase tracking-widest text-pink-400 font-medium">02 // MY TOOLBELT</span>
        <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tighter text-white">Core Technologies</h2>
        <p class="text-base text-zinc-400">The tech stack I use to turn ideas into working software.</p>
      </div>
      <div class="flex flex-wrap gap-4 justify-center max-w-5xl mx-auto">
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="html5" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          HTML5
        </span>
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="file-json" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          JavaScript (ES6+)
        </span>
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="wind" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          Tailwind CSS
        </span>
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="atom" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          React
        </span>
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="coffee" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          Java
        </span>
        <span class="flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900/80 border border-zinc-800 text-base font-medium text-zinc-100 group hover:border-pink-900 hover:bg-pink-950/20 transition-all">
          <i data-lucide="github" class="w-5 h-5 text-pink-500 group-hover:text-pink-400"></i>
          Git / GitHub
        </span>
      </div>
    </section>



<!-- Projects Section -->
<section id="portfolio" class="scroll-mt-28 space-y-12">
  <div class="space-y-3">
    <span class="text-sm font-mono uppercase tracking-widest text-pink-400 font-medium">03 // SELECTED WORK</span>
    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tighter text-white">Featured Projects</h2>
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <!-- Project Card 1: SaaS Analytics Dashboard -->
    <div class="group rounded-3xl border border-zinc-800 bg-zinc-900/40 p-5 space-y-5 flex flex-col hover:border-pink-900/70 hover:shadow-2xl hover:shadow-pink-950/20 transition-all duration-300">
      
      <!-- Styled App Graphic Mockup -->
      <div class="aspect-[16/10] rounded-2xl bg-[#0d0d0f] overflow-hidden p-4 border border-zinc-800 relative group-hover:border-pink-900/50 transition-colors">
        <div class="w-full h-full rounded-xl bg-zinc-900/90 border border-zinc-800 p-3 flex flex-col gap-3 shadow-inner">
          
          <!-- Mock Window Titlebar -->
          <div class="flex items-center justify-between border-b border-zinc-800/80 pb-2">
            <div class="flex items-center gap-1.5">
              <div class="w-2.5 h-2.5 rounded-full bg-red-500/80"></div>
              <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></div>
              <div class="w-2.5 h-2.5 rounded-full bg-green-500/80"></div>
            </div>
            <span class="text-[10px] font-mono text-zinc-500">analytics-dashboard.app</span>
            <div class="w-4"></div>
          </div>

          <!-- Mock UI Elements -->
          <div class="grid grid-cols-3 gap-2">
            <div class="p-2 rounded-lg bg-pink-950/30 border border-pink-900/40 flex flex-col gap-1">
              <span class="text-[9px] text-zinc-400 font-mono">Revenue</span>
              <span class="text-xs font-bold text-pink-300">$24,850</span>
            </div>
            <div class="p-2 rounded-lg bg-zinc-800/40 border border-zinc-700/40 flex flex-col gap-1">
              <span class="text-[9px] text-zinc-400 font-mono">Active Users</span>
              <span class="text-xs font-bold text-zinc-200">1,420</span>
            </div>
            <div class="p-2 rounded-lg bg-zinc-800/40 border border-zinc-700/40 flex flex-col gap-1">
              <span class="text-[9px] text-zinc-400 font-mono">Conversion</span>
              <span class="text-xs font-bold text-zinc-200">4.8%</span>
            </div>
          </div>

          <!-- Mock Graph Lines -->
          <div class="flex-1 bg-zinc-950/60 rounded-lg p-2 border border-zinc-800/60 flex items-end gap-1.5 h-full">
            <div class="w-1/6 bg-pink-900/40 rounded-t h-[30%] group-hover:bg-pink-700/50 transition-all"></div>
            <div class="w-1/6 bg-pink-900/50 rounded-t h-[50%] group-hover:bg-pink-700/60 transition-all"></div>
            <div class="w-1/6 bg-pink-900/40 rounded-t h-[40%] group-hover:bg-pink-700/50 transition-all"></div>
            <div class="w-1/6 bg-pink-800/60 rounded-t h-[70%] group-hover:bg-pink-600/70 transition-all"></div>
            <div class="w-1/6 bg-pink-900/50 rounded-t h-[60%] group-hover:bg-pink-700/60 transition-all"></div>
            <div class="w-1/6 bg-pink-500 rounded-t h-[90%] group-hover:bg-pink-400 transition-all shadow-lg shadow-pink-500/20"></div>
          </div>

        </div>
      </div>

      <!-- Card Information -->
      <div class="space-y-3 px-2 flex-grow">
        <h3 class="text-2xl font-bold tracking-tight text-white group-hover:text-pink-300 transition-colors">Analytics Flow Platform</h3>
        <p class="text-base text-zinc-400 leading-relaxed line-clamp-2 group-hover:text-zinc-300 transition-colors">
          A real-time analytics dashboard providing interactive data visualization, key performance metrics, and automated reporting.
        </p>
        <div class="flex flex-wrap gap-2 pt-1.5">
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-pink-950/70 text-pink-300 border border-pink-900/50">React</span>
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Tailwind</span>
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Chart.js</span>
        </div>
      </div>
      
      <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-pink-400 hover:text-pink-300 pt-1 px-2 self-start">
        View Case Study
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

    <!-- Project Card 2: Backend API & Service Monitor -->
    <div class="group rounded-3xl border border-zinc-800 bg-zinc-900/40 p-5 space-y-5 flex flex-col hover:border-pink-900/70 hover:shadow-2xl hover:shadow-pink-950/20 transition-all duration-300">
      
      <!-- Styled Terminal / Code Graphic Mockup -->
      <div class="aspect-[16/10] rounded-2xl bg-[#0d0d0f] overflow-hidden p-4 border border-zinc-800 relative group-hover:border-pink-900/50 transition-colors">
        <div class="w-full h-full rounded-xl bg-zinc-950 border border-zinc-800 p-3.5 flex flex-col font-mono text-[11px] gap-2 shadow-inner">
          
          <!-- Header Bar -->
          <div class="flex items-center justify-between text-zinc-500 border-b border-zinc-800/80 pb-2 text-[10px]">
            <div class="flex items-center gap-2">
              <i data-lucide="terminal" class="w-3.5 h-3.5 text-pink-500"></i>
              <span>spring-boot-service</span>
            </div>
            <span class="text-emerald-400 flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> 200 OK
            </span>
          </div>

          <!-- Code / Logs Stream -->
          <div class="space-y-1.5 text-zinc-400 pt-1">
            <div class="flex items-center gap-2">
              <span class="text-pink-400 font-semibold">GET</span>
              <span class="text-zinc-300">/api/v1/healthcheck</span>
              <span class="text-zinc-600 ml-auto">12ms</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-emerald-400 font-semibold">POST</span>
              <span class="text-zinc-300">/api/v1/auth/login</span>
              <span class="text-zinc-600 ml-auto">45ms</span>
            </div>
            <div class="p-2 rounded bg-zinc-900 border border-zinc-800 text-[10px] space-y-0.5 text-zinc-300">
              <div class="text-zinc-500">// Response Payload</div>
              <div>{ <span class="text-pink-300">"status"</span>: <span class="text-emerald-300">"active"</span>, <span class="text-pink-300">"uptime"</span>: <span class="text-amber-300">99.98</span> }</div>
            </div>
          </div>

        </div>
      </div>

      <!-- Card Information -->
      <div class="space-y-3 px-2 flex-grow">
        <h3 class="text-2xl font-bold tracking-tight text-white group-hover:text-pink-300 transition-colors">Microservice API Engine</h3>
        <p class="text-base text-zinc-400 leading-relaxed line-clamp-2 group-hover:text-zinc-300 transition-colors">
          A high-throughput backend infrastructure service built for secure authentication, real-time data processing, and scalable endpoints.
        </p>
        <div class="flex flex-wrap gap-2 pt-1.5">
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-pink-950/70 text-pink-300 border border-pink-900/50">Java</span>
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Spring Boot</span>
          <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">PostgreSQL</span>
        </div>
      </div>

      <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-pink-400 hover:text-pink-300 pt-1 px-2 self-start">
        View Live Demo
        <i data-lucide="external-link" class="w-4 h-4"></i>
      </a>
    </div>

  </div>
</section>   
        


    <!-- Final Call to Action Section with Direct Contact Form & Success State -->
<section id="contact" class="scroll-mt-28 p-8 sm:p-16 rounded-3xl bg-pink-950/30 border-2 border-pink-900/50 text-center space-y-8 relative overflow-hidden">
    <!-- Background Glow Effects -->
    <div class="absolute -top-16 -left-16 w-40 h-40 bg-pink-500 rounded-full opacity-10 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-60 h-60 bg-pink-600 rounded-full opacity-10 blur-3xl pointer-events-none"></div>
    
    <!-- Header Text -->
    <div class="space-y-3 max-w-2xl mx-auto relative">
      <span class="text-sm font-mono uppercase tracking-widest text-pink-300 font-medium">LET'S CONNECT</span>
      <h2 class="text-4xl sm:text-6xl font-extrabold tracking-tighter text-white leading-[0.95]">Ready to start your next project?</h2>
      <p class="text-lg text-pink-100/90 leading-relaxed pt-3">
        Have a project in mind or just want to connect? Let's build something great together.
      </p>
    </div>

    <!-- Contact Form Container -->
    <div class="max-w-2xl mx-auto relative z-10">
      <form id="contact-form" class="space-y-5 text-left" onsubmit="handleSubmit(event)">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <!-- Name Field -->
          <div class="space-y-2">
            <label for="name" class="block text-sm font-semibold text-pink-100">Your Name</label>
            <input 
              type="text" 
              id="name" 
              name="name" 
              placeholder="Your Name" 
              required
              class="w-full px-5 py-3.5 rounded-2xl bg-pink-950/40 border border-pink-900/60 text-white placeholder-pink-300/40 focus:outline-none focus:ring-2 focus:ring-pink-400/50 focus:border-pink-400 transition-all"
            >
          </div>

          <!-- Email Field -->
          <div class="space-y-2">
            <label for="email" class="block text-sm font-semibold text-pink-100">Email Address</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              placeholder="hello@domain.com" 
              required
              class="w-full px-5 py-3.5 rounded-2xl bg-pink-950/40 border border-pink-900/60 text-white placeholder-pink-300/40 focus:outline-none focus:ring-2 focus:ring-pink-400/50 focus:border-pink-400 transition-all"
            >
          </div>
        </div>

        <!-- Message Field -->
        <div class="space-y-2">
          <label for="message" class="block text-sm font-semibold text-pink-100">Your Message</label>
          <textarea 
            id="message" 
            name="message" 
            rows="4" 
            placeholder="What are we working on?" 
            required
            class="w-full px-5 py-3.5 rounded-2xl bg-pink-950/40 border border-pink-900/60 text-white placeholder-pink-300/40 focus:outline-none focus:ring-2 focus:ring-pink-400/50 focus:border-pink-400 transition-all resize-none"
          ></textarea>
        </div>

        <!-- Submit Button -->
        <button 
          type="submit" 
          class="w-full py-4 px-8 text-lg font-semibold text-pink-950 bg-pink-300 rounded-2xl hover:bg-pink-200 active:bg-pink-400 transition-all shadow-xl shadow-pink-500/10 flex items-center justify-center gap-2 cursor-pointer"
        >
          Send it over ✨
        </button>
      </form>

      <!-- Success Message (Initially Hidden) -->
      <div id="success-message" class="hidden py-10 px-6 rounded-2xl bg-pink-900/20 border border-pink-800/50 text-center space-y-3 transition-all duration-300">
        <div class="w-12 h-12 bg-pink-300 rounded-full flex items-center justify-center mx-auto text-pink-950 mb-2">
          <i data-lucide="check" class="w-6 h-6 stroke-[3]"></i>
        </div>
        <h3 class="text-2xl font-bold text-white">Message Sent Successfully!</h3>
        <p class="text-pink-200/80">Thank you for reaching out. I'll get back to you as soon as possible.</p>
      </div>
    </div>
</section>

<!-- Script to handle submit state -->
<script>
  function handleSubmit(event) {
    event.preventDefault();
    
    // Hide form
    const form = document.getElementById('contact-form');
    form.classList.add('hidden');
    
    // Show success message
    const successMsg = document.getElementById('success-message');
    successMsg.classList.remove('hidden');

    // Refresh icons if using Lucide
    if (typeof lucide !== 'undefined') {
      lucide.createIcons();
    }
  }
</script>

  </main>

  <!-- Simple Footer -->
  <footer class="border-t border-zinc-800/50 bg-[#111012]">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-10 text-center text-sm text-zinc-500">
      <p>&copy; 2024 Darwin Joy Rosete. Built with Tailwind CSS, Asshlene, and a touch of Pink.</p>
    </div>
  </footer>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();
  </script>
</body>
</html>