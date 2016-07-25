@extends('dashboard.layouts.master')
@section('title', 'Add New Page')

@section('content')

<div class="content-wrapper">
<div class="col-sm-12">
  <div class="col-sm-12">
    <section class="content-header">
      <h1>
        Add New Page
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"> Add Page</li>
      </ol>
    </section>
    <div class="box box-info">

      {!! Form::open([
          'route' => 'dashboard.pages.store', 'class' => 'form-horizontal', 'files' => true
      ]) !!}

        @include('dashboard.pages.form')
          
      {!! Form::close() !!}

    </div>
  </div>

</div>
</div>


@endsection

