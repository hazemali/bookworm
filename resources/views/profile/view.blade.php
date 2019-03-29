@extends('layouts.app')

@section('title', "Bookworm-profile")
    
@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="text-primary">{{Auth::user()->name}}</h2>
                </div>
                <div class="card-body">
                    <h4>
                    <b> Email: </b>
                    
                    {{Auth::user()->email}}
                    </h4>
                    <h4>
                        <b>Bio:</b>
                        @if (Auth::user()->bio)
                            {{Auth::user()->bio}}
                                
                        @else
                            no bio provided
                        @endif
                    </h4>
                    

                

                </div>
                <div class="card-footer">
                    <div class="row justify-content-between">
                        <div class="col-auto text-center">
                            <a href="#"> Edit Profile </a>
                        </div>
                        <div class="col-auto text-center">
                            <a href="#"> Delete Account </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
    
@endsection