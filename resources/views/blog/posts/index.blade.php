@extends('layouts.app')

@section('content')
<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            @endforeach
        </tr>
</table>
@endsection