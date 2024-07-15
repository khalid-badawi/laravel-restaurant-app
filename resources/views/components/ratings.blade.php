<div class="container my-5 py-5" style="background-color:whitesmoke";>
    <div class="header-text mb-5 text-center">
        What Our Customers Say
    </div>

    <div class="container">
        <div class="row justify-content-center">

            @foreach ($reviews as $review)
                <div class="col-auto  d-flex align-items-stretch">

                    <x-rating-card title="{{ $review->title }}" description="{{ $review->description }}"
                        name="{{ $review->user->name }}" />
                </div>
            @endforeach
        </div>
    </div>
</div>
