@extends('layouts.app')

@section('content')

<livewire:services :service="$service" :pricingIds="$pricingIds" />

@endsection
