
@extends('tamplates.template')
@section('page1')

<div class="container">
    <h2>Basic Table1</h2>
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
@foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->place }}</td>
            </tr>


@endforeach
            </tbody>
    </table>
</div>

@endsection
@include('second')
@include('third')


