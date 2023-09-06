@extends('layout/admin')

@section('title','Data Keluhan')

@section('action5','active')

@section('container')
<div class="container d-flex justify-content-between">
        <div class="row-i-c">
            <p class="title">Data <span>Keluhan</span></p>
            <div class="keluhan">
                <ul class="list-group">
                    @foreach( $complaints as $complaint )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $complaint->nama }}
                        <a href="/complaints/{{ $complaint->id }}" class="badge badge-pill badge-info">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection