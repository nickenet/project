
<div class="container">
    <h2>Basic Table3</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>place</th>
        </tr>
        </thead>
        <tbody>
@foreach($tasks3 as $task3)
            <tr>
                <td>{{ $task3->id }}</td>
                <td>{{ $task3->name }}</td>
                <td>{{ $task3->place }}</td>
            </tr>


@endforeach
            </tbody>
    </table>
</div>
