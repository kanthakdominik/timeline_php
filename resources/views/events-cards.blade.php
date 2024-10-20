<div class="container py-5">
    <div class="main-timeline-2">
        @foreach($events as $event)
            <div class="timeline-2 {{ $loop->index % 2 == 0 ? 'left-2' : 'right-2' }} event-item"
                data-category-id="{{ $event->category_id }}">
                <div>
                    <div class="card" style="background-color: {{$event->category->color}};">
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
                        <span class="click-me">Rozwiń</span>
                    </div>
                    <button class="btn btn-outline-primary mt-3" onclick="openEditModal({{ $event->id }})">Edytuj</button>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger mt-3">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>