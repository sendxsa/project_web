<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PBG JAKARTA</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/checkBox.css') }}" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper d-flex align-items-stretch">
    <nav class="sidebar">
      <h5 class="hide" style="display: flex; align-items: center; justify-content: center;" id="admin">ADMIN</h5>
      <div class="sidebar-top">
        <span class="shrink-btn">
          <i class='bi bi-chevron-left'></i>
        </span>
      </div>
      <hr class="my-2">
      <div class="sidebar-links">
        <ul>
          <div class="active-tab"></div>
          <li class="tooltip-element" data-tooltip="0">
            <a href="/dashboard" data-active="0">
              <div class="icon">
                <i class='bi bi-speedometer2'></i>
                <i class='bi bi-speedometer2'></i>
              </div>
              <span class="link hide">Dashboard</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="1">
            <a href="/isi-form" data-active="1">
              <div class="icon">
                <i class='bi bi-pencil-square'></i>
                <i class='bi bi-pencil-square'></i>
              </div>
              <span class="link hide">Isi Form</span>
            </a>
          </li>
          <div class="tooltip">
            <span class="show">Dashboard</span>
            <span>Isi Form</span>
          </div>
        </ul>
      </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('javascript/pilihan.js') }}"></script>
    {{-- <script src="{{ asset('javascript/noPbg.js') }}"></script> --}}
    <div class="loading-overlay">
      <div class="loading-spinner"></div>
    </div>
    <div id="centered-content" class="p-4 p-md-5 pt-5">
      @yield('content')
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('javascript/noPbg.js') }}"></script>
  <script src="{{ asset('javascript/luasLahan.js') }}"></script>
</body>
</html>