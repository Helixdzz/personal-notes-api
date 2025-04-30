<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>

    <form action="{{ route('notes.web.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $note->title }}" required><br>
        <input type="text" name="author" value="{{ $note->author }}" required><br>
        <input type="datetime-local" name="date_time" value="{{ \Carbon\Carbon::parse($note->date_time)->format('Y-m-d\TH:i') }}" required><br>
        <textarea name="body" required>{{ $note->body }}</textarea><br>
        <input type="text" name="classification" value="{{ $note->classification }}" required><br>
        <button type="submit">Update Note</button>
    </form>
</body>
</html>
