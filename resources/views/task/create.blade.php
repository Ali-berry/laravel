<h1>Add Task</h1>

<form action="/task" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Task name">
    <input type="number" name="price" step="0.01" placeholder="Price">
    <button type="submit">Add</button>
</form>
