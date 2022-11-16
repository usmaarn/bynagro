@extends('layouts.master')

@section("wrapper")
    <div class="">

        <x-navbar />

        <div class="">
            @yield("content")
        </div>

        <x-footer />

    </div>
@endsection
