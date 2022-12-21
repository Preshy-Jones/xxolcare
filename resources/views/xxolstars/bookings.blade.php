@extends('layouts.app')

@section('content')
    <livewire:xxolstar-bookings :completedBookings="$completedBookings" :inProgressBookings="$inProgressBookings"/>
@endsection
