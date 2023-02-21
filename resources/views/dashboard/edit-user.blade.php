@extends('layouts.main')

@section('title', 'xixi')
    

@section('content')
<form action="{{ route('updateUser', $data->id) }}" method="post">
    @csrf
    <div class="mb-3 text-left">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
    </div>
    <div class="mb-3 text-left">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" >
    </div>
    <div class="mb-3 text-left">
        <label for="no_hp" class="form-label">No Handpone:</label>
        <input type="text" class="form-control" name="no_hp" id="no_hp" maxlength="12" value="{{ $data->no_hp }}" >
    </div>
    <label for="addres" class="form-label">Address:</label>
    <textarea name="addres" class="form-control" name="addres" id="addres" value="{{ $data->addres }}">
    </textarea>
    <br>
    <div class="text-left">
        <button type="submit" class="btn btn-success" onclick="return confirm('yakin bang')">Submit</button>
    </div>
</form>
@endsection