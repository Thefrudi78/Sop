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
            <div class="character-card" data-game="{{ $game }}">
                <div class="character-image">
                    <img src="{{ asset($character->image) }}" alt="{{ $character->name }} Image" class="w-full h-full object-cover">
                </div>
                <div class="character-name">{{ $character->name }}</div>
                <div class="character-game">{{ $game }}</div>
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