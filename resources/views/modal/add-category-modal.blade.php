<div class="modal fade" @if ($errors->hasBag('addCategory')) show @endif" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true" @if ($errors->hasBag('addCategory')) style="display: block;" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Dodaj nową kategorię</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Nazwa kategorii</label>
                        <input type="text" class="form-control" id="categoryName" name="name" required>
                        @error('name', 'addCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="categoryColor" class="form-label">Kolor kategorii</label>
                        <input type="color" class="form-control" id="categoryColor" name="color">
                        @error('name', 'addCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </form>
            </div>
        </div>
    </div>
</div>