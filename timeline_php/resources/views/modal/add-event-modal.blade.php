<div class="modal fade @if ($errors->hasBag('addEvent')) show @endif" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true" @if ($errors->hasBag('addEvent')) style="display: block;" @endif>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEventModalLabel">Dodaj nowe wydarzenie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addEventForm" method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="newEventName" class="form-label">Nazwa <span class="required-asterisk">*</span></label>
            <input type="text" class="form-control" id="newEventName" name="name" value="{{ old('name') }}" required>
            @error('name', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="newEventDescription" class="form-label">Opis</label>
            <textarea class="form-control" id="newEventDescription" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="newEventStartDate" class="form-label">Data rozpoczęcia <span class="required-asterisk">*</span></label>
            <input type="date" class="form-control" id="newEventStartDate" name="start_date" value="{{ old('start_date') }}" required>
            @error('start_date', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="newEventEndDate" class="form-label">Data zakończenia <span class="required-asterisk">*</span></label>
            <input type="date" class="form-control" id="newEventEndDate" name="end_date" value="{{ old('end_date') }}" required>
            @error('end_date', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="newEventImage" class="form-label">Logo</label>
            <input type="file" class="form-control" id="newEventImage" name="image">
            @error('image', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="newEventCategory" class="form-label">Kategoria <span class="required-asterisk">*</span></label>
            <select class="form-control" id="newEventCategory" name="category_id" required>
              @foreach($categories as $category)
                <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
              @endforeach
            </select>
            @error('category_id', 'addEvent')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
      </div>
    </div>
  </div>
</div>