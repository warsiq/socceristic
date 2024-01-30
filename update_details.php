<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/layout.php');

?>      

@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Admin Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <!-- <section class="content"> -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('error_message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Not So Fast!</strong> {{Session::get('error_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(Session::has('success_message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hurrah!!!</strong> {{Session::get('success_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
               <form method="post" action="{{ url('admin/update_details') }}" >@csrf 
                <div class="card-body">
                   <div class="form-group">
                    <label for="admin_email">Email address</label>
                    <input type="email" class="form-control" id="admin_email" value="{{Auth::guard('admin')->user()->email }}" readonly="" style="background-color:grey">
                  </div>
                  
                  <div class="form-group">
                    <label for="admin_name">Name</label>
                    <input type="text" class="form-control"name="admin_name"  id="admin_name" placeholder="Name" value="{{Auth::guard('admin')->user()->name }}">
                  </div>
                  <div class="form-group">
                    <label for="admin_mobile">Phone Number</label>
                    <input type="text" class="form-control" name="admin_mobile" id="admin_mobile" placeholder="Phone-Number" value="{{Auth::guard('admin')->user()->mobile }}">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           


 
          

  @endsection