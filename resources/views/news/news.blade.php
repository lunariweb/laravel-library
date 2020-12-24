<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/news-page-style.css')}}">
    <title>News</title>
</head>
<body>

    <div class="total">
        <div class="news-topic">
            <h1>{{$news->headline}}</h1>
        </div>

        <div class="news-source">
            <h3>Source: {{$news->source}}</h3>
        </div>

        <div class="news-author">
            <p>Author: {{$news->author}}, On: {{$news->created_at}}</p>
        </div>
        <hr>
        <div class="news-image">
            <img src="{{asset('/storage/images/' . $news->image)}}" width="1000">
        </div>

        <hr>

        <div class="news-description">
            <p>{{$news->description}}</p>
        </div>
    </div>

</body>
</html>
