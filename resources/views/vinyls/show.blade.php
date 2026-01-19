<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    {{ $vinyl->title }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @php
                $backRoute = $vinyl->is_official ? route('vinyls.shop') : route('vinyls.marktplaats');
                $backLabel = $vinyl->is_official ? 'Back to Shop' : 'Back to Marketplace';
            @endphp

            <a href="{{ $backRoute }}"
               class="inline-flex items-center px-6 py-3 mb-8 bg-white text-black font-black uppercase tracking-wide border-4 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-200 group">
                <svg class="w-5 h-5 mr-2 stroke-[3] transition-transform group-hover:-translate-x-1" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                {{ $backLabel }}
            </a>

            <div class="bg-white border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] overflow-hidden mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="p-8 flex items-center justify-center bg-gray-50 border-b-4 md:border-b-0 md:border-r-4 border-black">
                        <div class="relative group">
                            <div
                                class="absolute inset-0 bg-black translate-x-3 translate-y-3 group-hover:translate-x-4 group-hover:translate-y-4 transition-transform duration-200"></div>
                            <img src="{{ asset('storage/' . $vinyl->image) }}" alt="{{ $vinyl->title }}"
                                 class="relative w-full max-w-md border-4 border-black object-cover">
                        </div>
                    </div>

                    <div class="flex flex-col p-8 md:p-12">
                        <div class="mb-6">
                            <span
                                class="inline-block px-3 py-1 bg-black text-white text-xs font-black uppercase tracking-widest mb-4 italic">
                                Release: {{ $vinyl->year }}
                            </span>
                            <h1 class="text-5xl font-black text-black uppercase tracking-tight leading-none mb-4">
                                {{ $vinyl->title }}
                            </h1>
                        </div>

                        <div
                            class="bg-black text-white p-6 inline-block self-start border-4 border-black shadow-[6px_6px_0px_0px_rgba(232,227,216,1)] mb-8">
                            <p class="text-4xl font-black italic">
                                €{{ number_format($vinyl->price, 2, '.', ',') }}
                            </p>
                        </div>

                        <div class="space-y-6 mb-12">
                            <div>
                                <h3 class="text-lg font-black text-black uppercase tracking-wide border-b-4 border-black inline-block mb-4">
                                    Description
                                </h3>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    {{ $vinyl->description }}
                                </p>
                            </div>

                            <div class="flex items-center gap-4">
                                <span class="font-black text-black uppercase tracking-wide">Status:</span>
                                @if($vinyl->is_official)
                                    <span
                                        class="px-4 py-2 bg-green-400 border-2 border-black text-black font-black uppercase text-sm shadow-[3px_3px_0px_0px_rgba(0,0,0,1)]">
                                        Official Release
                                    </span>
                                @else
                                    <span
                                        class="px-4 py-2 bg-yellow-400 border-2 border-black text-black font-black uppercase text-sm shadow-[3px_3px_0px_0px_rgba(0,0,0,1)]">
                                        Marketplace Item
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-auto pt-8 border-t-2 border-black/10">
                            <form action="{{ route('cart.add', $vinyl) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full group relative inline-block">
                                    <span class="absolute inset-0 translate-x-2 translate-y-2 bg-black transition-transform group-hover:translate-x-3 group-hover:translate-y-3"></span>
                                    <span class="relative flex items-center justify-center gap-3 w-full px-10 py-6 bg-[#fbbf24] border-4 border-black text-black font-black uppercase text-2xl tracking-tighter hover:-translate-x-1 hover:-translate-y-1 transition-transform active:translate-x-0 active:translate-y-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        BUY NOW
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">

                <div class="lg:col-span-2 space-y-6">
                    <h2 class="text-3xl font-black uppercase tracking-tighter border-b-8 border-black inline-block mb-4">
                        Comments ({{ $vinyl->reactions->count() }})
                    </h2>

                    <div class="space-y-4">
                        @forelse($vinyl->reactions as $reaction)
                            <div
                                class="bg-white border-4 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] relative">
                                <div class="flex justify-between items-center mb-4">
                                    <span
                                        class="bg-black text-white px-3 py-1 font-black uppercase text-xs tracking-widest">
                                        {{ $reaction->user->name }}
                                    </span>
                                    <span class="text-xs font-bold text-gray-500 uppercase tracking-tighter">
                                        {{ $reaction->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <p class="text-xl font-bold leading-tight text-black">
                                    "{{ $reaction->message }}"
                                </p>
                            </div>
                        @empty
                            <div class="border-4 border-dashed border-black/30 p-12 text-center bg-black/5">
                                <p class="font-black uppercase text-gray-400 tracking-widest text-xl">No comments yet</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="sticky top-8">
                    @auth
                        <div class="bg-[#e8e3d8] border-4 border-black p-8 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                            <h3 class="text-2xl font-black uppercase tracking-tight mb-6">Drop a message</h3>

                            <form action="{{ route('reactions.store', $vinyl) }}" method="POST" class="space-y-4">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <textarea name="message" rows="4" required
                                              class="border-4 border-black p-4 text-lg font-bold focus:bg-white outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all"
                                              placeholder="What do you think of this record?"></textarea>
                                </div>

                                <button type="submit"
                                        class="w-full bg-black text-white border-4 border-black py-4 px-8 font-black uppercase text-xl tracking-widest shadow-[6px_6px_0px_0px_rgba(251,191,36,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                                    Post Comment
                                </button>
                            </form>
                        </div>
                    @else
                        <div
                            class="bg-white border-4 border-black p-8 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)] text-center">
                            <p class="font-black uppercase text-lg mb-4 italic text-gray-400">Want to join the conversation?</p>
                            <a href="{{ route('login') }}"
                               class="inline-block bg-black text-white px-6 py-3 font-black uppercase tracking-widest border-4 border-black shadow-[4px_4px_0px_0px_rgba(251,191,36,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                                Log in here
                            </a>
                        </div>
                    @endauth
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
