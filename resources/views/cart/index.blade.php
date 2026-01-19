<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black font-black text-4xl p-8 uppercase">
            Shopping Cart
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen py-12">
        <div class="max-w-5xl mx-auto px-8">
            @if($items->count() > 0)
                <div class="grid grid-cols-3 gap-8">

                    <div class="col-span-2 space-y-4">
                        @foreach($items as $item)
                            <div
                                class="bg-white border-4 border-black p-6 flex flex-row items-center gap-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">

                                <img src="{{ asset('storage/' . $item->vinyl->image) }}"
                                     class="w-24 h-24 border-4 border-black object-cover shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">

                                <div class="flex-grow text-left">
                                    <h3 class="font-black uppercase text-2xl tracking-tighter">
                                        {{ $item->vinyl->title }}
                                    </h3>
                                    <p class="font-black text-[#fbbf24] bg-black inline-block px-2 py-1 mt-1 uppercase text-sm">
                                        €{{ ($item->vinyl->price) }} per piece
                                    </p>
                                </div>

                                <div
                                    class="flex items-center gap-0 border-4 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                    <form action="{{ route('cart.update', $item) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="action" value="decrease">
                                        <button
                                            class="bg-white hover:bg-black hover:text-white w-10 h-10 font-black text-2xl transition-colors">
                                            -
                                        </button>
                                    </form>

                                    <div
                                        class="w-12 h-10 flex items-center justify-center border-x-4 border-black bg-gray-50 font-black text-xl">
                                        {{ $item->quantity }}
                                    </div>

                                    <form action="{{ route('cart.update', $item) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="action" value="increase">
                                        <button
                                            class="bg-white hover:bg-black hover:text-white w-10 h-10 font-black text-2xl transition-colors">
                                            +
                                        </button>
                                    </form>
                                </div>

                                <div class="text-right flex flex-col items-end gap-2">
                                    <p class="font-black text-2xl">
                                        €{{ number_format($item->vinyl->price * $item->quantity, 2) }}
                                    </p>
                                    <form action="{{ route('cart.remove', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="font-black uppercase text-[10px] tracking-widest text-red-600 hover:underline">
                                            Remove Item
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div
                        class="bg-white border-4 border-black p-8 shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] h-fit sticky top-8">
                        <h2 class="font-black text-2xl uppercase border-b-4 border-black mb-4">
                            Summary
                        </h2>

                        <div class="flex justify-between mb-2 font-bold uppercase text-sm">
                            <span>Subtotal</span>
                            <span>€{{ number_format($total, 2) }}</span>
                        </div>

                        <div class="flex justify-between mb-6 font-bold uppercase text-sm">
                            <span>Shipping</span>
                            <span class="text-green-600">FREE</span>
                        </div>

                        <div class="border-t-4 border-black pt-4 mb-8">
                            <div class="flex justify-between items-end">
                                <span class="font-black uppercase text-lg">Total</span>
                                <span class="text-4xl font-black italic">
                                    €{{ ($total) }}
                                </span>
                            </div>
                        </div>

                        <button
                            class="w-full bg-[#fbbf24] border-4 border-black py-5 font-black uppercase text-2xl tracking-tighter shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                            Checkout
                        </button>

                        <a href="{{ route('vinyls.shop') }}"
                           class="block text-center mt-6 font-black uppercase text-xs hover:underline">
                            Continue Shopping
                        </a>
                    </div>
                </div>
            @else
                <div class="bg-white border-4 border-dashed border-black p-20 text-center">
                    <h2 class="font-black text-4xl uppercase mb-6 tracking-tighter">
                        Your cart is empty!
                    </h2>
                    <a href="{{ route('vinyls.shop') }}"
                       class="inline-block bg-black text-white px-10 py-5 font-black uppercase text-xl shadow-[8px_8px_0px_0px_rgba(251,191,36,1)] hover:shadow-none hover:translate-x-2 hover:translate-y-2 transition-all">
                        Start Shopping
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
