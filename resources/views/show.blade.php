<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $watch->brand }} {{ $watch->model_name }} — VALIANT TIMEPIECES</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = { darkMode: 'class' }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0A0A0A; }
        .font-gold-italic { font-family: 'Cormorant Garamond', serif; font-style: italic; color: #CBB299; }
    </style>
</head>
<body class="bg-[#0A0A0A] text-neutral-200 antialiased min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <header class="border-b border-neutral-800/60 bg-[#0A0A0A]/90 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-full border border-neutral-700/80 flex items-center justify-center text-xs font-serif italic text-[#CBB299]">V</div>
                <div class="flex flex-col">
                    <span class="tracking-[0.25em] text-[11px] font-bold uppercase text-white leading-tight">VALIANT</span>
                    <span class="text-[9px] tracking-[0.2em] text-neutral-400 font-normal leading-tight">TIMEPIECES</span>
                </div>
            </a>
            <a href="/" class="inline-flex items-center gap-2 text-[11px] tracking-[0.15em] uppercase text-neutral-400 hover:text-white transition">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> BACK TO CATALOG
            </a>
        </div>
    </header>

    <!-- PRODUCT DETAIL CONTENT -->
    <main class="py-10 sm:py-16 flex-1">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-[10px] tracking-[0.2em] uppercase text-neutral-500 mb-8">
                <a href="/" class="hover:text-white transition">HOME</a>
                <span>/</span>
                <span>{{ $watch->brand }}</span>
                <span>/</span>
                <span class="text-neutral-300">{{ $watch->model_name }}</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                
                <!-- Left Column: Gallery / Product Image -->
                <div class="lg:col-span-7 space-y-4">
                    <div class="bg-[#121212] border border-neutral-800/80 rounded-lg aspect-[4/3] sm:aspect-[4/3] overflow-hidden relative">
                        <img src="{{ $watch->image }}" alt="{{ $watch->model_name }}" class="w-full h-full object-cover object-center">
                        <span class="absolute top-4 left-4 bg-neutral-950/90 text-white text-[9px] font-bold px-3 py-1.5 rounded tracking-widest uppercase border border-neutral-800">
                            {{ $watch->badge }}
                        </span>
                    </div>
                </div>

                <!-- Right Column: Details & Checkout Action -->
                <div class="lg:col-span-5 space-y-8">
                    
                    <!-- Header Info -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-semibold tracking-[0.25em] text-[#CBB299] uppercase">{{ $watch->brand }}</span>
                            <span class="text-[10px] tracking-widest uppercase border border-neutral-800 px-2.5 py-1 rounded text-neutral-400">
                                {{ $watch->condition }}
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-4xl font-normal text-white tracking-tight mb-2">{{ $watch->model_name }}</h1>
                        <p class="text-xs text-neutral-500 font-mono">Ref. {{ $watch->reference_number ?? 'N/A' }} • Year {{ $watch->year ?? '-' }}</p>
                    </div>

                    <!-- Price Display -->
                    <div class="p-5 rounded-lg bg-[#121212] border border-neutral-800/80 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] tracking-widest uppercase text-neutral-500 block mb-1">PRICE</span>
                            <span class="text-2xl font-bold text-white">Rp {{ number_format($watch->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex items-center gap-1 text-[10px] tracking-wider text-[#CBB299] uppercase">
                            <i data-lucide="check-circle" class="w-4 h-4"></i> AUTHENTICATED
                        </div>
                    </div>

                    <!-- Watch Specifications Grid -->
                    <div>
                        <h3 class="text-xs font-semibold tracking-[0.2em] uppercase text-neutral-300 mb-4 border-b border-neutral-800 pb-2">SPECIFICATIONS</h3>
                        <div class="grid grid-cols-2 gap-4 text-xs">
    <div class="bg-[#121212] p-3 rounded border border-neutral-800/50">
        <span class="text-[9px] tracking-widest text-neutral-500 uppercase block">CASE SIZE</span>
        <span class="text-neutral-200 font-medium">{{ $watch->case_size ?? '38 mm' }}</span>
    </div>
    <div class="bg-[#121212] p-3 rounded border border-neutral-800/50">
        <span class="text-[9px] tracking-widest text-neutral-500 uppercase block">MOVEMENT</span>
        <span class="text-neutral-200 font-medium">{{ $watch->movement ?? 'Automatic' }}</span>
    </div>
    <div class="bg-[#121212] p-3 rounded border border-neutral-800/50">
        <span class="text-[9px] tracking-widest text-neutral-500 uppercase block">GLASS</span>
        <span class="text-neutral-200 font-medium">{{ $watch->glass ?? 'Sapphire Crystal' }}</span>
    </div>
    <div class="bg-[#121212] p-3 rounded border border-neutral-800/50">
        <span class="text-[9px] tracking-widest text-neutral-500 uppercase block">COMPLETENESS</span>
        <span class="text-neutral-200 font-medium">{{ $watch->completeness ?? 'Full Set (Box & Papers)' }}</span>
    </div>
</div>
                    </div>

                    <!-- Checkout & Contact Buttons -->
                    <div class="space-y-3 pt-2">
                        @php
                            $waMessage = rawurlencode("Halo Valiant Timepieces, aku mau checkout jam tangan *{$watch->brand} {$watch->model_name}* (Rp " . number_format($watch->price, 0, ',', '.') . "). Apakah barang masih ready?");
                        @endphp
                        
                        <!-- Direct WhatsApp Checkout -->
                        <a href="https://wa.me/6281234567890?text={{ $waMessage }}" target="_blank" class="w-full py-4 rounded-full bg-[#CBB299] text-black text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#d8c3ad] transition flex items-center justify-center gap-3">
                            <i data-lucide="shopping-bag" class="w-4 h-4"></i> PURCHASE VIA WHATSAPP
                        </a>
                        
                        <a href="https://wa.me/6281234567890?text={{ rawurlencode('Halo Admin, mau tanya detail fisik untuk ' . $watch->brand . ' ' . $watch->model_name) }}" target="_blank" class="w-full py-3.5 rounded-full border border-neutral-800 text-neutral-300 text-xs font-semibold tracking-[0.15em] uppercase hover:border-neutral-600 transition flex items-center justify-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4 text-neutral-400"></i> ASK A QUESTION
                        </a>
                    </div>

                    <!-- Valiant Guarantee Box -->
                    <div class="p-4 rounded-lg bg-[#0E0E0E] border border-neutral-800 text-xs space-y-2">
                        <div class="flex items-center gap-2 text-white font-semibold">
                            <i data-lucide="shield-check" class="w-4 h-4 text-[#CBB299]"></i> THE VALIANT GUARANTEE
                        </div>
                        <p class="text-neutral-400 font-light leading-relaxed text-[11px]">
                            100% money-back guarantee if the item is proven non-authentic. Includes a 3-month store warranty for mechanical functionality.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="py-8 bg-[#050505] border-t border-neutral-900 mt-auto">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 flex justify-between items-center text-[10px] tracking-[0.2em] text-neutral-600 uppercase">
            <span>© 2026 VALIANT TIMEPIECES</span>
            <span>BUILT FOR THE LONG RUN</span>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>