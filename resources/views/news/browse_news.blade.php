<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Browse News</title>
</head>
<body>
    <div class="all-news-holder">
        <a href="/" class="btn btn-primary ml-3 mt-3 px-4">Back</a>
        <div class="news-row-1">
            <div class="news-1">
                <h3>News 1 headline</h3>
                <h2>author</h2>

                <a href="/browsenews/1/news" class="btn btn-success">View</a>


            </div>
        </div>
    </div>

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection
</body>
</html>
