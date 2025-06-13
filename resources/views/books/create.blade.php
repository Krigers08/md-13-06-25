<h1>New book</h1>
@foreach ($errors->all() as $error)
    <li style="color:darkred;">{{ $error }}</li>
@endforeach
<form action="{{route('books.store')}}" method="post">
    @csrf
    <input type="text" placeholder="title goes here" name="title">
    <input type="text" placeholder="author goes here" name="author">
    <input type="date" placeholder="date goes here" name="released_at">
    <input type="submit" value="Create">
</form>