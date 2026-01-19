<x-app-layout>
    <x-slot name="header">
        <div class="bg-[#e8e3d8] border-b-4 border-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="font-black text-4xl text-black tracking-tight uppercase">
                    List Your Vinyl
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#e8e3d8] min-h-screen py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white border-4 border-black shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] p-8 md:p-12">
                <h1 class="text-3xl font-black uppercase tracking-tight mb-8 border-b-4 border-black inline-block">
                    Item Details
                </h1>

                <form action="{{ route('vinyls.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <input type="hidden" name="is_official" value="0">

                    <div class="flex flex-col gap-1">
                        <label class="font-black uppercase text-xs tracking-widest">Album Title</label>
                        <input type="text" name="title" required
                               class="border-4 border-black p-4 text-lg font-bold focus:bg-yellow-50 outline-none transition-all focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"
                               placeholder="e.g. Pink Floyd - The Wall">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-1">
                            <label class="font-black uppercase text-xs tracking-widest">Release Year</label>
                            <input type="number" name="year" required
                                   class="border-4 border-black p-4 text-lg font-bold focus:bg-yellow-50 outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"
                                   placeholder="1973">
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="font-black uppercase text-xs tracking-widest">Asking Price (€)</label>
                            <input type="number" name="price" required step="0.01"
                                   class="border-4 border-black p-4 text-lg font-bold focus:bg-yellow-50 outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"
                                   placeholder="0.00">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-black uppercase text-xs tracking-widest">Description</label>
                        <textarea name="description" rows="3" required
                                  placeholder="Describe the condition of the sleeve and record..."
                                  class="border-4 border-black p-4 text-lg font-bold focus:bg-yellow-50 outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"></textarea>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-black uppercase text-xs tracking-widest">Vinyl Photo</label>
                        <input type="file" name="image" required
                               class="border-4 border-black p-2 font-bold bg-gray-50
                                      file:mr-4 file:py-2 file:px-4
                                      file:border-0 file:bg-black file:text-white
                                      file:font-black file:uppercase file:text-xs
                                      cursor-pointer hover:bg-yellow-50 transition-all">
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="w-full bg-[#fbbf24] border-4 border-black py-5 px-10 font-black uppercase text-2xl tracking-tighter shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                            Post Vinyl Online
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
