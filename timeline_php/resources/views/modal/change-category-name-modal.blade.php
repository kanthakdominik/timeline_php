<div class="modal fade" id="changeCategoryNameModal" tabindex="-1" aria-labelledby="changeCategoryNameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeCategoryNameModalLabel">Kategoria - zmień nazwę</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="changeCategoryNameForm" method="POST" action="{{ route('categories.updateName') }}">
          @csrf
          @method('PUT')
          <input type="hidden" name="category_id" id="categoryId">
          <div class="mb-3">
            <label for="categoryName" class="form-label">Podaj nową nazwę</label>
            <input type="text" class="form-control" id="categoryName" name="name" required>
          </div>
          <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
      </div>
    </div>
  </div>
</div>