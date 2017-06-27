<div class="container">
    <h2>Basic Table2</h2>
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
        @foreach($tasks2 as $task2)
            <tr>
                <td>{{ $task2->id }}</td>
                <td>{{ $task2->name }}</td>
                <td>{{ $task2->place }}</td>
            </tr>


        @endforeach
        </tbody>
    </table>
</div>
