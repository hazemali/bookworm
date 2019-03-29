@extends('layouts.app')

@section('title', "Bookworm - $book->title")
    
@section('content')

<div class="container">
    <div class="row justify-content-end mb-5">
        <div class="col-auto">
            <a href="/books"> Back To My Books </a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="text-primary">{{$book->title}}</h2>
                </div>
                <div class="card-body">
                    {{$book->summary}}
                </div>
                <div class="card-footer">
                    <div class="row justify-content-between align-items-center" style="height:30px">
                        <div class="col-auto text-center">
                            <a href="/books/{{$book->id}}/edit"> Edit Book </a>
                        </div>
                        <div class="col-auto text-center">
                            <form method="POST" action="/books/{{$book->id}}">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-link" type="submit"> Remove Book </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
    
@endsection