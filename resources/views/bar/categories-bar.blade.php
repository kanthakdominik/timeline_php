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
                            <div class="mt-2 d-flex flex-column align-items-center">
                                <button class="btn btn-sm btn-outline-primary change-name-btn mb-2" type="button" data-category-id="{{ $category->id }}">Ustaw nazwę</button>
                                <button class="btn btn-sm btn-outline-secondary change-color-btn mb-2" type="button" data-category-id="{{ $category->id }}">Ustaw kolor</button>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="delete-category-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger delete-category-btn" type="submit" data-category-id="{{ $category->id }}">Usuń kategorię</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                @endforeach
            </div>
            <div class="d-flex">               
                <button id="print-view-btn" class="btn btn-sm btn-outline-secondary mx-1">Widok wydruku</button>
            </div>
        </div>
        @if ($errors->has('category'))
            <div class="alert alert-danger mt-3">
                {{ $errors->first('category') }}
            </div>
        @endif
    </div>
</div>