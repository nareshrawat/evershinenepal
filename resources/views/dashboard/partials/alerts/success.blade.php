@if(Session::has('flash_message'))
<div class="alert alert-info">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success!</strong> {{ Session::get('flash_message') }}
</div>
@endif
