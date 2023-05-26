@extends('layouts.app_original')
@section('header')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset("css/profile.css") }}">
  <title>マイページ</title>
</head>
<body>
  <main>
    <div class="profile">
      <div class="profile-1">
        <a href="{{ route('showProfile', Auth::user()->id )}}"><img src="{{ asset('storage/images/'.$user->avatar) }}" alt=""></a>
      </div>
      <div class="profile-2">
        <p>{{ Auth::user()->name }}</p>
        <p >{{  Auth::user()->email  }}</p>
      </div>
    </div>

    <div class="function">
      <p>todoリスト期限順に並び替え</p>
      <p>ブックマーク</p>
    </div>

    {{-- <div class="chunks">
  @foreach($tasks->chunk(3) as $chunk)
      <div class="chunk">
        @foreach($chunks as $task)
        <div class="show-tasks">
          <div>{{ $task->title }}</div>
          <div>{{ $task->contents }}</div>
        </div>
        @endforeach
      </div>
      @endforeach
    </div> --}}

    <div class="chunks">
      <div class="chunk">
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
      </div>

      <div class="chunk">
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
        <div class="task">
          <div class="title">title</div>
          <div class="content">content</div>
        </div>
      </div>
    </div>
  </main>
</body>
@endsection