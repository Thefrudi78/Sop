<x-layout>
    <div class="container pt-10 pb-10">
        
        <div class="filter-buttons">
            <button class="filter-btn genshin" onclick="filterCards('genshin')">Genshin</button>
            <button class="filter-btn honkai" onclick="filterCards('honkai')">Honkai : Star Rail</button>
            <button class="filter-btn zenless" onclick="filterCards('zenless')">Zenless Zone Zero</button>
            <button class="filter-btn wuthering" onclick="filterCards('wuthering')">Wuthering Waves</button>
        </div>

        <div class="no-selection">
            ✨ Select a game to view characters ✨
        </div>

        <div class="cards-container" id="cardsContainer">
        @foreach($characters as $key => $character)
            @php
                switch($character->game_id) {
                    case 1:
                        $game = 'genshin';
                        break;
                    case 2:
                        $game = 'honkai';
                        break;
                    case 3:
                        $game = 'zenless';
                        break;
                    case 4:
                        $game = 'wuthering';
                        break;
                    default:
                        $game = 'unknown';
                        break;
                }
            @endphp
            <div class="character-card dark:bg-gray-800" data-game="{{ $game }}">
                <div class="character-image">
                    <img src="{{ asset($character->image) }}" alt="{{ $character->name }} Image" class="w-full h-full object-cover">
                </div>
                <div class="character-name dark:text-white">{{ $character->name }}</div>
                <div class="character-game dark:text-gray-400">{{ $game }}</div>

                <div class="flex justify-between mb-1">
                    <span class="text-base font-medium text-blue-700 dark:text-white">{{ $character->percentage }}%</span>
                    <span class="text-sm font-medium text-blue-700 dark:text-white">{{ 100-$character->percentage }}%</span>
                </div>
                    <div class="w-full bg-red-200 rounded-full h-2.5 dark:bg-red-700">
                    <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ $character->percentage }}%"></div>
                </div>

            </div>          
        @endforeach
    </div>

    <script>
        let currentFilter = null;
        
        function filterCards(game) {
            const cards = document.querySelectorAll('.character-card');
            const container = document.getElementById('cardsContainer');
            const buttons = document.querySelectorAll('.filter-btn');
            const noSelection = document.querySelector('.no-selection');
            
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            event.target.classList.add('active');
            
            // Hide no selection message
            noSelection.style.display = 'none';
            
            // First hide all cards
            cards.forEach(card => {
                card.classList.remove('show');
                card.style.display = 'none';
            });
            
            // Show container
            container.classList.add('visible');
            
            // Filter and show relevant cards with staggered animation
            const relevantCards = Array.from(cards).filter(card => card.dataset.game === game);
            
            relevantCards.forEach((card, index) => {
                card.style.display = 'block';
                setTimeout(() => {
                    card.classList.add('show');
                }, index * 100);
            });
            
            currentFilter = game;
        }
        
        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.character-card');
            cards.forEach(card => {
                card.style.display = 'none';
            });
        });
    </script>
</x-layout>