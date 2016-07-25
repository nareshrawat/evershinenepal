@extends('dashboard.layouts.master')
@section('title', 'All Pages')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
        @include('dashboard.partials.alerts.success')

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Pages</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Title</th>
              <th>Slug</th>
              <th>Description</th> 
              <th style="text-align: center;">Action</th>
               

            </tr>
            </thead>
            <tbody>
             @foreach($pages as $page)
            <tr>
              <td>{{ $page->title }}<br><br>
                
              </td>
              <td>{{ $page->slug }}</td>
              <td>{{ $page->description }}</td>
              
              <td>
              <button class="btn btn-default btn-block">
                <a href="#">Edit</a>
              </button>


                {!! Form::open(['method' => 'DELETE', 'route'=>['dashboard.pages.destroy', $page->id]]) !!}
                {!! Form::submit('Move to Trash', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}

                <form action="{{ url('dashboard/pages/'. $page->id .'/force-delete')}}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-block">Delete</button>
                
                </form>
              </td>
            </tr>
             @endforeach
            </tbody>
            
          </table>
          {{ $pages->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

</div>
    
@endsection

