<section>
    <header>
        <h2 class="text-2xl font-black uppercase tracking-tight text-black">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm font-bold text-gray-600 uppercase tracking-tighter">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="flex flex-col gap-1">
            <x-input-label for="current_password" :value="__('Current Password')" class="font-black uppercase text-xs" />
            <input id="current_password" name="current_password" type="password" class="border-2 border-black p-3 text-lg font-bold focus:bg-yellow-50 outline-none w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-1">
            <x-input-label for="password" :value="__('New Password')" class="font-black uppercase text-xs" />
            <input id="password" name="password" type="password" class="border-2 border-black p-3 text-lg font-bold focus:bg-yellow-50 outline-none w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-1">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-black uppercase text-xs" />
            <input id="password_confirmation" name="password_confirmation" type="password" class="border-2 border-black p-3 text-lg font-bold focus:bg-yellow-50 outline-none w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="bg-black text-white border-4 border-black py-3 px-8 font-black uppercase tracking-widest shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" class="text-sm font-black uppercase text-green-600 italic">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
