@extends('layout')

@section('header')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
            <a class="navbar-brand" href="{{route('home')}}">
                Phone book
            </a>
        </nav>
@endsection

@section('content')
    @if (count($users))
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- ./table-responsive-->

        {{$users->links()}}

    @endif
@endsection
