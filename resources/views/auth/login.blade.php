<x-guest-layout>
    <div class="min-h-screen bg-[#e8e3d8] flex flex-col justify-center items-center px-4">
        <div class="w-full max-w-md bg-white border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] p-8">

            <h2 class="font-black text-4xl uppercase tracking-tighter mb-8 border-b-4 border-black inline-block">
                Login
            </h2>

            <x-auth-session-status class="mb-4 font-bold text-red-600 uppercase text-xs" :status="session('status')"/>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="flex flex-col gap-2">
                    <label for="email" class="font-black uppercase text-sm tracking-wide">Email Address</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus
                           class="border-4 border-black p-3 font-bold focus:ring-0 focus:border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('email')"
                                   class="mt-1 font-bold text-red-600 uppercase text-xs"/>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password" class="font-black uppercase text-sm tracking-wide">Password</label>
                    <input id="password" type="password" name="password" required
                           class="border-4 border-black p-3 font-bold focus:ring-0 focus:border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('password')"
                                   class="mt-1 font-bold text-red-600 uppercase text-xs"/>
                </div>

                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                           class="w-6 h-6 border-4 border-black text-black focus:ring-0 cursor-pointer">
                    <span class="ms-3 font-black uppercase text-xs tracking-widest">Remember me</span>
                </div>

                <div class="flex flex-col gap-4 pt-4">
                    <button type="submit"
                            class="w-full bg-black text-white font-black uppercase py-4 border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-all">
                        Log in
                    </button>

                    <div class="flex justify-between items-center">
                        @if (Route::has('password.request'))
                            <a class="font-black uppercase text-[10px] tracking-widest hover:underline"
                               href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                        <a class="font-black uppercase text-[10px] tracking-widest hover:underline"
                           href="{{ route('register') }}">
                            Create account
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
