<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include jQuery before jsTree -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
{{-- <script src=""></script> --}}
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  {{-- <script src="../js/app.js"></script> --}}
  <!-- Include jsTree CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @vite('resources/js/categorytree.js')
</head>
<body>
  <div class=''>
  <h1 class="text-2xl">
  Categories
  </h1>
    @yield('content')
    
  </div>
</body>
</html>