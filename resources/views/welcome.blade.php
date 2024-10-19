<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <section style="background-color: #F0F2F5;">
    <div class="container py-5">
      <div class="main-timeline-2">
        @foreach($events as $event)
          <div class="timeline-2 {{ $loop->index % 2 == 0 ? 'left-2' : 'right-2' }}">
            <div>
              <div class="card" style="background-color: #8fb398;">
                <img src="data:image/png;base64,{{ $event->image }}" class="card-img-top element-hidden" alt="{{ $event->name }} Logo">
                <div class="card-body p-4">
                  <h4 class="fw-bold mb-4">{{ $event->name }}</h4>
                  <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> {{ $event->start_date }} - {{ $event->end_date }}</p>
                  <p class="mb-0 element-hidden">{{ $event->description }}</p>
                </div>
              </div>
              <button class="btn btn-primary mt-3" onclick="openEditModal({{ $event->id }})">Edit</button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editEventForm" method="POST" action="{{ route('events.update', ['event' => 0]) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="eventId">
            <div class="mb-3">
              <label for="eventName" class="form-label">Event Name</label>
              <input type="text" class="form-control" id="eventName" name="name" required>
            </div>
            <div class="mb-3">
              <label for="eventDescription" class="form-label">Description</label>
              <textarea class="form-control" id="eventDescription" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="eventStartDate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="eventStartDate" name="start_date" required>
            </div>
            <div class="mb-3">
              <label for="eventEndDate" class="form-label">End Date</label>
              <input type="date" class="form-control" id="eventEndDate" name="end_date" required>
            </div>
            <div class="mb-3">
              <label for="eventImage" class="form-label">Event Image</label>
              <input type="file" class="form-control" id="eventImage" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>