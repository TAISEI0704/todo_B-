<div class="header-left">
            <img class="logo" src="./logo.png" alt="">
        </div>
        <div  class="header-right">
            <ul class="nav">
                <li><a href="#">name</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form  method="POST">
                <div class="form-group">
                @csrf
                    <label>共有先</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                </div>
                <div class="form-group">
                    <label>タスク内容</label>
                    <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
                    <p>エラーメッセージが入ります</p>
                </div>

                <button type="submit" class="btn btn-primary">登録する</button>
            </form>
        </div>
    </div>
</div>
@endsection