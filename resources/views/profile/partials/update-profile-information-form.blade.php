<section>
    <header>
        <h2 class="text-2xl font-black uppercase tracking-tight text-black">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm font-bold text-gray-600 uppercase tracking-tighter">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex flex-col gap-1">
            <x-input-label for="name" :value="__('Name')" class="font-black uppercase text-xs" />
            <input id="name" name="name" type="text" class="border-2 border-black p-3 text-lg font-bold focus:bg-yellow-50 outline-none w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="flex flex-col gap-1">
            <x-input-label for="email" :value="__('Email')" class="font-black uppercase text-xs" />
            <input id="email" name="email" type="email" class="border-2 border-black p-3 text-lg font-bold focus:bg-yellow-50 outline-none w-full" value="{{ old('email', $user->email) }}" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="bg-black text-white border-4 border-black py-3 px-8 font-black uppercase tracking-widest shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" class="text-sm font-black uppercase text-green-600 italic">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
