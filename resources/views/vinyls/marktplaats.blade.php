<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    Marketplace
                </h2>
                <p class="text-lg font-semibold mt-2 uppercase tracking-tighter italic">User-to-User Vinyl Sales</p>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                @auth
                    <a href="{{ route('vinyls.create') }}"
                       class="inline-block px-8 py-4 bg-black text-white font-black uppercase tracking-wide border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-200">
                        + Add new vinyl
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="inline-block px-8 py-4 bg-white text-black font-black uppercase tracking-wide border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-200">
                        Login to add vinyl
                    </a>
                @endauth
            </div>

            @if($vinyls->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($vinyls as $vinyl)
                        <div
                            class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] transition-all duration-200 hover:-translate-y-1">
                            <a href="{{ route('vinyls.show', $vinyl) }}" class="block">
                                <div class="aspect-square bg-black p-4 border-b-4 border-black">
                                    <img src="{{ asset('storage/' . $vinyl->image) }}"
                                         alt="{{ $vinyl->title }}"
                                         class="w-full h-full object-cover rounded-full">
                                </div>
                                <div class="p-6 flex flex-col justify-between h-full min-h-[230px]">
                                    <div>
                                        <h2 class="text-2xl font-black uppercase mb-2 tracking-tight line-clamp-1">{{ $vinyl->title }}</h2>
                                        <p class="text-sm text-gray-700 mb-4 line-clamp-2">{{ $vinyl->description }}</p>
                                    </div>
                                    <div class="flex justify-between items-center pt-4 border-t-2 border-black">
                                        <span class="text-sm font-bold uppercase italic">{{ $vinyl->year }}</span>
                                        <span class="text-2xl font-black">€{{ ($vinyl->price) }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-12 text-center">
                    <p class="text-2xl font-bold uppercase mb-2">No vinyls on the marketplace yet.</p>
                    <p class="text-lg font-black uppercase text-gray-400">Be the first to upload!</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
