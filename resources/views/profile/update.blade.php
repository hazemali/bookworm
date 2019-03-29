@extends('layouts.app')

@section('title', 'Bookworm - Edit Profile')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-8">
                <div class="card">
                    <div class="card-header text-center">
                        Edit Profile
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/profile/{{Auth::user()->id}}">
                            @method("PATCH")
                            @csrf
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <input type="text"  name="name" placeholder="Your Name" value="{{Auth::user()->name}}"
                                    class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"/>
                                    @if ($errors->has("name"))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <input type="email"  name="email" placeholder="Your Email" value="{{Auth::user()->email}}"
                                    class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"/>
                                    @if ($errors->has("email"))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <textarea rows="10" name="bio" placeholder="Your Bio" 
                                    class="form-control {{$errors->has('bio') ? 'is-invalid' : ''}}">{{Auth::user()->bio}}</textarea>
                                    @if ($errors->has("bio"))
                                        <span class="text-danger">{{$errors->first('bio')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row" style="margin: 10px">
                                <div class="col-12" style="min-height:50px">
                                    <input type="password"  name="password" placeholder="Your Password" value="{{Auth::user()->password}}"
                                    class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"/>
                                    @if ($errors->has("password"))
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-between" style="margin: 10px">
                                <div class="col-auto">
                                    <button class="btn btn-success" type="submit"> Update Profile </button>
                                </div>

                                <div class="col-auto">
                                    <a href="/profile"> Cancel </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection