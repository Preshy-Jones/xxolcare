@extends('layouts.app')

@section('content')

    <livewire:admin.dashboard :users="$users" :xxolstars="$xxolstars"  :number_of_bookings="$number_of_bookings" :number_of_jobs="$number_of_jobs">

@endsection
