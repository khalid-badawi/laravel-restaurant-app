<div class="card pt-3 d-flex flex-column" style="width: 18rem; height: 330px;">
    <img src="{{ asset($imageUrl) }}" class="card-img-top mx-auto" style="width: 6rem;" alt="...">
    <div class="card-body d-flex flex-column justify-content-between">
        <div>
            <h5 class="card-title mt-3">{{ $title }}</h5>
            <p class="card-text mt-3">{{ $body }}</p>
        </div>
        <a href="#" class="link-danger" style="text-decoration:none; color:rgb(207, 90, 90);">Explore Menu</a>
    </div>
</div>
