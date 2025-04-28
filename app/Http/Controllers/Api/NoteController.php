<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
class NoteController extends Controller
{
public function index()
{
return Note::all();
}
public function store(Request $request)
{
$note = Note::create($request->all());
return response()->json($note, 201);
}
public function show(Note $note)
{
return $note;
}
public function update(Request $request, Note $note)
{
$note->update($request->all());
return response()->json($note, 200);
}
public function destroy(Note $note)
{
$note->delete();
return response()->json(null, 204);
}
}