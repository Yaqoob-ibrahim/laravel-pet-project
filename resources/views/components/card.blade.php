<div class="card p-2">
    <div class="icon rounded-circle d-flex justify-content-center align-items-center">
        <i class="{{ $iconClass }} text-white"></i>
    </div>
    <p class="card-text text-secondary">{{ $content }}</p>
    <div class="row pb-2">
        <div class="col-md-3">
            <div class="image">
                <img src="{{ $image }}" alt="">
            </div>
        </div>
        <div class="col-md-9">
            <div class="card-title">
                <p class="text-capitalize fw-bold fs-4 text-secondary">{{ $name }}</p>
                <p class="text-capitalize text-secondary">{{ $designation }}</p>
            </div>
        </div>
    </div>
</div>
