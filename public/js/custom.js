document.addEventListener('DOMContentLoaded', function () {
    function openEditModal(eventId) {
        const event = events.find(event => event.id === eventId);

        if (!event) {
            console.error('Event not found');
            return;
        }

        const form = document.getElementById('editEventForm');
        form.action = `/events/${eventId}`;

        document.getElementById('eventId').value = event.id;
        document.getElementById('eventName').value = event.name;
        document.getElementById('eventDescription').value = event.description;
        document.getElementById('eventStartDate').value = event.start_date;
        document.getElementById('eventEndDate').value = event.end_date;
        document.getElementById('eventCategory').value = event.category_id;

        const editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();
    }
    window.openEditModal = openEditModal;

    if (document.querySelector('.modal.show')) {
        const addEventModal = new bootstrap.Modal(document.getElementById('addEventModal'));
        addEventModal.show();
    }
});

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
                activeCategoryId = null;
                this.classList.remove('active');
                eventItems.forEach(item => item.style.display = 'block');
            } else {
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