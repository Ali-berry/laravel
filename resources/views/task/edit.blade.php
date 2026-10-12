<h1>Edit Task</h1>

<form action="/task/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $task->name }}">
    <input type="number" name="price" step="0.01" value="{{ $task->price }}">
    <button type="submit">Update</button>
</form>