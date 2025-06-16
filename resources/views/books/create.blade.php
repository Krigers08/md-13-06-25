<x-app-layout>
<h1>New book</h1>
@foreach ($errors->all() as $error)
    <li style="color:darkred;">{{ $error }}</li>
@endforeach
<form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="title goes here" name="title">
    <input type="text" placeholder="author goes here" name="author">
    <input type="date" placeholder="date goes here" name="released_at">
    <input type="file" name="image">
    <input type="submit" value="Create">
</form>
<br>
<img src="https://preview.redd.it/yhbuz0i1o0b91.png?width=1080&crop=smart&auto=webp&s=15ea504dd932150b601a197de9232d687a24584f"
style="width: 550px; height: 200px; display: block; margin: 0 auto; border-radius: 80px;">
</x-app-layout>