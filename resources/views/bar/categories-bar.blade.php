<div class="row mb-4 no-print" id="categories-bar">
    <div class="col-md-12">
        <div class="filter-bar bar-properties d-flex justify-content-between align-items-center p-3 rounded shadow-sm">
            <div class="d-flex">
                <button id="toggle-cards-btn" class="btn btn-sm btn-outline-primary mx-1">Rozwiń wszystkie</button>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-grow-1 mx-3">
                @foreach($categories as $category)
                    <div class="category-item mx-2 text-center">
                        <button class="btn category-btn" type="button" data-category-id="{{ $category->id }}" style="background-color: {{ $category->color }}; color: #fff;">
                            {{ $category->name }}
                        </button>
                        @auth
                            <div class="mt-2 d-flex justify-content-center">
                                <button class="btn btn-sm btn-outline-primary change-name-btn mx-1" type="button" data-category-id="{{ $category->id }}">Ustaw nazwę</button>
                                <button class="btn btn-sm btn-outline-secondary change-color-btn mx-1" type="button" data-category-id="{{ $category->id }}">Ustaw kolor</button>
                            </div>
                        @endauth
                    </div>
                @endforeach
            </div>
            <div class="d-flex">               
                <button id="print-view-btn" class="btn btn-sm btn-outline-secondary mx-1">Widok wydruku</button>
            </div>
        </div>
    </div>
</div>