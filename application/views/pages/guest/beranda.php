<!-- Hero Section -->
<section class="bg-[#F5EFE8] px-8 pb-10 pt-4" style="font-family: 'Nunito', sans-serif;">
    <div class="max-w-7xl mx-auto bg-white rounded-3xl overflow-hidden px-10 py-10 flex flex-col md:flex-row items-center gap-6 relative">

        <!-- Left Content -->
        <div class="flex-1 z-10">
            <!-- Steam icon above headline -->
            <div class="text-[#FF6B35] text-2xl mb-1 ml-24">〰〰〰</div>

            <!-- Main Headline -->
            <div class="relative">
                <h1 class="text-[#2C1A0E] font-black leading-none tracking-tight uppercase" style="font-family: 'Fredoka One', cursive; font-size: clamp(3rem, 8vw, 6.5rem); line-height: 0.95;">
                    My
                    <span class="inline-block bg-[#00B69B] text-white text-sm font-black px-3 py-1 rounded-full uppercase tracking-widest align-middle ml-2 mb-2" style="font-size: 0.75rem; vertical-align: middle;">TASTY</span>
                    Bakery
                    <span class="inline-block bg-[#FF6B35] text-white text-sm font-black px-3 py-1 rounded-full uppercase tracking-widest align-middle ml-2 mb-2" style="font-size: 0.75rem; vertical-align: middle;">CRUNCHY</span>
                </h1>
            </div>

            <!-- Subheadline -->
            <h2 class="text-[#2C1A0E] font-black uppercase mt-4 leading-tight" style="font-size: clamp(1.1rem, 2.5vw, 1.5rem); letter-spacing: 0.02em;">
                Roti Lembut <br>
                untuk Momen <br>
                Terbaikmu
                <span class="inline-flex items-center gap-1 bg-[#3B82F6] text-white text-xs font-black px-3 py-1 rounded-full ml-2 align-middle" style="font-size: 0.7rem;">
                    <span class="w-1.5 h-1.5 bg-white rounded-full inline-block"></span> FRESH
                </span>
            </h2>

            <!-- Description -->
            <p class="text-[#2C1A0E] font-bold mt-4 text-sm leading-relaxed max-w-xs">
                Roti premium dengan rasa hangat <br>di setiap gigitan.
            </p>

            <!-- CTA Buttons -->
            <div class="flex items-center gap-6 mt-8">
                <button class="bg-[#F5D800] text-[#2C1A0E] font-black uppercase tracking-wider px-7 py-3.5 rounded-full flex items-center gap-2 border-2 border-[#2C1A0E] hover:bg-[#e6c800] transition-colors relative" style="font-size: 0.9rem;">
                    <span class="w-2 h-2 bg-[#2C1A0E] rounded-full"></span>
                    Order Now
                    <!-- Cookie sprinkle decoration -->
                    <span class="absolute -top-3 -right-3 text-[#2C1A0E] text-lg">·· ·</span>
                </button>
                <a href="#" class="text-[#2C1A0E] font-black uppercase tracking-wider text-sm flex items-center gap-1 hover:text-[#FF6B35] transition-colors">
                    Cooking Blog <span class="text-base">›</span>
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="flex-1 relative flex items-center justify-center ">
            <img src="<?= base_url('assets/bread/2.png') ?>" />
        </div>

    </div>
</section>

