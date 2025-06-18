<!--ini buat page hasil jawaban-->
<x-layout>
    <div class="flex justify-center pt-10 pb-10 gap-10">
        <div class="flex flex-col items-center">
            <h3 class="text-left text-2xl font-bold mb-4 mr-8">Smashed</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-items-center pt-2">
            @foreach($smashed as $smash)
                <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg relative group">
                    <img src={{ asset($smash['image']) }} alt="{{ $smash['name'] }} Image"
                        class="w-full h-full object-cover">            
                    <div class="absolute bottom-0 left-0 w-full h-1/3 bg-black/60 backdrop-blur-sm flex items-end justify-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-white text-lg font-semibold mb-3">{{ $smash['name'] }}</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="flex flex-col items-center">
            <h3 class="text-left text-2xl font-bold mb-4 ml-8">Passed</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-items-center pt-2">
            @foreach($passed as $pass)
                <div class="w-48 aspect-[3/4] overflow-hidden rounded-2xl shadow-lg relative group">
                    <img src={{ asset($pass['image']) }} alt="{{ $pass['name'] }} Image"
                        class="w-full h-full object-cover">            
                    <div class="absolute bottom-0 left-0 w-full h-1/3 bg-black/60 backdrop-blur-sm flex items-end justify-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                        <span class="text-white text-lg font-semibold mb-3">{{ $pass['name'] }}</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <h2 class="text-2xl font-bold mb-4">Thank you for completing the questionnaire!</h2>
        <p class="text-gray-600">You have successfully smashed # characters and passed on # characters.</p>
        <p class="text-gray-600">Your results will help us improve the game experience.</p>
        <p class="text-gray-600">Feel free to play again or explore other games!</p>
        <div class="mt-4"> 
            <a href="{{ route('dashboard') }}" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                Back to Dashboard
            </a>
        </div>
    </div>
    
</x-layout>