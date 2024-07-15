@extends('layouts.app')

@section('content')
    <div class="container justify-content-center custom-container">
        <div style="text-align: center;">
            <div class="main-text">Our Menu</div>
            <p>Explore our diverse menu featuring fresh, expertly prepared dishes designed to delight every palate. From
                timeless classics to innovative<br> flavors, each item promises a memorable dining experience.</p>
        </div>
        <livewire:menu-filter />
    </div>
@endsection
@vite(['resources/css/pages/menu.css'])
