<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('/css/delete-books-style.css')}}">

    <title>Delete Book</title>
</head>
<body>

    <div class="container">

    <h4>Delete</h4>
    <h2>Book Name: {{$book->book_name}}</h2>

    <div class="button-container">
        <div class="cancel-button">
            <a href="{{route('admin-manage-books-view')}}" class="btn btn-primary">Cancel</a>

        </div>
    <a class="btn btn-danger" onclick="event.preventDefault();

                                            if(confirm('Are you sure you want to delete this Book?')){
                                            document.getElementById('form-destroy-{{$book->id}}').submit()}">Delete</a>

        <form style="display:none" id="{{'form-destroy-'.$book->id}}" method="post" action="{{route('book.delete.submit' ,$book->id)}}">
            @csrf
            @method('delete')
        </form>

    </div>
    </div>

</body>
</html>
