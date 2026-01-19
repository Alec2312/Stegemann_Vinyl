<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    About
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <div class="w-full lg:w-1/2 space-y-6">
                    <h1 class="text-5xl lg:text-6xl font-black uppercase tracking-tight leading-tight">
                        Driven by the Groove.
                    </h1>
                    <p class="text-lg text-gray-800 leading-relaxed font-bold">
                        Stegemann Vinyl is more than just a store; it is a tribute to analog culture. In an era of
                        fleeting digital streams, we offer the tangibility of black gold. Our mission is simple: helping
                        every collector track down that one missing record that completes their collection.
                    </p>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center">
                    <div class="border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                        <img src="{{ asset('hero.png') }}" alt="Vinyl collection" class="w-full">
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-black text-white min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="flex flex-col lg:flex-row items-center gap-12">

                    <div class="w-full lg:w-1/2 flex justify-center">
                        <div class="border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                            <img src="{{ asset('hero.png') }}" alt="Vinyl collection" class="w-full">
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 space-y-6">
                        <h1 class="text-5xl lg:text-6xl font-black uppercase tracking-tight leading-tight">
                            Driven by the Groove.
                        </h1>
                        <p class="text-lg text-[#fbbf24] leading-relaxed font-bold">
                            Whether you are hunting for a brand-new release from our official stock or looking to score
                            a
                            rare second-hand gem on our marketplace, we prioritize quality and the authentic listening
                            experience above all else.
                        </p>
                    </div>

                </div>
            </div>

            <div class="bg-[#e8e3d8]">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                            <div class="text-5xl mb-4 text-black">☑️</div>
                            <h3 class="text-2xl font-black uppercase mb-3 text-black">Stegemann Select</h3>
                            <p class="font-bold uppercase text-xs tracking-widest text-gray-600">Our curated in-house
                                inventory
                                of high-quality pressings.
                            </p>
                        </div>

                        <div
                            class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                            <div class="text-5xl mb-4 text-black">🤝</div>
                            <h3 class="text-2xl font-black uppercase mb-3 text-black">The Marketplace</h3>
                            <p class="font-bold uppercase text-xs tracking-widest text-gray-600">Direct trading between
                                collectors. Built for fans, by fans.
                            </p>
                        </div>

                        <div
                            class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8 text-center">
                            <div class="text-5xl mb-4 text-black">💽</div>
                            <h3 class="text-2xl font-black uppercase mb-3 text-black">Vinyl Culture</h3>
                            <p class="font-bold uppercase text-xs tracking-widest text-gray-600">Join a growing
                                community of
                                dedicated crate diggers worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
