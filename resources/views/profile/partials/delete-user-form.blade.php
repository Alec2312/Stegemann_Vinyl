<section class="space-y-6">
    <header>
        <h2 class="text-2xl font-black uppercase tracking-tight text-red-600">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm font-bold text-gray-600 uppercase tracking-tighter">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 text-white border-4 border-black py-3 px-8 font-black uppercase tracking-widest shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 bg-white border-8 border-black">
            @csrf
            @method('delete')

            <h2 class="text-3xl font-black uppercase tracking-tight text-black">
                {{ __('Are you sure?') }}
            </h2>

            <p class="mt-4 text-sm font-bold text-gray-600 uppercase">
                {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="border-4 border-black p-4 text-lg font-bold focus:bg-red-50 outline-none w-full"
                    placeholder="{{ __('Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-8 flex justify-end gap-4">
                <button type="button" x-on:click="$dispatch('close')" class="font-black uppercase underline">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="bg-red-600 text-white border-4 border-black py-3 px-8 font-black uppercase tracking-widest shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                    {{ __('Delete') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
