<x-app-layout>
    <p>
        title:{{$book->title}}
    </p>

    <p>
        author:{{$book->author}}
    </p>

    <p>
        price:{{$book->price}}$
    </p>

    <p>
        publication_date:{{$book->publication_date}}
    </p>

    <p>
        genre:{{$book->genre}}
    </p>

    <p>
        description:{{$book->description}}
    </p>


    <a href="{{route("book.edit", $book->id)}}">Edit</a>
  

    <form action="{{route("book.delete", $book->id)}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
    </form>
     

</x-app-layout>