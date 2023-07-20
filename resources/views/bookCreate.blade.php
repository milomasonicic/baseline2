<x-app-layout>

    <form action="{{route("books.storeBook")}}" method="post">
        @csrf
        
        <input type="text" name="title">
        <input type="text" name="author">
        
        <input type="text" name="price">
        <input type="date" name="publication_date">
        
        <select name="genre" id="">
            <option value="sci_fi">sci_fi</option>
            <option value="selfhelp">selfhelp</option>
            <option value="adventure">adventure</option>
    
        </select>

        <textarea name="description" id="" cols="30" rows="10"></textarea>
        
        <button type="submit">Add</button>
        
        </form>


</x-app-layout>