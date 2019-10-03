<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <title>{{$current_page}}</title>
  </head>
  <body>
      <div class="container">
          @component('components.navbar', ["current_page" => $current_page])              
          @endcomponent
          <main role="main">
              @hasSection('body')
              @yield('body')
              @endif
          </main>
      </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
  </body>
</html>