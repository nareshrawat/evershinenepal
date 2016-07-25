<div class="box-body pad">
  @include('dashboard.partials.alerts.success') 
  <h3 class="box-title">
     <small>Page Title</small>
  </h3>
 
 <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
        @endif
    </div>
</div>

<h3 class="box-title">
 <small>Description</small>
</h3>

<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {!! Form::textarea('description', null, ['class' => 'form-control ckeditor']) !!}
        @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="col-sm-4 set-featured-image">

  <div class="box box-info form-horizontal">
    <div class="box-body">
        <h3 class="box-title">
         <small>Select Parent Page</small>
     </h3>
     {!! Form::select('parent', $pageList, isset($page->parent) ? $page->parent : null , ['class' => 'form-control page-list']) !!}
     @if ($errors->has('parent'))
     <span class="help-block">
        <strong>{{ $errors->first('parent') }}</strong>
    </span>
    @endif

</div>    
</div>
</div>

{!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}

</div>