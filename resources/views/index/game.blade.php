<x-layout>
    <div class="grid grid-cols-4 gap-4">
    @foreach($characters as $character)
        <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg">
            <img src={{ asset($character['image']) }} alt="Portrait Image"
                class="w-full h-full object-cover">
        </div>
    @endforeach
    </div>
</x-layout>