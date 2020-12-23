<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Books</title>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Add New Books</h2>
            <form action="{{route('add-books-submit')}}" method="post" class="add-books-form">
                @csrf
                <input type="text" name="book_name">
                <input type="text" name="book_type">
                <input type="text" name="book_link">

                <input type="submit" value="Create">
            </form>
        </div>

    </div>

</body>
</html>