<!-- ===================== SECTION 3A: YOUR ONLY DOSE OF DELIGHT ===================== -->
<section id="tentang" class="bg-[#F5EFE8] px-6 md:px-10 py-10" style="font-family: 'Nunito', sans-serif;">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">

        <!-- Left: Image + Circular Text Badge -->
        <div class="flex-1 relative flex items-center justify-center">
            <!-- Circular "FUN FOR THE WHOLE FAMILY" badge -->
            <div class="absolute top-0 left-0 w-28 h-28 z-10">
                <svg viewBox="0 0 120 120" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <path id="circlePath" d="M 60,60 m -38,0 a 38,38 0 1,1 76,0 a 38,38 0 1,1 -76,0" />
                    </defs>
                    <circle cx="60" cy="60" r="50" fill="#F5D800" stroke="#2C1A0E" stroke-width="2" />
                    <text font-family="Nunito, sans-serif" font-weight="900" font-size="10" fill="#2C1A0E" letter-spacing="2.2" text-anchor="middle">
                        <textPath href="#circlePath" startOffset="0%">FUN FOR THE WHOLE FAMILY •</textPath>
                    </text>
                    <!-- Cookie icon center -->
                    <text x="60" y="65" text-anchor="middle" font-size="20">🍪</text>
                </svg>
            </div>

            <!-- Main product image placeholder -->
            <div class="w-full max-w-sm aspect-[4/4] bg-[#7ECECE] rounded-3xl overflow-hidden flex items-end justify-center ml-8 mt-4">
                <div class="w-full h-full flex items-center justify-center">
                    <img src="<?= base_url('assets/bread/3.png') ?>" />
                </div>
            </div>
        </div>

        <!-- Right: Text Content -->
        <div class="flex-1">
            <!-- Cookie doodle top-right -->
            <div class="flex justify-end mb-2">
                <div class="text-[#FF6B35] text-3xl opacity-70">❧</div>
            </div>

            <h2 class="text-[#2C1A0E] font-black uppercase leading-none"
                style="font-family: 'Fredoka One', cursive; font-size: clamp(2rem, 5vw, 3.4rem); line-height: 1.0;">
                HANGAT dan FRESH
                <br>SETIAP GIGITAN
            </h2>

            <p class="text-[#2C1A0E] font-bold text-sm mt-3 opacity-70">Produk Unggulan Kami</p>

            <!-- Featured item card -->
            <div class="flex items-center gap-4 mt-3 bg-white rounded-2xl px-4 py-3 border border-[#E8D8C8] max-w-xs">
                <!-- Mini image placeholder -->
                <div class="w-16 h-12 bg-[#F0D5B0] rounded-xl flex items-center justify-center flex-shrink-0">
                    <img src="<?= base_url('assets/bread/3.png') ?>" />
                </div>
                <div class="flex-1">
                    <p class="text-[#2C1A0E] font-black text-sm leading-tight">Roti Panggang</p>
                    <p class="text-[#2C1A0E]/50 font-bold text-xs">Bebas Gula</p>
                </div>
                <div class="w-px h-8 bg-[#E8D8C8]"></div>
                <p class="text-[#2C1A0E] font-black text-lg ml-2" style="font-family: 'Fredoka One', cursive;">16k</p>
            </div>

            <!-- Description -->
            <p class="text-[#2C1A0E] font-semibold text-sm mt-5 leading-relaxed max-w-sm opacity-80">
                Roti fresh dan hangat yang dipanggang setiap hari untuk menemani momen terbaikmu.
            </p>
        </div>

    </div>
</section>

