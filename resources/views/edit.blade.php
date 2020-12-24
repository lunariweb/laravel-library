<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books</title>
</head>
<body>

    <div class="form-container">
        <form action="{{route('book.update', $book->id)}}" method="post">
            @csrf
            @method('patch')

            <input type="text" name="book_name" value="{{$book->book_name}}">
            <input type="text" name="book_type" value="{{$book->book_type}}">
            <input type="text" name="book_link" value="{{$book->book_link}}">
            <input type="submit" value="Update">
        </form>
    </div>

</body>
</html>
