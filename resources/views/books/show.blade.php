<x-app-layout>
<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<p>{{ \Illuminate\Support\Facades\Storage::url($singleBook->image_path) }}</p>

<form action="{{route('books.destroy', $singleBook)}}" method="POST">
    @csrf
    @method('delete')
    <button style="color:darkred;">Delete</button> 
</form>
</x-app-layout>