<!-- ===================== SECTION 3B: PRODUCT WE BAKE HERE DAILY ===================== -->
<section class="bg-[#F5EFE8] px-6 md:px-10 pb-10" style="font-family: 'Nunito', sans-serif;">
    <div class="max-w-7xl mx-auto">

        <!-- Title + Filter Tags Row -->
        <div class="w-[200px] md:w-[600px]">
            <h2 class="text-[#2C1A0E] font-black uppercase leading-tight"
                style="font-family: 'Fredoka One', cursive; font-size: clamp(1.6rem, 3.5vw, 2.5rem); line-height: 1.05; max-width: 820px;">
                ROTI FRESH YANG KAMI<br>PANGGANG SETIAP HARI -
            </h2>
        </div>

        <!-- Product Cards Slider Row -->
        <div class="relative mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 overflow-hidden">
                <!-- Product Card 1: Bagel with Seeds -->
                <div class="flex flex-col items-center gap-3">
                    <div class="w-full aspect-square bg-[#F0A070] rounded-3xl overflow-hidden relative flex items-end justify-center">
                        <!-- Doodle decoration top-right -->
                        <div class="absolute top-3 right-3 w-8 h-8 opacity-20">
                            <div class="w-full h-full rounded-full border-2 border-[#2C1A0E]"></div>
                        </div>
                        <div class="w-[85%] h-[85%] bg-[#E89060] rounded-2xl flex items-center justify-center">
                            <img src="<?= base_url('assets/bread/3.png') ?>" />
                        </div>
                    </div>
                    <p class="text-[#2C1A0E] font-black uppercase text-sm tracking-wide text-center"
                        style="font-family: 'Fredoka One', cursive; letter-spacing: 0.05em;">
                        Roti Panggang
                    </p>
                </div>

                <!-- Product Card 2: Sliced Piece Bread -->
                <div class="flex flex-col items-center gap-3">
                    <div class="w-full aspect-square bg-[#7ECECE] rounded-3xl overflow-hidden relative flex items-end justify-center">
                        <!-- Doodle circle decoration -->
                        <div class="absolute top-3 right-4 w-12 h-12 opacity-20 border-2 border-[#2C1A0E] rounded-full"></div>
                        <div class="w-[85%] h-[85%] bg-[#6EBEBE] rounded-2xl flex items-center justify-center">
                            <img src="<?= base_url('assets/bread/4.png') ?>" />
                        </div>
                    </div>
                    <p class="text-[#2C1A0E] font-black uppercase text-sm tracking-wide text-center"
                        style="font-family: 'Fredoka One', cursive; letter-spacing: 0.05em;">
                        Roti Tawar
                    </p>
                </div>

                <!-- Product Card 3: Cookies Glucose (partially visible) -->
                <div class="flex flex-col items-center gap-3">
                    <div class="w-full aspect-square bg-[#F5D800] rounded-3xl overflow-hidden relative flex items-end justify-center">
                        <div class="w-[85%] h-[85%] bg-[#E8C800] rounded-2xl flex items-center justify-center">
                            <img src="<?= base_url('assets/bread/5.png') ?>" />
                        </div>
                    </div>
                    <p class="text-[#2C1A0E] font-black uppercase text-sm tracking-wide text-center"
                        style="font-family: 'Fredoka One', cursive; letter-spacing: 0.05em;">
                        Croissant
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ===================== SECTION 3C: WHY IS BAKING CONSIDERED AS ART FORM ===================== -->
<section class="px-6 md:px-10 pb-10" style="font-family: 'Nunito', sans-serif;">
    <div class="max-w-7xl mx-auto">
        <div class="bg-[#3D1F0D] rounded-3xl overflow-hidden relative flex flex-col md:flex-row items-stretch min-h-[320px]">

            <!-- Slide indicator (left edge) -->
            <div class="absolute left-5 top-1/2 -translate-y-1/2 flex flex-col gap-2 z-10">
                <div class="w-2 h-2 rounded-full bg-[#FF6B35]"></div>
                <div class="w-2 h-2 rounded-full bg-white/30"></div>
                <div class="w-2 h-2 rounded-full bg-white/30"></div>
            </div>

            <!-- Left: Image placeholder -->
            <div class="flex-1 relative md:max-w-[42%]">
                <div class="w-full h-full min-h-[280px] md:min-h-full bg-[#5C3520] rounded-2xl m-4 md:m-5 flex items-center justify-center overflow-hidden" style="min-height: 280px;">
                    <img src="<?= base_url('assets/bread/2.png') ?>" />
                </div>
            </div>

            <!-- Decorative wheat/leaf illustration right side -->
            <div class="absolute right-5 bottom-0 opacity-10">
                <svg width="80" height="160" viewBox="0 0 80 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40 160 C40 160 40 20 40 0" stroke="white" stroke-width="2" />
                    <ellipse cx="20" cy="60" rx="16" ry="8" fill="white" transform="rotate(-30 20 60)" />
                    <ellipse cx="60" cy="80" rx="16" ry="8" fill="white" transform="rotate(30 60 80)" />
                    <ellipse cx="22" cy="100" rx="14" ry="7" fill="white" transform="rotate(-25 22 100)" />
                    <ellipse cx="58" cy="115" rx="14" ry="7" fill="white" transform="rotate(25 58 115)" />
                    <ellipse cx="40" cy="40" rx="10" ry="5" fill="white" />
                </svg>
            </div>

            <!-- Right: Text content -->
            <div class="flex-1 px-8 md:px-10 py-8 md:py-10 flex flex-col justify-center relative">
                <!-- Orange swirl decoration -->
                <div class="absolute top-6 left-6 md:left-2 text-[#FF6B35] text-3xl opacity-80">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 10 C35 18, 30 30, 20 30 C10 30, 8 20, 14 15 C18 11, 24 14, 22 20" stroke="#FF6B35" stroke-width="3" fill="none" stroke-linecap="round" />
                    </svg>
                </div>

                <h2 class="text-white font-black uppercase leading-tight mt-6 md:mt-0"
                    style="font-family: 'Fredoka One', cursive; font-size: clamp(1.8rem, 4vw, 3rem); line-height: 1.05;">
                    MENGAPA <br>ROTI FRESH<br>SELALU DISUKAI?
                </h2>

                <p class="text-white/70 font-semibold text-sm mt-4 leading-relaxed max-w-sm">
                    Karena setiap roti dipanggang hangat setiap hari menggunakan bahan pilihan, menghadirkan aroma, tekstur, dan rasa yang selalu istimewa di setiap gigitan.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Section: With Enough Butter -->
