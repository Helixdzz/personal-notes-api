<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
</head>
<body>
    <h1>Notes</h1>

    <a href="{{ route('notes.web.create') }}">Create New Note</a>

    <ul>
        @foreach($notes as $note)
            <li>
                <strong>{{ $note->title }}</strong> by {{ $note->author }} 
                <a href="{{ route('notes.web.edit', $note) }}">Edit</a>
                <form action="{{ route('notes.web.destroy', $note) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <p>{{ $note->body }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
