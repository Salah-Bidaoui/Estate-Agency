@extends('admin.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Profile') }}</h1>
      @if (count($errors) > 0)
         @include('app.includes.alerts')
      @endif
   </div>

@endsection
