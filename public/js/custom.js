document.addEventListener('DOMContentLoaded', function () {

    // Toggle elements in the card
    document.querySelectorAll('.card').forEach(function (card) {
        card.addEventListener('click', function () {
            const elementsToToggle = card.querySelectorAll('.element-hidden');
            elementsToToggle.forEach(function (element) {
                element.style.display = element.style.display === 'none' ? 'block' : 'none';
            });

            const toggleLabel = card.querySelector('#toggleLabel');
            if (toggleLabel) {
                const isExpanded = elementsToToggle[0].style.display === 'block';
                toggleLabel.textContent = isExpanded ? '' : 'Rozwiń';
            }
        });
    });

    // Toggle all cards
    const toggleCardsBtn = document.getElementById('toggle-cards-btn');
    const eventCards = document.querySelectorAll('.card');
    let allHidden = true;

    toggleCardsBtn.addEventListener('click', function () {
        allHidden = !allHidden; 

        eventCards.forEach(card => {
            const elementsToToggle = card.querySelectorAll('.element-hidden');
            elementsToToggle.forEach(function (element) {
                element.style.display = allHidden ? 'none' : 'block';
            });

            const toggleLabel = card.querySelector('#toggleLabel');
            if (toggleLabel) {
                toggleLabel.textContent = allHidden ? 'Rozwiń' : '';
            }
        });

        toggleCardsBtn.textContent = allHidden ? 'Rozwiń wszystkie' : 'Zwiń wszystkie';
    });

    // Print button
    document.getElementById('print-view-btn').addEventListener('click', function () {
        eventCards.forEach(card => {
            const elementsToToggle = card.querySelectorAll('.element-hidden');
            elementsToToggle.forEach(function (element) {
                element.style.display = 'block';
            });
        });
        window.print();
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

    // Change category name modal
    const changeCategoryNameModal = new bootstrap.Modal(document.getElementById('changeCategoryNameModal'));
    document.querySelectorAll('.change-name-btn').forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-category-id');
            document.getElementById('categoryId').value = categoryId;
            changeCategoryNameModal.show();
        });
    });

    // Change category color modal
    const changeCategoryColorModal = new bootstrap.Modal(document.getElementById('changeCategoryColorModal'));
    document.querySelectorAll('.change-color-btn').forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-category-id');
            document.getElementById('colorCategoryId').value = categoryId;
            changeCategoryColorModal.show();
        });
    });

    // Delete category confirmation
    document.querySelectorAll('.delete-category-form').forEach(function(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (confirm('Czy na pewno chcesz usunąć kategorię?')) {
                form.submit();
            }
        });
    });

    // Add new category modal
    const addCategoryModal = new bootstrap.Modal(document.getElementById('addCategoryModal'));
    document.getElementById('addNewCategoryButton').addEventListener('click', function() {
        addCategoryModal.show();
    });    
});