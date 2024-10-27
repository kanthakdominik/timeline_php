<div class="modal fade @if ($errors->hasBag('editEvent')) show @endif" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true" @if ($errors->hasBag('editEvent')) style="display: block;" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edytuj Wydarzenie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editEventForm" method="POST" action="{{ route('events.update', ['event' => 0]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="eventId">
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Nazwa <span class="required-asterisk">*</span></label>
                        <input type="text" class="form-control" id="eventName" name="name" value="{{ old('name') }}" required>
                        @error('name', 'editEvent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Opis</label>
                        <textarea class="form-control" id="eventDescription" name="description" rows="3">{{ old('description') }}</textarea>
                        @error('description', 'editEvent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eventStartDate" class="form-label">Data rozpoczęcia <span class="required-asterisk">*</span></label>
                        <input type="date" class="form-control" id="eventStartDate" name="start_date" value="{{ old('start_date') }}" required>
                        @error('start_date', 'editEvent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eventEndDate" class="form-label">Data zakończenia <span class="required-asterisk">*</span></label>
                        <input type="date" class="form-control" id="eventEndDate" name="end_date" value="{{ old('end_date') }}" required>
                        @error('end_date', 'editEvent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eventImage" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="eventImage" name="image">
                        @error('image', 'editEvent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eventCategory" class="form-label">Kategoria <span class="required-asterisk">*</span></label>
                        <select class="form-control" id="eventCategory" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                </form>
            </div>
        </div>
    </div>
</div>