<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    Home
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="flex flex-row items-center gap-12">

                <div class="w-1/2 space-y-6">
                    <h1 class="text-6xl font-black uppercase tracking-tight leading-tight">
                        Discover Stegemann Vinyl
                    </h1>

                    <p class="text-lg text-gray-800 leading-relaxed font-bold">
                        At Stegemann Vinyl, you'll find a unique collection of records for every music enthusiast. From
                        classic albums to modern releases, every record tells its own story. Our platform offers
                        the opportunity to not only buy vinyl but also share your own records with others.
                    </p>

                    <p class="text-lg text-gray-800 leading-relaxed font-bold">
                        With our marketplace concept, you can easily sell, trade, or discover vinyl from other
                        collectors. This creates a vibrant community of music lovers experiencing their passion
                        together. Whether you're a seasoned collector or just starting out, there's always
                        something new to find.
                    </p>

                    <div class="flex gap-4 pt-4">
                        <a href="{{ route('vinyls.shop') }}"
                           class="inline-block px-8 py-4 bg-black text-white font-black uppercase tracking-wide border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-200">
                            Official Shop
                        </a>

                        <a href="{{ route('vinyls.marktplaats') }}"
                           class="inline-block px-8 py-4 bg-white text-black font-black uppercase tracking-wide border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-200">
                            Marketplace
                        </a>
                    </div>
                </div>

                <div class="w-1/2 flex justify-center">
                    <div class="border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                        <img src="{{ asset('hero.png') }}" alt="Vinyl collection" class="w-full">
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-black text-white py-20 border-t-4 border-b-4 border-black">
            <div class="max-w-4xl mx-auto text-center px-8">
                <h2 class="text-5xl font-black uppercase mb-6 tracking-tight">
                    Experience vinyl the way it’s meant to be
                </h2>
                <p class="text-xl mb-8 font-black uppercase tracking-widest text-[#fbbf24]">
                    Discover, collect, and share your passion for music.
                </p>
                <a href="/about"
                   class="inline-block px-8 py-4 bg-white text-black font-black uppercase tracking-wide border-4 border-white shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] hover:shadow-[8px_8px_0_0_rgba(255,255,255,1)] hover:-translate-y-1 transition-all duration-200">
                    Learn More
                </a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="grid grid-cols-3 gap-8">
                <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                    <div class="text-5xl mb-4 text-black">🎵</div>
                    <h3 class="text-2xl font-black uppercase mb-3">Official Shop</h3>
                    <p class="font-bold uppercase text-xs tracking-widest text-gray-600">
                        Authentic vinyl directly from Stegemann
                    </p>
                </div>

                <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                    <div class="text-5xl mb-4 text-black">🤝</div>
                    <h3 class="text-2xl font-black uppercase mb-3">Marketplace</h3>
                    <p class="font-bold uppercase text-xs tracking-widest text-gray-600">
                        Buy, sell, and trade with other fans
                    </p>
                </div>

                <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                    <div class="text-5xl mb-4 text-black">💿</div>
                    <h3 class="text-2xl font-black uppercase mb-3">Community</h3>
                    <p class="font-bold uppercase text-xs tracking-widest text-gray-600">
                        Join a passionate community of collectors
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
