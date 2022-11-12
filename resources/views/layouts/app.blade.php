@extends('layouts.master')

@section("wrapper")
    <div class="">
        @includeIf("layouts.navbar")
        <div class="">
            @yield("content")
        </div>
    </div>
@endsection
