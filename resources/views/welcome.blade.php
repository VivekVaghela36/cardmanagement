@extends('layouts.default')
@section('content')
<div class="header-row">
    <nav class="header-nav-top">
       <ul class="nav nav-pills">
          <li class="nav-item"><a href="{{ route('card.list') }}" class="btn btn-success">Card List</a></li>
       </ul>
    </nav>
 </div>
 <div class="container">
<div role="main" class="main">
   @foreach ($card as $item)
   <div class="card text-center">
      <div class="card-header">
        {{ $item->person_name }}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $item->email }}</h5>
        <h4 class="card-title">{{ $item->contacts }}</h4>
        <p class="card-text">{{ $item->short_description	 }}</p>
        <p class="card-text">{{ $item->single_address	 }}</p>
      </div>
   </div>
   @endforeach
</div>
</div>
@stop