<div class="modal fade" id="changeCategoryColorModal" tabindex="-1" aria-labelledby="changeCategoryColorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeCategoryColorModalLabel">Change Category Color</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="changeCategoryColorForm" method="POST" action="{{ route('categories.updateColor') }}">
          @csrf
          @method('PUT')
          <input type="hidden" name="category_id" id="colorCategoryId">
          <div class="mb-3">
            <label for="categoryColor" class="form-label">New Category Color</label>
            <input type="color" class="form-control" id="categoryColor" name="color" required>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>