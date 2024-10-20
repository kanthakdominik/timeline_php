function openEditModal(eventId) {
    // Fetch event data and populate the form
    fetch(`/events/${eventId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('eventId').value = data.id;
            document.getElementById('eventName').value = data.name;
            document.getElementById('eventDescription').value = data.description;
            document.getElementById('eventStartDate').value = data.start_date;
            document.getElementById('eventEndDate').value = data.end_date;
            document.getElementById('eventCategory').value = event.category_id;
            document.getElementById('editEventForm').action = `/events/${data.id}`;
            new bootstrap.Modal(document.getElementById('editModal')).show();
        });
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.card').forEach(function(card) {
        card.addEventListener('click', function() {
            const elementsToToggle = card.querySelectorAll('.element-hidden');
            elementsToToggle.forEach(function(element) {
                element.style.display = element.style.display === 'none' ? 'block' : 'none';
            });

            const elementsToToggle2 = card.querySelectorAll('.click-me');
            elementsToToggle2.forEach(function(element) {
                element.style.display = element.style.display === 'block' ? 'none' : 'block';
            });
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const eventItems = document.querySelectorAll('.event-item');
    let activeCategoryId = null;

    categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-category-id');

            if (activeCategoryId === categoryId) {
                // Reset filter
                activeCategoryId = null;
                this.classList.remove('active');
                eventItems.forEach(item => item.style.display = 'block');
            } else {
                // Apply filter
                activeCategoryId = categoryId;
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                eventItems.forEach(item => {
                    if (item.getAttribute('data-category-id') === categoryId) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });
    });
});