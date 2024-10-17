<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <style>
    /* The actual timeline (the vertical ruler) */
    .main-timeline-2 {
      position: relative;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline-2::after {
      content: "";
      position: absolute;
      width: 3px;
      background-color: #26c6da;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }

    /* Container around content */
    .timeline-2 {
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    /* The circles on the timeline */
    .timeline-2::after {
      content: "";
      position: absolute;
      width: 25px;
      height: 25px;
      right: -11px;
      background-color: #26c6da;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
    }

    /* Place the container to the left */
    .left-2 {
      padding: 0px 40px 20px 0px;
      left: 0;
    }

    /* Place the container to the right */
    .right-2 {
      padding: 0px 0px 20px 40px;
      left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left-2::before {
      content: " ";
      position: absolute;
      top: 18px;
      z-index: 1;
      right: 30px;
      border: medium solid white;
      border-width: 10px 0 10px 10px;
      border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right container (pointing left) */
    .right-2::before {
      content: " ";
      position: absolute;
      top: 18px;
      z-index: 1;
      left: 30px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent white transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right-2::after {
      left: -14px;
    }

    .element-hidden {
        display: none;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

      /* Place the timelime to the left */
      .main-timeline-2::after {
        left: 31px;
      }

      /* Full-width containers */
      .timeline-2 {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      /* Make sure that all arrows are pointing leftwards */
      .timeline-2::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Make sure all circles are at the same spot */
      .left-2::after,
      .right-2::after {
        left: 18px;
      }

      .left-2::before {
        right: auto;
      }

      /* Make all right containers behave like the left ones */
      .right-2 {
        left: 0%;
      }
    }
  </style>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <section style="background-color: #F0F2F5;">
    <div class="container py-5">
      <div class="main-timeline-2">
        @foreach($events as $event)
          <div class="timeline-2 {{ $loop->index % 2 == 0 ? 'left-2' : 'right-2' }}">
              <div class="card" >
                <img src="data:image/png;base64,{{ $event->image }}" class="card-img-top element-hidden" alt="{{ $event->name }} Logo">
                <div class="card-body p-4">
                  <h4 class="fw-bold mb-4">{{ $event->name }}</h4>
                  <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> {{ $event->start_date }} - {{ $event->end_date }}</p>
                  <p class="mb-0 element-hidden">{{ $event->description }}</p>
                </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <script>
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
    </script>
</body>

</html>