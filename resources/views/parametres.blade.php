@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Profil')




@section('content')
        <div class="col-12 mt-5">
            <div class="row h-100">
                <div class="col-12 mt-5">
@foreach($select as $user)
                    <div>My id is : {{$user->id}} and my name is {{$user->name}}</div>
@endforeach
                </div>
            </div>
        </div>
@endsection