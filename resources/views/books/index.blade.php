<x-layout>
<h1>Books</h1>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->author}}</p>
            <div>
                <a href="{{ route('books.show', ['id' => $book]) }}">Show</a>
                <a href="{{ route('books.edit', ['id' => $book]) }}">Edit</a>
            </div>
        </li>
    @endforeach
</ul>
</x-layout>