<section class="bg-[#A8D5D1] mx-6 md:mx-10 mt-8 rounded-3xl px-8 md:px-12 py-8 relative overflow-hidden" style="font-family: 'Nunito', sans-serif;">

    <!-- Cookie decoration top-right -->
    <div class="absolute top-0 right-0 w-20 h-20 translate-x-4 -translate-y-2">
        <div class="w-full h-full bg-[#7B3F1A] rounded-full opacity-80 flex items-center justify-center">
            <span class="text-xs text-white opacity-50 font-bold">🍪</span>
        </div>
    </div>

    <div class="flex flex-col items-center md:flex-row gap-8 md:gap-0">

        <!-- Left Column -->
        <div class="flex-1 md:pr-12 md:border-r md:border-[#2C1A0E]/20">

            <!-- Headline with quote icon -->
            <div class="flex items-start gap-3">
                <!-- Quote circle -->
                <div class="mt-1 w-10 h-10 rounded-full border-2 border-[#2C1A0E] flex items-center justify-center flex-shrink-0 bg-transparent">
                    <span class="text-[#2C1A0E] font-black text-lg leading-none" style="margin-top: -3px;">"</span>
                </div>
                <h3 class="text-[#2C1A0E] font-black uppercase leading-tight"
                    style="font-family: 'Fredoka One', cursive; font-size: clamp(1.5rem, 3.5vw, 2.2rem); line-height: 1.05;">
                    AROMA FRESH <br>YANG SELALU DIRINDUKAN
                </h3>
            </div>

            <!-- Sub info row -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mt-6">
                <!-- Avatar + text -->
                <div class="flex items-center gap-3">
                    <!-- Avatar placeholder -->
                    <div class="w-14 h-14 rounded-full bg-[#F5D800] border-2 border-[#2C1A0E] flex items-center justify-center flex-shrink-0 overflow-hidden">
                        <div class="w-full h-full bg-[#F0D080] flex items-center justify-center">
                            <img src="<?= base_url('assets/avatar/1.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="text-[#2C1A0E] font-bold text-sm leading-snug">
                        Dipanggang fresh setiap hari <br>dengan bahan pilihan.
                    </p>
                </div>

            </div>
        </div>

        <!-- Right Column: Rating + Tags -->
        <div class="flex-1 md:pl-12">
            <!-- Rating row -->
            <div class="flex items-center gap-4 mb-5">
                <span class="font-black text-[#2C1A0E]"
                    style="font-family: 'Fredoka One', cursive; font-size: clamp(2.5rem, 5vw, 3.5rem); line-height: 1;">
                    3.73
                </span>
                <div>
                    <!-- Stars -->
                    <div class="flex gap-1 mb-1">
                        <svg class="w-5 h-5 text-[#FF6B35]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-[#FF6B35]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-[#FF6B35]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-[#FF6B35]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-[#2C1A0E] opacity-20" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-[#2C1A0E] font-bold text-xs opacity-70">Pilihan favorit pelanggan</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="kontak" class="mt-20 px-6 md:px-10 pb-10">
    <div class="p-10 flex justify-between items-center bg-[#372421] text-white rounded-lg">
        <p>&copy; 2026 CV MyBakery</p>
        <div class="text-3xl font-black tracking-tight" style="font-family: 'Fredoka One', cursive;">
            CV MyBakery<span class="text-[#FF6B35]">.</span>
        </div>
        <div class="flex gap-5">
            <h1>Ikuti Kami Di : </h1>
            <div class="flex gap-2">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path>
                    </svg>
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"></path>
                    </svg>
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>