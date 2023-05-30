<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <div class="header-left">
      <h1>ToDo</h1>
    </div>
    <div class="header-right">
    <div class="dropdown nav">
      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      {{ Auth::user()->name }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="{{ route('welcome', ['user_id' => Auth::user()->id]) }}" onclick="event.preventDefault();
          document.getElementById('go-welcome').submit();">{{ __('トップページ') }}</a></li>
        <form id="go-welcome" action="{{ route('welcome', ['user_id' => Auth::user()->id]) }}" method="GET" class="d-none">
          @csrf
        </form>      
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        <li><a class="dropdown-item" href="{{ route('tasks.index', Auth::user()->id )}}" onclick="event.preventDefault();
          document.getElementById('go-index').submit();">{{ __('タスク一覧') }}</a></li>
        <form id="go-index" action="{{ route('tasks.index', Auth::user()->id )}}" method="GET" class="d-none">
          @csrf
        </form>
        <li><a class="dropdown-item" href="{{ route('indexBookmark', Auth::user()->id )}}" onclick="event.preventDefault();
          document.getElementById('go-bookmark').submit();">{{ __('ブックマーク') }}</a></li>
        <form id="go-bookmark" action="{{ route('indexBookmark', Auth::user()->id )}}" method="GET" class="d-none">
          @csrf
        </form>
        <li><a class="dropdown-item" href="{{ route('showProfile', Auth::user()->id )}}" onclick="event.preventDefault();
          document.getElementById('go-profile').submit();">{{ __('マイページ') }}</a></li>
        <form id="go-profile" action="{{ route('showProfile', Auth::user()->id )}}" method="GET" class="d-none">
          @csrf
        </form>
      </ul>
    </div>
    </div>
  </header>
  @yield('content')
  <footer>
    Copyright &copy; Bteam Inc.
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>
</html>
