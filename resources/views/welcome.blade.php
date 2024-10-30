<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PGE Narodowy - Wydarzenia 2024</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="icon" type="image/png" href="{{ asset('logo.svg') }}">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <section class="main-container">
  
    @include('bar.main-bar')
    @include('bar.setting-bar')
    @include('bar.categories-bar')

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show no-print" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @include('events-cards')
  </section>

  @include('modal.edit-event-modal')
  @include('modal.add-event-modal')
  @include('modal.change-category-color-modal')
  @include('modal.change-category-name-modal')
  @include('modal.add-category-modal')

  <script>
    const events = @json($events);
  </script>
</body>

</html>