@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <a href="{{ route('new-drink') }}">Create New Drink</a>
        <ul>
            @foreach ($drinks as $drink)
                <li>
                    <a href="{{ route('show-drink', $drink->id) }}">
                        {{ $drink->name }}
                    </a>
                    <a href="{{ route('edit-drink', $drink->id) }}">EDIT</a>
                    <a href="{{ route('delete-drink', $drink->id) }}">DELETE</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
