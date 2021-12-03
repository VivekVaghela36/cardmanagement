@extends('layouts.default')
@section('content')
<div class="container">
    
<form>
    @csrf
    <input type="hidden" name="card_id" id="card_id" value="{{ $type =='edit' ? $card->id : '' }}">
    <div class="form-group">
        <label for="person_name">Person Name</label>
        <input type="text" class="form-control" id="person_name" @if ($type =='edit') value="{{ $card->person_name }}" @endif name="person_name" placeholder="Enter Your Name">
        <span class="person_name"></span>
      </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" @if ($type =='edit') value="{{ $card->email }}" @endif id="email" name="email" placeholder="Enter Your Email">
      <span class="email"></span>
    </div>
    <div class="form-group">
      <label for="contacts">Contacts</label>
      <input type="number" class="form-control" @if ($type =='edit') value="{{ $card->contacts }}" @endif id="contacts" name="contacts" placeholder="Enter Your Contact Number">
      <span class="contacts"></span>
    </div>
    <div class="form-group">
      <label for="short_description">Short Description</label>
      <textarea class="form-control" id="short_description" name="short_description" rows="3">@if ($type =='edit') {{ $card->short_description }}@endif</textarea>
      <span class="short_description" > </span>
    </div>
    <div class="form-group">
        <label for="single_address">Single Address</label>
        <textarea class="form-control" id="single_address" name="single_address" rows="3">@if ($type =='edit') {{ $card->single_address }}@endif</textarea>
        <span class="single_address"></span>
    </div>
    <input type="button" onclick="add_Article()"  class="btn btn-success" value="Save" >
  </form>
</div>
@stop