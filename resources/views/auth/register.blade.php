<x-guest-layout>
    <div class="min-h-screen bg-[#e8e3d8] flex flex-col justify-center items-center px-4 py-12">
        <div class="w-full max-w-md bg-white border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] p-8">

            <h2 class="font-black text-4xl uppercase tracking-tighter mb-8 border-b-4 border-black inline-block">
                Register
            </h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div class="flex flex-col gap-2">
                    <label for="name" class="font-black uppercase text-sm tracking-wide">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus
                           class="border-4 border-black p-3 font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('name')" class="mt-1 font-bold text-red-600 uppercase text-xs" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email" class="font-black uppercase text-sm tracking-wide">Email Address</label>
                    <input id="email" type="email" name="email" :value="old('email')" required
                           class="border-4 border-black p-3 font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('email')" class="mt-1 font-bold text-red-600 uppercase text-xs" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password" class="font-black uppercase text-sm tracking-wide">Password</label>
                    <input id="password" type="password" name="password" required
                           class="border-4 border-black p-3 font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('password')" class="mt-1 font-bold text-red-600 uppercase text-xs" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password_confirmation" class="font-black uppercase text-sm tracking-wide">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="border-4 border-black p-3 font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] outline-none">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 font-bold text-red-600 uppercase text-xs" />
                </div>

                <div class="flex flex-col gap-4 pt-4">
                    <button type="submit"
                            class="w-full bg-[#fbbf24] text-black border-4 border-black py-4 font-black uppercase text-xl shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 transition-all">
                        Create Account
                    </button>

                    <a class="text-center font-black uppercase text-[10px] tracking-widest hover:underline" href="{{ route('login') }}">
                        Already have an account? Log in here
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
