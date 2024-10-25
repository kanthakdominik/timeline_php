<div class="container py-5 print-view" id="event-cards">
    <div class="main-timeline-2">
        @foreach($events as $event)
            <div class="timeline-2 {{ $loop->index % 2 == 0 ? 'left-2' : 'right-2' }} event-item"
                data-category-id="{{ $event->category_id }}">
                <div>
                    <div class="card card-no-break" style="background-color: {{$event->category->color}};">
                        <img src="data:image/png;base64,{{ $event->image }}" class="card-img-top element-hidden"
                            alt="{{ $event->name }} Logo">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">{{ $event->name }}</h4>
                            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>
                                {{ $event->start_date }} -
                                {{ $event->end_date }}
                            </p>
                            <p class="mb-0 element-hidden">{{ $event->description }}</p>
                        </div>
                        <span class="click-me no-print" id="toggleLabel">Rozwiń</span>
                    </div>
                    @auth
                        <div class="d-flex justify-content-end" id="events-cards-buttons">
                            <button class="btn btn-outline-primary mt-3 no-print" type="button" onclick="openEditModal({{ $event->id }})">Edytuj</button>
                            <form class="d-inline ms-3 no-print" action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline ms-2" onsubmit="return confirm('Na pewno chcesz usunąć to wydarzenie?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger mt-3">Usuń</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
</div>