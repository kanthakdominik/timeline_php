<div class="row mb-4">
    <div class="col-md-12">
        <div class="filter-bar d-flex justify-content-center align-items-center p-3 bg-light rounded shadow-sm">
            @foreach($categories as $category)
                <button class="btn mx-2 category-btn" type="button" data-category-id="{{ $category->id }}" style="background-color: {{ $category->color }}; color: #fff;">
                {{ $category->name }}
                </button>
            @endforeach
        </div>
    </div>
</div>