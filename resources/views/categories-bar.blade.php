<div class="row mb-4">
    <div class="col-md-12">
        <div class="filter-bar categories-bar d-flex justify-content-center align-items-center p-3 rounded shadow-sm">
            @foreach($categories as $category)
                <div class="category-item mx-2 text-center">
                    <button class="btn category-btn" type="button" data-category-id="{{ $category->id }}" style="background-color: {{ $category->color }}; color: #fff;">
                        {{ $category->name }}
                    </button>
                    <div class="mt-2 d-flex justify-content-center">
                        <button class="btn btn-sm btn-outline-primary change-name-btn mx-1" type="button" data-category-id="{{ $category->id }}">Ustaw nazwę</button>
                        <button class="btn btn-sm btn-outline-secondary change-color-btn mx-1" type="button" data-category-id="{{ $category->id }}">Ustaw kolor</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>