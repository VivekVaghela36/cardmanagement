@extends('layouts.default')
@section('content')
<div class="container">
<a href="{{ route('card.create') }}" title="Add New" class="btn btn-success">Add Card</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Person Name</th>
        <th scope="col">Email</th>
        <th scope="col">Short Description</th>
        <th scope="col">Contacts</th>
        <th scope="col">Single Address</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
       
        @if (count($card) == 0)
        <tr>
        <tb scope="row">You Haven't Added Any Card Yet</tb>
        </tr>
        @else
            @foreach ($card as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{ $item->person_name }}</td>
                <td>{{ $item->email  }}</td>
                <td>{{ $item->short_description }}</td>
                <td>{{ $item->contacts }}</td>
                <td>{{ $item->single_address }}</td>
                <td><a href="{{ url('card/'.$item->id) }}">Edit</a></td>
                <td><form method="POST" action="{{ url('card/destroy/'.$item->id) }}">
                    {{ csrf_field() }}
                    
                    <button type="submit">Delete</button>
                </form></td>
            </tr>
            @endforeach
        @endif
      
     
    </tbody>
  </table>
</div>
@stop