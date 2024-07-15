<div class="card" style="width: 20rem;">
    <img src="{{ $imagePath }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p style="color:rgb(177, 170, 170); font-weight:500; font-size:15px">{{ date('F j, Y', strtotime($postTime)) }}
        </p>
        <h5 class="card-title">{{ $title }}</h5>
        <a href="#" class="stretched-link"></a>

    </div>
</div>
