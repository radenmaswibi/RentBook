@extends('layouts.main')

@section('title', 'dashboard')

    @section('content')
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">No Handpone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
       
        <tbody>
            @foreach ($data as $datas)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $datas->name }}</td>
            <td>{{ $datas->email }}</td>
            <td>{{ $datas->no_hp }}</td>
            <td>{{ $datas->addres }}</td>
            <td>
              <form action="{{route('deleteUser', $datas->id)}}" method="post">
                @csrf
                    <a href="{{route('editUser', $datas->id)}}" class="btn btn-primary">EDIT</a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm ('hapus bang')">Delete</button>
                </form>
            </td>
            @endforeach
          </tr>
        </tbody>
      </table>
    @endsection