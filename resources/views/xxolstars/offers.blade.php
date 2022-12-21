@extends('layouts.app')

@section('content')

    <livewire:offers :bookings="$bookings" :specializations="$specializations"/>

@endsection
