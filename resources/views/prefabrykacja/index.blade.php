@extends('layouts.layout') @section('title','Strona główna') @section('content')

@include('errors.FormValidate')

<div class="row" style="padding-top:10px; padding-bottom:10px;">
 @if(( Auth::user()->hasAnyRole('Administrator')) || (Auth::user()->hasAnyRole('Dyrektor prefabrykacji')))
    @include('prefabrykacja.FormPost')
    @endif
</div>
<div class="row">
<div class="col-md-12">
    @include('prefabrykacja.TableShowPosts')
        </div>
</div>
@endsection