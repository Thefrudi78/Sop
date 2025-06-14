<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 justify-items-center">
    @foreach($characters as $character)
        <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg">
            <img src={{ asset($character['image']) }} alt="Portrait Image"
                class="w-full h-full object-cover">
        </div>
    @endforeach
    </div>
</x-layout>