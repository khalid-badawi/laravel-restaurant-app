<div>
    <div class='container d-flex justify-content-center mt-4 mb-5'>

        <button wire:click="filterCategory('all')"
            class="{{ $category === 'all' ? 'selected-btn' : 'unselected-btn' }}">All</button>
        <button wire:click="filterCategory('Breakfast')"
            class="{{ $category === 'Breakfast' ? 'selected-btn' : 'unselected-btn' }}"> Breakfast</button>
        <button wire:click="filterCategory('MainDishes')"
            class="{{ $category === 'MainDishes' ? 'selected-btn' : 'unselected-btn' }}">Main Dishes</button>
        <button wire:click="filterCategory('Drings')"
            class="{{ $category === 'Drings' ? 'selected-btn' : 'unselected-btn' }}">Drinks</button>
        <button wire:click="filterCategory('Desserts')"
            class="{{ $category === 'Desserts' ? 'selected-btn' : 'unselected-btn' }}">Desserts</button>
    </div>


    {{-- <ul class="menu-list">
        @foreach ($menuItems as $item)
            <li>{{ $item->name }}</li>
            <li>{{ $item->description }}</li>
            <img src="{{ $item->imagePath }}" />
        @endforeach
    </ul> --}}
    <div class="container">

        <div class="row justify-content-center">

            @foreach ($menuItems as $item)
                <div class="col-lg-3 d-flex align-items-stretch">

                    <x-menu-item-card title="{{ $item->name }}" description="{{ $item->description }}"
                        imagePath="{{ $item->imagePath }}" price="{{ $item->price }}" />
                </div>
            @endforeach
        </div>
    </div>
    @vite(['resources/css/components/menu-filter.css'])

</div>
