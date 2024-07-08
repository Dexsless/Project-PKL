@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container">
    <div class="mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Overview</h5>
                <p class="card-subtitle mb-2 text-body-secondary"><strong>Hello @if(Auth::check())
                        {{ Auth::user()->name }}</strong>,
                    @endif Welcome back </p>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Saldo Kamu</h5>
                <h1 class="card-subtitle mb-2 text-body-secondary">Rp. 5000000</h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class=" d-flex align-items-end flex-column">
                    <p class="card-text mb-0">Pemilik Saldo</p>
                    <p style="padding-right: 20px;">@if(Auth::check())
                    {{ Auth::user()->name }} @endif</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
