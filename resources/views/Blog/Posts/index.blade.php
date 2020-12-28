@extends('layouts.app')

@section('content')
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>title</th>
        <th>create At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)

        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
