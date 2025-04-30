<!DOCTYPE html>
<html>
<head>
    <title>Create Note</title>
</head>
<body>
    <h1>Create New Note</h1>

    <form action="{{ route('notes.web.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required><br>
        <input type="text" name="author" placeholder="Author" required><br>
        <input type="datetime-local" name="date_time" required><br>
        <textarea name="body" placeholder="Body" required></textarea><br>
        <input type="text" name="classification" placeholder="Classification" required><br>
        <button type="submit">Save Note</button>
    </form>
</body>
</html>
    