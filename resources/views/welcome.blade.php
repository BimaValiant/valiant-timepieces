<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIANT TIMEPIECES — The Considered Watch Marketplace</title>

    <!-- Vite / Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts: Cormorant Garamond (Italic Serif) & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Alpine.js & Lucide Icons -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0A0A0A;
        }
        .font-gold-italic {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            color: #CBB299; /* Exact v0 Champagne Gold Accent */
        }
    </style>
</head>
<body x-data="{ mobileMenu: false }" class="bg-[#0A0A0A] text-neutral-200 antialiased selection:bg-neutral-800 selection:text-white min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <header class="border-b border-neutral-800/60 bg-[#0A0A0A]/90 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 h-20 flex items-center justify-between">
            
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-full border border-neutral-700/80 flex items-center justify-center text-xs font-serif italic text-[#CBB299]">V</div>
                <div class="flex flex-col">
                    <span class="tracking-[0.25em] text-[11px] font-bold uppercase text-white leading-tight">VALIANT</span>
                    <span class="text-[9px] tracking-[0.2em] text-neutral-400 font-normal leading-tight">TIMEPIECES</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 lg:gap-10 text-[11px] font-medium tracking-[0.2em] uppercase text-neutral-400">
                <a href="#collection" class="hover:text-white transition">BROWSE WATCHES</a>
                <a href="#standard" class="hover:text-white transition">HOW IT WORKS</a>
                <a href="#" class="hover:text-white transition">JOURNAL</a>
            </nav>

            <!-- Desktop Action Buttons -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="#" class="px-5 py-2.5 rounded-full border border-neutral-800 text-[10px] font-semibold tracking-[0.15em] uppercase text-neutral-300 hover:border-neutral-600 transition">SIGN IN</a>
                <a href="#" class="px-5 py-2.5 rounded-full bg-[#CBB299] text-black text-[10px] font-semibold tracking-[0.15em] uppercase hover:bg-[#d8c3ad] transition">SELL A WATCH</a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-neutral-300 p-2 focus:outline-none">
                <i x-show="!mobileMenu" data-lucide="menu" class="w-6 h-6"></i>
                <i x-show="mobileMenu" data-lucide="x" class="w-6 h-6" style="display: none;"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenu" x-collapse class="md:hidden border-b border-neutral-800 bg-[#0A0A0A] px-6 py-6 space-y-4" style="display: none;">
            <a href="#collection" @click="mobileMenu = false" class="block text-xs font-semibold tracking-[0.2em] uppercase text-neutral-300">BROWSE WATCHES</a>
            <a href="#standard" @click="mobileMenu = false" class="block text-xs font-semibold tracking-[0.2em] uppercase text-neutral-300">HOW IT WORKS</a>
            <a href="#" class="block text-xs font-semibold tracking-[0.2em] uppercase text-neutral-300">JOURNAL</a>
            <div class="pt-4 border-t border-neutral-800 flex flex-col gap-3">
                <a href="#" class="text-center w-full py-2.5 rounded-full border border-neutral-800 text-[10px] font-semibold tracking-[0.15em] uppercase text-neutral-300">SIGN IN</a>
                <a href="#" class="text-center w-full py-2.5 rounded-full bg-[#CBB299] text-black text-[10px] font-semibold tracking-[0.15em] uppercase">SELL A WATCH</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="border-b border-neutral-800/60 pt-12 sm:pt-16 pb-16 sm:pb-20">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Subtitle Header -->
            <p class="text-[10px] sm:text-[11px] tracking-[0.25em] uppercase text-[#CBB299] mb-6 sm:mb-8 flex items-center gap-3 font-medium">
                <span class="w-6 h-[1px] bg-[#CBB299]/60"></span> THE CONSIDERED WATCH MARKETPLACE
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-end">
                <div class="lg:col-span-8">
                    <h1 class="text-5xl sm:text-7xl md:text-8xl lg:text-[110px] font-light text-white tracking-tight leading-[0.88]">
                        Time, <br class="hidden sm:inline"><span class="font-gold-italic font-normal">well spent.</span>
                    </h1>
                </div>
                <div class="lg:col-span-4 lg:pl-4">
                    <p class="text-neutral-400 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                        Find the watch that marks your next chapter. Authentic, transparent, and ready for a life well lived.
                    </p>
                    <a href="#collection" class="inline-flex items-center gap-3 text-[10px] sm:text-[11px] font-semibold tracking-[0.2em] uppercase text-white hover:text-[#CBB299] transition-all group">
                        EXPLORE THE COLLECTION <i data-lucide="arrow-right" class="w-4 h-4 text-[#CBB299] group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Footer Ticker -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mt-16 sm:mt-24 pt-6 border-t border-neutral-900 text-[10px] tracking-[0.2em] uppercase text-neutral-500">
                <span>EST. 2026 / INDONESIA</span>
                <span>CURATED WITH CONVICTION</span>
            </div>
        </div>
    </section>

    <!-- MARKETPLACE / COLLECTION SECTION -->
    <section id="collection" class="py-12 sm:py-16">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between md:items-end gap-4 mb-8 sm:mb-10">
                <div>
                    <p class="text-[10px] tracking-[0.25em] uppercase text-neutral-400 mb-2">THE COLLECTION <span class="text-[#CBB299]">/ 01</span></p>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl text-white font-normal tracking-tight">Find your next timepiece</h2>
                </div>
                <p class="text-xs text-neutral-400 max-w-sm font-light leading-relaxed">
                    A focused selection of exceptional watches, authenticated and ready to become part of your story.
                </p>
            </div>

            <!-- Main Filter Bar -->
            <div class="bg-[#121212] border border-neutral-800/80 rounded-lg p-2 mb-6 grid grid-cols-1 md:grid-cols-12 gap-2">
                <div class="md:col-span-6 relative">
                    <i data-lucide="search" class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-neutral-500"></i>
                    <input type="text" placeholder="Search by brand, model, or reference" class="w-full bg-transparent pl-11 pr-4 py-3 text-xs text-white placeholder-neutral-500 focus:outline-none">
                </div>
                <div class="md:col-span-6 grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <select class="bg-[#181818] border border-neutral-800 text-neutral-300 px-3 py-2.5 rounded text-[10px] uppercase tracking-wider focus:outline-none cursor-pointer">
                        <option>ALL BRANDS</option>
                        <option>SEIKO</option>
                        <option>CASIO</option>
                        <option>G-SHOCK</option>
                        <option>ALBA</option>
                        <option>ORIENT</option>
                    </select>
                    <select class="bg-[#181818] border border-neutral-800 text-neutral-300 px-3 py-2.5 rounded text-[10px] uppercase tracking-wider focus:outline-none cursor-pointer">
                        <option>ANY CONDITION</option>
                        <option>UNWORN</option>
                        <option>EXCELLENT</option>
                        <option>VERY GOOD</option>
                    </select>
                    <select class="bg-[#181818] border border-neutral-800 text-neutral-300 px-3 py-2.5 rounded text-[10px] uppercase tracking-wider focus:outline-none cursor-pointer">
                        <option>RECENTLY ADDED</option>
                        <option>PRICE: LOW TO HIGH</option>
                        <option>PRICE: HIGH TO LOW</option>
                    </select>
                </div>
            </div>

            <!-- Brand Pills Bar -->
            <div class="flex items-center justify-between gap-4 mb-8 overflow-x-auto pb-2 scrollbar-none">
                <div class="flex items-center gap-2">
                    <button class="px-4 py-1.5 rounded-full bg-[#CBB299] text-black text-[10px] font-bold uppercase tracking-widest shrink-0">ALL</button>
                    <button class="px-4 py-1.5 rounded-full border border-neutral-800 bg-[#121212] hover:border-neutral-600 text-neutral-300 text-[10px] font-medium uppercase tracking-widest shrink-0 transition">SEIKO</button>
                    <button class="px-4 py-1.5 rounded-full border border-neutral-800 bg-[#121212] hover:border-neutral-600 text-neutral-300 text-[10px] font-medium uppercase tracking-widest shrink-0 transition">CASIO</button>
                    <button class="px-4 py-1.5 rounded-full border border-neutral-800 bg-[#121212] hover:border-neutral-600 text-neutral-300 text-[10px] font-medium uppercase tracking-widest shrink-0 transition">G-SHOCK</button>
                    <button class="px-4 py-1.5 rounded-full border border-neutral-800 bg-[#121212] hover:border-neutral-600 text-neutral-300 text-[10px] font-medium uppercase tracking-widest shrink-0 transition">ALBA</button>
                    <button class="px-4 py-1.5 rounded-full border border-neutral-800 bg-[#121212] hover:border-neutral-600 text-neutral-300 text-[10px] font-medium uppercase tracking-widest shrink-0 transition">ORIENT</button>
                </div>
                <span class="text-[10px] tracking-widest text-neutral-500 uppercase whitespace-nowrap shrink-0">8 RESULTS</span>
            </div>

            <!-- PRODUCT GRID (Responsive: 1 col on mobile, 2 on tablet, 4 on desktop) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Item Card 1 -->
                <div class="group cursor-pointer">
                    <div class="relative bg-[#121212] aspect-[4/5] rounded overflow-hidden border border-neutral-800/80 mb-3">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop" alt="Watch" class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-neutral-950/90 text-white text-[8px] font-bold px-2 py-1 rounded tracking-widest uppercase border border-neutral-800">FEATURED</span>
                        <button class="absolute top-3 right-3 text-neutral-400 hover:text-white p-1"><i data-lucide="heart" class="w-4 h-4"></i></button>
                    </div>
                    <div class="flex justify-between items-start mb-0.5">
                        <span class="text-[10px] tracking-[0.2em] text-neutral-400 uppercase">SEIKO</span>
                        <span class="text-xs font-semibold text-white">Rp 3.850.000</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-medium text-white mb-0.5 group-hover:text-[#CBB299] transition">Prospex Speedtimer</h3>
                    <p class="text-[10px] text-neutral-500 mb-2">SSC813 / 2024</p>
                    <div class="flex items-center gap-3 text-[9px] tracking-wider uppercase text-neutral-400">
                        <span>UNWORN</span>
                        <span class="flex items-center gap-1 text-neutral-300"><i data-lucide="check-circle" class="w-3 h-3 text-[#CBB299]"></i> VERIFIED</span>
                    </div>
                </div>

                <!-- Item Card 2 -->
                <div class="group cursor-pointer">
                    <div class="relative bg-[#121212] aspect-[4/5] rounded overflow-hidden border border-neutral-800/80 mb-3">
                        <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=800&auto=format&fit=crop" alt="Watch" class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-neutral-950/90 text-white text-[8px] font-bold px-2 py-1 rounded tracking-widest uppercase border border-neutral-800">VERIFIED</span>
                        <button class="absolute top-3 right-3 text-neutral-400 hover:text-white p-1"><i data-lucide="heart" class="w-4 h-4"></i></button>
                    </div>
                    <div class="flex justify-between items-start mb-0.5">
                        <span class="text-[10px] tracking-[0.2em] text-neutral-400 uppercase">G-SHOCK</span>
                        <span class="text-xs font-semibold text-white">Rp 1.950.000</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-medium text-white mb-0.5 group-hover:text-[#CBB299] transition">CasiOak Metal Covered</h3>
                    <p class="text-[10px] text-neutral-500 mb-2">GM-2100-1A / 2023</p>
                    <div class="flex items-center gap-3 text-[9px] tracking-wider uppercase text-neutral-400">
                        <span>EXCELLENT</span>
                        <span class="flex items-center gap-1 text-neutral-300"><i data-lucide="check-circle" class="w-3 h-3 text-[#CBB299]"></i> VERIFIED</span>
                    </div>
                </div>

                <!-- Item Card 3 -->
                <div class="group cursor-pointer">
                    <div class="relative bg-[#121212] aspect-[4/5] rounded overflow-hidden border border-neutral-800/80 mb-3">
                        <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?q=80&w=800&auto=format&fit=crop" alt="Watch" class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-neutral-950/90 text-white text-[8px] font-bold px-2 py-1 rounded tracking-widest uppercase border border-neutral-800">TRENDING</span>
                        <button class="absolute top-3 right-3 text-neutral-400 hover:text-white p-1"><i data-lucide="heart" class="w-4 h-4"></i></button>
                    </div>
                    <div class="flex justify-between items-start mb-0.5">
                        <span class="text-[10px] tracking-[0.2em] text-neutral-400 uppercase">ORIENT</span>
                        <span class="text-xs font-semibold text-white">Rp 4.200.000</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-medium text-white mb-0.5 group-hover:text-[#CBB299] transition">Kamasu Diver Automatic</h3>
                    <p class="text-[10px] text-neutral-500 mb-2">RA-AA0003R / 2023</p>
                    <div class="flex items-center gap-3 text-[9px] tracking-wider uppercase text-neutral-400">
                        <span>VERY GOOD</span>
                        <span class="flex items-center gap-1 text-neutral-300"><i data-lucide="check-circle" class="w-3 h-3 text-[#CBB299]"></i> VERIFIED</span>
                    </div>
                </div>

                <!-- Item Card 4 -->
                <div class="group cursor-pointer">
                    <div class="relative bg-[#121212] aspect-[4/5] rounded overflow-hidden border border-neutral-800/80 mb-3">
                        <img src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?q=80&w=800&auto=format&fit=crop" alt="Watch" class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-neutral-950/90 text-white text-[8px] font-bold px-2 py-1 rounded tracking-widest uppercase border border-neutral-800">NEW</span>
                        <button class="absolute top-3 right-3 text-neutral-400 hover:text-white p-1"><i data-lucide="heart" class="w-4 h-4"></i></button>
                    </div>
                    <div class="flex justify-between items-start mb-0.5">
                        <span class="text-[10px] tracking-[0.2em] text-neutral-400 uppercase">CASIO</span>
                        <span class="text-xs font-semibold text-white">Rp 850.000</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-medium text-white mb-0.5 group-hover:text-[#CBB299] transition">Vintage Digital Calculator</h3>
                    <p class="text-[10px] text-neutral-500 mb-2">DBC-32-1A / 2024</p>
                    <div class="flex items-center gap-3 text-[9px] tracking-wider uppercase text-neutral-400">
                        <span>UNWORN</span>
                        <span class="flex items-center gap-1 text-neutral-300"><i data-lucide="check-circle" class="w-3 h-3 text-[#CBB299]"></i> VERIFIED</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 02: THE VALIANT STANDARD -->
    <section id="standard" class="border-t border-b border-neutral-800/60 py-16 sm:py-20 bg-[#070707]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            <p class="text-[10px] tracking-[0.25em] uppercase text-neutral-400 mb-6">THE VALIANT STANDARD <span class="text-[#CBB299]">/ 02</span></p>
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-6">
                    <h2 class="text-3xl sm:text-5xl text-white font-light leading-tight">
                        Buy with confidence.<br><span class="font-gold-italic">Sell with clarity.</span>
                    </h2>
                </div>

                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8">
                    <div>
                        <i data-lucide="sparkles" class="w-5 h-5 text-[#CBB299] mb-3"></i>
                        <h4 class="text-xs font-semibold uppercase tracking-widest text-white mb-2">CURATED</h4>
                        <p class="text-xs text-neutral-400 leading-relaxed font-light">Every listing meets our standard for condition, provenance, and presentation.</p>
                    </div>

                    <div>
                        <i data-lucide="shield-check" class="w-5 h-5 text-[#CBB299] mb-3"></i>
                        <h4 class="text-xs font-semibold uppercase tracking-widest text-white mb-2">PROTECTED</h4>
                        <p class="text-xs text-neutral-400 leading-relaxed font-light">Authentication and secure transactions are included with every purchase.</p>
                    </div>

                    <div>
                        <i data-lucide="arrow-right" class="w-5 h-5 text-[#CBB299] mb-3"></i>
                        <h4 class="text-xs font-semibold uppercase tracking-widest text-white mb-2">PERSONAL</h4>
                        <p class="text-xs text-neutral-400 leading-relaxed font-light">A human-first team is here to guide your next decision, never rush it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="mt-auto py-12 bg-[#050505]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-6 h-6 rounded-full border border-neutral-700 flex items-center justify-center text-[10px] font-serif italic text-[#CBB299]">V</div>
                    <span class="tracking-[0.2em] text-xs font-semibold uppercase text-white">VALIANT TIMEPIECES</span>
                </div>
                <p class="text-xs text-neutral-500 font-light max-w-sm">The considered marketplace for watches worth remembering.</p>
            </div>

            <div class="flex flex-wrap gap-6 text-[10px] tracking-[0.2em] uppercase text-neutral-400">
                <a href="#collection" class="hover:text-white transition">MARKETPLACE</a>
                <a href="#standard" class="hover:text-white transition">OUR STANDARD</a>
                <a href="#" class="hover:text-white transition">JOURNAL</a>
                <a href="#" class="hover:text-white transition">INSTAGRAM</a>
            </div>
        </div>

        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 pt-6 border-t border-neutral-900 flex flex-col sm:flex-row justify-between items-center gap-2 text-[10px] tracking-[0.2em] text-neutral-600 uppercase">
            <span>© 2026 VALIANT TIMEPIECES</span>
            <span>BUILT FOR THE LONG RUN</span>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>