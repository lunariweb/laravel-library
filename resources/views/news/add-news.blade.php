<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add News</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-xl-5">Add News</h1>
        <a href="" class="btn btn-primary px-3 mb-2">Back</a>
        <div class="form-container border p-5">
            {{--  --}}
         @if(session()->has('message'))
         <div class="alert alert-success">{{session()->get('message')}}</div>

         @elseif(session()->has('error'))
         <div class="align-center alert alert-danger">{{session()->get('message')}}</div>

         @endif
          {{--  --}}
            <form action="{{route('admin-add-news-submit')}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf

                <label>News Headline: </label>
                <input name="headline" type="text" class="form-control mb-2" placeholder="Enter News Headline">

                <label>News Author: </label>
                <input name="author" type="text" class="form-control mb-2" placeholder="Enter the author">

                <label>News Source: </label>
                <input name="source" type="text" class="form-control mb-2" placeholder="Enter the source">

                <label>Images: </label>
                <input name="image" type="file" class="form-control">

                <label>News Description: </label>
                <textarea name="description" cols="30" rows="10" wrap="hard" class="form-control mb-4 overflow-auto" placeholder="Describe the news"></textarea>

                <input type="submit" class="btn btn-success px-5" value="Submit News">

            </form>
        </div>
    </div>
</body>
</html>
