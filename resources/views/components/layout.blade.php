<!DOCTYPE html>
<html>
<head>
    <title>Book App</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin:0;
            font-family: 'Merriweather', serif;
        }
    .button-link {
    display: inline-block;
    padding: 8px 16px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    }

    .button-link:hover {
    background-color: #218838;
    }

    .container {
        max-width: 900px;      /* Limits width on large screens */
        margin: 40px auto;     /* Centers horizontally + vertical spacing */
        padding: 20px;         /* Space inside the box */
        border: 1px solid #ccc; /* Light border */
        border-radius: 8px;    /* Rounded corners */
        background-color: #fafafa; /* Slight background color */
        box-shadow: 0 2px 8px rgba(0,0,0,0.1); /* Subtle shadow */
    }
</style>
</head>
<body>

    <header style="background: #333; padding: 10px; ">
    <nav style="max-width: 100%; margin: 0 auto; display: flex; gap: 70px; justify-content: center; text-align: center;">
        <a href="{{ route('books.index') }}" style="color: white; text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">Home</a>
        <a href="{{ route('books.create') }}" style="color: white; text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">Create New</a>
    </nav>
    </header>


    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

</body>
</html>