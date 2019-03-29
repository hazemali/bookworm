@extends('layouts.app')

@section('title', 'Bookworm - Edit Book')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-8">
                <div class="card">
                    <div class="card-header text-center">
                        Edit Book
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/books/{{$book->id}}">
                            @method("PATCH")
                            @csrf
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <input type="text"  name="title" placeholder="Book Title" value="{{$book->title}}"
                                    class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"/>
                                    @if ($errors->has("title"))
                                        <span class="text-danger">{{$errors->first('title')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <textarea rows="10" name="summary" placeholder="Book Summary" 
                                    class="form-control {{$errors->has('summary') ? 'is-invalid' : ''}}">{{$book->summary}}</textarea>
                                    @if ($errors->has("summary"))
                                        <span class="text-danger">{{$errors->first('summary')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-between" style="margin: 10px">
                                <div class="col-auto">
                                    <button class="btn btn-success" type="submit"> Update Book </button>
                                </div>

                                <div class="col-auto">
                                    <a href="/books"> Cancel </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection