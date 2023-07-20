<h2>Edit Book</h2>

<form action="{{route("book.update", $book->id)}}" method="POST">
    @csrf
    @method('put')

    <input name='title' value='{{$book->title}}'/>    
    <input type="text" name="author" id="" value='{{$book->author}}'>
    <input type="integer" name="price" id="" value='{{$book->price}}'>
    <input type="date" name="publication_date" id="" value='{{$book->publication_date}}'>
    <textarea name='description' id="body" value='{{$book->description}}'>{{$book->description}}</textarea>
    

    <select name="genre" id="">
        <option value="sci_fi">sci_fi</option>
        <option value="selfhelp">selfhelp</option>
        <option value="adventure">adventure</option>

    </select>

    <button type="submit">Update</button>

</form>