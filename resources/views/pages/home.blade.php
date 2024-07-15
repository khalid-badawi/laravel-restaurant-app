@extends('layouts.app')

@section('content')
    <div class="bg-image">
        <div class="content">
            <div class="main-text">Best food for <br> Your taste</div>
            <h4 class="secondary-text mb-4">discover delectable cuisine and unforgettable moments <br> in our welcoming,
                culinary
                haven.
            </h4>

            <x-custom-button type="secondary">Book a table</x-custom-button>
            <x-custom-button>Explore Menu</x-custom-button>
        </div>
    </div>

    <div class="container my-5" style="text-align:center;">
        <div class="header-text my-5">Browse Our Menu</div>
        <div class="row">
            <div class="col">
                <x-category-card imageUrl="images/a.png" title="Breakfast"
                    body="Start your day with our delicious breakfast options." />


            </div>
            <div class="col">
                <x-category-card imageUrl="images/b.png" title="Main Dishes"
                    body="Indulge in our selection of mouth-watering main dishes." />
            </div>
            <div class="col">
                <x-category-card imageUrl="images/c.png" title="Drinks"
                    body="Quench your thirst with our selection of refreshing drinks. Choose from a variety of juices." />

            </div>
            <div class="col">
                <x-category-card imageUrl="images/d.png" title="Desserts"
                    body="Treat yourself to our delectable desserts. Enjoy a selection of cakes, pastries, ice creams." />
            </div>
        </div>
    </div>
    <x-ratings />
@endsection

@vite(['resources/css/pages/home.css'])
