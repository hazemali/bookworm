@extends('layouts.app')

@section('title', 'Books')
    
@section('content')
<div class="container">
    <div class="row justify-content-end mb-5">
        <div class="col-auto">
            <a href="/books/create"> New Book </a>
        </div>
    </div>
    <div class="row">
        @if ($books->count())
        @foreach ($books as $book)
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card">
                <div class="card-header text-center">
                <a href="/books/{{$book->id}}" class="text-primary"> {{$book->title}}</a>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center text-center" 
                style="height:200px; overflow:hidden">
                    <p>
                        {{$book->summary}}
                    </p>
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
        @endforeach
            
        @else
        <em> u don`t have any books yet... Start Adding !!</em>
        @endif        
    </div>
</div>
    
@endsection