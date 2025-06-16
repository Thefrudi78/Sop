<x-layout>
    <div class="flex justify-center pt-10 pb-10">
        <div class="relative group w-150 h-72">
            <img
                src={{ asset($game['image']) }}
                alt="Sample Image"
                class="w-full h-full object-cover rounded-xl transition duration-300 group-hover:blur-sm"
            />

            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Click Me</button>
            </div>
        </div>
    </div>
    <h3 class="text-left text-2xl font-bold pl-15 mb-4">Characters</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 justify-items-center pt-10">
    @foreach($characters as $character)
        <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg relative group">
            <img src={{ asset($character['image']) }} alt="{{ $character['name'] }} Image"
                class="w-full h-full object-cover">            <div class="absolute bottom-0 left-0 w-full h-1/3 bg-black/60 backdrop-blur-sm flex items-end justify-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                <span class="text-white text-lg font-semibold mb-3">{{ $character['name'] }}</span>
            </div>
        </div>
    @endforeach
    </div>
</x-layout>