@props(['title', 'description', 'name'])


<div class="card p-1 pb-3" style="width: 22rem; min-height:20rem;">

    <div class="card-body">
        <h5 class="card-title mb-4">"{{ $title }}"</h5>
        <p class="card-text">{{ $description }}</p>
    </div>

    <h6 style="margin-left: 1rem">By: {{ $name }}</h6>
</div>

@vite(['resources/css/components/rating-card.css'])
