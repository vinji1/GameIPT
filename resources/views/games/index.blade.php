@extends('base')

@extends('navbar')

@section('title', 'Games')

@section('content')
    <div class="container m-5">
        <div class="row">
            <div class="col-sm-4">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <livewire:games.create/>
            </div>
            <div class="col-md-8">
                <livewire:games.index/>
            </div>
        </div>
    </div>

@endsection
