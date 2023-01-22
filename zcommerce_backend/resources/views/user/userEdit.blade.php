<!DOCTYPE html>
<html lang="en">
<head>
@extends('layout.app')
@section('content')

  <div class="mt-5">
     <form action="usersEdit" method="post" class="border p-4 ">
      @csrf
      <input name='id' type="hidden" class="form-control"   value='{{ $user->id }}' >
      <div class="mb-3">
        <label for="1" class="form-label">Name :</label>
        <input name='name' type="text" class="form-control" id="1" placeholder="name" value='{{ $user->name}}'>
      </div>
      <div class="mb-3">
        <label for="2" class="form-label">Email :</label>
        <input name='email' type="text" class="form-control" id="2" placeholder="email" value='{{ $user->email}}'>
      </div>
      {{-- <div class="mb-3">
        <label for="4" class="form-label">Role :</label>
        <input name='roles' type="text" class="form-control" id="4" placeholder="write admin/customer" value='{{ $user->roles == 1 ? "customer" : "admin"}}'> 
      </div> --}}
      <div class=" mb-3">
        <label class="form-label" for="inputGroupSelect01">Role :</label>
        <select name='roles' class="form-select" id="inputGroupSelect01">
          <option selected disabled>Choose Role</option>
          <option value="admin">Admin</option>
          <option value="customer">Customer</option>
        </select>
      </div>
      <div class="d-flex justify-content-between">
        <input type="submit" class='btn btn-primary' value="Edit Product">
        <button onclick="window.location.href='{{route('users')}}'" type="button" class='btn btn-danger' >Back</button>
      </div>
     </form>
     
  </div>
@endsection