<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    {{ __('Profiel Instellingen') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <div class="p-8 bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-8 bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-8 bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(220,38,38,1)]">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
