<nav class="bg-[#e8e3d8] border-b-4 border-black">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-20 items-center">

            <!-- Logo + links -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <x-application-logo
                        class="block h-32 w-auto fill-current text-black"/>
                </a>

                <div class="flex space-x-2 ml-10 items-center">
                    <a href="{{ route('dashboard') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide transition-all duration-200
                       {{ request()->routeIs('dashboard')
                           ? 'bg-black text-white border-2 border-black'
                           : 'text-black hover:bg-white border-2 border-transparent hover:border-black' }}">
                        Home
                    </a>

                    <a href="{{ route('vinyls.shop') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide transition-all duration-200
                       {{ request()->routeIs('vinyls.shop')
                           ? 'bg-black text-white border-2 border-black'
                           : 'text-black hover:bg-white border-2 border-transparent hover:border-black' }}">
                        Shop
                    </a>

                    <a href="{{ route('vinyls.marktplaats') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide transition-all duration-200
                       {{ request()->routeIs('vinyls.marktplaats')
                           ? 'bg-black text-white border-2 border-black'
                           : 'text-black hover:bg-white border-2 border-transparent hover:border-black' }}">
                        Marketplace
                    </a>

                    <a href="{{ route('about') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide transition-all duration-200
                       {{ request()->routeIs('about')
                           ? 'bg-black text-white border-2 border-black'
                           : 'text-black border-2 border-transparent hover:bg-black hover:text-white hover:border-black' }}">
                        About
                    </a>
                </div>
            </div>

            <!-- Rechts: auth -->
            <div class="flex items-center space-x-4">

                @auth
                    <a href="{{ route('cart.index') }}"
                       class="relative px-4 py-2 font-black uppercase text-sm tracking-wide flex items-center gap-2 border-2
                       {{ request()->routeIs('cart.index')
                           ? 'bg-[#fbbf24] border-black text-black'
                           : 'border-black bg-white hover:bg-black hover:text-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <span>Cart</span>
                        <span
                            class="absolute -top-3 -right-3 bg-red-600 text-white text-[10px] font-black h-6 w-6 flex items-center justify-center border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            {{ auth()->user()->cartItems->sum('quantity') }}
                        </span>
                    </a>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-4 py-2 border-2 border-black font-black text-sm uppercase bg-white hover:bg-black hover:text-white transition-all duration-200 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1">
                                {{ Auth::user()->name }}
                                <svg class="ml-2 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                                <a href="{{ route('profile.edit') }}"
                                   class="block px-4 py-3 text-sm font-black uppercase hover:bg-black hover:text-white border-b-2 border-black">
                                    Profile
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); this.closest('form').submit();"
                                       class="block px-4 py-3 text-sm font-black uppercase hover:bg-black hover:text-white">
                                        Log Out
                                    </a>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>

                @else
                    <a href="{{ route('login') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide border-2 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-5 py-2 font-black uppercase text-sm tracking-wide border-2 border-black bg-black text-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
