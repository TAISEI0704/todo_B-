<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/edit.css") }}">
    <title>Document</title>
</head>
<body>
    <div class="header-left">
        <img class="logo" src="./logo.png" alt="">
    </div>
    <div  class="header-right">
        <ul class="nav">
            <li><a href="#">編集</a></li>
        </ul>
    </div>
    </header>
    <div class="form">
        <form  method="POST">
            @csrf
            <div class="form-group">
                <label>日付</label>
                <input type="date" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>共有先</label>
                <input type="text" class="form-control" value="" name="title">
            </div>
            <div class="form-content">
                <label>タスク内容</label>
                <textarea class="form-control" rows="5" name="body"></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">登録する</button>
        </form>
    </div>
</div>

</body>
</html>
