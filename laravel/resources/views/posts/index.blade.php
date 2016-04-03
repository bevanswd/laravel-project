@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
    <div class="row">
        <div class="col-md-10">
            <h1>Your Logs</h1>
        </div>

        <div class="col-md-2">
            
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New</a>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">        
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Business Name</th>
                    <th>Address</th>
                    <th>Certified?</th>
                    <th>Message</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->fname }} {{ $post->lname }}</td>
                            <td>{{ $post->bname }}</td>
                            <td>{{ $post->address }} {{ $post->city }} {{ $post->state }} {{ $post->zip }}</td>
                            <td>{{ $post->cmail }}</td>
                            <td>{{ $post->message }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop