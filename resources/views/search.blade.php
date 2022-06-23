@extends('layout')
@section('header')
    @if (count($users))
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3">
        <a class="navbar-brand" href="{{route('home')}}">
            Phone book
        </a>
        <a class="navbar-brand">
            Search substring: {{$s}}
        </a>
    </nav>
    @else
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-3">
            <a class="navbar-brand" href="{{route('home')}}">
                Phone book
            </a>
            <a class="navbar-brand">
                Search substring: {{$s}}
            </a>
        </nav>
    @endif
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

{{--        {{$users->links()}}--}}
        {{$users->appends(['s'=> request()-> s])->links() }}
    @else
        <h1>
            There is no result!
        </h1>
    @endif
@endsection

@section('error')

@endsection

