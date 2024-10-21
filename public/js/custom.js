document.addEventListener('DOMContentLoaded', function () {
    // Toggle elements in the card
    document.querySelectorAll('.card').forEach(function (card) {
        card.addEventListener('click', function () {
            const elementsToToggle = card.querySelectorAll('.element-hidden');
            elementsToToggle.forEach(function (element) {
                element.style.display = element.style.display === 'none' ? 'block' : 'none';
            });

            const elementsToToggle2 = card.querySelectorAll('.click-me');
            elementsToToggle2.forEach(function (element) {
                element.style.display = element.style.display === 'block' ? 'none' : 'block';
            });
        });
    });

    // Filter events by category
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

    // Edit event modal
    const editEventModal = new bootstrap.Modal(document.getElementById('editEventModal'));
    const addEventModal = new bootstrap.Modal(document.getElementById('addEventModal'));

    window.openEditModal = function (eventId) {
        fetch(`/events/${eventId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('eventId').value = data.id;
                document.getElementById('eventName').value = data.name;
                document.getElementById('eventDescription').value = data.description;
                document.getElementById('eventStartDate').value = data.start_date;
                document.getElementById('eventEndDate').value = data.end_date;
                document.getElementById('eventCategory').value = data.category_id;
                document.getElementById('editEventForm').action = `/events/${data.id}`;
                editEventModal.show();
            });
    };

    document.querySelectorAll('.btn-close').forEach(button => {
        button.addEventListener('click', function () {
            editEventModal.hide();
            addEventModal.hide();
        });
    });

    // Ensure only one modal is shown at a time
    if (document.querySelector('.modal.show')) {
        if (document.querySelector('#editEventModal.show')) {
            editEventModal.show();
        } else if (document.querySelector('#addEventModal.show')) {
            addEventModal.show();
        }
    }
});