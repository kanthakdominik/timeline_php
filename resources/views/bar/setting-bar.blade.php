<nav class="navbar navbar-expand-lg bar-properties no-print" id="settings-bar">
  <div class="container-fluid">
    @auth
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <form class="d-flex">
          <button class="btn btn-outline-success btn-lg" id="addNewEventButton" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal">Dodaj nowe wydarzenie</button>
          <button class="btn btn-outline-primary btn-lg mx-2" id="addNewCategoryButton" type="button" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Dodaj nową kategorię</button>
        </form>
      </div>
    @endauth
  </div>
</nav>