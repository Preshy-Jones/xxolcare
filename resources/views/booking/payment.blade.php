@extends('layouts.app')

@section('content')
<livewire:payments :service="$service" :query='$query' />


@endsection
