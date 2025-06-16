<x-layout>
    <div class="flex justify-center pt-10 pb-10">
        <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg relative">
            <img src="{{ asset('img/character/genshin/paimon.jpg') }}" alt="paimon Image"
                class="w-full h-full object-cover">            
            <div class="absolute bottom-0 left-0 w-full h-1/3 bg-black/60 backdrop-blur-sm flex items-end justify-center transition-none">
                <span class="text-white text-lg font-semibold mb-3">Paimon</span>
            </div>
        </div>
    </div>
    <div class="flex justify-center pt-10 pb-10">
        <form method="POST" action="#">
            @csrf
            <div class="flex gap-4">
                <label class="cursor-pointer">
                    <input type="radio" name="answer" value="true" required class="hidden peer">
                    <span class="px-6 py-2 bg-blue-600 text-white rounded-lg block hover:bg-blue-700 transition-colors peer-checked:bg-blue-800">
                        Smash!
                    </span>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="answer" value="false" required class="hidden peer">
                    <span class="px-6 py-2 bg-blue-600 text-white rounded-lg block hover:bg-blue-700 transition-colors peer-checked:bg-blue-800">
                        Pass!
                    </span>
                </label>
            </div>
            
            <div class="mt-6 text-center">
                <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                    Next
                </button>
            </div>
        </form>
    </div>
</x-layout>