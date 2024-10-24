<nav class="navbar navbar-expand-lg bar-properties">
  <div class="container-fluid">
    @auth
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <form class="d-flex">
          <button class="btn btn-outline-success btn-lg" id="addNewEventButton" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal">Dodaj nowe wydarzenie</button>
        </form>
      </div>
    @endauth
  </div>
</nav>