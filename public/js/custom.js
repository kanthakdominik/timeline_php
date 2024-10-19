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
        });
    });
});