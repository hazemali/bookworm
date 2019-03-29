@extends('layouts.app')
    
@section('content')
<div class="container">
 
    WELCOME {{ Auth::user()->name }}
</div>
@endsection

