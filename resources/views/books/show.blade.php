<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<a href="{{route('books.index')}}">All books</a>
<form action="{{route('books.destroy',['id' => $singleBook->id])}}" method="POST">
    @csrf
    @method('delete')
    <button style="color:darkred;">Delete</button> 
</form>