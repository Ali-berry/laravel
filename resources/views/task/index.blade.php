<h1>{{ $Ali }}</h1>
<table border= "1">
<tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>Action</th>
    
</tr>

@foreach($tasks as $task )

<tr>
    <td>{{ $task-> id }}</td>
    <td>{{ $task-> name }}</td>
    <td>{{ $task-> price}}</td>
    <td><a href="/task/{{$task->id}}/edit">update</a>
    <form action="/task/{{$task->id}}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
    </td>
</tr>

@endforeach
</table>

<a href="/task/create" method='Post'>Add</a>